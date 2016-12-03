<?php

$fileName = "../locations_lakeforest.html";


$page = new VarPage;
$page->templatefile = "include/template.html";
$page->varnamelist = "title,content,pageheight,sidemenubg_height";

// The Two Variables Below set the total page height - adjust
// only contentheight, the sidebar will auto-adjust to content
// adjust to desired height for every page
$page->contentheight = 500;
$page->sidemenubg_height = $page->contentheight - 292;

$page->title = "Orange County Italian food tradition since 1984";
$page->content = <<<EOD

<br>
<br>
<table width="750" align="center" cellspacing="5" cellpadding="0" border="0">
  <tr>
    <td width="320" valign="top">
      <img src="images/locations/header_lakeforest.gif">
      <div id="contactParagraph" style="margin-left: 0px">
        Come enjoy the Italian atmosphere at the Original Peppino's. You can 
        still see the family working at this location: Mom loves greeting 
        you and seating you at your table. Dad, the big flirt, loves to visit 
        with all the customers. Be sure to stop in to Joe's Place, A Martini Bar. 
        Happy Hour is available from 4:00 pm to 7:00 pm Monday through Friday. 
        Watch your favorite sporting events on one of several TV's. If 
        you're lucky, you may even catch Peppino (Joe) mingling with the 
        customers.<br>
        <br>
        Phone : 949-951-2611<br>
        FAX : 949-951-3289<br>
        <br>
        Located at:<br>
        23600 Rockfield Blvd.<br>
        Lake Forest, CA 92630<br>
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
      <img src="images/locations/map_lakeforest.gif">
    </td>
  </tr>
</table>

EOD;

$page->save_page($fileName);
?>
