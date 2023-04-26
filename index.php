<?php
session_start();
    $dsn = 'mysql:host=localhost;dbname=fenessalem';
    $username = 'root';
    $password = 'ABJG2ygLrVd_o@yp';
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }
     /* $sql = "SELECT * FROM users order by id DESC";  */
     $sql = "SELECT users.*, images.* FROM users inner join images 
            WHERE users.id_user=images.id order by images.id_image DESC";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FEN-ESSALEM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
.image{
  position: relative;
}
.txt{
  position: absolute;
  top: 35%;
  left:20%;
  transform: translate(-20%,-20%);
}

h6{
  color: white;
  font-size: 14px;
}
.nomprenom {
  color: black;
  font-weight: bold;
}
#jaime{
  color: blue;
  font-weight: bold;
  margin-left: 65%;
}
.photologo{
margin-left: 30%;
margin-bottom: 5%;
}
p{
  text-align: justify;
}
#imag{
  width: 400px;
  height: 350px;
  max-height: 400px;
  top: 5%;
}

.modifdata li{
  list-style: none;
  display: inline-flex;
  justify-content: left;
}

</style>
<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="assets/img/logo.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">فن السلام</a></h1>
        <?php 
          if(isset($_SESSION['mail']))
          { ?> 
            <h6>
  <br> <?php
            echo 'Bienvenu : '.$_SESSION['nom'].' '.$_SESSION['prenom'];
            ?>  
            <br>
            </h6>
              <?php
          }?>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.skype.com" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <!-- <li><a href="#hero1" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li> -->
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>à propos</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Résumé</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Photos</span></a></li>          
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>          
          <?php 
            if(isset($_SESSION['mail']))
            { ?> 
              <li><a href="publication.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Publier</span></a></li>
              <li><a href="logout.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Déconnection</span></a></li>              
              <?php
            }
          ?>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero">  -->
    
  
  <!-- End Hero --> 
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">           
      <div class="container">
        <div class="section-title">
        <div class="photologo">
          <img src="assets/img/logo.jpg" alt="" class="img-fluid rounded-circle" width="45%" height="45%"> 
        </div>
          <h2>À propos</h2>
          <div class="hero-container" data-aos="fade-in">                         
            <h1>M. BOUSBICI Zoheir</h1>
            <p>aïkidoka 4eme DAN <span class="typed" data-typed-items="directeur technique, Entraineur"></span></p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Site officiel de BOUSBICI Zoheir, 4<sup>ème</sup> DAN</h3>
            <p class="fst-italic">
            une grande expérience et une connaissance approfondie dans l'aïkido et la discipline .
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Date de naissance:</strong> <span>1 Août 1983</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Facebook:</strong> <span><a href="https://www.facebook.com/zohir.bousbici">https://www.facebook.com/zohir.bousbici</a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Téléphone:</strong> <span>+213 770 409 828</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Ville:</strong> <span>Oran, Algérie</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>40</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>4<sup>ème</sup> DAN</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>zbousbici@gmail.com</span></li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li> -->
                </ul>
              </div>
            </div>            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">
        <div class="section-title">
          <h2>Résumé</h2>
          <p>Dans ce résumé, je présente les caractéristiques d'un aïkidoka, un pratiquant régulier d'aïkido. Les aikidokas ont souvent une grande expérience et une connaissance approfondie de cette discipline, avec des niveaux de compétence allant des débutants aux maîtres. Contrairement à d'autres arts martiaux, l'aïkido se concentre sur la recherche de l'harmonie et la non-violence plutôt que sur la compétition. Les aikidokas apprennent à neutraliser leur adversaire sans lui causer de blessures graves. Les aikidokas sont connus pour leur concentration, leur calme et leur humilité. En pratiquant l'aïkido, ils apprennent à contrôler leur respiration et leur mouvement, ce qui peut être utile pour gérer le stress et les situations difficiles de la vie quotidienne. Enfin, les aikidokas apprennent l'humilité et le respect envers leurs professeurs et leurs pairs dans leur long apprentissage de l'aïkido.</p>          
        </div>        
      </div>
    </section>
    <!-- End Resume Section -->
    <!-- ======= Portfolio Section ======= -->
    
  <section id="portfolio" class="portfolio section-bg">
  
    <div class="container">
      <div class="section-title">
        <h2>Photos</h2>
        <p></p>                               
      </div>   
      
