<?php

$fileName = "../locations_alisoviejo.html";


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
      <img src="images/locations/header_alisoviejo.gif">
      <div id="contactParagraph" style="margin-left: 0px">              
        Aliso Viejo is our fabulous Pizzeria, a place where you can get gourmet 
        pizzas such as Pizza alla Giuseppe made fresh to order. We also carry a 
        variety of specialty dishes created and served at this location only, 
        such as the extremely popular Pasta Colorado. This location 
        also has a patio for enjoyable outdoor dining.<br>
        <br>
        Phone : 949 643-1355<br>
        FAX : 949-643-9226<br>
        <br>
        Located at:<br>
        26952 La Paz Road<br>
        Aliso Viejo, CA 92656<br>
        <br>
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
      <img src="images/locations/map_alisoviejo.gif">
    </td>
  </tr>
</table>

EOD;

$page->save_page($fileName);
?>
