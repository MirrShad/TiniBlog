<!-- 
**************************************************************
   AUTHOR:  Lijun He
   DATE:    12/26/2016 
   PURPOSE: Show the appearance of Contact page
**************************************************************
-->
<head>

  <title>Contact | Tini Blog</title>
    
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/content/html.css"); ?>" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/content/layout.css"); ?>" media="screen, projection, tv" />
 
 </head>
 
 <body>
 
 <!-- #wrapper: centers the content and sets the width -->
<div id="wrapper">

  <!-- #content: applies the white, dropshadow background -->
  <div id="content">

    <!-- #header: holds site title and subtitle -->
    <div id="header">
      <h1><span class="big darkBrown">T</span>ini <span class="big darkBrown">B</span>log</h1>
      <h2><span class="highlight">Detailed contact information</span></h2>
    </div>
    
    
     <!-- #menu: topbar menu of the site.  Use the helper classes .two, .three, .four and .five to set
                the widths for 2, 3, 4 and 5 item menus. -->
    <ul id="menu" class="four">
      <li><a href="<?php echo base_url();?>index.php/change/showIndex" title="An intro to Simple Life"><span class="big">I</span>ntro</a></li>
      <li><a href="<?php echo base_url();?>index.php/change/showContent" title="Coding tips"><span class="big">C</span>ontent</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/change/showWrite" title="See the tags in action"><span class="big">W</span>rite</a></li>
      <li><a href="<?php echo current_url(); ?>" title="Get in touch" class="here"><span class="big">C</span>ontact</a></li>
    </ul>

    <!-- #page: holds all page content, as well as footer -->
    <div id="page">
    
    <p>Lijun He<br/>
    	Tell:(+49)1631710669<br/>
    	Apartment 1004<br/>
		  Maria-Mitchell-Strasse 2-4<br/>
		  23562 Luebeck
    </p>
    
    
    <p>Zeling Wu<br/>
    	Tell:(+49)1631710664<br/>
    	Apartment 1206<br/>
		  Maria-Mitchell-Strasse 2-4<br/>
		  23562 Luebeck
    </p>
    
    
    <p>Zikai Zhou<br/>
    	Tell:(+49)15779808837<br/>
    	Apartment 1212<br/>
		  Maria-Mitchell-Strasse 2-4<br/>
		  23562 Luebeck
    </p>
    
     </div>

  </div>

</div>
 
</body>
 
</html>