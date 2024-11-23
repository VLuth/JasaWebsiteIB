<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IB Digital - Petik Digital Clone</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    /* Reset and General Styling */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Arial', sans-serif;
  line-height: 1.6;
  color: #333;
}
/* Header Section */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 50px;
  background: #f5f5f5;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.header .logo img {
  width: 150px;
}
.navbar .nav-links {
  list-style: none;
  display: flex;
  gap: 20px;
}
.navbar .nav-links a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
}
.navbar .nav-links a:hover {
  color: #007BFF;
}

/* Hero Section */
.hero {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  background: url('../img/hero-bg.jpg') no-repeat center center/cover;
  color: white;
}
.hero h1 {
  font-size: 3rem;
  margin-bottom: 20px;
}
.hero p {
  font-size: 1.2rem;
  margin-bottom: 30px;
}
.hero .btn {
  text-decoration: none;
  padding: 10px 20px;
  background: #007BFF;
  color: white;
  border-radius: 5px;
}
.hero .btn:hover {
  background: #0056b3;
}

/* Services Section */
.services {
  padding: 50px 0;
  background: #f9f9f9;
  text-align: center;
}
.services h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}
.service-cards {
  display: flex;
  justify-content: center;
  gap: 30px;
}
.card {
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  max-width: 300px;
}
.card i {
  font-size: 2rem;
  color: #007BFF;
  margin-bottom: 10px;
}
.card h3 {
  font-size: 1.5rem;
  margin-bottom: 10px;
}
.card p {
  font-size: 1rem;
}

/* About Section */
.about {
  padding: 50px 0;
  background: #fff;
  text-align: center;
}
.about h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

/* Portfolio Section */
.portfolio {
  padding: 50px 0;
  background: #f9f9f9;
  text-align: center;
}
.portfolio h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}
.portfolio-gallery {
  display: flex;
  justify-content: center;
  gap: 30px;
}
.portfolio-item {
  max-width: 300px;
  text-align: center;
}
.portfolio-item img {
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  margin-bottom: 15px;
}

/* Footer Section */
.footer {
  background: #333;
  color: white;
  padding: 20px 0;
  text-align: center;
}
.footer p {
  margin: 0;
}


</style>
<body>
  <!-- Header Section -->
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="#"><img src="img/logo.png" alt="IB Digital"></a>
      </div>
      <nav class="navbar">
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="home" class="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Build Your Digital Presence with IB Digital</h1>
        <p>We provide the best digital solutions to grow your business.</p>
        <a href="#contact" class="btn btn-primary">Get Started</a>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services">
    <div class="container">
      <h2>Our Services</h2>
      <div class="service-cards">
        <div class="card">
          <i class="fas fa-laptop-code"></i>
          <h3>Web Development</h3>
          <p>Custom websites tailored to your business needs.</p>
        </div>
        <div class="card">
          <i class="fas fa-chart-line"></i>
          <h3>SEO Optimization</h3>
          <p>Improve your website ranking on search engines.</p>
        </div>
        <div class="card">
          <i class="fas fa-bullhorn"></i>
          <h3>Digital Marketing</h3>
          <p>Reach your target audience effectively.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us Section -->
<section id="about" class="about">
    <div class="container">
      <h2>About Us</h2>
      <p>We are a team of digital experts who are passionate about helping businesses succeed online.</p>
    </div>
  </section>
  
  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <h2>Our Portfolio</h2>
      <div class="portfolio-gallery">
        <div class="portfolio-item">
          <img src="img/portfolio1.jpg" alt="Portfolio Item 1">
          <h3>Project 1</h3>
        </div>
        <div class="portfolio-item">
          <img src="img/portfolio2.jpg" alt="Portfolio Item 2">
          <h3>Project 2</h3>
        </div>
        <div class="portfolio-item">
          <img src="img/portfolio3.jpg" alt="Portfolio Item 3">
          <h3>Project 3</h3>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Footer Section -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2024 IB Digital. All rights reserved.</p>
    </div>
  </footer>
  

  <script src="js/script.js"></script>
</body>
<script>
    // Example of smooth scroll on navigation click
document.querySelectorAll('.nav-links a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href').substring(1);
    document.getElementById(targetId).scrollIntoView({
      behavior: 'smooth'
    });
  });
});
</script>
</html>
