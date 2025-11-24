<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FinMastery - Your Path to Financial Freedom</title>
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
    
    /* Login Button */
    .login-button {
      background-color: #ffffff;
      color: #255d00;
      padding: 0.5rem 1rem;
      border-radius: 50px;
      font-weight: bold;
      transition: background-color 0.3s ease, transform 0.3s ease;
      border: none;
      cursor: pointer;
    }
    .login-button:hover {
      background-color: #218838;
      transform: translateY(-3px);
      color : #ffffff;
    }
    
    /* Hero Section */
    .hero {
      height: 100vh;
      background: linear-gradient(135deg, #28a745 0%, #ffffff 70%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 1rem;
      margin-top: 70px; /* Offset for fixed navbar */
    }
    .hero h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      animation: slideDown 1s ease-out;
    }
    .hero p {
      font-size: 1.25rem;
      max-width: 700px;
      margin-bottom: 2rem;
      animation: fadeIn 1.5s ease-out;
    }
    .cta-button {
      background-color: #28a745;
      color: #fff;
      padding: 1rem 2rem;
      border-radius: 50px;
      font-weight: bold;
      transition: background-color 0.3s ease, transform 0.3s ease;
      border: none;
      cursor: pointer;
    }
    .cta-button:hover {
      background-color: #218838;
      transform: translateY(-3px);
    }
    
    /* Section Styles */
    section {
      padding: 4rem 2rem;
      text-align: center;
    }
    section h2 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      position: relative;
    }
    section h2::after {
      content: "";
      width: 60px;
      height: 4px;
      background: #28a745;
      display: block;
      margin: 0.5rem auto 1rem;
      border-radius: 2px;
    }
    section p {
      font-size: 1.125rem;
      max-width: 800px;
      margin: 0 auto;
    }
    
    /* Curriculum Accordion Styles */
    details {
      margin: 1.5rem auto;
      max-width: 800px;
      text-align: left;
      background: #f9f9f9;
      padding: 1rem;
      border-radius: 5px;
      border: 1px solid #ddd;
    }
    summary {
      font-size: 1.25rem;
      font-weight: bold;
      cursor: pointer;
      outline: none;
    }
    details[open] summary { color: #28a745; }
    details div {
      margin-top: 1rem;
    }
    details h3 {
      margin: 1rem 0 0.5rem;
      font-size: 1.1rem;
      color: #28a745;
    }
    details ul {
      margin-left: 1.5rem;
      list-style-type: disc;
    }
    details ul li {
      margin: 0.5rem 0;
    }
    
    /* Enrollment Section */
    .enroll {
      background: #f0f0f0;
      padding: 4rem 2rem;
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
      .navbar ul {
        flex-direction: column;
        margin-top: 1rem;
      }
      .navbar ul li { margin: 0.5rem 0; }
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
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#curriculum">Curriculum</a></li>
      <li><a href="#enroll">Enroll</a></li>
      <li><a href="login.php" class="btn btn-primary group max-lg:btn-block btn-hover-orange lg:btn-sm">Login</a></li> <!-- Updated Login Button -->
    </ul> 
  </nav>
  
  <!-- Hero Section -->
  <header class="hero" id="home">
    <h1 style="font-weight: bold;">LEARN BASIC ECONOMICS IN WEEKS NOT MONTHS</h1>
    <p>Your journey to financial freedom starts now. Discover strategies, insights, and tools to transform your financial future.</p>
    <button class="cta-button" onclick="document.getElementById('enroll').scrollIntoView({ behavior: 'smooth' });">
      Enroll Now
    </button>
  </header>
  
  <!-- About Section -->
  <section id="about">
    <h2>About the Course</h2>
    <p>FinMastery is designed to guide you through the complexities of personal finance with clear, actionable lessons. Whether you’re just starting or looking to refine your strategies, our comprehensive course provides a roadmap to financial success.</p>
  </section>
  
  <!-- Curriculum Section -->
  <section id="curriculum">
    <h2>Course Curriculum</h2>
    <p>Our comprehensive curriculum covers the essential aspects of personal finance, taxes, and macroeconomics. Click on each module to view the details.</p>
    
    <!-- Personal Finances Module -->
    <details >
      <summary>Personal Finances</summary>
      <div>
        <h3>What is it?</h3>
        <ul>
          <li>Definition and Basic Concepts</li>
          <li>History and Evolution</li>
          <li>Key Components</li>
          <li>Practical Strategies and Tools</li>
          <li>Impacts and Benefits</li>
          <li>Conclusion and Final Recommendations</li>
        </ul>
      </div>
      <div>
        <h3>Why is it Important?</h3>
        <ul>
          <li>Risks of Negligence</li>
          <li>Immediate Benefits</li>
          <li>Long-Term Impact</li>
          <li>Psychological and Emotional Benefits</li>
          <li>Societal and Economic Implications</li>
          <li>Case Study: Real-Life Impact</li>
          <li>Conclusion and Recommendations</li>
        </ul>
      </div>
      <div>
        <h3>Budgeting and Expense Management</h3>
        <ul>
          <li>Understanding Cash Flow</li>
          <li>Creating a Personal Budget</li>
          <li>Budgeting Techniques and Strategies</li>
          <li>Expense Management Techniques</li>
          <li>Tools and Technologies</li>
          <li>Best Practices and Case Studies</li>
          <li>Conclusion and Recommendations</li>
        </ul>
      </div>
      <div>
        <h3>Debt Management and Credit Optimization</h3>
        <ul>
          <li>Understanding Types of Debt</li>
          <li>Understanding Credit Scores and Reports</li>
          <li>Debt Reduction Strategies</li>
          <li>Credit Optimization Techniques</li>
          <li>Case Studies and Real-Life Examples</li>
          <li>Conclusion and Recommendations</li>
        </ul>
      </div>
      <div>
        <h3>Investment Strategies and Wealth Building</h3>
        <ul>
          <li>Introduction to Investment Strategies</li>
          <li>Types of Investment Vehicles</li>
          <li>Diversification and Portfolio Management</li>
          <li>Wealth‑Building Techniques</li>
          <li>Risk Management and Mitigation</li>
          <li>Bank Savings vs. 5% Bond under 2.5% Inflation</li>
          <li>Case Studies and Real‑Life Examples</li>
          <li>Conclusion and Recommendations</li>
        </ul>
      </div>
      <div>
        <h3>Retirement Planning</h3>
        <ul>
          <li>Introduction to Retirement Planning</li>
          <li>Retirement Savings Vehicles</li>
          <li>Estimating Retirement Needs</li>
          <li>Investment Strategies for Retirement</li>
          <li>Risk Management and Longevity Planning</li>
          <li>Case Studies and Real-Life Examples</li>
          <li>Conclusion and Final Recommendations</li>
        </ul>
      </div>
      <div>
        <h3>QUIZ</h3>
      </div>
    </details>
    
    <!-- Taxes Module -->
    <details>
      <summary>Taxes</summary>
      <div>
        <p>Module content coming soon.</p>
      </div>
    </details>
    
    <!-- Basic Macroeconomics Module -->
    <details>
      <summary>Basic Macroeconomics</summary>
      <div>
        <h3>Understanding Macroeconomics</h3>
        <ul>
          <li>Core Economic Indicators</li>
          <li>Supply and Demand Dynamics</li>
          <li>Government Economic Tools</li>
          <li>Business Cycles</li>
          <li>Global Economic Relations</li>
        </ul>
      </div>
      <div>
        <h3>Economic Policy and Macroeconomics</h3>
        <ul>
          <li>Fiscal Policy</li>
          <li>Monetary Policy</li>
          <li>Trade Policy</li>
        </ul>
      </div>
      <div>
        <h3>INFLATION</h3>
        <ul>
          <li>Definition & Basics</li>
          <li>Why Not Just Print More Money?</li>
          <li>Consequences of Excessive Money Printing</li>
          <li>Inflation Control Mechanisms</li>
        </ul>
      </div>
      <div>
        <h3>Impact of Macroeconomy on Personal Finances</h3>
        <ul>
          <li>Inflation and Purchasing Power</li>
          <li>Interest Rates and Borrowing</li>
          <li>GDP and Job Security</li>
          <li>Government Policies and Taxes</li>
          <li>Stock Market and Investments</li>
        </ul>
      </div>
      <div>
        <h3>QUIZ</h3>
      </div>
    </details>
  </section>
  
  <!-- Enrollment Section -->
  <section id="enroll" class="enroll">
    <h2>Join FinMastery Today</h2>
    <p>
      Secure your spot in this comprehensive course—packed with in‑depth modules on Personal Finances, Taxes, and Basic Macroeconomics. Learn everything from budgeting and debt management to understanding economic trends and planning for retirement. Transform your financial future with actionable strategies and real‑life case studies.
    </p>
    <button class="cta-button" style="margin-top: 40px;" onclick="window.location.href='enroll.php';">
      Enroll Now
    </button>
  </section>
  
  <!-- Footer -->
  <footer>
    <p>&copy; 2025 FinMastery. All rights reserved.</p>
  </footer>
</body>
</html>