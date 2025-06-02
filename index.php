<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Partners Marketplace Platform  </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/Logo__1_-removebg-preview.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
    body {
      font-family: 'NDot57';
      padding: 0px;
      background-color:rgb(255, 255, 255);
      color: #333;
      max-width: 1800px;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .categories {
      display: flex;
      flex-wrap: wrap;
      gap: 50px;
      margin-bottom: 30px;
    }
    .column {
      display: flex;
      flex-direction: column;
    }
    .category-link {
      text-decoration: none;
      color: black;
      margin: 4px 0;
      
    }
    .category-link:hover {
      color: #5a4fff;
    }
    .section {
      margin: 0px 0;
    }
    
    .programs {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .program {
      background:rgb(255, 255, 255);
      border: 1px solid #e1e1e1;
      border-radius: 12px;
      
      padding: 15px;
      display: flex;
      align-items: center;
      width: 300px;
      transition: box-shadow 0.2s;
    }
    .program:hover {
      box-shadow: 0 4px 10px rgba(0,0,0,0);
    }
    .program img {
      width: 48px;
      height: 48px;
      object-fit: contain;
      border-radius: 8px;
      background: #f0f0f0;
      padding: 6px;
    }
    .program-info {
      margin-left: 12px;
      flex: 1;
    }
    .program-info b {
      display: block;
      margin-bottom: 4px;
      color: #111;
    }
    hr {
      margin: 30px 0;
      border: none;
      border-top: 1px solid white;
    }
    .explore-link {
      font-size: 14px;
      color: #5a4fff;
      text-decoration: none;
    }
    .explore-link:hover {
      text-decoration: underline;
    }
    .browse-section {
      max-width: 900px;
      margin: 40px auto;
      padding: 0px;
    }

    .categories {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px 40px;
    }

    .category-link {
      display: flex;
      align-items: center;
      
      text-decoration: none;
      color: #000;
    }

    .category-link:hover {
      color: #4a00e0;
    }

    .arrow {
      margin-right: 6px;
      color: #4a00e0;
    }

    .all-programs {
      text-align: right;
      margin-top: -24px;
    }

    .all-programs a {
      font-size: 14px;
      text-decoration: none;
      color: #4a00e0;
    }

    .all-programs a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .categories {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    .browse-title {
      padding-bottom: 40px;
      padding-left: 40px;
      font-weight: bold;
      margin-bottom: 0px;
      font-size: 26px;
      font-family: 'Jost', sans-serif;
    }

    .categories {
      padding-top: -20px;
      padding-left: 100px;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px 40px;
      max-height: 80px; /* default height */
      overflow: hidden;
      transition: max-height 0.4s ease;
    }

    .categories.expanded {
      max-height: 600px; /* enough to show more rows */
    }

    .category-link {
      display: flex;
      align-items: center;
      
      text-decoration: none;
      color: #000;
    }

    .category-link:hover {
      color: #4a00e0;
    }

    .arrow {
      margin-right: 6px;
      color: #4a00e0;
    }

    .toggle-container {
      text-align: right;
      margin-top: 10px;
    }

    .toggle-button {
      font-size: 14px;
      text-decoration: none;
      color: #4a00e0;
      cursor: pointer;
    }

    .toggle-button:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .categories {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 480px) {
      .categories {
        grid-template-columns: 1fr;
      }
    }
   
    .section {
      margin:0px;
      border:0px;
      
    }

    .section-title {   
      margin:0px;
      display: flex;
      padding-left: 60px;
      justify-content: space-between;
      align-items: center;
    }

    .explore-link {
      font-size: 14px;
      color: #4a00e0;
      text-decoration: none;
      cursor: pointer;
    }

    .explore-link:hover {
      
      position: relative;
    }

    .programs {
      padding-top: 20px;
      padding-left:120px;
      display: flex;
      flex-wrap: wrap;
      gap: 25px;
      max-height: 320px; /* Show 4 tiles by default */
      overflow: hidden;
      transition: max-height 0.2s ease;
      
    }

    .programs.expanded {
      max-height: 800px;
    }

    .program {
      width: 620px;
      display: flex;
      align-items: flex-start;
      gap: 20px;
    }

    .program img {
      
      background-color: white;
      width: 95px;
      height: 95px;
      border-radius: 4px;
    }

    .program-info {
      font-size: 14px;
    }

    .program-info b {
      display: block;
      margin-bottom: 4px;
      font-weight: bold
    }
    .contain{
      max-width: 1800px;
      border: 0px;
      margin: 0 auto;
      padding-left: 0px;
      padding-bottom: 0px;
      font-family: 'NDot57', sans-serif;
      background:rgb(255, 255, 255);
  
    }
    .human{
      margin: 0px;
      font-family: sans-serif;
      background-color:#2878eb;
      color: white;
      max-width: 1800px;
    }

    .target {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 60px;
      overflow: hidden;
      position: relative;
      max-width: 1800px;
    }


    .text-block {
      flex: 1;
      max-width: 500px;
      z-index: 1;
    }

    .text-block h1 {
      font-size: 28px;
      margin-bottom: 20px;
      
      color: white;
    }

    .text-block p {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 20px;
    }

    .button {
      display: inline-block;
      padding: 12px 20px;
      border: 2px solid white;
      border-radius: 8px;
      color: white;
      text-decoration: none;
      transition: background 0.3s;
    }

    .button:hover {
      background: rgba(255, 255, 255, 0);
    }

    .logo-wall {
      flex: 1;
      height: 800px;
      overflow: hidden;
      transform: rotate(-10deg);
      display: flex;
      gap: 40px;
    }

    .logo-column {
      display: flex;
      flex-direction: column;
      
      gap: 16px;
    }

    .scroll-up {
      animation: scroll-up 15s linear infinite;
    }

    .scroll-down {
      animation: scroll-down 15s linear infinite;
    }

    @keyframes scroll-up {
      0% {
        transform: translateY(0);
      }
      100% {
        transform: translateY(-50%);
      }
    }

    @keyframes scroll-down {
      0% {
        transform: translateY(-50%);
      }
      100% {
        transform: translateY(0);
      }
    }

    .logo {
      width: 100px;
      height: 100px;
      background-color: white;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .logo img {
      max-width: 70%;
      max-height: 70%;
    }

    @media (max-width: 768px) {
      #section {
        flex-direction: column;
        padding: 30px;
      }

      .logo-wall {
        transform: none;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 800px;
      }
    }
  </style>

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+91 8500825294</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@slashmark.in</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.linkedin.com/company/slash-mark/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="https://www.instagram.com/official.slashmark/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <!-- Logo with image -->
        <a href="index.php" class="navbar-brand ml-lg-3 d-flex align-items-center">
            <img src="img/logo2-removebg-preview.png" alt="Slash Mark Logo" style="height: 50px; width:auto;" class="mr-3" />
            <h5 class="m-0 text-uppercase text-primary">Slash Mark IT Solutions</h5>
        </a>

        <!-- Toggler for mobile -->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>




<!-- Nav links -->
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                
                
                <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
            <div class="dropdown-menu m-0">
              
                <a href="#" class="dropdown-item">Accounting</a>
                <a href="#" class="dropdown-item">Artificial Intelligence</a>
                <a href="#" class="dropdown-item">Collaboration & Productivity</a>
                <a href="#" class="dropdown-item">Content Management</a>
                <a href="#" class="dropdown-item">Customer Service</a>
                <a href="#" class="dropdown-item">Design</a>
                <a href="#" class="dropdown-item">Development</a>
                <a href="#" class="dropdown-item">E-commerce</a>
                <a href="#" class="dropdown-item">Human Resources</a>
                <a href="#" class="dropdown-item">Marketing</a>
                <a href="#" class="dropdown-item">Office Software</a>
                <a href="#" class="dropdown-item">Sales</a>
                <a href="#" class="dropdown-item">Security</a>
                <a href="#" class="dropdown-item">Social Media</a>
            </div>
        </div>
        
                    <a href="products.html" class="nav-item nav-link">Products</a>

                
                
                <a href="resources.html" class="nav-item nav-link">Resources</a>
            </div>
<a href="#" class="btn btn-primary py-2 px-4 d-none d-lg-block">Join as Partner</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->











<!-- Header Start -->
<div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center my-5 py-5">
        <!-- Main Title with smaller font size -->
        <h1 class="text-white mb-4" style="font-size: 48px; font-weight: 700;">
            Slash Mark Partners Marketplace Platform
        </h1>

        <!-- Search Bar -->
        <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
            <div class="input-group">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-light bg-white text-body px-3 dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="font-size: 14px; font-weight: 500;">
                        Categories
                    </button>
                    <div class="dropdown-menu" style="max-height: 300px; overflow-y: auto; font-size: 14px;">
                        <a class="dropdown-item" href="#">Top</a>
                        <a class="dropdown-item" href="#">Trending</a>
                        <a class="dropdown-item" href="#">Accounting</a>
                        <a class="dropdown-item" href="#">Artificial Intelligence</a>
                        <a class="dropdown-item" href="#">Collaboration & Productivity</a>
                        <a class="dropdown-item" href="#">Content Management</a>
                        <a class="dropdown-item" href="#">Customer Service</a>
                        <a class="dropdown-item" href="#">Design</a>
                        <a class="dropdown-item" href="#">Development</a>
                        <a class="dropdown-item" href="#">E-commerce</a>
                        <a class="dropdown-item" href="#">Human Resources</a>
                        <a class="dropdown-item" href="#">Marketing</a>
                        <a class="dropdown-item" href="#">Office Software</a>
                        <a class="dropdown-item" href="#">Sales</a>
                        <a class="dropdown-item" href="#">Security</a>
                        <a class="dropdown-item" href="#">Social Media</a>
                    </div>
                </div>
                <input type="text" class="form-control border-light" style="padding: 12px 15px; font-size: 14px;" placeholder="Search products or services">
                <div class="input-group-append">
                    <button class="btn btn-secondary px-4 px-lg-5" style="font-size: 14px;">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

</body>
<div class="contain">

  <div class="browse-title">Browse categories</div>
  
        <div id="categoryContainer" class="categories">
    <a class="category-link" href="#Accounting"><span class="arrow">›</span>Accounting</a>
    <a class="category-link" href="#Artificial Intelligence"><span class="arrow">›</span>Artificial Intelligence</a>
    <a class="category-link" href="#Collaboration & Productivity"><span class="arrow">›</span>Collaboration & Productivity</a>
    <a class="category-link" href="#Content Management"><span class="arrow">›</span>Content Management</a>
    <a class="category-link" href="#Customer Service"><span class="arrow">›</span>Customer Service</a>
    <a class="category-link" href="#Design"><span class="arrow">›</span>Design</a>
    <a class="category-link" href="#Development"><span class="arrow">›</span>Development</a>
    <a class="category-link" href="#E-commerce"><span class="arrow">›</span>E-commerce</a>
    <a class="category-link" href="#Human Resources"><span class="arrow">›</span>Human Resources</a>
    <a class="category-link" href="#Marketing"><span class="arrow">›</span>Marketing</a>
    <a class="category-link" href="#Office Software"><span class="arrow">›</span>Office Software</a>
    <a class="category-link" href="#Sales"><span class="arrow">›</span>Sales</a>
    <a class="category-link" href="#Security"><span class="arrow">›</span>Security</a>
    <a class="category-link" href="#Social Media"><span class="arrow">›</span>Social Media</a>
    <!-- Additional hidden categories -->
    <a class="category-link" href="#Video Editing"><span class="arrow">›</span>Video Editing</a>
    <a class="category-link" href="#Web Hosting"><span class="arrow">›</span>Web Hosting</a>
    <a class="category-link" href="#CRM"><span class="arrow">›</span>CRM</a>
    <a class="category-link" href="#Analytics"><span class="arrow">›</span>Analytics</a>
    <a class="category-link" href="#Events & Webinars"><span class="arrow">›</span>Events & Webinars</a>
    <a class="category-link" href="#Remote Work"><span class="arrow">›</span>Remote Work</a>
    <a class="category-link" href="#Cloud Storege"><span class="arrow">›</span>Cloud Storage</a>
    <a class="category-link" href="#Project Management"><span class="arrow">›</span>Project Management</a>
        </div>

    <div class="toggle-container">
    <span class="toggle-button" onclick="toggleCategories()">Explore all</span>
     </div>

  <script>
    function toggleCategories() {
      const container = document.getElementById("categoryContainer");
      container.classList.toggle("expanded");

      const button = document.querySelector(".toggle-button");
      if (container.classList.contains("expanded")) {
        button.textContent = "Show less";
      } else {
        button.textContent = "Explore all";
      }
    }
  </script>



  <!-- Your existing markup here up to Artificial Intelligence section -->

  <hr>

  <!-- Accounting Section -->
  <div class="section">
    <div class="section-title" >
     <h2 id="Accounting"> Accounting </h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtMK7uFR9XbvSiv8CfuiIfyUvi8XvVUFBwZw&s" alt="Dext">
        <div class="program-info">
          <b>Dext</b>
          Earn up to 20% commission on closed deals<br><br>
          Dext automation tool <br><br>
          Dext, formerly Receipt Bank, provides tools that help accounting professionals and business owners automate the capture and processing of financial documents. Dext Prepare enables users to scan, upload, and categorize receipts, invoices, and statements, eliminating manual entry and reducing errors.<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7LDmA2yEGvwbr-Y-DhX-PKEzpl8462l-PLg&s" alt="Tax1099">
        <div class="program-info">
          <b>Tax1099</b>
          Earn 30% recurring commission for the lifetime of referrals<br><br>
                  Tax1099 Cloud-based Platform <br><br>
                  A secure, cloud-based platform for electronically filing IRS forms such as 1099s, W-2s, and 1095s, featuring seamless integrations with accounting systems and tools for bulk filing and compliance management. <br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://mms.businesswire.com/media/20220214005095/en/1357519/5/taxfyle-logo-blue.jpg?download=1" alt="Taxfyle">
        <div class="program-info">
          <b>Taxfyle</b>
          Taxfyle – Digital Tax Preparation and Filing Platform<br><br>
          Taxfyle is a modern tax and accounting solution that leverages technology to connect users with a licensed CPA or EA within minutes. The platform simplifies tax filing by matching individuals and businesses with professionals based on their needs. Whether it's a simple personal tax return or complex business accounting, Taxfyle offers secure document upload, chat functionality, and expert review, making the process stress-free and efficient. It's ideal for consumers, small businesses, and enterprises looking to outsource financial compliance and reporting. <br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://practicebetter.io/favicon.ico" alt="Practice Better">
        <div class="program-info">
          <b>Practice Better</b>
          Earn $150 per new paid account<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>

  <hr>
    <!-- Artificial Intelligence Section -->

    <div class="section">
    <div class="section-title">
      <h2 id="Artificial Intelligence">Artificial Intelligence</h2>
      <span class="explore-link" onclick="togglePrograms(this)">Explore all</span>
    </div>
    <div class="programs">
      <!-- Default programs -->
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="AdCreative">
        <div class="program-info">
          <b>AdCreative</b>
          Earn up to 20% commission on closed deals<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.thinkific.com/favicon.ico" alt="Alli AI">
        <div class="program-info">
          <b>Alli AI</b>
          Earn 30% recurring commission for the lifetime of referrals<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://brightdata.com/favicon.ico" alt="Snowfire AI">
        <div class="program-info">
          <b>Snowfire AI</b>
          Earn 50% revenue share, up to $1,000<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://practicebetter.io/favicon.ico" alt="Practice Better">
        <div class="program-info">
          <b>Practice Better</b>
          Earn $150 per new paid account<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>

      <!-- Hidden initially -->
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      
    </div>
  </div>

  <script>
    function togglePrograms(link) {
      const programs = link.closest(".section").querySelector(".programs");
      programs.classList.toggle("expanded");

      link.textContent = programs.classList.contains("expanded")
        ? "Show less"
        : "Explore all";
    }
  </script>


  <hr>

  <!-- Collaboration & Productivity Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="Collaboration & Productivity">Collaboration & Productivity </h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://www.thinkific.com/favicon.ico" alt="Thinkific">
        <div class="program-info">
          <b>Thinkific</b>
          Earn 30% recurring commission for the lifetime of referrals<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://learnworlds.com/favicon.ico" alt="LearnWorlds">
        <div class="program-info">
          <b>LearnWorlds</b>
          Earn 30% recurring commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://trainual.com/favicon.ico" alt="Trainual">
        <div class="program-info">
          <b>Trainual</b>
          Affiliates earn 10%, partners earn 20%<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://ownr.co/favicon.ico" alt="Ownr">
        <div class="program-info">
          <b>Ownr</b>
          Earn up to $50 per referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>

  <hr>

  <!-- Content Management Section -->
  <div class="section">
    <div class="section-title">
     <h2 id="Content Management"> Content Management </h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://gorgias.com/favicon.ico" alt="Gorgias">
        <div class="program-info">
          <b>Gorgias</b>
          Earn 15% commission for 2 years<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://thryv.com/favicon.ico" alt="Thryv">
        <div class="program-info">
          <b>Thryv</b>
          Agencies earn up to 30%, affiliates 15% lifetime commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://sendcloud.com/favicon.ico" alt="Sendcloud">
        <div class="program-info">
          <b>Sendcloud</b>
          Earn 100% of referral's first month<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://practicebetter.io/favicon.ico" alt="Practice Better">
        <div class="program-info">
          <b>Practice Better</b>
          Earn $150 per referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>

  <hr>

  <!-- Customer Service Section -->
  <div class="section">
    <div class="section-title">
     <h2 id="Customer Service"> Customer Service</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://extensis.com/favicon.ico" alt="Extensis">
        <div class="program-info">
          <b>Extensis</b>
          Earn 20% plus production bonuses <br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://looka.com/favicon.ico" alt="Looka">
        <div class="program-info">
          <b>Looka</b>
          Earn up to 35% commission on every sale<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://landingi.com/favicon.ico" alt="Landingi">
        <div class="program-info">
          <b>Landingi</b>
          Earn 20% commission for 12 months (avg $500/account)<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://format.com/favicon.ico" alt="Format">
        <div class="program-info">
          <b>Format</b>
          Earn 50% commission on new subscriptions<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>

  <hr>

  <!-- Design Section -->
  <div class="section">
    <div class="section-title">
     <h2 id="Design"> Design</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://webflow.com/favicon.ico" alt="Webflow">
        <div class="program-info">
          <b>Webflow</b>
          Earn 50% commission for 12 months<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://brightdata.com/favicon.ico" alt="Bright Data">
        <div class="program-info">
          <b>Bright Data</b>
          Earn 50% revenue share, up to $1,000<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://liquidweb.com/favicon.ico" alt="Liquid Web">
        <div class="program-info">
          <b>Liquid Web Partner+ Program</b>
          Earn up to 20% monthly recurring commissions<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://glideapps.com/favicon.ico" alt="Glide">
        <div class="program-info">
          <b>Glide</b>
          Earn 20% commission for 1 year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>

  <hr>

  <!-- Development Section -->
  <div class="section">
    <div class="section-title">
     <h2 id="Development"> Development</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://gorgias.com/favicon.ico" alt="Gorgias">
        <div class="program-info">
          <b>Gorgias</b>
          Earn 15% commission for 2 years<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions in the first year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://liquidweb.com/favicon.ico" alt="Liquid Web">
        <div class="program-info">
          <b>Liquid Web Partner+ Program</b>
          Earn up to 20% recurring commissions<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://spocket.co/favicon.ico" alt="Spocket">
        <div class="program-info">
          <b>Spocket</b>
          Earn 20% recurring commissions forever<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>

  <hr>

  <!-- E-Commerce Section -->
  <div class="section">
    <div class="section-title">
    <h2 id="E-Commerce">  E-Commerce</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://deel.com/favicon.ico" alt="Deel">
        <div class="program-info">
          <b>Deel</b>
          Earn $1500 per paying customer<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://tellent.com/favicon.ico" alt="Tellent Recruitee">
        <div class="program-info">
          <b>Tellent Recruitee</b>
          Earn 20% of every sale in year 1<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://trainual.com/favicon.ico" alt="Trainual">
        <div class="program-info">
          <b>Trainual</b>
          Affiliates earn 10%, partners earn 20%<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://sunsama.com/favicon.ico" alt="Sunsama">
        <div class="program-info">
          <b>Sunsama</b>
          Earn $100 per upgrade<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>

  <hr>

  <!-- Human Resources Section -->
  <div class="section">
    <div class="section-title">
    <h2 id="Human Resources">  Human Resources</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://callrail.com/favicon.ico" alt="CallRail">
        <div class="program-info">
          <b>CallRail</b>
          Earn $50 per customer<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.thinkific.com/favicon.ico" alt="Thinkific">
        <div class="program-info">
          <b>Thinkific</b>
          Earn 30% recurring commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions for 1 year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>
  <hr>

  <!-- Marketing Section -->
  <div class="section">
    <div class="section-title">
    <h2 id="Marketing">  Marketing</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://callrail.com/favicon.ico" alt="CallRail">
        <div class="program-info">
          <b>CallRail</b>
          Earn $50 per customer<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.thinkific.com/favicon.ico" alt="Thinkific">
        <div class="program-info">
          <b>Thinkific</b>
          Earn 30% recurring commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions for 1 year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>
  <hr>

  <!-- Office Software Section -->
  <div class="section">
    <div class="section-title">
     <h2 id="Office Software"> Office Software</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://doola.com/favicon.ico" alt="doola">
        <div class="program-info">
          <b>doola</b>
          Earn up to $300 per referral (15% commissions)<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://practicebetter.io/favicon.ico" alt="Practice Better">
        <div class="program-info">
          <b>Practice Better</b>
          Earn $150 per referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="monday.com">
        <div class="program-info">
          <b>monday.com</b>
          Earn up to 20% commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://liquidweb.com/favicon.ico" alt="Liquid Web">
        <div class="program-info">
          <b>Liquid Web Partner+ Program</b>
          Earn up to 20% recurring commissions<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>

  <hr>

  <!-- Sales Section -->
  <div class="section">
    <div class="section-title">
     <h2 id="Sales"> Sales</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://doola.com/favicon.ico" alt="doola">
        <div class="program-info">
          <b>doola</b>
          Earn up to $300 per referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://brightdata.com/favicon.ico" alt="Bright Data">
        <div class="program-info">
          <b>Bright Data</b>
          Earn 50% revenue share, up to $1,000<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://callrail.com/favicon.ico" alt="CallRail">
        <div class="program-info">
          <b>CallRail</b>
          Earn $50 per customer<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://liquidweb.com/favicon.ico" alt="Liquid Web">
        <div class="program-info">
          <b>Liquid Web Partner+ Program</b>
          Earn up to 20% recurring commissions<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>

  <hr>

  <!-- Security Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="Security">Security</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://cloudflare.com/favicon.ico" alt="Cloudflare">
        <div class="program-info">
          <b>Cloudflare</b>
          Earn 20% recurring commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://brightdata.com/favicon.ico" alt="Bright Data">
        <div class="program-info">
          <b>Bright Data</b>
          Earn 50% revenue share, up to $1,000<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://liquidweb.com/favicon.ico" alt="Liquid Web">
        <div class="program-info">
          <b>Liquid Web Partner+ Program</b>
          Earn up to 20% recurring commissions<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://gorgias.com/favicon.ico" alt="Gorgias">
        <div class="program-info">
          <b>Gorgias</b>
          Earn 15% commission for 2 years<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>
  <hr>

  <!-- Social Media Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="Social Media">Social Media</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://looka.com/favicon.ico" alt="Looka">
        <div class="program-info">
          <b>Looka</b>
          Earn up to 35% commission on every sale<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="monday.com">
        <div class="program-info">
          <b>monday.com</b>
          Earn up to 20% commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions in the first year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>
      <hr>

  <!-- Video Editing Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="Video Editing">Video Editing</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://looka.com/favicon.ico" alt="Looka">
        <div class="program-info">
          <b>Looka</b>
          Earn up to 35% commission on every sale<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="monday.com">
        <div class="program-info">
          <b>monday.com</b>
          Earn up to 20% commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions in the first year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>
    <hr>

  <!-- Web Hosting Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="Web Hosting">Web Hosting</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://looka.com/favicon.ico" alt="Looka">
        <div class="program-info">
          <b>Looka</b>
          Earn up to 35% commission on every sale<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="monday.com">
        <div class="program-info">
          <b>monday.com</b>
          Earn up to 20% commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions in the first year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>
    <hr>

  <!-- CRM Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="CRM">CRM</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://looka.com/favicon.ico" alt="Looka">
        <div class="program-info">
          <b>Looka</b>
          Earn up to 35% commission on every sale<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="monday.com">
        <div class="program-info">
          <b>monday.com</b>
          Earn up to 20% commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions in the first year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>
    <hr>

  <!-- Analytics Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="Analytics">Analytics</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://looka.com/favicon.ico" alt="Looka">
        <div class="program-info">
          <b>Looka</b>
          Earn up to 35% commission on every sale<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="monday.com">
        <div class="program-info">
          <b>monday.com</b>
          Earn up to 20% commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions in the first year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>

      <hr>

    <!-- Events & Webinar Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="Events & Webinars">Events & Webinars</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://looka.com/favicon.ico" alt="Looka">
        <div class="program-info">
          <b>Looka</b>
          Earn up to 35% commission on every sale<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="monday.com">
        <div class="program-info">
          <b>monday.com</b>
          Earn up to 20% commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions in the first year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>
    <hr>

    <!-- Remote Work Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="Remote Work">Remote Work</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://looka.com/favicon.ico" alt="Looka">
        <div class="program-info">
          <b>Looka</b>
          Earn up to 35% commission on every sale<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="monday.com">
        <div class="program-info">
          <b>monday.com</b>
          Earn up to 20% commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions in the first year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>
    <hr>

    <!-- Cloud Storege Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="Cloud Storege">Cloud Storage</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://looka.com/favicon.ico" alt="Looka">
        <div class="program-info">
          <b>Looka</b>
          Earn up to 35% commission on every sale<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="monday.com">
        <div class="program-info">
          <b>monday.com</b>
          Earn up to 20% commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions in the first year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>
  </div>
    <hr>

    <!-- Project Management Section -->
  <div class="section">
    <div class="section-title">
      <h2 id="Project Management">Project Management</h2>
      <a class="explore-link" onclick="togglePrograms(this)">Explore all</a>
    </div>
    <div class="programs">
      <div class="program">
        <img src="https://brevo.com/favicon.ico" alt="Brevo">
        <div class="program-info">
          <b>Brevo</b>
          Earn $100 for every paying referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://looka.com/favicon.ico" alt="Looka">
        <div class="program-info">
          <b>Looka</b>
          Earn up to 35% commission on every sale<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://monday.com/assets/favicon.ico" alt="monday.com">
        <div class="program-info">
          <b>monday.com</b>
          Earn up to 20% commission<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://unbounce.com/favicon.ico" alt="Unbounce">
        <div class="program-info">
          <b>Unbounce</b>
          Earn up to 35% commissions in the first year<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.slack.com/favicon.ico" alt="Slack">
        <div class="program-info">
          <b>Slack</b>
          Earn $100 for team signups<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://zoom.us/favicon.ico" alt="Zoom">
        <div class="program-info">
          <b>Zoom</b>
          Earn 20% on paid plans<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://notion.so/favicon.ico" alt="Notion">
        <div class="program-info">
          <b>Notion</b>
          Earn recurring commissions on team upgrades<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
      </div>
      <div class="program">
        <img src="https://www.dropbox.com/favicon.ico" alt="Dropbox">
        <div class="program-info">
          <b>Dropbox</b>
          Earn up to $500 per business referral<br><br>
          <a class="explore-link" href="">&#8618 For More info</a>
        </div>
    </div>
  </div>

  </div>
</div>
<hr>

<div class="human">

    <div class="target">
    <div class="text-block">
  <h1>Slash Mark IT Solutions <br>Partners Marketplace Platform </h1>
  <p>
    Slash Mark IT Solutions empowers businesses by promoting their products and services 
    through our dedicated partner marketplace platform — designed to boost visibility, 
    reach new audiences, and drive more sales across top SaaS industries.
  </p>
  <a href="#" class="button">Explore the Slash Mark Marketplace →</a>
</div>


    <div class="logo-wall">
      <!-- Column 1 (Up) -->
      <div class="logo-column scroll-up">
        <div class="logo"><img src="https://cdn.monday.com/images/logos/logo-full-big.png" /></div>
        <div class="logo"><img src="https://mma.prnewswire.com/media/2573426/AdCreative_Logo.jpg?p=publish" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvK3fknHwEKdHKoBZtSlbpfoCgNQvN7S0QDw&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgBm0Lfa_aj5A4WV4mXy3oA6uUFT0qIodoQg&s" /></div>
        <div class="logo"><img src="https://www.vibe.co/static/auth/logo-with-text.webp" /></div>
        <div class="logo"><img src="https://static-00.iconduck.com/assets.00/todoist-icon-2048x517-9yuf3toq.png" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6hp5WqxJGjZeyG1e6DtntLO6R6ULI8bqdrw&s" /></div>
        <div class="logo"><img src="https://clarity.microsoft.com/case-studies/wp-content/uploads/2022/11/Softr-Logo-Colour-Dark.png" /></div>
      </div>

      <!-- Column 2 (Down) -->
      <div class="logo-column scroll-down">
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtAx33mS95-5OViww_RS3L3HH8XjYXysQuEw&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv4WC6x45ZwsMC3Jh9hk1MHAiH5E_-2zKrMw&s" /></div>
        <div class="logo"><img src="https://cdn.brandfetch.io/meliopayments.com/fallback/lettermark/theme/dark/h/256/w/256/icon?c=1bfwsmEH20zzEfSNTed" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdl1j6svLfk3PfGXWscHdSbcXOzzVA4Zocyg&s" /></div>
        <div class="logo"><img src="https://cdn.dribbble.com/userupload/25042636/file/still-768b0f7e5907436ae198474966097b42.png" /></div>
        <div class="logo"><img src="https://media.licdn.com/dms/image/v2/D560BAQHJz4ERFGGjgg/company-logo_200_200/company-logo_200_200/0/1719857108573/credit_repair_cloud_logo?e=2147483647&v=beta&t=nAGKmHT2ajrVO5CKwNjSls9GZJumgmMGBS51EvvP4lo" /></div>
        <div class="logo"><img src="https://media.tekpon.com/2024/02/SMTP-com-Logo.webp" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl_OPxT2TiPrtxwIjYlt1EzqoJ6mYX2LK4xw&s" /></div>
      </div>

      <!-- Column 3 (Up) -->
      <div class="logo-column scroll-up">
        <div class="logo"><img src="https://cdn.brandfetch.io/ninjaone.com/fallback/lettermark/theme/dark/h/256/w/256/icon?c=1bfwsmEH20zzEfSNTed" /></div>
        <div class="logo"><img src="https://storage.googleapis.com/swipe-insight/content/images/sources_logos/adriel.webp" /></div>
        <div class="logo"><img src="https://i.tracxn.com/tracxn-data-attachments/report/thumbnail/image/AirSlate_-_Unicorn_Business_Summary_493f56b8-a2ba-4f70-bc46-9109bb0ace69.jpg?width=350" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTohTtzzuaZ-zcaJuNG9diKuZDePwxf-z6dXQ&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpFUDeeBCelGdt8bvwyxcfdIcV1g0nDWUUew&s" /></div>
        <div class="logo"><img src="https://getlogo.net/wp-content/uploads/2019/11/brand24-logo-vector.png" /></div>
        <div class="logo"><img src="https://wp.inspiring-workplaces.com/wp-content/uploads/2024/06/Workleap__Logo-1024x300.jpg" /></div>
        <div class="logo"><img src="https://ik.imagekit.io/businesswith/tr:w-200,h-100,cm-pad_resize,dpr-2/logo/df_LogoCombo_ColorOnWhite_512px_Z4RPQuK1o.png" /></div>
      </div>

      <!-- Column 4 (Down) -->
      <div class="logo-column scroll-down">
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKkfXNfKmxgS1SyU0LAVI5u4vbKCPokBysVw&s" /></div>
        <div class="logo"><img src="https://images8.webydo.com/96/9611059/3958%2f49AAC505-09D2-0805-9F14-FF144717C644.png" /></div>
        <div class="logo"><img src="https://reply.io/wp-content/uploads/logo-2.svg" /></div>
        <div class="logo"><img src="https://logowik.com/content/uploads/images/fiverr-new3326.jpg" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw4TgrrNyViBdWyRFj5h2GJA7SppVvH_NZZQ&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7LDmA2yEGvwbr-Y-DhX-PKEzpl8462l-PLg&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPfbZrECZEu3sHvymn6m3AgbPpaRmxsxJRzw&s" /></div>
        <div class="logo"><img src="https://gl-m.linker-cdn.net/logo/company/d2e/dff/9f21e5a8978c12b02c8073cb10ab6652_t.jpg" /></div>
      </div>
       <!-- Column 5 (up) -->
       <div class="logo-column scroll-up">
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTObCl1N8knj4ilOGrnmO_Ws6Fnc4Py5Tm5lQ&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnx6CMkc3iw1B1Upx8wuYLDp8jUj6DicfQYg&s" /></div>
        <div class="logo"><img src="https://www.foxit.com/blog/wp-content/uploads/2024/02/new-foxit-logo.png" /></div>
        <div class="logo"><img src="https://brandlogos.net/wp-content/uploads/2025/03/2025_jubilee-logo_brandlogos.net_kyavy-512x512.png" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQc_93BMo22kjiONzr4I94AR3vHoobv20jLjw&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUmkhiBGNfcJEqBRKVSkjcb17Vhtqja_oDVQ&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdE2oV6f6H_r7wl_Fik0bJ71YQO9NisSTscA&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAKQcuf28JHnt19ZXtZ9p0V6AwhujgHKdTUg&s" /></div>
      </div>
       <!-- Column 6 (Down) -->
      <div class="logo-column scroll-down">
        <div class="logo"><img src="https://cdn.staticcrate.com/wp-content/uploads/2020/05/productioncrate_2022_logo_banner.jpg" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyQZ2G0is6ukZ-_Q_Ak-p9ttFFJXA85FgbVg&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTo126HEyaJQxCWlT843vgRF13xdkA0-3SXyg&s" /></div>
        <div class="logo"><img src="https://www.mobile2b.com/assets/img/mobile2b-logo-full.png" /></div>
        <div class="logo"><img src="https://media.licdn.com/dms/image/v2/D560BAQECON4EnKy0VA/company-logo_200_200/company-logo_200_200/0/1714950514726/zoek_logo?e=2147483647&v=beta&t=duhamTWb80t63WqpXilVbWMe9YdpkjmqQa0yzo8OqH4" /></div>
        <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c6/Care2_Logo_2019.svg/1200px-Care2_Logo_2019.svg.png" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfAHQEsqC4LhXZhQEtJBcBD23poPZmvDg-Iw&s" /></div>
        <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtmNYQRtK6rMHDmepN__5N4EDaYJMd1gWRAw&s" /></div>
      </div>
    </div>
  </div>

</div>

  <style>
    .formWrapper {
  width: 100%;
  max-width: 1100px;
  background: white;
  border-radius: 15px;
  min-height: 600px;
  padding: 60px 40px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0);
  margin: 40px auto; /* Center horizontally */
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* Other elements remain same */
.steps-bar {
  display: flex;
  justify-content: space-between;
  margin-bottom: 40px;
  position: relative;
  transition: opacity 0.4s;
}

.steps-bar::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  height: 4px;
  background: #ccc;
  transform: translateY(-50%);
  z-index: 0;
}

.step {
  position: relative;
  z-index: 1;
  width: 20px;
  height: 20px;
  background: #ccc;
  border-radius: 50%;
  transition: background 0.3s;
}

.step.active {
  background: black;
}

.step-label {
  position: absolute;
  bottom: 100%;
  left: 50%;
  transform: translateX(-50%) translateY(20px);
  background: white;
  padding: 4px 8px;
  font-size: 0.75rem;
  border-radius: 6px;
  color: #333;
  white-space: nowrap;
  transition: all 0.4s ease;
}

.step.active .step-label {
  opacity: 1;
  transform: translateX(-50%) translateY(-10px);
}

.step.completed .step-label {
  text-decoration: line-through;
  opacity: 0.8;
}

.form-step {
  display: none;
}
.form-step.active {
  display: block;
}

.company {
  font-weight: 300;
  margin-bottom: 30px;
  color: #555;
  text-align: center;
}

input[type="text"],
input[type="email"],
input[type="url"],
textarea {
  width: 100%;
  padding: 15px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  background: transparent;
  border-radius: 25px;
  font-size: 1rem;
  color: #333;
}

input::placeholder,
textarea::placeholder {
  color: #999;
}

.about {
  border-radius: 15px;
  height: 100px;
  resize: none;
}

.formControlNexus {
  background: rgb(39, 43, 51);
  color: white;
  padding: 12px 25px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 1rem;
}

.buttonHubArea {
  bottom: 30px;
  left: 40px;
  right: 40px;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 10px;
}

.checkbox-container {
  background: rgba(255, 255, 255);
  border-radius: 15px;
  padding: 20px;
  margin-bottom: 30px;
  border: 1px solid #ddd;
}

.checkbox-container strong {
  display: block;
  margin-bottom: 15px;
  font-weight: 400;
  color: #333;
}

.checkbox-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px 20px;
}

.checkbox-grid label {
  display: flex;
  align-items: center;
  font-size: 0.95rem;
  gap: 8px;
  cursor: pointer;
}

.error {
  color: black;
  font-size: 0.8rem;
  margin-bottom: 15px;
}

/* ✅ Responsive Media Query */
@media (max-width: 768px) {
  .formWrapper {
    padding: 30px 20px;
    margin: 20px;
    min-height: auto;
  }

  .checkbox-grid {
    grid-template-columns: 1fr;
  }

  .buttonHubArea {
    flex-direction: column;
    align-items: stretch;
  }
}
  </style>




  <form class="formWrapper" id="multiStepForm" onsubmit="submitForm(); event.preventDefault();">
    <div class="steps-bar">
      <div class="step active"><div class="step-label">Company</div></div>
      <div class="step"><div class="step-label">Contact</div></div>
      <div class="step"><div class="step-label">Interest</div></div>
      <div class="step"><div class="step-label">About</div></div>
    </div>

    <!-- Step 1 -->
    <div class="form-step active" id="step1">
      <h2 class="company">Company Information</h2>
      <input type="text" id="companyName" name="companyName" placeholder="Company Name" required>
      <div class="error" id="errCompanyName"></div>
      <input type="url" id="websiteUrl" name="websiteUrl" placeholder="Website URL" required>
      <div class="error" id="errWebsiteUrl"></div>
      <input type="text" id="companySize" name="companySize" placeholder="Company Size (1–10, 11–50, etc)" required>
      <div class="error" id="errCompanySize"></div>
      <div class="buttonHubArea" style="justify-content: flex-end;">
        <button class="formControlNexus" type="button" onclick="next()">Next Step</button>
      </div>
    </div>

    <!-- Step 2 -->
    <div class="form-step" id="step2">
      <h2 class="company">Contact Details</h2>
      <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
      <div class="error" id="errFullName"></div>
      <input type="text" id="jobTitle" name="jobTitle" placeholder="Job Title" required>
      <div class="error" id="errJobTitle"></div>
      <input type="email" id="email" name="email" placeholder="Company Email" required>
      <div class="error" id="errEmail"></div>
      <div class="buttonHubArea">
        <button class="formControlNexus" type="button" onclick="prev()">Previous</button>
        <button class="formControlNexus" type="button" onclick="next()">Next Step</button>
      </div>
    </div>

    <!-- Step 3 -->
    <div class="form-step" id="step3">
      <h2 class="company">Become a Partner!</h2>
      <div class="checkbox-container">
        <strong>What type of partnership are you interested in?</strong>
        <div class="checkbox-grid">
          <label><input type="checkbox" name="partnership" value="Affiliate"> Affiliate</label>
          <label><input type="checkbox" name="partnership" value="Reseller"> Reseller</label>
          <label><input type="checkbox" name="partnership" value="Tech/Integration"> Tech/Integration</label>
          <label><input type="checkbox" name="partnership" value="Co-Marketing"> Co-Marketing</label>
          <label><input type="checkbox" name="partnership" value="Other"> Other</label>
        </div>
      </div>
      <div class="checkbox-container">
        <strong>Preferred compensation model</strong>
        <div class="checkbox-grid">
          <label><input type="checkbox" name="preferred" value="Revenue Share"> Revenue Share</label>
          <label><input type="checkbox" name="preferred" value="Pay Per Click (PPC)"> Pay Per Click (PPC)</label>
          <label><input type="checkbox" name="preferred" value="Pay Per Lead (PPL)"> Pay Per Lead (PPL)</label>
          <label><input type="checkbox" name="preferred" value="Flat Fee"> Flat Fee</label>
          <label><input type="checkbox" name="preferred" value="Open to Discussion"> Open to Discussion</label>
        </div>
      </div>
      <div class="error" id="errCheckbox"></div>
      <div class="buttonHubArea">
        <button class="formControlNexus" type="button" onclick="prev()">Previous</button>
        <button class="formControlNexus" type="button" onclick="next()">Next Step</button>
      </div>
    </div>

    <!-- Step 4 -->
    <div class="form-step" id="step4">
      <h2 class="company">About Your Company</h2>
      <textarea class="about" id="aboutCompany" name="about" placeholder="Briefly describe your company." required></textarea>
      <div class="error" id="errAbout"></div>
      <div class="buttonHubArea">
        <button class="formControlNexus" type="button" onclick="prev()">Previous</button>
        <button class="formControlNexus" type="submit" id="submitBtn" onclick="submitForm()">Submit</button>
      </div>
    </div>

    <!-- Final Step -->
    <div class="form-step" id="step5">
      <h2 class="company">Thank you for your submission!</h2>
      <p style="text-align:center; margin-top: 20px; color: #555;">
        We appreciate your interest and will get back to you shortly.
      </p>
    </div>
  </form>

<script>
    let currentStep = 1;
    const totalSteps = 5;

    function showStep(step) {
      for (let i = 1; i <= totalSteps; i++) {
        document.getElementById(`step${i}`)?.classList.remove('active');
      }

      document.getElementById(`step${step}`)?.classList.add('active');

      const steps = document.querySelectorAll('.step');
      steps.forEach((el, idx) => {
        el.classList.remove('active', 'completed');
        if (idx < step - 1) el.classList.add('completed');
        if (idx === step - 1) el.classList.add('active');
      });
    }

    function next() {
      if (!validateStep(currentStep)) return;

      if (currentStep < totalSteps - 1) {
        currentStep++;
        showStep(currentStep);
        
      }
    }

    function prev() {
      if (currentStep > 1 && currentStep < totalSteps) {
        currentStep--;
        showStep(currentStep);
      
      }
    }

    function validateStep(step) {
      let valid = true;

      if (step === 1) {
        const name = document.getElementById('companyName');
        const url = document.getElementById('websiteUrl');
        const size = document.getElementById('companySize');

        document.getElementById('errCompanyName').textContent = !/^[A-Za-z\s]+$/.test(name.value) ? "Enter valid company name (letters only)." : "";
        document.getElementById('errWebsiteUrl').textContent = !url.value ? "Enter a valid website URL." : "";
        document.getElementById('errCompanySize').textContent = !/^[0-9\-–\s]+$/.test(size.value) ? "Enter valid size (e.g., 1–10)." : "";

        valid = !document.getElementById('errCompanyName').textContent &&
                !document.getElementById('errWebsiteUrl').textContent &&
                !document.getElementById('errCompanySize').textContent;
      }

      if (step === 2) {
        const fullName = document.getElementById('fullName');
        const jobTitle = document.getElementById('jobTitle');
        const email = document.getElementById('email');

        document.getElementById('errFullName').textContent = !/^[A-Za-z\s]+$/.test(fullName.value) ? "Only letters allowed in name." : "";
        document.getElementById('errJobTitle').textContent = !jobTitle.value ? "Job title is required." : "";
        document.getElementById('errEmail').textContent = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email.value)
          ? ""
          : "Must be a valid email.";

        valid = !document.getElementById('errFullName').textContent &&
                !document.getElementById('errJobTitle').textContent &&
                !document.getElementById('errEmail').textContent;
      }

      if (step === 3) {
        const checkboxes = document.querySelectorAll('#step3 input[type="checkbox"]');
        const checkedCount = Array.from(checkboxes).filter(chk => chk.checked).length;

        if (checkedCount < 2) {
          document.getElementById('errCheckbox').textContent = "Please select at least two options.";
          valid = false;
        } else {
          document.getElementById('errCheckbox').textContent = "";
          valid = true;
        }
      }

      if (step === 4) {
        const about = document.getElementById('aboutCompany');
        document.getElementById('errAbout').textContent = about.value.trim() ? "" : "Description required.";
        valid = !!about.value.trim();
      }

      return valid;
    }

    function submitForm() {
      if (!validateStep(4)) return;

      const formURL = "https://docs.google.com/forms/u/0/d/e/1FAIpQLSe6psWLWHIq50Psc_PhYEn5eChJtCuVk9d5BU4qChF_Spi3RQ/formResponse";

      const entryIDs = {
        companyName: "entry.1440963455",
        websiteUrl: "entry.416106869",
        companySize: "entry.495023849",
        fullName: "entry.1686262772",
        jobTitle: "entry.843256972",
        email: "entry.1708210941",
        partnership: "entry.106827514",
        preferred: "entry.359222226",
        about: "entry.2092542241"
      };

      const formData = new FormData();
      const container = document.querySelector(".formWrapper");

      formData.append(entryIDs.companyName, container.querySelector('[name="companyName"]').value);
      formData.append(entryIDs.websiteUrl, container.querySelector('[name="websiteUrl"]').value);
      formData.append(entryIDs.companySize, container.querySelector('[name="companySize"]').value);
      formData.append(entryIDs.fullName, container.querySelector('[name="fullName"]').value);
      formData.append(entryIDs.jobTitle, container.querySelector('[name="jobTitle"]').value);
      formData.append(entryIDs.email, container.querySelector('[name="email"]').value);
      formData.append(entryIDs.about, container.querySelector('[name="about"]').value);

      const partnershipValues = Array.from(container.querySelectorAll('input[name="partnership"]:checked')).map(cb => cb.value).join(', ');
      formData.append(entryIDs.partnership, partnershipValues);

      const preferredValues = Array.from(container.querySelectorAll('input[name="preferred"]:checked')).map(cb => cb.value).join(', ');
      formData.append(entryIDs.preferred, preferredValues);

      const submitBtn = document.getElementById("submitBtn");
      submitBtn.disabled = true;
      submitBtn.textContent = "Submitting...";

      fetch(formURL, {
        method: 'POST',
        mode: 'no-cors',
        body: formData
      }).then(() => {
        currentStep = totalSteps;
        showStep(currentStep);
        const form = document.getElementById("multiStepForm");
        form.reset();
        submitBtn.disabled = false;
        submitBtn.textContent = "Submit";
        document.querySelectorAll(".error").forEach(el => el.textContent = "");
       

        setTimeout(() => {
          currentStep = 1;
          showStep(currentStep);
        }, 5000);
      });
    }

    showStep(currentStep);
  </script>










