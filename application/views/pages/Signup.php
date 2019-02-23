<!-- BODY-LOGIN -->
<section class="body-page page-v1 ">
    <div class="container">
      
     <div class="row">
        <div class="content col-md-12">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <?php if($this->session->flashdata('addFromValErr')){ ?>
                   <div class="alert bg-danger alert-styled-left">
                     <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                     <span class="text-semibold"> Opps! </span><?php echo $this->session->flashdata('addFromValErr'); ?>
                     <!--                            Name of the Vehicle and Vehicle Description should not be empty.-->
                 </div>
                 <?php }?>
                 <?php if($this->session->flashdata('addFromSucc')){ ?>
                    <div class="alert bg-success alert-styled-left">
                      <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                      <span class="text-semibold">Well done!</span> You are successfully Registered.
                  </div>
                  <?php } ?>
              </div>
          </div>
          <h2 class="sky-h3">Sign Up</h2>
          <h5 class="p-v1">New In BYR! Register Now To Get Secrect Deals!</h5>
          <form action="<?php echo base_url(); ?>View/register?>" method="POST">
              <div class="row">
                <div class="form-group col-md-6 col-md-offset-1" style="padding-left:100px;">
                  <input type="text" class="form-control" name="name" value="" placeholder="Name" required autofocus>
              </div>
              <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="address" value="" placeholder="Address" required autofocus>
              </div>
              <div class="form-group col-md-6 col-md-offset-1" style="padding-left:100px;">
                  <input type="text" class="form-control" name="mobile" value="" placeholder="Mobile" required autofocus>
              </div>
              <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="uname" value="" placeholder="User Name" required autofocus>
              </div>
              <div class="form-group col-md-6 col-md-offset-1" style="padding-left:100px;">
                  <input type="email" name="mail" class="form-control" value="" required="required" title="" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                  <input id="password-field" type="password" class="form-control" name="password" placeholder="Password *">
                  <span data-toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
              <div class="form-group col-md-6 col-md-offset-4">
                  <input id="password-field1" type="password" class="form-control" name="cpassword" placeholder="Confirm Password *">
                  <span data-toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              </div>
              <div class="form-group col-md-6 col-md-offset-4"></div>
              <div class="form-group col-md-6 " style="padding-left:100px;">
               <button type="submit" class="btn btn-default">REGISTER</button>
           </div>
       </div>
   </form>
</div>
</div>
</div>
</section>
<!-- END/BODY-LOGIN-->
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