<!DOCTYPE html>
<html lang="en">

<?php include "meta_links_common.php" ?>

<body>

<?php $header_otp="header_otp"; include "header_common.php" ?>

<main id="main">


<!-- ======= FeatPricingures Section ======= -->
<div class="hero-section another_pages inner-page otp_hero">
  <div class="otp_section">
    <div class="prompt">
      Enter Your OTP
    </div>
    <form method="get" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
      <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
      <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
      <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
      <span class="splitter">&ndash;</span>
      <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
      <input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
      <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" />
    </form>
  </div>

  <div class="otp_submit_btn text-center mt-4 about_btn">
    <button type="submit" class="hvr-bounce-to-right button" data-remodal-target="paymentModal">Submit<i class="fa fa-chevron-right pl-1"></i></button>
  </div>
</div>
<!-- message -->
<div class="msg animate slide-in-down"></div>
<!-- end message -->

<div class="otp_modal remodal enquiry_remodal" data-remodal-id="paymentModal" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
  <button data-remodal-action="close" class="remodal-close"></button>
  <img src="assets/img/payment.jpg" class="img-fluid payment_bg_img" alt="">
  <div class="enquiry_modal_title">
    <h1>Pay Now</h1>
    <p>The Process of fulfilling your order</p>
  </div>

  <div class="payment_area">
    <div class="g_pay">
      <div class="row">
        <div class="col-md-6">
          <div class="g-pay_number">
            <img src="assets/img/g_pay.png" class="img-fluid g-pay_icon" alt="">
            <div class="num-copy">
            <p id="text">+91 9644879878 </p> 
            <span id="copy" title="Copy Link" data-toggle="tooltip" data-placement="top" title="Copy to clipboard"><i class="fa fa-copy"></i></span>
            </div>
            
            <p class="texts">Pay money in this number or If you have any trouble you can send money by QR code</p>
            <img src="assets/img/payment_gate.jpg" class="img-fluid gate_way" alt="">
          </div>

        </div>
<!--         <div class="__or">
          <h3>OR</h3>
          <p>scan barcode</p>
        </div> -->
        <div class="col-md-6">
          <img src="assets/img/barcode.png" class="img-fluid barcode" alt="">
        </div>
      </div>
    </div>

    <h3 class="__or">OR</h3>

  <div class="paypal">
    <img src="assets/img/paypal.png" class="img-fluid paypal_icon" alt="">
    <div class="paypal_link">
      <div class="base">
        <span class="mail-info">
          <i class="icofont-ui-v-card"></i>
          <span class="mail-text" tooltip="Click to Copy" tooltip-position="bottom">smith&morgan@gmail.com</span>
        </span>
      </div>
    </div>
  </div>
  </div>
</div>


</main>
<?php $stickyStop = ""; $footer_otp="footer_otp"; include "footer_common.php" ?>
<script>
$('.digit-group').find('input').each(function() {
  $(this).attr('maxlength', 1);
  $(this).on('keyup', function(e) {
    var parent = $($(this).parent());
    
    if(e.keyCode === 8 || e.keyCode === 37) {
      var prev = parent.find('input#' + $(this).data('previous'));
      
      if(prev.length) {
        $(prev).select();
      }
    } else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
      var next = parent.find('input#' + $(this).data('next'));
      
      if(next.length) {
        $(next).select();
      } else {
        if(parent.data('autosubmit')) {
          parent.submit();
        }
      }
    }
  });
});
</script>

<script>
  const textElement = document.getElementById("text");
const copyButton = document.getElementById("copy");

const copyText = (e) => {
  window.getSelection().selectAllChildren(textElement);
  document.execCommand("copy");
  e.target.setAttribute("tooltip", "Copied! ✅");
};

const resetTooltip = (e) => {
  e.target.setAttribute("tooltip", "Copy to clipboard");
};

copyButton.addEventListener("click", (e) => copyText(e));
copyButton.addEventListener("mouseover", (e) => resetTooltip(e));

</script>

<script>
  const copyMailId = document.querySelectorAll('.mail-text');

copyMailId.forEach(copyText => {
    copyText.addEventListener('click', () => {
        const selection = window.getSelection();
        const range = document.createRange();
        range.selectNodeContents(copyText);
        selection.removeAllRanges();
        selection.addRange(range);

        try {
            document.execCommand('copy');
            selection.removeAllRanges();

            const mailId = copyText.textContent;
            copyText.textContent = 'Copied!';
            copyText.classList.add('success');

            setTimeout(() => {
                copyText.textContent = mailId;
                copyText.classList.remove('success');
            }, 1000);
        } catch (e) {
            copyText.textContent = 'Couldn\'t copy, hit Ctrl+C!';
            copyText.classList.add('error');

            setTimeout(() => {
                errorMsg.classList.remove('show');
            }, 1200);
        }
    });
});
</script>


</body>

</html>