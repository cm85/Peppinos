#!/usr/bin/perl
#
# query.pl
# Copyright (c) 1996-1999 SurfUtah.Com
# written by Rus Berrett
#
# $Id: query.pl,v 4.4 1999/09/21 20:51:26 rus Exp $
#
# somewhat simple CGI interface to SWISH-E
# SWISH-E website- http://sunsite.berkeley.edu/SWISH-E/
#

##############################################################################
# initialization and configuration

require 'util.pl';

# check_referer("your-domain.name", "another-domain.name);

# whereis swish
$swishexec = "/usr/local/swish-e-2.4.7/bin/swish-e";
unless (-e "$swishexec") {
  # ah jimminy christmas
  $errmsg = "Request failed due to improper script configuration.\n";
  $errmsg .= "Cannot find \"$swishexec\".  Please check your configuration\n";
  $errmsg .= "settings at the top of the $ENV{'SCRIPT_NAME'} file.\n<p>\n";
  return_error("Cannot open $swishexec", $errmsg);
}

# variable used to convert a URL into a filename
#$filename_prefix = $ENV{'DOCUMENT_ROOT'} . "/";
$filename_prefix = "/usr/home/" . $ENV{'USERID'} . "/www/htdocs/";

##############################################################################
# parse for input

# get the form data
&parse_form_data(*array);

##############################################################################
# error checking
#
# required variables:   swishindex, keywords
# optional fields:      maxresults
#

if ($array{'swishindex'} eq "") {
  # not happy crappy
  $errmsg = "The form is incomplete.... no \"swishindex\" variable is ";
  $errmsg .= "specified.\n";
  return_error("Swishindex Variable Not Specified", $errmsg);
}

if ($array{'keywords'} eq "") {
  # not happy crappy
  $errmsg = "Your search request has been rejected due to insufficient ";
  $errmsg .= "information.  Please provide one or more keywords.\n<p>\n";
  $errmsg .= "search example 1: john and doe or jane<br>\n";
  $errmsg .= "search example 2: john and (doe or jane)<br>\n";
  $errmsg .= "search example 3: not (john or jane) and doe<br>\n<p>\n";
  return_error("Data Incomplete", $errmsg);
}

##############################################################################
# process the data

# check for valid characters in maxresults
if ($array{'maxresults'} =~ /[^0-9]/) {
  $array{'maxresults'} =~ s/[^0-9]//g;
}

# check for valid characters in swishindex
if ($array{'swishindex'} =~ /[^a-zA-Z0-9-_\.\/]/) {
  $array{'swishindex'} =~ s/[^a-zA-Z0-9-_\.\/]//g;
}

# check for valid characters in keywords
if ($array{'keywords'} =~ /[^a-zA-Z0-9-_\.\/\ \(\)ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏĞÑÒÓÔÕÖØŒŠÙÚÛÜİŸŞàáâãäåæçèéêëìíîïğñòóôõöøœšßùúûüışÿ¸¡¿]/) {
  $array{'keywords'} =~ s/[^a-zA-Z0-9-_\.\/\ \(\)ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏĞÑÒÓÔÕÖØŒŠÙÚÛÜİŸŞàáâãäåæçèéêëìíîïğñòóôõöøœšßùúûüışÿ¸¡¿]//g;
}

# set up begin, maxdisplay, and maxresults if not specified
$array{'begin'} =~ s/[^0-9]//g;
if (($array{'begin'} eq "") || ($array{'begin'} eq "0")) {
  $array{'begin'} = 1;
}
$array{'maxdisplay'} =~ s/[^0-9]//g;
if (($array{'maxdisplay'} eq "") || ($array{'maxdisplay'} eq "0")) {
  $array{'maxdisplay'} = 10;
}
$array{'maxresults'} =~ s/[^0-9]//g;
if (($array{'maxresults'} eq "") || ($array{'maxresults'} eq "0")) {
  $array{'maxresults'} = 80;
}

# don't allow long entries to munge the command 
$array{'keywords'} = substr($array{'keywords'}, 0, 128); 
$array{'swishindex'} = substr($array{'swishindex'}, 0, 128);
$array{'maxresults'} = substr($array{'maxresults'}, 0, 128);