<!-- _________________________________________________________________________________________________________________ -->                                    
<div class="row portfolio-container data-aos='fade-up'" data-aos-delay="100" display="flex"
  align-items="stretch">
          <?php foreach ($users as $user) {?>   
      <div class="col-lg-4 col-md-6 portfolio-item filter-app" >              
          <div class="portfolio-wrap">                                           
              <div class="image">
                <img float="left" src="data:<?php echo $user['photo_name']; ?>;base64,<?php echo base64_encode($user['photo_data']); ?>" class="img-fluid rounded-circle" display="block" width="12%" height="12%" alt="">
                  <div class="txt">
                    <h6 class="nomprenom"><?php echo "{$user['nom']}".' '."{$user['prenom']}"; ?></h6>
                  </div>
              </div>
              <p id="text_description"><?php echo $user['description'] ; ?> </p>
              <img id="imag" src="data:<?php echo $user['image_name']; ?>;base64,<?php echo base64_encode($user['image_data']); ?>" class="img-fluid rounded" object-fit="cover" alt="">                    
              <div class="portfolio-links">
                  <a href="data:<?php echo $user['image_name']; ?>;base64,<?php echo base64_encode($user['image_data']); ?>" alt="" data-gallery="portfolioGallery" class="portfolio-lightbox" title="" ><i class="bx bx-plus"></i></a>
              </div>
          </div>
                <a href="index.php">
                <i class="glyphicon glyphicon-thumbs-up" text-lign="right" id="jaime">J'aime</i>
                </a>
                <?php 
            if(isset($_SESSION["id_user"]) == $user['id_user'])
              {
                ?>
                  <div class="modifdata">
                    <ul>
                      <li>
                        <form action="delete-publication.php" method="post" enctype="multipart/form-data">
                            <button id="btn1" onclick="return confirm('Etes-vous sur de vouloir supprimer cette publication ?')" 
                            type="submit" name="delete_publication" value="<?=$user['id_image'];?>" 
                            class="btn btn-danger btn-sm">
                              <i class="fa fa-trash">Supp</button>
                            </button>
                        </form>  
                      </li>
                      <li>
                        <form action="modifier_publication.php" method="post" enctype="multipart/form-data">
                              <button id="btn2" type="submit" name="modifier_publication" 
                                      value="<?=$user['id_image'];?>" class="btn btn-warning btn-sm">
                                      <i class="fa fa-trash">Modif</button>
                              </button>
                        </form>
                      </li>
                    </ul> 
                  </div>                   
                <?php
              }
            ?>
                <!--<i src="index.php" class="glyphicon glyphicon-thumbs-up"> J'aime</i>-->
            </div>
                <?php } ?>                
      </div>
<!-- _________________________________________________________________________________________________________________ -->                                    
    </div>
  </section><!-- End Portfolio Section -->
    <!-- ======= Services Section ======= -->    
    </section><!-- End Services Section -->
    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>
        <div class="row" data-aos="fade-in">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localisation:</h4>
                <p>Maison de jeunes Mogdad Mohamed Bir El Djir, Oran, Algérie</p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>zbousbici@gmail.com</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone :</h4>
                <p>+213 770 409 828</p>
              </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.8948124604026!2d-0.5727093849289504!3d35.728805380183175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7e62d086de2619%3A0x783e8bf52a343168!2smaison%20de%20jeunes%20Mogdad%20Mohamed!5e0!3m2!1sen!2sdz!4v1678960062741!5m2!1sen!2sdz" 
                  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Fen-essalem</span></strong>
          </div>
          <div class="credits">
            Designed by <a href="user.php" style="color:dodgerblue">RH</a>
          </div>
        </div>
      </footer><!-- End  Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <!-- Vendor JS Files -->
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/typed.js/typed.min.js"></script>
      <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
      

</body>

</html>