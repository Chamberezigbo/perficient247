<!-- contact_location  -->
<div class="contact_location">
     <div class="container">
          <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="location_left">
                         <div class="logo">
                              <a href="index.html">
                                   <img src="img/logo.png" alt="">
                              </a>
                         </div>
                         <ul>
                              <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                              <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                              <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                              <li><a href="#"> <i class="fa fa-youtube"></i> </a></li>
                         </ul>
                    </div>
               </div>
               <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                         <h3> <img src="img/icon/address.svg" alt=""> Location</h3>
                         <p>600/D, Kings road, Green lane
                              NewYork-2563</p>
                    </div>
               </div>
               <div class="col-xl-3 col-md-3">
                    <div class="single_location">
                         <h3> <img src="img/icon/support.svg" alt=""> Location</h3>
                         <p>+1 (323) 904-8548 <br>
                              support@logistico.com</p>
                    </div>
               </div>
          </div>
     </div>
</div>

<!--/ contact_location  -->

<!-- footer start -->
<footer class="footer">
     <div class="footer_top">
          <div class="container">
               <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                         <div class="footer_widget">
                              <h3 class="footer_title">Services</h3>
                              <ul>
                                   <li><a href="#">Air Transportation</a></li>
                                   <li><a href="#">Ocean Freight</a></li>
                                   <li><a href="#">Ocean Cargo</a></li>
                                   <li><a href="#">Logistics</a></li>
                                   <li><a href="#">Warehouse Moving</a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                         <div class="footer_widget">
                              <h3 class="footer_title">Company</h3>
                              <ul>
                                   <li><a href="#">About</a></li>
                                   <li><a href="#">News</a></li>
                                   <li><a href="#"> Testimonials</a></li>
                                   <li><a href="#"> Why Us?</a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                         <div class="footer_widget">
                              <h3 class="footer_title">Industries</h3>
                              <ul>
                                   <li><a href="#">Chemicals</a></li>
                                   <li><a href="#">Automotive</a></li>
                                   <li><a href="#"> Consumer Goods</a></li>
                                   <li><a href="#">Life Science</a></li>
                                   <li><a href="#">Foreign Trade</a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                         <div class="footer_widget">
                              <h3 class="footer_title">Subscribe</h3>
                              <form action="#" class="newsletter_form">
                                   <input type="text" placeholder="Enter your mail" />
                                   <button type="submit">Subscribe</button>
                              </form>
                              <p class="newsletter_text">
                                   Esteem spirit temper too say adieus who
                                   direct esteem esteems luckily.
                              </p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="copy-right_text">
          <div class="container">
               <div class="footer_border"></div>
               <div class="row">
                    <div class="col-xl-12">
                         <p class="copy_right text-center">
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                              Copyright &copy;
                              <script>
                                   document.write(new Date().getFullYear());
                              </script>
                         </p>
                    </div>
               </div>
          </div>
     </div>
</footer>
<!--/ footer end  -->
<!-- Button trigger modal -->

<!-- Modal -->
<form action="tracking.inc.php" method="POST">
     <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                    <div class="serch_form">
                         <input type="text" placeholder="search" name="trackingId" />
                         <button type="submit" name="track">search</button>
                    </div>
               </div>
          </div>
     </div>
</form>

<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<!-- <script src="js/gijgo.min.js"></script> -->
<script src="js/slick.min.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>
<script src="js/toastr-master/build//toastr.min.js"></script>

<script>
     <?php
     if (isset($success) && isset($msg)) {
          if ($success && !empty($msg)) {
     ?>
               toastr.success("<?php echo $msg; ?>")
          <?php
          } elseif (!$success && !empty($msg)) { ?>
               toastr.error("<?php echo $msg; ?>")
     <?php
          }
     }
     ?>
</script>
</body>

</html>