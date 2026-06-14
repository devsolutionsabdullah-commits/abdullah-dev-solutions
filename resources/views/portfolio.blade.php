<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Abdullah Dev Solutions — Hafiz Abdullah | Web Developer & AI Specialist</title>
<meta name="description" content="Premium web development, Laravel, WordPress and AI chatbot integration by Hafiz Abdullah from Lahore, Pakistan." />

<!-- SEO / Social Sharing Previews (Open Graph) -->
<meta property="og:type" content="website" />
<meta property="og:title" content="Abdullah Dev Solutions — Web Developer & AI Integration Specialist" />
<meta property="og:description" content="Hafiz Abdullah builds modern websites, AI chatbots, and business systems that help brands grow online and convert visitors into customers." />
<meta property="og:image" content="{{ asset('images/avatar.jpg') }}" />
<meta property="og:url" content="https://abdullahdevsolutions.com" />

<!-- Twitter Card -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:title" content="Abdullah Dev Solutions — Web Developer & AI Integration Specialist" />
<meta property="twitter:description" content="Hafiz Abdullah builds modern websites, AI chatbots, and business systems that help brands grow online and convert visitors into customers." />
<meta property="twitter:image" content="{{ asset('images/avatar.jpg') }}" />

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('images/avatar.jpg') }}" />

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Our CSS Files -->
<link rel="stylesheet" href="{{ asset('css/variables.css') }}">
<link rel="stylesheet" href="{{ asset('css/base.css') }}">
<link rel="stylesheet" href="{{ asset('css/components.css') }}">
<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body data-theme="dark">

<!-- ===== NAVBAR ===== -->
<nav class="navbar" id="navbar">
  <div class="container nav-inner">
    <a href="#home" class="logo">
      <span class="tag">AD</span>
      Abdullah<span class="grad-text">.dev</span>
    </a>
    <div class="nav-links" id="navLinks">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#process">Process</a>
      <a href="#contact">Contact</a>
    </div>
    <div class="nav-actions">
      <div class="theme-toggle" id="themeToggle" role="button" aria-label="Toggle dark/light mode" tabindex="0">
        <i class="fa-solid fa-moon"></i>
        <i class="fa-solid fa-sun"></i>
      </div>
      <a href="#contact" class="btn btn-primary nav-cta">Hire Me</a>
      <div class="nav-toggle" id="navToggle" role="button" aria-label="Toggle Navigation Menu" aria-expanded="false" tabindex="0"><i class="fa-solid fa-bars"></i></div>
    </div>
  </div>
</nav>

<!-- ===== HERO ===== -->
<section class="hero" id="home">
  <div class="hero-bg-glow"></div>
  <div class="container hero-grid">

    <div class="hero-content reveal in">
      <div class="hero-kicker">
        <span class="dot"></span>
        Available for freelance projects · Lahore, PK
      </div>
      <h1>Hi, I'm <span class="grad-text">Hafiz Abdullah</span><br><span class="text-foreground/90">Web Developer &</span> <span class="grad-text animate-gradient-text">AI Solutions Expert</span></h1>
      <p class="lead">I build modern websites, AI chatbots, and business systems that help brands grow online and convert visitors into customers.</p>
      <div class="hero-cta">
        <a href="#contact" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Start a Project</a>
        <a href="#projects" class="btn btn-ghost"><i class="fa-solid fa-folder-open"></i> View Work</a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat">
          <div class="num" data-count="60">0</div>
          <div class="label">Projects Completed</div>
        </div>
        <div class="hero-stat">
          <div class="num" data-count="45">0</div>
          <div class="label">Happy Clients</div>
        </div>
        <div class="hero-stat">
          <div class="num" data-count="4">0</div>
          <div class="label">Years Experience</div>
        </div>
      </div>
    </div>

    <div class="hero-visual reveal reveal-delay-2 in">
      <div class="hero-profile-card">
        <div class="card-glow"></div>
        <div class="card-inner">
          <div class="avatar-wrapper">
            <div class="avatar-glow"></div>
            <img src="{{ asset('images/avatar.jpg') }}" alt="Hafiz Abdullah, Web Developer & AI Integration Specialist" class="avatar-img">
          </div>
          <div class="profile-info">
            <h3>Hafiz Abdullah</h3>
            <p>Founder, Abdullah Dev Solutions</p>
            <div class="profile-tags">
              <span>Laravel</span>
              <span>WordPress</span>
              <span>AI Specialist</span>
            </div>
          </div>
        </div>
        <div class="float-badge b-fast"><span class="badge-icon">⚡</span> Fast Sites</div>
        <div class="float-badge b-ai"><span class="badge-icon">🤖</span> AI Ready</div>
      </div>
    </div>

  </div>
