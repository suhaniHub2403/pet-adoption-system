<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption - Find Your Best Friend</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

    <header>

        <nav class="navbar">

            <div class="logo">
                <i class="fa-solid fa-paw"></i>
                PetAdopt
            </div>

            <ul class="nav-links">

                <li><a href="#home">Home</a></li>

                <li><a href="#about">About</a></li>

                <li><a href="#categories">Categories</a></li>

                <li><a href="#featured">Featured Pets</a></li>

                <li><a href="#process">Adoption</a></li>

                <li><a href="#contact">Contact</a></li>

            </ul>

            <div class="nav-buttons">

                <a href="login.php" class="login-btn">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    Login
                </a>

                <a href="register.php" class="register-btn">
                    <i class="fa-solid fa-user-plus"></i>
                    Register
                </a>

                <a href="regdash.php" class="register-btn">📊
                    Dashboard
                </a>

            </div>

        </nav>

    </header>

    <section class="hero" id="home">

        <div class="hero-content">

            <h1>Find Your Forever Best Friend ❤️</h1>

            <p>

                Every rescued pet deserves a loving home.
                Adopt today and change a life forever.

            </p>

            <div class="hero-buttons">

                <a href="#featured" class="btn1">Adopt Now</a>

                <a href="#about" class="btn2">Learn More</a>

            </div>

        </div>

    </section>


    <section class="about" id="about">

        <h2>About PetAdopt</h2>

        <p>

            At <strong>PetAdopt</strong>, we believe that every pet deserves a loving family,
            a safe environment, and a chance to live a happy life.
            Our organization works closely with rescue shelters, volunteers, and veterinarians
            to rescue abandoned, injured, and homeless animals.

        </p>

        <p>

            Our mission is to make pet adoption simple, transparent, and joyful.
            Instead of buying pets, we encourage families to adopt rescued animals,
            giving them a second chance at life.

        </p>

        <p>

            Every adoption helps reduce homelessness among animals and supports shelters
            that dedicate their lives to saving pets. Whether you're looking for a playful
            puppy, a loving cat, a cheerful bird, or a gentle rabbit, you'll find a loyal
            companion waiting for you.

        </p>

        <div class="about-boxes">

            <div class="box">
                <i class="fa-solid fa-heart"></i>
                <h3>5000+</h3>
                <p>Successful Adoptions</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-house"></i>
                <h3>200+</h3>
                <p>Partner Shelters</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-paw"></i>
                <h3>7000+</h3>
                <p>Pets Rescued</p>
            </div>

            <div class="box">
                <i class="fa-solid fa-users"></i>
                <h3>3000+</h3>
                <p>Happy Families</p>
            </div>

        </div>

    </section>


    <section class="categories" id="categories">

        <h2>Pet Categories</h2>

        <div class="category-container">

            <div class="card">
                <img src="images/dogs.jpg">
                <h3>Dogs</h3>
                <p>Friendly, loyal and protective companions.</p>
            </div>

            <div class="card">
                <img src="images/cat.jpg">
                <h3>Cats</h3>
                <p>Independent, playful and affectionate pets.</p>
            </div>

            <div class="card">
                <img src="images/parrot.jpg">
                <h3>White Parrot</h3>
                <p>White parrots that brighten every home.</p>
            </div>

            <div class="card">
                <img src="images/rabbit.jpg">
                <h3>Rabbits</h3>
                <p>Soft, gentle and adorable companions.</p>
            </div>

            <div class="card">
                <img src="images/fish.jpg">
                <h3>Gold Fish</h3>
                <p>Beautiful aquatic friends for peaceful homes.</p>
            </div>

            <div class="card">
                <img src="images/hamster.jpg">
                <h3>Hamsters</h3>
                <p>Small, active and fun-loving pets.</p>
            </div>


             <div class="card">
                <img src="images/canary.jpg">
                <h3>Canary Bird</h3>
                <p>Small, active and fun-loving pets.</p>
            </div>


             <div class="card">
                <img src="images/turtle.jpg">
                <h3>Turtle</h3>
                <p>Small, active and fun-loving pets.</p>
            </div>

             <div class="card">
                <img src="images/duck.jpg">
                <h3>Duck</h3>
                <p>Small, active and fun-loving pets.</p>
            </div>

             <div class="card">
                <img src="images/goat.jpg">
                <h3>Goat</h3>
                <p>Small, active and fun-loving pets.</p>
            </div>


        </div>

    </section>

    <section class="featured" id="featured">

        <h2>Featured Pets</h2>

        <div class="pet-container">

            <div class="pet-card">

                <img src="images/dog.jpg">

                <h3>Bruno</h3>

                <p>Golden Retriever • 2 Years</p>

                <button><a href="login.php" style="text-decoration:none; font-size:lagre;">Adopt Me ❤️</a></button>

            </div>

            <div class="pet-card">

                <img src="images/cat2.jpg">

                <h3>Luna</h3>

                <p>Persian Cat • 1 Year</p>

                <button><a href="login.php" style="text-decoration:none; font-size:lagre;">Adopt Me ❤️</a></button>

            </div>

            <div class="pet-card">

                <img src="images/parrot2.jpg">

                <h3>Coco</h3>

                <p>Parrot • 3 Years</p>

                <button><a href="login.php" style="text-decoration:none; font-size:lagre;">Adopt Me ❤️</a></button>

            </div>

        </div>

    </section>


    <section class="process" id="process">

        <h2>Easy Adoption Process</h2>

        <div class="steps">

            <div class="step">

                <i class="fa-solid fa-magnifying-glass"></i>

                <h3>Choose</h3>

                <p>Browse our lovely pets.</p>

            </div>

            <div class="step">

                <i class="fa-solid fa-file-signature"></i>

                <h3>Apply</h3>

                <p>Complete the adoption form.</p>

            </div>

            <div class="step">

                <i class="fa-solid fa-house"></i>

                <h3>Meet</h3>

                <p>Meet your future companion.</p>

            </div>

            <div class="step">

                <i class="fa-solid fa-heart"></i>

                <h3>Adopt</h3>

                <p>Take your best friend home.</p>

            </div>

        </div>

    </section>


    <section class="contact" id="contact">

        <h2>Contact Us</h2>

        <form>

            <input type="text" placeholder="Your Name">

            <input type="email" placeholder="Email">

            <input type="text" placeholder="Phone">

            <textarea rows="6" placeholder="Your Message"></textarea>

            <button>Send Message</button>

        </form>

    </section>

    <footer>

        <h3>PetAdopt</h3>

        <p>

            Saving Lives • Creating Families • Sharing Love

        </p>

        <div class="social">

            <i class="fab fa-facebook"></i>

            <i class="fab fa-instagram"></i>

            <i class="fab fa-twitter"></i>

            <i class="fab fa-youtube"></i>

        </div>

        <p>

            © 2026 PetAdopt. Thank you for your support❤️. All Rights Reserved.

        </p>

    </footer>

    <script src="script.js"></script>

</body>

</html>