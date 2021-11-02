<!-- This page is for demographic survey.-->

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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet"/>
    <link href="scss/bootstrap-select.css" rel="stylesheet"/>
    <link href="scss/variables.scss" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>


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
      
        .center_1 {
            margin: auto;
            width: 90%;
            border: 2px solid #05061a67;
            padding: 20px;
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

    <!--Demographic Survey-->
    <div class="swiper mySwiper swiper-h">
    <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:darkblue;">
            Listening Test
    </h1>
        <div class="swiper-wrapper">
         <div class="center_1">
            <div class="swiper-slide">
                <section class="page-section" id="contact">
                    <div class="container">
                        <h2 style="font-weight:bold; color: darkgreen;">Demographic Survey Questions</h2>
                        <br>
                        <h5>Please answer the following questions
                            <br>
                        </h5>
                        <div class="block_1 hline-bottom"></div>

                        <!-- Contact Section Form-->
                        <div class="row">
                            <div class="col-lg-10 mx-auto">

                                    <div class="control-group">
                                    <form action="insert_2.php" method="POST">

                                        <div class="form-group floating-label-form-group controls mb-0 pb-2">

                                            <p class="lead">Q1.What is your gender?</p>
                                            <select name = "demographic_1" id="1-1" required>
                                                <option>Please Choose An Answer</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Others">Others</option>
                                                    <option value="Prefer">Prefer not to say</option>
                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>

                                            <p class="lead">Q2.What is your age?</p>
                                            <select name = "demographic_2" id="1-2" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="under">Under 12 years old</option>
                                                <option value="1217">12-17 years old</option>
                                                <option value="1824">18-24 years old</option>
                                                <option value="25-34">25-34 years old</option>
                                                <option value="3544">35-44 years old</option>
                                                <option value="4554">45-55 years old</option>
                                                <option value="55-64">55-64 years old</option>
                                                <option value="over">64 years or older</option>

                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q3.What kind of methods do you prefer to listen music?
                                            </p>
                                            <select name = "demographic_3" id="1-3" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="online">Online</option>
                                                <option value="offline">Offline</option>
                                                <option value="None">None of them</option>
                                            </select><br><br>
                                        <button type="submit" value="Save">Save</button>
                                        </div>
                                    </form>
                                <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>

</body>

</html>