</section>

<!-- ===== TICKER ===== -->
<div class="ticker-wrap">
  <div class="ticker">
    <span><i class="fa-brands fa-laravel"></i> Laravel & PHP</span>
    <span><i class="fa-brands fa-shopify"></i> Shopify Stores</span>
    <span><i class="fa-brands fa-wordpress"></i> WordPress Sites</span>
    <span><i class="fa-solid fa-cart-shopping"></i> E-commerce</span>
    <span><i class="fa-solid fa-robot"></i> AI Chatbots</span>
    <span><i class="fa-solid fa-chart-line"></i> Admin Dashboards</span>
    <span><i class="fa-solid fa-mobile-screen"></i> Responsive Design</span>
    <span><i class="fa-solid fa-plug"></i> API Integration</span>
    <!-- duplicate for infinite scroll -->
    <span><i class="fa-brands fa-laravel"></i> Laravel & PHP</span>
    <span><i class="fa-brands fa-shopify"></i> Shopify Stores</span>
    <span><i class="fa-brands fa-wordpress"></i> WordPress Sites</span>
    <span><i class="fa-solid fa-cart-shopping"></i> E-commerce</span>
    <span><i class="fa-solid fa-robot"></i> AI Chatbots</span>
    <span><i class="fa-solid fa-chart-line"></i> Admin Dashboards</span>
    <span><i class="fa-solid fa-mobile-screen"></i> Responsive Design</span>
    <span><i class="fa-solid fa-plug"></i> API Integration</span>
  </div>
</div>

