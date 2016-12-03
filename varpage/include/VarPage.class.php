<?php
class VarPage {

  var $templatefile = "template.html";
  var $varnamelist = "title,content,pageheight,sidemenubg_height";
  var $title = "Page Title Here";
  var $content = "<p>Page Content Here</p>";
  
  function VarPage(){
  }
  
  //*****************************************************************
  // RENDERS PAGE - RETURNS STRING OF RENDERED PAGE
  //*****************************************************************
  function get_page()
  {
    $vararray = explode(",",trim($this->varnamelist));
    $templatearray = file($this->templatefile);
    $template = join("",$templatearray);
    foreach ($vararray as $varname) {
       $template = str_replace("<!--$varname-->",$this->$varname,$template);
    }
    return $template;
  }
    
  //*****************************************************************
  // RENDERS PAGE AND DISPLAYS
  //*****************************************************************
  function display_page()
  {
    $page = $this->get_page();
    print $page;
  }
   
  //*****************************************************************
  // RENDERS PAGE AND SAVES TO FILE
  //*****************************************************************
  function save_page($fileName)
  {
    $page = $this->get_page();
    
    // If file already exists, delete it to make
    // new one
    if (file_exists($fileName)){    
      unlink($fileName);
    }
    
    $fhandle = fopen($fileName,"w");    
    fwrite($fhandle, $page);
    fclose($fhandle); 
  }


}
?>
