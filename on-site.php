
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Listening Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="jquery.star-rating-svg.js"></script>
    <link rel="stylesheet" type="text/css" href="star-rating-svg.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="scss/bootstrap-select.css" rel="stylesheet" />
    <link href="scss/variables.scss" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
            width: 80%;
        }
        
        .center_1 {
            margin: auto;
            width: 90%;
            border: 2px solid #05061a67;
            padding: 20px;
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

            #plTrack .plSel {
            font-weight: bold;
            }

            .header {
            color: #999;
            border-bottom: 1px solid #999;
            }

    </style>

</head>


<body>
<div class="swiper mySwiper swiper-h">
    <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:darkblue;">
            On-Site Listening
    </h1>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="center_1">  
                    <div>
                        <div class="col-6" id="npTitle"></div>
                        
                        <div class="row">
                            <div class="center">
                                <audio id="audio"  preload="auto" tabindex="0" controls="" type="audio">
                                    Your browser does not support the HTML5 Audio Tag.
                                </audio>
                                    <div id="playing" style="padding:20px 0;">
                                    </div>
                                    <br>
                                <form action="insert_4.php" method="POST">
                                <input type="hidden" name="track_1_onsite" id="track_1">
                                <input type="hidden" name="track_2_onsite" id="track_2">
                                <input type="hidden" name="track_3_onsite" id="track_3">
                                <input type="hidden" name="track_4_onsite" id="track_4">
                                <input type="hidden" name="track_5_onsite" id="track_5">
                                <input type="hidden" name="track_6_onsite" id="track_6">
                                <input type="hidden" name="track_7_onsite" id="track_7">
                                <input type="hidden" name="track_8_onsite" id="track_8">
                                <input type="hidden" name="track_9_onsite" id="track_9">
                                <input type="hidden" name="track_10_onsite" id="track_10">
                                <input type="hidden" name="track_11_onsite" id="track_11">
                                <input type="hidden" name="track_12_onsite" id="track_12">
                                <input type="hidden" name="track_13_onsite" id="track_13">
                                <input type="hidden" name="track_14_onsite" id="track_14">
                                <input type="hidden" name="track_15_onsite" id="track_15">
                                <input type="hidden" name="track_16_onsite" id="track_16">
                                <input type="hidden" name="track_17_onsite" id="track_17">
                                <input type="hidden" name="track_18_onsite" id="track_18">
                                <input type="hidden" name="track_19_onsite" id="track_19">
                                <input type="hidden" name="track_20_onsite" id="track_20">
                                <input type="hidden" name="track_21_onsite" id="track_21">
                                <input type="hidden" name="track_22_onsite" id="track_22">
                                <input type="hidden" name="track_23_onsite" id="track_23">
                                <input type="hidden" name="track_24_onsite" id="track_24">
                                <input type="hidden" name="track_25_onsite" id="track_25">
                                <input type="hidden" name="track_26_onsite" id="track_26">
                                <input type="hidden" name="track_27_onsite" id="track_27">
                                <input type="hidden" name="track_28_onsite" id="track_28">
                                <input type="hidden" name="track_29_onsite" id="track_29">
                                <input type="hidden" name="track_30_onsite" id="track_30">
                                <input type="hidden" name="track_31_onsite" id="track_31">
                                <input type="hidden" name="track_32_onsite" id="track_32">
                                <input type="hidden" name="track_33_onsite" id="track_33">
                                <input type="hidden" name="track_34_onsite" id="track_34">
                                <input type="hidden" name="track_35_onsite" id="track_35">
                                <input type="hidden" name="track_36_onsite" id="track_36">
                                <input type="hidden" name="track_37_onsite" id="track_37">
                                <input type="hidden" name="track_38_onsite" id="track_38">
                                <input type="hidden" name="track_39_onsite" id="track_39">
                                <input type="hidden" name="track_40_onsite" id="track_40">
                                <input type="hidden" name="track_41_onsite" id="track_41">
                                <input type="hidden" name="track_42_onsite" id="track_42">
                                <input type="hidden" name="track_43_onsite" id="track_43">
                                <input type="hidden" name="track_44_onsite" id="track_44">
                                <input type="hidden" name="track_45_onsite" id="track_45">
                                <input type="hidden" name="track_46_onsite" id="track_46">
                                <input type="hidden" name="track_47_onsite" id="track_47">
                                <input type="hidden" name="track_48_onsite" id="track_48">
                                <input type="hidden" name="track_49_onsite" id="track_49">
                                <input type="hidden" name="track_50_onsite" id="track_50">
                                <input type="hidden" name="track_51_onsite" id="track_51">
                                <input type="hidden" name="track_52_onsite" id="track_52">
                                <input type="hidden" name="track_53_onsite" id="track_53">
                                <input type="hidden" name="track_54_onsite" id="track_54">
                                <input type="hidden" name="track_55_onsite" id="track_55">
                                <input type="hidden" name="track_56_onsite" id="track_56">
                                <input type="hidden" name="track_57_onsite" id="track_57">
                                <input type="hidden" name="track_58_onsite" id="track_58">
                                <input type="hidden" name="track_59_onsite" id="track_59">
                                <input type="hidden" name="track_60_onsite" id="track_60">
                                <input type="hidden" name="track_61_onsite" id="track_61">
                                <input type="hidden" name="track_62_onsite" id="track_62">
                                <input type="hidden" name="track_63_onsite" id="track_63">
                                <input type="hidden" name="track_64_onsite" id="track_64">
                                <input type="hidden" name="track_65_onsite" id="track_65">
                                <input type="hidden" name="track_66_onsite" id="track_66">
                                <input type="hidden" name="track_67_onsite" id="track_67">
                                <input type="hidden" name="track_68_onsite" id="track_68">
                                <input type="hidden" name="track_69_onsite" id="track_69">
                                <input type="hidden" name="track_70_onsite" id="track_70">
                                <input type="hidden" name="track_71_onsite" id="track_71">
                                <input type="hidden" name="track_72_onsite" id="track_72">
                                <input type="hidden" name="track_73_onsite" id="track_73">
                                <input type="hidden" name="track_74_onsite" id="track_74">
                                <input type="hidden" name="track_75_onsite" id="track_75">
                                <input type="hidden" name="track_76_onsite" id="track_76">
                                <input type="hidden" name="track_77_onsite" id="track_77">
                                <input type="hidden" name="track_78_onsite" id="track_78">
                                <input type="hidden" name="track_79_onsite" id="track_79">
                                <input type="hidden" name="track_80_onsite" id="track_80">
                                <input type="hidden" name="track_81_onsite" id="track_81">
                                <input type="hidden" name="track_82_onsite" id="track_82">
                                <input type="hidden" name="track_83_onsite" id="track_83">
                                <input type="hidden" name="track_84_onsite" id="track_84">
                                <input type="hidden" name="track_85_onsite" id="track_85">
                                <input type="hidden" name="track_86_onsite" id="track_86">
                                <input type="hidden" name="track_87_onsite" id="track_87">
                                <input type="hidden" name="track_88_onsite" id="track_88">
                                <input type="hidden" name="track_89_onsite" id="track_89">
                                <input type="hidden" name="track_90_onsite" id="track_90">
                                <input type="hidden" name="track_91_onsite" id="track_91">
                                <input type="hidden" name="track_92_onsite" id="track_92">
                                <input type="hidden" name="track_93_onsite" id="track_93">
                                <input type="hidden" name="track_94_onsite" id="track_94">
                                <input type="hidden" name="track_95_onsite" id="track_95">
                                <input type="hidden" name="track_96_onsite" id="track_96">
                                <input type="hidden" name="track_97_onsite" id="track_97">
                                <input type="hidden" name="track_98_onsite" id="track_98">
                                <input type="hidden" name="track_99_onsite" id="track_99">
                                <input type="hidden" name="track_100_onsite" id="track_100">
                                <input type="hidden" name="track_101_onsite" id="track_101">
                                <input type="hidden" name="track_102_onsite" id="track_102">
                                <input type="hidden" name="track_103_onsite" id="track_103">
                                <input type="hidden" name="track_104_onsite" id="track_104">
                                <input type="hidden" name="track_105_onsite" id="track_105">
                                <input type="hidden" name="track_106_onsite" id="track_106">
                                <input type="hidden" name="track_107_onsite" id="track_107">
                                <input type="hidden" name="track_108_onsite" id="track_108">
                                <input type="hidden" name="track_109_onsite" id="track_109">
                                <input type="hidden" name="track_110_onsite" id="track_110">
                                <input type="hidden" name="track_111_onsite" id="track_111">
                                <input type="hidden" name="track_112_onsite" id="track_112">
                                <input type="hidden" name="track_113_onsite" id="track_113">
                                <input type="hidden" name="track_114_onsite" id="track_114">
                                <input type="hidden" name="track_timestamp" id="track_time">
                                <button type="submit" value="Save" id="save">Save</button>
                            </form> 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- The following JS scripts are for playing multiple mp3 files automatically after shuffling the track list. -->
    <script>
    var audio;
    var playlist;
    var tracks;
    var current;
    var music_list = [
        "/songs/blackbear-idfc.mp3",
        "/songs/BEAUTIFUL GIRLS-SEAN KINGSTON.mp3",
        "/songs/I Hope - Gabby Barrett.mp3",
        "/songs/Disturbed - Down With the Sickness Lyric.mp3",
        "/songs/Reckless Love - Cory Asbury.mp3",
        "/songs/Chip - The Real McKenzies.mp3",
        "/songs/Sam_Smith_Stay_With_Me.mp3",
        "/songs/System Of A Down - BYOB.mp3",
        "/songs/The Weeknd - Call Out My Name.mp3",
        "/songs/Vance Joy - Riptide.mp3",
        "/songs/Travis Scott - SICKO MODE-ft Drake.mp3",
        "/songs/Luis Fonsi - Despacito ft. Daddy Yankee.mp3",
        "/songs/The Weeknd - Blinding Lights.mp3",
        "/songs/Freaks-Surf_Curse.mp3",
        "/songs/Avicii-Wake Me Up.mp3",
        "/songs/Avicii-Waiting For Love.mp3",
        "/songs/Juice Wrld - Lucid Dreams.mp3",
        "/songs/Bad Bunny-Yo Perreo Sola Letra.mp3",
        "/songs/Carnival of the Animals_R_125_ XIII_.mp3",
        "/songs/Bad Bunny-Vete(Letra).mp3",
        "/songs/Of Monsters And Men - Little Talks.mp3",
        "/songs/This Town - Niall Horan.mp3",
        "/songs/Drake-Passionfruit.mp3",
        "/songs/All Girls Are The Same-Juice WRLD.mp3",
        "/songs/Linkin Park - One Step Closer.mp3",
        "/songs/Manau - La tribu de Dana.mp3",
        "/songs/Ludovico Einaudi - Nuvole Bianch.mp3",
        "/songs/The Chainsmokers-Closer-ft-Halse.mp3",
        "/songs/Nocturn - Secret Garden.mp3",
        "/songs/Oceans (Where Feet May Fail) - Hillsong United.mp3",
        "/songs/Calvin Harris-Feel So Close.mp3",
        "/songs/Bad Bunny-Daddy Yankee-La Santa(Letra).mp3",
        "/songs/The Police - Every breath you take.mp3",
        "/songs/Hips Dont Lie-Shakira feat Wyclef Jean.mp3",
        "/songs/Harry Styles - Watermelon Sugar.mp3",
        "/songs/Mundian to Bach - Panjabi MC.mp3",
        "/songs/This Is What You Came For - Calvin Harris.mp3",
        "/songs/Billie Eilish-lovely.mp3",
        "/songs/Te he prometido - Leo Dan.mp3",
        "/songs/Lil Peep - Star Shopping.mp3",
        "/songs/Tones and I - Dance Monkey.mp3",
        "/songs/CHOPIN-NOCTURNE NO20 IN C-SHARP MINOR OP POST.mp3",
        "/songs/XXXTENTACION - Jocelyn Flores.mp3",
        "/songs/Cesaria Evora-Sodad.mp3",
        "/songs/Sweater Weather - The Neighbourhood.mp3",
        "/songs/Sean Paul Temperature.mp3",
        "/songs/Lewis Capaldi - Someone You Loved.mp3",
        "/songs/Post Malone - Circles.mp3",
        "/songs/One Kiss-Calvin Harris Dua Lipa.mp3",
        "/songs/Luis Miguel - Hasta Que Me Olvides.mp3",
        "/songs/Mark Ronson - Uptown Funk-ft-Bruno Mar.mp3",
        "/songs/The Weeknd - The Hills.mp3",
        "/songs/Imagine Dragons-Believer.mp3",
        "/songs/Experience - Ludovico Einaudi Daniel Hop.mp3",
        "/songs/chopin-nocturne-op9-no2.mp3",
        "/songs/Chord Overstreet-Hold On.mp3",
        "/songs/System of a down - Toxicity.mp3",
        "/songs/Travis Scott - HIGHEST IN THE ROOM.mp3",
        "/songs/Yellow - Coldplay.mp3",
        "/songs/Chance The Rapper-No Problem.mp3",
        "/songs/Redbone Childish Gambino.mp3",
        "/songs/Mother Mother - Hayloft.mp3",
        "/songs/Axwell Ingrosso-More Than You Know.mp3",
        "/songs/Bruno Mars-Thats What I Like.mp3",
        "/songs/Avenged Sevenfold - Hail to the King.mp3",
        "/songs/River Flows In You.mp3",
        "/songs/Like Im Gonna Lose You - Meghan Trainor.mp3",
        "/songs/Bob Marley-Three Little Birds.mp3",
        "/songs/Dan Shay, Justin Bieber - 10,000 Hours.mp3",
        "/songs/Luke Combs - When It Rains It Pours.mp3",
        "/songs/GHOSTEMANE - MERCURY RETROGRADE.mp3",
        "/songs/twenty one pilots - Heathens.mp3",
        "/songs/travis_scott__hvme_-_goosebumps__remix.mp3",
        "/songs/Kendrick Lamar SZA-All The Stars.mp3",
        "/songs/Summer-Calvin Harris.mp3",
        "/songs/DJ Snake ft Justin Bieber-Let Me Love You.mp3",
        "/songs/Avicii-The Nights.mp3",
        "/songs/Juice WRLD - Robbery.mp3",
        "/songs/Bad Bunny - Callaita.mp3",
        "/songs/Duncan Laurence - Arcade.mp3",
        "/songs/daddy issues-the neighbourhood.mp3",
        "/songs/Ellie Goulding - Love Me Like You Do.mp3",
        "/songs/Maroon 5 - Memories.mp3",
        "/songs/The Real Slim Shady-Eminem.mp3",
        "/songs/Gorillaz - Feel Good Inc.mp3",
        "/songs/Billie Eilish-No Time To Die.mp3",
        "/songs/Martin Garrix - Scared To Be Lonely-feat. Dua Lip.mp3",
        "/songs/Aaron Smith-Dancin.mp3",
        "/songs/Chop Suey-System of a Down.mp3",
        "/songs/Arctic Monkeys-Do I Wanna Know.mp3",
        "/songs/Lauv - I Like Me Better.mp3",
        "/songs/Slipknot-Duality.mp3",
        "/songs/Kanye West - Ultralight Beam.mp3",
        "/songs/Dom La Nena - Batuque.mp3",
        "/songs/Joji-SLOW DANCING IN THE DARK.mp3",
        "/songs/Ozzy osbourne Crazy Train.mp3",
        "/songs/Ed Sheeran - Perfect.mp3",
        "/songs/5 Seconds of Summer-Teeth.mp3",
        "/songs/Miguel - Sure Thing.mp3",
        "/songs/J.Cole-No Role Modelz.mp3",
        "/songs/Franco De Vita - Tu de que vas.mp3",
        "/songs/Bruno Mars-Talking To The Moon.mp3",
        "/songs/Lady Gaga - Always Remember Us This Way Lyric.mp3",
        "/songs/Oops! I Did It Again - Britney Spears.mp3",
        "/songs/Limp Bizkit - Rollin.mp3",
        "/songs/Lady Gaga Bradley Cooper - Shallow.mp3",
        "/songs/Lil Nas X - Old Town Road ft. Billy Ray Cyrus.mp3",
        "/songs/AC_DC-Back In Black.mp3",
        "/songs/Earth Wind Fire-September.mp3",
        "/songs/Kodak Black Travis Scott Offset - ZEZE.mp3",
        "/songs/Billie Eilish - bad guy.mp3",
        "/songs/George Ezra-Shotgun.mp3",
        "/songs/Israel Kamakawiwoole - Somewhere Over the Rainbow.mp3",
        "/songs/Ed Sheeran - Thinking Out Loud.mp3"];
    
    
    var new_list = shuffle(music_list);
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

    const track_1_onsite = document.getElementById("track_1").value;
    const track_2_onsite = document.getElementById("track_2").value;
    const track_3_onsite = document.getElementById("track_3").value;
    const track_4_onsite = document.getElementById("track_4").value;
    const track_5_onsite = document.getElementById("track_5").value;
    const track_6_onsite = document.getElementById("track_6").value;
    const track_7_onsite = document.getElementById("track_7").value;
    const track_8_onsite = document.getElementById("track_8").value;
    const track_9_onsite = document.getElementById("track_9").value;
    const track_10_onsite = document.getElementById("track_10").value;
    const track_11_onsite = document.getElementById("track_11").value;
    const track_12_onsite = document.getElementById("track_12").value;
    const track_13_onsite = document.getElementById("track_13").value;
    const track_14_onsite = document.getElementById("track_14").value;
    const track_15_onsite = document.getElementById("track_15").value;
    const track_16_onsite = document.getElementById("track_16").value;
    const track_17_onsite = document.getElementById("track_17").value;
    const track_18_onsite = document.getElementById("track_18").value;
    const track_19_onsite = document.getElementById("track_19").value;
    const track_20_onsite = document.getElementById("track_20").value;
    const track_21_onsite = document.getElementById("track_21").value;
    const track_22_onsite = document.getElementById("track_22").value;
    const track_23_onsite = document.getElementById("track_23").value;
    const track_24_onsite = document.getElementById("track_24").value;
    const track_25_onsite = document.getElementById("track_25").value;
    const track_26_onsite = document.getElementById("track_26").value;
    const track_27_onsite = document.getElementById("track_27").value;
    const track_28_onsite = document.getElementById("track_28").value;
    const track_29_onsite = document.getElementById("track_29").value;
    const track_30_onsite = document.getElementById("track_30").value;
    const track_31_onsite = document.getElementById("track_31").value;
    const track_32_onsite = document.getElementById("track_32").value;
    const track_33_onsite = document.getElementById("track_33").value;
    const track_34_onsite = document.getElementById("track_34").value;
    const track_35_onsite = document.getElementById("track_35").value;
    const track_36_onsite = document.getElementById("track_36").value;
    const track_37_onsite = document.getElementById("track_37").value;
    const track_38_onsite = document.getElementById("track_38").value;
    const track_39_onsite = document.getElementById("track_39").value;
    const track_40_onsite = document.getElementById("track_40").value;
    const track_41_onsite = document.getElementById("track_41").value;
    const track_42_onsite = document.getElementById("track_42").value;
    const track_43_onsite = document.getElementById("track_43").value;
    const track_44_onsite = document.getElementById("track_44").value;
    const track_45_onsite = document.getElementById("track_45").value;
    const track_46_onsite = document.getElementById("track_46").value;
    const track_47_onsite = document.getElementById("track_47").value;
    const track_48_onsite = document.getElementById("track_48").value;
    const track_49_onsite = document.getElementById("track_49").value;
    const track_50_onsite = document.getElementById("track_50").value;
    const track_51_onsite = document.getElementById("track_51").value;
    const track_52_onsite = document.getElementById("track_52").value;
    const track_53_onsite = document.getElementById("track_53").value;
    const track_54_onsite = document.getElementById("track_54").value;
    const track_55_onsite = document.getElementById("track_55").value;
    const track_56_onsite = document.getElementById("track_56").value;
    const track_57_onsite = document.getElementById("track_57").value;
    const track_58_onsite = document.getElementById("track_58").value;
    const track_59_onsite = document.getElementById("track_59").value;
    const track_60_onsite = document.getElementById("track_60").value;
    const track_61_onsite = document.getElementById("track_61").value;
    const track_62_onsite = document.getElementById("track_62").value;
    const track_63_onsite = document.getElementById("track_63").value;
    const track_64_onsite = document.getElementById("track_64").value;
    const track_65_onsite = document.getElementById("track_65").value;
    const track_66_onsite = document.getElementById("track_66").value;
    const track_67_onsite = document.getElementById("track_67").value;
    const track_68_onsite = document.getElementById("track_68").value;
    const track_69_onsite = document.getElementById("track_69").value;
    const track_70_onsite = document.getElementById("track_70").value;
    const track_71_onsite = document.getElementById("track_71").value;
    const track_72_onsite = document.getElementById("track_72").value;
    const track_73_onsite = document.getElementById("track_73").value;
    const track_74_onsite = document.getElementById("track_74").value;
    const track_75_onsite = document.getElementById("track_75").value;
    const track_76_onsite = document.getElementById("track_76").value;
    const track_77_onsite = document.getElementById("track_77").value;
    const track_78_onsite = document.getElementById("track_78").value;
    const track_79_onsite = document.getElementById("track_79").value;
    const track_80_onsite = document.getElementById("track_80").value;
    const track_81_onsite = document.getElementById("track_81").value;
    const track_82_onsite = document.getElementById("track_82").value;
    const track_83_onsite = document.getElementById("track_83").value;
    const track_84_onsite = document.getElementById("track_84").value;
    const track_85_onsite = document.getElementById("track_85").value;
    const track_86_onsite = document.getElementById("track_86").value;
    const track_87_onsite = document.getElementById("track_87").value;
    const track_88_onsite = document.getElementById("track_88").value;
    const track_89_onsite = document.getElementById("track_89").value;
    const track_90_onsite = document.getElementById("track_90").value;
    const track_91_onsite = document.getElementById("track_91").value;
    const track_92_onsite = document.getElementById("track_92").value;
    const track_93_onsite = document.getElementById("track_93").value;
    const track_94_onsite = document.getElementById("track_94").value;
    const track_95_onsite = document.getElementById("track_95").value;
    const track_96_onsite = document.getElementById("track_96").value;
    const track_97_onsite = document.getElementById("track_97").value;
    const track_98_onsite = document.getElementById("track_98").value;
    const track_99_onsite = document.getElementById("track_99").value;
    const track_100_onsite = document.getElementById("track_100").value;
    const track_101_onsite = document.getElementById("track_101").value;
    const track_102_onsite = document.getElementById("track_102").value;
    const track_103_onsite = document.getElementById("track_103").value;
    const track_104_onsite = document.getElementById("track_104").value;
    const track_105_onsite = document.getElementById("track_105").value;
    const track_106_onsite = document.getElementById("track_106").value;
    const track_107_onsite = document.getElementById("track_107").value;
    const track_108_onsite = document.getElementById("track_108").value;
    const track_109_onsite = document.getElementById("track_109").value;
    const track_110_onsite = document.getElementById("track_110").value;
    const track_111_onsite = document.getElementById("track_111").value;
    const track_112_onsite = document.getElementById("track_112").value;
    const track_113_onsite = document.getElementById("track_113").value;
    const track_114_onsite = document.getElementById("track_114").value;
    
    let time_string =  "";
    init();
    function init(){
        current = 0;
        audio = $('audio');
        audio[0].volume = .30;
        len = new_list.length;
        var startTime = new Date();
        var start_string = startTime.toLocaleString();
        time_string += start_string;
        run(new_list[current],audio[0],current);
        audio[0].addEventListener('ended',function(e){
            current++;
            if(current == len){
                current = 0;
            } 
            setTimeout(function(){
            var startTime = new Date();
            var start_string = startTime.toLocaleString();
            time_string += start_string;
            run(new_list[current],audio[0],current);}
            ,2500);
            }
        );         
    }

    function run(link, player,current){
        player.src = link;
        audio[0].load();
        audio[0].play();
        $('#playing').html(" # " + current + "<li><a>" + link+ "</a></li>"); 
    }

    function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex ;
    // while loop for shuffling
    while (0 !== currentIndex) {

        // select a random element from the remaining elements
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // switch with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
    return array;
    }

    // To assign the tiemstamp value and create a variable to be called the assigned value in "insert_4.php" 
    document.getElementById("track_time").value = time_string;
    const track_timestamp = document.getElementById("track_time").value;
    </script>

</body>

</html>