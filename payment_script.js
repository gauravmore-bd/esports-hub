$('.cc-number').payment('formatCardNumber');
$('.cc-exp').payment('formatCardExpiry');
$('.cc-cvc').payment('formatCardCVC');
$('.checkout_pay').hide();

$(document).on('keyup', '.cc-number, .cc-cvc, .cc-exp', function (){
	var cname = $('.cc-number').val();
	var ccvc = $('.cc-cvc').val();
	var cexp = $('.cc-exp').val();

	if( cname != "" && ccvc != "" && cexp !="" ){
		$('.checkout_pay').fadeIn(300);
	}
	  // Add a listener for the 'DOMContentLoaded' event
	  document.addEventListener('DOMContentLoaded', function () {
		// Initially, add the 'fade-in' class to show the content
		document.body.classList.add('fade-in');
	
		// Remove the 'fade-out' class when the transition is complete
		document.body.addEventListener('transitionend', function () {
		  document.body.classList.remove('fade-out');
		});
	  });
	
	  // Listen for links being clicked
	  document.addEventListener('click', function (event) {
		// Check if the clicked element is a link
		if (event.target.tagName === 'A') {
		  // Prevent the default link behavior
		  event.preventDefault();
	
		  // Add the 'fade-out' class to start the transition
		  document.body.classList.add('fade-out');
	
		  // Wait for the transition to complete, then navigate to the new page
		  setTimeout(function () {
			window.location.href = event.target.href;
		  }, 500); // Adjust this time to match the transition duration
		}
	  });
});