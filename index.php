<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aliff's Portfolio</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <!-- Font Awesome for Icons -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#home">Aliff's Portfolio</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header Section -->
  <header id="home" class="home">
    <div class="container">
      <!-- Image Container -->
      <div class="row align-items-center flex-column-reverse flex-md-row">
        <!-- Text Section -->
        <div class="col-md-6 text-container">
          <h1>Hi, I'm Muhammad Aliff I'man</h1>
          <p>
            A Web Developer passionate about creating stunning web
            experiences.
          </p>
          <a href="#about" class="btn">Explore More</a>
        </div>

        <!-- Image Section -->
        <div class="col-md-6 image-container text-center mb-4 mb-md-0">
          <img src="/images/picture.png" alt="Muhammad Aliff" />
        </div>
      </div>
    </div>
  </header>

  <!-- About Me Section -->
  <section id="about" class="about">
    <div class="container">
      <!-- Centered Section Title -->
      <h2 class="section-title">About Me</h2>

      <!-- Cards Container -->
      <div
        class="cards-container d-flex justify-content-between flex-wrap align-items-center gap-5">
        <!-- Biodata Card -->
        <div class="bio-card card">
          <div class="card-body">
            <h3>Details</h3>
            <p>
              I am a final-year Computer Science student specializing in
              Software Engineering. I have a passion for front-end and web
              development and enjoy crafting responsive, user-friendly web
              experiences.
            </p>
            <p>
              With a keen eye for detail, I aim to create aesthetically
              pleasing designs powered by efficient and scalable code.
            </p>
          </div>
        </div>

        <!-- Skills Card -->
        <div class="skills-card card">
          <div class="card-body">
            <h3>Skills</h3>
            <div
              class="skills d-flex flex-wrap justify-content-center gap-4 mt-4">
              <div class="skill-icon">
                <i class="fab fa-html5" style="color: #e34c26;"></i>
              </div>
              <div class="skill-icon">
                <i class="fab fa-css3-alt" style="color: #264de4;"></i>
              </div>
              <div class="skill-icon">
                <i class="fab fa-js-square" style="color: #f7df1e;"></i>
              </div>
              <div class="skill-icon">
                <i class="fab fa-laravel" style="color: #ff2d20;"></i>
              </div>
              <div class="skill-icon">
                <i class="fab fa-react" style="color: #61dafb;"></i>
              </div>
              <div class="skill-icon">
                <img
                  src="https://img.icons8.com/color/48/000000/mysql-logo.png"
                  alt="MySQL Icon"
                  class="icon" />
              </div>
            </div>
          </div>
        </div>

        <!-- Tools Card -->
        <div class="tools-card card">
          <div class="card-body">
            <h3>Tools</h3>
            <div
              class="tools d-flex flex-wrap justify-content-center gap-4 mt-4">
              <div class="tool-icon">
                <img
                  src="https://img.icons8.com/color/48/000000/android-studio--v3.png"
                  alt="Android Studio"
                  class="icon" />
              </div>
              <div class="tool-icon">
                <img
                  src="https://img.icons8.com/color/48/000000/github--v3.png"
                  alt="GitHub"
                  class="icon" />
              </div>
              <div class="tool-icon">
                <img
                  src="https://img.icons8.com/color/48/000000/visual-studio-code-2019.png"
                  alt="VS Code"
                  class="icon" />
              </div>
              <div class="tool-icon">
                <img
                  src="https://img.icons8.com/color/48/000000/firebase.png"
                  alt="Firebase"
                  class="icon" />
              </div>
              <div class="tool-icon">
                <img
                  src="https://assets.streamlinehq.com/image/private/w_300,h_300,ar_1/f_auto/v1/icons/logos/hostinger-fmuhvgr37dia4fht66h4kb.png/hostinger-qlefdkghljsdttvj5z5nr.png?_a=DAJFJtWIZAAC"
                  alt="Hostinger"
                  class="icon" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects">
    <div class="container">
      <h2>My Projects</h2>

      <!-- Main Grid for Sections -->
      <div class="projects-grid">
        <!-- Undeployed Section -->
        <div class="undeployed-projects">
          <h3>Undeployed Projects</h3>
          <div class="project-grid">
            <div class="project-card">
              <h4>E-Commerce Website</h4>
              <p>
                Built using Laravel with Stripe integration. Responsive and
                optimized for performance.
              </p>
            </div>
            <div class="project-card">
              <h4>Mobile App</h4>
              <p>
                Developed with FlutterFlow and Firebase for real-time data
                updates and user engagement.
              </p>
            </div>
            <div class="project-card">
              <h4>Portfolio Website</h4>
              <p>
                Personal project showcasing my skills, projects, and contact
                details in a dark, ambient theme.
              </p>
            </div>
          </div>
        </div>

        <!-- Deployed Section -->
        <div class="deployed-projects">
          <h3>Deployed Projects</h3>
          <div class="project-grid">
            <!-- Deployed Project 1 -->
            <div class="deployed-card">
              <a href="https://projectnest.io/" target="_blank">
                <div class="frame">
                  <img
                    src="/images/beverageStore.png"
                    alt="Website 1 Preview" />
                </div>
                <h4>WordPress Website 1</h4>
              </a>
              <p>A WordPress website for showcasing products.</p>
            </div>

            <!-- Deployed Project 2 -->
            <div class="deployed-card">
              <a
                href="http://group-portfolio.projectnest.io/"
                target="_blank">
                <div class="frame">
                  <img
                    src="/images/Project.png"
                    alt="Assignment Website Preview" />
                </div>
                <h4>Assignment Website</h4>
              </a>
              <p>
                An assignment project showcasing website development skills.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact">
    <div class="container text-center">
      <h2>Contact Me</h2>
      <p>
        I'm available for internships and collaborations. Feel free to reach
        out!
      </p>
      <form id="contactForm" enctype="multipart/form-data">
        <div class="row g-3 justify-content-center">
          <div class="col-md-6">
            <input
              type="text"
              id="name"
              name="name"
              class="form-control"
              placeholder="Your Name"
              required />
          </div>
          <div class="col-md-6">
            <input
              type="email"
              id="email"
              name="email"
              class="form-control"
              placeholder="Your Email"
              required />
          </div>
          <div class="col-12">
            <textarea
              id="message"
              name="message"
              class="form-control"
              placeholder="Your Message"
              rows="4"
              required></textarea>
          </div>
          <div class="col-12">
            <input
              type="file"
              id="attachment"
              name="attachment"
              class="form-control"
              accept=".pdf,.doc,.docx,.png,.jpg,.jpeg,.zip" />
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary" id="submitButton">
              <span id="spinner" class="spinner-border spinner-border-sm" style="display: none;" role="status" aria-hidden="true"></span>
              <span id="buttonText">Send Message</span>
            </button>
          </div>
        </div>
      </form>

      <!-- Success Animation -->
      <div id="successAnimation" style="display: none; text-align: center;">
        <div style="font-size: 50px; color: #00ffd0;">&#10004;</div>
        <p style="font-size: 18px; color: #00ffd0;">Message Sent Successfully!</p>
      </div>


      <!-- Success Animation -->
      <div id="successAnimation" style="display: none; text-align: center;">
        <div style="font-size: 50px; color: #00ffd0;">&#10004;</div>
        <p style="font-size: 18px; color: #00ffd0;">Message Sent Successfully!</p>
      </div>


      <p id="formResponse" style="color: #00ffd0; text-align: center;"></p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Muhammad Aliff. All rights reserved.</p>
  </footer>

  <script>
    document.getElementById("contactForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const form = document.getElementById("contactForm");
      const formData = new FormData(form);

      // Get button elements
      const submitButton = document.getElementById("submitButton");
      const spinner = document.getElementById("spinner");
      const buttonText = document.getElementById("buttonText");

      // Disable the button and show the spinner
      submitButton.disabled = true;
      spinner.style.display = "inline-block";
      buttonText.textContent = "Sending...";

      fetch("send_email.php", {
          method: "POST",
          body: formData,
        })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            // Hide the form and show the success animation
            form.style.display = "none";
            const successAnimation = document.getElementById("successAnimation");
            successAnimation.style.display = "block";

            // Navigate back to the main page after 3 seconds
            setTimeout(() => {
              window.location.href = "index.php#contact"; // Replace with your homepage
            }, 3000);
          } else {
            alert("Failed to send message: " + data.message);
          }
        })
        .catch((error) => {
          alert("An error occurred: " + error.message);
        })
        .finally(() => {
          // Re-enable the button and hide the spinner
          submitButton.disabled = false;
          spinner.style.display = "none";
          buttonText.textContent = "Send Message";
        });
    });
  </script>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>