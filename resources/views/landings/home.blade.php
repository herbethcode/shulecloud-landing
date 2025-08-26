<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShuleCloud | School Management System by MotSoft</title>

    <!-- Author / Credits -->
    <meta name="author" content="MotSoft (herbeth.code@gmail.com)">
    <meta name="designer" content="MotSoft - https://motsoft.co.tz">
    <meta name="copyright" content="© 2025 MotSoft">
    <meta name="description" content="ShuleCloud - School Management System developed by MotSoft, designed for modern educational institutions in Tanzania.">
    <meta name="keywords" content="ShuleCloud, MotSoft, School Management System, Education, Tanzania, herbeth.code@gmail.com">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


    <style>
        :root {
            --bs-primary: #052905;
            --bs-primary-rgb: 5, 41, 5;
            --bs-secondary: #e9b949;
            --bs-dark: #021502;
            --bs-light: #f8f9fa;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: #333;
        }

        .btn-primary {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }

        .btn-primary:hover {
            background-color: #031c03;
            border-color: #031c03;
        }

        .bg-primary {
            background-color: var(--bs-primary) !important;
        }

        .text-primary {
            color: var(--bs-primary) !important;
        }

        .education-icon {
            background-color: rgba(var(--bs-primary-rgb), 0.1);
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            margin-bottom: 1rem;
            color: var(--bs-primary);
        }

        .module-card {
            transition: transform 0.3s ease;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            height: 100%;
        }

        .module-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .price-table {
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            height: 100%;
        }

        .price-table.popular {
            border-color: var(--bs-primary);
            box-shadow: 0 0 15px rgba(5, 41, 5, 0.2);
            position: relative;
        }

        .popular-badge {
            position: absolute;
            top: -12px;
            right: 20px;
            background: var(--bs-secondary);
            color: var(--bs-dark);
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: var(--bs-primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .testimonial {
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .hero-img {
            position: relative;
        }

        .img-card {
            position: absolute;
            top: 20%;
            right: -10%;
            z-index: 2;
            max-width: 280px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            border-radius: 12px;
        }

        .img-main {
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .stats-section {
            background: linear-gradient(135deg, var(--bs-primary) 0%, #031c03 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .mission-statement {
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: absolute;
            bottom: -30px;
            right: -30px;
            max-width: 350px;
        }

        .mission-icon {
            background: var(--bs-primary);
            color: white;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .footer {
            background: var(--bs-dark);
            color: white;
        }

        .footer a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer a:hover {
            color: white;
        }

        .credits {
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .btn-white-outline {
            border: 2px solid white;
            color: white;
            background: transparent;
        }

        .btn-white-outline:hover {
            background: white;
            color: var(--bs-primary);
        }

        .btn-white.hover-outline {
            background: white;
            color: var(--bs-primary);
            border: 2px solid white;
        }

        .btn-white.hover-outline:hover {
            background: transparent;
            color: white;
        }

        .navbar {
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            color: white !important;
            font-size: 1.5rem;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: white !important;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--bs-primary) 0%, #031c03 100%);
            color: white;
            padding: 7rem 0;
        }

        section {
            padding: 5rem 0;
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        /* New image styling */
        .img-container {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .img-container img {
            transition: transform 0.5s ease;
        }

        .img-container:hover img {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="navbar navbar-expand-lg fixed-top" style="background-color: var(--bs-primary);">
    <div class="container">
        <img src="/logo.png"
             style="width: 100px; height: 70px; margin-right: 10px; filter: brightness(0) invert(1);"
             alt="ShuleCloud Logo">

        <a class="navbar-brand" href="#">ShuleCloud</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#modules">Modules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <a href="#demo" class="btn btn-light ms-3">Request Demo</a>
        </div>
    </div>
</header>

<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <br/>
                <span class="text-uppercase mb-3 opacity-75">Powered by MotSoft</span>
                <h1 class="mb-4">Streamline Your School Operations with ShuleCloud</h1>
                <p class="lead mb-5">Manage students, teachers, classes, attendance, grades, and more with our all-in-one school management system designed for educational excellence.</p>
                <div class="d-flex gap-3">
                    <a href="#demo" class="btn btn-light btn-lg">Get Started Now</a>
                    <a href="#features" class="btn btn-outline-light btn-lg">Explore Features</a>
                </div>
                <div class="mt-5">
                    <p class="text-uppercase mb-2 opacity-75">Accessible at: shulecloud.cloud</p>
                    <div class="d-flex gap-4">
                        <div class="bg-white p-3 rounded text-dark fw-bold">School</div>
                        <div class="bg-white p-3 rounded text-dark fw-bold">Academy</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="hero-img">
                    <div class="img-container">
                        <img src="https://images.unsplash.com/photo-1584697964358-3e14ca57658b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="ShuleCloud Dashboard" class="img-fluid rounded shadow img-main">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="position-relative">
                    <div class="img-container">

                        <img src="data:image/jpeg;base64,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" alt="School Management" class="img-fluid rounded shadow">
                    </div>
                    <div class="mission-statement p-4 rounded shadow">
                        <div class="d-flex align-items-center mb-3">
                            <div class="mission-icon me-3">
                                <i class="bi bi-mortarboard fs-4"></i>
                            </div>
                            <h3 class="mb-0">Our Mission</h3>
                        </div>
                        <p class="mb-0">To empower educational institutions with technology that simplifies administration and enhances learning experiences.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" style="padding-left: 30px">
                <span class="text-primary text-uppercase fw-bold">About ShuleCloud</span>
                <h2 class="mb-4">Transforming Education Administration for the Digital Age</h2>
                <p class="mb-4">ShuleCloud is a comprehensive school management system designed to streamline administrative tasks, enhance communication, and improve educational outcomes.</p>
                <p class="mb-4">Our platform integrates all aspects of school management into one seamless solution, saving time, reducing paperwork, and enabling educators to focus on what matters most - teaching.</p>

                <h4 class="h5 fw-bold mb-3">Our Core Values</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <span>Educational Excellence</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <span>Data Security</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <span>User-Friendly Design</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <span>Continuous Innovation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="bg-light" id="features">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mx-auto text-center" data-aos="fade-up">
                <span class="text-primary text-uppercase fw-bold">Features</span>
                <h2>Why Choose ShuleCloud</h2>
                <p>Our school management system is designed by educators for educators, with features that address the real challenges faced by schools every day.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                <div class="text-center">
                    <div class="education-icon mx-auto">
                        <i class="bi bi-people fs-4"></i>
                    </div>
                    <h4 class="h5">Student Management</h4>
                    <p>Complete student profiles, enrollment, records, and tracking in one centralized system.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="education-icon mx-auto">
                        <i class="bi bi-clipboard-data fs-4"></i>
                    </div>
                    <h4 class="h5">Gradebook & Reporting</h4>
                    <p>Easy grade entry, report cards, transcripts, and performance analytics.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="education-icon mx-auto">
                        <i class="bi bi-calendar-check fs-4"></i>
                    </div>
                    <h4 class="h5">Attendance Tracking</h4>
                    <p>Automated attendance with notifications and detailed reporting.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="education-icon mx-auto">
                        <i class="bi bi-chat-dots fs-4"></i>
                    </div>
                    <h4 class="h5">Parent Portal</h4>
                    <p>Keep parents informed with real-time updates on grades, attendance, and school events.</p>
                </div>
            </div>
        </div>

        <!-- Feature Images Row -->
        <div class="row mt-5">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="0">
                <div class="img-container">
                    <img src="https://images.unsplash.com/photo-1591123120675-6f7f1aae0e5b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Student Management" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="img-container">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Gradebook System" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="img-container">
                    <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Parent Portal" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mx-auto text-center" data-aos="fade-up">
                <span class="text-primary text-uppercase fw-bold">Pricing</span>
                <h2>Affordable Plans for Every School</h2>
                <p>Flexible pricing designed to meet the needs of schools of all sizes</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                <div class="price-table p-4 rounded shadow h-100">
                    <h3>Small School</h3>
                    <p>Ideal for small schools and academies with up to 200 students.</p>
                    <div class="my-4">
                        <span class="h2 fw-bold">TZS 299,000</span>
                        <span class="text-muted">/ mwaka</span>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Hadi wanafunzi 200</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Ripoti za msingi</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Msaada kwa barua pepe</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Usimamizi wa wanafunzi</li>
                    </ul>
                    <a href="#" class="btn btn-primary w-100">Get Started</a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="price-table popular p-4 rounded shadow h-100">
                    <div class="popular-badge">Most Popular</div>
                    <h3>Medium School</h3>
                    <p>Perfect for medium-sized schools with 200-1000 students.</p>
                    <div class="my-4">
                        <span class="h2 fw-bold">TZS 599,000</span>
                        <span class="text-muted">/ mwaka</span>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Wanafunzi 200-1000</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Ripoti za hali ya juu</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Msaada wa kipaumbele</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Kiwango cha wazazi</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Ufuatiliaji wa mahudhurio</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Mfumo wa gradebook</li>
                    </ul>
                    <a href="#" class="btn btn-primary w-100">Get Started</a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="price-table p-4 rounded shadow h-100">
                    <h3>Large School/District</h3>
                    <p>Enterprise solution for large schools and districts with 1000+ students.</p>
                    <div class="my-4">
                        <span class="h2 fw-bold">Custom</span>
                        <span class="text-muted">pricing</span>
                    </div>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Wanafunzi 1000+</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Ripoti maalum</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Msaada maalum 24/7</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Usimamizi wa shule nyingi</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Ufikiaji wa API</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Uingizwaji maalum</li>
                    </ul>
                    <a href="#" class="btn btn-primary w-100">Contact Sales</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modules Section -->
<section class="bg-light" id="modules">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mx-auto text-center" data-aos="fade-up">
                <span class="text-primary text-uppercase fw-bold">Modules</span>
                <h2>Comprehensive School Management Modules</h2>
                <p>Our platform includes everything you need to manage your school efficiently</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="module-card p-4 rounded shadow">
                    <div class="education-icon">
                        <i class="bi bi-people-fill fs-4"></i>
                    </div>
                    <h3 class="h5">Student Information System</h3>
                    <p>Complete student profiles, demographic data, medical records, and enrollment history all in one secure location.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="module-card p-4 rounded shadow">
                    <div class="education-icon">
                        <i class="bi bi-journal-bookmark fs-4"></i>
                    </div>
                    <h3 class="h5">Attendance Management</h3>
                    <p>Track student attendance with automated notifications to parents for absences and detailed reporting for administrators.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="module-card p-4 rounded shadow">
                    <div class="education-icon">
                        <i class="bi bi-clipboard-data fs-4"></i>
                    </div>
                    <h3 class="h5">Gradebook & Report Cards</h3>
                    <p>Comprehensive gradebook with customizable grading scales, report card generation, and transcript management.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="module-card p-4 rounded shadow">
                    <div class="education-icon">
                        <i class="bi bi-calendar-event fs-4"></i>
                    </div>
                    <h3 class="h5">Class Scheduling</h3>
                    <p>Create class schedules, assign teachers to classes, and manage room allocations with conflict detection.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="module-card p-4 rounded shadow">
                    <div class="education-icon">
                        <i class="bi bi-cash-coin fs-4"></i>
                    </div>
                    <h3 class="h5">Finance & Accounting</h3>
                    <p>Manage tuition fees, payments, expenses, and generate financial reports for better budget management.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="module-card p-4 rounded shadow">
                    <div class="education-icon">
                        <i class="bi bi-chat-left-dots fs-4"></i>
                    </div>
                    <h3 class="h5">Communication Portal</h3>
                    <p>Send announcements, newsletters, and alerts to parents, students, and staff through multiple channels.</p>
                </div>
            </div>
        </div>

        <!-- Module Images -->
        <div class="row mt-5">
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="0">
                <div class="img-container">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Student Information System" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="img-container">
                    <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Class Scheduling" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="0">
                <h2 class="display-4 fw-bold">10+</h2>
                <p class="lead">Schools Using Our System</p>
            </div>
            <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <h2 class="display-4 fw-bold">10,000+</h2>
                <p class="lead">Students Managed</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <h2 class="display-4 fw-bold">99%</h2>
                <p class="lead">Customer Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 mx-auto text-center" data-aos="fade-up">
                <span class="text-primary text-uppercase fw-bold">Testimonials</span>
                <h2>What Schools Are Saying</h2>
                <p>Hear from educational institutions that have transformed their operations with our system</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="testimonial p-4 rounded shadow">
                    <div class="mb-4">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="fst-italic mb-4">"Since implementing ShuleCloud, we've reduced administrative workload by 40%. The gradebook and attendance modules have been particularly transformative for our teachers."</p>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="data:image/jpeg;base64,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" alt="Dr. Sarah Johnson" class="rounded-circle" width="60" height="60">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-0">Dr. Sarah Johnson</h5>
{{--                            <span class="text-muted">Principal, Lincoln High School</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial p-4 rounded shadow">
                    <div class="mb-4">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="fst-italic mb-4">"The parent portal has dramatically improved communication between school and home. Parents appreciate the real-time updates on grades and attendance."</p>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="data:image/jpeg;base64,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" alt="Michael Rodriguez" class="rounded-circle" width="60" height="60">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-0">Michael Rodriguez</h5>
{{--                            <span class="text-muted">IT Director, Oakwood District</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial p-4 rounded shadow">
                    <div class="mb-4">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="fst-italic mb-4">"The reporting capabilities have given us insights we never had before. We can now make data-driven decisions to improve student outcomes."</p>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8SDhAPDQ0NEQ0ODQ0OEA8ODQ8NDQ8NFREWFhURFRMYHSgiGBoxHhYTITMhJSsrOi4yFx81ODMsNygtLjcBCgoKDQ0NDg0NDisZHxkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAaAAEBAQEBAQEAAAAAAAAAAAAABwYFBAMC/8QAPBAAAgIAAgQLBQcEAwEAAAAAAAECAwQRBQYhMRITFkFRU2GRk6HRByJicYEUIzIzQrHBQ1JygnOywiT/xAAVAQEBAAAAAAAAAAAAAAAAAAAAAf/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/ALiAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHnxuOqpjw77IQj0ye/5LezN6z63xpbpw2U71slN7a630dsuwnuMxdls3O6cpzfPJ5/RdCA3+O1+ojmqKrLfil91Dz2+RybNf8S37tFCXbw5PvzRkAFa2vX/Ffqpw7XYpxffmdTBa/wBT2X0Th8UJKxd2xk+AFo0dpWi9Z0Wxn0pbJL5xe1HsIdTbKElOEpRnF5qUW1JP5m61a104TVONaTeyN2xRfZPo+YRtwEAAAAAAAAAAAAAAAAAAAAAAAAABktd9YnTH7PRLK6a9+S31wfR8T8jR6UxsaKLLpbq4N5dMuZd+RG8XiZ22Ttsec7JOUn2sD4gAKAAAAAAAA3OousbzWEvlmnspm3tz6t/x3G7IZGTTTi2mmmmtjTW5le1a0p9pwsLX+YvcsXRYt/fsf1COqAAAAAAAAAAAAAAAAAAAAAAADGe0rGZVU0J/mTdkv8YrJLvfkT41XtGtbxkY80MPDvcpZ/wZUKAAAAAAAAAAAbL2bYzK62hvZZBWRXxReT8n5GNO3qXbwdIUfE7Iv5OEv5SArIACAAAAAAAAAAAAAAAAAAAAACZe0SGWOT5pYet90pIzBuvaXhH9xcls96qT7fxR/wDRhQoAAAAAAAAAAB2dT4Z6Qw/ZOUvooSZxjV+znCOWKnbl7tNT2/FN5LyUgKSAAgAAAAAAAAAAAAAAAAAAAAA5usWjvtGFsqX43HhQ7LI7V6fUj0otNpppptNPemuYuZP9fNAOMni6Y+5L85L9Mv7/AJPn7fmBiwAFAAAAAAAACqak6MdGEi5rKy58bLpSf4V3fuZDUvQDxFqutj/89Us9u6yxborpXSU8IAAAAAAAAAAAAAAAAAAAAAAB58dja6a3ZdNRhHnfO+hLnYHoPNXiqbHOuNlc3DZZBNSyT5midaw633X5wpzqo3bHlbNfE1uXYjg4HG2U2K2mbjOPOtzXOmudAajWfU+dbldhIuVTzcqltnX/AI9K/Yx5TtX9b6b0oXNVX7snsrm/hb3fJ+Z6tMarYXEZycXXa/6lWUW38S3MCTg1eO1ExMXnTOu2PQ3xc+57PM5VureOjvwtv+qUl5MK5IOpXq5jXuwl31iorzOngtRsXP8AM4uqPxS4cu6PqBmDS6tap24hqy5Srw+x5tZTsXRHoXaa3RGp2FpalNO6xbc7EuAn2Q9cz66d1nw+GTjmrLktlUHufxP9IR0nZh8PXCDlXVXmq4JtRWfQj1J863EZ0tpS7E2cZfLN7oxWyEI9EUdDQGs9+GajnxlGe2ubb4K+B837AVcHi0TpSnE18ZTLNbpReycJdEke0AAAAAAAAAAAAAAAAAAfLFYiFcJWWSUYQi5Sb5kgPPpbSdWHqdtryS2RivxTlzRS6SVac0zbirOHa8orPgVr8MI/y+0/esWmp4q5zlmq45qqHNGPT82coAAAodjRWsuLw6Ua7eFWv6di4ccuhc6+jOOAN9g/aDDdfh5p9NUlJdzyOnXrtgXvnZHslVL+CXACpT11wC/qTfyqn6HOxftApX5NFkn0zca15Zk+AR3tKa24y7OPGKqt/oqXB2dst5wQAoAAPXozSNuHtVtMspLY1vjKP9slzoqur+m68VVw4bLI7LK2/ei/5XaR89midJWYe6NtT2rZKP6Zw54sC0A8mi9IV30wuqfuzW7njLni+09YQAAAAAAAAAAAAACfe0HTXCmsJW/crala1z2c0fkt/wA/kbPTWkFh8PZc/wBEfdXTN7IrvaI3bZKUnKTzlJuUm97k3m2B+QAFAAAAAAAAAAAAAAAAAABpdSNNcRfxU39xe1F57oWboy/h/ToKeQsrWqOlPtGEhKTzsr+6s6XKKWUvqsmEdoAAAAAAAAAAAABhfaVj/wAnDp9N0/2iv+xhTs634rjMfe89kJ8Uv9Fk/PM4wUAAAAAAAAAAAAAAAAAAAAADV+zvH8DEypb92+Dy/wCSO1eXCMoevRWK4rEVW/2Wwk/8c9vlmBaQAEAAAAAAAAAABFNJKXH3cNNT463hJ7+FwnmeYr+k9XsJiJcO6lOfPKMpQk/m1vPFyKwHVT8az1AloKlyKwHVT8az1HIrAdVPxrPUKloKlyKwHVT8az1HIrAdVPxrPUCWgqXIrAdVPxrPUcisB1U/Gs9QJaCpcisB1U/Gs9RyKwHVT8az1AloKlyKwHVT8az1HIrAdVPxrPUCWgqXIrAdVPxrPUcisB1U/Gs9QiWgqXIrAdVPxrPUcisB1U/Gs9QJaCpcisB1U/Gs9RyKwHVT8az1Aloy7ypcisB1U/Gs9T04DVfBUzU66ffW1OcpWZPpSb3gdPB8Liq+Gsp8XDhL4uCsz7AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH//2Q==" alt="James Wilson" class="rounded-circle" width="60" height="60">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-0">James Komba</h5>
{{--                            <span class="text-muted">Superintendent, Valley School District</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Demo Section -->
<section class="bg-primary text-white" id="demo">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="text-uppercase opacity-75">Request a Demo</span>
                <h2 class="mb-4">See ShuleCloud in Action</h2>
                <p class="lead mb-4">Schedule a personalized demo to see how our system can transform your school administration</p>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-white text-primary rounded-circle p-2 me-3">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div>
                            <span class="d-block">Phone</span>
                            <strong>+(255) 766 959 907</strong>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-white text-primary rounded-circle p-2 me-3">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div>
                            <span class="d-block">Email</span>
                            <strong>info@shulecloud.cloud</strong>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-white text-primary rounded-circle p-2 me-3">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div>
                            <span class="d-block">Website</span>
                            <strong>shulecloud.cloud</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="bg-white rounded shadow p-4 text-dark">
                    <h3 class="mb-4">Request Your Demo</h3>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="school" class="form-label">School Name</label>
                            <input type="text" class="form-control" id="school" required>
                        </div>
                        <div class="mb-3">
                            <label for="students" class="form-label">Number of Students</label>
                            <select class="form-select" id="students">
                                <option value="1-100">1-100</option>
                                <option value="101-500">101-500</option>
                                <option value="501-1000">501-1000</option>
                                <option value="1000+">1000+</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Request Demo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer pt-5 pb-4">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="/logo.png"
                     style="width: 100px; height: 70px; margin-right: 10px; filter: brightness(0) invert(1);"
                     alt="ShuleCloud Logo">

                <h3 class="text-white mb-4">ShuleCloud</h3>
                <p>Comprehensive school management system designed to streamline administration, enhance communication, and improve educational outcomes.</p>
                <p class="mb-0">Powered by <a href="https://motsoft.co.tz" target="_blank">MotSoft</a></p>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                <h4 class="text-white mb-4">Product</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#features">Features</a></li>
                    <li class="mb-2"><a href="#pricing">Pricing</a></li>
                    <li class="mb-2"><a href="#modules">Modules</a></li>
                    <li class="mb-2"><a href="#demo">Request Demo</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                <h4 class="text-white mb-4">Resources</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#">Blog</a></li>
                    <li class="mb-2"><a href="#">Documentation</a></li>
                    <li class="mb-2"><a href="#">Support</a></li>
                    <li class="mb-2"><a href="#">Webinars</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <h4 class="text-white mb-4">Contact Us</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> Dar es Salaam, Tanzania</li>
                    <li class="mb-2"><i class="bi bi-envelope me-2"></i> info@shulecloud.cloud</li>
                    <li class="mb-2"><i class="bi bi-telephone me-2"></i> +(255) 123 456 789</li>
                    <li class="mb-2"><i class="bi bi-globe me-2"></i> shulecloud.cloud</li>
                </ul>
            </div>
        </div>
        <hr class="my-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0">&copy; 2023 ShuleCloud. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true
    });

    // Navbar background change on scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            document.querySelector('.navbar').style.backgroundColor = 'var(--bs-primary)';
            document.querySelector('.navbar').style.padding = '0.5rem 0';
        } else {
            document.querySelector('.navbar').style.backgroundColor = 'var(--bs-primary)';
            document.querySelector('.navbar').style.padding = '1rem 0';
        }
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
</body>
</html>
