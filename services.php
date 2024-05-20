<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Yazhpanam City Council</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .service-header {
            background-color: #007bff;
            color: white;
            padding: 30px 0;
            text-align: center;
        }
        .service-card {
            margin-bottom: 30px;
            transition: transform 0.3s;
        }
        .service-card:hover {
            transform: scale(1.05);
        }
        .service-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!-- Header -->
<?php include 'templates/header.php'; ?>

<!-- Service Header -->
<div class="service-header">
    <div class="container">
        <h1>Our Services</h1>
        <p>Explore the various services we offer to our community</p>
    </div>
</div>

<!-- Services Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body text-center">
                    <i class="fa fa-money service-icon"></i>
                    <h5 class="card-title">Council Tax</h5>
                    <p class="card-text">Manage your council tax payments, set up direct debits, and report changes.</p>
                    <a href="council_tax.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body text-center">
                    <i class="fa fa-trash service-icon"></i>
                    <h5 class="card-title">Waste and Recycling</h5>
                    <p class="card-text">Check collection schedules, book bulky waste collections, and more.</p>
                    <a href="waste_recycling.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body text-center">
                    <i class="fa fa-car service-icon"></i>
                    <h5 class="card-title">Roads and Parking</h5>
                    <p class="card-text">Find information on parking, roadworks, and report street faults.</p>
                    <a href="roads_parking.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body text-center">
                    <i class="fa fa-school service-icon"></i>
                    <h5 class="card-title">Schools and Learning</h5>
                    <p class="card-text">Find school term dates, apply for school places, and more.</p>
                    <a href="schools_learning.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body text-center">
                    <i class="fa fa-home service-icon"></i>
                    <h5 class="card-title">Housing Services</h5>
                    <p class="card-text">Request housing repairs, manage your rent, and access tenant services.</p>
                    <a href="housing_services.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card">
                <div class="card-body text-center">
                    <i class="fa fa-users service-icon"></i>
                    <h5 class="card-title">Community Support</h5>
                    <p class="card-text">Get support for various community services and initiatives.</p>
                    <a href="community_support.php" class="btn btn-primary">Learn More</a>
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
</body>
</html>
