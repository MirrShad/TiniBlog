<!-- *This is a php page to show the apparence of content information page(the second view) -->
<!-- *@name content_view.php -->
<!-- *@version 26/12/2016 1.0 -->
<!-- *@author Zeling Wu -->
<html>
<head>


  <title>Content | Tini Blog</title>

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
      <h2><span class="highlight">A super place to recall your life</span></h2>
    </div>



    <!-- #menu: topbar menu of the site.  Use the helper classes .two, .three, .four and .five to set
                the widths for 2, 3, 4 and 5 item menus. -->
    <ul id="menu" class="four">
      <li><a href="<?php echo base_url();?>index.php/change/showIndex" title="An intro to Simple Life"><span class="big">I</span>ntro</a></li>
      <li><a href="<?php echo current_url(); ?>" title="Coding tips" class="here"><span class="big">C</span>ontent</a></li>
      <li><a href="<?php echo base_url();?>index.php/change/showWrite" title="See the tags in action"><span class="big">W</span>rite</a></li>
      <li><a href="<?php echo base_url();?>index.php/change/showContact" title="Get in touch"><span class="big">C</span>ontact</a></li>
    </ul>

    <!-- #page: holds all page content, as well as footer -->
    <div id="page">

      <h1>Past Experiences</h1>


      <?php
		echo $blogs;
	  ?>

      
    </div>

  </div>

</div>

</body>