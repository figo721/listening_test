<!-- This page is to explain the general description and purpose of the listening test. As well, the second slide provides the 
data policy and selects the option (“agree”) to proceed with the test.-->

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
            width: 60%;
            border: 2px solid #05061a67;
            padding: 20px;
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
            <div class="center">
                    <h2 style="font-weight:bold; color: darkgreen;">General description and purpose of the research</h2>
                    <br>
                    <p4 style="color:black">This website aims to collect listener’s perceptual data while listening to
                        music for the purpose of carrying out a master thesis program in Bioinformatics at the Johannes Kepler
                        University, Austria. The master thesis aims to develop and advance
                        music recommender systems (MRSs) by the integration of physiological signals and emotional
                        status from the users.
                    </p4>

                </div>
            </div>

            <div class="swiper-slide">
                <section class="page-section" id="contact">
                    <div class="container">

                        <h2 style="font-weight:bold; color: darkgreen;">Data Privacy Policy</h2>

                        <div class="block_1 hline-bottom"></div>

                        <h5>User data and its processing</h5>

                        <p>We define user data as information relating to the users' individual information. For
                            experimental purposes, we will request demographic information regarding gender, age, and
                            background. We define processing as any operation that
                            will be carried out with the user data, e.g. collecting, storing, sharing, analysing, and
                            deleting. By participating in this experiment, you agree that the data will be used only for
                            research purposes in the context of the Master
                            thesis and related scientific publications. The data will be totally anonymous and handled
                            according to the General Data Protection Regulation (GDPR). It might be shared with the
                            research community only for non-commercial purposes
                            upon request. As participant, you have the right of requesting to withdraw your data at any
                            time for any reason.</p>

                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <form action="insert.php" method="POST">
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls mb-0 pb-2">

                                            <p class="lead">Please select the agree option to proceed.</p>
                                            <select name = "privacy" id="0-1" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="Agree">Agree</option>
                                                <option value="Disagree">Disagree</option>

                                            </select>
                                        </div>
                                    </div><br>
                                    <button type="submit" value="Save">Save</button>
                                </form>
                                <br><br><br><br>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
        <div class="swiper-pagination "></div>
        <div class="swiper-button-next "></div>
        <div class="swiper-button-prev "></div>

    </div>


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