<body>
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                    <h1 class="display-4">Global Partner Marketplace Powered by Slash Mark</h1>
                </div>
                <p>
                    Slash Mark Partners Marketplace Platform is your gateway to the world's leading business tools and digital solutions. 
                    Through our strategic integration with the <strong>PartnerStack network</strong>, we proudly connect with 
                    <strong>150+ international companies</strong> offering industry-leading SaaS products and services. 
                    Our platform empowers businesses, startups, and individuals to discover, connect, and grow through trusted 
                    partnerships and curated technologies—all in one place.
                </p>
                <p>
                    Whether you're looking to elevate your digital infrastructure or explore the latest in marketing, development, 
                    HR, security, or design tools—Slash Mark enables a smarter, seamless discovery experience tailored to your needs.
                </p>
                <div class="row pt-3 mx-0">
                    <div class="col-3 px-0">
                        <div class="bg-success text-center p-4">
                            <h1 class="text-white counter" data-target="158">0</h1>
                            <h6 class="text-uppercase text-white">Global<span class="d-block">Partners</span></h6>
                        </div>
                    </div>
                    <div class="col-3 px-0">
                        <div class="bg-primary text-center p-4">
                            <h1 class="text-white counter" data-target="121">0</h1>
                            <h6 class="text-uppercase text-white">Verified<span class="d-block">Tools</span></h6>
                        </div>
                    </div>
                    <div class="col-3 px-0">
                        <div class="bg-secondary text-center p-4">
                            <h1 class="text-white counter" data-target="14">0</h1>
                            <h6 class="text-uppercase text-white">Categories<span class="d-block">Covered</span></h6>
                        </div>
                    </div>
                    <div class="col-3 px-0">
    <div class="bg-warning text-center p-4">
        <h1 class="text-white">1.2M+</h1>
        <h6 class="text-uppercase text-white">Monthly<span class="d-block">Visitors</span></h6>
    </div>