<!-- ===== ABOUT ===== -->
<section class="about" id="about">
  <div class="container about-grid">

    <div class="about-visual reveal">
      <div class="ring r1"></div>
      <div class="ring r2"></div>
      <div class="avatar-core">
        <img src="{{ asset('images/avatar.jpg') }}" alt="Abdullah Abid - Full-Stack Developer">
      </div>
      <div class="float-badge b1"><i class="fa-solid fa-code"></i> Clean Code</div>
      <div class="float-badge b2"><i class="fa-solid fa-bolt"></i> Fast Delivery</div>
    </div>

    <div class="about-content reveal reveal-delay-1">
      <div class="eyebrow">About Me</div>
      <h2 class="section-title">Crafting <span class="grad-text">premium digital experiences</span></h2>
      <p>I am a passionate web developer from Pakistan specializing in modern websites, Laravel, WordPress, and AI-powered chatbot integration. I help founders, agencies and small businesses ship sites that look luxurious, load instantly, and turn visitors into customers.</p>
      <p>I handle the entire lifecycle of web systems—from architecture and database design to modern visual frontends and custom AI capabilities. Let's work together to build something exceptional.</p>
      <blockquote class="quote">"Good design gets attention. Good code keeps it running."</blockquote>
      <div class="about-meta">
        <div><b>Location</b>Johar Town, J-Block, Lahore</div>
        <div><b>Brand</b>Abdullah Dev Solutions</div>
        <div><b>Stack</b>Laravel · WordPress · JS · PHP</div>
        <div><b>Availability</b>Freelance & Remote Worldwide</div>
      </div>
    </div>

  </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="services" id="services">
  <div class="container">
    <div class="section-head reveal">
      <div class="eyebrow">What I Offer</div>
      <h2 class="section-title">Services built to grow <span class="grad-text">your business online</span></h2>
      <p class="section-sub">End-to-end web development services covering everything from your first landing page to a fully custom application with its own admin panel.</p>
    </div>
    <div class="services-grid">
      <div class="service-card reveal"><div class="index">01</div><div class="icon"><i class="fa-solid fa-globe"></i></div><h3>Business Website Development</h3><p>Professional, responsive websites that present your brand with credibility and drive enquiries.</p></div>
      <div class="service-card reveal reveal-delay-1"><div class="index">02</div><div class="icon"><i class="fa-solid fa-cart-shopping"></i></div><h3>E-commerce Websites</h3><p>Custom online stores with secure checkout, product management and a smooth shopping experience.</p></div>
      <div class="service-card reveal reveal-delay-2"><div class="index">03</div><div class="icon"><i class="fa-brands fa-shopify"></i></div><h3>Shopify Store Setup</h3><p>Complete Shopify store setup, theme customization and product configuration ready to sell.</p></div>
      <div class="service-card reveal"><div class="index">04</div><div class="icon"><i class="fa-brands fa-wordpress"></i></div><h3>WordPress Development</h3><p>Custom WordPress builds with clean themes, plugins and easy content management.</p></div>
      <div class="service-card reveal reveal-delay-1"><div class="index">05</div><div class="icon"><i class="fa-brands fa-laravel"></i></div><h3>Custom Web Apps (Laravel/PHP)</h3><p>Tailored web applications built on Laravel & PHP for unique business workflows and logic.</p></div>
      <div class="service-card reveal reveal-delay-2"><div class="index">06</div><div class="icon"><i class="fa-solid fa-gauge-high"></i></div><h3>Admin Dashboards</h3><p>Secure, intuitive dashboards to manage users, orders, content and analytics in one place.</p></div>
      <div class="service-card reveal"><div class="index">07</div><div class="icon"><i class="fa-solid fa-id-card"></i></div><h3>Portfolio Websites</h3><p>Personal and professional portfolios designed to showcase your work and attract opportunities.</p></div>
      <div class="service-card reveal reveal-delay-1"><div class="index">08</div><div class="icon"><i class="fa-solid fa-robot"></i></div><h3>AI Chatbot Integration</h3><p>Smart AI chatbots integrated into your website to answer queries and capture leads 24/7.</p></div>
      <div class="service-card reveal reveal-delay-2"><div class="index">09</div><div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><h3>Maintenance & Bug Fixing</h3><p>Ongoing website maintenance, updates, performance fixes and bug resolution support.</p></div>
    </div>
  </div>
</section>

<!-- ===== SKILLS ===== -->
<section class="skills" id="skills">
  <div class="container skills-grid">

    <div class="skills-left reveal">
      <div class="eyebrow">Technical Skills</div>
      <h2 class="section-title">Tools I use to <span class="grad-text">ship quality work</span></h2>
      <p class="section-sub">A focused stack covering front-end, back-end, databases and integrations — chosen for speed, reliability and maintainability.</p>
      <div class="skill-bars">
        <div class="skill-row"><div class="top"><span>HTML, CSS & JavaScript</span><span class="pct">95%</span></div><div class="skill-track"><div class="skill-fill" data-width="95"></div></div></div>
        <div class="skill-row"><div class="top"><span>PHP & Laravel</span><span class="pct">92%</span></div><div class="skill-track"><div class="skill-fill" data-width="92"></div></div></div>
        <div class="skill-row"><div class="top"><span>Tailwind CSS & Bootstrap</span><span class="pct">90%</span></div><div class="skill-track"><div class="skill-fill" data-width="90"></div></div></div>
        <div class="skill-row"><div class="top"><span>MySQL Database</span><span class="pct">88%</span></div><div class="skill-track"><div class="skill-fill" data-width="88"></div></div></div>
        <div class="skill-row"><div class="top"><span>WordPress Development</span><span class="pct">85%</span></div><div class="skill-track"><div class="skill-fill" data-width="85"></div></div></div>
        <div class="skill-row"><div class="top"><span>API Integration</span><span class="pct">87%</span></div><div class="skill-track"><div class="skill-fill" data-width="87"></div></div></div>
        <div class="skill-row"><div class="top"><span>AI / Chatbot Integration</span><span class="pct">80%</span></div><div class="skill-track"><div class="skill-fill" data-width="80"></div></div></div>
      </div>
    </div>

    <div class="skills-right reveal reveal-delay-2">
      <div class="icon-cloud">
        <div class="icon-tile"><i class="fa-brands fa-html5"></i><span>HTML5</span></div>
        <div class="icon-tile"><i class="fa-brands fa-css3-alt"></i><span>CSS3</span></div>
        <div class="icon-tile"><i class="fa-brands fa-js"></i><span>JavaScript</span></div>
        <div class="icon-tile"><i class="fa-brands fa-bootstrap"></i><span>Bootstrap</span></div>
        <div class="icon-tile"><i class="fa-solid fa-wind"></i><span>Tailwind</span></div>
        <div class="icon-tile"><i class="fa-brands fa-php"></i><span>PHP</span></div>
        <div class="icon-tile"><i class="fa-brands fa-laravel"></i><span>Laravel</span></div>
        <div class="icon-tile"><i class="fa-solid fa-database"></i><span>MySQL</span></div>
        <div class="icon-tile"><i class="fa-brands fa-wordpress"></i><span>WordPress</span></div>
        <div class="icon-tile"><i class="fa-solid fa-plug"></i><span>API</span></div>
        <div class="icon-tile"><i class="fa-solid fa-mobile-screen"></i><span>Responsive</span></div>
        <div class="icon-tile"><i class="fa-solid fa-robot"></i><span>AI Tools</span></div>
      </div>
    </div>

  </div>
