<?php
require_once 'includes/config.php';
$query = "(SELECT 'news' AS type, id, title, content AS description, NULL AS image, created_at FROM news) 
          UNION 
          (SELECT 'event' AS type, id, title, description, image, created_at FROM events) 
          ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>
<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>UniNotify</title>
    <style>
        .container {
            width: 100%;
            background: radial-gradient(
    125% 125% at -2% 101%,
    rgba(245, 87, 2, 1) 10.5%,
    rgba(245, 120, 2, 1) 16%,
    rgba(245, 140, 2, 1) 17.5%,
    rgba(245, 170, 100, 1) 25%,
    rgba(238, 174, 202, 1) 40%,
    rgba(202, 179, 214, 1) 65%,
    rgba(148, 201, 233, 1) 100%
  );
            padding-bottom:20px;
        }

        .container h2 {
            margin-bottom: 20px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            width: 40%;
            background: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        .card h3 {
            margin: 0 0 10px;
            font-size: 1.2em;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .card p {
            margin: 0 0 10px;
            font-size: 1em;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .card img {
            margin: 10px 0;
            border-radius: 5px;
            max-width: 100%;
            height: auto;
        }




        .container0 {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }

        .community-heading {
            font-size: 72px;
            font-weight: 800;
            color: #222;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .features-text {
            font-size: 28px;
            color: #555;
            font-weight: 400;
            line-height: 1.4;
        }

        .feature-para {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 1%;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .community-heading {
                font-size: 48px;
            }

            .features-text {
                font-size: 22px;
            }
        }

        @media (max-width: 480px) {
            .community-heading {
                font-size: 36px;
            }

            .features-text {
                font-size: 18px;
            }
        }



        .second_content {
            display: flex;
            justify-content: center;
            margin: 20px;
        }

        .hc-dashboard {
            width: 100%;
            max-width: 900px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .hc-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .hc-title h1 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .hc-title p {
            font-size: 1rem;
            opacity: 0.8;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        /* Content */
        .hc-content {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .hc-card {
            background: rgba(255, 0, 0, 0.15);
            border-radius: 10px;
            padding: 20px;
            flex: 1;
            text-align: center;
        }

        .hc-card h2 {
            font-size: 16px;
            margin-bottom: 10px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: white;
        }

        .hc-card p {
            font-size: 14px;
            opacity: 0.8;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: white;
            font-weight: bold;
        }

        /* Trackers Card */
        .hc-trackers .hc-icons {
            font-size: 20px;
            margin-top: 10px;
        }

        /* Focusing Card */
        .hc-focusing .hc-percentage {
            font-size: 48px;
            font-weight: bold;
            margin: 10px 0;
            color: white;
            font-family: monospace;
        }

        /* Productivity Card */
        .hc-productivity .hc-boost {
            font-size: 36px;
            font-weight: bold;
            color: #ffffff;
            margin-top: 10px;
            font-family: monospace;
        }

        /* Footer */
        .hc-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }






        .hc-trackers {
            background-image: url(./assets/images/uninotify01.jpeg);
            background-size: cover;

        }

        .hc-focusing {
            background-image: url(./assets/images/uninotify02.jpeg);
            background-size: cover;
        }

        .hc-productivity {
            background-image: url(./assets/images/uninotify03.jpeg);
            background-size: cover;
        }







        button {
            --color: black;
            font-family: inherit;
            display: inline-block;
            width: 8em;
            height: 2.6em;
            line-height: 2.5em;
            margin: 20px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            border: 2px solid var(--color);
            transition: color 0.5s;
            z-index: 1;
            font-size: 17px;
            border-radius: 6px;
            font-weight: 700;
            background:transparent;
            color: var(--color);
        }

        button:before {
            content: "";
            position: absolute;
            z-index: -1;
            background: var(--color);
            height: 150px;
            width: 200px;
            border-radius: 50%;
        }

        button:hover {
            color: #fff;
        }

        button:before {
            top: 100%;
            left: 100%;
            transition: all 0.7s;
        }

        button:hover:before {
            top: -30px;
            left: -30px;
        }

        button:active:before {
            background: black;
            transition: background 0s;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container0">
            <h1 class="community-heading">SLIIT UNI</h1>
            <p class="features-text">Stay informed, stay connected</p>
            <p class="feature-para">Never miss an important update, event, or announcement. From academic news to campus
                activities, we bring everything to you in one place, keeping you engaged and informed</p>
        </div>



        <div class="second_content">
            <div class="hc-dashboard">
                <!-- Header Section -->
                <div class="hc-header">
                    <div class="hc-title">
                        <h1>Empowering you with real-time insights, whenever you need them.</h1>
                        <p>Uninotify keeps you updated in a fast-paced world. Get instant notifications on news, alerts,
                            and essential updates, so you're always in the loop and can make informed decisions.</p>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="hc-content">
                    <!-- Trackers Connected Card -->
                    <div class="hc-card hc-trackers">
                        <p>Be the first to know about our next event, from workshops to guest speakers. Make sure to
                            check our schedule for dates and details</p>
                    </div>

                    <!-- Focusing Card -->
                    <div class="hc-card hc-focusing">
                        <h2>Real-Time Alerts</h2>
                        <div class="hc-percentage">100%</div>
                        <p>Get notified instantly about updates that matter most to you. With Uninotify, you never miss
                            important news or events.</p>
                    </div>

                    <!-- Team's Productivity Card -->
                    <div class="hc-card hc-productivity">
                        <p>rack your progress and stay motivated with real-time updates. See how close you are to
                            reaching your milestones and celebrate every achievement along the way.</p>
                        <div class="hc-boost">5X</div>
                    </div>
                </div>

                <!-- Footer Section -->
                <div class="hc-footer">
                    <button class="aboutButton">About Us</button>
                </div>
            </div>
        </div>


        <div class="card-container">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="card">
                <h3>
                    <?php echo $row['title']; ?>
                </h3>
                <p>
                    <?php echo $row['description']; ?>
                </p>
                <?php if ($row['type'] == 'event' && $row['image']): ?>
                <img src="../<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>