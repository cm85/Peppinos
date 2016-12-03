<?php

$fileName = "../news.html";


$page = new VarPage;
$page->templatefile = "include/template.html";
$page->varnamelist = "title,content,pageheight,sidemenubg_height";

// The Two Variables Below set the total page height - adjust
// only contentheight, the sidebar will auto-adjust to content
// adjust to desired height for every page
$page->contentheight = 828;
$page->sidemenubg_height = $page->contentheight - 292;

$page->title = "Orange County Italian food tradition since 1984";
$firstPart = <<<EOD

<br>
<table width=710 border=0 cellpadding=0 cellspacing=0 align=center>
  <tr>
      
    <td width=710 valign=top align=center>  
      <br>
      <img src="images/news_events/header.gif">
      <br>
      <br>
      <br>
      <!-- Top of News box (shadow image) -->
      <div id="newsBoxTop">
        &nbsp;
      </div>
      
      <!-- Actual News -->
      <div id="newsBoxBody">
EOD;

// Open HTML file that has news and assign it to variable
$fName = "news_events.html";
$fd = fopen($fName, "r");
$htmlPage = fread($fd, filesize($fName));
fclose($fd);

// Finish Page
$secondPart = <<<EOD
      
      </div>                  
    </td>
  </tr>
</table>

EOD;

$page->content = $firstPart . $htmlPage . $secondPart;

$page->save_page($fileName);
?>
