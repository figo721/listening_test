
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="functions.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet"/>
    <link href="scss/bootstrap-select.css" rel="stylesheet"/>
    <link href="scss/variables.scss" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
            Listening Test</h1>       
       <!--BigFive Personality Test-->
        <div class="swiper-slide" style="overflow: scroll;">
                <div class="center_1">
                    <h2 style="font-weight:bold; color: darkgreen;">Big Five Personality Test</h2><br><br>
                    <h6>The test consists of 25 items that you must rate on how true they are about you on a five point scale where 1=0e, 3=Neutral and 5=Agree. It takes about 8 minutes to complete.
                        <br>
                    </h6>
                    <div class="block_1 hline-bottom"></div>
                    <div class="container">
                        <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 "></h2>
                        <!-- Contact Section Form-->
                        <div class="row ">
                            <div class="col-lg-10 mx-auto ">      
                                    <div class="control-group ">
                                    <form action = "insert_3.php" method="POST">
                                        <div class="form-group floating-label-form-group controls mb-0 pb-2 ">
                                            <p class="lead">Q1. I am the life of the party.</p>
                                            <select name = "big_five-1" id="2-1" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option> 
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q2. I feel little concern for others.</p>
                                            <select name = "big_five-2" id="2-2" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>

                                            <p class="lead">Q3. I am always prepared.</p>
                                            <select name = "big_five-3" id="2-3" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>

                                            <p class="lead">Q4. I get stressed out easily.</p>
                                            <select name = "big_five-4" id="2-4" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option> 
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>

                                            <p class="lead">Q5. I have a rich vocabulary.</p>
                                            <select name = "big_five-5" id="2-5" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option> 
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>



                                            <div class="block_1 hline-bottom"></div>

                                            <p class="lead">Q6. I don't talk a lot.</p>
                                            <select name = "big_five-6" id="2-6" required>
                                                <option>Please Choose An Answer</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option> 
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>

                                            <p class="lead">Q7. I am interested in people.</p>
                                            <select name = "big_five-7" id="2-7" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option> 
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select><br><br>


                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q8. I leave my belongings around.</p>
                                            <select name = "big_five-8"id="2-8" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option> 
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select><br><br>

                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q9. I am relaxed most of the time.</p>
                                            <select name = "big_five-9" id="2-9" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select><br><br>


                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q10. I have difficulty understanding abstract ideas.</p>
                                            <select name = "big_five-10" id="2-10" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select><br><br>


                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q11. I insult people.</p>
                                            <select name = "big_five-11" id="2-11" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q12. I pay attention to details.</p>
                                            <select name = "big_five-12" id="2-12" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>


                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q13. I worry about things.</p>
                                            <select name = "big_five-13" id="2-13" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select><br><br>



                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q14. I have a vivid imagination.</p>
                                            <select name="big_five-14" id="2-14" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q15. I keep in the background.</p>
                                            <select name = "big_five-15" id="2-15" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>


                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q16. I sympathize with others' feelings.</p>
                                            <select name = "big_five-16" id="2-16" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q17. I make a mess of things.</p>
                                            <select name = "big_five-17" id="2-17" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>

                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q18. I seldom feel blue.</p>
                                            <select name = "big_five-18" id="2-18" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><br><br>


                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q19. I am not interested in abstract ideas.</p>
                                            <select name = "big_five-19" id="2-19" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select><br><br>


                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q20. I start conversations.</p>
                                            <select name = "big_five-20" id="2-20" required>
                                                    <option>Please Choose An Answer</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><br><br>

                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q21. I am not interested in other people's problems.</p>
                                            <select name = "big_five-21" id="2-21" required>
                                                    <option>Please Choose An Answer</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    </select><br><br>

                                            <div class="block_1 hline-bottom"></div>

                                            <p class="lead">Q22. I get chores done right away.</p>
                                            <select name = "big_five-22" id="2-22" required>
                                                    <option>Please Choose An Answer</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><br><br>



                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q23. I get chores done right away.</p>
                                            <select name = "big_five-23" id="2-23" required>
                                                    <option>Please Choose An Answer</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><br><br>


                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q24. I am easily disturbed.</p>
                                            <select name = "big_five-24" id="2-24" required>
                                                    <option>Please Choose An Answer</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><br><br>


                                            <div class="block_1 hline-bottom"></div>
                                            <p class="lead">Q25. I have excellent ideas.</p>
                                            <select name = "big_five-25" id="2-25" required>
                                                    <option>Please Choose An Answer</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <br><br>
                                            <button type="submit" value="Save">Save</button>
                                            </div>
                                            <br><br><br><br><br><br>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>
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
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>


</body>

</html>