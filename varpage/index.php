<?php

$fileName = "../index.html";


$page = new VarPage;
$page->templatefile = "include/template.html";
$page->varnamelist = "title,content,pageheight,sidemenubg_height";

// The Two Variables Below set the total page height - adjust
// only contentheight, the sidebar will auto-adjust to content
// adjust to desired height for every page
$page->contentheight = 898;
$page->sidemenubg_height = $page->contentheight - 292;

$page->title = "Orange County Italian food tradition since 1984 !!!";
$page->content = <<<EOD

<div id="storeHours">Open 7 Days a Week:  Mon-Thurs 11-9  •  Fri & Sat 11-10  •   Sun 11-9</div>
<br>
<table width=710 border=0 cellpadding=0 cellspacing=0 align=center>
  <tr>
  
    <!-- LEFT SIDE, MOVIE & BUTTONS -->
    <td width=240 valign=top>
      <br>
      <!-- MOVIE -->
      <div id="welcomeButtons">
        	<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="196" width="240" name="Peppino's Italian Family Restaurants Video">
						<param name="bgcolor" value="#ffffff">
						<param name="src" value="movies/Martini_Bar_QT_480X360.mov">
						<param name="autoplay" value="true">
						<param name="controller" value="true">
						<embed height="196" name="Peppino's Italian Family Restaurants Video" pluginspage="http://www.apple.com/quicktime/download/" src="movies/Martini_Bar_QT_480X360.mov" type="video/quicktime" width="240" controller="true" autoplay="true" bgcolor="#ffffff"> 
					</object>					
      </div>
      
      <!-- order online Button -->
      <div id="welcomeButtons"> 
        <A HREF="locations.html"
          onmouseover="roll('wel_orderonline', 'images/home/orderonline_over.jpg')" 
          onmouseout ="roll('wel_orderonline', 'images/home/orderonline.jpg')">
          <IMG SRC="images/home/orderonline.jpg" WIDTH="240" HEIGHT="48" BORDER="0" NAME="wel_orderonline"><br>                                   
        </A>
      </div>
      
      <!-- gift cards Button -->
      <div id="welcomeButtons"> 
        <A HREF="javascript:popChat('http://www.givex.com/Merchant_pages/5346/terminal/terminalframes.htm','givexterminal',275,349);"
          onmouseover="roll('wel_giftcards', 'images/home/giftcards_over.jpg')" 
          onmouseout ="roll('wel_giftcards', 'images/home/giftcards.jpg')">
          <IMG SRC="images/home/giftcards.jpg" WIDTH="240" HEIGHT="48" BORDER="0" NAME="wel_giftcards"><br>                                   
        </A>
      </div>
      
      <!-- menu Button -->
      <div id="welcomeButtons"> 
        <a href = 'JavaScript: LaunchMenu()'><IMG SRC="images/home/menu.jpg" WIDTH="240" HEIGHT="48" BORDER="0" NAME="wel_menu"></a>        
      </div>
      
      <!-- catering Button -->
      <div id="welcomeButtons"> 
        <A HREF="catering.html"
          onmouseover="roll('wel_catering', 'images/home/catering_over.jpg')" 
          onmouseout ="roll('wel_catering', 'images/home/catering.jpg')">
          <IMG SRC="images/home/catering.jpg" WIDTH="240" HEIGHT="48" BORDER="0" NAME="wel_catering"><br>                                   
        </A>
      </div>
      
      <!-- employment Button -->
      <div id="welcomeButtons"> 
        <A HREF="Employment_App.pdf"
          onmouseover="roll('wel_employment', 'images/home/employment_over.jpg')" 
          onmouseout ="roll('wel_employment', 'images/home/employment.jpg')">
          <IMG SRC="images/home/employment.jpg" WIDTH="240" HEIGHT="48" BORDER="0" NAME="wel_employment"><br>                                   
        </A>
      </div>
       
    </td>
    
    <!-- RIGHT SIDE WELCOME PARAGRAPH -->  
    <td width=20></td>
    <td width=450 id="welcomeParagraph" valign=top>  
      <img src="images/home/header.gif">  
      The best Orange County Italian Food since 1984. Peppino's Orange County Italian Restaurants have since expanded to serve the finest Italian Food in five Orange County locations.
      <br>
      <br>
      Peppino's Italian Family Restaurant in Lake Forest is where it all begin in 1984. Peppino's Italian Family Restaurants are now located in Lake Forest, Mission Viejo, Foothill Ranch, our special Pizzeria in Aliso Viejo, and our newest location in Irvine.
      <br>
      <br>
      Our first restaurant in Lake Forest opened in 1984. Due to our customers' loyalty and love of good food, our restaurants expanded into several different locations throughout South Orange County and I think we are doing the right thing.  With the help of my family and friends, I am able to grow.  And of course my wonderful customers who are more friends than numbers.  And above all my mom and dad.  I love you Carlo and Antonetta, thank you for believing in me.
      <br>
      <br>
      I hope my sons Carlo and Joey and my daughter Antonetta will carry on in the family business.  So long as they love me, as I have loved their grandparents, our family’s future will be the future for yours.      
      <br>
      <br>    
      As always, thank you for your continued patronage,
      <br>
      <br>    
      Joseph Moscatiello<br>
      President and Founder<br>
      Peppino's, Inc. dba Peppino's Italian Family Restaurant    
      <br>
      <br>
      <br>
      <br>
      <br>
    </td>
  </tr>
</table

EOD;

$page->save_page($fileName);
?>
