#
# util.pl
# Copyright (c) SurfUtah.Com
# written by Rus Berrett
#
# $Id: util.pl,v 4.4 1999/09/21 20:51:27 rus Exp $
#
# utilities file with common subroutines, used by pretty much all of the 
# CGI library scripts
#

##############################################################################
# print the header information

sub print_header_info
{
  local($title) = @_;

  print "Content-type: text/html\n\n";

  #-------------------------------------------------------
  # begin header, customize below if desired
  #
  print <<ENDHEAD;

<html>
<head>
<title>$title</title>
</head>
<body bgcolor=\"#ffffff\">
<!-- end header -->

ENDHEAD
  #
  # end header, customize above if desired
  #-------------------------------------------------------
}

##############################################################################
# print the footer information

sub print_footer_info
{

  print "<!-- begin footer -->\n";

  #-------------------------------------------------------
  # begin footer, customize below if desired
  #
  print <<ENDFOOT;

<!-- begin footer -->
</body>
</html>

ENDFOOT
  #
  # end footer, customize above if desired
  #-------------------------------------------------------
}

##############################################################################
# get the variables from url encoded data and store in a hash (which is 
# passed in), i.e. parse_form_data(*formdata)

sub parse_form_data
{
  local(*FORM_DATA) = @_;
  local($request_method, $query_string, @key_value_pairs);
  local($key_value, $key, $value);

  $request_method = $ENV{'REQUEST_METHOD'};

  if ($request_method eq "GET") {
    $query_string = $ENV{'QUERY_STRING'};
  } elsif ($request_method eq "POST") {
    read(STDIN, $query_string, $ENV{'CONTENT_LENGTH'});
  } else {   # neither POST nor GET
    $query_string = $ENV{'QUERY_STRING'};
  }

  @key_value_pairs = split(/&/, $query_string);
  foreach $key_value (@key_value_pairs) {
    ($key, $value) = split (/=/, $key_value);
    $key =~ tr/+/ /;
    $value =~ tr/+/ /;
    $value =~ s/\%00//g;
    $value =~ s/%([\dA-Fa-f][\dA-Fa-f])/pack ("C", hex($1))/eg;
    if (defined($FORM_DATA{$key})) {
      $FORM_DATA{$key} = join("|||", $FORM_DATA{$key}, $value);
    } else {
      $FORM_DATA{$key} = $value;
    }
  }
}

##############################################################################
# get the variables from url encoded data and store in a hash (which is 
# passed in), i.e. parse_form_data(*formdata).  don't do the join stuff.

sub parse_form_data_no_append
{
  local(*FORM_DATA) = @_;
  local($request_method, $query_string, @key_value_pairs);
  local($key_value, $key, $value);

  $request_method = $ENV{'REQUEST_METHOD'};

  if ($request_method eq "GET") {
    $query_string = $ENV{'QUERY_STRING'};
  } elsif ($request_method eq "POST") {
    read(STDIN, $query_string, $ENV{'CONTENT_LENGTH'});
  } else {   # neither POST nor GET
    $query_string = $ENV{'QUERY_STRING'};
  }

  @key_value_pairs = split(/&/, $query_string);
  foreach $key_value (@key_value_pairs) {
    ($key, $value) = split (/=/, $key_value);
    $key =~ tr/+/ /;
    $value =~ tr/+/ /;
    $value =~ s/\%00//g;
    $value =~ s/%([\dA-Fa-f][\dA-Fa-f])/pack ("C", hex($1))/eg;
    $FORM_DATA{$key} = $value;
  }
}

##############################################################################
# print an error

sub return_error
{
  local($title, $message) = @_;

  print_header_info($title);

  print <<ENDERROR;
<h2>$title</h2>
$message
<p>
ENDERROR

  print_footer_info();
  exit(1);
}

##############################################################################
# check http referer (sic)

sub check_referer
{
  local(@valid_referers) = @_;
  local($referer);

  $referer = "";
  if ($ENV{'HTTP_REFERER'} =~ /^http(.*)\/\/([a-zA-Z0-9:.]*)\/(.*)/) {
    $referer = $2;
    ($referer) = (split(/\:/, $referer))[0];
  }

  foreach $valid_ref (@valid_referers) {
    return if ($referer =~ /$valid_ref$/);
  }

  # not happy crappy
  $errmsg = "Your HTTP_REFERER, \"$ENV{'HTTP_REFERER'}\" ";
  $errmsg .= "(hostname=$referer), is not valid.";
  return_error("Invalid HTTP_REFERER", $errmsg);
}

##############################################################################
# split message into lines specified characters long

sub split_text
{
  local ($maxchar, $text) = @_;
  local ($index, $si, $newline, @lines);

  $index = 0;
  while ($text ne "") {
    $ni = index($text, "\n");
    if ($ni == -1) {
      $newline = $text;
      $text = "";
    }
    else {
      $newline = substr($text, 0, ($ni+1));
      $text = substr($text, ($ni+1));
    }
    while (length($newline) > $maxchar) {
      $si = rindex($newline, " ", $maxchar);
      $lines[$index++] = substr($newline, 0, ($si+1)) . "\n";
      $newline = substr($newline, ($si+1));
    }
    $lines[$index++] = $newline;
  }
  return(@lines);
}

##############################################################################
# eof util.pl

1;

