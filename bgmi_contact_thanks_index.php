<html>
	<head>
	<title>eSports</title>
		<link rel="stylesheet" href="bgmi_thanks_style.css">
		</head>
	<body>
	<audio id="backgroundAudio" preload="auto"  autoplay loop>
        <source src="bgmi1.mp3" type="audio/mp3">
        </audio>
		<div class="card">
			<div class="details">
				<h1>Thank You !</h1>
				<p> You have successfully register for eSports tournament.</p>
				<p> Go further for Payment process.</p>
				<a href="bgmi_payment_index.php">Payment</a>
			</div>
			<div class="image-container">
				<img src="bgmiman.png" alt="guard" class="main-image"/>
			</div>
			<div class="card-footer">
			</div>
		</div>
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
<?php
if(isset($_POST['txtname']))
{
$con = mysqli_connect('localhost', 'root', '','db_register');


$txtname = $_POST['txtname'];
$txtage = $_POST['txtage'];
$txtemail = $_POST['txtemail'];
$txtphonenumber = $_POST['txtphonenumber'];
$txtdob = $_POST['txtdob'];
$txtgameid = $_POST['txtgameid'];

$sql = "INSERT INTO `bgmi_register` (`Id`, `fldname`, `fldage`, `fldemail`, `fldphonenumber`, `flddob`, `fldgameid`) VALUES ('0', '$txtname', '$txtage', '$txtemail', '$txtphonenumber', '$txtdob', '$txtgameid')";

$rs = mysqli_query($con, $sql);
if($rs)
{
	
}
}
else
{
	
	
}
?>
