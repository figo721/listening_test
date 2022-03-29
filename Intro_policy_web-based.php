<!-- This page is for the Introduction and the Data Privacy Policy.-->

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

    <!-- SWIPER Framework -->
    <div class="swiper mySwiper swiper-h">
    
        <div class="swiper-wrapper">
         <div class="center_1">
            <div class="swiper-slide">
                <section class="page-section" id="contact">
                    <div class="container">
                        
                        <h2 style="font-weight:bold; color: darkgreen;">Data Privacy Policy</h2>
                        <div class="block_1 hline-bottom"></div>
                        <!-- User Data Privacy Policy -->
                        <h5>User data and its processing</h5>

                        <p>We define user data as information relating to the users' individual information. For experimental purposes, we will request demographic information regarding gender, age, and
                            background. We define processing as any operation that
                            will be carried out with the user data, e.g. collecting, storing, sharing, analysing, and
                            deleting. By participating in this experiment, you agree that the data will be used only for
                            research purposes in the context of the Master
                            thesis and related scientific publications. The data will be totally anonymous and handled
                            according to the General Data Protection Regulation (GDPR). It might be shared with the
                            research community only for non-commercial purposes
                            upon request. As participant, you have the right of requesting to withdraw your data at any
                            time for any reason.</p>
   
                        </h5>
                        <div class="block_1 hline-bottom"></div>
                        <div class="control-group">
                        <!-- Contact Section Form-->
                        <div class="row">
                            <div class="col-lg-10 mx-auto">

                                    <form action="insert.php" method="POST">

                                        <div class="form-group floating-label-form-group controls mb-0 pb-2">

                                            <p class="lead">Please select the agree to proceed.</p>
                                            <select name = "policy_privacy" id="0-1" required>
                                                <option>Please Choose An Answer</option>
                                                <option value="Agree">Agree</option>
                                                <option value="Disagree">Disagree</option>
                                        
                                            </select><br><br>
                                        <button type="submit" value="Save">Save</button>
                                        </div>
                                    </form>
                                
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
    
         var music_list = ['/songs/Ozzy osbourne Crazy Train.mp3',
        '/songs/Avicii-The Nights.mp3',
        '/songs/blackbear-idfc.mp3',
        '/songs/Luis Fonsi - Despacito ft. Daddy Yankee.mp3',
        '/songs/Lady Gaga Bradley Cooper - Shallow.mp3',
        '/songs/daddy issues-the neighbourhood.mp3',
        '/songs/Lil Peep - Star Shopping.mp3',
        '/songs/Lady Gaga - Always Remember Us This Way Lyric.mp3',
        '/songs/System of a down - Toxicity.mp3',
        '/songs/Limp Bizkit - Rollin.mp3',
        '/songs/Bruno Mars-Talking To The Moon.mp3',
        '/songs/Earth Wind Fire-September.mp3',
        '/songs/twenty one pilots - Heathens.mp3',
        '/songs/The Chainsmokers-Closer-ft-Halse.mp3',
        '/songs/Avenged Sevenfold - Hail to the King.mp3',
        '/songs/Experience - Ludovico Einaudi Daniel Hop.mp3',
        '/songs/Axwell Ingrosso-More Than You Know.mp3',
        '/songs/Harry Styles - Watermelon Sugar.mp3',
        '/songs/DJ Snake ft Justin Bieber-Let Me Love You.mp3',
        '/songs/Miguel - Sure Thing.mp3',
        '/songs/Ludovico Einaudi - Nuvole Bianch.mp3',
        '/songs/Imagine Dragons-Believer.mp3',
        '/songs/Lil Nas X - Old Town Road ft. Billy Ray Cyrus.mp3',
        '/songs/Mark Ronson - Uptown Funk-ft-Bruno Mar.mp3',
        '/songs/Mundian to Bach - Panjabi MC.mp3',
        '/songs/Calvin Harris-Feel So Close.mp3',
        '/songs/GHOSTEMANE - MERCURY RETROGRADE.mp3',
        '/songs/Duncan Laurence - Arcade.mp3',
        '/songs/Chance The Rapper-No Problem.mp3',
        '/songs/Joji-SLOW DANCING IN THE DARK.mp3',
        '/songs/Drake-Passionfruit.mp3',
        '/songs/I Hope - Gabby Barrett.mp3',
        '/songs/BEAUTIFUL GIRLS-SEAN KINGSTON.mp3',
        '/songs/Luis Miguel - Hasta Que Me Olvides.mp3',
        '/songs/Ellie Goulding - Love Me Like You Do.mp3',
        '/songs/CHOPIN-NOCTURNE NO20 IN C-SHARP MINOR OP POST.mp3',
        '/songs/Billie Eilish-No Time To Die.mp3',
        '/songs/Manau - La tribu de Dana.mp3',
        '/songs/Lauv - I Like Me Better.mp3',
        '/songs/AC_DC-Back In Black.mp3',
        '/songs/Cesaria Evora-Sodad.mp3',
        '/songs/Slipknot-Duality.mp3',
        '/songs/Bad Bunny - Callaita.mp3',
        '/songs/Martin Garrix - Scared To Be Lonely-feat. Dua Lip.mp3',
        '/songs/The Police - Every breath you take.mp3',
        '/songs/XXXTENTACION - Jocelyn Flores.mp3',
        '/songs/Redbone Childish Gambino.mp3',
        '/songs/Luke Combs - When It Rains It Pours.mp3',
        '/songs/Bad Bunny-Vete(Letra).mp3',
        '/songs/Like Im Gonna Lose You - Meghan Trainor.mp3',
        '/songs/Bruno Mars-Thats What I Like.mp3',
        '/songs/The Weeknd - Call Out My Name.mp3',
        '/songs/One Kiss-Calvin Harris Dua Lipa.mp3',
        '/songs/Ed Sheeran - Perfect.mp3',
        '/songs/Kanye West - Ultralight Beam.mp3',
        '/songs/Avicii-Waiting For Love.mp3',
        '/songs/Chop Suey-System of a Down.mp3',
        '/songs/Oops! I Did It Again - Britney Spears.mp3',
        '/songs/Bob Marley-Three Little Birds.mp3',
        '/songs/travis_scott__hvme_-_goosebumps__remix.mp3',
        '/songs/Avicii-Wake Me Up.mp3',
        '/songs/Carnival of the Animals_R_125_ XIII_.mp3',
        '/songs/System Of A Down - BYOB.mp3',
        '/songs/Sean Paul Temperature.mp3',
        '/songs/Yellow - Coldplay.mp3',
        '/songs/Kodak Black Travis Scott Offset - ZEZE.mp3',
        '/songs/Ed Sheeran - Thinking Out Loud.mp3',
        '/songs/Franco De Vita - Tu de que vas.mp3',
        '/songs/Lewis Capaldi - Someone You Loved.mp3',
        '/songs/Dom La Nena - Batuque.mp3',
        '/songs/Travis Scott - SICKO MODE-ft Drake.mp3',
        '/songs/George Ezra-Shotgun.mp3',
        '/songs/River Flows In You.mp3',
        '/songs/Te he prometido - Leo Dan.mp3',
        '/songs/Sweater Weather - The Neighbourhood.mp3',
        '/songs/Tones and I - Dance Monkey.mp3',
        '/songs/The Weeknd - Blinding Lights.mp3',
        '/songs/Bad Bunny-Yo Perreo Sola Letra.mp3',
        '/songs/Of Monsters And Men - Little Talks.mp3',
        '/songs/Billie Eilish - bad guy.mp3',
        '/songs/Travis Scott - HIGHEST IN THE ROOM.mp3',
        '/songs/Reckless Love - Cory Asbury.mp3',
        '/songs/Post Malone - Circles.mp3',
        '/songs/The Weeknd - The Hills.mp3',
        '/songs/Oceans (Where Feet May Fail) - Hillsong United.mp3',
        '/songs/Vance Joy - Riptide.mp3',
        '/songs/All Girls Are The Same-Juice WRLD.mp3',
        '/songs/Israel Kamakawiwoole - Somewhere Over the Rainbow.mp3',
        '/songs/Chip - The Real McKenzies.mp3',
        '/songs/This Is What You Came For - Calvin Harris.mp3',
        '/songs/The Real Slim Shady-Eminem.mp3',
        '/songs/Gorillaz - Feel Good Inc.mp3',
        '/songs/Aaron Smith-Dancin.mp3',
        '/songs/Kendrick Lamar SZA-All The Stars.mp3',
        '/songs/Summer-Calvin Harris.mp3',
        '/songs/Linkin Park - One Step Closer.mp3',
        '/songs/Hips Dont Lie-Shakira feat Wyclef Jean.mp3',
        '/songs/Disturbed - Down With the Sickness Lyric.mp3',
        '/songs/J.Cole-No Role Modelz.mp3',
        '/songs/Billie Eilish-lovely.mp3',
        '/songs/Sam_Smith_Stay_With_Me.mp3',
        '/songs/Bad Bunny-Daddy Yankee-La Santa(Letra).mp3',
        '/songs/This Town - Niall Horan.mp3',
        '/songs/5 Seconds of Summer-Teeth.mp3',
        '/songs/Freaks-Surf_Curse.mp3',
        '/songs/Dan Shay, Justin Bieber - 10,000 Hours.mp3',
        '/songs/Maroon 5 - Memories.mp3',
        '/songs/Juice Wrld - Lucid Dreams.mp3',
        '/songs/Arctic Monkeys-Do I Wanna Know.mp3',
        '/songs/Nocturn - Secret Garden.mp3',
        '/songs/Juice WRLD - Robbery.mp3',
        '/songs/Mother Mother - Hayloft.mp3',
        '/songs/Chord Overstreet-Hold On.mp3',
        '/songs/chopin-nocturne-op9-no2.mp3'];
    
        function shuffle(array) {
        var currentIndex = array.length, temporaryValue, randomIndex ;

        // While there remain elements to shuffle...
        while (0 !== currentIndex) {

            // Pick a remaining element...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            // And swap it with the current element.
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }
        return array;
        }

      
        var new_list = shuffle(music_list);
        document.getElementById("track0").src = new_list[0];
        document.getElementById("track1").src = new_list[1];
        document.getElementById("track2").src = new_list[2];
        document.getElementById("track3").src = new_list[3];
        document.getElementById("track4").src = new_list[4];
        document.getElementById("track5").src = new_list[5];
        document.getElementById("track6").src = new_list[6];
        document.getElementById("track7").src = new_list[7];
        document.getElementById("track8").src = new_list[8];
        document.getElementById("track9").src = new_list[9];
        document.getElementById("track10").src = new_list[10];
        document.getElementById("track11").src = new_list[11];
        document.getElementById("track12").src = new_list[12];
        document.getElementById("track13").src = new_list[13];
        document.getElementById("track14").src = new_list[14];
        document.getElementById("track15").src = new_list[15];
        document.getElementById("track16").src = new_list[16];
        document.getElementById("track17").src = new_list[17];
        document.getElementById("track18").src = new_list[18];
        document.getElementById("track19").src = new_list[19];
        document.getElementById("track20").src = new_list[20];
        document.getElementById("track21").src = new_list[21];
        document.getElementById("track22").src = new_list[22];
        document.getElementById("track23").src = new_list[23];
        document.getElementById("track24").src = new_list[24];
        document.getElementById("track25").src = new_list[25];
        document.getElementById("track26").src = new_list[26];
        document.getElementById("track27").src = new_list[27];
        document.getElementById("track28").src = new_list[28];
        document.getElementById("track29").src = new_list[29];
        document.getElementById("track30").src = new_list[30];
        document.getElementById("track31").src = new_list[31];
        document.getElementById("track32").src = new_list[32];
        document.getElementById("track33").src = new_list[33];
        document.getElementById("track34").src = new_list[34];
        document.getElementById("track35").src = new_list[35];
        document.getElementById("track36").src = new_list[36];
        document.getElementById("track37").src = new_list[37];
        document.getElementById("track38").src = new_list[38];
        document.getElementById("track39").src = new_list[39];
        document.getElementById("track40").src = new_list[40];
        document.getElementById("track41").src = new_list[41];
        document.getElementById("track42").src = new_list[42];
        document.getElementById("track43").src = new_list[43];
        document.getElementById("track44").src = new_list[44];
        document.getElementById("track45").src = new_list[45];
        document.getElementById("track46").src = new_list[46];
        document.getElementById("track47").src = new_list[47];
        document.getElementById("track48").src = new_list[48];
        document.getElementById("track49").src = new_list[49];
        document.getElementById("track50").src = new_list[50];
        document.getElementById("track51").src = new_list[51];
        document.getElementById("track52").src = new_list[52];
        document.getElementById("track53").src = new_list[53];
        document.getElementById("track54").src = new_list[54];
        document.getElementById("track55").src = new_list[55];
        document.getElementById("track56").src = new_list[56];
        document.getElementById("track57").src = new_list[57];
        document.getElementById("track58").src = new_list[58];
        document.getElementById("track59").src = new_list[59];
        document.getElementById("track60").src = new_list[60];
        document.getElementById("track61").src = new_list[61];
        document.getElementById("track62").src = new_list[62];
        document.getElementById("track63").src = new_list[63];
        document.getElementById("track64").src = new_list[64];
        document.getElementById("track65").src = new_list[65];
        document.getElementById("track66").src = new_list[66];
        document.getElementById("track67").src = new_list[67];
        document.getElementById("track68").src = new_list[68];
        document.getElementById("track69").src = new_list[69];
        document.getElementById("track70").src = new_list[70];
        document.getElementById("track71").src = new_list[71];
        document.getElementById("track72").src = new_list[72];
        document.getElementById("track73").src = new_list[73];
        document.getElementById("track74").src = new_list[74];
        document.getElementById("track75").src = new_list[75];
        document.getElementById("track76").src = new_list[76];
        document.getElementById("track77").src = new_list[77];
        document.getElementById("track78").src = new_list[78];
        document.getElementById("track79").src = new_list[79];
        document.getElementById("track80").src = new_list[80];
        document.getElementById("track81").src = new_list[81];
        document.getElementById("track82").src = new_list[82];
        document.getElementById("track83").src = new_list[83];
        document.getElementById("track84").src = new_list[84];
        document.getElementById("track85").src = new_list[85];
        document.getElementById("track86").src = new_list[86];
        document.getElementById("track87").src = new_list[87];
        document.getElementById("track88").src = new_list[88];
        document.getElementById("track89").src = new_list[89];
        document.getElementById("track90").src = new_list[90];
        document.getElementById("track91").src = new_list[91];
        document.getElementById("track92").src = new_list[92];
        document.getElementById("track93").src = new_list[93];
        document.getElementById("track94").src = new_list[94];
        document.getElementById("track95").src = new_list[95];
        document.getElementById("track96").src = new_list[96];
        document.getElementById("track97").src = new_list[97];
        document.getElementById("track98").src = new_list[98];
        document.getElementById("track99").src = new_list[99];
        document.getElementById("track100").src = new_list[100];
        document.getElementById("track101").src = new_list[101];
        document.getElementById("track102").src = new_list[102];
        document.getElementById("track103").src = new_list[103];
        document.getElementById("track104").src = new_list[104];
        document.getElementById("track105").src = new_list[105];
        document.getElementById("track106").src = new_list[106];
        document.getElementById("track107").src = new_list[107];
        document.getElementById("track108").src = new_list[108];
        document.getElementById("track109").src = new_list[109];
        document.getElementById("track110").src = new_list[110];
        document.getElementById("track111").src = new_list[111];
        document.getElementById("track112").src = new_list[112];
        document.getElementById("track113").src = new_list[113];

        document.getElementById("track_1").value = new_list[0];
        document.getElementById("track_2").value = new_list[1];
        document.getElementById("track_3").value = new_list[2];
        document.getElementById("track_4").value = new_list[3];
        document.getElementById("track_5").value = new_list[4];
        document.getElementById("track_6").value = new_list[5];
        document.getElementById("track_7").value = new_list[6];
        document.getElementById("track_8").value = new_list[7];
        document.getElementById("track_9").value = new_list[8];
        document.getElementById("track_10").value = new_list[9];
        document.getElementById("track_11").value = new_list[10];
        document.getElementById("track_12").value = new_list[11];
        document.getElementById("track_13").value = new_list[12];
        document.getElementById("track_14").value = new_list[13];
        document.getElementById("track_15").value = new_list[14];
        document.getElementById("track_16").value = new_list[15];
        document.getElementById("track_17").value = new_list[16];
        document.getElementById("track_18").value = new_list[17];
        document.getElementById("track_19").value = new_list[18];
        document.getElementById("track_20").value = new_list[19];
        document.getElementById("track_21").value = new_list[20];
        document.getElementById("track_22").value = new_list[21];
        document.getElementById("track_23").value = new_list[22];
        document.getElementById("track_24").value = new_list[23];
        document.getElementById("track_25").value = new_list[24];
        document.getElementById("track_26").value = new_list[25];
        document.getElementById("track_27").value = new_list[26];
        document.getElementById("track_28").value = new_list[27];
        document.getElementById("track_29").value = new_list[28];
        document.getElementById("track_30").value = new_list[29];
        document.getElementById("track_31").value = new_list[30];
        document.getElementById("track_32").value = new_list[31];
        document.getElementById("track_33").value = new_list[32];
        document.getElementById("track_34").value = new_list[33];
        document.getElementById("track_35").value = new_list[34];
        document.getElementById("track_36").value = new_list[35];
        document.getElementById("track_37").value = new_list[36];
        document.getElementById("track_38").value = new_list[37];
        document.getElementById("track_39").value = new_list[38];
        document.getElementById("track_40").value = new_list[39];
        document.getElementById("track_41").value = new_list[40];
        document.getElementById("track_42").value = new_list[41];
        document.getElementById("track_43").value = new_list[42];
        document.getElementById("track_44").value = new_list[43];
        document.getElementById("track_45").value = new_list[44];
        document.getElementById("track_46").value = new_list[45];
        document.getElementById("track_47").value = new_list[46];
        document.getElementById("track_48").value = new_list[47];
        document.getElementById("track_49").value = new_list[48];
        document.getElementById("track_50").value = new_list[49];
        document.getElementById("track_51").value = new_list[50];
        document.getElementById("track_52").value = new_list[51];
        document.getElementById("track_53").value = new_list[52];
        document.getElementById("track_54").value = new_list[53];
        document.getElementById("track_55").value = new_list[54];
        document.getElementById("track_56").value = new_list[55];
        document.getElementById("track_57").value = new_list[56];
        document.getElementById("track_58").value = new_list[57];
        document.getElementById("track_59").value = new_list[58];
        document.getElementById("track_60").value = new_list[59];
        document.getElementById("track_61").value = new_list[60];
        document.getElementById("track_62").value = new_list[61];
        document.getElementById("track_63").value = new_list[62];
        document.getElementById("track_64").value = new_list[63];
        document.getElementById("track_65").value = new_list[64];
        document.getElementById("track_66").value = new_list[65];
        document.getElementById("track_67").value = new_list[66];
        document.getElementById("track_68").value = new_list[67];
        document.getElementById("track_69").value = new_list[68];
        document.getElementById("track_70").value = new_list[69];
        document.getElementById("track_71").value = new_list[70];
        document.getElementById("track_72").value = new_list[71];
        document.getElementById("track_73").value = new_list[72];
        document.getElementById("track_74").value = new_list[73];
        document.getElementById("track_75").value = new_list[74];
        document.getElementById("track_76").value = new_list[75];
        document.getElementById("track_77").value = new_list[76];
        document.getElementById("track_78").value = new_list[77];
        document.getElementById("track_79").value = new_list[78];
        document.getElementById("track_80").value = new_list[79];
        document.getElementById("track_81").value = new_list[80];
        document.getElementById("track_82").value = new_list[81];
        document.getElementById("track_83").value = new_list[82];
        document.getElementById("track_84").value = new_list[83];
        document.getElementById("track_85").value = new_list[84];
        document.getElementById("track_86").value = new_list[85];
        document.getElementById("track_87").value = new_list[86];
        document.getElementById("track_88").value = new_list[87];
        document.getElementById("track_89").value = new_list[88];
        document.getElementById("track_90").value = new_list[89];
        document.getElementById("track_91").value = new_list[90];
        document.getElementById("track_92").value = new_list[91];
        document.getElementById("track_93").value = new_list[92];
        document.getElementById("track_94").value = new_list[93];
        document.getElementById("track_95").value = new_list[94];
        document.getElementById("track_96").value = new_list[95];
        document.getElementById("track_97").value = new_list[96];
        document.getElementById("track_98").value = new_list[97];
        document.getElementById("track_99").value = new_list[98];
        document.getElementById("track_100").value = new_list[99];
        document.getElementById("track_101").value = new_list[100];
        document.getElementById("track_102").value = new_list[101];
        document.getElementById("track_103").value = new_list[102];
        document.getElementById("track_104").value = new_list[103];
        document.getElementById("track_105").value = new_list[104];
        document.getElementById("track_106").value = new_list[105];
        document.getElementById("track_107").value = new_list[106];
        document.getElementById("track_108").value = new_list[107];
        document.getElementById("track_109").value = new_list[108];
        document.getElementById("track_110").value = new_list[109];
        document.getElementById("track_111").value = new_list[110];
        document.getElementById("track_112").value = new_list[111];
        document.getElementById("track_113").value = new_list[112];
        document.getElementById("track_114").value = new_list[113];


        const track_1_online = new_list[0];
        const track_2_online = new_list[1];
        const track_3_online = new_list[2];
        const track_4_online = new_list[3];
        const track_5_online = new_list[4];
        const track_6_online = new_list[5];
        const track_7_online = new_list[6];
        const track_8_online = new_list[7];
        const track_9_online = new_list[8];
        const track_10_online = new_list[9];
        const track_11_online = new_list[10];
        const track_12_online = new_list[11];
        const track_13_online = new_list[12];
        const track_14_online = new_list[13];
        const track_15_online = new_list[14];
        const track_16_online = new_list[15];
        const track_17_online = new_list[16];
        const track_18_online = new_list[17];
        const track_19_online = new_list[18];
        const track_20_online = new_list[19];
        const track_21_online = new_list[20];
        const track_22_online = new_list[21];
        const track_23_online = new_list[22];
        const track_24_online = new_list[23];
        const track_25_online = new_list[24];
        const track_26_online = new_list[25];
        const track_27_online = new_list[26];
        const track_28_online = new_list[27];
        const track_29_online = new_list[28];
        const track_30_online = new_list[29];
        const track_31_online = new_list[30];
        const track_32_online = new_list[31];
        const track_33_online = new_list[32];
        const track_34_online = new_list[33];
        const track_35_online = new_list[34];
        const track_36_online = new_list[35];
        const track_37_online = new_list[36];
        const track_38_online = new_list[37];
        const track_39_online = new_list[38];
        const track_40_online = new_list[39];
        const track_41_online = new_list[40];
        const track_42_online = new_list[41];
        const track_43_online = new_list[42];
        const track_44_online = new_list[43];
        const track_45_online = new_list[44];
        const track_46_online = new_list[45];
        const track_47_online = new_list[46];
        const track_48_online = new_list[47];
        const track_49_online = new_list[48];
        const track_50_online = new_list[49];
        const track_51_online = new_list[50];
        const track_52_online = new_list[51];
        const track_53_online = new_list[52];
        const track_54_online = new_list[53];
        const track_55_online = new_list[54];
        const track_56_online = new_list[55];
        const track_57_online = new_list[56];
        const track_58_online = new_list[57];
        const track_59_online = new_list[58];
        const track_60_online = new_list[59];
        const track_61_online = new_list[60];
        const track_62_online = new_list[61];
        const track_63_online = new_list[62];
        const track_64_online = new_list[63];
        const track_65_online = new_list[64];
        const track_66_online = new_list[65];
        const track_67_online = new_list[66];
        const track_68_online = new_list[67];
        const track_69_online = new_list[68];
        const track_70_online = new_list[69];
        const track_71_online = new_list[70];
        const track_72_online = new_list[71];
        const track_73_online = new_list[72];
        const track_74_online = new_list[73];
        const track_75_online = new_list[74];
        const track_76_online = new_list[75];
        const track_77_online = new_list[76];
        const track_78_online = new_list[77];
        const track_79_online = new_list[78];
        const track_80_online = new_list[79];
        const track_81_online = new_list[80];
        const track_82_online = new_list[81];
        const track_83_online = new_list[82];
        const track_84_online = new_list[83];
        const track_85_online = new_list[84];
        const track_86_online = new_list[85];
        const track_87_online = new_list[86];
        const track_88_online = new_list[87];
        const track_89_online = new_list[88];
        const track_90_online = new_list[89];
        const track_91_online = new_list[90];
        const track_92_online = new_list[91];
        const track_93_online = new_list[92];
        const track_94_online = new_list[93];
        const track_95_online = new_list[94];
        const track_96_online = new_list[95];
        const track_97_online = new_list[96];
        const track_98_online = new_list[97];
        const track_99_online = new_list[98];
        const track_100_online = new_list[99];
        const track_101_online = new_list[100];
        const track_102_online = new_list[101];
        const track_103_online = new_list[102];
        const track_104_online = new_list[103];
        const track_105_online = new_list[104];
        const track_106_online = new_list[105];
        const track_107_online = new_list[106];
        const track_108_online = new_list[107];
        const track_109_online = new_list[108];
        const track_110_online = new_list[109];
        const track_111_online = new_list[110];
        const track_112_online = new_list[111];
        const track_113_online = new_list[112];
        const track_114_online = new_list[113];
    


    
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>

</body>

</html>


