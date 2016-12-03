<?php

$fileName = "../catering.html";


$page = new VarPage;
$page->templatefile = "include/template.html";
$page->varnamelist = "title,content,pageheight,sidemenubg_height";

// The Two Variables Below set the total page height - adjust
// only contentheight, the sidebar will auto-adjust to content
// adjust to desired height for every page
$page->contentheight = 475;
$page->sidemenubg_height = $page->contentheight - 292;

$page->title = "Orange County Italian food tradition since 1984";
$page->content = <<<EOD
<center>
<img src="images/catering/header.gif">
</center>
<br>
<table width=710 border=0 cellpadding=0 cellspacing=0 align=center>
  <tr>
  
    <!-- LEFT SIDE, MOVIE & BUTTONS -->
    <td width=240 valign=top>
      <br>      
      
      <!-- Catering Menu -->
      <div id="cateringButtons"> 
        <A HREF="JavaScript: LaunchCateringMenu(1)"
          onmouseover="roll('cat_catering', 'images/catering/catering_over.jpg')" 
          onmouseout ="roll('cat_catering', 'images/catering/catering.jpg')">
          <IMG SRC="images/catering/catering.jpg" WIDTH="242" HEIGHT="50" BORDER="0" NAME="cat_catering"><br>                                   
        </A>
      </div>
      
      <!-- Print Friendly -->
      <div id="cateringButtons"> 
        <A HREF="images/catering/Cater Print Friendly.pdf" target="_blank"
          onmouseover="roll('cat_print', 'images/catering/printfriendly_over.jpg')" 
          onmouseout ="roll('cat_print', 'images/catering/printfriendly.jpg')">
          <IMG SRC="images/catering/printfriendly.jpg" WIDTH="242" HEIGHT="50" BORDER="0" NAME="cat_print"><br>                                   
        </A>
      </div>
      
       <!-- Party Trays -->
      <div id="cateringButtons"> 
        <A HREF="JavaScript: LaunchCateringMenu(2)"
          onmouseover="roll('cat_party', 'images/catering/partytrays_over.jpg')" 
          onmouseout ="roll('cat_party', 'images/catering/partytrays.jpg')">
          <IMG SRC="images/catering/partytrays.jpg" WIDTH="242" HEIGHT="50" BORDER="0" NAME="cat_party"><br>                                   
        </A>
      </div>
      
      <!-- Email -->
      <div id="cateringButtons"> 
        <A HREF="mailto:catering@peppinosonline.com"
          onmouseover="roll('cat_email', 'images/catering/email_over.jpg')" 
          onmouseout ="roll('cat_email', 'images/catering/email.jpg')">
          <IMG SRC="images/catering/email.jpg" WIDTH="242" HEIGHT="50" BORDER="0" NAME="cat_email"><br>                                   
        </A>
      </div>      
       
    </td>
    
    <!-- RIGHT SIDE WELCOME PARAGRAPH -->  
    <td width=20></td>
    <td width=450 id="cateringParagraph" valign=top>
      <img src="images/catering/cateringforalloccasions.gif">   
      <br>
      Thank you for your interest in allowing Peppino’s to cater your next event.  
      Peppino’s Catering specializes in great food & plenty of it!  Whether you 
      are having a business luncheon for twenty-five or a wedding reception for 
      two hundred, Peppino’s will do its best to make your event perfect and 
      worry free.  Our goal is to gain friends who will come see us in any of our 
      eight locations, not only to cater your one time event, moreover to keep 
      you coming back for more.  We sincerely hope Peppino’s can make that 
      special event as wonderful an experience as dining in our restaurants!!!
    </td>
  </tr>
</table>
<br>
<div style="text-align: right; margin-right: 30px;">
  <img src="images/catering/formoreinfo.gif">
</div>

EOD;

$page->save_page($fileName);
?>
