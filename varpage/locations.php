<?php

$fileName = "../locations.html";


$page = new VarPage;
$page->templatefile = "include/template.html";
$page->varnamelist = "title,content,pageheight,sidemenubg_height";

// The Two Variables Below set the total page height - adjust
// only contentheight, the sidebar will auto-adjust to content
// adjust to desired height for every page
$page->contentheight = 1350;
$page->sidemenubg_height = $page->contentheight - 292;

$page->title = "Orange County Italian food tradition since 1984";
$page->content = <<<EOD

<div id="locationsStoreHours">Open 7 Days a Week:  Mon-Thurs 11-9  •  Fri & Sat 11-10  •   Sun 11-9</div>
<br>
<table width=710 border=0 cellpadding=0 cellspacing=0 align=center>
  <tr>
  
    <!-- Locations Content -->
    <td width=710 id="locationsParagraph" valign=top>  
      <img src="images/locations/header.gif">
      <br>
      <br>
      <br>
      <br>
      <!-- Lake Forest -->
      <table width=710 border=0 cellpadding=0 cellspacing=0 align=center
        <tr>
          <td width=135 valign=top align=center>
            <img src="images/locations/photo_lakeforest.gif">
            <div id="locationMoreInfo">
              <a href="locations_lakeforest.html">Click for more Info</a>
            </div>
          </td>
          <td width=20></td>
          <td width=555 class="location">
                    
            <span class="locationsTitle">LAKE FOREST PEPPINO’S -</span>
            
            <span class="locationsBody"> 
            Come enjoy the Italian atmosphere at the Original Peppino’s.  You 
            can still see the family working at this location: Mom loves greeting 
            you and seating you at your table.  Dad, the big flirt, loves to visit 
            with all the customers.  Be sure to stop in to Joe’s Place, A Martini 
            Bar.  Happy Hour is available daily from 3:00 pm to 7:00 pm.  Watch 
            your favorite sporting events on one of several TV’s.  If you’re lucky, 
            you may even catch Peppino (Joe) mingling with the customers.<br>
            </span>
            
            <span class="locationsPhone">(949) 951-2611</span>            
            
            <!-- Button -->
            <div id="locationsButtons"> 
              <A HREF="http://peppinos.takeouttech.com/uilayer/clientskins/Peppinos/startup.aspx?LocID=79&cid=22"
                onmouseover="roll('loc_lakeforest', 'images/locations/order_lakeforest_over.jpg')" 
                onmouseout ="roll('loc_lakeforest', 'images/locations/order_lakeforest.jpg')">
                <IMG SRC="images/locations/order_lakeforest.jpg" WIDTH="534" HEIGHT="39" BORDER="0" NAME="loc_lakeforest"><br>                                   
              </A>
            </div>
          </td>
        </tr>
      </table>
      
      <br>
      <br>
      <br>
      <br>
      <br>
      
      <!-- MISSION VIEJO -->
      <table width=710 border=0 cellpadding=0 cellspacing=0 align=center
        <tr>
          <td width=135 valign=top align=center>
            <img src="images/locations/photo_missionviejo.gif">
            <div id="locationMoreInfo">
              <a href="locations_missionviejo.html">Click for more Info</a>
            </div>
          </td>
          <td width=20></td>
          <td width=555 class="location">
                    
            <span class="locationsTitle">MISSION VIEJO PEPPINO’S -</span>
            
            <span class="locationsBody"> 
            Peppino’s newly remodeled restaurant on the Lake.  Along with 
            remodeling the kitchen, we have expanded the dining area, added a 
            new full service bar with a waiting lounge and a front patio for 
            dining.  The rear-dining terrace has been expanded and offers a 
            beautiful view of Lake Mission Viejo.  happy Hour is available daily 
            from 3:00 pm to 7:00 pm.<br>
            </span>
            
            <span class="locationsPhone">(949) 859-9556</span>            
            
            <!-- Button -->
            <div id="locationsButtons"> 
              <A HREF="http://peppinos.takeouttech.com/uilayer/clientskins/Peppinos/startup.aspx?LocID=80&cid=22"
                onmouseover="roll('loc_missionviejo', 'images/locations/order_missionviejo_over.jpg')" 
                onmouseout ="roll('loc_missionviejo', 'images/locations/order_missionviejo.jpg')">
                <IMG SRC="images/locations/order_missionviejo.jpg" WIDTH="534" HEIGHT="39" BORDER="0" NAME="loc_missionviejo"><br>                                   
              </A>
            </div>
          </td>
        </tr>
      </table>
      
      <br>
      <br>
      <br>
      <br>
      <br>
            
      <!-- FOOTHILL RANCH -->
      <table width=710 border=0 cellpadding=0 cellspacing=0 align=center
        <tr>
          <td width=135 valign=top align=center>
            <img src="images/locations/photo_foothill.gif">
            <div id="locationMoreInfo">
              <a href="locations_foothillranch.html">Click for more Info</a>
            </div>
          </td>
          <td width=20></td>
          <td width=555 class="location">
                    
            <span class="locationsTitle">FOOTHILL RANCH PEPPINO’S - </span>
            
            <span class="locationsBody"> 
            Please come join us in our location in Foothill Ranch.  We are 
            located in a beautiful setting in the food court on the end opposite 
            Regal Cinemas.  Our location provides lots of room for your large 
            events and yet remains cozy and intimate for the dinners with a movie.  
            Happy Hour is available daily from 3;00 pm to 7:00 pm.  This 
            location has an intimate Martini Bar called “joe’s Place”, so come 
            enjoy the relaxed atmosphere.<br>
            </span>
            
            <span class="locationsPhone">(949) 951-1210</span>            
            
            <!-- Button -->
            <div id="locationsButtons"> 
              <A HREF="http://peppinos.takeouttech.com/uilayer/clientskins/Peppinos/startup.aspx?LocID=77&cid=22"
                onmouseover="roll('loc_foothill', 'images/locations/order_foothill_over.jpg')" 
                onmouseout ="roll('loc_foothill', 'images/locations/order_foothill.jpg')">
                <IMG SRC="images/locations/order_foothill.jpg" WIDTH="534" HEIGHT="39" BORDER="0" NAME="loc_foothill"><br>                                   
              </A>
            </div>
          </td>
        </tr>
      </table>
 
      <br>
      <br>
      <br>
      <br>
      <br>
           
      
      <!-- ALISO VIEJO -->
      <table width=710 border=0 cellpadding=0 cellspacing=0 align=center
        <tr>
          <td width=135 valign=top align=center>
            <img src="images/locations/photo_alisoviejo.gif">
            <div id="locationMoreInfo">
              <a href="locations_alisoviejo.html">Click for more Info</a>
            </div>
          </td>
          <td width=20></td>
          <td width=555 class="location">
                    
            <span class="locationsTitle">ALISO VIEJO PEPPINO’S - </span>
            
            <span class="locationsBody"> 
            Aliso Viejo is our fabulous Pizzeria, a place where you can get 
            gourmet pizzas such as Pizza alla Giuseppe made fresh to order.  
            We also carry a variety of specialty dishes created and served at 
            this location only, such as the extremely popular Pasta Colorado.  
            This location also has a patio for enjoyable outdoor dining.<br>
            </span>
            
            <span class="locationsPhone">(949) 643-1355</span>            
            
            <!-- Button -->
            <div id="locationsButtons"> 
              <A HREF="http://peppinos.takeouttech.com/uilayer/clientskins/Peppinos/startup.aspx?LocID=83&cid=22"
                onmouseover="roll('loc_aliso', 'images/locations/order_alisoviejo_over.jpg')" 
                onmouseout ="roll('loc_aliso', 'images/locations/order_alisoviejo.jpg')">
                <IMG SRC="images/locations/order_alisoviejo.jpg" WIDTH="534" HEIGHT="39" BORDER="0" NAME="loc_aliso"><br>                                   
              </A>
            </div>
          </td>
        </tr>
      </table>
            
      <br>
      <br>
      <br>
      <br>
      <br>
            
       <!-- IRVINE -->
      <table width=710 border=0 cellpadding=0 cellspacing=0 align=center
        <tr>
          <td width=135 valign=top align=center>
            <img src="images/locations/photo_irvine.gif">
            <div id="locationMoreInfo">
              <a href="locations_irvine.html">Click for more Info</a>
            </div>
          </td>
          <td width=20></td>
          <td width=555 class="location">
                    
            <span class="locationsTitle">IRVINE PEPPINO’S - </span>
            
            <span class="locationsBody"> 
            Please come join us in celebrating the opening of our newest 
            location in Irvine at 6460 Irvine Blvd., Irvine, CA 92620.<br>
            </span>
            
            <span class="locationsPhone">(949) 468-3660</span>            
            
            <!-- Button -->
            <div id="locationsButtons"> 
              <A HREF="http://peppinos.takeouttech.com/uilayer/clientskins/Peppinos/startup.aspx?LocID=237&cid=22"
                onmouseover="roll('loc_irvine', 'images/locations/order_irvine_over.jpg')" 
                onmouseout ="roll('loc_irvine', 'images/locations/order_irvine.jpg')">
                <IMG SRC="images/locations/order_irvine.jpg" WIDTH="534" HEIGHT="39" BORDER="0" NAME="loc_irvine"><br>                                   
              </A>
            </div>
          </td>
        </tr>
      </table>
  
    
    </td>
  </tr>
</table

EOD;

$page->save_page($fileName);
?>
