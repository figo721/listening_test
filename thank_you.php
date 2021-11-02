
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Listening Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="jquery.star-rating-svg.js"></script>
    <link rel="stylesheet" type="text/css" href="star-rating-svg.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <script type="text/javascript" src="functions.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet" />
    <link href="scss/bootstrap-select.css" rel="stylesheet" />
    <link href="scss/variables.scss" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="scss/bootstrap-select.css" rel="stylesheet" />
    <link href="scss/variables.scss" rel="stylesheet" />

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
            /* Center slide text vertically */
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
            width: 60%;
            border: 2px solid #05061a67;
            padding: 20px;
        }

        .center_1 {
            margin: auto;
            width: 90%;
            border: 2px solid #05061a67;
            padding: 20px;
        }

        .center_2 {
            margin: auto;
            width: 90%;
            border: none;
            padding: 0%;
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

        .swiper-wrapper_v {
            align-items: center;
            /* add this will all relevant prefixes */
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
            width: 700px;
            text-align: center;
            align-content: top;
            position: relative;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .slider>.dragger {
            background: #8DCA09;
            background: -webkit-linear-gradient(top, #8DCA09, #72A307);
            background: -moz-linear-gradient(top, #8DCA09, #72A307);
            background: linear-gradient(top, #8DCA09, #72A307);
            -webkit-box-shadow: inset 0 2px 2px rgba(255, 255, 255, 0.5), 0 2px 8px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: inset 0 2px 2px rgba(255, 255, 255, 0.5), 0 2px 8px rgba(0, 0, 0, 0.2);
            box-shadow: inset 0 2px 2px rgba(255, 255, 255, 0.5), 0 2px 8px rgba(0, 0, 0, 0.2);
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            border: 1px solid #496805;
            width: 16px;
            height: 16px;
        }

        .slider>.dragger:hover {
            background: -webkit-linear-gradient(top, #8DCA09, #8DCA09);
        }

        .slider>.track,
        .slider>.highlight-track {
            background: #ccc;
            background: -webkit-linear-gradient(top, #bbb, #ddd);
            background: -moz-linear-gradient(top, #bbb, #ddd);
            background: linear-gradient(top, #bbb, #ddd);
            -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            border: 1px solid #aaa;
            height: 4px;
        }

        .slider>.highlight-track {
            background-color: #8DCA09;
            background: -webkit-linear-gradient(top, #8DCA09, #72A307);
            background: -moz-linear-gradient(top, #8DCA09, #72A307);
            background: linear-gradient(top, #8DCA09, #72A307);
            border-color: #496805;
        }

        .range {
            --ticksThickness: 2px;
            --ticksHeight: 30%;
            --ticksColor: silver;
            display: inline-block;
            background: silver;
            background: linear-gradient(to right, var(--ticksColor) var(--ticksThickness), transparent 1px) repeat-x;
            background-size: calc(100%/((var(--max) - var(--min)) / var(--step)) - .1%) var(--ticksHeight);
            background-position: 0 bottom;
            position: relative;
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
    </style>

</head>


<body>
    <!-- Swiper -->
    <div class="swiper mySwiper swiper-h">
        <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:darkblue;">
            Listening Test
        </h1>
        <div class="swiper-wrapper">
            <div class="swiper-slide ">
                <div class="center ">
                    <h2 style="font-weight:bold; color:darkgreen">Thank you for your participation!
                    </h2><br>
                </div>
            </div>
        </div>
        <div class="swiper-pagination "></div>
    </div>



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
        var swiper2 = new Swiper(".mySwiper2", {
            direction: "vertical",
            mousewheel: true,
            slidesPerView: 1,
            allowSlidePrev: true,
            freemode: false,
            spaceBetween: 600,
            speed: 600,
            preloadimages: true,
            preventInteractionOnTransition: true,
            mousewheel: {
                invert: false,
                sensitivity: 5,
                thresholdDelta: 1,
                thresholdTime: 90,
            },

        });
    </script>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->


</body>

</html>

<?php 
session_start();

session_unset();
session_destroy();

header("Location: index.php");
?>