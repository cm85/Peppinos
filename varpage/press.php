<?php

$fileName = "../press.html";


$page = new VarPage;
$page->templatefile = "include/template.html";
$page->varnamelist = "title,content,pageheight,sidemenubg_height";

// The Two Variables Below set the total page height - adjust
// only contentheight, the sidebar will auto-adjust to content
// adjust to desired height for every page
$page->contentheight = 898;
$page->sidemenubg_height = $page->contentheight - 292;

$page->title = "Orange County Italian food tradition since 1984";
$page->content = <<<EOD

<br>
<br>
<br>
<br>
<center>
<h1> COMING SOON </h1>
</center>

EOD;

$page->save_page($fileName);
?>
