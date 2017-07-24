

<!DOCTYPE html>
<html>
<head>
	<title> Admin Panel </title>

	<!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/bootstrap.min.css'); ?>"/>-->

	<!-- This above css will work only when we will set base_url in config file of codeigniter -->
	<!-- Though it was pointing to the same base_url when was empty, but it just work -->
	<?php echo link_tag('assets/css/bootstrap.min.css'); ?>
	<!-- link_tag and base_url both can be used here as shown above, but link_tag is better -->
	<!-- for base_url "url" helper will be used and for link_tag "html" helper will be used -->
	<!-- As these are gonna use frequently so we put them into the autoload file. -->
</head>

<body>

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin panel</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">
      <!-- base_url will point towards localhost:8080/code_igni, rest parameter we will have to pass in parenthesis.  -->
        <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>  <!-- This is one way of logout -->
        <!-- We can logout by using "anchor" helper as well, in which first parameter is same segment as above and second is the "Logout" word on view page -->
        <!-- <li><?php // echo anchor('login/logout', 'Logout');  ?></li> -->
      </ul>
    </div>
  </div>
</nav>
</body>
</html>