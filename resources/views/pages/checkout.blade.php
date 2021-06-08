<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
	<meta charset="utf-8">
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</head>
<body>
	<header>
		@include('includes.header')
	</header>

	<main id="content">
		<div class="checkout-page" style="margin-top: 32px; margin-bottom: 32px;">
			<div class="checkout-content">
				<form action="#">
					<div class="tabselect" style="border: solid 1px #C4C4C4; border-radius: 5px 5px 0px 0px;">
					<table width="746px" class="tabselect-table" style="text-align: center;">
						<tr>
							<th>
								<button type="button" class="tablink" onclick="openForm('Customer')" id="BtnCustomer">1</button>
								<p style="margin-top: 8px; margin-bottom: 8px;">Customer</p>
							</th>
							<th>
								<button type="button" class="tablink" onclick="openForm('Payment')" id="BtnPayment">2</button>
								<p style="margin-top: 8px; margin-bottom: 8px;">Payment</p>
							</th>
							<th>
								<button type="button" class="tablink" onclick="openForm('Confirm')" id="BtnConfirm">3</button>
								<p style="margin-top: 8px; margin-bottom: 8px;">Confirmed</p>
							</th>
						</tr>
					</table>
				</div>
				<div class="tabcontent" style="border: solid 1px #C4C4C4; border-radius: 0px 0px 5px 5px; height: 305px;">
					<div id="Customer" class="checkout" style="margin-top: 16px; margin-bottom: 16px;">
						<table class="customer-table" width="746px">
							<tr>
								<td>
									<label for="firstname" style="margin-left: 8px">First Name</label><br>
									<input type="text" name="firstname" style="margin-left: 8px">
								</td>
								<td>
									<label for="lastname" style="margin-left: 8px">Last Name</label><br>
									<input type="text" name="lastname" style="margin-left: 8px">									
								</td>
							</tr>
							<tr>
								<td>
									<label for="email" style="margin-left: 8px">Email</label><br>
									<input type="text" name="email" style="margin-left: 8px">
								</td>
								<td>
									<label for="phone" style="margin-left: 8px">Phone</label><br>
									<input type="text" name="phone" style="margin-left: 8px">
								</td>
							</tr>
							<tr>
								<td>
									<label style="margin-left: 8px;" for="country">Country</label><br>
									<select name="country">
    									<option value="us">United States</option>
    									<option value="uk">United Kingdom</option>
    									<option value="fr">France</option>
    									<option value="vn">Vietnam</option>
    									<option value="kr">Korea</option>
    									<option value="jp">Japan</option>
  									</select>
								</td>
								<td>
									<label style="margin-left: 8px;" for="city">City</label><br>
									<select name="country">
    									<option value="us">United States</option>
    									<option value="uk">United Kingdom</option>
    									<option value="fr">France</option>
    									<option value="vn">Vietnam</option>
    									<option value="kr">Korea</option>
    									<option value="jp">Japan</option>
  									</select>									
								</td>
							</tr>
							<tr>
								<td>
									<label for="streetaddress" style="margin-left: 8px">Street Address</label><br>
									<input type="text" name="streetaddress" style="margin-left: 8px">
								</td>
							</tr>
						</table>
						<div class="nav-btn" style="float: right; margin: 8px;">
							<button id="next" type="button" onclick="nextPayment()">Next</button>
						</div>
					</div>
					<div id="Payment" class="checkout" style="margin-top: 16px; margin-bottom: 16px; display: none;">
						<table class="payment-table" width="746px">
							<tr>
								<div class="accept-cart" style="margin-left: 12px;">
									<label for="fname">Accepted Cards</label>
            						<div class="icon-container" style="font-size: 24px;" >
            						  <i class="fa fa-cc-visa" style="color:navy;"></i>
            						  <i class="fa fa-cc-amex" style="color:blue;"></i>
            						  <i class="fa fa-cc-mastercard" style="color:red;"></i>
            						  <i class="fa fa-cc-discover" style="color:orange;"></i>
            						</div>
								</div>
							</tr>
							<tr>
								<td>
									<label for="nameoncard" style="margin-left: 8px">Name On Card</label><br>
									<input type="text" name="nameoncard" style="margin-left: 8px" placeholder="John Moe">
								</td>
								<td>
									<label for="creditcardnumber" style="margin-left: 8px">Credit Card Number</label><br>
									<input type="text" name="creditcardnumber" style="margin-left: 8px" placeholder="1111-2222-3333-4444">
								</td>
							</tr>
							<tr>
								<td>
									<label for="expmonth" style="margin-left: 8px">Exp Month</label><br>
									<input type="text" name="expmonth" style="margin-left: 8px" placeholder="September">
								</td>
								<td>
									<label for="expyear" style="margin-left: 8px">Exp Year</label><br>
									<input type="text" name="expyear" style="margin-left: 8px" placeholder="2017">									
								</td>
							</tr>
							<tr>
								<td>
									<label for="cvv" style="margin-left: 8px">CVV</label><br>
									<input type="text" name="cvv" style="margin-left: 8px" placeholder="352">
								</td>
							</tr>
						</table>
						<div class="nav-btn" style="float: right; margin: 8px;">
							<button id="pre" type="button" onclick="preCustomer()">Previous</button>
							<button id="next" type="button" onclick="nextConfirm()">Next</button>
						</div>
					</div>
					<div id="Confirm" class="checkout" style="margin-top: 16px; margin-bottom: 16px; display: none;">
						<table class="confirm-table" width="746px">
							<tr>
								<td>
									<p style="margin-left: 8px;">First Name: John</p>
									<p style="margin-left: 8px;">Last Name: Moe</p>
									<p style="margin-left: 8px;">Address: Whitehall Place, Westminster Borough, London, UK</p>
									<p style="margin-left: 8px;">Visa Card</p>
									<p style="margin-left: 8px;">Exp Month: September</p>
									<p style="margin-left: 8px;">CVV: 352</p>
								</td>
								<td>
									<p>Email: johnmoe219@gmail.com</p>
									<p>Phone: 000-000-000</p>
									<p>Country: United Kingdom</p>
									<p>Credit Card Number: 1111-2222-3333</p>
									<p>Exp Year: 2017</p>
								</td>
							</tr>
						</table>
						<div class="nav-btn" style="float: right; margin: 8px;">
							<button id="pre" type="button" onclick="prePayment()">Previous</button>
							<button type="submit" id="checkout"><ion-icon name="cart-outline"></ion-icon> Checkout</button>
						</div>
					</div>
				</div>
				</form>
			</div>
			<div class="right-cart-side-bar">
				<div class="cart-items" style="margin-left: 16px; border-radius: 5px; border: solid 1px #C4C4C4;">
					<div class="item-image">
						<img src="/familyroom.webp" width="240px" height="120px" style="overflow: hidden;">
					</div>
					<div class="item-info" style="border-bottom: solid 1px #C4C4C4;">
						<p style="margin: 0; margin-left: 8px; font-size: 20px;"><strong>Family Room</strong></p>
						<p style="color: #707070; margin-bottom: 8px; margin-left: 8px; margin-top: 8px;"><ion-icon name="location-outline" style="color: #707070; margin-left: 2px;"></ion-icon> Lodon, UK</p></p>
					</div>
					<div class="booking-details" style="border-bottom: solid 1px #C4C4C4;">
						<p style="margin-left: 8px; font-size: 20px; margin-top: 8px; margin-bottom: 8px;"><strong>Booking Details</strong></p>
						<p style="margin: 0; margin-left: 8px; color: #707070">Date</p>
						<p style="margin: 0; margin-left: 8px; color: #707070; text-align: center; margin-bottom: 8px;">22/03/2021</p>
						<p style="margin: 0; margin-left: 8px; color: #707070">Durations</p>
						<p style="margin: 0; margin-left: 8px; color: #707070; text-align: center;  margin-bottom: 8px;">1 night</p>
						<p style="margin: 0; margin-left: 8px; color: #707070">Guests</p>
						<p style="margin: 0; margin-left: 8px; color: #707070; text-align: center;  margin-bottom: 8px;">2 adults + 2 child</p>
					</div>
					<div class="coupon-code" style="border-bottom: solid 1px #C4C4C4;">
						<p style="margin: 0; margin-left: 8px; font-size: 20px; margin-bottom: 8px;"><strong>Coupon code</strong></p>
						<input type="text" name="coupon" style="margin-left: 8px; margin-bottom: 8px;">
						<button id="coupon" type="button" style="margin-left: 130px; margin-bottom: 8px;">Apply</button>
					</div>
					<div class="total-price">
						<p style="margin: 0; margin-left: 8px; font-size: 20px; margin-bottom: 8px;"><strong>Price</strong></p>
						<table class="price-table" width="240px">
							<tr>
								<td>
									<p style="margin-top: 8px; margin-left: 8px;margin-left: 8px; color: #707070;">Price</p>
								</td>
								<td style="text-align: right; color: #707070;">
									<p style="margin-right: 8px;margin-top: 8px; margin-left: 8px;">$199</p>
								</td>
							</tr>
							<tr>
								<td>
									<p style="margin-top: 8px; margin-left: 8px;margin-left: 8px; color: #707070;">Coupon Code</p>
								</td>
								<td style="text-align: right; color: #707070;">
									<p style="margin-right: 8px;margin-top: 8px; margin-left: 8px;">5%</p>
								</td>
							</tr>
							<tr>
								<td>
									<p style="margin-top: 8px; margin-left: 8px;margin-left: 8px; color: #707070;">Subtotal</p>
								</td>
								<td style="text-align: right; color: #707070;">
									<p style="margin-right: 8px;margin-top: 8px; margin-left: 8px;">$189.05</p>
								</td>
							</tr>
							<tr>
								<td>
									<p style="margin-top: 8px; margin-left: 8px;margin-left: 8px; color: #707070;">Tax</p>
								</td>
								<td style="text-align: right; color: #707070;">
									<p style="margin-right: 8px;margin-top: 8px; margin-left: 8px;">10%</p>
								</td>
							</tr>
							<tr>
								<td>
									<p style="margin-top: 8px; margin-left: 8px;margin-left: 8px; color: #707070;">Payment Amount</p>
								</td>
								<td style="text-align: right; color: #707070;">
									<p style="margin-right: 8px;margin-top: 8px; margin-left: 8px;">$179.01</p>
								</td>
							</tr>

						</table>
					</div>
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

	.active_button {
		background-color: #28BDDE;
		color: white;
	}

	#next {
		height: 30px;
		width: 100px;
		color: white;
		border-radius: 5px;
		border: none;
		background-color: #28BDDE;
	}

	#coupon {
		height: 30px;
		width: 100px;
		color: white;
		border-radius: 5px;
		border: none;
		background-color: #28BDDE;
	}

	#pre {
		height: 30px;
		width: 100px;
		color: white;
		border-radius: 5px;
		border: none;
		margin-right: 520px;
		background-color: #28BDDE;
	}

	#checkout {
		height: 50px;
		width: 100px;
		color: white;
		border-radius: 5px;
		border: none;
		background-color: #32a86d;
	}

	.tabcontent select,option {
		height: 30px;
		width: 226px;
		margin-left: 8px;
		margin-bottom: 8px;
	}

	.tabcontent input {
		height: 24px;
		width: 218px;
		margin-bottom: 8px;
	}

	.coupon-code input {
		height: 24px;
		width: 218px;
		margin-bottom: 8px;
	}

	.tabselect button {
		border-radius: 50%; 
		height: 50px; 
		width: 50px;
		border: solid 1px #C4C4C4;
		background-color: #white;
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

	.checkout-page {
		margin-left: 451px;
		display: table;
		width: 1000px;
	}

	.right-cart-side-bar {
		display: table-cell;
		width: 240px;
		vertical-align: top;
	}

	.checkout-content {
		display: table-cell;
		width: 746px;
		vertical-align: top;	
	}

</style>

<script type="text/javascript">
function openForm(form) {
  var i;
  var x = document.getElementsByClassName("checkout");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(form).style.display = "block";
}

function nextPayment() {
	document.getElementById('BtnPayment').click();
	$(document).ready(function(){
	$('#BtnCustomer').removeClass('active_button');
    $('#BtnPayment').addClass('active_button');
});
}


function preCustomer() {
	document.getElementById('BtnCustomer').click();
	$(document).ready(function(){
	$('#BtnPayment').removeClass('active_button');
    $('#BtnCustomer').addClass('active_button');
});
}

function nextConfirm() {
	document.getElementById('BtnConfirm').click();
	$(document).ready(function(){
	$('#BtnPayment').removeClass('active_button');
    $('#BtnConfirm').addClass('active_button');
});
}


function prePayment() {
	document.getElementById('BtnPayment').click();
	$(document).ready(function(){
	$('#BtnConfirm').removeClass('active_button');
    $('#BtnPayment').addClass('active_button');
});
}

$('button').on('click', function(){
    $('button').removeClass('active_button');
    $(this).addClass('active_button');
});

$(document).ready(function(){
    $('#BtnCustomer').addClass('active_button');
});


</script>