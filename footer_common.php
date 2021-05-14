<!-- ======= Mobile Menu ======= -->
<div class="preloader_wrapper">
  <div class="preloader">
    <img src="assets/img/preloader/left_wing.png" class="left_wing img-fluid" alt="">
    <img src="assets/img/preloader/center_wing2.png" class="center_wing img-fluid" alt="">
    <img src="assets/img/preloader/right_wing.png" class="right_wing img-fluid" alt="">
  </div>
  <h5>Loading...</h5>
</div>

<!-- ===== Enquiry btn ===== -->
<button type="button" class="enquiry_btn d-none d-md-block" data-remodal-target="modal">CONNECT</button>
<button type="button" class="enquiry_btn enevelope d-block d-md-none" data-remodal-target="modal"><i class="fa fa-envelope"></i></button>

<div class="remodal enquiry_remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="enquiry_modal_title">
    <h1>Let's Talk!</h1>
    <p>We will get back to you within one to two days through email. Also please don't forget to check your spam account just in case!</p>
  </div>
  <div class="enquiry_modal_form">
    <form action="#" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Name *" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email *" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Mobile *" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Message *" autocomplete="off" required>
      </div>
      <button type="submit" class="submit_index_page_btn">Submit</button>
    </form>
  </div>
  <img loading="lazy" src="assets/img/enquiry_modal_bg.png" class="img-fluid enquery_modal_bg" alt="">
  <img src="assets/img/simple_bg.jpg" class="img-fluid simple_bg"  alt="">
</div>
<!-- ===End Enquiry btn === -->


<div style="<?php if($whatsapp === "whatsapp") { echo "display: var(--none)";  } ?>" onclick="vibrate()" class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" ><a id="WhatsApp-button" href="https://wa.me/917902348448?text=*Hey Smith and Morgan*..🖐 I would like to have a talk ❤️" target="_blank" class="phoneJs" title="Mesaj Gönder!" rel="noopener noreferrer"><div class="cbh-ph-circle"></div><div class="cbh-ph-circle-fill"></div><div class="cbh-ph-img-circle1"></div></a></div>

<script>
document.addEventListener('scroll', () => {
     var scroll_position2 = window.scrollY;
     var whatsapp = document.querySelector('.phone-call');

      if (scroll_position2 > 250) {
        whatsapp.classList.add('scroll-phone-call');
      } else if (scroll_position2 < 300)  {
        whatsapp.classList.remove('scroll-phone-call');
    }
   });
</script>


 <!-- ======= Footer ======= -->
  <footer id="footer">
      <!-- <img src="./assets/img/block.png" class="img-fluid footer_hanger" alt=""> -->
    <div class="footer-top <?php if($footer_otp === "footer_otp") {echo "d-none";} ?> ">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><img loading="lazy" src="assets/img/logo.png" class="img-fluid" alt=""></h3>
            <p>
              Opposite SBI, <br>
              Calicut Road, Mukkam<br>
              Kozhikode, Kerala - India<br>
              Pin - 673602, Kerala - India<br><br>
              <strong>Phone:</strong> +91 7902348448, +91 9995733984<br>
              <strong>Email:</strong> smithandmorgan@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Franchise</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Products</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Products</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Wedding Suits</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Formal Suits</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Casual jeasns</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Waist Coats</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Designer Suit</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>We are always happy to connect with you..❤️</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Smith & Morgan</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://www.mentegoz.com/" target="_blank"> &nbsp;&nbsp;Mentegoz Technologies</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0 <?php if($footer_otp === "footer_otp") {echo "d-none";} ?>">


        <a href="https://www.facebook.com/Smith-Morgan-205336296673490" target="_blank"  class="facebook" data-aos-offset="61" data-aos="fade-right" data-aos-duration="900" data-aos-delay="400"><i class="fa fa-facebook"></i></a>

        <a href="https://www.instagram.com/smith_and_morgan/?hl=en" target="_blank"  class="instagram" data-aos-offset="61" data-aos="fade-right" data-aos-duration="900" data-aos-delay="400"><i class="fa fa-instagram"></i></a>

        <a href="mailto:smithandmorgan@gmail.com" class="google-plus" data-aos-offset="61" data-aos="fade-right" data-aos-duration="900" data-aos-delay="550"><i class="fa fa-envelope"></i></a>

        <a href="https://wa.me/917902348448?text=Hi Smith & Morgan, help me get started! 😊" target="_blank" class="twitter" data-aos-offset="61" data-aos="fade-right" data-aos-duration="900" data-aos-delay="100"><i class="fa fa-whatsapp"></i></a>

        <a href="https://www.youtube.com/channel/UCdR1vH6VrjAMEyGkAn-xHQA" class="google-plus" target="_blank" data-aos-offset="61" data-aos="fade-right" data-aos-duration="900" data-aos-delay="700"><i class="fa fa-youtube-play"></i></a>
      </div>
    </div>
  </footer>
  <!-- =======End Footer ======= -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- script area -->
  <script src="assets/js/jquery-2.0.0.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <!-- auto-change-script -->
  <script src= <?php 
  if($stickyStop === "stop") 
    {echo "👕😃👕💃😃👕";} 
  else if($stickyStop === "") {
    echo "assets/vendor/jquery-sticky/jquery.sticky.js";
  }  ?> ></script>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <!-- <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script> -->
  <script src="assets/js/SmoothScrollMouseWheel.js"></script>
  <script src="assets/js/swiper.min.js"></script>
  <script src="assets/js/remodal.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/wow_cusome.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
  function vibrate() {
    navigator.vibrate(100);
  }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
<script>
  const images = document.querySelectorAll('[data-src]');
  console.log(images);

  function preloadIamge(imglist) {
    const data_src = imglist.getAttribute("data-src");

    if(!data_src) {
      return;
    }
    else {
      imglist.src = data_src;
    }
  }
  imgOptions = {

  }
  const imgObserver = new IntersectionObserver((entries,imgObserver)=>{
    console.log(imgObserver)
    entries.forEach((entry)=> {
      if(!entry.isIntersecting) {
        return;
      }
      else {  
          preloadIamge(entry.target); 
          imgObserver.unobserve(entry.target);
      }
    })
  },imgOptions)


  images.forEach((listImg)=>{
    imgObserver.observe(listImg);
  })
</script>

