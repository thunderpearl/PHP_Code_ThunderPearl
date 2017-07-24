

<!DOCTYPE html>
<html>
<head>
	<title> This is the article's Blog </title>

	<!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/bootstrap.min.css'); ?>"/>-->

	<!-- This above css will work only when we will set base_url in config file of codeigniter -->
	<!-- Though it was pointing to the same base_url when was empty, but it just work -->
	<?php echo link_tag('assets/css/spacelabbootstrap.min.css'); ?>
	<!-- link_tag and base_url both can be used here as shown above, but link_tag is better -->
	<!-- for base_url "url" helper will be used and for link_tag "html" helper will be used -->
	<!-- As these are gonna use frequently so we put them into the autoload file. -->
</head>

<body>
	<h1>Articles</h1>


	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Articles</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php echo form_open('user/search', ['class' => 'navbar-form navbar-left', 'role' => 'left']); ?>


      <!--<form class="navbar-form navbar-left" role="search">-->
        <div class="form-group">
          <input type="text" name="query" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      <?php echo form_close(); ?>
      <?php echo form_error('query', "<p class='navbar-text text-danger'>", '</p>'); ?>

      <ul class="nav navbar-nav navbar-right">
        <li><?php echo anchor('', 'Login'); ?></li> <!-- Later we need to give the controller value in these also -->
        <li><?php echo anchor('lead_login/register','Register')?></li> <!-- In anchor tag 1st parameter is controller and it's method and second parameter is it's button or link to be clicked  -->
      </ul>
    </div>
  </div>
</nav>
</body>
</html>