# build the command string
$command = "$swishexec -f \"$array{'swishindex'}\" -w \"$array{'keywords'}\""; 
if ($array{'maxresults'} ne "") {
  $command .= " -m $array{'maxresults'}";
}

# everything is happy, print out a response with the search results
print_header_info("Search Results - $array{'keywords'}");
print "\n<!-- $command -->\n\n";
print <<ENDTEXT;
<h2>Search Results</h2>
<center>
<table cellpadding=0 cellspacing=0 width=90%>
<tr><td>
  <table cellpadding=4 cellspacing=1 width=100%><tr>
  <td bgcolor="#ddddff"><b>Query: <font size="+1">$array{'keywords'}</font></td>
  </tr></table>
</td></tr>
<tr>
<td>
ENDTEXT

if ($array{'detail'} eq "yes") {
  # prep the verbose report stuff
  $array{'keywords'} =~ s/ or / /g;
  $array{'keywords'} =~ s/ and / /g;
  $array{'keywords'} =~ s/ not / /g;
  @kw = split(/\s/, $array{'keywords'});
  for ($index=0; $index<=$#kw; $index++) {
    $kw[$index] =~ s/[().,:;]//g;
    print "<!-- $kw[$index] -->\n";
  }
}

$hitcount = 0;
$opentable = 1;
open(SWISH, "$command |");
while (<SWISH>) {
  # results of swish can be-
  #         line beginning with "#"
  #         line beginning with "."
  #         line beginning with "err"
  #         line beginning with "search words:"
  #         line beginning with relevance rank [0-9]
  if (/^\./) {
    last;
  }
  elsif (/^err:/) {
    print <<ENDTEXT;
<table cellpadding=3 cellspacing=1 width=100%>
<tr>
<td bgcolor=\"#dddddd" align=left valign=top>$_</td>
</tr>
ENDTEXT
    last;
  }
  elsif (/^[0-9]/) {
    $hitcount++;
    next if (($hitcount < $array{'begin'}) || 
             ($hitcount >= ($array{'begin'} + $array{'maxdisplay'})));
    if ($opentable) {
      $opentable = 0;
      print <<ENDTEXT;
<table cellpadding=4 cellspacing=1 width=100%>
<tr>
<td bgcolor=\"#dddddd" align=right valign=top><font size=\"-1\"><b>Rank</b></font></td>
<td bgcolor=\"#dddddd" align=left><font size=\"-1\"><b>Title</b></font></td>
<td bgcolor=\"#dddddd" align=right valign=top><font size=\"-1\"><b>File Size</b></font></td>
</tr>
ENDTEXT
    }
    chop;
    # can't simply split because spaces can exist in title
    $firstspace = index("$_", "\ ", 0); 
    if ($firstspace == -1) {
      next;
    }
    $secondspace = index("$_", "\ ", ($firstspace+1)); 
    if ($secondspace == -1) {
      next;
    }
    $lastspace = rindex("$_", "\ ");
    if ($lastspace == -1) {
      next;
    }
    $rank = substr($_, 0, $firstspace);
    $url = substr($_, ($firstspace+1), ($secondspace-$firstspace-1));
    $title = substr($_, ($secondspace+2), ($lastspace-$secondspace-3));
    $numbytes = substr($_, ($lastspace+1));
    $details = "";
    if ($array{'detail'} eq "yes") {
      if ($url =~ /^http:\/\//) { 
        $url =~ /^http:\/\/([A-Za-z0-9-.]*)\/(.*)/;
        $pathinfo = $2; 
      }
      else {
        $url =~ /^\/(.*)/;
        $pathinfo = $1;
      }
      $filename = $filename_prefix . $pathinfo;
      $details = &build_occurrences($filename); 
      if ($details ne "") {
        $details = "<br>" . $details;
      }
    }
    print <<ENDTEXT;
<tr>
<td bgcolor=\"#eeeeee" align=right valign=top>$hitcount.</td>
<td bgcolor=\"#eeeeee" align=left><a href=\"$url\">$title</a>$details</td>
<td bgcolor=\"#eeeeee" align=right valign=top>$numbytes&#160;bytes</td>
</tr>
ENDTEXT
  }
}
close(SWISH);

print "</table>\n";

