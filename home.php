<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #555;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }

        .event-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            width: 300px;
            text-align: left;
        }

        a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Event Management System</h1>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/events">Events</a>
        <a href="/about">About Us</a>
        <a href="/contact">Contact</a>
    </nav>

    <div class="container">
        <div class="event-card">
            <h2>Event 1</h2>
            <p>Date: January 1, 2024</p>
            <p>Location: Your Venue</p>
            <a href="/event1">View Details</a>
        </div>

        <div class="event-card">
            <h2>Event 2</h2>
            <p>Date: February 1, 2024</p>
            <p>Location: Another Venue</p>
            <a href="/event2">View Details</a>
        </div>

        <!-- Add more event cards as needed -->

    </div>
</body>
</html>