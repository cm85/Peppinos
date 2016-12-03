<?php

$fileName = "../history.html";


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

<table width=710 border=0 cellpadding=0 cellspacing=0 align=center>
  <tr>
  
    <!-- History -->
    <td width=710 id="historyParagraph" valign=top>  
      <img src="images/history/header.gif">
      <br>
      <p>
      <img src="images/history/photo.jpg" class="historyFloatRight">
      <span class="historyParagraphHeader">
      "Peppino's Story"<br>
      Peppino means "Little Joe" in Italian.<br>       
      </span>
      <br>
      The name “Peppino” is mine. I’m Joe, and as a child my mom called me 
      Peppino. My parents, Carlo and Antonetta, were both born in Naples, Italy. 
      They moved to Troy, New York where they raised three children. I’ve been 
      watching my mother cook for as long as I could remember, preparing delicious 
      Italian dishes in a sparkling clean kitchen, always saying, “Peppino, 
      cook and clean.” With a passion for cooking, I attended chef’s school in 
      New York. After three months and a lot of tuition money, I found out that 
      the best cook I’ve ever known is my mother.<br>
      <br>
      Our first restaurant opened on April 16, 1984. I was the cook and doorman. 
      My father was the dishwasher and handyman, and he was the best. My sisters 
      Gina and Lina were waitresses along with Maria the mother of my children 
      Carlo, Antonetta and Joey.<br>
      <br>
      Because of our customers’ loyalty and love of good food, our restaurants 
      have expanded into several different locations in many areas of Southern 
      California. With the help of my family and friends, and of course my 
      wonderful customers who are more friends than numbers, I am able to 
      grow. <br>
      <br>
      We always use the finest ingredients to bring out the best flavor in our 
      entrées. Whether you are dining in one of our restaurants or taking this 
      meal home, you can be assured that the love of food that has been a family 
      value is in every entrée that is served.<br>
      <br>
      <br>
      Always yours truly,<br>
      Joseph Moscatiello ~ Founder“Peppino”<br>
      <br>      
      </p>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>      
      <div id="historyStoreHours">Open 7 Days a Week:  Mon-Thurs 11-9  •  Fri & Sat 11-10  •   Sun 11-9</div>
    </td>
  </tr>
</table

EOD;

$page->save_page($fileName);
?>
