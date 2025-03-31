<?php include 'includes/header.php'; ?>
<div class="container">
    <!-- Hero Section -->
    <section class="hero">
        <h1>Contact UniNotify</h1>
        <p>Have questions, suggestions, or need support? Reach out to our team - we're here to help!</p>
    </section>

    <!-- Contact Content -->
    <section class="contact-content">
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" required>
                        <option value="" disabled selected>Select a subject</option>
                        <option value="general">General Inquiry</option>
                        <option value="technical">Technical Support</option>
                        <option value="event">Event Submission</option>
                        <option value="feedback">Feedback/Suggestions</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
        <div class="contact-info">
            <h2>Contact Information</h2>
            <div class="info-item">
                <div class="info-icon">📍</div>
                <div class="info-content">
                    <h3>Our Location</h3>
                    <p>University Tech Hub<br>123 Campus Drive<br>Computer Science Department</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon">✉️</div>
                <div class="info-content">
                    <h3>Email Us</h3>
                    <a href="mailto:support@uninotify.com">support@uninotify.com</a>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon">📞</div>
                <div class="info-content">
                    <h3>Call Us</h3>
                    <p>Support Line: (555) 987-6543<br>Office: (555) 123-4567</p>
                </div>
            </div>
            <div class="info-item">
                <div class="info-icon">🕒</div>
                <div class="info-content">
                    <h3>Support Hours</h3>
                    <p>Monday-Friday: 8:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <h2>Find Us on Campus</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215209132035!2d-73.98784492453702!3d40.75085697138938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ1JzAzLjEiTiA3M8KwNTknMDkuOSJX!5e0!3m2!1sen!2sus!4v1623861234567!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</div>

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

    /* Contact Content */
    .contact-content {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        margin-bottom: 60px;
    }

    .contact-form {
        flex: 1;
        min-width: 300px;
    }

    .contact-form h2 {
        font-size: 2.2rem;
        margin-bottom: 25px;
        color: #000000;
        position: relative;
        padding-bottom: 10px;
    }

    .contact-form h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(to right, #d10000, #8b0000);
        border-radius: 2px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #000000;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        outline: none;
        border-color: #d10000;
        box-shadow: 0 0 0 3px rgba(209, 0, 0, 0.1);
    }

    .form-group textarea {
        min-height: 150px;
        resize: vertical;
    }

    .submit-btn {
        background: linear-gradient(to right, #d10000, #8b0000);
        color: white;
        border: none;
        padding: 12px 30px;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 6px;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(209, 0, 0, 0.3);
    }

    .contact-info {
        flex: 1;
        min-width: 300px;
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .contact-info h2 {
        font-size: 2.2rem;
        margin-bottom: 25px;
        color: #000000;
        position: relative;
        padding-bottom: 10px;
    }

    .contact-info h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(to right, #d10000, #8b0000);
        border-radius: 2px;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }

    .info-icon {
        font-size: 1.5rem;
        color: #d10000;
        margin-right: 15px;
        margin-top: 3px;
    }

    .info-content h3 {
        font-size: 1.2rem;
        margin-bottom: 5px;
        color: #000000;
    }

    .info-content p, .info-content a {
        color: #555555;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .info-content a:hover {
        color: #d10000;
    }

    /* Map Section */
    .map-section {
        margin-bottom: 60px;
    }

    .map-section h2 {
        text-align: center;
        font-size: 2.2rem;
        margin-bottom: 30px;
        color: #000000;
    }

    .map-container {
        height: 400px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }
        
        .hero p {
            font-size: 1rem;
        }
        
        .contact-form h2, .contact-info h2, .map-section h2 {
            font-size: 1.8rem;
        }
    }
</style>
<?php include 'includes/footer.php'; ?>