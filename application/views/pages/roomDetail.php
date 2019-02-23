<section class="banner-tems text-center">
    <div class="container">
        <div class="banner-content">
            <h2>ROOM DETAILS</h2>
        </div>
    </div>
</section>
<!-- ROOM DETAIL -->
<section class="section-product-detail">
    <div class="container">
        <!-- DETAIL -->
        <div class="product-detail margin"> 
            <div class="row">
                <div class="col-lg-9">                       
                    <!-- LAGER IMGAE -->
                    <div class="wrapper">                           
                        <div class="gallery3">
                           <?php if($imgs) { foreach ($imgs as $data){?>
                            <div class="gallery__img-block  ">
                                
                                <img src="<?php echo $admin.$data->path; ?>" alt="<?php echo $admin.$data->path; ?>" class="">
                            </div>                                
                            
                            <?php } }    ?> 
                            <div class="gallery__controls">
                            </div>
                        </div>                            
                    </div>
                    <!-- END / LAGER IMGAE -->
                    
                </div>
                <div class="col-lg-3">
                    <!-- FORM BOOK -->
                    <div class="product-detail_book">                            
                        <div class="product-detail_form">
                           <form action="<?php echo base_url(); ?>View/hotelBook/<?php echo $data->h_id;?>" method="POST">
                            <div class="sidebar">                                   
                                <!-- WIDGET CHECK AVAILABILITY -->
                                <div class="widget widget_check_availability">
                                    <div class="check_availability">                                           
                                        <div class="check_availability-field input-daterange input-group" id="datepicker" data-date-format="dd-mm-yyyy">
                                            <label>Check In</label>                                                
                                            <input  type="text" 
                                            class="input-sm form-control check-date" 
                                            id="datepicker start"                                   
                                            name="fromDate"     
                                            value="<?php echo date('d-m-Y',strtotime($this->session->userdata('fDate')));?>" 
                                            name="fDate">
                                        </div>
                                        <div class="check_availability-field input-daterange input-group" id="datepicker1" data-date-format="dd-mm-yyyy">
                                            <label>Check Out</label>                                                
                                            <input  type="text" 
                                            class="input-sm form-control check-date" 
                                            id="datepicker1 end"                                    
                                            name="toDate"   
                                            value="<?php echo date('d-m-Y',strtotime($this->session->userdata('tDate')));?>" 
                                            name="tDate"
                                            onkeyup="date_diff_indays(<?php echo date('d-m-Y',strtotime($this->session->userdata('tDate')));?>,<?php echo date('d-m-Y',strtotime($this->session->userdata('fDate')));?>)"> 
                                            
                                        </div>
                                        <div class="check_availability-field text-center">
                                            <label id="dateDiffval"style="color: #8E7037;letter-spacing:1px;">Staying
                                                <?php 
                                                $start = $this->session->userdata('fDate');
                                                $end = $this->session->userdata('tDate');
                                                $diff = date_diff(date_create($start), date_create($end));
                                                $totNight = $diff->format('%d');
                                                if($totNight == 0 || $totNight == 1)
                                                 echo "1 Night";
                                             else
                                                echo $totNight." Nights";
                                            ?>!
                                        </label>
                                    </div>
                                    <div class="check_availability-field">
                                        <label>People</label>
                                        <select class="check_availability_option" name="people">
                                           <option><?php echo  $this->session->userdata('people');?></option>
                                           <option value="1" >1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                       </select>
                                   </div>
                                   <div class="check_availability-field">
                                    <label>Rooms</label>
                                    <select class="check_availability_option" name="rooms">
                                       <option><?php echo  $this->session->userdata('room');?></option>
                                       <option value="1" class="option_val">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                   </select>
                               </div>
                               
                           </div>
                       </div>
                       <!-- END / WIDGET CHECK AVAILABILITY -->
                       
                   </div>
                   <button class="btn btn-room btn-product">Book Now</button>
               </form>
           </div>
       </div>
       <!-- END / FORM BOOK -->
   </div>
