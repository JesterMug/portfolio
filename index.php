<?php
// Simple PHP script for contact form
$message_sent = false;
$error_message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_form'])) {
  // Basic validation
  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    $userName = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $userEmail = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $userMessage = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
      // In a real application, you would use a library like PHPMailer to send email.
      // The mail() function is often disabled on shared hosting.
      $to = "your_email@example.com"; // <-- CHANGE THIS TO YOUR EMAIL ADDRESS
      $subject = "New Contact from Portfolio - $userName";
      $body = "Name: $userName\nEmail: $userEmail\n\nMessage:\n$userMessage";
      $headers = "From: " . $userEmail;

      // mail($to, $subject, $body, $headers);
      // For demonstration, we'll just set the success flag.
      // Uncomment the line above to attempt sending an email.
      $message_sent = true;
    } else {
      $error_message = 'Please enter a valid email address.';
    }
  } else {
    $error_message = 'Please fill out all fields.';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jagannath | Software Developer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="background-shapes"></div>

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Jagannath.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <section id="home" class="hero-section text-center">
    <h1 class="display-3 fw-bold">Jagannath</h1>
    <p class="lead">Software Developer & Innovative Technologist</p>
    <a href="#projects" class="btn btn-primary btn-lg mt-3">View My Work</a>
  </section>

  <section id="about" class="content-section">
    <div class="section-header">
      <h2>About Me</h2>
      <div class="header-line"></div>
    </div>
    <div class="glass-card p-4 p-md-5">
      <p>
        A dedicated and results-oriented Software Developer with a background in IT operations and a passion for creating efficient, scalable, and user-friendly applications. In my previous role as an IT Technician at Eureka Homes Properties, I managed comprehensive IT operations, improving business efficiency by 30% through the optimisation of Microsoft and G Suite tools. I also led security initiatives that strengthened business security by 4x. My academic journey, including a Bachelor of IT from Monash University, has equipped me with a strong foundation in software development, project management, and cutting-edge technologies. I thrive on solving complex problems and turning innovative ideas into reality.
      </p>
    </div>
  </section>

  <section id="skills" class="content-section">
    <div class="section-header">
      <h2>Skills</h2>
      <div class="header-line"></div>
    </div>
    <div class="glass-card p-4 p-md-5">
      <div class="row gy-4">
        <div class="col-md-6">
          <h5><i class="fas fa-code me-2"></i>Programming</h5>
          <p class="skills-list">
            <span>Python</span> <span>Java</span> <span>C#</span> <span>Swift</span> <span>Kotlin</span> <span>PHP</span> <span>HTML</span> <span>CSS</span> <span>JavaScript</span> <span>CakePHP</span>
          </p>
        </div>
        <div class="col-md-6">
          <h5><i class="fas fa-database me-2"></i>Databases & Tools</h5>
          <p class="skills-list">
            <span>MySQL</span> <span>Oracle DB</span> <span>SQL</span> <span>PhpMyAdmin</span> <span>Git</span> <span>GitHub</span> <span>Xcode</span>
          </p>
        </div>
        <div class="col-md-6">
          <h5><i class="fas fa-gamepad me-2"></i>Game Engines</h5>
          <p class="skills-list">
            <span>Unity</span> <span>Unreal Engine</span> <span>Blender</span>
          </p>
        </div>
        <div class="col-md-6">
          <h5><i class="fas fa-desktop me-2"></i>IT & Systems</h5>
          <p class="skills-list">
            <span>IT Support</span> <span>MDM</span> <span>Cybersecurity</span> <span>Windows</span> <span>macOS</span> <span>Google Workspace</span> <span>Microsoft Office</span>
          </p>
        </div>
        <div class="col-md-6">
          <h5><i class="fas fa-drafting-compass me-2"></i>Design & UX</h5>
          <p class="skills-list">
            <span>Figma</span> <span>Adobe Photoshop</span> <span>UI/UX Design</span> <span>Game Prototyping</span>
          </p>
        </div>
        <div class="col-md-6">
          <h5><i class="fas fa-sitemap me-2"></i>Methodologies</h5>
          <p class="skills-list">
            <span>Agile</span> <span>OOP</span> <span>Project Management</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="projects" class="content-section">
    <div class="section-header">
      <h2>Projects</h2>
      <div class="header-line"></div>
    </div>
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6">
        <div class="project-card">
          <div class="card-body">
            <h5 class="card-title">A Quack in the Case</h5>
            <p class="card-tech">Unity 3D, C#, Blender</p>
            <p class="card-text">Led programming and project management for this video game, achieving 75% faster completion than peer teams and improving code efficiency by 2x.</p>
            <div class="project-links">
              <a href="https://github.com/JesterMug/quack-in-the-case" target="_blank" class="btn btn-outline-light"><i class="fab fa-github"></i> GitHub</a>
              <a href="https://leanpointer.itch.io/quack-in-the-case" target="_blank" class="btn btn-outline-light"><i class="fab fa-itch-io"></i> Itch.io</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="project-card">
          <div class="card-body">
            <h5 class="card-title">BrewHub</h5>
            <p class="card-tech">HTML, CSS, PHP, JS, CakePHP, SQL</p>
            <p class="card-text">Led programming and project management to achieve iteration 2 goals 2x faster, earning a 100% client satisfaction rating.</p>
            <div class="project-links">
              <a href="https://github.com/JesterMug/brewhub-web" target="_blank" class="btn btn-outline-light"><i class="fab fa-github"></i> GitHub</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="project-card">
          <div class="card-body">
            <h5 class="card-title">Skill Tree</h5>
            <p class="card-tech">Swift, Xcode, Figma</p>
            <p class="card-text">A gamified fitness app concept. Planned and designed an interactive prototype using Figma, with ongoing development.</p>
            <div class="project-links">
              <a href="https://github.com/JesterMug/skill-tree" target="_blank" class="btn btn-outline-light"><i class="fab fa-github"></i> GitHub</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="project-card">
          <div class="card-body">
            <h5 class="card-title">Intelligent AR Glasses</h5>
            <p class="card-tech">ESP-32, Raspberry Pi, Local LLM</p>
            <p class="card-text">Planned and programmed AI-enabled smart glasses with an OLED display, engineered with ESP32 and Raspberry Pi.</p>
            <div class="project-links">
              <a href="#" class="btn btn-outline-light disabled"><i class="fas fa-hourglass-start"></i> Repo Coming Soon</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="project-card">
          <div class="card-body">
            <h5 class="card-title">Little Chef</h5>
            <p class="card-tech">Figma, UI/UX Design</p>
            <p class="card-text">Led a team of 4 to plan, design, and implement an interactive mobile prototype, applying industry-standard usability guidelines.</p>
            <div class="project-links">
              <a href="#" class="btn btn-outline-light disabled"><i class="fas fa-pen-ruler"></i> View Design</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="project-card">
          <div class="card-body">
            <h5 class="card-title">Smart Walking Stick</h5>
            <p class="card-tech">Arduino, CAD</p>
            <p class="card-text">Planned and programmed an obstacle-detecting walking stick, engineered with an Arduino and ultrasonic sensors.</p>
            <div class="project-links">
              <a href="#" class="btn btn-outline-light disabled"><i class="fas fa-hourglass-start"></i> Repo Coming Soon</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="content-section">
    <div class="section-header">
      <h2>Get In Touch</h2>
      <div class="header-line"></div>
    </div>
    <div class="glass-card p-4 p-md-5">
      <form action="index.php#contact" method="POST">
        <input type="hidden" name="contact_form">
        <?php if ($message_sent): ?>
          <div class="alert alert-success" role="alert">
            Thank you for your message! I'll get back to you soon.
          </div>
        <?php elseif ($error_message): ?>
          <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($error_message); ?>
          </div>
        <?php endif; ?>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send Message</button>
      </form>
    </div>
  </section>

</main>

<footer class="text-center py-4">
  <div class="container">
    <p class="mb-0">&copy; <?php echo date("Y"); ?> Jagannath. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
