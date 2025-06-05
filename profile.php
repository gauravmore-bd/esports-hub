<?php 
session_start();

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// DB connection
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "db_register";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch only id, username, email
$userId = $_SESSION['user_id'];
$query = mysqli_query($conn, "SELECT id, username, email FROM users WHERE id = $userId");
$user = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>eSports Hub | Profile</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="profile-container">
    <div class="profile-text">
      <span class="badge">It's me</span>
      <h1 class="username"><?php echo htmlspecialchars($user['username']); ?></h1>
      <p class="role">Passionate eSports athlete with a competitive edge, dedicated to mastering gameplay strategies and dominating tournaments. Specializes in FPS and MOBA titles, consistently delivering high-performance results with sharp reflexes and team synergy</p>
      
      <button class="hire-btn" onclick="window.location.href='manageprofile.html'">Manage Profile</button>
      <button class="hire-btn" onclick="window.location.href='logout.php'">Logout</button>
      <!-- <a href="logout.php" class="hire-btn">Logout</a> -->
    </div>

    <div class="profile-photo">
      <img src="av2.png" alt="Profile Photo">
    </div>
</div>

<div class="info-bar">
    <div class="info-item">🏆 <a href="tournaments.php" class="link"><strong>Tournaments</strong></a></div>
    <div class="info-item">🎮 <a href="games-played.php" class="link"><strong>Games Played</strong></a></div>
    <div class="info-item">💎 <a href="rank.php" class="link"><strong>Ranked</strong></a></div>
</div>
<!-- <div class="user-stats">
    <h2>Your Tournament Stats</h2>

    <div class="stats-grid">
        <div class="stat-card">
            <h3>🏆Total Tournaments</h3>
            <p>12</p>
        </div>
        <div class="stat-card">
            <h3>🎮Games Played</h3>
            <p>36</p>
        </div>
        <div class="stat-card">
            <h3>💎Highest Rank</h3>
            <p>Diamond II</p>
        </div>
    </div>
</div> -->
</body>
</html>
