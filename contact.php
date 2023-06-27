<?php
if(isset($_POST['submit'])){
    $to = "ada@iokeo.com"; // Adresse e-mail de destination
    $subject = $_POST['objet']; // Sujet de l'e-mail
    $name = $_POST['name']; // Nom de l'expéditeur
    $email = $_POST['email']; // Adresse e-mail de l'expéditeur
    $message = $_POST['message']; // Message de l'e-mail
    
    // Vérification des champs requis
    if(!empty($name) && !empty($email) && !empty($message)){
        $headers = "From: $name <$email>" . "\r\n"; // En-têtes de l'e-mail
        
        // Envoi de l'e-mail
        if(mail($to, $subject, $message, $headers)){
            echo "Message envoyé avec succès";
        } else{
            echo "Une erreur s'est produite lors de l'envoi du message";
        }
    } else{
        echo "Veuillez remplir tous les champs du formulaire";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Iokeo- Transformation digitale</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/k.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
    
            <a class="navbar-brand" href="index.html">
            <img src="img/logom.png" alt="Logo" width="150px">
            </a>
            
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Accueil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.html">À propos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="service.html">Services</a>
                <ul class="dropdown-menu bg-light">
                      <li><a class="dropdown-item" href="service.html#section1">ME & MP</a></li>
                      <li><a class="dropdown-item" href="service.html#section2">Management SI</a></li>
                      <li><a class="dropdown-item" href="service.html#section3">Assistance à la Maitrise</a></li>
                      <li><a class="dropdown-item" href="service.html#section4">Ingénerie Web</a></li>
                      <li><a class="dropdown-item" href="service.html#section5">Microsoft 365</a></li>
                      <li><a class="dropdown-item" href="service.html#section6">GED-GEC-SAE Opensource</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="reference.html">Références</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Publications</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Contact-Nous</p>
                <h1 class="display-5 mb-5">Disponible pour toutes vos questions</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Vous avez des préoccupations?</h3>
                    <p class="mb-4">N'hésitez pas à nous laisser un message avec vos préoccupations, nous repondrions dans les plus brefs délais.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
                                    <label for="name">Votre Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
                                    <label for="email">Votre Adresse E-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
                                    <label for="subject">Objet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px" name="message" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">Contact Details</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Nos bureaux</h6>
                            <span>18, rue 9006 Houénoussou-Sainte-Rita</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Téléphone</h6>
                            <span>(+229) 62 41 97 10</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Adresse électronique</h6>
                            <span>contact@iokeo.com</span>
                        </div>
                    </div>
                    <iframe class="w-100 rounded"
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d991.2660048608421!2d2.4050721999999998!3d6.385739565567627!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbj!4v1687790022043!5m2!1sfr!2sbj"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-1 py-1 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-4">
                    <h4 class="text-white mb-4"><img src="img/logo.png" alt="Logo" width="200px" height="100px" /></h4>
               
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4 class="text-white mb-4">Liens rapides</h4>
                    <a class="btn btn-link" href="index.html">Acceuil</a>
                    <a class="btn btn-link" href="about.html">A propos</a>
                    <a class="btn btn-link" href="index.html">Nos services</a>
                    <a class="btn btn-link" href="reference.html">Références</a>
                    <a class="btn btn-link" href="publications.html">Publications</a>
                    
           
                </div>
                <div class="col-lg-4 col-md-4">
                    <h4 class="text-white mb-4">Contacts</h4>
                    <p>18, rue 9006 Houénoussou-Sainte-Rita </p></br>
                    <p> (+229) 62 41 97 10</p></br>
                    <p>contact@iokeo.com</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-medium text-light" href="https://htmlcodex.com">HTML Codex</a>
                    Distributed By <a class="fw-medium text-light" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>