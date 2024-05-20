<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yazhpanam City Council</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/yazhpanam-city-council/css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    
    <style>
        .carousel-item img {
            width: 100%;
            height: 70vh;
            object-fit: cover;
        }
        .services .card {
            transition: transform 0.3s;
        }
        .services .card:hover {
            transform: scale(1.05);
        }
        .latest-news img {
            max-width: 100%;
            height: auto;
        }
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
        .light-yellow { background-color: #ffecb3; }
        .light-green { background-color: #d4edda; }
        .light-blue { background-color: #d1ecf1; }
        .light-grey { background-color: #f8f9fa; }
        .light-dark-blue { background-color: #c8d6e5; }

        @media (max-width: 767.98px) {
            .service-card {
                margin-bottom: 10px;
            }
        }

        .services-section {
            background-color: #f5f5f5; /* Light ash background for this section */
            padding: 40px 0;
        }
        .service-box {
            border: 1px solid #cce5ff; /* Light blue outline */
            border-radius: 8px;
            padding: 20px;
            transition: background-color 0.3s, box-shadow 0.3s, transform 0.3s;
            margin-bottom: 20px;
            background-color: #d1ecf1; /* Light blue background */
            color: #333;
            text-align: center;
            height: 80px; /* Accurate height */
        }
        .service-box:hover {
            background-color: #b0dfe5; /* Hover color */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);
        }
        .service-box h5 {
            margin-bottom: 10px;
            color: #333; /* Font color */
        }
        .service-box i {
            font-size: 36px; /* Visible icon size */
            color: #007bff; /* Icon color */
            margin-bottom: 10px;
        }
        .service-box a {
            text-decoration: none;
            color: inherit;
        }
        .highlight-box {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            transition: transform 0.3s;
            height: 80px; /* Accurate height */
        }
        .highlight-box:hover {
            transform: scale(1.05);
        }
        .highlight-box h5 {
            margin: 0;
        }
        .highlight-box i {
            font-size: 48px; /* Visible icon size */
            margin-bottom: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
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
            <img src="img/jaffna.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Welcome to Yazhpanam City Council</h5>
                <p>Your partner in community service and development.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/a3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Efficient Waste Management</h5>
                <p>Helping you keep the city clean and green.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/a5.jpg" class="d-block w-100" alt="...">
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


<br>
<!-- service section --> 
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
    <br>
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
    <br>
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

<!-- All Service box section --> 
 
<div class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="highlight-box">
                    <i class="fas fa-money-bill-alt"></i>
                    <h5>Click to pay</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlight-box">
                    <i class="fas fa-exclamation-circle"></i>
                    <h5>Click to report</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="highlight-box">
                    <i class="fas fa-clipboard-list"></i>
                    <h5>Click to request</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <div class="service-box">
                        <i class="fas fa-home"></i>
                        <h5>Council Tax</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="service-box">
                        <i class="fas fa-recycle"></i>
                        <h5>Bins and recycling</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="service-box">
                        <i class="fas fa-car"></i>
                        <h5>Roads, travel and parking</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <div class="service-box">
                        <i class="fas fa-school"></i>
                        <h5>Schools and learning</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="service-box">
                        <i class="fas fa-home"></i>
                        <h5>Housing</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="service-box">
                        <i class="fas fa-users"></i>
                        <h5>Council and Committees</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <div class="service-box">
                        <i class="fas fa-building"></i>
                        <h5>Planning and Building Standards</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="service-box">
                        <i class="fas fa-heart"></i>
                        <h5>Social care and health</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="service-box">
                        <i class="fas fa-briefcase"></i>
                        <h5>Business</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">ALL ONLINE SERVICES</a>
        </div>
    </div>
</div>


<br>

<!-- Latest News Section -->
<section class="latest-news py-5 bg-light">
    <div class="container">
        <h2 class="text-center pb-3">Latest News</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="img/jaffna_Library.jpg" alt="Latest News">
            </div>
            <div class="col-md-6">
                <h5>Community Events</h5>
                <p>Stay updated with the latest community events and activities happening around Yazhpanam.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- Subscribe Section -->
<section class="subscribe py-5 text-center">
    <div class="container">
        <h2 class="pb-3">Subscribe to Our Newsletter</h2>
        <form action="subscribe.php" method="post" class="form-inline justify-content-center">
            <div class="form-group mb-2">
                <label for="email" class="sr-only">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <button type="submit" class="btn btn-primary mb-2 ml-2">Subscribe</button>
        </form>
    </div>
</section>

<!-- Footer -->
<?php include 'templates/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</body>
</html>
