<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Fest</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Roboto Slab;
        }

        body {
            background-color: #f4f4f4;
        }

        header {
            background: linear-gradient(to right, darkblue, blue);
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            
        }
        footer {
            background: linear-gradient(to right, darkblue, blue);
            color: white;
            padding: 15px 30px;
            justify-content: space-between;
            align-items: center;
            
        }

        header h1 {
            font-size: 40px;
            padding-left: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 25px;
        }

        .banner {
            background: url('banner.jpg') center/cover no-repeat;
            height: 300px;
            align-items: center;
            text-align: center;
            justify-content: center;
            color: blueviolet;
            font-size: 40px;
            font-weight: bold;
            padding-top: 100px;

        }

        .banner p {
            font-size: 20px;
            font-weight: 300;
            color: #000000;
            padding-left: 80px;
            padding-right: 80px;
        }

        .events {
            padding: 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .event-card {
            width: 30%;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }

        .event-card img {
            width: 100%;
            border-radius: 10px;
            padding-bottom: 10px;
        }

        .event-card button {
            margin-top: 20px;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            background: darkblue;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            width: 30%;
        }

        .event-card a {
            text-decoration: none;
            color: #ffffff;
        }

        .contact {
            padding: 40px;
            background: white;
            text-align: center;
        }

        .contact h2 {
            font-size: 40px;
            margin-bottom: 20px;
            color: blueviolet;
        }

        .contact p {
            font-size: 20px;
            padding-left: 80px;
            padding-right: 80px;
            margin-bottom: 30px;
        }
        .contact address{
            font-size: 20px;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>
    <header>
        <h1>Tech Fest</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#events">Events</a>
            <a href="register.php">Registration</a>
            <a href="#contact">Contact</a>
            <a href="admin_login.php">admin</a>
        </nav>
    </header>
    <div class="banner" id="home">
        Welcome To Our Events <br><br>
        <p>Welcome to Tech Fest 2025, the ultimate celebration of innovation, creativity, and technological excellence! This year, we bring you an electrifying lineup of events designed to challenge your intellect, push your boundaries, and inspire groundbreaking ideas. Whether you're a coding prodigy, a robotics enthusiast, or a tech visionary, there’s something for everyone.</p>
    </div>
    <section class="events" id="events">
        <div class="event-card">
            <img src="images/hacking.webp" alt="Event 1">
            <h3>Hacking Competition</h3>
            <button><a href="register.php">Register Now</a></button>
        </div>
        <div class="event-card">
            <img src="images/coding.webp" alt="Event 2">
            <h3>Coding Competition</h3>
            <button><a href="register.php">Register Now</a></button>
        </div>
        <div class="event-card">
            <img src="images/quiz.webp" alt="Event 3">
            <h3>Quiz Competition</h3>
            <button><a href="register.php">Register Now</a></button>
        </div>
        <div class="event-card">
            <img src="images/webpage.webp" alt="Event 4">
            <h3>Webpage Development</h3>
            <button><a href="register.php">Register Now</a></button>
        </div>
        <div class="event-card">
            <img src="images/robos.webp" alt="Event 5">
            <h3>Robo's</h3>
            <button><a href="register.php">Register Now</a></button>
        </div>
        <div class="event-card">
            <img src="images/puzzle.webp" alt="Event 6">
            <h3>Puzzletronics</h3>
            <button><a href="register.php">Register Now</a></button>
        </div>
    </section>
    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <p>The Contact Us section of Tech Fest serves as your gateway to all the information and assistance you need to make the most of this exciting event. Whether you have queries regarding event registration, competition guidelines, sponsorship opportunities, or general inquiries, our dedicated team is here to help. We understand that participating in a large-scale tech festival can come with questions, and we are committed to providing clear and prompt responses. Feel free to reach out via email, phone, or through our official social media channels for real-time updates and support.

            <br><br>For personalized assistance, you can also visit our on-campus help desk or connect with specific event coordinators listed in this section. Our team of volunteers and organizers are always ready to assist you with any concerns regarding event logistics, travel arrangements, or participation details. We encourage you to follow our official website and social media pages for the latest announcements, schedule updates, and important notifications. Your experience at Tech Fest matters to us, and we are here to ensure it is smooth, engaging, and unforgettable.
        </p>
        
        <Address>
            📍 Address: <br>
            Tech Fest Organizing Committee <br>
            XYZ Institute of Technology <br>
            123 Innovation Street, Tech Park <br>
            Cityville, State - 567890 <br>
            Country <br><br>

            📞 Phone: <br>
            +1 234 567 8901 (General Inquiries) <br>
            +1 234 567 8902 (Event Support) <br><br>

            ✉️ Email: <br>
            info@techfestxyz.com <br>
            support@techfestxyz.com
        </Address>
      

    </section>
    <footer>
        <center><p>&copy; 2025 Tech Fest Website. All rights reserved.</p></center>
    </footer>
</body>

</html>