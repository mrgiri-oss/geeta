<?php
$pageTitle = "Geeta Classes | Sports & Tuition Classes in Panchkula";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <meta name="description" content="Geeta Classes — Sports and tuition classes in Panchkula. Learn, play and grow.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Tailwind is available for future components; the page styling below is custom for Geeta Classes. -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="site-header" id="siteHeader">
    <nav class="navbar">
        <a href="index.php" class="brand">
            <img src="assets/images/academy/22.jpg" class="brand-logo" alt="Geeta Classes logo">
            <div class="brand-name">
                <strong>GEETA</strong>
                <span>SPORTS &amp; TUITION CLASSES</span>
            </div>
        </a>

        <div class="nav-links" id="navLinks">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#tuition">Tuition</a>
            <a href="#sports">Sports</a>
            <a href="#moments">Moments</a>
            <a href="#contact">Contact</a>
        </div>

        <a href="tel:8284842304" class="nav-cta">Call Now <span>↗</span></a>

        <button class="menu-toggle" id="menuToggle" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>
    </nav>
</header>

<main>

<section class="hero" id="home">
    <div class="hero-orbit orbit-one"></div>
    <div class="hero-orbit orbit-two"></div>

    <div class="hero-wrap">
        <div class="hero-copy reveal">
            <div class="eyebrow"><i></i> PANCHKULA • SPORTS • TUITION</div>

            <h1>
                Learn.
                <span>Play.</span>
                Grow.
            </h1>

            <p class="hero-lead">
                A cheerful place where classroom learning, sports and confidence
                come together — helping students grow beyond marks and medals.
            </p>

            <div class="hero-actions">
                <a href="#tuition" class="btn btn-primary">Explore Tuition <b>→</b></a>
                <a href="#sports" class="btn btn-ghost">Explore Sports <b>↗</b></a>
            </div>

            <div class="hero-facts">
                <div><b>1st–12th</b><small>Classes</small></div>
                <em></em>
                <div><b>HBSE • CBSE • ICSE</b><small>Boards</small></div>
                <em></em>
                <div><b>Sports + Fitness</b><small>Activities</small></div>
            </div>
        </div>

        <div class="hero-photo reveal-right">
            <div class="hero-main-image">
                <img src="assets/images/academy/04.jpg" alt="Students participating in sports at Geeta Classes">
                <div class="hero-image-caption">
                    <span>REAL STUDENTS. REAL MOMENTS.</span>
                    <b>Learning doesn't stop at the classroom.</b>
                </div>
            </div>

            <div class="floating-note note-yellow">
                <strong>FIT BODY</strong>
                <span>SHARP MIND</span>
            </div>

            <div class="floating-note note-white">
                <strong>GEETA</strong>
                <span>CLASSES</span>
            </div>
        </div>
    </div>

    <div class="hero-scroll">SCROLL <span></span></div>
</section>

<section class="trust-bar">
    <div class="container trust-inner">
        <span>GEETA CLASSES</span>
        <b>Tuition for 1st–12th</b>
        <b>HBSE</b><b>CBSE</b><b>ICSE</b>
        <b>Sports Activities</b>
        <span>HARIPUR • PANCHKULA</span>
    </div>
</section>

<section class="about section" id="about">
    <div class="container about-grid">
        <div class="about-collage reveal">
            <div class="collage-main"><img src="assets/images/academy/02.jpg" alt="Students studying at Geeta Classes"></div>
            <div class="collage-small"><img src="assets/images/academy/17.jpg" alt="Teacher at Geeta Classes"></div>
            <div class="collage-tag"><strong>LEARN</strong><span>WITH CONFIDENCE</span></div>
        </div>

        <div class="about-copy reveal-right">
            <div class="eyebrow">WHY GEETA CLASSES?</div>
            <h2>Education that feels <span>alive.</span></h2>
            <p>
                Geeta Classes combines academic support with sports and fitness,
                creating an environment where students can study, move, compete
                and build confidence.
            </p>

            <div class="about-points">
                <div><b>01</b><span>Qualified &amp; experienced teachers</span></div>
                <div><b>02</b><span>Tuition for Classes 1st to 12th</span></div>
                <div><b>03</b><span>Sports, fitness and activity-based growth</span></div>
                <div><b>04</b><span>Home tuition facilities available</span></div>
            </div>
        </div>
    </div>
</section>

