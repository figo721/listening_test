<!-- The purpose of the page is to explain the general description and purpose of the listening test. As well, the second slide provides the
data policy and selects the option (“agree”) to proceed with the Listening Test.-->



<?php
session_start();
if (isset($_SESSION['email'])) {
 ?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Listening Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet" />
    <link href="scss/bootstrap-select.css" rel="stylesheet" />
    <link href="scss/variables.scss" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

    <style>
        @charset "UTF-8";
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background-image: url("background.jpg");
            font-family: Helvetica, Arial, sans-serif;
            font-size: 16px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: beige;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-v {
            background: beige;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .bubble {
            background: red;
            color: whitesmoke;
            padding: 0px -15px;
            position: absolute;
            border-radius: 4px;
            left: 20%;
            transform: translateX(-50%);
        }

        .bubble::after {
            content: "";
            position: absolute;
            width: 2px;
            height: 2px;
            background: red;
            top: -1px;
            left: 20%;
        }

        body {
            margin: 2rem;
        }

        .center {
            margin: auto;
            width: 85%;
            border: 2px solid #05061a67;
            padding: 20px;
            text-align: left
        }

        .swiper-pagination-bullet {
            width: 30px;
            height: 30px;
            text-align: bottom;
            line-height: 30px;
            font-size: 13px;
            margin: 0px 20px !important;
            color: black;
            opacity: 3;
            background: rgba(0, 0, 0, 0.2);
        }

        .swiper-pagination-bullet-active {
            color: #fff;
            background: #007aff;
        }

        .hline-bottom {
            padding-bottom: 10px;
            border-bottom: 2px solid #000;
            /* whichever color
        you prefer */
        }

        * {
            font-family: 'Oswald', sans-serif;
        }

        .slidecontainer {
            width: 95%;
        }

        .slider {
            -webkit-appearance: none;
            appearance: none;
            width: 90%;
            height: 25px;
            background: #D3D3D3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #FF0000;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #FF0000;
            cursor: pointer;
        }

        .sliderticks {
            display: flex;
            justify-content: space-between;
            padding: 0 10px;
        }

        .sliderticks p {
            position: relative;
            display: flex;
            justify-content: center;
            text-align: center;
            width: 1px;
            background: #D3D3D3;
            height: 10px;
            line-height: 40px;
            margin: 0 0 20px 0;
        }

        select {
            text-align: center;
            text-align-last: center;
            -moz-text-align-last: center;
        }
    </style>

</head>


<body>
    <!-- Swiper -->
    <div class="swiper mySwiper swiper-h">
        <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:darkblue;">
            Listening Test
        </h1>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <div class="center_1">
              <h2 style="font-weight:bold; color: darkgreen;">General description and purpose of the research</h2>
              <br>
              <p4 style="color:black">This website aims to collect listener’s perceptual data while listening to
                  music for the purpose of carrying out a master thesis program in Bioinformatics at the Johannes Kepler
                  University, Austria. The master thesis aims to develop and advance
                  music recommender systems (MRSs) by the integration of physiological signals and emotional
                  status from the users.
              </p4>
              <div style="margin: 4px 0 4px 0;"></div>
              <h3 style="font-weight:bold; color: darkgreen;"> Task List </h3>
              <div class="center">
                  <!-- Direct to Data Policy page-->
                   <a href="./Intro_policy_web-based.php">0. Data Privacy Policy (~3 minutes)</a><br>
                   <div style="margin: 4px 0 4px 0;"></div>
                    <!-- Direct to Annotation task page-->
                   <a href="./annotation_task.php">1. Annotation Task (~60 minutes)</a><br>
                   <div style="margin: 4px 0 4px 0;"></div>
                   <!-- Direct to Demographic survey page-->
                   <a href="./demographic.php">2. Demographic Survey (~2 minutes)</a><br>
                   <div style="margin: 4px 0 4px 0;"></div>
                   <!-- Direct to Big Five Personality page-->
                   <a href="./bigfive.php">3. Big Five Personality Test (~5 minutes) </a>
                   <div style="margin: 4px 0 4px 0;"></div>
               <hr>
             
              <a href="./General_instruction.pdf">General Instruction</a>
              <div style="margin: 4px 0 4px 0;"></div>
              <a href="./Firefox_settings.pdf">Instruction for Firefox Settings</a>
              <div style="margin: 4px 0 4px 0;"></div>
              <p6>Contact : listening.test.jku@gmail.com </p6>
            </div>
                    

            </div>

            <div class="container">

              <h3 style="font-weight:bold; color: darkgreen;">Hello, <?php echo $_SESSION['email']; ?></h3>
                <div style="margin: 4px 0 4px 0;"></div>
                
                <div class="center">

                   <h6 style="font-weight:bold; color: darkgreen;"> ** General Information ** </h6>
                   <div style="margin: 4px 0 4px 0;"></div>
                   This listening test consists of two phases which are online and on-site phase. You need to complete the online test before the on-site test phase. 
                  <hr>
                
                  <h6 style="font-weight:bold; color: darkgreen;"> ** Information for the online test ** </h6>
                  <div style="margin: 4px 0 4px 0;"></div>
            
                  a) Please complete the online in ascending order 
                  <div style="margin: 4px 0 4px 0;"></div>
                  b) You do not have to complete the annotation task at one time. Click the hyperlink for the annotation task from the Task List
                  <div style="margin: 4px 0 4px 0;"></div>
                  c) Do not forget to save your work before you leave
                  <div style="margin: 4px 0 4px 0;"></div>
                  d) For more detailed instruction, please refer to the General Instruction on this page
                  <div style="margin: 4px 0 4px 0;"></div>
                  e) If you are using Firefox browser and having an issue of playing control, please refer to the instruction for Firefox settings on this page
                  <div style="margin: 4px 0 4px 0;"></div>
                  f) Recommended Browsers : Firefox, Chrome, Opera, Brave
                  <hr>
                  
                  <h6 style="font-weight:bold; color: darkgreen;"> ** Information for the on-site test ** </h6>
                  <div style="margin: 4px 0 4px 0;"></div>
          
                  a) Please Contact : listening.test.jku@gmail.com </br>
        
                </div>
                </div>
              </div>
            </div>
          </div>
          
  
                  
               
       
          

     
        <div class="swiper-pagination "></div>
        <div class="swiper-button-next "></div>
        <div class="swiper-button-prev "></div>

  


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>


    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper ", {
            loop: false,
            resistanceRatio: 0,
            draggable: false,
            simulateTouch: false,
            noSwiping: true,
            noSwipingClass: 'swiper-slide',
            slidesPerView: 1,
            freeMode: false,
            mousewheel: false,
            spaceBetween: 200,
            observer: true,
            observeParents: true,
            pagination: {
                el: ".swiper-pagination ",
                dynamicBullets: true,
                clickable: true,
                renderBullet: function(index, className) {
                    return '<span class=" ' + className + ' ">' + (index + 1) + '</span>';
                },
            },
            hashNavigation: {
                watchState: true,
            },
            navigation: {
                nextEl: ".swiper-button-next ",
                prevEl: ".swiper-button-prev ",
            },
            effect: "coverflow ",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 1,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            on: {
                slideChange: function() {
                    const index_currentSlide = instance_swiper.realIndex;
                    const currentSlide = instance_swiper.slides[index_currentSlide]
                        //
                    currentSlide.style.background = "beige ";
                },
            },
        });

    </script>

</body>

</html>

<?php

}else{
     header("Location: index.php");
     exit();
}
 ?>

