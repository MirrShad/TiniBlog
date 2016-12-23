<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>


  <title><p>Styles | Simple Life</title>


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
      <li><a href="<?php echo base_url();?>index.php/change/showContent" title="Coding tips"><span class="big">C</span>ontent</a></li>
      <li><a href="<?php echo current_url(); ?>" title="See the tags in action" class="here"><span class="big">W</span>rite</a></li>
      <li><a href="http://fullahead.org/contact.html" title="Get in touch"><span class="big">C</span>ontact</a></li>
    </ul>

    <!-- #page: holds all page content, as well as footer -->
    <div id="page">


      <h1>Forms</h1>

	<?php echo validation_errors(); ?>
	<?php echo form_open('change/showWrite'); ?>

        <p>
          <label>Tag</label>
          <select name="tag" value="<?php echo set_value('tag'); ?>">
            <option value="1">Ottawa</option>
            <option value="2">Calgary</option>
            <option value="3">Moosejaw</option>
          </select>
        </p>

        <p>
          <label>Title</label>
          <input type="text" name="title" class="width50" value="<?php echo set_value('title'); ?>"/>
        </p>

        <p>
          <label>Text</label>
          <textarea name="context" rows="20" cols="20" class="width50"><?php echo set_value('context'); ?></textarea>
        </p>

        <p>
          <label>&nbsp;</label>
          <input type="submit" value="Submit" class="button"/>
          <input type="reset" value="Reset" class="button"/>
        </p>

    </form>

      

    </div>

  </div>

</div>

</body>

</html>