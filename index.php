<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<input type="checkbox" id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>
	<nav class="sidebar">
		<div>
			<img class="logo" src="logo.png">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Login <i class="fas fa-caret-down"></i></a>
					<ul>
						<li><a href="adminlogin.php">Admin login</a></li>
						<li><a href="stafflogin.php">University login</a></li>
						<li><a href="studentlogin.php">Student login</a></li>
					</ul>
				</li>
				<li><a href="about.php">About</a></li>
			</ul>
		</div>
	</nav>
	<div class="header">
		<h1>SCHOVERSITY
			<div id="div1">
				<a href="Tel://918028524456">Tel : +91 80 28524466 / 77</a>
				<br>
				<a href="mailto:Akansha.Agarwal@ellucian.com">Email : Akansha.Agarwal@ellucian.com</a>
			</div>
		</h1>
	</div>
	<section>
	<!-- Slideshow container -->
	<div class="slideshow-container" id="ss1">

  		<!-- Full-width images with number and caption text -->
  		<div class="mySlides fade">
    		<img src="image1.png" style="width:100%">
  		</div>

  		<div class="mySlides fade">
  			<img src="image2.png" style="width:100%">
  		</div>

  		<div class="mySlides fade">
    		<img src="image3.png" style="width:100%">
  		</div>
  		<div class="mySlides fade">
    		<img src="image4.png" style="width:100%">
  		</div>

  		<!-- Next and previous buttons -->
  		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>
	<!-- The dots/circles -->
	<div style="text-align:center" id="ss2">
  		<span class="dot" onclick="currentSlide(1)"></span>
  		<span class="dot" onclick="currentSlide(2)"></span>
  		<span class="dot" onclick="currentSlide(3)"></span>
  		<span class="dot" onclick="currentSlide(4)"></span>
	</div>
	<br>
	</section>
	<script>
		var slideIndex = 0;
		showSlides();

		// Next/previous controls
		function plusSlides(n) {
  			showSlides(slideIndex += n);
		}

		function showSlides() {
  			var i;
  			var slides = document.getElementsByClassName("mySlides");
  			var dots = document.getElementsByClassName("dot");
  			for (i = 0; i < slides.length; i++) {
    			slides[i].style.display = "none";
  			}
  			slideIndex++;
  			if (slideIndex > slides.length) {slideIndex = 1}
  			for (i = 0; i < dots.length; i++) {
      			dots[i].className = dots[i].className.replace(" active", "");
  			}
  			slides[slideIndex-1].style.display = "block";
  			dots[slideIndex-1].className += " active";
  			setTimeout(showSlides, 5000); // Change image every 5 seconds

		}
	</script>
	
	<section>
		<div class="col" id="div2">
			<div class="content active">
				<img src="ellucian.png" width="61" height="61" alt="" class="icon">
				<h3> WHY SCHOVERSITY?</h3>
				<p> It is a common portal associated with ellucian containing various scholarship schemes from different universities all over the world.It aims to create a transparent database of scholars and harmonise different scholarships schemes and norms.

</p>
				<p><em><a href="https://www.ellucian.com/">read more &gt;</a></em></p><br><br><br><br>
			</div>
		</div>

		<div class="col announcements" id="div3">
			<div class="announcement active">
				<img src="https://www.cmrit.ac.in/wp-content/uploads/sites/2/2013/12/icon_announcement.png" width="61" height="61" alt="" class="icon">
				<div class="content">
					<h3>ANNOUNCEMENT</h3>
					<!-- <p><em><a style="text-decoration: underline;" href="https://www.ellucian.com/news/ellucian-foundation-announces-2022-path-scholarship-program">click here </a></em></p> -->
					<p>One week left to apply for the NetDocuments Work Inspired Scholarship! Minority students who plan to enroll in full-time undergrad study next year can earn up to $10,000. Applications are due 5/31 – don’t miss out! Apply now
</p>
					<p><em><a style="text-decoration: underline;" href="https://www.ellucian.com/news/ellucian-foundation-announces-2022-path-scholarship-program">click here </a></em></p>
					<
					<!-- <p><em><a href="https://www.cmrit.ac.in/admissions/undergraduate/" target="_blank" rel="noopener noreferrer">click here &gt;</a></em></p><br><br>	 -->
				</div>
			</div>
		</div>

		<div class="col last tweets" id="div4">
			<div class="content active">
				<img src="https://www.cmrit.ac.in/wp-content/uploads/sites/2/2013/12/icon_twitter.png" width="61" height="61" alt="" class="icon">
				<h3>TWEETS</h3>
				<p>Quantity and persistence will get you the outcomes you need.
</a></p>
				<div class="tweet-info"><a href="https://twitter.com/ellucianinc/" target="_blank">@EllucianInc
</a>  |  6 hours ago</div><br><br>
			</div>					
		</div>
	</section>
</body>
</html>