</section>

<!-- ===== PROJECTS ===== -->
<section class="projects" id="projects">
  <div class="container">
    <div class="section-head reveal">
      <div class="eyebrow">Selected Work</div>
      <h2 class="section-title">Projects that <span class="grad-text">deliver results</span></h2>
      <p class="section-sub">A snapshot of recent work across business websites, online stores and custom platforms.</p>
    </div>
    <div class="filter-bar reveal">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="business">Business</button>
      <button class="filter-btn" data-filter="ecommerce">E-commerce</button>
      <button class="filter-btn" data-filter="laravel">Laravel App</button>
      <button class="filter-btn" data-filter="wordpress">WordPress</button>
    </div>
    <div class="projects-grid" id="projectsGrid">

      <a href="https://wa.me/923706235635?text=Hi%20Abdullah,%20I%20am%20interested%20in%20building%20a%20Business%20Website%20similar%20to%20Horizon%20Consulting%20Group!" target="_blank" class="project-card reveal" data-cat="business">
        <div class="project-thumb" style="--glow:#3fd0ff">
          <div class="glow"></div>
          <img src="{{ asset('images/projects/horizon.png') }}" alt="Horizon Consulting Group" class="project-img">
          <div class="project-overlay">
            <span class="overlay-btn"><i class="fa-brands fa-whatsapp"></i> Inquiry Detail</span>
          </div>
        </div>
        <div class="project-info">
          <span class="tag">Business Website</span>
          <h3>Horizon Consulting Group</h3>
          <p>Corporate site with service pages, lead forms and CMS-driven blog.</p>
          <div class="project-stack"><span>Laravel</span><span>Tailwind</span><span>MySQL</span></div>
        </div>
      </a>

      <a href="https://wa.me/923706235635?text=Hi%20Abdullah,%20I%20am%20interested%20in%20building%20an%20E-commerce%20Store%20similar%20to%20Zaina%20Fashion%20Store!" target="_blank" class="project-card reveal reveal-delay-1" data-cat="ecommerce">
        <div class="project-thumb" style="--glow:#8b7bff">
          <div class="glow"></div>
          <img src="{{ asset('images/projects/zaina.png') }}" alt="Zaina Fashion Store" class="project-img">
          <div class="project-overlay">
            <span class="overlay-btn"><i class="fa-brands fa-whatsapp"></i> Inquiry Detail</span>
          </div>
        </div>
        <div class="project-info">
          <span class="tag">E-commerce</span>
          <h3>Zaina Fashion Store</h3>
          <p>Custom online clothing store with cart, checkout and admin panel.</p>
          <div class="project-stack"><span>Laravel</span><span>Stripe API</span><span>Bootstrap</span></div>
        </div>
      </a>

      <a href="https://wa.me/923706235635?text=Hi%20Abdullah,%20I%20am%20interested%20in%20a%20Shopify%20store%20similar%20to%20Aura%20Home%20Decor!" target="_blank" class="project-card reveal reveal-delay-2" data-cat="ecommerce">
        <div class="project-thumb" style="--glow:#3fd0ff">
          <div class="glow"></div>
          <img src="{{ asset('images/projects/decor.png') }}" alt="Aura Home Decor" class="project-img">
          <div class="project-overlay">
            <span class="overlay-btn"><i class="fa-brands fa-whatsapp"></i> Inquiry Detail</span>
          </div>
        </div>
        <div class="project-info">
          <span class="tag">Shopify</span>
          <h3>Aura Home Decor</h3>
          <p>Shopify store with custom theme styling and optimized product pages.</p>
          <div class="project-stack"><span>Shopify</span><span>Liquid</span><span>CSS</span></div>
        </div>
      </a>

      <a href="https://wa.me/923706235635?text=Hi%20Abdullah,%20I%20am%20interested%20in%20building%20a%20Vehicle%20Listing%20Platform%20similar%20to%20SM-Autos!" target="_blank" class="project-card reveal" data-cat="laravel">
        <div class="project-thumb" style="--glow:#8b7bff">
          <div class="glow"></div>
          <img src="{{ asset('images/projects/autos.png') }}" alt="SM-Autos Vehicle Marketplace" class="project-img">
          <div class="project-overlay">
            <span class="overlay-btn"><i class="fa-brands fa-whatsapp"></i> Inquiry Detail</span>
          </div>
        </div>
        <div class="project-info">
          <span class="tag">Laravel Application</span>
          <h3>SM-Autos Vehicle Marketplace</h3>
          <p>Vehicle listing platform with inquiries, reports and admin dashboard.</p>
          <div class="project-stack"><span>Laravel</span><span>MySQL</span><span>Cloudinary</span></div>
        </div>
      </a>

      <a href="https://wa.me/923706235635?text=Hi%20Abdullah,%20I%20am%20interested%20in%20integrating%20an%20AI%20Chatbot%20similar%20to%20SupportBot%20AI!" target="_blank" class="project-card reveal reveal-delay-1" data-cat="laravel">
        <div class="project-thumb" style="--glow:#3fd0ff">
          <div class="glow"></div>
          <img src="{{ asset('images/projects/support.png') }}" alt="SupportBot AI Widget" class="project-img">
          <div class="project-overlay">
            <span class="overlay-btn"><i class="fa-brands fa-whatsapp"></i> Inquiry Detail</span>
          </div>
        </div>
        <div class="project-info">
          <span class="tag">AI Integration</span>
          <h3>SupportBot AI Widget</h3>
          <p>AI-powered chatbot using OpenRouter API for 24/7 query handling.</p>
          <div class="project-stack"><span>Laravel</span><span>OpenRouter API</span><span>JS</span></div>
        </div>
      </a>

      <a href="https://wa.me/923706235635?text=Hi%20Abdullah,%20I%20am%20interested%20in%20building%20a%20Real%20Estate%20site%20similar%20to%20Greenline%20Real%20Estate!" target="_blank" class="project-card reveal reveal-delay-2" data-cat="wordpress">
        <div class="project-thumb" style="--glow:#8b7bff">
          <div class="glow"></div>
          <img src="{{ asset('images/projects/estate.png') }}" alt="Greenline Real Estate" class="project-img">
          <div class="project-overlay">
            <span class="overlay-btn"><i class="fa-brands fa-whatsapp"></i> Inquiry Detail</span>
          </div>
        </div>
        <div class="project-info">
          <span class="tag">WordPress</span>
          <h3>Greenline Real Estate</h3>
          <p>Property listing site with search filters and agent profiles.</p>
          <div class="project-stack"><span>WordPress</span><span>Elementor</span><span>PHP</span></div>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- ===== PROCESS ===== -->
