<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Yazhpanam City Council</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/yazhpanam-city-council/css/styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .about-section {
            background-color: #f5f5f5;
            padding: 60px 0;
        }
        .about-title {
            margin-bottom: 40px;
        }
        .about-content {
            margin-bottom: 40px;
        }
        .about-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<!-- Header -->
<?php include 'templates/header.php'; ?>

<!-- About Us Section -->
<div class="about-section">
    <div class="container">
        <div class="row about-title text-center">
            <div class="col">
                <h1>About Yazhpanam City Council</h1>
                <p>Learn more about our mission, vision, and the services we provide to the community.</p>
            </div>
        </div>
        <div class="row about-content">
            <div class="col-md-6">
                <h3>Our Mission</h3>
                <p>
                    Our mission is to provide high-quality services to our residents, fostering a safe, vibrant, and sustainable community.
                    We are committed to transparency, accountability, and continuous improvement in all aspects of our work.
                   <br>
                    At Yazhpanam City Council, our mission is to provide exceptional public services that enhance the quality 
                    of life for our community. We are dedicated to fostering a safe, vibrant, and inclusive environment where 
                    residents can thrive. Our commitment to sustainability, innovation, and responsive governance ensures that
                     we meet the evolving needs of our diverse population. Through transparent and accountable leadership, 
                     we strive to build trust and engage citizens in the decision-making processes that affect their daily lives.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/jaffna_Library.jpg" alt="Mission Image" class="about-image">
            </div>
        </div>
        <div class="row about-content">
            <div class="col-md-6">
                <img src="img/a2.jpg" alt="Vision Image" class="about-image">
            </div>
            <div class="col-md-6">
                <h3>Our Vision</h3>
                <p>
                    Our vision is to be a leading council recognized for excellence in public service and community development.
                    We strive to enhance the quality of life for all our residents through innovative solutions and inclusive initiatives.
                    <br> 
                    We envision a city where every resident has access to quality services, opportunities for growth, and a voice in their 
                    community's future. Yazhpanam City Council aims to cultivate a dynamic and resilient city, characterized by its sustainable 
                    development, cultural richness, and economic vitality. By embracing innovation and fostering collaborative partnerships,
                     we aspire to create a thriving urban environment that sets the standard for municipalities everywhere.
                </p>
            </div>
        </div>
        <div class="row about-content">
            <div class="col-md-6">
                <h3>Our Services</h3>
                <p>
                    We offer a wide range of services to meet the needs of our community, including waste management, housing, education,
                    transportation, and social services. Our dedicated team works tirelessly to ensure that our services are accessible,
                    efficient, and responsive to the needs of our residents.
                    <br> 
                <ul>
                    <li>   <b> Council Tax Services: </b>Assistance with paying council tax, reporting changes, and setting up direct debits.</li>
                    <li><b>Waste and Recycling:</b> Information on collection schedules, garden waste services, and bulky waste pickups.</li>
                    <li><b>Roads, Travel, and Parking:</b> Managing parking fines, reporting street faults, and updates on roadworks.</li>
                    <li><b>Schools and Learning:</b> Resources for finding schools, applying for school places, and school term dates.</li>
                    <li><b>Housing Services:</b> Support for housing repairs, services for council tenants, and rent payment options.</li>
                    <li><b>Benefits and Support:</b> Guidance on making benefits claims, cost-of-living support, and reporting changes in circumstances.</li>
                    <li><b>Community Engagement:</b> Opportunities to find local councillors, participate in council meetings, and access agendas and reports.</li>
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/jaffna5.jpg" alt="Services Image" class="about-image">
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