</div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<script>
    // Simple counter animation
    const counters = document.querySelectorAll('.counter');
    const speed = 200; // lower is faster

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = Math.max(target / speed, 1);

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target.toLocaleString(); // Format with comma
            }
        };

        updateCount();
    });
</script>












    <!-- Feature Start -->
    <div class="container-fluid bg-image" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?</h6>
                        <h1 class="display-4">Why You Should Start Learning with Us?</h1>
                    </div>
                    <p class="mb-4 pb-2">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet.</p>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Skilled Instructors</h4>
                            <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>International Certificate</h4>
                            <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-book-reader text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Online Classes</h4>
                            <p class="m-0">Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->


    <!-- Courses Start -->
    <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Courses</h6>
                    <h1 class="display-4">Checkout New Releases Of Our Courses</h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel courses-carousel">
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-1.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="detail.html">Course Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-2.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="detail.html">Course Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-3.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="detail.html">Course Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-4.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="detail.html">Course Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-5.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="detail.html">Course Detail</a>
                    </div>
                </div>
            </div>
            <div class="courses-item position-relative">
                <img class="img-fluid" src="img/courses-6.jpg" alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">Web design & development courses for beginners</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="detail.html">Course Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center bg-image mx-0 mb-5">
            <div class="col-lg-6 py-5">
                <div class="bg-white p-5 my-5">
                    <h1 class="text-center mb-4">30% Off For New Students</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="padding: 30px 20px;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="padding: 30px 20px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-light border-0 px-3" style="height: 60px;">
                                        <option selected>Select A courses</option>
                                        <option value="1">courses 1</option>
                                        <option value="2">courses 1</option>
                                        <option value="3">courses 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 60px;">Sign Up Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructors</h6>
                <h1 class="display-4">Meet Our Instructors</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Instructor Name</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonial</h6>
                        <h1 class="display-4">What Say Our Students</h1>
                    </div>
                    <p class="m-0">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea amet diam ipsum at amet. Erat sed stet eos ipsum diam</p>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-2.jpg" alt="">
                                <div>
                                    <h5>Student Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-1.jpg" alt="">
                                <div>
                                    <h5>Student Name</h5>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Our Address</h4>
                            <p class="m-0">2nd Floor, Ramnagar Road, Karim Nagar, Telangana, India, 505001</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-phone-alt text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>WhatsApp Us</h4>
                            <p class="m-0">+91 8500825294</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-envelope text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Email Us</h4>
                            <p class="m-0">info@slashmark.in</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                    <h1 class="display-4">Send Us A Message</h1>
                </div>
                <div class="contact-form">
  <form action="" method="POST" target="_blank" onsubmit="alert('Thanks for contacting us!');">
    <div class="row">
      <div class="col-6 form-group">
        <input name="entry.1958734034" type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name" required>
      </div>
      <div class="col-6 form-group">
        <input name="entry.36324944" type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Email" required>
      </div>
    </div>
    <div class="form-group">
      <input name="entry.1315679946" type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Subject" required>
    </div>
    <div class="form-group">
      <textarea name="entry.299805068" class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message" required></textarea>
    </div>
    <div>
      <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
    </div>
  </form>
