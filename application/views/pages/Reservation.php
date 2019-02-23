    <!-- BANNER -->
    <section class="banner-tems text-center">
        <div class="container">
            <div class="banner-content">
                <h2>Reservation</h2>
                <p></p>

            </div>
        </div>
    </section>
    <!-- END-BANNER -->

    <!-- RESERVATION
        <form method="" name="form1">-->
            <form action="<?php echo base_url(); ?>View/reservation" method="POST">
                <section class="section-reservation-page">
                    <div class="container">

                        <div class="reservation-page">
                            <!-- STEP -->
                            <div class="reservation_step">
                                <ul>                        
                                    <li class="active"><a href="#"><span></span><h4>RESERVATION</h4></a></li>
                                </ul>
                            </div>
                            <!-- END / STEP -->

                            <div class="row">
                                <!-- SIDEBAR -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="reservation-sidebar">
                                        <!-- RESERVATION DATE -->
                                        <div class="reservation-date">
                                         <div class="row">
                                           <div class="col-md-12">
                                             <!-- HEADING -->
                                             <h2 class="reservation-heading">Dates</h2>
                                             <!-- END / HEADING -->
                                         </div>
                                         <div class="col-md-12">																		
                                             <ul>
                                                <div class="row">                               							
                                                   <li>
                                                      <div class="col-md-6">
                                                         <span>Check-In</span>
                                                     </div>
                                                     <div class="col-md-6">
                                                         <div class=" input-daterange input-group" id="datepicker" data-date-format="dd-mm-yyyy">           <input  type="text" 
                                                             class="input-sm form-control check-date" 
                                                             id="datepicker" 				      				
                                                             name="fromDate" 	
                                                             value="<?php echo date('d-m-Y',strtotime($this->session->userdata('fDate')));?>" 
                                                             name="fDate" disabled>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li>
                                                  <div class="col-md-6">
                                                     <span>Check-Out</span>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class=" input-daterange input-group" id="datepicker1" data-date-format="dd-mm-yyyy">                                              
                                                         <input  type="text" 
                                                         class="input-sm form-control check-date" 
                                                         id="datepicker1" 				      				
                                                         name="toDate" 	
                                                         value="<?php echo date('d-m-Y',strtotime($this->session->userdata('tDate')));?>" 
                                                         name="tDate" disabled>
                                                     </div>
                                                 </div>
                                             </li>
                                             <li>
                                              <div class="col-md-6">
                                                 <span>Total Nights</span>
                                             </div>
                                             <div class="col-md-6">
                                                 <span><input type="text" class="awe-select" size="16" maxlength="2" id="days"
                                                  style="text-indent:42px;"
                                                  value="<?php
                                                  $start = $this->session->userdata('fDate');
                                                  $end = $this->session->userdata('tDate');
                                                  $diff = date_diff(date_create($start), date_create($end));
                                                  $tot = $diff->format('%d');
                                                  if($tot == 0)
                                                  echo '1 Night';
                                                  else
                                                  echo $tot;
                                                  ?>"
                                                  readonly></span>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="col-md-6">
                                                 <span>Peoples</span>
                                             </div>
                                             <div class="col-md-6">
                                                 <span><input type="text" 
                                                  style="text-indent:14px;"
                                                  id="people"
                                                  size="2"  
                                                  maxlength="1"
                                                  value="<?php echo  $this->session->userdata('people');?>" readonly>
                                              </span>
                                          </div>
                                      </li>
                                      <li>
                                         <div class="col-md-6">
                                             <span>Rooms</span>
                                         </div>
                                         <div class="col-md-6">
                                             <span><input type="text" style="text-indent:14px;"
                                               id="rooms"
                                               size="2"  maxlength="1"
                                               value="<?php echo  $this->session->userdata('room');?>" readonly>
                                           </span>
                                       </div>
                                   </li>
                               </div>
                           </ul>
                       </div>
                   </div> <!-- inner row -->
               </div>
               <!-- END / RESERVATION DATE -->
               <!-- ROOM SELECT -->
               <div class="reservation-room-selected selected-4 ">
                 <?php if($vcs) { foreach ($vcs as $data){?>
                    <!-- HEADING -->
                    <h2 class="reservation-heading">Selected Rooms</h2>
                    <!-- END / HEADING -->
                    <!-- ITEM -->
                    <div class="reservation-room-seleted_item">
                        <div class="reservation-room-seleted_name has-package">
                            <h2><a href="#"><?php echo $data->h_name; ?></a></h2>
                        </div>
                        <div class="reservation-room-seleted_package">
                            <h6>Space Price</h6>
                            <ul>
                                <li>
                                    <span>Cost Per Night</span>
                                    <span id="cpn">₹ <?php echo $data->cpn; ?>.00</span>
                                </li>
                                <li>
                                    <span>BYR Service Charge</span>
                                    <span>₹ 0.00</span>
                                </li>                                            
                            </ul>
                            <ul>
                             <li>
                                <span>Net Total (<?php echo $rooms ?> Rooms, <?php echo $days ?> Nights)</span>
                                <span id="netTotal">00</span>
                            </li>
                            <li>
                                <span>CGST 9%</span>
                                <span id="cgst">0.00</span>
                            </li>
                            <li>
                                <span>SGST 9%</span>
                                <span id="sgst">0.00</span>
                            </li>
                        </ul>
                    </div>
                    <div class="reservation-room-seleted_total-room">
                        GRAND TOTAL 
                        <span class="reservation-amout" id="grand">0.00</span>
                    </div>
                </div>
                <!-- END / ITEM -->

                <!-- TOTAL -->
                <div class="reservation-room-seleted_total ">
                    <label>TOTAL</label>
                    <span class="reservation-total" id="grand2">0.00</span>
                </div>
                <!-- END / TOTAL -->
                <input type="hidden" name="cpn" value="<?php echo $data->cpn; ?>">
                <?php } } ?>
            </div>
            <!-- END / ROOM SELECT -->
        </div>
    </div>
    <!-- END / SIDEBAR -->
    <!-- CONTENT -->
    <div class="col-md-6 col-lg-8">
        <div class="reservation_content">
            <div class="reservation-billing-detail">
                <h4>BILLING DETAILS</h4>
                <?php if($this->session->has_userdata('username')){ 
                    if($user_data){
                       foreach ($user_data as $data){
                        ?>
                        <div class="row">
                            <div class="col-sm-6 col-md-2">
                                <label>Title <sup> *</sup></label>
                                <select class="check_availability_option" style="padding:10px;" name="title">
                                    <option>Select</option>
                                    <option>Mr.</option>
                                    <option>Ms.</option>
                                    <option>Mrs.</option>
                                </select>
                            </div>                                
                            <div class="col-sm-6 col-md-10 ">
                                <label>Name<sup> *</sup></label>
                                <input readonly type="text" class="input-text" name="fname" id="fname" value="<?php echo $data->name;?>" placeholder="Name" >
                            </div>

                            <div class="col-sm-6 col-md-12 ">
                             <label>Address<sup> *</sup></label>
                             <input readonly type="text" class="input-text" placeholder="Street Address" id="address" name="address"
                             value="<?php echo $data->address;?>" >
                         </div>                                
                         <div class="col-sm-6">
                            <label>Email Address<sup> *</sup></label>
                            <input readonly type="text" class="input-text" placeholder="Mail Address" id="mail" name="mail" onkeyup="validateMail()" value="<?php echo $data->mail;?>" >
                            <div><p id="MailErr"></p></div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <label>Phone<sup> *</sup></label>
                            <input readonly type="text" class="input-text" placeholder="(+91)" id="phone" name="phone" placeholder="Phone" onkeyup="validatePhone()" value="<?php echo $data->mobile;?>" > 
                            <div><p id="MobErr"></p> </div>                               
                        </div>

                        <div class="col-sm-6 col-md-12">
                         <ul class="option-bank">
                           <li>
                             <label class="label-radio">
                               <input type="radio" class="input-radio" name="bank" value="now" id="pay"> Pay Now
                           </label>
                           <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                       </li>
                       <li>
                         <label class="label-radio">
                           <input type="radio" class="input-radio" name="bank" value="later" id="pay"> Pay at Checkout
                       </label>
                       <p>Book now, pay at the hotel. Card will be charged as per applicable cancellation policy.</p>
                   </li>
               </ul>
           </div>
           <div class="col-sm-6 col-md-12 col-md-offset-4">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="uid" value="<?php echo $data->id; ?>">

            <input type="submit" class="btn btn-room btn4" value="PLACE ORDER" onclick="verify()">
        </div>
    </div>
    <?php } } } 
    else{ ?>
        <div class="col-sm-6 col-md-12 reservation_msg">
           <p >Login for <strong>Secret Deals, Price Alerts</strong> & More!</p>
           <a href="<?php echo base_url(); ?>LogIn">LOGIN</a> &nbsp; &nbsp;  <a href="<?php echo base_url(); ?>Signup">SIGN UP</a>
       </div>
       <?php }
       ?>

   </div>
   <!-- END / CONTENT -->
</div>
</div>
</div>	

</div>

</div>
</section>
</form>
<!-- END / RESERVATION -->
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
<script type="text/javascript" src="../../../../cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
<!-- Custom jQuery -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/sky.js"></script>
<?php 
if($vcs){
 foreach ($vcs as $data){
  ?>
  <script>
     function calculation(){
        var days = <?php echo $days ?>; 
        var rooms =  <?php echo $rooms ?>;                  
        var cpn = <?php echo $data->cpn; ?>;
        
        var cost = cpn * days * rooms;  
        cost = parseFloat(cost).toFixed(2);
        var gst = cost * 0.09;        
        gst = parseFloat(gst).toFixed(2);
        var grand = cost + (2 * gst);
        grand = parseFloat(grand).toFixed(2);
        
        document.getElementById("netTotal").innerHTML = "₹ "+ cost;
        document.getElementById("cgst").innerHTML = "₹ "+ gst ;
        document.getElementById("sgst").innerHTML = "₹ "+ gst ;
        document.getElementById("grand").innerHTML = "₹ "+ grand;
        document.getElementById("grand2").innerHTML = "₹ "+ grand ;
    }
</script>
<?php } } ?>