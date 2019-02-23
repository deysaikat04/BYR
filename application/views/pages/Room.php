    <!-- BANNER -->
    <section class="banner-tems text-center">
        <div class="container">
            <div class="banner-content">
                <h2>ROOMS & RATES</h2>
                <p>Hurry !! Book Your Rooms now !</p>

            </div>
        </div>
    </section>
    <!-- END-BANNER -->
    <!-- BODY-ROOM-1 -->
    <section class="body-room-1 ">
        <div class="container">
           <h3 style="margin-top:40px;">Hotels in 
               <?php if($city) {
                echo $city;
            } ?>   
        </h3>
        
        <div class="room-wrap-1 ">
            <div class="row room_detail">
               <?php if($hotelset) {
                 foreach ($hotelset as $data):?>
                   <form action="<?php echo base_url(); ?>View/hotel/<?php echo $data->h_id;?>" method="POST">
                    <!-- ITEM -->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 room_card">
                        <div class="room-item-1">                            
                            <div class="img">
                                <a href="#"><img src="<?php echo $admin.$data->path;?>" alt="#"></a>
                            </div>
                            <h2><a href="#"><?php echo $data->h_name?></a></h2>
                            <div class="content">
                                <p><?php echo $data->city;?></p>   
                            </div>
                            <div class="content">
                                <p><?php echo $data->location;?></p>   
                            </div>
                            <div class="bottom">                               	
                                <span class="price">Starting <span class="amout">₹<?php echo $data->cpn;?></span> /night</span>
                                <a href="<?php echo base_url(); ?>View/hotel/<?php echo $data->h_id;?>" target="_blank" class="btn">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- END / ITEM -->  
                </form>
            <?php endforeach; } ?>                  
            
        </div>
    </div>
</div>
</section>
<!-- END/BODY-ROOM-1-->
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