</div>

            </div>
        </div>
    </div>
</div>
<!-- Contact End -->






    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 100px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.php" class="navbar-brand">
  <h1 class="mt-n2 text-uppercase text-white d-flex align-items-center">Slash Mark <br> </h1>

                    </a>
                   <div class="d-flex align-items-center">
  <img src="img/BGLOGO.png" alt="Astronaut Logo" style="height: 50px; width: auto; margin-right: 15px;">
  <div>
    <p class="m-0 text-white">Turning Ideas into Reality</p>
    <p class="m-0 text-white">We love to Build. Ask for IT and have IT.</p>
  </div>
</div>

                </div>
                
                
                <div id="newsletter" class="col-md-6 mb-5">
  <h3 class="text-white mb-4">Newsletter</h3>
  <form id="newsletter-form" action="newsletter.php" method="POST">
    <div class="input-group">
      <input type="email" name="email" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address" required>
      <div class="input-group-append">
<button type="submit" class="btn btn-primary px-4">Subscribe</button>
      </div>
    </div>
  </form>
  <?php if (isset($_GET['success'])): ?>
    <p class="text-success mt-2">Successfully subscribed!</p>
  <?php elseif (isset($_GET['error'])): ?>
    <p class="text-danger mt-2">Error saving your email.</p>
  <?php endif; ?>
</div>

                
                
            </div>
            
            
            
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Karimnagar,Telangana, India, 505001.</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+91 8500825294</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@slashmark.in</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="https://www.linkedin.com/company/slash-mark/"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="https://www.instagram.com/official.slashmark/"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
               <div class="col-md-4 mb-5">
    <h3 class="text-white mb-4">Our Partners Marketplace</h3>
    <div class="d-flex flex-column justify-content-start">
        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Software Development Companies</a>
        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Digital Marketing Agencies</a>
        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>UI/UX Design Studios</a>
        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>IT Consulting Firms</a>
        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Training & Certification Providers</a>
    </div>
</div>

                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms & Condition</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help & Support</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">Slash Mark IT Solution (OPC) Pvt Ltd</a>. <BR> All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="https://htmlcodex.com">Slash Mark Team</a> Distributed by <a href="https://slashmark.in" target="_blank">SMIT</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>