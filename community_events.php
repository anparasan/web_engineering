<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Events - Yazhpanam City Council</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/yazhpanam-city-council/css/styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .events-section {
            background-color: #f5f5f5;
            padding: 60px 0;
        }
        .events-title {
            margin-bottom: 40px;
        }
        .event-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 30px;
            overflow: hidden;
        }
        .event-card img {
            max-width: 100%;
            height: auto;
        }
        .event-card-body {
            padding: 20px;
        }
        .event-card-title {
            margin-bottom: 15px;
            font-size: 1.5em;
        }
        .event-card-text {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!-- Header -->
<?php include 'templates/header.php'; ?>

<!-- Community Events Section -->
<div class="events-section">
    <div class="container">
        <div class="row events-title text-center">
            <div class="col">
                <h1>Community Events</h1>
                <p>Stay updated with the latest events happening in our community.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="event-card">
                    <img src="https://via.placeholder.com/400x250" alt="Event 1">
                    <div class="event-card-body">
                        <h5 class="event-card-title">Community Cleanup</h5>
                        <p class="event-card-text">Join us for a community cleanup event on Saturday, May 25th. Let's work together to keep our city clean and beautiful.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-card">
                    <img src="https://via.placeholder.com/400x250" alt="Event 2">
                    <div class="event-card-body">
                        <h5 class="event-card-title">Summer Festival</h5>
                        <p class="event-card-text">Celebrate the summer with music, food, and fun activities at our annual Summer Festival on June 10th.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-card">
                    <img src="https://via.placeholder.com/400x250" alt="Event 3">
                    <div class="event-card-body">
                        <h5 class="event-card-title">Health and Wellness Fair</h5>
                        <p class="event-card-text">Attend our Health and Wellness Fair on July 15th to learn about health resources and participate in wellness activities.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="event-card">
                    <img src="https://via.placeholder.com/400x250" alt="Event 4">
                    <div class="event-card-body">
                        <h5 class="event-card-title">Art Exhibition</h5>
                        <p class="event-card-text">Explore local talent at our Art Exhibition on August 5th. Enjoy a day of art, culture, and creativity.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-card">
                    <img src="https://via.placeholder.com/400x250" alt="Event 5">
                    <div class="event-card-body">
                        <h5 class="event-card-title">Farmers' Market</h5>
                        <p class="event-card-text">Visit the Farmers' Market every Saturday morning to buy fresh, local produce and support our local farmers.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-card">
                    <img src="https://via.placeholder.com/400x250" alt="Event 6">
                    <div class="event-card-body">
                        <h5 class="event-card-title">Outdoor Movie Night</h5>
                        <p class="event-card-text">Join us for an outdoor movie night under the stars on September 20th. Bring your blankets and enjoy a classic film.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include 'templates/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
