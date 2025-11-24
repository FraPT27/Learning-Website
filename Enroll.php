<?php
// enroll.php – Enrollment page for FinMastery
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Enroll in FinMastery</title>
  <style>
    /* Reset & Base Styles */
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #fff;
      color: #333;
      line-height: 1.6;
      scroll-behavior: smooth;
    }
    a { text-decoration: none; color: inherit; }
    
    /* Navbar */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      z-index: 1000;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .navbar .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: #28a745;
    }
    .navbar ul {
      list-style: none;
      display: flex;
    }
    .navbar ul li { margin-left: 2rem; }
    .navbar ul li a {
      font-size: 1rem;
      transition: color 0.3s ease;
    }
    .navbar ul li a:hover { color: #218838; }
    
    /* Enrollment Hero Section */
    .hero {
      padding: 120px 2rem 4rem;
      text-align: center;
      background: linear-gradient(135deg, #28a745 0%, #ffffff 70%);
      margin-top: 70px; /* To offset the fixed navbar */
    }
    .hero h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      animation: slideDown 1s ease-out;
    }
    .hero p {
      font-size: 1.25rem;
      max-width: 700px;
      margin: 0 auto 2rem;
      animation: fadeIn 1.5s ease-out;
    }
    
    /* Pricing Cards */
    .pricing-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 2rem;
      padding: 2rem;
    }
    .pricing-card {
      background: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 2rem;
      width: 300px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .pricing-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .pricing-card h2 {
      font-size: 1.75rem;
      color: #28a745;
      margin-bottom: 0.5rem;
    }
    .pricing-card p {
      font-size: 1.125rem;
      margin-bottom: 1.5rem;
    }
    .price {
      font-size: 2rem;
      font-weight: bold;
      margin: 1rem 0;
    }
    .cta-button {
      background-color: #28a745;
      color: #fff;
      padding: 0.75rem 1.5rem;
      border-radius: 50px;
      font-weight: bold;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .cta-button:hover {
      background-color: #218838;
      transform: translateY(-3px);
    }
    
    /* FAQ Section */
    #faq {
      padding: 4rem 2rem;
      background: #f0f0f0;
      text-align: left;
    }
    #faq h2 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 2rem;
      position: relative;
    }
    #faq h2::after {
      content: "";
      width: 60px;
      height: 4px;
      background: #28a745;
      display: block;
      margin: 0.5rem auto 1rem;
      border-radius: 2px;
    }
    .faq-item {
      max-width: 800px;
      margin: 1rem auto;
      padding: 1rem;
      border-bottom: 1px solid #ddd;
    }
    .faq-item h3 {
      font-size: 1.25rem;
      color: #28a745;
      margin-bottom: 0.5rem;
    }
    .faq-item p {
      font-size: 1rem;
      margin-left: 1rem;
    }
    
    /* Footer */
    footer {
      padding: 2rem;
      background: #fff;
      text-align: center;
      font-size: 0.875rem;
      color: #777;
      border-top: 1px solid #eee;
    }
    
    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    @keyframes slideDown {
      from { transform: translateY(-20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .pricing-container {
        flex-direction: column;
        align-items: center;
      }
      .hero h1 { font-size: 2.5rem; }
      .hero p { font-size: 1rem; }
    }
  </style>
</head>
<body>
  <!-- Custom Navbar -->
  <nav class="navbar">
    <div class="logo">FinMastery</div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#pricing">Enroll</a></li>
      <li><a href="#faq">FAQ</a></li>
    </ul>
  </nav>
  
  <!-- Enrollment Hero Section -->
  <header class="hero" id="pricing">
    <h1>Enroll in FinMastery</h1>
    <p>
      Choose the plan that best suits you. The course content is identical in both plans—the only difference is that the Premium plan offers a live chat feature for real-time Q&amp;A.
    </p>
  </header>
  
  <!-- Pricing Cards Section -->
  <section class="pricing-container">
    <!-- Standard Version (Without Chat) -->
    <div class="pricing-card">
      <h2>Standard Course</h2>
      <p>Access the complete course content without live chat support.</p>
      <div class="price">$20</div><a href="register1.php">
      <button class="cta-button">
        Enroll Now
      </button>
      </a>
    </div>
    <!-- Premium Version (With Chat) -->
    <div class="pricing-card">
      <h2>Premium Course</h2>
      <p>Access the complete course content plus live chat for on-the‑fly questions.</p>
      <div class="price">$25</div>
  <a href="register.php">
      <button class="cta-button" onclick="window.location.href='checkout.php?plan=premium';">
        Enroll Now
      </button>
      </a>
    </div>
  </section>
  
  <!-- FAQ Section -->
  <section id="faq">
    <h2>Frequently Asked Questions</h2>
    <div class="faq-item">
      <h3>What is the difference between the two plans?</h3>
      <p>
        Both plans include the same comprehensive course content. The Premium plan uniquely includes a live chat feature that allows you to ask questions and get answers in real time.
      </p>
    </div>
    <div class="faq-item">
      <h3>Is the course content identical for both plans?</h3>
      <p>
        Yes, you receive the full course content regardless of which plan you choose. The only extra benefit of the Premium plan is the live chat support.
      </p>
    </div>
    <div class="faq-item">
      <h3>How long do I have access to the course content?</h3>
      <p>
        You have lifetime access to the course content, including any future updates or additions.
      </p>
      </div>

    <div class="faq-item">
      <h3>Can I upgrade from the Standard to the Premium plan later?</h3>
      <p>
        Please contact our support team for information on upgrading your plan after enrollment.
      </p>
    </div>
  </section>
  
  <!-- Footer -->
  <footer>
    <p>&copy; 2025 FinMastery. All rights reserved.</p>
  </footer>
</body>
</html>