<section class="process" id="process">
  <div class="container">
    <div class="section-head reveal">
      <div class="eyebrow">How I Work</div>
      <h2 class="section-title">A simple process, <span class="grad-text">built for clarity</span></h2>
      <p class="section-sub">From first message to final handover — a clear, communicative workflow so you always know what's happening.</p>
    </div>
    <div class="process-grid">
      <div class="process-step reveal"><div class="num">01</div><h3>Discovery Call</h3><p>We discuss your goals, audience and requirements over WhatsApp, call or email.</p></div>
      <div class="process-step reveal reveal-delay-1"><div class="num">02</div><h3>Plan & Design</h3><p>I plan the structure and design a modern UI tailored to your brand and content.</p></div>
      <div class="process-step reveal reveal-delay-2"><div class="num">03</div><h3>Develop & Test</h3><p>Clean, optimized code built and tested across devices for speed and reliability.</p></div>
      <div class="process-step reveal reveal-delay-3"><div class="num">04</div><h3>Launch & Support</h3><p>Your site goes live with SEO basics in place, plus ongoing maintenance available.</p></div>
    </div>
  </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="testimonials" id="testimonials">
  <div class="container">
    <div class="section-head reveal">
      <div class="eyebrow">Client Feedback</div>
      <h2 class="section-title">What clients <span class="grad-text">say about working with me</span></h2>
    </div>
    <div class="testi-grid">
      <div class="testi-card reveal">
        <div class="stars">★★★★★</div>
        <p>"Abdullah delivered our business website ahead of schedule and it looks far more premium than we expected. Communication was excellent throughout."</p>
        <div class="testi-person"><div class="pic">HK</div><div><div class="name">Hassan Khalid</div><div class="role">Founder, Horizon Consulting</div></div></div>
      </div>
      <div class="testi-card reveal reveal-delay-1">
        <div class="stars">★★★★★</div>
        <p>"Our Shopify store setup was smooth from start to finish. He understood exactly what we needed and the design matches our brand perfectly."</p>
        <div class="testi-person"><div class="pic">ZN</div><div><div class="name">Zainab Noor</div><div class="role">Owner, Aura Home Decor</div></div></div>
      </div>
      <div class="testi-card reveal reveal-delay-2">
        <div class="stars">★★★★★</div>
        <p>"The Laravel admin dashboard he built has saved us hours every week. Very responsive with support even after project completion."</p>
        <div class="testi-person"><div class="pic">AR</div><div><div class="name">Ahmed Raza</div><div class="role">Operations Lead, SM-Autos</div></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section class="contact" id="contact">
  <div class="container contact-grid">

    <div class="contact-info reveal">
      <div class="eyebrow">Get In Touch</div>
      <h2 class="section-title">Let's build your <span class="grad-text">next project</span></h2>
      <p>Whether you need a brand-new website, an online store or a custom web application — reach out and let's discuss how I can help your business grow online.</p>
      <div class="contact-channels">
        <a href="mailto:devsolutionsabdullah@gmail.com" class="channel">
          <div class="ic"><i class="fa-solid fa-envelope"></i></div>
          <div class="meta"><b>Email</b><span>devsolutionsabdullah@gmail.com</span></div>
        </a>
        <a href="tel:+923706235635" class="channel">
          <div class="ic"><i class="fa-solid fa-phone"></i></div>
          <div class="meta"><b>Call</b><span>0370 6235635 · 0306 3813338</span></div>
        </a>
        <a href="https://wa.me/923706235635" target="_blank" class="channel">
          <div class="ic"><i class="fa-brands fa-whatsapp"></i></div>
          <div class="meta"><b>WhatsApp</b><span>0370 6235635</span></div>
        </a>
        <a href="https://maps.google.com/?q=Johar+Town+J+Block+Lahore" target="_blank" class="channel">
          <div class="ic"><i class="fa-solid fa-location-dot"></i></div>
          <div class="meta"><b>Location</b><span>Johar Town, J Block, Lahore, Pakistan</span></div>
        </a>
      </div>
      <div class="quick-actions">
        <a href="tel:+923706235635" class="btn btn-primary"><i class="fa-solid fa-phone"></i> Call Now</a>
        <a href="https://wa.me/923706235635" target="_blank" class="btn btn-ghost"><i class="fa-brands fa-whatsapp"></i> WhatsApp Chat</a>
      </div>
    </div>

    <div class="contact-form-wrap reveal reveal-delay-2">
      <form class="contact-form" id="contactForm">
        <div class="form-row">
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required>
          </div>
          <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="john@email.com" required>
          </div>
        </div>
        <div class="form-group">
          <label for="service">Service Needed</label>
          <select id="service" name="service">
            <option>Business Website</option>
            <option>E-commerce Website</option>
            <option>Shopify Store</option>
            <option>WordPress Website</option>
            <option>Custom Web App (Laravel/PHP)</option>
            <option>AI Chatbot Integration</option>
            <option>Maintenance & Bug Fixing</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Tell me about your project..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
        <p class="form-note">I usually respond within a few hours. You can also reach me directly on WhatsApp.</p>
      </form>
    </div>

  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="#home" class="logo"><span class="tag">AD</span> Abdullah<span class="grad-text">.dev</span></a>
        <p>Abdullah Dev Solutions — full-stack web development services for businesses across Pakistan and worldwide, based in Lahore.</p>
      </div>
      <div class="footer-links">
        <div class="footer-col">
          <h4>Navigate</h4>
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#services">Services</a>
          <a href="#projects">Projects</a>
          <a href="#contact">Contact</a>
        </div>
        <div class="footer-col">
          <h4>Services</h4>
          <a href="#services">Business Websites</a>
          <a href="#services">E-commerce</a>
          <a href="#services">Shopify</a>
          <a href="#services">Laravel Apps</a>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <a href="mailto:devsolutionsabdullah@gmail.com">Email Me</a>
          <a href="tel:+923706235635">0370 6235635</a>
          <a href="https://wa.me/923706235635" target="_blank">WhatsApp</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© <span id="year">{{ date('Y') }}</span> Abdullah Dev Solutions. All rights reserved.</span>
      <div class="socials">
        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/abdullah-abid-831139345" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://wa.me/923706235635" target="_blank" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- Floating Action Menu -->
