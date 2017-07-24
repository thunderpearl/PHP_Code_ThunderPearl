<!DOCTYPE html>
<!---->
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="kuldeep_singh" content="HTML, CSS">
	<!--<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->

	<style>

	ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #333;
	    text-align: center;

	}

	#bottom-menu ul{
		background-color: #85adad;
		margin: auto;	

	}

	#bottom-menu.ul.li{
		color: #0f0f0a;
	}

	li {
	    float: left;
	    width: 12%;
	    margin-top: 1%;
	    height: 100%;
	    margin-left: 2%;
	}

	/*This is for menu bar*/
	li a {
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	    margin-left: 40%;
	    width: 40%;
	    padding-left: 
	}


	/*When we hover on the menubar options*/
	li a:hover:not(.active) {
	    height: 100%;
	    font-size: 140%;
	}


	/*for the logo*/
	li img{
		height: 20%;
		width: 20%;
		padding-left: 40%;
		padding-top: -15%;
	}


	/*Paragraph*/
	#para{
		font-style: calibri; 
		font-size: 120%;
		margin-left: 2%;
		margin-right: 2%;
		color: #334d4d;
	}


	/*H1 Heading*/
	#heading1{
		color: #334d4d;
		text-align: center;
	}

	/*Technologies which we deal with*/
	#technologies{
		margin-left: 35%;
	}

	/*Bottom part*/
	#bottom{
		width: 100%;
	
	}

	.horline{
		margin-top: 5%; 
	}

	.subtab{
		display: inline-block;
		width: 27%;
		margin-left: 6%;
		margin-top: 5%;
	}

	.subimage{
		margin-left: 20%;

	}

	.url{
		color: #4db8ff;
		margin-left: 23%;
	}

	div h4{
		margin-left: 20%;
	}

	#new_idea{
		display: inline-block;
		margin-top: 4%;
		margin-left: 23%;
	}

	#shout{
		margin-left: 2%;
		margin-top: 4.5%;
	}

	#bottom-menu{
		margin-top: 4%;
	}

	#footer{
		font-style: Calibri;
		margin-left: 44%;
		color: #d1e0e0;
	}


	</style>

	<title>Front View</title>
	
</head>

<body>

	<div id="menu-bar">
		<ul>
		  <li><img src="http:\\localhost:8080\\logo.png"></li>	
		  <li><a class="active" href="#home">About Us</a></li>
		  <li><a href="#consulting">Consulting</a></li>
		  <li><a href="#training">Training</a></li>
		  <li><a href="#skylight">Skylight</a></li>
		  <li><a href="#contact">Contact</a></li>
		</ul>
	</div>

	<div id="mid">
		<img src="http:\\localhost:8080\\header_background_test3.png" width=100%>
		
	</div>

	<div id="techpara">

		<p id="para">We're a small team of developers who are passionate about crafting great software. We're some of the faces behind Ember.js, Ruby on Rails, jQuery and more. We're here to help you build the products and tools of the future.</p>

		<h5 id="heading1"><b>YOU MAY RECOGNIZE US FROM AROUND TOWN</b></h5>


	

		<div id="technologies">
			<a href="#"><img src="http:\\localhost:8080\\rails.png"></a>
			<a href="#"><img src="http:\\localhost:8080\\jquery.png"></a>
			<a href="#"><img src="http:\\localhost:8080\\ember.png"></a>
			<a href="#"><img src="http:\\localhost:8080\\handlebars.png"></a>
			<a href="#"><img src="http:\\localhost:8080\\bundler.png"></a>
		</div>

	</div>

	

	<div id="bottom">
		<hr class="horline">
		
			<div class="subtab">
				<img class="subimage" src="http:\\localhost:8080\\consulting-illustration.png">	
				<h4>EMBER.JS & PRODUCT CONSULTING</h4>

				<p>
					We can handle the most challenging technical problems and we've also got architecture, product and marketing chops.

				</p>	
				<a class="url" href="#">Learn about our process</a>
			</div>


			<div class="subtab">
				<img class="subimage" src="http:\\localhost:8080\\engagements-illustration.png">
				<h4>TRAINING & SPEAKING ENGAGEMENTS</h4>

				<p>
					We offer public, private and group training classes Ember js, Ruby on Rails and JavaScript. We also  speak at industry conferences.
				</p>	
				<a class="url" href="#">View our upcoming schedule</a>
			</div>

			
			<div class="subtab">
				<img class="subimage" src="http:\\localhost:8080\\open-source-illustration.png">
				<h4>OPEN SOURCE DEVELOPMENT</h4>

				<p>
					We've created and made contributions to some of the most notable and successful open-source projects in the world.
				</p>
				<a class="url" href="#">See what we've done</a>
			</div>


		<hr class="horline">


			<div id="below_horline">
				<h1 id="new_idea">HAVE A PROJECT IN MIND?</h1>
				<a href="#"><img id="shout" src="http:\\localhost:8080\\blue-button-arrow_complete3.png"></a>
			</div>


			<div id="bottom-menu">

				<ul>
				  <li><a class="active" href="#home">About Us</a></li>
				  <li><a href="#consulting">Consulting</a></li>
				  <li><img src="http:\\localhost:8080\\logo.png"></li>	
				  <li><a href="#training">Training</a></li>
				  <li><a href="#skylight">Skylight</a></li>
				  <li><a href="#contact">Contact</a></li>
				</ul>

			</div>

			<footer id="footer">
				<p>Copyright 2016 Codeplus Inc</p>
			</footer>
	</div>





	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
	<script type="text/javascript" src="http:\\localhost:8080\\bootstrap.min.js"></script>

</body>
</html>