<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); // ❌ Block access if not logged in
    exit();
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,
initial-scale=1.0">
        <title>eSports</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="path-to-sportypo-regular-demo-stylesheet.css">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        <header class="header">
            <div class="esports"><a href="#" class="logo">eSports</a></div>
            <div class="social-media">
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-telegram' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
            </div>
            <nav class="navbar">
                <a href="news_updates.html">News & Updates</a>
                <a href="https://www.youtube.com/watch?v=6pXCN2BpKWc">Live eSports</a>
                <a href="contact_index.html">Contact</a>
                <a href="profile.php">Profile</a>
                <a href="game.html">Result</a>
            </nav>
        </header>

        <section class="banner">
            <div class="slider">
                <div class="slide active">
                    <img src="bgmi2.jpg" alt="">
                    <div class="left-info">
                        <div class="penetrate-blur">
                            <h1>BG</h1>
                        </div>

                        <div class="content">
                            <h3>[ Battlegrounds Mobile India ]</h3>
                            <p> Set in a virtual world, BATTLEGROUNDS MOBILE INDIA is a battle royale game where multiple players employ strategies to fight and be the last man standing on the battlegrounds.</p>

                            <audio id="backgroundAudio" preload="auto" autoplay loop>
        <source src="bgmi1.mp3" type="audio/mp3">
        </audio>
                            <a href="bgmi.html" class="btn">Torunaments</a>
                            <a href="bgmi_rules_index.html" class="btn">Rules & Regulations</a>
                        </div>
                    </div>
                    <div class="right-info">
                        <h1>MI</h1>
                    </div>
                </div>


                <div class="slide">
                    <img src="coc.jpg" alt="">
                    <div class="left-info">
                        <div class="penetrate-blur">
                            <h1>CO</h1>
                        </div>
                        <div class="content">
                            <h3>[ Clash of Clans ]</h3>
                            <p> Epic combat strategy game. Build your village, train your troops & go to battle! Mustachioed Barbarians, fire wielding Wizards, and other unique troops are waiting for you! Enter the world of Clash!</p>
                            <a href="coc.html" class="btn">Tournaments</a>
                            <a href="coc_rules_index.html" class="btn">Rules & Regulations</a>
                        </div>
                    </div>
                    <div class="right-info">
                        <h1>C</h1>
                    </div>
                </div>

                <div class="slide">
                    <img src="valoBg1.jpg" alt="">
                    <div class="left-info">
                        <div class="penetrate-blur">
                            <h1>VALO</h1>
                        </div>
                        <div class="content">
                            <h3>[ Valorant ]</h3>
                            <p> Valorant is a team-based first-person tactical hero shooter set in the near future. Players play as one of a set of Agents, characters based on several countries and cultures around the world.</p>
                            <a href="valorant.html" class="btn">Tournaments</a>
                            <a href="valo_rules_index.html" class="btn">Rules & Regulations</a>
                        </div>
                    </div>
                    <div class="right-info">
                        <h1>RANT</h1>
                    </div>
                </div>

                <div class="slide">
                    <img src="b.jpg" alt="">
                    <div class="left-info">
                        <div class="penetrate-blur">
                            <h1>FREE</h1>
                        </div>
                        <div class="content">
                            <h3>[ Free Fire ]</h3>
                            <p>Free Fire is the ultimate survival shooter game available on mobile. Each 10-minute game places you on a remote island where you are pit against 49 other players, all seeking survival.</p>


                            <a href="free_regi_index.html" class="btn">Register</a>
                            <a href="free_rules_index.html" class="btn">Rules & Regulations</a>
                        </div>
                    </div>
                    <div class="right-info">
                        <h1>FIRE</h1>
                    </div>
                </div>
            </div>

            <div class="navigation">
                <span class="prev-btn">
        <i class='bx bx-chevron-left'></i>
    </span>
                <span class="next-btn">
        <i class='bx bx-chevron-right' ></i>
    </span>
            </div>
        </section>
        <script src="script.js"></script>
        <script>
            const audio = document.getElementById('backgroundAudio');
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