if ($hitcount > $array{'maxdisplay'}) {
  $index = 1;
  $shortcuts = "";
  while ($index < $hitcount) {
    $shortcuts .= "[";
    if ($index != $array{'begin'}) {
      $ENV{'QUERY_STRING'} =~ s/(\&begin=\d*)//g;
      print "<!-- replaced $1 with &begin=$index -->\n";
      $shortcuts .= "<a href=\"$ENV{'SCRIPT_NAME'}?$ENV{'QUERY_STRING'}";
      $shortcuts .= "&begin=$index\">";
    }
    $end = $index + $array{'maxdisplay'} - 1;
    $end = $hitcount if ($end > $hitcount);
    if ($end == $index) {
      $shortcuts .= "$index";
    }
    else {
      $shortcuts .= "$index-$end";
    }
    if ($index != $array{'begin'}) {
      $shortcuts .= "</a>";
    }
    $shortcuts .= "]";
    $index += $array{'maxdisplay'};
  }
  print <<ENDTEXT;
<tr><td>
  <table cellpadding=4 cellspacing=1 width=100%><tr>
  <td align=center bgcolor="#ddddff">Jump to: $shortcuts</td>
  </tr></table>
</td></tr>
ENDTEXT
}

print <<ENDTEXT;
</td>
</tr>
</table>
</center>
<p>
<p align=right>
<a onClick="history.go(-1); return false"
   href="$ENV{'HTTP_REFERER'}">Back to the query form</a>
</p>
ENDTEXT

print_footer_info();

##############################################################################
##############################################################################

##############################################################################
# build the occurrences of keywords in file, i'm amazed this thing works
sub build_occurrences
{
  local($myfilename) = @_;
  local($wb_length, $filecontents, $occurrences);
  local($bfindex, $print_count, $word, $start, $match, $mkw);
  local($closed_phrase, $index, $prevword, @prevwords);

  # word boundary count -- how many words should we include with keyword 
  $wb_length = 5;

  $filecontents = $occurrences = "";
  if (open(FILENAME, "$myfilename")) {
    while (<FILENAME>) {
      $filecontents .= $_;
    }
    close(FILENAME);
    $filecontents =~ s/\n/ /g;
    $filecontents =~ s/&#[0-9]+;/ /g;
    $filecontents =~ s/<!--(.*?)-->//g;
    $filecontents =~ s/<(.*?)>//g;
    $filecontents =~ s/\s+/ /g;

    $bfindex = $print_count = 0;
    while ($filecontents =~ /(\S*)/g) {
      $word = $&;
      next if ($word eq "");
      $prevwords[$bfindex % $wb_length] = "0:$word";
      $match = 0;
      for ($index=0; $index<=$#kw; $index++) {
        if ($word =~ /$kw[$index]/i) {
          # matches a keyword
          $mkw = $&;
          $match = 1;
          last;
        }
      }
      if ($match) {
        if (($print_count > 0) || ($closed_phrase == 1)) {
          $start = $bfindex;
        }
        else {
          $start = $bfindex-$wb_length+1;
          $start = 0 if ($start < 0);
        }
        if (($bfindex > 1) && ($print_count == 0) &&
            ($closed_phrase == 0) &&
            ($prevwords[$start % $wb_length] =~ /^0\:/)) {
          $occurrences .= "... ";
        }
        for ($index=$start; $index <= ($bfindex-1); $index++) {
          if ($prevwords[$index % $wb_length] =~ /^0\:/) {
            $prevword = substr($prevwords[$index % $wb_length], 2);
            $prevwords[$index % $wb_length] = "1:$prevword";
            $occurrences .= "$prevword ";
          }
        }
        $word =~ s/$mkw/<b>$mkw<\/b>/i;
        $occurrences .= "$word ";
        $print_count = $wb_length-1;
      }
      elsif ($print_count) {
        $occurrences .= "$word ";
        $prevwords[$bfindex % $wb_length] = "1:$word";
        $print_count--;
        if ($print_count == 0) {
          $closed_phrase = 1;
        }
      }
      else {
        $closed_phrase = 0;
      }
      $bfindex++;
      #
      # comment out next line if you want full occurences list
      #
      last if (length($occurrences) > 256);
      #
      # what is the maximum number of words we will search for in a document
      #
      last if ($bfindex > 3000);
    }
    if ($occurrences ne "") {
      $occurrences .= "...";
    }
  }
  $occurrences;
}

##############################################################################
# eof query.pl