<section class="split-section">
    <div class="split-card split-academic reveal">
        <div class="split-photo"><img src="assets/images/academy/02.jpg" alt="Tuition students"></div>
        <div class="split-content">
            <small>01 / ACADEMICS</small>
            <h2>Strong<br><i>foundations.</i></h2>
            <p>Concepts first. Confidence next. Results follow.</p>
            <a href="#tuition">See tuition options <b>→</b></a>
        </div>
    </div>

    <div class="split-card split-sport reveal-right">
        <div class="split-photo"><img src="assets/images/academy/05.jpg" alt="Football training at Geeta Classes"></div>
        <div class="split-content">
            <small>02 / SPORTS</small>
            <h2>Play with<br><i>purpose.</i></h2>
            <p>Skill, fitness, discipline and teamwork beyond the classroom.</p>
            <a href="#sports">Explore sports <b>→</b></a>
        </div>
    </div>
</section>

<section class="tuition section" id="tuition">
    <div class="container">
        <div class="section-top reveal">
            <div>
                <div class="eyebrow">TUITION CLASSES</div>
                <h2>From first concepts<br>to <span>big goals.</span></h2>
            </div>
            <p>Academic support for Classes 1st–12th across HBSE, CBSE and ICSE.</p>
        </div>

        <div class="tuition-layout">
            <div class="tuition-image reveal">
                <img src="assets/images/academy/03.jpg" alt="Students in a Geeta Classes learning session">
                <div class="image-sticker">ALL SUBJECTS<br><small>LEARN • PRACTICE • IMPROVE</small></div>
            </div>

            <div class="tuition-options reveal-right">
                <article><span>01</span><div><h3>Classes 1st–5th</h3><p>Build strong fundamentals and learning habits.</p></div></article>
                <article><span>02</span><div><h3>Classes 6th–8th</h3><p>Strengthen concepts and become more independent.</p></div></article>
                <article><span>03</span><div><h3>Classes 9th–10th</h3><p>Focused subject support and exam preparation.</p></div></article>
                <article><span>04</span><div><h3>Classes 11th–12th</h3><p>Science, Commerce &amp; Humanities support.</p></div></article>
            </div>
        </div>
    </div>
</section>

<section class="sports section-dark" id="sports">
    <div class="container">
        <div class="section-top light reveal">
            <div>
                <div class="eyebrow gold">SPORTS ACTIVITIES</div>
                <h2>Find your<br><span>game.</span></h2>
            </div>
            <p>Active students learn differently. Explore the sports and fitness activities represented in Geeta Classes' real-life photographs.</p>
        </div>

        <div class="sports-grid">
            <a class="sport-card big reveal" href="#moments">
                <img src="assets/images/academy/06.jpg" alt="Cricket activity">
                <div class="sport-label"><small>01</small><h3>Cricket</h3><span>Skill • Focus • Teamwork</span></div>
            </a>
            <a class="sport-card reveal" href="#moments">
                <img src="assets/images/academy/05.jpg" alt="Football activity">
                <div class="sport-label"><small>02</small><h3>Football</h3><span>Speed • Skill • Teamwork</span></div>
            </a>
            <a class="sport-card reveal" href="#moments">
                <img src="assets/images/academy/27.jpg" alt="Volleyball activity">
                <div class="sport-label"><small>03</small><h3>Volleyball</h3><span>Coordination • Teamwork</span></div>
            </a>
            <a class="sport-card reveal" href="#moments">
                <img src="assets/images/academy/33.jpg" alt="Badminton activity">
                <div class="sport-label"><small>04</small><h3>Badminton</h3><span>Movement • Precision</span></div>
            </a>
            <a class="sport-card reveal" href="#moments">
                <img src="assets/images/academy/39.jpg" alt="Students playing chess">
                <div class="sport-label"><small>05</small><h3>Mind Sports</h3><span>Focus • Strategy</span></div>
            </a>
        </div>
    </div>
</section>

