<?php
// coming-soon.php
?>
<?php include '../logic/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature Coming Soon</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
            background-color: #f9f9f9;
            text-align: center;
        }
        
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        
        .subtitle {
            font-size: 18px;
            color: #7f8c8d;
            margin-bottom: 40px;
        }
        
        .coming-soon-container {
            background: white;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }
        
        .robot-container {
            position: relative;
            height: 300px;
            margin: 40px auto;
        }
        
        .robot {
            width: 150px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 0;
        }
        
        .tool {
            position: absolute;
            width: 40px;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }
        
        .screwdriver {
            right: 30%;
            top: 20%;
            animation-name: screwAnimation;
            animation-duration: 2s;
        }
        
        .wrench {
            left: 30%;
            top: 30%;
            animation-name: wrenchAnimation;
            animation-duration: 2.5s;
            animation-delay: 0.5s;
        }
        
        .hammer {
            right: 25%;
            top: 60%;
            animation-name: hammerAnimation;
            animation-duration: 1.5s;
            animation-delay: 0.2s;
        }
        
        .progress-container {
            width: 100%;
            background-color: #ecf0f1;
            border-radius: 20px;
            margin: 40px 0;
            height: 20px;
        }
        
        .progress-bar {
            height: 100%;
            border-radius: 20px;
            background-color: #f1c40f;
            width: 65%;
            animation: progressAnimation 2s ease-in-out infinite alternate;
        }
        
        .countdown {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .countdown-item {
            background: #2c3e50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            min-width: 70px;
        }
        
        .countdown-number {
            font-size: 24px;
            font-weight: bold;
        }
        
        .countdown-label {
            font-size: 12px;
            text-transform: uppercase;
        }
        
        @keyframes screwAnimation {
            0% { transform: rotate(0deg); }
            50% { transform: rotate(180deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes wrenchAnimation {
            0%, 100% { transform: rotate(0deg) translateY(0); }
            50% { transform: rotate(15deg) translateY(-10px); }
        }
        
        @keyframes hammerAnimation {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(-30deg); }
            75% { transform: rotate(30deg); }
        }
        
        @keyframes progressAnimation {
            0% { width: 65%; }
            100% { width: 68%; }
        }
        
        .notify-form {
            margin-top: 40px;
        }
        
        .notify-input {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 300px;
            max-width: 100%;
            margin-right: 10px;
        }
        
        .notify-button {
            padding: 12px 25px;
            background-color: #f1c40f;
            color: #2c3e50;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .notify-button:hover {
            background-color: #f39c12;
        }
    </style>
</head>
<body>
    <div class="coming-soon-container">
        <h1>Under Development</h1>
        <p class="subtitle">We're working hard to launch this exciting new feature!</p>
        
        <div class="robot-container">
            <!-- Robot and tools with animations -->
            <img src="https://cdn-icons-png.flaticon.com/512/2593/2593348.png" alt="Robot working" class="robot">
            <img src="https://cdn-icons-png.flaticon.com/512/4222/4222688.png" alt="Screwdriver" class="tool screwdriver">
            <img src="https://cdn-icons-png.flaticon.com/512/4222/4222679.png" alt="Wrench" class="tool wrench">
            <img src="https://cdn-icons-png.flaticon.com/512/4222/4222698.png" alt="Hammer" class="tool hammer">
        </div>
        
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>
        
        <p>Our team of digital robots is working around the clock to build something amazing for you.</p>
        <p>Expected launch date: <strong>June 12, 2025</strong></p>
        
        <div class="countdown">
            <div class="countdown-item">
                <div class="countdown-number" id="days">00</div>
                <div class="countdown-label">Days</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="hours">00</div>
                <div class="countdown-label">Hours</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="minutes">00</div>
                <div class="countdown-label">Minutes</div>
            </div>
            <div class="countdown-item">
                <div class="countdown-number" id="seconds">00</div>
                <div class="countdown-label">Seconds</div>
            </div>
        </div>
        
        <div class="notify-form">
            <p>Want to be notified when we launch?</p>
            <form action="#" method="post">
                <input type="email" class="notify-input" placeholder="Enter your email address" required>
                <button type="submit" class="notify-button">Notify Me</button>
            </form>
        </div>
    </div>

    <script>
        // Simple countdown timer (for demo purposes)
        function updateCountdown() {
            // Set the date we're counting down to (June 12, 2025)
            const countDownDate = new Date("Jun 12, 2025 00:00:00").getTime();
            const now = new Date().getTime();
            const distance = countDownDate - now;
            
            // Time calculations
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Display the result
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
        }
        
        // Update the countdown every 1 second
        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>