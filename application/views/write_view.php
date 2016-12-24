
<html xml:lang="en" lang="en">

<head>


  <title>Write | Tini Blog</title>


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
      <h2><span class="highlight">A super place to record your feelings</span></h2>
    </div>



    <!-- #menu: topbar menu of the site.  Use the helper classes .two, .three, .four and .five to set
                the widths for 2, 3, 4 and 5 item menus. -->
    <ul id="menu" class="four">
      <li><a href="<?php echo base_url();?>index.php/change/showIndex" title="An intro to Simple Life"><span class="big">I</span>ntro</a></li>
      <li><a href="<?php echo base_url();?>index.php/change/showContent" title="Coding tips"><span class="big">C</span>ontent</a></li>
      <li><a href="<?php echo current_url(); ?>" title="See the tags in action" class="here"><span class="big">W</span>rite</a></li>
      <li><a href="<?php echo base_url();?>index.php/change/showContact" title="Get in touch"><span class="big">C</span>ontact</a></li>
    </ul>

    <!-- #page: holds all page content, as well as footer -->
    <div id="page">


      <h1>Forms</h1>
	<?php echo form_open_multipart('form/writeValidation'); ?>

        <p>
          <label>Tag</label>
          <select name="tag" value="<?php echo set_value('tag'); ?>">
            <option value="1">Life</option>
            <option value="2">Coding</option>
            <option value="3">Else</option>
          </select>
        </p>

        <p>
          <label>Text</label>
          <textarea name="context" rows="20" cols="20" class="width50"><?php echo set_value('context'); ?></textarea>
        </p>

		<p>
          <label>Image</label>
          <input type="file" name="userfile" size="20" />
        </p>
		
        <p>
          <label>&nbsp;</label>
          <input type="submit" value="Submit" class="button"/>
          <input type="reset" value="Reset" class="button"/>
        </p>

    </form>

    <?php echo $error;?>
	<?php echo validation_errors(); ?>

    </div>

  </div>

</div>

</body>

</html>