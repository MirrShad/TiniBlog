<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

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
      <li><a href="http://fullahead.org/contact.html" title="Get in touch"><span class="big">C</span>ontact</a></li>
    </ul>

    <!-- #page: holds all page content, as well as footer -->
    <div id="page">

      <h1>Introduction</h1>

      <p>
        <a href="http://fullahead.org/work/alice/" title="Visit Alice's Cabin"><img src="<?php echo base_url("images/content/photos/tn_stream.jpg"); ?>" alt="Adirondack Stream" class="floatLeft"/></a>
        Here you can write your daily emotions. No matter what your have experienced, you can record your feelings in the <a href="http://localhost:8080/TiniBlog/index.php/change/showWrite" title="Record your feelings now!">Write</a>, but sometimes, all you really need is just to sit down and read your life in the <a href="http://localhost:8080/TiniBlog/index.php/change/showContent" title="Recall your life experience">Content</a>.
      </p>

      <p>
        The template displays properly in all the usual browsers, with an added filter hack to get .png opacity working in IE.  If you look in the html source near the top, you'll see a <acronym title="A way to control how IE reads code">conditional comment</acronym> that loads a style sheet for IE 5.0 and up.  You can get rid of this, and everything will still work, except you'll loose the purty content dropshadow.
      </p>

      <ul>
        <li><b>Gecko</b> <i>deeee</i>licious</li>
        <li><b>Opera</b> like hotdogs</li>
        <li><b>Safari</b> wouldn't say no to 2nds</li>
        <li><b>Internet Explorer</b> it tastes like burning...</li>
      </ul>

      <p>
        <a href="http://fullahead.org/work/alice/" title="Visit Alice's Cabin"><img src="<?php echo base_url("images/content/photos/tn_inside.jpg"); ?>" alt="Inside Alice's Cabin" class="floatRight"/></a>
        Total image size of this template comes in just under the new 60kb limit of <acronym title="Open Web Design">OWD</acronym>, so enjoy.  It's nice to have a little more wiggle room with the templates.  Maybe next we could work on getting Javascript?
      </p>

      <p>
        This design started out as the promo site for a friend's cottage.  If you're curious about the original, check out <a href="http://fullahead.org/work/alice/" title="Visit Alice's Cabin">Alice's Cabin</a>.
      </p>


      <!-- .footer: the site footer text, links and whatever else -->
      <p class="footer">
        Design by <a href="http://fullahead.org" title="Visit FullAhead">FullAhead</a>.  Valid CSS &amp; XHTML with no rights reserved.
      </p>

    </div>

  </div>

</div>

</body>

</html>