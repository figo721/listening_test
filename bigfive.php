<!-- This is for the Big-Five Personality Questions page of this project -->
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
            box-sizing: border-box;
        }

        .slider {
            -webkit-appearance: none;
            appearance: none;
            width: 50%;
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
            display:none;
            justify-content: center;
            text-align: center;
            width: 1px;
            background: #D3D3D3;
            height: 10px;
            line-height: 40px;
            margin: 0 0 20px 0;
        }
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #1690A7;
        font-family: 'Poppins', sans-serif;
        } 
        nav a.navbar-brand{
            color: #fff;
            font-size: 30px!important;
            font-weight: 500;
        }
        button a{
            color: #6665ee;
            font-weight: 500;
        }
        button a:hover{
            text-decoration: none;
        }
        h1{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            text-align: center;
            transform: translate(-50%, -50%);
            font-size: 50px;
            font-weight: 600;
        }

    </style>

</head>


<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">Listening Test</a>
    </nav>

    <!-- Swiper -->
    <div class="swiper mySwiper swiper-h">
          
       <!--BigFive Personality Test-->
        <div class="swiper-slide" style="overflow: scroll;">
                <div class="center_1">
                    <h2 style="font-weight:bold; color: darkgreen;">Big Five Personality Test</h2><br><br>
                    <h6>The test consists of 10 items that you must rate on how true they are about you on a seven point scale where 1=Strongly disagree, 4=Neither agree nor disagree and 7=Strongly agree. It takes about 5 minutes to complete.
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
                                        <div class="slidecontainer">
                                            <h align="Center"><br>
                                                <p class="lead">Q1. I see myself as extraverted, enthusiastic.</p>
                                            <input type="range" name = "bigfive-1" style="width: 100%;" value="4" min="1" max="7" step="1" class="slider"ß id="bigfive1" required>     
                                            <div class="sliderticks">
                                            <p>0</p>
                                            <p>1</p>
                                            <P>2</P>
                                            <p>3</p>
                                            <p>4</p>
                                            <p>5</p>
                                            <p>6</p>
                                            <p>7</p>
                                            </div>
                                            <p>Value: <span id="bigfive-1"></span></p>
                                        </span>
                                                    </h>
                                        </div>

                                        <div class="block_1 hline-bottom"></div>
                                        <div class="slidecontainer">
                                            <h align="Center"><br>
                                                <p class="lead">Q2. I see myself as critical, quarrelsome.</p>
                                                <input type="range" name = "bigfive-2" style="width: 100%;" value="4" min="1" max="7" step="1" class="slider"ß id="bigfive2" required>     
                                            <div class="sliderticks">
                                            <p>0</p>
                                            <p>1</p>
                                            <P>2</P>
                                            <p>3</p>
                                            <p>4</p>
                                            <p>5</p>
                                            <p>6</p>
                                            <p>7</p>
                                            </div>
                                            <p>Value: <span id="bigfive-2"></span></p>
                                        </span>
                                                    </h>
                                        </div>

                                        <div class="block_1 hline-bottom"></div>
                                        <div class="slidecontainer">
                                            <h align="Center"><br>
                                                <p class="lead">Q3. I see myself as dependable, self-disciplined.</p>
                                                <input type="range" name = "bigfive-3" style="width: 100%;" value="4" min="1" max="7" step="1" class="slider"ß id="bigfive3" required>     
                                            <div class="sliderticks">
                                            <p>0</p>
                                            <p>1</p>
                                            <P>2</P>
                                            <p>3</p>
                                            <p>4</p>
                                            <p>5</p>
                                            <p>6</p>
                                            <p>7</p>
                                            </div>
                                            <p>Value: <span id="bigfive-3"></span></p>
                                        </span>
                                                    </h>
                                        </div>


                                        <div class="block_1 hline-bottom"></div>
                                        <div class="slidecontainer">
                                            <h align="Center"><br>
                                                <p class="lead">Q4. I see myself as anxious, easily upset.</p>
                                                <input type="range" name = "bigfive-4" style="width: 100%;" value="4" min="1" max="7" step="1" class="slider"ß id="bigfive4" required>     
                                            <div class="sliderticks">
                                            <p>0</p>
                                            <p>1</p>
                                            <P>2</P>
                                            <p>3</p>
                                            <p>4</p>
                                            <p>5</p>
                                            <p>6</p>
                                            <p>7</p>
                                            </div>
                                            <p>Value: <span id="bigfive-4"></span></p>
                                        </span>
                                                    </h>
                                        </div>

                                        <div class="block_1 hline-bottom"></div>
                                        <div class="slidecontainer">
                                            <h align="Center"><br>
                                                <p class="lead">Q5. I see myself as open to new experiences, complex.</p>
                                                <input type="range" name = "bigfive-5" style="width: 100%;" value="4" min="1" max="7" step="1" class="slider"ß id="bigfive5" required>     
                                            <div class="sliderticks">
                                            <p>0</p>
                                            <p>1</p>
                                            <P>2</P>
                                            <p>3</p>
                                            <p>4</p>
                                            <p>5</p>
                                            <p>6</p>
                                            <p>7</p>
                                            </div>
                                            <p>Value: <span id="bigfive-5"></span></p>
                                        </span>
                                            </h>
                                        </div>

                                        <div class="block_1 hline-bottom"></div>
                                        <div class="slidecontainer">
                                            <h align="Center"><br>
                                                <p class="lead">Q6. I see myself as reserved, quiet a lot.</p>
                                                <input type="range" name = "bigfive-6" style="width: 100%;" value="4" min="1" max="7" step="1" class="slider"ß id="bigfive6" required>     
                                            <div class="sliderticks">
                                            <p>0</p>
                                            <p>1</p>
                                            <P>2</P>
                                            <p>3</p>
                                            <p>4</p>
                                            <p>5</p>
                                            <p>6</p>
                                            <p>7</p>
                                            </div>
                                            <p>Value: <span id="bigfive-6"></span></p>
                                        </span>
                                            </h>
                                        </div>


                                        <div class="block_1 hline-bottom"></div>
                                        <div class="slidecontainer">
                                            <h align="Center"><br>
                                                <p class="lead">Q7. I see myself as sympathetic, warm.</p>
                                                <input type="range" name = "bigfive-7" style="width: 100%;" value="4" min="1" max="7" step="1" class="slider"ß id="bigfive7" required>     
                                            <div class="sliderticks">
                                            <p>0</p>
                                            <p>1</p>
                                            <P>2</P>
                                            <p>3</p>
                                            <p>4</p>
                                            <p>5</p>
                                            <p>6</p>
                                            <p>7</p>
                                            </div>
                                            <p>Value: <span id="bigfive-7"></span></p>
                                        </span>
                                            </h>
                                        </div>

                                        <div class="block_1 hline-bottom"></div>
                                        <div class="slidecontainer">
                                            <h align="Center"><br>
                                                <p class="lead">Q8. I see myself as disorganized, careless.</p>
                                                <input type="range" name = "bigfive-8" style="width: 100%;" value="4" min="1" max="7" step="1" class="slider"ß id="bigfive8" required>     
                                            <div class="sliderticks">
                                            <p>0</p>
                                            <p>1</p>
                                            <P>2</P>
                                            <p>3</p>
                                            <p>4</p>
                                            <p>5</p>
                                            <p>6</p>
                                            <p>7</p>
                                            </div>
                                            <p>Value: <span id="bigfive-8"></span></p>
                                        </span>
                                            </h>
                                        </div>

                                        <div class="block_1 hline-bottom"></div>
                                        <div class="slidecontainer">
                                            <h align="Center"><br>
                                                <p class="lead">Q9. I see myself as calm, emotionally stable.</p>
                                                <input type="range" name = "bigfive-9" style="width: 100%;" value="4" min="1" max="7" step="1" class="slider"ß id="bigfive9" required>     
                                            <div class="sliderticks">
                                            <p>0</p>
                                            <p>1</p>
                                            <P>2</P>
                                            <p>3</p>
                                            <p>4</p>
                                            <p>5</p>
                                            <p>6</p>
                                            <p>7</p>
                                            </div>
                                            <p>Value: <span id="bigfive-9"></span></p>
                                        </span>
                                            </h>
                                        </div>


                                        <div class="block_1 hline-bottom"></div>
                                        <div class="slidecontainer">
                                            <h align="Center"><br>
                                                <p class="lead">Q10. I see myself as conventional, uncreative.</p>
                                                <input type="range" name = "bigfive-10" style="width: 100%;" value="4" min="1" max="7" step="1" class="slider"ß id="bigfive10" required>     
                                            <div class="sliderticks">
                                            <p>0</p>
                                            <p>1</p>
                                            <P>2</P>
                                            <p>3</p>
                                            <p>4</p>
                                            <p>5</p>
                                            <p>6</p>
                                            <p>7</p>
                                            </div>
                                            <p>Value: <span id="bigfive-10"></span></p>
                                        </span>
                                            </h>
                                        </div>

                                            <br>
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
    <!-- The following code is to represent each value of the scale slider of each personality question. -->
    <script>
        var slider1 = document.getElementById("bigfive1");
        var demo1 = document.getElementById("bigfive-1");
        demo1.innerHTML = slider1.value;
        slider1.oninput = function() {
            vq1 = demo1.innerHTML = this.value;
        }
        var slider2 = document.getElementById("bigfive2");
        var demo2 = document.getElementById("bigfive-2");
        demo2.innerHTML = slider2.value;
        slider2.oninput = function() {
            vq2 = demo2.innerHTML = this.value;
        }
        var slider3 = document.getElementById("bigfive3");
        var demo3 = document.getElementById("bigfive-3");
        demo3.innerHTML = slider3.value;
        slider3.oninput = function() {
            vq3 = demo3.innerHTML = this.value;
        }
        var slider4 = document.getElementById("bigfive4");
        var demo4 = document.getElementById("bigfive-4");
        demo4.innerHTML = slider4.value;
        slider4.oninput = function() {
            vq4 = demo4.innerHTML = this.value;
        }
        var slider5 = document.getElementById("bigfive5");
        var demo5 = document.getElementById("bigfive-5");
        demo5.innerHTML = slider5.value;
        slider5.oninput = function() {
            vq5 = demo5.innerHTML = this.value;
        }
        var slider6 = document.getElementById("bigfive6");
        var demo6 = document.getElementById("bigfive-6");
        demo6.innerHTML = slider6.value;
        slider6.oninput = function() {
            vq6 = demo6.innerHTML = this.value;
        }
        var slider7 = document.getElementById("bigfive7");
        var demo7 = document.getElementById("bigfive-7");
        demo7.innerHTML = slider7.value;
        slider7.oninput = function() {
            vq7 = demo7.innerHTML = this.value;
        }
        var slider8 = document.getElementById("bigfive8");
        var demo8 = document.getElementById("bigfive-8");
        demo8.innerHTML = slider8.value;
        slider8.oninput = function() {
            vq8 = demo8.innerHTML = this.value;
        }
        var slider9 = document.getElementById("bigfive9");
        var demo9 = document.getElementById("bigfive-9");
        demo9.innerHTML = slider9.value;
        slider9.oninput = function() {
            vq9 = demo9.innerHTML = this.value;
        }
        var slider10 = document.getElementById("bigfive10");
        var demo10 = document.getElementById("bigfive-10");
        demo10.innerHTML = slider10.value;
        slider10.oninput = function() {
            vq10 = demo10.innerHTML = this.value;
        }
    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>


</body>

</html>