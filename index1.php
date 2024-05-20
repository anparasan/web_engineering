<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yazhpanam City Council</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/yazhpanam-city-council/css/styles.css">
    <style>
        .service-card {
            padding: 20px;
            color: #333;
            height: 100%;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 8px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .service-card h3 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }
        .service-card p {
            margin: 0;
        }
        .service-card .icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .light-yellow { background-color: #fff3cd; }
        .light-green { background-color: #d4edda; }
        .light-blue { background-color: #d1ecf1; }
        .light-grey { background-color: #f8f9fa; }
        .light-dark-blue { background-color: #cce5ff; }

        @media (max-width: 767.98px) {
            .service-card {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<?php include 'templates/header.php'; ?>

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Welcome to Yazhpanam City Council</h5>
                <p>Your partner in community service and development.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Efficient Waste Management</h5>
                <p>Helping you keep the city clean and green.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/carousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Community Engagement</h5>
                <p>Connecting you with local services and facilities.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Services Section -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="service-card light-yellow">
                <div class="icon">🏠</div>
                <h3>Council Tax</h3>
                <p>Pay Council Tax</p>
                <p>Report a change</p>
                <p>Set up a Direct Debit</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="service-card light-green">
                <div class="icon">♻️</div>
                <h3>Waste and Recycling</h3>
                <p>Check your collection day</p>
                <p>Garden Waste Service</p>
                <p>Book a bulky waste collection</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="service-card light-blue">
                <div class="icon">🚗</div>
                <h3>Roads, Travel and Parking</h3>
                <p>Pay a parking or CAZ fine</p>
                <p>Report a street fault</p>
                <p>Find out about roadworks</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="service-card light-grey">
                <div class="icon">🎓</div>
                <h3>Schools and Learning</h3>
                <p>School term dates</p>
                <p>Find a school</p>
                <p>Apply for school place</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="service-card light-yellow">
                <div class="icon">🔍</div>
                <h3>Find your local services and facilities</h3>
                <input type="text" class="form-control mb-2" placeholder="e.g. B1 1BB">
                <button class="btn btn-primary">Go</button>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="service-card light-dark-blue">
                <div class="icon">🏡</div>
                <h3>Housing</h3>
                <p>Request a housing repair</p>
                <p>Services for council tenants</p>
                <p>Pay your rent</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="service-card light-blue">
                <div class="icon">💵</div>
                <h3>Benefits and Support</h3>
                <p>Cost of living support</p>
                <p>Make a benefits claim</p>
                <p>Report a change in circumstances</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="service-card light-green">
                <div class="icon">📄</div>
                <h3>Your Council</h3>
                <p>Commissioners</p>
                <p>Find your local councillors</p>
                <p>Agendas, minutes and reports</p>
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
