<?php

$fileName = "../locations_missionviejo.html";


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
      <img src="images/locations/header_missionviejo.gif">
      <div id="contactParagraph" style="margin-left: 0px">       
        Peppino's remodeled restaurant on the Lake. Along with remodeling the 
        kitchen, we have expanded the dining area, added a new full service bar 
        with a waiting lounge and a front patio for dining. The rear-dining terrace 
        has been expanded and offers a beautiful view of Lake Mission Viejo.<br>
        <br>
        Phone : 949-859-9556<br>
        FAX : 949-859-6310<br>
        <br>
        Located at:<br>
        27782 Vista Del Lago # 26<br>
        Mission Viejo, CA 92692<br>
        <br>
        <br>
        <br>        
        <img src="images/locations/red_sep.gif"><br>  
        <br>             
        <table width="310" align="left" cellspacing="1" border="0">
          <tr>
            <td class="locationHours">Open 7 Days :</td>
            <td class="locationHours">
              Mon. - Thurs: 4 pm - 9:30 pm<br>
		          Fri. - Sun.: 11 am - 10:30 pm<br>
            </td>             
           </tr>
        </table>  
        
        <br>
      </div>
    </td>
    
    <td width="430" align="center" valign="top">      
      <img src="images/locations/map_missionviejo.gif">
    </td>
  </tr>
</table>

EOD;

$page->save_page($fileName);
?>
