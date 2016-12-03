<?php

$fileName = "../locations_irvine.html";


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
      <img src="images/locations/header_irvine.gif">
      <div id="contactParagraph" style="margin-left: 0px">              
        Please come join us in celebrating the opening of our newest location in Irvine!
        <br>
        <br>
        Phone : 949-468-3660<br>
        Fax : 949-468-3665 <br>
        <br>
        Located at:<br>
        6460 Irvine Blvd<br>
        Irvine, CA  92620<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <img src="images/locations/red_sep.gif"><br>  
        <br>    
         
        <table width="310" align="left" cellspacing="1" border="0">
          <tr>
            <td class="locationHours">Open 7 Days :</td>
            <td class="locationHours">
              Sun. - Thurs:  11 am - 9 pm<br> 
        		    Fri. & Sat.:  11 am - 10 pm<br>
            </td>             
           </tr>
        </table>  
        
        <br>
      </div>
    </td>
    
    <td width="430" align="center" valign="top">
      <img src="images/locations/map_irvine.gif">
    </td>
  </tr>
</table>

EOD;

$page->save_page($fileName);
?>
