<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zalva Akhil Ikhsani | Spesialis Jaringan & Profesional IT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1e40af;
            --secondary: #10b981;
            --accent: #f59e0b;
            --light: #f8fafc;
            --dark: #0f172a;
            --gray: #64748b;
            --light-gray: #e2e8f0;
            --card-bg: #ffffff;
            --dark-card-bg: #1e293b;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.7;
            overflow-x: hidden;
            transition: all 0.3s ease;
        }
        
        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding: 80px 0;
        }
        
        .header-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 0 20px;
        }
        
        .header-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') center/cover;
            opacity: 0.15;
            z-index: 1;
        }
        
        .header-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDYwIDYwIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yLjIgMS44LTQgNC00czQgMS44IDQgNC0xLjggNC00IDQtNC0xLjgtNC00em0tMjQgMGMwLTIuMiAxLjgtNCA0LTRzNCAxLjggNCA0LTEuOCA0LTQgNC00LTEuOC00LTR6TTAgMGg2MHY2MEgweiIvPjwvZz48L2c+PC9zdmc+');
            z-index: 0;
        }
        
        h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            margin-bottom: 15px;
            line-height: 1.2;
        }
        
        .title {
            font-size: clamp(1.2rem, 2vw, 1.5rem);
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 30px;
            font-weight: 400;
        }
        
        .tagline {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 40px;
            color: rgba(255, 255, 255, 0.85);
        }
        
        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 0;
            z-index: 1000;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            background-color: rgba(37, 99, 235, 0.8);
        }
        
        nav.scrolled {
            background-color: rgba(15, 23, 42, 0.95);
            padding: 15px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-links a:hover {
            color: var(--accent);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent);
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        /* Sections */
        .section {
            padding: 100px 0;
            position: relative;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.2rem;
            color: var(--dark);
            display: inline-block;
            position: relative;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 2px;
        }
        
        .section-subtitle {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
            color: var(--gray);
            font-size: 1.1rem;
        }
        
        /* Cards */
        .card {
            background-color: var(--card-bg);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        /* Contact Section */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .contact-icon {
            background-color: rgba(37, 99, 235, 0.1);
            color: var(--primary);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        
        .contact-text h3 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        
        .contact-text p {
            color: var(--gray);
            font-size: 0.95rem;
        }
        
        /* Education Section */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background-color: var(--light-gray);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 50px;
            display: flex;
            justify-content: flex-end;
            padding-right: 30px;
        }
        
        .timeline-item:nth-child(even) {
            justify-content: flex-start;
            padding-left: 30px;
            padding-right: 0;
        }
        
        .timeline-content {
            width: calc(50% - 40px);
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: var(--primary);
            border: 4px solid white;
            box-shadow: 0 0 0 4px var(--primary);
        }
        
        .timeline-item:nth-child(even)::after {
            left: -10px;
        }
        
        .timeline-item:nth-child(odd)::after {
            right: -10px;
        }
        
        .timeline-date {
            display: inline-block;
            padding: 5px 15px;
            background-color: var(--primary);
            color: white;
            border-radius: 20px;
            font-size: 0.85rem;
            margin-bottom: 15px;
        }
        
        /* Skills Section */
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .skill-card {
            text-align: center;
        }
        
        .skill-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .skill-card h3 {
            margin-bottom: 15px;
        }
        
        .skill-card p {
            color: var(--gray);
            font-size: 0.95rem;
        }
        
        /* About Section */
        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .about-content p {
            font-size: 1.1rem;
            color: var(--gray);
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        /* Experience Section */
        .experience-item {
            display: flex;
            gap: 30px;
            margin-bottom: 40px;
            background-color: var(--card-bg);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .experience-period {
            min-width: 150px;
        }
        
        .experience-period span {
            display: inline-block;
            padding: 5px 15px;
            background-color: var(--secondary);
            color: white;
            border-radius: 20px;
            font-size: 0.85rem;
        }
        
        .experience-details {
            flex: 1;
        }
        
        .experience-company {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: var(--dark);
        }
        
        .experience-position {
            font-size: 1rem;
            color: var(--primary);
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        .experience-description {
            color: var(--gray);
            margin-bottom: 15px;
        }
        
        .experience-tasks {
            list-style-type: none;
        }
        
        .experience-tasks li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 8px;
            color: var(--gray);
        }
        
        .experience-tasks li::before {
            content: '▹';
            position: absolute;
            left: 0;
            color: var(--primary);
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 80px 0 30px;
        }
        
        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
        }
        
        .footer-text {
            max-width: 600px;
            margin: 0 auto 30px;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .social-links {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .social-link {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }
        
        .copyright {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
            margin-top: 30px;
        }
        
        /* Buttons */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--accent);
            color: white;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .btn:hover {
            background-color: #e67e22;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid white;
            margin-left: 15px;
        }
        
        .btn-outline:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate {
            opacity: 0;
            animation: slideUp 0.6s ease forwards;
        }
        
        .delay-1 {
            animation-delay: 0.2s;
        }
        
        .delay-2 {
            animation-delay: 0.4s;
        }
        
        .delay-3 {
            animation-delay: 0.6s;
        }
        
        /* Theme Toggle */
        .theme-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 100;
            border: none;
            transition: all 0.3s ease;
        }
        
        .theme-toggle:hover {
            transform: translateY(-3px) scale(1.1);
        }
        
        /* Dark Theme */
        body.dark-theme {
            background-color: #0f172a;
            color: #f8fafc;
        }
        
        .dark-theme .card,
        .dark-theme .experience-item {
            background-color: var(--dark-card-bg);
            color: #f8fafc;
        }
        
        .dark-theme .section-title h2,
        .dark-theme .experience-company {
            color: #f8fafc;
        }
        
        .dark-theme .section-title h2::after {
            background: linear-gradient(to right, var(--accent), var(--secondary));
        }
        
        .dark-theme .contact-text p,
        .dark-theme .skill-card p,
        .dark-theme .about-content p,
        .dark-theme .experience-description,
        .dark-theme .experience-tasks li {
            color: #94a3b8;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .timeline::before {
                left: 40px;
            }
            
            .timeline-item {
                justify-content: flex-start;
                padding-left: 80px;
                padding-right: 0;
            }
            
            .timeline-item:nth-child(even) {
                justify-content: flex-start;
                padding-left: 80px;
            }
            
            .timeline-content {
                width: 100%;
            }
            
            .timeline-item::after {
                left: 30px;
            }
            
            .timeline-item:nth-child(even)::after {
                left: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .experience-item {
                flex-direction: column;
            }
            
            .experience-period {
                margin-bottom: 15px;
            }
        }
        
        @media (max-width: 576px) {
            .header-content {
                text-align: left;
            }
            
            .btn-group {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }
            
            .btn-outline {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav id="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">Akil</a>
            <div class="nav-links">
                <a href="#tentang">Tentang</a>
                <a href="#keahlian">Keahlian</a>
                <a href="#pengalaman">Pengalaman</a>
                <a href="#pendidikan">Pendidikan</a>
                <a href="#kontak">Kontak</a>
            </div>
        </div>
    </nav>
    
    <!-- Header -->
    <header>
        <div class="header-bg"></div>
        <div class="header-pattern"></div>
        <div class="header-content animate">
            <h1>Zalva Akhil Ikhsani</h1>
            <div class="title">Teknik Komputer dan Jaringan</div>
            <p class="tagline delay-1">Lulusan SMK Canda Bhirawa Pare dengan keahlian dalam jaringan komputer, dukungan IT, dan pemasaran digital</p>
            <div class="btn-group delay-2">
                <a href="#kontak" class="btn">Hubungi Saya</a>
                <a href="#pengalaman" class="btn btn-outline">Pengalaman Saya</a>
            </div>
        </div>
    </header>
    
    <!-- About Section -->
    <section id="tentang" class="section">
        <div class="container">
            <div class="section-title animate">
                <h2>Tentang Saya</h2>
            </div>
            <div class="about-content">
                <p class="animate delay-1">Saya Zalva Akhil Ikhsani, lulusan SMK Canda Bhirawa Pare dengan jurusan Teknik Komputer dan Jaringan. Selama menempuh pendidikan, saya telah mengembangkan keterampilan kuat dalam pengoperasian komputer, termasuk kemahiran dalam Microsoft Word dan Excel.</p>
                <p class="animate delay-2">Saya cepat beradaptasi dengan lingkungan baru dan bertanggung jawab penuh atas tugas yang diberikan. Pengalaman profesional saya mencakup bekerja sebagai teknisi jaringan dan di bidang pemasaran digital, memberikan saya kombinasi unik antara keterampilan teknis dan kreatif yang saya bawa ke setiap proyek.</p>
            </div>
        </div>
    </section>
    
    <!-- Skills Section -->
    <section id="keahlian" class="section">
        <div class="container">
            <div class="section-title animate">
                <h2>Keahlian Profesional</h2>
            </div>
            <p class="section-subtitle animate delay-1">Keterampilan dan teknologi yang telah saya kuasai selama pendidikan</p>
            
            <div class="skills-container">
                <div class="skill-card card animate delay-1">
                    <div class="skill-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>Instalasi Jaringan</h3>
                    <p>Instalasi dan pemeliharaan profesional jaringan komputer dan sistem WiFi</p>
                </div>
                
                <div class="skill-card card animate delay-2">
                    <div class="skill-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Pengoperasian Komputer</h3>
                    <p>Keahlian dalam pengoperasian dan pemecahan masalah perangkat keras dan lunak komputer</p>
                </div>
                
                <div class="skill-card card animate delay-1">
                    <div class="skill-icon">
                        <i class="fas fa-file-excel"></i>
                    </div>
                    <h3>Microsoft Excel</h3>
                    <p>Manajemen data dan analisis lanjutan menggunakan perangkat lunak spreadsheet</p>
                </div>
                
                <div class="skill-card card animate delay-2">
                    <div class="skill-icon">
                        <i class="fas fa-file-word"></i>
                    </div>
                    <h3>Microsoft Word</h3>
                    <p>Pembuatan dan pemformatan dokumen profesional</p>
                </div>
                
                <div class="skill-card card animate delay-1">
                    <div class="skill-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Kerja Tim</h3>
                    <p>Kemampuan terbukti bekerja efektif dalam lingkungan tim</p>
                </div>
                
                <div class="skill-card card animate delay-2">
                    <div class="skill-icon">
                        <i class="fas fa-ad"></i>
                    </div>
                    <h3>Pemasaran Digital</h3>
                    <p>Periklanan media sosial dan pembuatan konten promosi</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Experience Section -->
    <section id="pengalaman" class="section">
        <div class="container">
            <div class="section-title animate">
                <h2>Pengalaman Magang</h2>
            </div>
            <p class="section-subtitle animate delay-1">Perjalanan saya dan tanggung jawab utama</p>
            
            <div class="experience-list">
                <div class="experience-item animate delay-1">
                    <div class="experience-period">
                        <span>2023 - 2024</span>
                    </div>
                    <div class="experience-details">
                        <h3 class="experience-company">CV Yudha Media Data</h3>
                        <div class="experience-position">Teknisi Jaringan</div>
                        <p class="experience-description">Memberikan dukungan teknis dan layanan instalasi jaringan untuk klien perumahan dan bisnis</p>
                        <ul class="experience-tasks">
                            <li>Memasang jaringan WiFi dan infrastruktur kabel distribusi</li>
                            <li>Melakukan pemeliharaan dan pemecahan masalah untuk jaringan klien</li>
                            <li>Mengkomunikasikan informasi teknis kepada klien non-teknis</li>
                        </ul>
                    </div>
                </div>
                
                <div class="experience-item animate delay-2">
                    <div class="experience-period">
                        <span>2022 - 2023</span>
                    </div>
                    <div class="experience-details">
                        <h3 class="experience-company">CV BCAD IT Consultant</h3>
                        <div class="experience-position">Spesialis Pemasaran Digital</div>
                        <p class="experience-description">Membuat dan mengelola kampanye periklanan digital di berbagai platform</p>
                        <ul class="experience-tasks">
                            <li>Berkolaborasi dengan tim desain untuk membuat iklan yang menarik</li>
                            <li>Mempromosikan konten pemasaran di platform media sosial termasuk Instagram</li>
                            <li>Menganalisis kinerja kampanye dan mengoptimalkan strategi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Education Section -->
    <section id="pendidikan" class="section">
        <div class="container">
            <div class="section-title animate">
                <h2>Pendidikan</h2>
            </div>
            <p class="section-subtitle animate delay-1">Latar belakang akademik dan kualifikasi saya</p>
            
            <div class="timeline">
                <div class="timeline-item animate delay-1">
                    <div class="timeline-content card">
                        <div class="timeline-date">2019 - 2022</div>
                        <h3>SMP Negeri 2 Kepung</h3>
                        <p>Pendidikan Umum</p>
                        <p>Mengembangkan pengetahuan dasar dalam matematika, dan teknologi masa kini</p>
                    </div>
                </div>
                
                <div class="timeline-item animate delay-2">
                    <div class="timeline-content card">
                        <div class="timeline-date">2022 - 2025</div>
                        <h3>SMK Canda Bhirawa Pare</h3>
                        <p>Teknik Komputer dan Jaringan</p>
                        <p>Spesialisasi dalam instalasi jaringan, pemeliharaan komputer, dan dukungan IT</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section id="kontak" class="section">
        <div class="container">
            <div class="section-title animate">
                <h2>Hubungi Saya</h2>
            </div>
            <p class="section-subtitle animate delay-1">Jangan ragu untuk menghubungi saya untuk peluang profesional atau kolaborasi</p>
            
            <div class="contact-info">
                <div class="contact-item card animate delay-1">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Telepon</h3>
                        <p>+62 856 0845 2028</p>
                    </div>
                </div>
                
                <div class="contact-item card animate delay-2">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Email</h3>
                        <p>zalvaakhil065@gmail.com</p>
                    </div>
                </div>
                
                <div class="contact-item card animate delay-1">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Lokasi</h3>
                        <p>Dsn Damarwulan, Desa Damarwulan, Kec Kepung, Kab Kediri</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <a href="#" class="footer-logo">Zalva Akhil Ikhsani</a>
                <p class="footer-text">Spesialis Teknik Komputer dan Jaringan | Pemasaran Digital</p>
                
                <div class="social-links">
                    <a href="https://wa.me/6285608452028" class="social-link"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/afterrkil?igsh=OTcxOHJra3J5ZGxz" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/akil-tech" class="social-link"><i class="fab fa-github"></i></a>
                </div>
                
                <p class="copyright">© 2023 Zalva Akhil Ikhsani. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
    
    <!-- Theme Toggle -->
    <button class="theme-toggle" id="themeToggle">
        <i class="fas fa-moon"></i>
    </button>
    
    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Theme toggle
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        
        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-theme');
            
            if (body.classList.contains('dark-theme')) {
                themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
                localStorage.setItem('theme', 'dark');
            } else {
                themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
                localStorage.setItem('theme', 'light');
            }
        });
        
        // Check for saved theme preference
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-theme');
            themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
        }
        
        // Scroll animations
        const animateElements = document.querySelectorAll('.animate');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        animateElements.forEach(element => {
            observer.observe(element);
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>