</div>
</div>
<!-- END / DETAIL -->
<!-- TAB --><div>
    <?php if($vcs) { foreach ($vcs as $data){?>
        <div class="product-detail_tab">
            <div class="row">
               <div class="col-md-12">
                <h2 class="hotel_name"><a href="#"><?php echo $data->h_name;?></a></h2>
            </div>
            <div class="product-detail_total col-md-12">
                <p class="">
                    <span class="detail_price">₹<?php echo $data->cpn;?></span> /night
                </p>
            </div>
            <div class="product-detail_total col-md-12">
                <p class="">
                    <span class=""><?php echo $data->location;?></span> 
                </p>
            </div>
            <div class="col-md-3">
                <ul class="product-detail_tab-header">
                    <li class="active"><a href="#overview" data-toggle="tab">OVERVIEW</a></li>                           
                    <li><a href="#offers" data-toggle="tab">OFFERS</a></li>                            
                </ul>
            </div>
            <div class="col-md-9">
                <div class="product-detail_tab-content tab-content">
                    <!-- OVERVIEW -->
                    <div class="tab-pane fade active in" id="overview">
                        <div class="product-detail_overview">
                            <h5 class='text-upperc'>Overview</h5>
                            <p>Located in the heart of the City with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service for an elevated experience in the Rocky Mountains.</p>
                            <div class="row">
                                <div class="col-xs-6 col-md-4">
                                    <h6>SPECIAL ROOM</h6>
                                    <ul>
                                        <li>Max: 4 Person(s)</li>
                                        <li>Size: 35 m2 / 376 ft2</li>
                                        <li>View: Ocen</li>
                                        <li>Bed: King-size or twin beds</li>
                                    </ul>
                                </div>
                                <div class="col-xs-6 col-md-4">
                                    <h6>SERVICE ROOM</h6>
                                    <ul>
                                        <li>Free WiFi Internet</li>
                                        <li>Parking</li>
                                        <li>Bar</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / OVERVIEW -->
                    
                    <!--offers -->
                    
                    <div class="tab-pane fade" id="offers" >
                        <h4 class="offer_re">Select any one offer from all available offers.</h4>
                        <div>
                            <div class="product-detail_package">
                               
                                <!-- ITEM offer -->
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 offer_card">
                                    <div class="room-item-1">                            
                                        <div class="img">
                                            <a href="#"><img src="<?php echo base_url()?>assets/images/offers/offer1 (1).jpg" alt="#"></a>
                                        </div>
                                        <p>Up to <b>₹1,000</b> OFF on <b>Refer & Earn</b>!<br><br>Coupon Code: <b>BYREARN</b><br><br><b>Get Flat 20% OFF on BYR Lucky Guests.</b></p>
                                    </div>
                                </div>
                                <!-- END / ITEM offer -->
                                <!-- ITEM offer -->
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 offer_card">
                                    <div class="room-item-1">                            
                                        <div class="img">
                                            <a href="#"><img src="<?php echo base_url()?>assets/images/offers/offer1 (2).jpg" alt="#"></a>
                                        </div>
                                        <p><b>Book Hotels with Zero Advance Payment</b><br><br>100% Confirmed Booking without Credit Card<br>Search.
                                            Book.<br><b>Pay When You Stay!</b></p>            
                                        </div>
                                    </div>
                                    <!-- END / ITEM offer -->
                                </div>
                            </div></div>
                            <!-- END / offer -->

                        </div>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
        <!-- END / TAB -->
        
    </div>
</section>
<!-- END / SHOP DETAIL -->
<!--FOOTER-->
<footer class="footer-sky">
    
    <div class="footer-mid">
        <div class="container">
            
            <div class="footer-bottom">
               <div class="col-md-2 ">
                <div class="footer-logo text-center list-content">
                    <a href="index.html" title="BYR"><img src="<?php echo base_url()?>assets/images/logo/logo_1.png" alt="Image"></a>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 no-padding text-center">
                ©  2018 <a href="#" title="">Book Your Rooms</a> All Rights Reserved.
            </div>
            <div class="col-md-4 no-padding">
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<!-- Custom jQuery -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/sky.js"></script>