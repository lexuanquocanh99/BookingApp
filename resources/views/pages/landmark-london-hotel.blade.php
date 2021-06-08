<!DOCTYPE html>
<html>
<head>
	<title>Landmark London Hotel</title>
	<meta charset="utf-8">
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<body>
	<header>
		@include('includes.header')
		<div class="breadcrumbs-bar" style="border: solid 1px #C4C4C4; height: 20px;">
			<div class="breadcrumbs" style="margin-left: 451px;">
				<a href="/">Home</a>
				<ion-icon style="font-size: 10px;" name="chevron-forward-outline"></ion-icon>
				<a href="/hotels">Hotels</a>
				<ion-icon style="font-size: 10px;" name="chevron-forward-outline"></ion-icon>
				<a href="">Landmark London Hotel</a>
			</div>
		</div>
	</header>
	<main id="content">
		<div class="product-page" style="margin-top: 32px;">
			<div class="product-content">
				<div class="hotel-title">
					<h2 style="margin-top: 0; margin-bottom: 0">Landmark London Hotel</h2>
					<p style="margin-top: 8px; margin-bottom: 8px;"><ion-icon name="location-outline"></ion-icon> New York, USA</p>
				</div>
				<div class="image-slideshow-container">
					<div class="w3-content">
					  <img class="mySlides" src="/landmark-lodon.jpg" style="width:746px;height: 400px">
					  <img class="mySlides" src="/owall-hotel.jpg" style="width:746px;display:none; height: 400px">
					  <img class="mySlides" src="/rex-hotel.jpg" style="width:746px;display:none; height: 400px">
					  <div class="w3-row-padding w3-section">
					  	<table width="746px" style="margin-top: 8px;">
					  		<tr>
					  			<td>
					  				<div class="image1" style="margin: 0;">
					      				<img class="demo w3-opacity w3-hover-opacity-off" src="/landmark-lodon.jpg" style="width:237px; height: 180px ;cursor:pointer" onclick="currentDiv(1)">
					    			</div>
					  			</td>
					  			<td>
					    			<div class="image2">
					    			  <img class="demo w3-opacity w3-hover-opacity-off" src="/owall-hotel.jpg" style="width:237px; height: 180px;cursor:pointer" onclick="currentDiv(2)">
					    			</div>					  				
					  			</td>
					  			<td>
					    			<div class="image3">
					    			  <img class="demo w3-opacity w3-hover-opacity-off" src="/rex-hotel.jpg" style="width:237px; height: 180px;cursor:pointer" onclick="currentDiv(3)">
					    			</div>					  				
					  			</td>
					  		</tr>
					  	</table>					    
					  </div>
					</div>
				</div>
				<div class="description-container">
					<h3 style="margin-top: 0; margin-bottom: 0">Description</h3>
					<p style="margin-top: 8px; margin-bottom: 8px;">The Landmark London Opened in 1899 and is one of London’s most iconic hotels. Based in Marylebone we combine timeless British elegance with 5 star luxury.</p>
				</div>
				<div class="room-container">
					<h3 style="margin-top: 0; margin-bottom: 0">Room</h3>
					<table class="room-table" width="746px">
						<tr>
							<td style="width: 200px;">
								<div class="room-image" style="height: 100px;"><img style="border-radius: 5px;" width="200px" height="100px" src="/doubleroom.jpg"></div>
							</td>
							<td style="width: 300px;">
								<div class="room-info" style="margin-left: 8px;">
									<p>Double Room</p>
									<p style="color: #707070"><ion-icon style="color: #707070;" name="bed-outline"></ion-icon> 1 Double Bed</p>
									<p style="color: #707070"><ion-icon style="color: #707070;" name="person-outline"></ion-icon> 2 Adults</p>
								</div>
							</td>
							<td>
								<div class="book-now-btn">
									<button type="submit" id="book-now">Book Now</button>
								</div>
							</td>
						</tr>
						<tr>
							<td style="width: 100px;">
								<div class="room-image" style="height: 100px;"><img style="border-radius: 5px;" width="200px" height="100px" src="/executivedoubleroom.jpg"></div>
							</td>
							<td style="width: 300px;">
								<div class="room-info" style="margin-left: 8px;">
									<p>Executive Double Room</p>
									<p style="color: #707070"><ion-icon style="color: #707070;" name="bed-outline"></ion-icon> 1 Large Double Bed</p>
									<p style="color: #707070"><ion-icon style="color: #707070;" name="person-outline"></ion-icon> 2 Adults</p>
								</div>
							</td>
							<td>
								<div class="book-now-btn">
									<button type="submit" id="book-now">Book Now</button>
								</div>
							</td>
						</tr>	
						<tr>
							<td style="width: 100px;">
								<div class="room-image" style="height: 100px;"><img style="border-radius: 5px;" width="200px" height="100px" src="/familyroom.webp"></div>
							</td>
							<td style="width: 300px;">
								<div class="room-info" style="margin-left: 8px;">
									<p>Family Room</p>
									<p style="color: #707070"><ion-icon style="color: #707070;" name="bed-outline"></ion-icon> 2 Double Bed</p>
									<p style="color: #707070"><ion-icon style="color: #707070;" name="person-outline"></ion-icon> 2 Adults + 2 Children</p>
								</div>
							</td>
							<td>
								<div class="book-now-btn">
									<button type="submit" id="book-now">Book Now</button>
								</div>
							</td>
						</tr>											
					</table>
				</div>
				<div class="amenties-container">
					<h3 style="margin-top: 0; margin-bottom: 0">Amenties</h3>
					<table class="amenties-table" width="746px">
						<tr>
							<td>
								<p><ion-icon name="bed-outline"></ion-icon> Double Bed</p>
							</td>
							<td>
								<p><ion-icon name="tv-outline"></ion-icon> Televison</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><ion-icon name="tv-outline"></ion-icon> Wifi</p>
							</td>
							<td>
								<p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 510.909 510.909" style="enable-background:new 0 0 510.909 510.909;" xml:space="preserve" width="16" height="16"><g><path d="M475,100.486H121.478c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H475c11.53,0,20.91,9.38,20.91,20.91v159.691   c0,11.53-9.38,20.91-20.91,20.91h-17.959v-48.867c0-4.143-3.358-7.5-7.5-7.5H61.368c-4.142,0-7.5,3.357-7.5,7.5v48.867H35.91   c-11.53,0-20.91-9.38-20.91-20.91V136.396c0-11.53,9.38-20.91,20.91-20.91h55.568c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5   H35.91c-19.801,0-35.91,16.109-35.91,35.91v159.691c0,19.801,16.109,35.91,35.91,35.91h78.071c4.142,0,7.5-3.357,7.5-7.5   c0-4.142-3.358-7.5-7.5-7.5H68.868v-13.184h298.061c4.142,0,7.5-3.357,7.5-7.5c0-4.143-3.358-7.5-7.5-7.5H68.868v-13.184h373.173   v13.184h-45.112c-4.142,0-7.5,3.357-7.5,7.5c0,4.143,3.358,7.5,7.5,7.5h45.112v13.184H143.98c-4.142,0-7.5,3.358-7.5,7.5   c0,4.143,3.358,7.5,7.5,7.5H475c19.801,0,35.91-16.109,35.91-35.91V136.396C510.909,116.596,494.8,100.486,475,100.486z"/><path d="M449.541,161.467c4.142,0,7.5-3.357,7.5-7.5c0-4.143-3.358-7.5-7.5-7.5H427.36c-4.142,0-7.5,3.357-7.5,7.5   c0,4.143,3.358,7.5,7.5,7.5H449.541z"/><path d="M393.139,161.467c4.142,0,7.5-3.357,7.5-7.5c0-4.143-3.358-7.5-7.5-7.5H251.183c-4.142,0-7.5,3.357-7.5,7.5   c0,4.143,3.358,7.5,7.5,7.5H393.139z"/><path d="M141.082,352.064c-4.142,0-7.5,3.357-7.5,7.5c0,0.223-0.241,22.457-21.047,37.245c-3.376,2.399-4.168,7.082-1.768,10.458   c1.463,2.059,3.773,3.156,6.12,3.156c1.503,0,3.021-0.451,4.339-1.388c27.046-19.224,27.357-48.246,27.357-49.472   C148.582,355.421,145.224,352.064,141.082,352.064z"/><path d="M194.783,352.064c-4.142,0-7.5,3.357-7.5,7.5v43.358c0,4.143,3.358,7.5,7.5,7.5c4.142,0,7.5-3.357,7.5-7.5v-43.358   C202.283,355.421,198.925,352.064,194.783,352.064z"/><path d="M257.564,352.064c-4.142,0-7.5,3.357-7.5,7.5v43.358c0,4.143,3.358,7.5,7.5,7.5c4.142,0,7.5-3.357,7.5-7.5v-43.358   C265.064,355.421,261.706,352.064,257.564,352.064z"/><path d="M398.375,396.809c-20.526-14.589-21.036-36.281-21.047-37.279c-0.018-4.127-3.369-7.466-7.5-7.466   c-4.142,0-7.5,3.357-7.5,7.5c0,1.226,0.311,30.248,27.357,49.472c1.318,0.937,2.836,1.388,4.339,1.388   c2.346-0.001,4.657-1.099,6.12-3.156C402.543,403.891,401.751,399.208,398.375,396.809z"/><path d="M316.126,352.064c-4.142,0-7.5,3.357-7.5,7.5v43.358c0,4.143,3.358,7.5,7.5,7.5c4.142,0,7.5-3.357,7.5-7.5v-43.358   C323.626,355.421,320.268,352.064,316.126,352.064z"/></g></svg> Air Conditioning</p>
							</td>
						</tr>
						<tr>
							<td>
								<p><svg id="Capa_1" enable-background="new 0 0 510.291 510.291" height="16" viewBox="0 0 510.291 510.291" width="16" xmlns="http://www.w3.org/2000/svg"><g><path d="m183.12 85.236c6.517-4.778 6.329-4.414 52.15-30.33.1-.05.19-.11.29-.16-24.03-33.81-63.26-54.6-105.79-54.6-71.55 0-129.77 58.22-129.77 129.77v375.23c0 2.76 2.24 5 5 5h50c2.76 0 5-2.24 5-5v-375.23c0-38.63 31.56-70.03 70.25-69.77 20.74.14 39.87 9.68 52.87 25.09z"/><path d="m282.222 351.743c8.171-1.363 13.691-9.092 12.329-17.263l-2.317-13.894c-1.362-8.171-9.091-13.69-17.263-12.329-8.171 1.363-13.691 9.092-12.329 17.263l2.317 13.894c1.362 8.171 9.09 13.691 17.263 12.329z"/><path d="m358.3 310.066c7.224-4.054 9.794-13.198 5.739-20.422l-6.485-11.555c-4.055-7.225-13.198-9.795-20.422-5.739-7.224 4.054-9.794 13.198-5.739 20.422l6.485 11.555c4.058 7.231 13.207 9.789 20.422 5.739z"/><path d="m433.506 266.837c5.42-6.265 4.735-15.738-1.53-21.158l-10.653-9.216c-6.266-5.419-15.737-4.734-21.158 1.53-5.42 6.265-4.735 15.738 1.53 21.158l10.653 9.216c6.267 5.42 15.738 4.734 21.158-1.53z"/><path d="m298.648 409.607c-1.195-8.197-8.808-13.872-17.007-12.68-8.198 1.195-13.875 8.809-12.68 17.007l2.1 14.408c1.197 8.207 8.819 13.874 17.007 12.68 8.198-1.195 13.875-8.809 12.68-17.007z"/><path d="m364.473 368.682c-3.105-7.681-11.848-11.39-19.528-8.286-7.681 3.104-11.39 11.848-8.286 19.528l5.135 12.704c3.106 7.684 11.851 11.389 19.528 8.286 7.681-3.104 11.39-11.848 8.286-19.528z"/><path d="m429.369 327.892c-4.939-6.651-14.334-8.039-20.985-3.1s-8.039 14.334-3.1 20.985l8.169 11.001c4.939 6.652 14.336 8.038 20.985 3.1 6.651-4.939 8.039-14.334 3.1-20.985z"/><path d="m504.871 297.122-11.204-9.298c-6.375-5.291-15.832-4.411-21.123 1.963-5.291 6.375-4.411 15.832 1.963 21.123l11.204 9.298c6.376 5.291 15.833 4.411 21.123-1.963 5.291-6.376 4.411-15.832-1.963-21.123z"/><path d="m185.78 211.116 167.01-94.47-4.77-8.44c-19.466-34.441-63.211-46.845-97.98-27.19-45.085 25.494-45.802 25.513-52.07 30.65-26.008 21.244-34.817 59.476-16.97 91z"/><path d="m412.64 150.066-6.62-11.7c-4.098-7.281-13.378-9.796-20.58-5.72-8.672 4.894-198.697 112.377-202.73 114.66-7.182 4.049-9.835 13.273-5.71 20.58l6.62 11.71c5.532 9.779 17.922 13.215 27.71 7.69l193.62-109.51c9.768-5.535 13.229-17.918 7.69-27.71z"/></g></svg> Shower</p>
							</td>
							<td>
								<p><svg id="Capa_1" enable-background="new 0 0 510 510" height="16" viewBox="0 0 510 510" width="16" xmlns="http://www.w3.org/2000/svg"><g><path d="m461.303 344.973-221.975-23.783c-4.819-46.085-36.034-85.567-80.736-100.469l-7.123-2.374 9.384-82.092 75.078 10.62c23.3 3.298 42.398 19.213 49.838 41.536l28.461-9.486c-11.063-33.189-39.455-56.851-74.096-61.754l-142.411-20.146-39.64-70.693-26.167 14.672 40.901 72.944-22.15 193.794c-29.443 10.13-50.667 38.087-50.667 70.926 0 41.355 33.645 75 75 75v30h30v-30h300v30h30v-30h20.497c30.053 0 54.503-24.45 54.503-54.504 0-27.921-20.935-51.218-48.697-54.191zm-312.198-95.791c31.336 10.445 53.81 37.041 59.48 68.713l-67.666-7.25 7.069-61.836zm-67.843 55.07 20.162-176.403 29.714 4.205-20.051 175.395zm374.235 119.416h-380.497c-24.813 0-45-20.186-45-45 0-21.508 15.167-39.539 35.367-43.961l57.505 4.176 335.235 35.919c12.481 1.337 21.893 11.81 21.893 24.362 0 13.512-10.992 24.504-24.503 24.504z"/><path d="m75 363.668h30v30h-30z"/></g></svg> Treadmill</p>
							</td>
						</tr>
					</table>
				</div>
				<div class="hotel-rules-container" style="margin-bottom: 32px;">
					<h3 style="margin-top: 0; margin-bottom: 0">Hotel Rules</h3>
					<table class="hotel-rules-table" width="746px">
						<tr>
							<td>
								<ul style="margin-top: 8px; margin-bottom: 0; margin-left: 0;">Check-in/Check-out</ul>
								<li>Check-in from 15:00</li>
								<li>Check-out from 11:00</li>
							</td>
							<td>
								<ul style="margin-top: 8px; margin-bottom: 0; margin-left: 0;">Getting Around</ul>
								<li>Distance from city near center: 0 km</li>
							</td>
						</tr>
						<tr>
							<td>
								<ul style="margin-top: 8px; margin-bottom: 0; margin-left: 0;">Breakfast</ul>
								<li>Breakfast from 8:00 to 10:00</li>
							</td>
							<td>
								<ul style="margin-top: 8px; margin-bottom: 0; margin-left: 0;">The Property</ul>
								<li>Number of floors: 12</li>
								<li>Number of rooms: 1200</li>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="right-side-bar" style="margin-left: 8px;">
				<div class="rating-side-bar" style="border-radius: 5px; border: solid 1px #C4C4C4">
					<table width="240px">
						<tr>
							<td width="72px;">
								<a href=""><ion-icon size="large" style="color: #707070" name="heart-outline"></ion-icon></a>
								<a href=""><ion-icon size="large" style="color: #707070" name="share-social-outline"></ion-icon></a>
							</td>
							<td style="border-left: 1px solid #C4C4C4; text-align: center;">
								<p>4.5/5</p>
							</td>
						</tr>
					</table>
				</div>
				<div class="book-form-side-bar" style="border-radius: 5px; border: solid 1px #C4C4C4; margin-top: 8px; width: 240px;">
					<div class="price-tag" style="text-align: center; border-bottom: solid 1px #C4C4C4">
						<p>From $199/night</p>
					</div>
					<div class="book-form">
						<form action="/checkout" style="margin: 8px">
							<label for="room">Room</label><br>
							<select name="room" style="margin-bottom: 8px;">
    							<option value="doubleroom">Double Room</option>
    							<option value="executivedoubleroom">Executive Double Room</option>
    							<option value="familyroom">Family Room</option>
  							</select><br>
							<label for="checkinout">Check In - Check Out</label><br>
							<input type="text" name="checkinout"><br>
							<label for="guests">Guests</label><br>
							<select name="guets">
    							<option value="1adults">1 Adults</option>
    							<option value="2adults">2 Adults</option>
    							<option value="2adults1child">2 Adults + 1 Childrent</option>
    							<option value="2adults2child">2 Adults + 2 Childrent</option>
  							</select><br>
  							<button type="submit" id="book-now" style="margin-top: 8px; margin-left: 6px;">Book Now</button>					
						</form>						
					</div>
				</div>
				<div class="side-bar-gg-map" style="height: 120px; border-radius: 5px; border: solid 1px #C4C4C4; margin-top: 8px; margin-bottom: 8px;">
					<iframe width="240" height="120" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJdd4hrwug2EcRmSrV3Vo6llI&key=AIzaSyAZ7fvAtuhlRRv6O7z3eCNJSWWyv1GbACw"></iframe>
				</div>				
			</div>
		</div>
	</main>
	<footer id="footer" class="footer">
		@include('includes.footer')
	</footer>
</body>
</html>

<style type="text/css">

	.book-form select,option {
		height: 30px;
		width: 226px;

	}

	.book-form input {
		height: 24px;
		width: 218px;
		margin-bottom: 8px;
	}

	#book-now {
		width: 210px;
		height: 50px;
		background-color: #28BDDE;
		color: white;
		border-radius: 5px;
		border: none;
	}

	.logo-nav-bar {
		background-color: #00A1C5;
	}

	body {
		margin: 0;
	}

	.top-bar {
		background: #719097;
	}

	.product-page {
		margin-left: 451px;
		display: table;
		width: 1000px;
	}

	.left-side-bar {
		display: table-cell;
		width: 240px;
		vertical-align: top;
	}

	.product-content {
		display: table-cell;
		width: 746px;
		vertical-align: top;		
	}
</style>

<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}

$(function() {
  $('input[name="checkinout"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>