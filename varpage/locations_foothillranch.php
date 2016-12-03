<?php

$fileName = "../locations_foothillranch.html";


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

<br>
<br>
<table width="750" align="center" cellspacing="5" cellpadding="0" border="0">
  <tr>
    <td width="320" valign="top">
      <img src="images/locations/header_foothillranch.gif">
      <div id="contactParagraph" style="margin-left: 0px">              
        Come and join us at our Foothill Ranch location! A beautiful setting in 
        the food court on the end opposite Regal Cinemas. Our location provides 
        lots of room for your large events and yet remains cozy and intimate for 
        the dinners with a movie. This location has an intimate Martini Bar 
        called "Joe's Place", so come enjoy the relaxed atmosphere.<br>
        <br>
        Phone : 949-951-1210<br>
        FAX : 949-951-1251<br>
        <br>
        Located at:<br>
        26612 Towne Centre Dr<br>
        Foothill Ranch, CA 92610<br>
        <br>
        <br>
        <img src="images/locations/red_sep.gif"><br>  
        <br>             
        <table width="310" align="left" cellspacing="1" border="0">
          <tr>
            <td class="locationHours">Open 7 Days :</td>
            <td class="locationHours">
              Sun. - Thurs: 11 am - 9 pm<br> 
        		    Fri. & Sat.: 11 am - 10 pm<br>
            </td>             
           </tr>
        </table>  
        
        <br>
      </div>
    </td>
    
    <td width="430" align="center" valign="top">      
      <img src="images/locations/map_foothillranch.gif">
    </td>
  </tr>
</table>

EOD;

$page->save_page($fileName);
?>
