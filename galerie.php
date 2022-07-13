<?php
session_start();
include('includes/config.php');
?>

<!doctype html>
<html lang="Fr" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">
    <title>ufrmi_Galerie</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./javascript/lightbox.min.css">
    <!-- <link rel="stylesheet" href="./assets/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

</head>



<body>

    <header class="header" id="main">
      
        <div class="navbar ">
            <div class=" btn btn-outline-success">
                <a href="index.php" rel="noopener noreferrer"><i class="fas fa-square-caret-left"></i><i class="fas fa-homs"></i> 
                    <button class="back"></button>
                    
                    </a>
            </div>
          
                <!-- <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><a href="http://" rel="noopener noreferrer">Forums</a></button>
                </div> -->


        </div>
     
        <div class="log">
            <!-- connection -->
            <div class="login" id="modal_Log">
                <a href="./log.php">CONNEXION</a>
            </div>

        </div>
    </header>
    <!-- START MODAL  -->
    <!-- END modal login area  -->

    <!-- START BANNER  -->
    <section class="section">
        <div class="banner promotion background">
            <h3 class="up "><big><strong class="strong ">UFR MI</strong></big><h1 class="big"> GALERIE </h1>
            </h3>
            <h3 class="cookie " id="target_galerie"></h3>
        </div>

    </section>
    <!-- END BANNER -->
    <!-- START SECTION  -->
    <div class="section body_space">
        <div class="nav-right">
            <menu class="menu">

                <button class="menu__item active" style="--bgColorItem: #ff8c00;">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M3.8,6.6h16.4" />
                        <path d="M20.2,12.1H3.8" />
                        <path d="M3.8,17.5h16.4" />
                    </svg>
                </button>

                <button class="menu__item" style="--bgColorItem: #f54888;">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M6.7,4.8h10.7c0.3,0,0.6,0.2,0.7,0.5l2.8,7.3c0,0.1,0,0.2,0,0.3v5.6c0,0.4-0.4,0.8-0.8,0.8H3.8
                    C3.4,19.3,3,19,3,18.5v-5.6c0-0.1,0-0.2,0.1-0.3L6,5.3C6.1,5,6.4,4.8,6.7,4.8z" />
                        <path d="M3.4,12.9H8l1.6,2.8h4.9l1.5-2.8h4.6" />
                    </svg>
                </button>

                <button class="menu__item" style="--bgColorItem: #4343f5;">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M3.4,11.9l8.8,4.4l8.4-4.4" />
                        <path d="M3.4,16.2l8.8,4.5l8.4-4.5" />
                        <path d="M3.7,7.8l8.6-4.5l8,4.5l-8,4.3L3.7,7.8z" />
                </button>

                <button class="menu__item" style="--bgColorItem: #e0b115;">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1
                      C3.9,4.4,4.4,3.9,5.1,3.9z" />
                        <path d="M4.2,9.3h15.6" />
                        <path d="M9.1,9.5v10.3" />
                </button>

                <button class="menu__item" style="--bgColorItem:#65ddb7;">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1
                      C3.9,4.4,4.4,3.9,5.1,3.9z" />
                        <path d="M5.5,20l9.9-9.9l4.7,4.7" />
                        <path
                            d="M10.4,8.8c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6C7.3,8,8,7.3,8.9,7.3C9.7,7.3,10.4,8,10.4,8.8z" />
                    </svg>
                </button>

                <div class="menu__border"></div>

            </menu>

            <div class="svg-container">
                <svg viewBox="0 0 202.9 45.5">
                    <clipPath id="menu" clipPathUnits="objectBoundingBox"
                        transform="scale(0.0049285362247413 0.021978021978022)">
                        <path d="M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7
                      c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5
                      c9.2,3.6,17.6,4.2,23.3,4H6.7z" />
                    </clipPath>
                </svg>
            </div>

        </div>

        <div class="body-section">
            <!-- start section 1  -->
            <section class="section_art">
                <div class="container container_illustra_1">
                    <div class="container-fluid illustra_1">
                        
                    </div>                  
                    <div class="container-fluid">
                        
                          <p class="paragraph block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dolore velit quibusdam cum error, ab aut omnis dolor ipsa optio deleniti voluptatibus nisi necessitatibus et aperiam ex quasi culpa reprehenderit ducimus, dolorum voluptatem odio laboriosam nostrum. Repudiandae, voluptas laudantium?</p>
                    </div>
                </div>
            </section>

            <!-- start SECTION INFO   -->
            <section class="section_info">
                <div class="container container_illustra_2">
                    <div class="container-fluid" style="background-color: #ff0000;
  color:blue;">
                        <p class="paragraph block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dolore velit quibusdam cum error, ab aut omnis dolor ipsa optio deleniti voluptatibus nisi necessitatibus et aperiam ex quasi culpa reprehenderit ducimus, dolorum voluptatem odio laboriosam nostrum. Repudiandae, voluptas laudantium?</p>
                        
                    </div>
                    <div class="container-fluid illustra_2">
                        
                    </div>                  
                </div>

            </section>

            <!-- END SECTION INFO -->


            <!-- start section 2 -->
            <section class="section_info">
                <div class="container container_illustra_3">
                    <div class="container-fluid illustra_3">
                        
                    </div>                  
                    <div class="container-fluid">
                        <p class="paragraph block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam dolore velit quibusdam cum error, ab aut omnis dolor ipsa optio deleniti voluptatibus nisi necessitatibus et aperiam ex quasi culpa reprehenderit ducimus, dolorum voluptatem odio laboriosam nostrum. Repudiandae, voluptas laudantium?</p>
                        
                    </div>
                </div>

            </section>
         
        </div>
    </div>

    <!-- start FOOTER -->

    <footer>


        <div id="instructions" class="footer">

            <video id="my_video_1" class="video-js vjs-default-skin" width="70%" height="100vh" controls preload="none"
                poster='http://video-js.zencoder.com/oceans-clip.jpg'
                data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                <source src="https://www.youtube.com/watch?v=GylToGfe9gA" type='video/mp4' />
                <source src="https://www.youtube.com/watch?v=AgYpigGoGDA" type='video/webm' />
            </video>

            <p>Parcours Licence Master Doctorat <a href="https://www.youtube.com/watch?v=GylToGfe9gA" target="_blank">video.js</a>. Requires v5.0.0 or higher.
            </p>

            <h2>HOW TO SUCCES EXAMS</h2>

            <h2>HOW TO USE:</h2>
            <ol>
                <li>Ecoles doctorales
                    </li>
                    <li>   Laboratoires
                       </li>
                <li> Groupes et Equipes de recherche
                    </li>
                <li>Publications
                    Séminaires, Congrès , colloques et conférences
                    Thèses soutenus et soutenance à venir <a
                        href="https://univ-fhb.edu.ci/">Newsletters inclus</a></li>
            </ol>

            <div class="copyright">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2362.0411283713024!2d-3.987645685510468!3d5.345944986173487!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb5e77ff6589%3A0xd1513dc275b81e13!2sUFR%20MI%20Fili%C3%A8res%20Professionalis%C3%A9es%20MIAGE-GI!5e0!3m2!1sfr!2sci!4v1652964878980!5m2!1sfr!2sci"
                    width="100%" height="600" style="border:0; border-radius: 10px; background-position: fixed;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5><em>By Upcookie</em></h5>
            </div>
            <div class="footer-list">
                <ul>
                    <li>
                        <a href="#">About US</a>
                    </li>
                    <li><a href="#">Contact US</a></li>

                </ul>

            </div>
        </div>

    </footer>
  
    
</body>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/fileinput.js"></script>
  <script src="js/chartData.js"></script>
  <script src="js/main.js"></script>

</html>