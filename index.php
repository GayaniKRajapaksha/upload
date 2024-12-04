<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VLE - Guidance International School</title>
    <link rel="stylesheet" href="Student/index.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: url('images/homebg.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: rgba(0, 86, 179, 0.9);
            color: #fff;
        }

        .header-container .logo {
            height: 50px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .welcome-section {
            text-align: center;
            padding: 10px 20px;
            background-color: rgba(255, 255, 255, 0.8);
            margin: 20px;
            border-radius: 10px;
        }

        .welcome-section .faculty-logo {
            height: 200px;
        }

        .welcome-section .highlight {
            color: #0056b3;
        }

        .content-wrapper {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .site-announcements, .sidebar {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            border-radius: 10px;
        }

        .site-announcements h2, .calendar h3 {
            border-bottom: 2px solid #0056b3;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .announcement p {
            margin: 10px 0;
        }

        .announcement a {
            color: #0056b3;
            text-decoration: none;
        }

        .calendar {
            margin-top: 20px;
        }

        .calendar-month {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }

        .calendar-grid div {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }

        .footer-container {
            background-color: rgba(0, 86, 179, 0.9);
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .footer-container nav ul {
            display: flex;
            justify-content: center;
        }

        .footer-container nav ul li {
            margin: 0 10px;
        }

        .footer-container nav ul li a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <img src="images/logo.png" alt="University Logo" class="logo">
            <h1>VLE - Guidance International School</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="course.html">Courses</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="login.php">Log In</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="welcome-section">
            <img src="images/logo.png" alt="Faculty Logo" class="faculty-logo">
            <h2>Welcome to the <span class="highlight">Virtual Learning Environment</span></h2>
            <h3>for the <span class="faculty-name">Guidance International School</span></h3>
        </section>
        <div class="content-wrapper">
            <section class="site-announcements">
                <h2>Site Announcements</h2>
                <div class="announcement">
                    <p><strong>Revised Examination Timetable - Grade 11 - Special Exam</strong></p>
                    <p>by Section Admin - Wednesday, 5 June 2024, 13:00 PM</p>
                    <p>Revised Examination Timetable - Grade 10 (2026)</p>
                    <a href="/documents/notice.pdf" target="_blank">Art Competition Organized by School Art Circle</a>
                </div>
            </section>
             
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Guidance International School. All rights reserved.</p>
            <nav>
                <ul>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="terms.php">Terms of Service</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>
