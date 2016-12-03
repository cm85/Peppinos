<?php

$fileName = "../contact.html";


$page = new VarPage;
$page->templatefile = "include/template.html";
$page->varnamelist = "title,content,pageheight,sidemenubg_height";

// The Two Variables Below set the total page height - adjust
// only contentheight, the sidebar will auto-adjust to content
// adjust to desired height for every page
$page->contentheight = 450;
$page->sidemenubg_height = $page->contentheight - 292;

$page->title = "Orange County Italian food tradition since 1984";
$page->content = <<<EOD

<div id="contactParagraph">
  <img src="images/contact/header.gif"><br>
  <b>PEPPINO’S CORPORATE OFFICES:</b><br>  
  <br>  
  10 Rancho Circle<br>
  Lake Forest, CA 92630<br>
  <br>
  Phone: (949) 951-2879<br>
  <br>  
  Fax: (949) 458-5740<br>
  <br>
  Email: rest_info@peppinosonline.com
</div>

<br style="line-height: 170px;">
<div id="contactStoreHours">Open 7 Days a Week:  Mon-Thurs 11-9  •  Fri & Sat 11-10  •   Sun 11-9</div>

EOD;

$page->save_page($fileName);
?>
