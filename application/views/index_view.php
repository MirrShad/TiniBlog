<?
/**
*This is a php page to show the apparence of index information page(the first view)
*@name index_view.php
*@version 26/12/2016 1.0
*@author Zikai Zhou
*/
<html>
<head>

  <title>Introduction | Tini Blog</title>

  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="author" content="fullahead.org" />
  <meta name="keywords" content="XHTML, CSS, template, FullAhead" />
  <meta name="description" content="A valid, XHTML 1.0 template" />
  <meta name="robots" content="index, follow, noarchive" />
  <meta name="googlebot" content="noarchive" />

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/content/html.css"); ?>" media="screen, projection, tv " />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/content/layout.css"); ?>" media="screen, projection, tv " />

</head>

<body>

<!-- #wrapper: centers the content and sets the width -->
<div id="wrapper">

  <!-- #content: applies the white, dropshadow background -->
  <div id="content">

    <!-- #header: holds site title and subtitle -->
    <div id="header">
      <h1><span class="big darkBrown">T</span>ini <span class="big darkBrown">B</span>log</h1>
      <h2><span class="highlight">A super place to share your personal experiences</span></h2>
    </div>

    <!-- #menu: topbar menu of the site.  Use the helper classes .two, .three, .four and .five to set
                the widths for 2, 3, 4 and 5 item menus. -->
    <ul id="menu" class="four">
      <li><a href="<?php echo current_url(); ?>" title="An intro to Simple Life" class="here"><span class="big">I</span>ntro</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/change/showContent" title="Coding tips"><span class="big">C</span>ontent</a></li>
      <li><a href="<?php echo base_url();?>index.php/change/showWrite" title="See the tags in action"><span class="big">W</span>rite</a></li>
      <li><a href="<?php echo base_url();?>index.php/change/showContact" title="Get in touch"><span class="big">C</span>ontact</a></li>
    </ul>

    <!-- #page: holds all page content, as well as footer -->
    <div id="page">

      <h1>Introduction</h1>
      <p align="justify">
        <a href="http://www.deutschlandstipendium.de/intern/system/upload/images/FH_Luebeck.jpg" title="FHL, http://www.deutschlandstipendium.de/intern/system/upload/images/FH_Luebeck.jpg, last access date 12/24/2016"><img src="<?php echo base_url("images/content/photos/fhl.jpg"); ?>" alt="Adirondack Stream" class="floatLeft"/></a>
        Here you can write your daily emotions. No matter what your have experienced, you can record your feelings in the <a href="<?php echo base_url();?>index.php/change/showWrite" title="Record your feelings now!">Write</a>, but sometimes, all you really need is just to sit down and read your life in the <a href="<?php echo base_url(); ?>index.php/change/showContent" title="Recall your life experience">Content</a>.
      </p>

      <p align="justify">
        <a href="https://www.codeigniter.com/" title="CodeIgniter, http://phoenixcoded.com/images/codeigniter_logo.png, last access date 12/24/2016"><img src="<?php echo base_url("images/content/photos/codeigniter_logo.png"); ?>" alt="Inside Alice's Cabin" class="floatRight"/></a>
        CodeIgniter is an open source Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries.
        <acronym title="Reference: https://www.codeigniter.com/user_guide/general/welcome.html, 12/25/2016">[1]</acronym>
      </p>

      <ul>
        <li><b>MVC Based System</b> </li>
        <li><b>Extremely Light Weight</b> </li>
        <li><b>Form and Data Validation</b> </li>
        <li><b>Unit Testing Class</b> </li>
      </ul>

      <p>
        This design started out as the demo website for the most special features of CodeIgnitor. If you are curious about more info, check out in <a href="https://www.codeigniter.com/user_guide/tutorial/index.html" title="Visit CodeIgnitor tutorial">its tutorial</a>.
      </p>


      <!-- .footer: the site footer text, links and whatever else -->
      <p class="footer">
        Designed by <a href="http://localhost:8080/Tiniblog/index.php/change/showContact" title="Contact team members">Index</a>. With all rights reserved.
      </p>

    </div>

  </div>

</div>

</body>

</html>