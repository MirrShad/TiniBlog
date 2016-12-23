<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>


  <title>Coding | Simple Life</title>

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
      <h1><span class="big darkBrown">S</span>imple <span class="big darkBrown">L</span>ife</h1>
      <h2><span class="highlight">Because sometimes you don't need a sidebar</span></h2>
    </div>



    <!-- #menu: topbar menu of the site.  Use the helper classes .two, .three, .four and .five to set
                the widths for 2, 3, 4 and 5 item menus. -->
    <ul id="menu" class="four">
      <li><a href="<?php echo base_url();?>index.php/change/showIndex" title="An intro to Simple Life"><span class="big">I</span>ntro</a></li>
      <li><a href="<?php echo current_url(); ?>" title="Coding tips" class="here"><span class="big">C</span>ontent</a></li>
      <li><a href="<?php echo base_url();?>index.php/change/showWrite" title="See the tags in action"><span class="big">W</span>rite</a></li>
      <li><a href="http://fullahead.org/contact.html" title="Get in touch"><span class="big">C</span>ontact</a></li>
    </ul>

    <!-- #page: holds all page content, as well as footer -->
    <div id="page">

      <h1>Coding</h1>


      <h2>PNG Opacity</h2>
	
	<blockquote>
      <p>
        One of IE's more annoying bugs is that it doesn't support PNG opacity unless you use a big chunk of ugly code.  To create the dropshadow effect in IE, the following filter is applied in ie.css:
      </p>
	</blockquote>
	
      <h2>Column Widths</h2>

	<blockquote>
      <p>
        There are 6 different widths defined in the style sheet that allow you to customize how many columns the template has:
      </p>
	</blockquote>

      <h2>Images</h2>
    <blockquote>
		<p>
        <a href="http://fullahead.org/work/alice/" title="Visit Alice's Cabin"><img src="<?php echo base_url("images/content/photos/tn_stream.jpg"); ?>" alt="Adirondack Stream" class="floatLeft"/></a>
        Images are fully supported using the <i>floatLeft</i> and <i>floatRight</i> classes.  Just apply one of them to the image you want to position.  Images that have link tags around them will also have a nifty rollover effect, as long as you're using a standards complients browser.
      </p>
	</blockquote>  
    </div>

  </div>

</div>

</body>