<section class="moments section" id="moments">
    <div class="container">
        <div class="section-top reveal">
            <div>
                <div class="eyebrow">REAL GEETA MOMENTS</div>
                <h2>Moments worth<br><span>remembering.</span></h2>
            </div>
            <p>No stock photos here. This section is built around the academy's own photographs — students, classrooms, sports and events.</p>
        </div>

        <div class="moment-mosaic">
            <div class="moment featured reveal">
                <img src="assets/images/academy/37.jpg" alt="U-19 girls silver medal moment">
                <div><small>ACHIEVEMENT</small><h3>U-19 Girls — Silver Medal</h3></div>
            </div>

            <div class="moment reveal">
                <img src="assets/images/academy/38.jpg" alt="U-17 girls silver medal moment">
                <div><small>ACHIEVEMENT</small><h3>U-17 Girls — Silver Medal</h3></div>
            </div>

            <div class="moment reveal">
                <img src="assets/images/academy/34.jpg" alt="Student sports team">
                <div><small>TEAM</small><h3>Built together</h3></div>
            </div>

            <div class="moment reveal">
                <img src="assets/images/academy/35.jpg" alt="Young sports team">
                <div><small>SPORTS</small><h3>Play. Learn. Compete.</h3></div>
            </div>

            <div class="moment reveal">
                <img src="assets/images/academy/24.jpg" alt="Students in an activity session">
                <div><small>LEARNING</small><h3>Learning beyond books</h3></div>
            </div>

            <div class="moment reveal">
                <img src="assets/images/academy/31.jpg" alt="Group sports photograph">
                <div><small>COMMUNITY</small><h3>Growing together</h3></div>
            </div>
        </div>
    </div>
</section>

<section class="achievement-strip">
    <div class="container achievement-inner">
        <div class="achievement-copy reveal">
            <div class="eyebrow gold">PROUD MOMENTS</div>
            <h2>Hard work deserves<br><span>to be celebrated.</span></h2>
            <p>The uploaded academy photographs include real team moments and medal-winning groups. We have made these the visual centre of the site instead of hiding them inside a generic gallery.</p>
        </div>

        <div class="achievement-photo reveal-right">
            <img src="assets/images/academy/38.jpg" alt="U-17 girls silver medal group">
            <div class="achievement-badge">GEETA<br><strong>SPORTS</strong></div>
        </div>
    </div>
</section>

<section class="gallery section">
    <div class="container">
        <div class="gallery-heading reveal">
            <div class="eyebrow">LIFE AT GEETA</div>
            <h2>A glimpse of the <span>journey.</span></h2>
        </div>

        <div class="gallery-grid">
            <img class="g1 reveal" src="assets/images/academy/07.jpg" alt="Geeta Classes facility">
            <img class="g2 reveal" src="assets/images/academy/08.jpg" alt="Geeta Classes classroom">
            <img class="g3 reveal" src="assets/images/academy/17.jpg" alt="Teacher at Geeta Classes">
            <img class="g4 reveal" src="assets/images/academy/32.jpg" alt="Sports group at Geeta Classes">
            <img class="g5 reveal" src="assets/images/academy/39.jpg" alt="Chess activity">
            <img class="g6 reveal" src="assets/images/academy/40.jpg" alt="Geeta Classes promotional flyer">
        </div>
    </div>
</section>



<section class="contact section-dark" id="contact">
    <div class="container contact-wrap">
        <div class="contact-copy reveal">
            <div class="eyebrow gold">COME VISIT / GET IN TOUCH</div>
            <h2>Ready to<br><span>get started?</span></h2>
            <p>Geeta Classes<br>H. No. 46, First Floor, Gali No-1,<br>Sector-4, Haripur, Panchkula, 134112</p>
        </div>

        <div class="contact-card reveal-right">
            <img src="assets/images/logo.png" alt="Geeta Classes">
            <small>CALL / WHATSAPP</small>
            <a href="tel:8284842304">8284842304</a>
            <a href="tel:9306993004">9306993004</a>
            <div class="contact-actions">
                <a class="btn btn-yellow" href="tel:8284842304">Call Now →</a>
                <a class="btn btn-light" target="_blank" href="https://wa.me/918284842304">WhatsApp →</a>
            </div>
        </div>
    </div>
</section>

</main>

<footer class="footer">
    <div class="container footer-main">
        <div class="footer-brand">
            <img src="assets/images/logo.png" alt="Geeta Classes logo">
            <div><strong>GEETA CLASSES</strong><span>SPORTS &amp; TUITION CLASSES</span></div>
            <p>Learn • Play • Grow</p>
        </div>
        <div><h4>Explore</h4><a href="#about">About</a><a href="#tuition">Tuition</a><a href="#sports">Sports</a><a href="#moments">Moments</a></div>
        <div><h4>Contact</h4><a href="tel:8284842304">8284842304</a><a href="tel:9306993004">9306993004</a><span>Haripur, Panchkula</span></div>
    </div>
    <div class="container footer-bottom"><span>© <?= date('Y') ?> Geeta Classes</span><span>Fit Body • Sharp Mind • Bright Future</span></div>
</footer>

<script src="main.js"></script>
</body>
</html>
