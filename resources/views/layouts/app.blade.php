<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Coreform - La piattaforma per orientarti verso il tuo futuro universitario')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary: #D1184F;
            --primary-dark: #B3103F;
            --primary-light: #E13869;
            --dark: #333333;
            --gray: #6C757D;
            --light: #F8F9FA;
            --gray-light: #E9ECEF;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark);
            line-height: 1.5;
            font-size: 0.95rem;
            font-weight: 400;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 0.75rem 0;
        }
        
        .navbar-brand {
            font-weight: 600;
            font-size: 1.4rem;
            color: var(--dark);
        }
        
        .nav-link {
            font-weight: 500;
            font-size: 0.9rem;
            padding: 0.5rem 1rem !important;
            margin: 0 0.25rem;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .nav-link:hover {
            color: var(--primary) !important;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 0.5rem 1.25rem;
            font-weight: 500;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.85rem;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
            padding: 0.5rem 1.25rem;
            font-weight: 500;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.85rem;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary);
            border-color: var(--primary);
            transform: translateY(-2px);
        }
        
        .diagonal-bg {
            position: relative;
            overflow: hidden;
        }
        
        .diagonal-bg::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 40%;
            background: linear-gradient(135deg, transparent 25%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 50%, transparent 50%, transparent 75%, rgba(255, 255, 255, 0.2) 75%);
            background-size: 20px 20px;
            z-index: 1;
        }
        
        .hero {
            padding: 5rem 0;
            background-color: var(--primary);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .diagonal-stripes {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 50%;
            background: repeating-linear-gradient(
                45deg,
                rgba(255, 255, 255, 0.1),
                rgba(255, 255, 255, 0.1) 20px,
                transparent 20px,
                transparent 40px
            );
        }
        
        .hero h1 {
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 1.25rem;
            line-height: 1.2;
            position: relative;
            z-index: 2;
        }
        
        .hero p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }
        
        .hero-buttons {
            position: relative;
            z-index: 2;
        }
        
        .hero-image {
            position: relative;
            z-index: 2;
        }
        
        .section {
            padding: 4rem 0;
        }
        
        .section-header {
            margin-bottom: 2.5rem;
            text-align: center;
        }
        
        .section-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--dark);
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--primary);
        }
        
        .section-subtitle {
            font-size: 1rem;
            opacity: 0.8;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .feature-card {
            padding: 2rem;
            border-radius: 8px;
            background-color: white;
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid var(--gray-light);
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 50px 50px 0;
            border-color: transparent var(--primary) transparent transparent;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .feature-card:hover::before {
            opacity: 1;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .feature-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            margin-bottom: 1.25rem;
        }
        
        .feature-icon i {
            font-size: 1.2rem;
        }
        
        .feature-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }
        
        .feature-text {
            opacity: 0.8;
            margin-bottom: 1.25rem;
            font-size: 0.9rem;
        }
        
        .stats-section {
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }
        
        .stats-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(
                135deg,
                rgba(209, 24, 79, 0.03),
                rgba(209, 24, 79, 0.03) 20px,
                transparent 20px,
                transparent 40px
            );
        }
        
        .stat-card {
            background-color: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        .stat-number {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
        
        .stat-text {
            font-size: 0.9rem;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .cta-section {
            background-color: var(--primary);
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .cta-diagonal-stripes {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: repeating-linear-gradient(
                -45deg,
                rgba(255, 255, 255, 0.1),
                rgba(255, 255, 255, 0.1) 20px,
                transparent 20px,
                transparent 40px
            );
        }
        
        .cta-content {
            position: relative;
            z-index: 2;
        }
        
        .cta-title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1.25rem;
        }
        
        .cta-text {
            font-size: 1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .btn-light {
            background-color: white;
            color: var(--primary);
            font-weight: 500;
            padding: 0.5rem 1.25rem;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.85rem;
        }
        
        .btn-light:hover {
            background-color: var(--light);
            transform: translateY(-2px);
        }
        
        footer {
            background-color: #606060;
            color: white;
            padding: 3.5rem 0 1.5rem;
        }
        
        .footer-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 1.25rem;
        }
        
        .footer-contact {
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            font-size: 0.9rem;
        }
        
        .footer-contact i {
            margin-right: 0.5rem;
            opacity: 0.8;
        }
        
        .footer-link {
            color: white;
            opacity: 0.8;
            text-decoration: none;
            display: block;
            margin-bottom: 0.8rem;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }
        
        .footer-link:hover {
            opacity: 1;
            color: white;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            margin-top: 2rem;
            opacity: 0.7;
            font-size: 0.8rem;
        }
        
        .card-img-overlay {
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }
        
        .testimonial-card {
            overflow: hidden;
            position: relative;
            border-radius: 8px;
        }
        
        .testimonial-card img {
            transition: transform 0.3s ease;
        }
        
        .testimonial-card:hover img {
            transform: scale(1.05);
        }
        
        /* Aggiunti per la compatibilità con le altre pagine */
        .page-header {
            background-color: var(--primary);
            color: white;
            padding: 3rem 0;
            margin-top: 76px;
            position: relative;
            overflow: hidden;
        }
        
        .page-header .diagonal-stripes {
            width: 100%;
        }
        
        .page-title {
            font-size: 2rem;
            font-weight: 600;
            position: relative;
            z-index: 2;
        }
        
        .page-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }
        
        .content-section {
            padding: 4rem 0;
        }
        
        .content-title {
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .content-text {
            margin-bottom: 1.5rem;
        }
        
        /* Form styles */
        .form-control {
            padding: 0.6rem 1rem;
            border-radius: 4px;
            border: 1px solid var(--gray-light);
            font-size: 0.9rem;
        }
        
        .form-control:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 0.2rem rgba(209, 24, 79, 0.25);
        }
        
        .form-label {
            font-weight: 500;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        
        /* Card styles for general use */
        .custom-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .custom-card .card-body {
            padding: 1.5rem;
        }
        
        .custom-card .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }
        
        .custom-card .card-text {
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    @include('components.navbar')
    
    @yield('content')
    
    @include('components.footer')
    
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>