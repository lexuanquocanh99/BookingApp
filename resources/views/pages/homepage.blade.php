<!DOCTYPE html>
<html>
<head>
	<title>Booking App</title>
	<meta charset="utf-8">
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<body>
	<main id="content">
		<div class="image-block" style="background: url(/img1.jpg); height: 650px; ">
			@include('includes.header')
			<div class="large-title">
				<p>BOOKING</p>
			</div>
			<div class="booking-search-form">
				<div class="tabselect">
					<button class="tablink" onclick="openForm('Hotel')" id="BtnHotel" style="border-radius: 5px 0px 0px 0px;"><ion-icon name="business-outline" id="defaultOpen"></ion-icon> Hotel</button>
					<button class="tablink" onclick="openForm('Activity')" id="BtnActivity"><ion-icon name="bicycle-outline"></ion-icon></ion-icon> Activity</button>
					<button class="tablink" onclick="openForm('Rental')" id="BtnRental"><ion-icon name="car-sport-outline"></ion-icon> Rental</button>
					<button class="tablink" onclick="openForm('Tour')" id="BtnTour"><ion-icon name="earth-outline"></ion-icon> Tour</button>
				</div>
				<div class="tabcontent">
					<div id="Hotel" class="booking" style="display:none">
				<form action="/hotels">
					<table class="table" width="1000px">
						<tr>
							<td>
								<label for="destination" style="margin-left: 8px">Destination</label><br>
								<input type="text" name="destination" style="margin-left: 8px">
							</td>
							<td>
								<label for="checkinout">Check In - Check Out</label><br>
								<input type="text" name="checkinout">
							</td>
							<td>
								<label for="guests">Guests</label><br>
								<select name="guets">
    								<option value="1adults">1 Adults</option>
    								<option value="2adults">2 Adults</option>
    								<option value="2adults1child">2 Adults + 1 Childrent</option>
    								<option value="2adults2child">2 Adults + 2 Childrent</option>
  								</select>
							</td>
							<td>
								<button type="submit" id="submit-search"><ion-icon name="search-outline"></ion-icon> Search</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div id="Activity" class="booking" style="display:none">
				<form action="#">
					<table class="table" width="1000px">
						<tr>
							<td>
								<label for="destination" style="margin-left: 8px">Destination</label><br>
								<input type="text" name="destination" style="margin-left: 8px">
							</td>
							<td>
								<label for="checkinout">Check In - Check Out</label><br>
								<input type="text" name="checkinout">
							</td>
							<td>
								<label for="guests">Guests</label><br>
								<select name="guets">
    								<option value="1adults">1 Adults</option>
    								<option value="2adults">2 Adults</option>
    								<option value="2adults1child">2 Adults + 1 Childrent</option>
    								<option value="2adults2child">2 Adults + 2 Childrent</option>
  								</select>
							</td>
							<td>
								<button type="submit" id="submit-search"><ion-icon name="search-outline"></ion-icon> Search</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div id="Rental" class="booking" style="display:none">
				<form action="#">
					<table class="table" width="1000px">
						<tr>
							<td>
								<label for="destination" style="margin-left: 8px">Destination</label><br>
								<input type="text" name="destination" style="margin-left: 8px">
							</td>
							<td>
								<label for="rentaltime">Rental Time</label><br>
								<input type="text" name="rentaltime">
							</td>
							<td>
								<label for="cartype">Car Type</label><br>
								<select name="cartype">
    								<option value="2doors">2 Doors 2 Passenger</option>
    								<option value="4doors">4 Doors 5 Passenger</option>
    								<option value="suv">SUV 7 Passenger</option>
    								<option value="van">Van 16 Passenger</option>
  								</select>
							</td>
							<td>
								<button type="submit" id="submit-search"><ion-icon name="search-outline"></ion-icon> Search</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div id="Tour" class="booking" style="display:none;">
				<form action="#">
					<table class="table" width="1000px">
						<tr>
							<td>
								<label for="destination" style="margin-left: 8px">Destination</label><br>
								<input type="text" name="destination" style="margin-left: 8px">
							</td>
							<td>
								<label for="checkinout">Check In - Check Out</label><br>
								<input type="text" name="checkinout">
							</td>
							<td>
								<label for="guests">Guests</label><br>
								<select name="guets">
    								<option value="1adults">1 Adults</option>
    								<option value="2adults">2 Adults</option>
    								<option value="2adults1child">2 Adults + 1 Childrent</option>
    								<option value="2adults2child">2 Adults + 2 Childrent</option>
  								</select>
							</td>
							<td>
								<button type="submit" id="submit-search"><ion-icon name="search-outline"></ion-icon> Search</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
				</div>
			</div>
		</div>
		<div class="top-destination-container">
			<div class="destination-title">
				<h2>Top Destination</h2>
			</div>
			<div class="destination-items" style="width: 1000px">
				<table class="destination-table" width="1000px">
					<tr>
						<td>
							<div class="vietnam" style="width: 238px; height: 250px; background-image: url(/Vietnam.jpg); background-size: cover; position: relative;">
								<a href="/hotels" style="position: absolute; bottom: 0px; left: 0px; width: 100%; height: 100%;z-index: 1">&nbsp;</a>
								<a href="/hotels" style="position: absolute; bottom: 10px; left: 10px;">Viet Nam</a>
							</div>
						</td>
						<td>
							<div class="uk" style="width: 238px; height: 250px; background-image: url(/UK.jpg); background-size: cover; position: relative;">
								<a href="/hotels" style="position: absolute; bottom: 0px; left: 0px; width: 100%; height: 100%;z-index: 1">&nbsp;</a>
								<a href="/hotels" style="position: absolute; bottom: 10px; left: 10px;">United Kingdom</a>
							</div>							
						</td>
						<td>
							<div class="us" style="width: 238px; height: 250px; background-image: url(/US.jpg); background-size: cover; position: relative;">
								<a href="/hotels" style="position: absolute; bottom: 0px; left: 0px; width: 100%; height: 100%;z-index: 1">&nbsp;</a>
								<a href="/hotels" style="position: absolute; bottom: 10px; left: 10px;">United States</a>
							</div>							
						</td>
						<td>
							<div class="france" style="width: 238px; height: 250px; background-image: url(/France.jpeg); background-size: cover; position: relative;">
								<a href="/hotels" style="position: absolute; bottom: 0px; left: 0px; width: 100%; height: 100%;z-index: 1">&nbsp;</a>
								<a href="/hotels" style="position: absolute; bottom: 10px; left: 10px;">France</a>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="trending-container">
			<div class="trending-title">
				<h2>Trending</h2>
			</div>
			<div class="nav-trending-tab" style="margin-bottom: 16px">
				<a href="">Hotel</a>
				<a href="">Activity</a>
				<a href="">Rental</a>
				<a href="">Tour</a>
			</div>
			<div class="trending-items">
				<table class="trending-items-table">
					<tr>
						<td>
							<div class="trending-hotel-items" style="width: 238px; height: 260px; border-radius: 5px; border: solid 1px #C4C4C4; margin-bottom: 8px">
								<div class="hotel-thumbnail" style="width: 238px; height: 180px; background-image: url(/owall-hotel.jpg) ; background-size: cover; border-radius: 5px 5px 0px 0px;"></div>
								<div class="hotel-info" style="width: 238px; height: 80px">
									<table class="hotel-info-table" width="238px">
										<tr>
											<td>
												<h4 style="margin-top: 2px; margin-left: 2px; margin-bottom: 0px;"><a href="/hotels/landmark-london-hotel">Owall Hotel</a></h4>
												<p><ion-icon name="location-outline" style="color: #C4C4C4; margin-left: 2px;"></ion-icon> Seoul, Korea</p>
											</td>
											<td style="margin-left: 5px; text-align: center; vertical-align: top;">
												<div class="hotel-price">
													<p>From</p><p>$99/night</p>
												</div>												
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
						<td>
							<div class="trending-hotel-items" style="width: 238px; height: 260px; border-radius: 5px; border: solid 1px #C4C4C4; margin-bottom: 8px">
								<div class="hotel-thumbnail" style="width: 238px; height: 180px; background-image: url(/kings-hotel.jpg) ; background-size: cover; border-radius: 5px 5px 0px 0px;"></div>
								<div class="hotel-info" style="width: 238px; height: 80px">
									<table class="hotel-info-table" width="238px">
										<tr>
											<td>
												<h4 style="margin-top: 2px; margin-left: 2px; margin-bottom: 0px;"><a href="/hotels/landmark-london-hotel">Kings Hotel</a></h4>
												<p><ion-icon name="location-outline" style="color: #C4C4C4; margin-left: 2px;"></ion-icon> Dalat, Vietnam</p>
											</td>
											<td style="margin-left: 5px; text-align: center; vertical-align: top;">
												<div class="hotel-price">
													<p>From</p><p>$49/night</p>
												</div>												
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
						<td>
							<div class="trending-hotel-items" style="width: 238px; height: 260px; border-radius: 5px; border: solid 1px #C4C4C4; margin-bottom: 8px">
								<div class="hotel-thumbnail" style="width: 238px; height: 180px; background-image: url(/rex-hotel.jpg) ; background-size: cover; border-radius: 5px 5px 0px 0px;"></div>
								<div class="hotel-info" style="width: 238px; height: 80px">
									<table class="hotel-info-table" width="238px">
										<tr>
											<td>
												<h4 style="margin-top: 2px; margin-left: 2px; margin-bottom: 0px;"><a href="/hotels/landmark-london-hotel">Rex Hotel</a></h4>
												<p><ion-icon name="location-outline" style="color: #C4C4C4; margin-left: 2px;"></ion-icon> HCM, Vietnam</p>
											</td>
											<td style="margin-left: 5px; text-align: center; vertical-align: top;">
												<div class="hotel-price">
													<p>From</p><p>$129/night</p>
												</div>												
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
						<td>
							<div class="trending-hotel-items" style="width: 238px; height: 260px; border-radius: 5px; border: solid 1px #C4C4C4; margin-bottom: 8px">
								<div class="hotel-thumbnail" style="width: 238px; height: 180px; background-image: url(/landmark-lodon.jpg) ; background-size: cover; border-radius: 5px 5px 0px 0px;"></div>
								<div class="hotel-info" style="width: 238px; height: 80px">
									<table class="hotel-info-table" width="238px">
										<tr>
											<td>
												<h4 style="margin-top: 2px; margin-left: 2px; margin-bottom: 0px;"><a href="/hotels/landmark-london-hotel">Landmark London</a></h4>
												<p><ion-icon name="location-outline" style="color: #C4C4C4; margin-left: 2px;"></ion-icon> London, UK</p>
											</td>
											<td style="margin-left: 5px; text-align: center; vertical-align: top;">
												<div class="hotel-price">
													<p>From</p><p>$199/night</p>
												</div>												
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="trending-hotel-items" style="width: 238px; height: 260px; border-radius: 5px; border: solid 1px #C4C4C4; margin-bottom: 8px">
								<div class="hotel-thumbnail" style="width: 238px; height: 180px; background-image: url(/corinthia-hotel.jpg) ; background-size: cover; border-radius: 5px 5px 0px 0px;"></div>
								<div class="hotel-info" style="width: 238px; height: 80px">
									<table class="hotel-info-table" width="238px">
										<tr>
											<td>
												<h4 style="margin-top: 2px; margin-left: 2px; margin-bottom: 0px;"><a href="/hotels/landmark-london-hotel">Corinthia Hotel</a></h4>
												<p><ion-icon name="location-outline" style="color: #C4C4C4; margin-left: 2px;"></ion-icon> Lodon, UK</p>
											</td>
											<td style="margin-left: 5px; text-align: center; vertical-align: top;">
												<div class="hotel-price">
													<p>From</p><p>$119/night</p>
												</div>												
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
						<td>
							<div class="trending-hotel-items" style="width: 238px; height: 260px; border-radius: 5px; border: solid 1px #C4C4C4; margin-bottom: 8px">
								<div class="hotel-thumbnail" style="width: 238px; height: 180px; background-image: url(/riu-plaza.jpg) ; background-size: cover; border-radius: 5px 5px 0px 0px;"></div>
								<div class="hotel-info" style="width: 238px; height: 80px">
									<table class="hotel-info-table" width="238px">
										<tr>
											<td>
												<h4 style="margin-top: 2px; margin-left: 2px; margin-bottom: 0px;"><a href="/hotels/landmark-london-hotel">Riu Plaza</a></h4>
												<p><ion-icon name="location-outline" style="color: #C4C4C4; margin-left: 2px;"></ion-icon> New York, USA</p>
											</td>
											<td style="margin-left: 5px; text-align: center; vertical-align: top;">
												<div class="hotel-price">
													<p>From</p><p>$149/night</p>
												</div>												
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
						<td>
							<div class="trending-hotel-items" style="width: 238px; height: 260px; border-radius: 5px; border: solid 1px #C4C4C4; margin-bottom: 8px">
								<div class="hotel-thumbnail" style="width: 238px; height: 180px; background-image: url(/grand-beach.jpg) ; background-size: cover; border-radius: 5px 5px 0px 0px;"></div>
								<div class="hotel-info" style="width: 238px; height: 80px">
									<table class="hotel-info-table" width="238px">
										<tr>
											<td>
												<h4 style="margin-top: 2px; margin-left: 2px; margin-bottom: 0px;"><a href="/hotels/landmark-london-hotel">Grand Beach Hotel</a></h4>
												<p><ion-icon name="location-outline" style="color: #C4C4C4; margin-left: 2px;"></ion-icon> Miami Beach, USA</p>
											</td>
											<td style="margin-left: 5px; text-align: center; vertical-align: top;">
												<div class="hotel-price">
													<p>From</p><p>$89/night</p>
												</div>												
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
						<td>
							<div class="trending-hotel-items" style="width: 238px; height: 260px; border-radius: 5px; border: solid 1px #C4C4C4; margin-bottom: 8px">
								<div class="hotel-thumbnail" style="width: 238px; height: 180px; background-image: url(/elysees-union.jpg) ; background-size: cover; border-radius: 5px 5px 0px 0px;"></div>
								<div class="hotel-info" style="width: 238px; height: 80px">
									<table class="hotel-info-table" width="238px">
										<tr>
											<td>
												<h4 style="margin-top: 2px; margin-left: 2px; margin-bottom: 0px;"><a href="/hotels/landmark-london-hotel">Elysées Union</a></h4>
												<p><ion-icon name="location-outline" style="color: #C4C4C4; margin-left: 2px;"></ion-icon> Paris, France</p>
											</td>
											<td style="margin-left: 5px; text-align: center; vertical-align: top;">
												<div class="hotel-price">
													<p>From</p><p>$69/night</p>
												</div>												
											</td>
										</tr>
									</table>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			</div>
		</div>
	</main>

	<footer id="footer" class="footer mt-4">
		@include('includes.footer')
	</footer>
