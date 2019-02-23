
	<!-- SLIDER -->
	<section class="section-slider height-v">
		<div id="index12" class="owl-carousel  owl-theme">
			<div class="item">
				<img alt="Third slide" src="<?php echo base_url()?>assets/images/slider/7.jpg" class="img-responsive slider">
				<div class="carousel-caption">
					<h1 class="v2">Luxury. Redefined.</h1>
					<p class="p-v2"><span class="line-t"></span>Hotels & Resorts <span class="line-b"></span></p>
				</div>
			</div>
			<div class="item">
				<img alt="Third slide" src="<?php echo base_url()?>assets/images/slider/6.jpg" class="img-responsive slider">
				<div class="carousel-caption">
					<h1 class="v2">Spend Less, Save Much</h1>
					<p class="p-v2"><span class="line-t"></span>Hotels & Resorts <span class="line-b"></span></p>
				</div>
			</div>
			<div class="item">
				<img alt="Third slide" src="<?php echo base_url()?>assets/images/slider/1.jpg" class="img-responsive slider">
				<div class="carousel-caption">
					<h1 class="v2"> Hotels to celebrate life</h1>
					<p class="p-v2"><span class="line-t"></span>Hotels & Resorts <span class="line-b"></span></p>
				</div>
			</div>
		</div>

		<div class="container">
		 <div class="row"> 
			<div class="avail">                
				<div class="col-md-12">                 
					<form name="searchForm" action="<?php echo base_url()?>View/Search" method="POST">
					 <div class="row"> 
						<div class="col-md-12">
							<div class="headbar">
								<h2>Find Your Hotel</h2>
								<hr class="style-one"/>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group inner-addon left-addon">
								<label class="control-label">Location</label>
								<input type="text"
								class="form-control location"          
								id="autocomplete"                                                           
								name="location"
								placeholder="Location"
								maxlength="30" 
								autofocus                                                                                                                                         
								required>
								<img src="<?php echo base_url()?>assets/images/loc1.png" id="input_img">
							</div>
						</div>                                          
						<div class="col-md-4">
							<label class="control-label">Check In & Check Out</label>
							<div class="input-daterange input-group" id="datepicker" data-date-format="dd-mm-yyyy">
								<input type="text" class="input-sm form-control check-date" id="datepicker" name="fromDate" placeholder="From date"/>
								<span class="input-group-addon">To</span>
								<input type="text" class="input-sm form-control check-date" id="datepicker" name="toDate" placeholder="To date"/>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group ">
								<label class="control-label">Peoples & Rooms</label>
								<div class="input-group" id="" >
									<input type="text" class="form-control small_field" placeholder="1,2,.." maxlength="1" name="people" required/>
									<span class="input-group-addon">&</span>
									<input type="text" class="form-control small_field" placeholder="1,2,.." maxlength="1" name="rooms"  required/>									
								</div>     
								<p id="errPeople" style="color:#fff;"></p>                                                 
							</div>
						</div>
						<div class="col-md-3">
							<div class="">
								<button type="submit" class="btn btn-search" >SEARCH</button>
							</div>
						</div>  
					</div>                                      
				</form>
			</div>
		</div>                
	</div>
		</div>
	</section>
	<!-- END / SLIDER -->
	<!-- SLIDER -->
	<section class="section-slider text-center section-slider-v3 deals">
		<div class="container">
		 <div class="row login_card">
			<div class="col-md-8">
			 <h2 class="loginMsg"> More Offers ! </h2><h2 class="textOther">Guaranteed Cashback upto 50% ! </h2>
			 <p>Just Log In And get offer Code directly on your mobile! Don't have account <a class="signupLink" href="<?php echo base_url()?>Signup">SIGN UP</a> Now.</p> 									
		 </div>
		 <div class="col-md-4">
			 <div class="loginLink">
				<a  href="<?php echo base_url()?>LogIn"> LOG IN </a>
				<img src="<?php echo base_url()?>assets/images/resource/arrow.png">
			</div>
		</div>
	</div>
	<h2 class="title-room"> Planning For a Holiday Trip </h2>
	<div class="outline"></div>
	<p class="rooms-p">Here are some great deals..</p>
	<div id="index122" class="owl-carousel  owl-theme">

		<div class="deals_card">
			<img src="<?php echo base_url()?>assets/images/Hotdeals/trident.jpg" class="img-responsive" alt="Deluxe Room" title="Deluxe Room">
			<div class="overlay">
				<div class="text">Up to 25% Cashback* on Trident Hotels for Citi Cards</div>
				<a href="">Take A Look</a>
			</div>
		</div>

		<div class="deals_card">
			<img src="<?php echo base_url()?>assets/images/Hotdeals/ITC.jpg" class="img-responsive" alt="Deluxe Room" title="Deluxe Room">
			<div class="overlay">
				<div class="text">Amazing Holiday Packages - 4N/5D Starting @ INR 26,990!</div>
				<a href="">Take A Look</a>
			</div>
		</div>
		<div class="deals_card">
			<img src="<?php echo base_url()?>assets/images/Hotdeals/rio.jpg" class="img-responsive" alt="Deluxe Room" title="Deluxe Room">
			<div class="overlay">
			 <div class="text"><b>Never Before Offer!</b><br>30% Cashback for Citi Cards</div>
			 <a href="">Take A Look</a>
		 </div>
	 </div>
	 <div class="deals_card">
		<img src="<?php echo base_url()?>assets/images/Hotdeals/goa.jpg" class="img-responsive" alt="Deluxe Room" title="Deluxe Room">
		<div class="overlay">
		 <div class="text"><b>Plannig for Goa?</b> Check out the Best Deals!</div>
		 <a href="">Take A Look</a>
	 </div>
	</div>
	<div class="deals_card">
		<img src="<?php echo base_url()?>assets/images/Hotdeals/jaipur.jpg" class="img-responsive" alt="Deluxe Room" title="Deluxe Room">
		<div class="overlay">
			<div class="text"><b>Never Before Offer!</b><br>30% Cashback on Refer And Earn!</div>
			<a href="">Take A Look</a>
		</div>
	</div>

	</div>
	</div>
	</section>
	<!-- END / SLIDER -->
	<!-- OUR-ROOMS-->
	<section class="rooms ">
		<div class="container">
			<h2 class="title-room"> Let us inspire you</h2>
			<div class="outline"></div>
			<p class="rooms-p">Confuse on where to go? Check this destinations.</p>
			<div class="row">
			 <?php if($hotelSet) {
				foreach ($hotelSet as $data):?>
				 <!-- item starts -->
				 <div class="col-md-4">
					 <div class="card">
						 <div class="">
							 <img src="<?php echo $admin.$data->path;?>" class="img-responsive" alt="Deluxe Room" title="Deluxe Room">
						 </div>
						 <div class="rooms-content">
							 <h4 class="room_name"><?php echo $data->h_name?></h4>
							 <h6 class="room_city"><?php echo $data->city?></h6>
							 <p class="price">Few rooms left. Book Now!</p>
						 </div>
						 <div class="rooms-content_save">
							<div class="fd_price_discount">
								<span class="" style="font-size: 18px;"><span>₹</span><?php echo $data->cpn?></span>
								<span style="text-decoration: line-through; padding-left: 2%; font-size: 14px;"><span>₹</span>3879</span>
							</div>
							<div class="fd_price_save">
								<span style="color: green; font-weight: 300;">Save<span style="font-size: 18px;" >
								29 %</span></span>
							</div>
						</div>
					</div>
				</div>
				<!-- item ends -->
			<?php endforeach; } ?>                  
		</div>
	</div>
	<!-- /container -->
	</section>
	<!-- END / ROOMS -->    
	<!--FOOTER-->
	<footer class="footer-sky footer-sky-v4">
		<div class="container">
			<div class="footer-top">                
				<h2>Why Book Your Rooms?</h2>
				<p>The leading player in online flight bookings in India, BookYourRooms offers great offers, some of the lowest airfares, exclusive discounts and a seamless online booking experience. Flight, hotel and holiday bookings through the desktop or mobile site is a delightfully customer friendly experience, and with just a few clicks you can complete your booking. With features like Instant Discounts, Fare Calendar, MyRewards Program, MyWallet and many more, the overall booking experience with BookYourRooms constantly adds value to its product and continues to offer the best to its customers.</p>
				<h2>Why Book Your Rooms?</h2>
				<p>The leading player in online flight bookings in India, BookYourRooms offers great offers, some of the lowest airfares, exclusive discounts and a seamless online booking experience. Flight, hotel and holiday bookings through the desktop or mobile site is a delightfully customer friendly experience, and with just a few clicks you can complete your booking. With features like Instant Discounts, Fare Calendar, MyRewards Program, MyWallet and many more, the overall booking experience with BookYourRooms constantly adds value to its product and continues to offer the best to its customers.</p>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="footer-links ">
						<a href="#" title="Twitter">About</a>
						<a href="#" title="Facebook">Contact</a>
						<a href="#" title="Isnstagram">FAQs</a>
					</div>
				</div>
			</div>
			<div class="footer-bottom bottom-v3">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
						<div class="footer-bottom-l">
							© 2018 <a href="#" title="">Book Your Rooms </a>All Rights Reserved.
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<div class="footer-icon text-center">
							<a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							<a href="#" title="Isnstagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
						<div class="payments text-right">
							<ul>
								<li>
									<a href="#" title="Paypal"><img src="<?php echo base_url()?>assets/images/Home-1/Paypal.png" alt="Paypal"></a>
								</li>
								<li>
									<a href="#" title="Visa"><img src="<?php echo base_url()?>assets/images/Home-1/Visa.png" alt="Visa"></a>
								</li>
								<li>
									<a href="#" title="Master"><img src="<?php echo base_url()?>assets/images/Home-1/Master-card.png" alt="Master"></a>
								</li>
								<li>
									<a href="#" title="Discover"><img src="<?php echo base_url()?>assets/images/Home-1/Rupay.png" alt="Discover"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>
	</footer>
	<!-- END / FOOTER-->
	<!--SCOLL TOP-->
	<a href="#" title="sroll" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
	<!--END / SROLL TOP-->
	<!-- LOAD JQUERY -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/vit-gallery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.countTo.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.appear.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-select.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.littlelightbox.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>
	<script src=""></script>
	<!-- Custom jQuery -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/sky.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.autocomplete.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/currency-autocomplete.js"></script>
	<script  type="text/javascript" >
		function verify(){
			var c = /^\d{1}$/;
			if((!document.searchForm.people.value.match(c)) || (!document.searchForm.rooms.value.match(c)) )
			{
					alert("Please give number!");
			}
      return false;
		}
	</script>