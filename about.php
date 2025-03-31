<?php include 'includes/header.php'; ?>
<div class="container">
    <!-- Hero Section -->
    <section class="hero">
        <h1>About Campus Pulse</h1>
        <p>Your central hub for university events, academic deadlines, campus news, and student activities.</p>
    </section>

    <!-- About Content -->
    <section class="about-content">
        <div class="about-text">
            <h2>Our Mission</h2>
            <p>Founded in 2023, Campus Pulse was created by students for students to streamline campus communication. We recognized the challenge of staying informed about lectures, deadlines, social events, and university announcements across multiple platforms.</p>
            <p>Our platform consolidates all essential university information into one intuitive interface. From exam schedules to club meetings, sports events to guest lectures, Campus Pulse keeps the university community connected and informed.</p>
            <p>Today, we're proud to serve the entire university population - students, faculty, and staff - helping everyone stay synchronized with campus life.</p>
        </div>
        <div class="about-image">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="University campus">
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <h2>Why Campus Pulse?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🎓</div>
                <h3>Academic Calendar</h3>
                <p>Never miss important dates - exam schedules, registration deadlines, and holidays all in one place.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📢</div>
                <h3>University Announcements</h3>
                <p>Official communications from administration and faculty delivered directly to you.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎭</div>
                <h3>Student Activities</h3>
                <p>Discover club meetings, social events, and campus activities tailored to your interests.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔔</div>
                <h3>Custom Alerts</h3>
                <p>Personalized notifications for your classes, clubs, and activities.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🏟️</div>
                <h3>Athletics & Sports</h3>
                <p>Game schedules, tryout dates, and intramural sports information.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🍽️</div>
                <h3>Campus Services</h3>
                <p>Dining hall hours, library closures, shuttle schedules and more.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <h2>Our Student Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Jessica Chen">
                </div>
                <div class="member-info">
                    <h3>Jessica Chen</h3>
                    <p>Computer Science '24</p>
                </div>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Marcus Johnson">
                </div>
                <div class="member-info">
                    <h3>Marcus Johnson</h3>
                    <p>Business Admin '25</p>
                </div>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Sophia Rodriguez">
                </div>
                <div class="member-info">
                    <h3>Sophia Rodriguez</h3>
                    <p>Graphic Design '23</p>
                </div>
            </div>
            <div class="team-member">
                <div class="member-image">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="David Kim">
                </div>
                <div class="member-info">
                    <h3>David Kim</h3>
                    <p>Electrical Engineering '24</p>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'includes/footer.php'; ?>

<style>
    /* Base Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        background-color: #ffffff;
        color: #333333;
        line-height: 1.6;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    /* Hero Section */
    .hero {
        text-align: center;
        margin-bottom: 60px;
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        padding: 80px 20px;
        background: linear-gradient(135deg, #d10000, #8b0000);
        color: white;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .hero p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto 30px;
    }

    /* About Content */
    .about-content {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        margin-bottom: 60px;
    }

    .about-text {
        flex: 1;
        min-width: 300px;
    }

    .about-text h2 {
        font-size: 2.2rem;
        margin-bottom: 25px;
        color: #000000;
        position: relative;
        padding-bottom: 10px;
    }

    .about-text h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(to right, #d10000, #8b0000);
        border-radius: 2px;
    }

    .about-text p {
        margin-bottom: 20px;
        font-size: 1.1rem;
        color: #555555;
    }

    .about-image {
        flex: 1;
        min-width: 300px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .about-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .about-image:hover img {
        transform: scale(1.05);
    }

    /* Features Section */
    .features {
        margin-bottom: 60px;
    }

    .features h2 {
        text-align: center;
        font-size: 2.2rem;
        margin-bottom: 50px;
        color: #000000;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .feature-card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #e0e0e0;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(209, 0, 0, 0.1);
        border-color: #d10000;
    }

    .feature-icon {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #d10000;
    }

    .feature-card h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #000000;
    }

    /* Team Section */
    .team {
        margin-bottom: 60px;
    }

    .team h2 {
        text-align: center;
        font-size: 2.2rem;
        margin-bottom: 50px;
        color: #000000;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .team-member {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        text-align: center;
        transition: transform 0.3s ease;
        border: 1px solid #e0e0e0;
    }

    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(209, 0, 0, 0.1);
    }

    .member-image {
        height: 250px;
        overflow: hidden;
    }

    .member-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .team-member:hover .member-image img {
        transform: scale(1.1);
    }

    .member-info {
        padding: 25px 20px;
    }

    .member-info h3 {
        font-size: 1.3rem;
        margin-bottom: 5px;
        color: #000000;
    }

    .member-info p {
        color: #d10000;
        font-weight: 600;
        margin-bottom: 15px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }
        
        .hero p {
            font-size: 1rem;
        }
        
        .about-text h2, .features h2, .team h2 {
            font-size: 1.8rem;
        }
    }
</style>