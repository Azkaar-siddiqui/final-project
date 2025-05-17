<!DOCTYPE html>
<html>
<head>
    <title>Aaiye N Sir Murga Khaiye n</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            scroll-behavior: smooth;
            background: linear-gradient(to right, #fffde7, #ffecb3);
        }

        nav ul {
            background: linear-gradient(to right, #ff7043, #bf360c);
            overflow: hidden;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            color: #fff;
            font-size: 1rem;
            padding: 14px 20px;
            display: block;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #8d6e63;
        }

        nav h2 {
            color: white;
            text-align: center;
            margin: 0;
            padding: 10px;
            background: linear-gradient(to right, #d84315, #bf360c);
        }

        .hero-section {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden;
        }

        .carousel-slide {
            display: flex;
            width: 100%;
            height: 500px;
            animation: slide 16s infinite;
        }

        .carousel-slide img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            flex-shrink: 0;
        }

        @keyframes slide {
            0% { transform: translateX(0%); }
            20% { transform: translateX(0%); }
            25% { transform: translateX(-100%); }
            45% { transform: translateX(-100%); }
            50% { transform: translateX(-200%); }
            70% { transform: translateX(-200%); }
            75% { transform: translateX(-300%); }
            95% { transform: translateX(-300%); }
            100% { transform: translateX(0%); }
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
            font-size: 2.5rem;
            font-weight: bold;
            width: 80%;
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
        }

        .card {
            border: 1px solid #ccc;
            padding: 10px;
            width: 300px;
            text-align: center;
            background-color: white;
            border-radius: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            cursor: pointer;
        }

        .card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: 8px;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .about-section {
            display: flex;
            flex-wrap: wrap;
            padding: 50px;
            align-items: center;
            justify-content: center;
            background-color: #ffe0b2;
        }

        .about-text {
            flex: 1;
            min-width: 300px;
            padding: 20px;
        }

        .about-text h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .about-text p {
            font-size: 18px;
            line-height: 1.6;
        }

        .about-images {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            min-width: 300px;
        }

        .about-images img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .about-images img:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        h2.section-heading {
            text-align: center;
            padding: 20px;
            font-size: 2rem;
            background: linear-gradient(to right, #ff9800, #ff5722);
            color: #fff;
        }

        footer {
            background-color: #3e2723;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }

        #contact {
            background: #fff8e1;
            padding: 50px 20px;
            text-align: center;
        }

        #contact h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .contact-form button {
            background: #ff5722;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .contact-form button:hover {
            background: #e64a19;
        }

        .social-icons a {
            margin: 0 10px;
            font-size: 24px;
            color: #ff5722;
        }

        #productModal {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: rgba(0,0,0,0.6);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        #productModal .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            position: relative;
        }

        #productModal .modal-content img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .buy-now { background-color: #ff7043; }
        .buy-now:hover { background-color: #e64a19; }

        .add-cart { background-color: #4caf50; }
        .add-cart:hover { background-color: #388e3c; }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
        }

        .booking-form button:hover {
    background: linear-gradient(to right, #d84315, #bf360c);
    transform: scale(1.05);
}
#testimonials div:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}


    </style>
</head>
<body>

<nav>
    <h2>😋Aaiye N sir Khaiye N😋😋😋</h2>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="reservation.php">Reservation/login</a></li>
    </ul>
</nav>

<section class="hero-section">
    <div class="carousel-slide">
        <img src="assets/images/food1.jpg" alt="Delicious Dish 1">
        <img src="assets/images/food2.jpg" alt="Delicious Dish 2">
        <img src="assets/images/food3.jpg" alt="Delicious Dish 3">
        <img src="assets/images/food4.jpg" alt="Delicious Dish 4">
    </div>
    <div class="hero-text">
        Taste the Tradition <br>
        Authentic Flavors of India
    </div>
</section>

<h2 class="section-heading" id="menu">Our Menu</h2>
<div class="card-container">
    <?php for ($i = 1; $i <= 12; $i++): ?>
        <div class="card" onclick="showProductDetails(<?php echo $i; ?>)">
            <img src="assets/images/dish<?php echo $i; ?>.jpg" alt="Dish <?php echo $i; ?>">
            <p>Dish <?php echo $i; ?></p>
        </div>
    <?php endfor; ?>
</div>

<!-- --------------table booking section------- -->

<!-- Table Booking Section -->
<section id="booking" style="background: #fff3e0; padding: 50px 20px; text-align: center;">
    <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Book Your Table</h2>
    <p>Reserve your spot now and enjoy authentic Indian cuisine at The Desi Dhaba!</p>
    <form class="booking-form" style="max-width: 600px; margin: 30px auto;">
        <input type="text" placeholder="Your Name" style="width: 100%; padding: 12px; margin: 10px 0; border-radius: 8px; border: 1px solid #ccc;">
        <input type="email" placeholder="Your Email" style="width: 100%; padding: 12px; margin: 10px 0; border-radius: 8px; border: 1px solid #ccc;">
        <input type="tel" placeholder="Phone Number" style="width: 100%; padding: 12px; margin: 10px 0; border-radius: 8px; border: 1px solid #ccc;">
        <input type="date" style="width: 100%; padding: 12px; margin: 10px 0; border-radius: 8px; border: 1px solid #ccc;">
        <input type="time" style="width: 100%; padding: 12px; margin: 10px 0; border-radius: 8px; border: 1px solid #ccc;">
        <select style="width: 100%; padding: 12px; margin: 10px 0; border-radius: 8px; border: 1px solid #ccc;">
            <option value="">Select Table Size</option>
            <option value="2">2 Persons</option>
            <option value="4">4 Persons</option>
            <option value="6">6 Persons</option>
            <option value="8">8+ Persons</option>
        </select>
        <button type="submit" style="background: linear-gradient(to right, #ff7043, #e64a19); color: white; padding: 12px 25px; border: none; border-radius: 8px; cursor: pointer; transition: all 0.3s ease;">Book Now</button>
    </form>
</section>
<!-- --------------end---table-------- -->

<section id="about" class="about-section">
    <div class="about-text">
        <h2>About The Desi Dhaba</h2>
        <p>Welcome to The Desi Dhaba – where every meal is a celebration of authentic Indian flavors. We serve home-style dishes made with love and fresh ingredients.</p>
    </div>
    <div class="about-images">
        <img src="assets/images/kitchen.jpg" alt="Kitchen">
        <img src="assets/images/team.jpg" alt="Our Team">
    </div>
</section>

<!-- -----------------review------ -->
 <section id="testimonials" style="background-color:#fff3e0; padding:50px 20px;">
    <h2 style="text-align:center; color:#e65100; font-size:2.5rem; margin-bottom:40px;">What Our Customers Say</h2>

    <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:30px;">
        <?php 
        $reviews = [
            ["name" => "Aniket", "text" => "Amazing food and great ambience. Loved the Butter Chicken!", "stars" => 5],
            ["name" => "MD. Arman", "text" => "Homely vibes with authentic flavors. Highly recommend!", "stars" => 4],
            ["name" => "Deepak", "text" => "The service was quick and friendly. Food was delicious!", "stars" => 5],
        ];

        foreach ($reviews as $review): ?>
            <div style="background:#fff; padding:20px; width:300px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.1); transition:transform 0.3s ease;">
                <h3 style="margin-bottom:10px; color:#bf360c;"><?php echo $review['name']; ?></h3>
                <p style="font-size:16px; line-height:1.6;"><?php echo $review['text']; ?></p>
                <div style="color:#ff9800; margin-top:10px;">
                    <?php for ($i = 0; $i < $review['stars']; $i++) echo "★"; ?>
                    <?php for ($i = $review['stars']; $i < 5; $i++) echo "☆"; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section id="testimonials" style="background-color:#fff3e0; padding:50px 20px;">
    <h2 style="text-align:center; color:blue; font-size:2.5rem; margin-bottom:40px;">Review & Rating </h2>

    <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:30px;">
        <?php 
        $reviews = [
            ["name" => "Purushotam", "text" => "Amazing food and great ambience. Loved the Butter Chicken!", "stars" => 5],
            ["name" => "Wassi", "text" => "Bhut MSt Mutton tha bhai!", "stars" => 4],
            ["name" => "Suman", "text" => "The service was quick and friendly. Food was delicious!", "stars" => 5],
        ];

        foreach ($reviews as $review): ?>
            <div style="background:#fff; padding:20px; width:300px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.1); transition:transform 0.3s ease;">
                <h3 style="margin-bottom:10px; color:#bf360c;"><?php echo $review['name']; ?></h3>
                <p style="font-size:16px; line-height:1.6;"><?php echo $review['text']; ?></p>
                <div style="color:#ff9800; margin-top:10px;">
                    <?php for ($i = 0; $i < $review['stars']; $i++) echo "★"; ?>
                   
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- -----------endreview---- -->

<section id="contact">
    <h2>Contact Us</h2>
    <p>Email: contact@desidhaba.com<br>Phone: +91-9876543210</p>
    <div class="contact-form">
        <input type="text" placeholder="Your Name">
        <input type="email" placeholder="Your Email">
        <textarea rows="5" placeholder="Your Message"></textarea>
        <button>Send Message</button>
    </div>
    <div class="social-icons">
        <a href="#">🌐</a>
        <a href="#">📘</a>
        <a href="#">📸</a>
    </div>
</section>

<footer>
    <p>&copy; 2025 The Desi Dhaba. All rights reserved.</p>
</footer>

<div id="productModal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <img id="modalImage" src="" alt="Dish Image">
        <h3 id="modalTitle">Dish Title</h3>
        <p id="modalDescription">A mouth-watering dish made with traditional spices and fresh ingredients.</p>
        <button class="buy-now">Order Now</button>
        <button class="add-cart">Add to Cart</button>
    </div>
</div>

<script>
    function showProductDetails(index) {
        document.getElementById('modalImage').src = 'assets/images/dish' + index + '.jpg';
        document.getElementById('modalTitle').textContent = 'Dish ' + index;
        document.getElementById('modalDescription').textContent = 'A delicious Indian dish made with traditional spices and ingredients.';
        document.getElementById('productModal').style.display = 'flex';
        window.scrollTo(0, 0);
    }

    function closeModal() {
        document.getElementById('productModal').style.display = 'none';
    }
</script>

</body>
</html>
