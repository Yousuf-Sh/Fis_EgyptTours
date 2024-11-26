  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Subscribe our newsletter to get Notification First!</p>
          </div>
          <div class="col-lg-6">
            <form action="{{url('/admin/newsletter/store')}}" method="post">
              @csrf
              <input type="email" name="email" placeholder="Please enter email to subscribe"><input type="submit" >
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="food-services.php">Food Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="faq.php">F.A.Q</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="pest-control.php">Pest Control</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="construction.php">Construction</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="business-consultancy.php">Business Consultancy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="m2m.php">M2M and IoT</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="catering.php">Catering</a></li>
            </ul>
          </div>
            
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
            Nada District-Othman Bin Affan <br>
            7198- Road no. 14,<br>
            Opposite Gate 4 of Imam Saud University,Riyadh 13317- 4415 <br>
            <br>
              <strong>Phone:</strong>  +996 0118106893<br>
              <strong>Email:</strong> info@mail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Tammi Solutions</h3>
            <p>Excelling in “excellence” – Tamimi Solutions prides itself with its more than 40-year experience of delivering successful projects</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>tamimisolutions</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="#">friendsitsolutions</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  



  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
  <script>
    var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"966500567002","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
    window.onload = () => {
      _waEmbed(wa_btnSetting);
    };
  </script>
   <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
   <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
   <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
   <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
   <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
   <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
   <script src="{{asset('assetsassets/vendor/php-email-form/validate.js')}}"></script>
 
   <!-- Template Main JS File -->
   <script src="assets/js/main.js"></script>
   <script>
     $(document).ready(function ($) {
         console.log("hjai")
       var url = window.location.href;
       var activePage = url;
       $('#navbar ul li a').each(function () {
         
         var linkPage = this.href;
         
           if (activePage == linkPage) {
               $(this).closest("li a").addClass("active");
           }
       });
     });
 
 
    

     
   </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            setTimeout(function(){
                $('#successAlert').fadeOut('slow');
            }, 3000); // 3 seconds
        });
    </script>
</body>

</html>