</body>
</html>

<style type="text/css">
	body {
		margin: 0;
	}

	.tabcontent select,option {
		height: 30px;
		width: 200px;
	}

	.tabcontent input {
		height: 24px;
		width: 192px;
	}

	.trending-hotel-items {
		margin-right: 8px; 
	}

	.trending-items {
		width: 1000px;
		margin-left: 451px;
	}

	.table {
		height: 100px;
	}

	.destination-table {
		margin-left: 451px;
	}

	.destination-table div {
		border-radius: 5px;
	}

	.destination-table a{
		color: white;
		font-size: 25px;
	}

	.booking-search-form {
		width: 1000px;
		border-radius: 5px;
		position: absolute;
		left: 23.75%;
	}

	.nav-trending-tab {
		width: 1000px;
		margin: 0px auto;
		text-align: center;
	}

	.nav-trending-tab a {
		margin: 4px;
		font-size: 20px;
	}

	.tablink {
		float: left;
  		border: none;
  		outline: none;
  		cursor: pointer;
  		padding: 14px 16px;
  		font-size: 17px;
  		width: 25%;
  		height: 50px;
	}

	.tabcontent {
		background: white;
		margin: 0px auto;
		width: 100%;
		text-align: left;
		border: solid 1px #C4C4C4;
		border-radius: 5px;
	}

	.tablink:hover {
  		background-color: #777;
	}

	.tablink:focus {
		background: #28BDDE;
		color: white;
	}

	.tablink:target {
		background: #28BDDE;
		color: white;
	}

	.large-title {
		height: 350px;
		margin: 0px auto;
	}

	.large-title p {
		text-align: center;
		font-size:100px;
		color: white;
	}

	#submit-search {
		width: 120px;
		height: 50px;
		color: white;
		background: #28BDDE;
		border: none;
		border-radius: 5px;
	}

	.top-destination-container {
		margin-top: 100px;
	}

	.top-destination-container h2 {
		text-align: center;
	}

	button.selected{
  		color: white;
  		background: #28BDDE;
	}

	.active_button{
		background: #28BDDE;
		color: white;
	}

</style>

<script>
$(function() {
  $('input[name="checkinout"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});

$(function() {
  $('input[name="rentaltime"]').daterangepicker({
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
      format: 'M/DD hh:mm A'
    }
  });
});


function openForm(form) {
  var i;
  var x = document.getElementsByClassName("booking");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(form).style.display = "block";
}

$('button').on('click', function(){
    $('button').removeClass('active_button');
    $(this).addClass('active_button');
});

$(document).ready(function(){
    $('#BtnHotel').addClass('active_button');
});

document.getElementById("BtnHotel").click();
</script>
