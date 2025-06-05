<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Payment Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600'><link rel="stylesheet" href="payment_style.css">

</head>
<body>
<audio id="backgroundAudio" preload="auto"  autoplay loop>
        <source src="bgmi1.mp3" type="audio/mp3">
        </audio>
  <video autoplay loop muted id="background-video">
    <source src="background.mp4" type="video/mp4">
  </video>
<div class="checkout">
  <div class="checkout_wrap">
    <div class="row">

      <div class="col-xs-4">
       
        <div class="product_wrap">
          <div class="product_main">
            <img src="cont.png">
          </div>
          <h1 class="product_title">eSports</h1>
          <small class="product_desc">Tournament Fees</small>
          <h3 class="product_price">₹499</h3>
        </div>
      </div>

      <div class="col-xs-8">
    
        <div class="product_arrow">
          <div class="triangle-left"></div>
        </div>
        <div class="checkout_details">
          <div class="col-xs-12">
            <h1 class="checkout_title">Credit Card Detail</h1>
            <form class="checkout_form" action="bgmi_pay_success_index.php" method="POST">
            <input type="name" placeholder="Customer Full Name">
              <input type="email" name="email" placeholder="Customer email">
              <input class="cnumber" type="tel" placeholder="Card Number" maxlength="19">
              <div class="row">
                <div class="col-xs-6">
                  <input class="cexp" type="tel" maxlength="5" placeholder="Card Expiry">
                </div>
                <div class="col-xs-6">
                  <input class="cc-cvc" type="name" maxlength="3" placeholder="CVV">
                </div>
              </div>
              <a href="bgmi_pay_success_index.php"><button class="checkout_pay" type="submit">Pay &raquo;</button></a>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script>
        const cardNumberInput = document.querySelector('.cnumber');
        const cardExpInput = document.querySelector('.cexp');

        // Function to format card number with hyphens
        cardNumberInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, ''); // Remove non-numeric characters
            if (this.value.length > 0) {
                this.value = this.value.match(/.{1,4}/g).join('-'); // Add hyphens every 4 digits
            }
        });

        // Function to format card expiration date with a slash
        cardExpInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, ''); // Remove non-numeric characters
            if (this.value.length > 2) {
                this.value = this.value.slice(0, 2) + '/' + this.value.slice(2); // Add a slash after 2 digits
            }
        });
    </script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js.map'></script><script  src="bgmi_payment_script.js"></script>
<script>const audio = document.getElementById('backgroundAudio');
    const audioKey = 'audioPlaybackPosition';
    
    // Store the current audio playback position in local storage
    function storePlaybackPosition() {
        localStorage.setItem(audioKey, audio.currentTime);
    }
    
    // Restore the audio playback position from local storage
    function restorePlaybackPosition() {
        const savedPosition = localStorage.getItem(audioKey);
        if (savedPosition) {
            audio.currentTime = parseFloat(savedPosition);
        }
    }
    
    // Restore playback position when the page loads
    window.addEventListener('load', () => {
        restorePlaybackPosition();
    });
    
    // Store playback position before leaving the page
    window.addEventListener('beforeunload', () => {
        storePlaybackPosition();
    });
    </script>
</body>
</html>
