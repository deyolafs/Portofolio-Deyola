<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Deyola Fadwa Shifana</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"/>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #EFF3EA;
            color: #333;
        }

        .about-section, .portfolio-section {
            padding: 60px 0;
        }

        .about-section {
            background-color: #FFFDF0;
        }

        .portfolio-section {
            background-color: #FFF2C2;
        }

        .card {
            background-color: #D9DFC6;
            border: none;
            border-radius: 12px;
        }

        .card-title {
            color: #333;
        }

        .btn-primary {
            background-color: #EFF3EA;
            border-color: #D9DFC6;
            color: #333;
        }

        .btn-primary:hover {
            background-color: #D9DFC6;
            border-color: #EFF3EA;
            color: #000;
        }

        .btn-info {
            background-color: #FFFDF0;
            border-color: #FFF2C2;
            color: #333;
        }

        .btn-info:hover {
            background-color: #EFF3EA;
            border-color: #D9DFC6;
            color: #000;
        }

        .card:hover {
            transform: scale(1.05);
            transition: 0.3s;
        }

        h2 {
            color: #333;
            font-weight: bold;
        }

        .welcome-section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .profile-image {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .welcome-text {
            animation: fadeIn 2s ease-in-out;
        }

        @media (max-width: 768px) {
            .welcome-section {
                flex-direction: column;
                padding: 20px;
            }

            .profile-image {
                width: 120px;
                height: 120px;
            }

            h1 {
                font-size: 1.5rem;
            }

            h4 {
                font-size: 1rem;
            }
        }


        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-cta {
            background: linear-gradient(to right, #f6d365, #fda085);
            color: #fff;
            border: none;
            padding: 12px 30px;
            font-size: 1rem;
            text-transform: uppercase;
            border-radius: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-cta:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .btn-cta {
                background: linear-gradient(to right, #f6d365, #fda085);
                color: #fff;
                border: none;
                padding: 10px 20px; /* Padding lebih kecil untuk layar kecil */
                font-size: 0.6rem; /* Ukuran font lebih kecil */
                text-transform: uppercase;
                border-radius: 25px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .btn-cta:hover {
                transform: scale(1.05); /* Hover effect lebih halus */
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15); /* Bayangan lebih ringan */
            }
        }

        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-body p {
            font-size: 1rem;
            font-weight: normal;
        }
        
        nav {
            background-color: #FFFDF0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .navbar-brand {
            font-weight: bold;
            color: #333;
        }

        .nav-link {
            color: #333;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #f6d365;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 10px;
            }

            .navbar-nav {
                text-align: center;
            }
        }

        /* Section Skills */
        .skills-section {
            background-color: #f9f9f9;
            padding: 60px 0;
        }

        .skills-section .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .skills-section .card-body {
            padding: 30px;
        }

        .skills-section h5.card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }


        .skills-section ul li {
            font-size: 0.8rem;
            color: #555;
            margin: 10px 0;
            line-height: 1.6;
            position: relative;
        }

        /* Menambahkan efek hover pada list item */
        .skills-section ul li:hover {
            color: #ff8c00;
            transition: color 0.3s ease;
        }

        .skills-section ul li:hover::before {
            transform: scale(1.5); /* Membuat dot menjadi lebih besar saat hover */
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .skills-section .col-md-6 {
                margin-bottom: 20px;
            }
        }

        /* Modal styling */
        .modal-dialog {
            max-width: 900px;
            margin: 30px auto;
        }

        .modal-body {
            padding: 2rem;
        }

        #projectTitle {
            font-size: 1.5rem;
            font-weight: bold;
        }

        #projectDescription {
            font-size: 1rem;
            margin-bottom: 20px;
        }
        
        /* Modal */
        .modal-content {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Gambar dalam modal */
        .project-image img {
            width: 100%; /* Mengisi lebar kontainer */
            height: 200px; /* Tentukan tinggi tetap untuk gambar yang lebih ramping */
            object-fit: cover; /* Menjaga proporsi gambar dan mengisi kontainer */
            transition: transform 0.3s ease-in-out; /* Efek transisi zoom */
        }

        .project-image img:hover {
            transform: scale(1.05); /* Zoom-in efek saat hover */
        }

        /* Judul Proyek */
        .project-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #007bff;
        }

        /* List Deskripsi Pekerjaan */
        .modal-body ul {
            padding-left: 20px;
            font-size: 1rem;
        }

        .modal-body ul li {
            margin-bottom: 10px;
        }

        .modal-body ul li strong {
            color:rgb(247, 96, 37);
        }

        /* Tombol Lihat Website */
        .btn-primary {
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }


        /* Carousel di dalam card */
        .card-body {
            padding: 20px;
        }

        /* Carousel styling */
        .carousel-inner {
            position: relative;
        }

        .carousel-inner img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }

        .carousel-inner img {
            width: 100%;
            height: 200px; /* Ukuran gambar */
            object-fit: cover; /* Agar gambar mengisi ruang dengan baik */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #007bff;
            border-radius: 50%;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

    </style>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Deyola Fadwa Shifana</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pengalaman">Pengalaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Portofolio</a>
                    </li>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cv">CV</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
