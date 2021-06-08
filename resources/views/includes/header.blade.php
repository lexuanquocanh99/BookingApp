<div class="header-container">
	<div class="top-bar">
		<div class="top-bar-left-container">
			<a href="/contact-us" style="color: white">000-000-000</a>
			<a href="/contact-us" style="color: white">info_booking@gmail.com</a>
		</div>
		<div class="top-bar-right-container">
			<div id="cart" class="dropdown">
				<button class="dropbtn"><ion-icon name="cart-outline"></ion-icon></button>
				<div class="dropdown-content" style="right: 0; left: auto; padding-left: 1px; padding-right: 1px;">
					<div class="shopping-cart">
    					<div class="shopping-cart-header">
      						<div class="shopping-cart-total">
      							<span class="lighter-text">2 Items</span>
        						<span class="lighter-text">Total:</span>
        						<span class="main-color-text">$1,669.00</span>
      						</div>
    					</div>
    					<table class="shopping-cart-items">
    						<tr>
    							<td><img src="/doubleroom.jpg" style="height: 80px; width: 150px"></td>
    							<td><p>Double Room</p><p>Form 22/03/2021 - 24/03/2021</p><p>$369.00</p></td>
    							<td><button id="btn-delete"><ion-icon name="trash-outline"></ion-icon></button></td>
    						</tr>
    						<tr>
    							<td><img src="/executivedoubleroom.jpg" style="height: 80px; width: 150px"></td>
    							<td><p>Executive Double Room</p><p>Form 25/03/2021 - 30/03/2021</p><p>$1,300.00</p></td>
    							<td><button id="btn-delete"><ion-icon name="trash-outline"></ion-icon></button></td>
    						</tr>
    					</table>

    					<a href="/checkout" id="checkout-btn" class="button" style="border-radius: 5px; border: none; background-color: #28BDDE; color: white;">Checkout</a>
  					</div>
				</div>
			</div>
			<a href="" style="color: white"><ion-icon style="color: white" name="person-circle-outline"></ion-icon> info_booking@gmail.com</a>
			<a href=""><ion-icon style="color: white" name="logo-instagram"></ion-icon></a>
			<a href=""><ion-icon style="color: white" name="logo-twitter"></ion-icon></a>
			<a href=""><ion-icon style="color: white" name="logo-facebook"></ion-icon></a>
			<div class="search-container">
				<form id="search-form" action="/hotels">
					<input id="iptsearch" type="text" name="search">
      				<button id="searchbtn" type="submit"><ion-icon name="search-outline"></ion-icon></button>
				</form>
			</div>
		</div>
	</div>
	<div id="logoNav" class="logo-nav-bar">
		<div class="logo-nav-left-container">
			<a href="/" style="text-decoration: none;"><h2 style="color: white;">LOGO</h2></a>
		</div>
		<div class="logo-nav-right-container">
			<div id="hotel-dropdown" class="dropdown">
				<button class="dropbtn">Hotel <ion-icon name="chevron-down-outline"></ion-icon></button>
					<div class="dropdown-content">
					<a href="/hotels/landmark-london-hotel">Top Hotel</a>
					<a href="/hotels">All Hotel</a>
				</div>
			</div>
			<div id="activity-dropdown" class="dropdown">
				<button class="dropbtn">Activity <ion-icon name="chevron-down-outline"></ion-icon></button>
					<div class="dropdown-content">
					<a href="#">Top Activity</a>
					<a href="#">All Activity</a>
				</div>
			</div>
			<div id="rental-dropdown" class="dropdown">
				<button class="dropbtn">Rental <ion-icon name="chevron-down-outline"></ion-icon></button>
					<div class="dropdown-content">
					<a href="#">Top Rental</a>
					<a href="#">All Rental</a>
				</div>
			</div>
			<div id="tour-dropdown" class="dropdown">
				<button class="dropbtn">Tour <ion-icon name="chevron-down-outline"></ion-icon></button>
					<div class="dropdown-content">
					<a href="#">Top Tour</a>
					<a href="#">All Tour</a>
				</div>
			</div>
			<div id="page-dropdown" class="dropdown">
				<button class="dropbtn">Page <ion-icon name="chevron-down-outline"></ion-icon></button>
					<div class="dropdown-content">
					<table>
						<tr>
							<td><a href="">Home</a></td>
							<td><a href="">About Us</a></td>
						</tr>
						<tr>
							<td><a href="">Destination</a></td>
							<td><a href="">Blog</a></td>
						</tr>
						<tr>
							<td><a href="/hotels">Hotel</a></td>
							<td><a href="">Become A Partner</a></td>
						</tr>
						<tr>
							<td><a href="">Activity</a></td>
							<td><a href="">Terms of Use</a></td>
						</tr>
						<tr>
							<td><a href="">Rental</a></td>
							<td><a href="">FAQs</a></td>
						</tr>
						<tr>
							<td><a href="">Tour</a></td>
							<td><a href="">Documentation</a></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="become-a-partner-btn-container">
				<button class="become-a-partner-btn"><strong>Become A Partner</strong></button>
			</div>
		</div>
	</div>
</div>

<style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);

@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);



.top-bar {
  overflow: hidden;
  background: rgba(0,0,0,0.1);
  border-bottom: solid 1px white;
}

.top-bar-left-container {
	margin-left: 16px;
}

.top-bar-right-container {
	margin-right: 16px;
}

.top-bar-right-container .dropdown {
	float: right;
	display: block;
}

.top-bar .top-bar-left-container a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.top-bar a:hover {
  background-color: rgba(0,0,0,0.3);;
  color: black;
}

.top-bar .top-bar-right-container a{
  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.top-bar .top-bar-right-container .search-container {
  float: right;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.logo-nav-bar {
	overflow: hidden;
	background: rgba(0,0,0,0.1);
	display: block;
}

.logo-nav-right-container {
	float: right;
	display: block;
	margin-top: 8px;
}

.dropdown {
  float: left;
  overflow: hidden;
  margin-right: 8px;
}

.become-a-partner-btn-container {
  float: left;
  overflow: hidden;
  margin-right: 56px;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: rgba(0,0,0,0.3);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.1);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.logo-nav-left-container {
	margin-left: 56px;
	float: left;
	display: block;
}

.become-a-partner-btn {
	width: 150px;
	height: 45px;
	border-radius: 5px;
	border: none;
	background: white;
}

.become-a-partner-btn:hover {
	background: #f2f2f2;
}

#iptsearch {
	border-radius: 5px;
	border: none;
	background: white;
	height: 25px;
	width: 200px;
}

#searchbtn {
	height: 25px;
	border: none;
	background: white;
	border-radius: 5px;
}

#search-form {
	border-radius: 5px;
	background: white;
}

.shopping-cart {
  float: right;
  background: white;
  position: relative;
  border-radius: 3px;
  padding: 20px;
  
  
  .shopping-cart-header {
    border-bottom: 1px solid #E8E8E8;
    padding-bottom: 15px;
    
    .shopping-cart-total {
      float: right;
    }
 }
}

#btn-delete {
	border: none;
	background: white
}
</style>