<div class="fab-menu" id="fabMenu">
  <div class="fab-item fab-whatsapp">
    <span class="fab-label">WhatsApp</span>
    <a href="https://wa.me/923706235635" target="_blank" aria-label="WhatsApp">
      <i class="fa-brands fa-whatsapp"></i>
    </a>
  </div>
  <div class="fab-item fab-chat">
    <span class="fab-label">Chat with AI</span>
    <button aria-label="Open Chatbot" onclick="toggleChatbot()">
      <i class="fa-solid fa-robot"></i>
    </button>
  </div>
  <button class="fab-main" id="fabMain" aria-label="Open menu" onclick="toggleFab()">
    <i class="fa-solid fa-message" id="fabIcon"></i>
  </button>
</div>

<!-- Chatbot Widget -->
<div class="chatbot-widget" id="chatbotWidget">
  <div class="chatbot-header">
    <div class="chatbot-header-info">
      <div class="chatbot-avatar"><i class="fa-solid fa-robot"></i></div>
      <div>
        <div class="chatbot-name">Abdullah's AI Assistant</div>
        <div class="chatbot-status"><span class="status-dot"></span> Online</div>
      </div>
    </div>
    <button class="chatbot-close" onclick="toggleChatbot()"><i class="fa-solid fa-xmark"></i></button>
  </div>
  <div class="chatbot-messages" id="chatMessages">
    <div class="chat-msg bot">
      <div class="msg-bubble">Hi! 👋 I'm Abdullah's AI assistant. Ask me anything about his services, projects, or how to get started!</div>
    </div>
  </div>
  <div class="chatbot-input-area">
    <input type="text" id="chatInput" class="chatbot-input" placeholder="Type your message..." onkeydown="if(event.key==='Enter') sendChat()" />
    <button class="chatbot-send" onclick="sendChat()"><i class="fa-solid fa-paper-plane"></i></button>
  </div>
</div>

<!-- Back to Top -->
<div class="back-top" id="backTop" role="button" aria-label="Back to top" tabindex="0">
  <i class="fa-solid fa-arrow-up"></i>
</div>

<!-- JS -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
