<!-- This page is to query the database to update the filed of privacy which is from the page of "Intro_policy_web-based.php"  -->
<?php include "connection.php";
session_start();

// Array of the playlist
$music_list = array('/songs/Miguel - Sure Thing.mp3',
 '/songs/Earth Wind Fire-September.mp3',
 '/songs/Luis Miguel - Hasta Que Me Olvides.mp3',
 '/songs/River Flows In You.mp3',
 '/songs/Harry Styles - Watermelon Sugar.mp3',
 '/songs/Ed Sheeran - Perfect.mp3',
 '/songs/Chip - The Real McKenzies.mp3',
 '/songs/Luke Combs - When It Rains It Pours.mp3',
 '/songs/AC_DC-Back In Black.mp3',
 '/songs/Maroon 5 - Memories.mp3',
 '/songs/Kendrick Lamar SZA-All The Stars.mp3',
 '/songs/System of a down - Toxicity.mp3',
 '/songs/Chance The Rapper-No Problem.mp3',
 '/songs/Mundian to Bach - Panjabi MC.mp3',
 '/songs/Billie Eilish-lovely.mp3',
 '/songs/Carnival of the Animals_R_125_ XIII_.mp3',
 '/songs/Oceans (Where Feet May Fail) - Hillsong United.mp3',
 '/songs/Chord Overstreet-Hold On.mp3',
 '/songs/Lady Gaga - Always Remember Us This Way Lyric.mp3',
 '/songs/Mark Ronson - Uptown Funk-ft-Bruno Mar.mp3',
 '/songs/Duncan Laurence - Arcade.mp3',
 '/songs/DJ Snake ft Justin Bieber-Let Me Love You.mp3',
 '/songs/travis_scott__hvme_-_goosebumps__remix.mp3',
 '/songs/CHOPIN-NOCTURNE NO20 IN C-SHARP MINOR OP POST.mp3',
 '/songs/5 Seconds of Summer-Teeth.mp3',
 '/songs/Tones and I - Dance Monkey.mp3',
 '/songs/Calvin Harris-Feel So Close.mp3',
 '/songs/chopin-nocturne-op9-no2.mp3',
 '/songs/Vance Joy - Riptide.mp3',
 '/songs/Israel Kamakawiwoole - Somewhere Over the Rainbow.mp3',
 '/songs/One Kiss-Calvin Harris Dua Lipa.mp3',
 '/songs/Sweater Weather - The Neighbourhood.mp3',
 '/songs/Billie Eilish-No Time To Die.mp3',
 '/songs/Freaks-Surf_Curse.mp3',
 '/songs/Avicii-The Nights.mp3',
 '/songs/The Chainsmokers-Closer-ft-Halse.mp3',
 '/songs/Kanye West - Ultralight Beam.mp3',
 '/songs/The Weeknd - Blinding Lights.mp3',
 '/songs/Drake-Passionfruit.mp3',
 '/songs/Nocturn - Secret Garden.mp3',
 '/songs/Ludovico Einaudi - Nuvole Bianch.mp3',
 '/songs/Avicii-Wake Me Up.mp3',
 '/songs/Bad Bunny - Callaita.mp3',
 '/songs/Lauv - I Like Me Better.mp3',
 '/songs/Sean Paul Temperature.mp3',
 '/songs/Aaron Smith-Dancin.mp3',
 '/songs/Billie Eilish - bad guy.mp3',
 '/songs/Axwell Ingrosso-More Than You Know.mp3',
 '/songs/Linkin Park - One Step Closer.mp3',
 '/songs/George Ezra-Shotgun.mp3',
 '/songs/Gorillaz - Feel Good Inc.mp3',
 '/songs/This Town - Niall Horan.mp3',
 '/songs/The Weeknd - The Hills.mp3',
 '/songs/Franco De Vita - Tu de que vas.mp3',
 '/songs/Summer-Calvin Harris.mp3',
 '/songs/Lady Gaga Bradley Cooper - Shallow.mp3',
 '/songs/Mother Mother - Hayloft.mp3',
 '/songs/The Police - Every breath you take.mp3',
 '/songs/Luis Fonsi - Despacito ft. Daddy Yankee.mp3',
 '/songs/BEAUTIFUL GIRLS-SEAN KINGSTON.mp3',
 '/songs/Hips Dont Lie-Shakira feat Wyclef Jean.mp3',
 '/songs/Lewis Capaldi - Someone You Loved.mp3',
 '/songs/Bruno Mars-Thats What I Like.mp3',
 '/songs/Ozzy osbourne Crazy Train.mp3',
 '/songs/Experience - Ludovico Einaudi Daniel Hop.mp3',
 '/songs/The Real Slim Shady-Eminem.mp3',
 '/songs/Manau - La tribu de Dana.mp3',
 '/songs/Of Monsters And Men - Little Talks.mp3',
 '/songs/Slipknot-Duality.mp3',
 '/songs/Bruno Mars-Talking To The Moon.mp3',
 '/songs/Avenged Sevenfold - Hail to the King.mp3',
 '/songs/Yellow - Coldplay.mp3',
 '/songs/Bad Bunny-Vete(Letra).mp3',
 '/songs/Like Im Gonna Lose You - Meghan Trainor.mp3',
 '/songs/Te he prometido - Leo Dan.mp3',
 '/songs/Juice WRLD - Robbery.mp3',
 '/songs/Ed Sheeran - Thinking Out Loud.mp3',
 '/songs/System Of A Down - BYOB.mp3',
 '/songs/blackbear-idfc.mp3',
 '/songs/XXXTENTACION - Jocelyn Flores.mp3',
 '/songs/Bad Bunny-Daddy Yankee-La Santa(Letra).mp3',
 '/songs/GHOSTEMANE - MERCURY RETROGRADE.mp3',
 '/songs/Post Malone - Circles.mp3',
 '/songs/Arctic Monkeys-Do I Wanna Know.mp3',
 '/songs/Reckless Love - Cory Asbury.mp3',
 '/songs/Lil Nas X - Old Town Road ft. Billy Ray Cyrus.mp3',
 '/songs/Imagine Dragons-Believer.mp3',
 '/songs/Bob Marley-Three Little Birds.mp3',
 '/songs/Joji-SLOW DANCING IN THE DARK.mp3',
 '/songs/Avicii-Waiting For Love.mp3',
 '/songs/Limp Bizkit - Rollin.mp3',
 '/songs/Juice Wrld - Lucid Dreams.mp3',
 '/songs/This Is What You Came For - Calvin Harris.mp3',
 '/songs/Dom La Nena - Batuque.mp3',
 '/songs/twenty one pilots - Heathens.mp3',
 '/songs/Kodak Black Travis Scott Offset - ZEZE.mp3',
 '/songs/Dan Shay, Justin Bieber - 10,000 Hours.mp3',
 '/songs/Oops! I Did It Again - Britney Spears.mp3',
 '/songs/Sam_Smith_Stay_With_Me.mp3',
 '/songs/Travis Scott - SICKO MODE-ft Drake.mp3',
 '/songs/J.Cole-No Role Modelz.mp3',
 '/songs/daddy issues-the neighbourhood.mp3',
 '/songs/Disturbed - Down With the Sickness Lyric.mp3',
 '/songs/Ellie Goulding - Love Me Like You Do.mp3',
 '/songs/All Girls Are The Same-Juice WRLD.mp3',
 '/songs/Travis Scott - HIGHEST IN THE ROOM.mp3',
 '/songs/Martin Garrix - Scared To Be Lonely-feat. Dua Lip.mp3',
 '/songs/I Hope - Gabby Barrett.mp3',
 '/songs/Chop Suey-System of a Down.mp3',
 '/songs/Lil Peep - Star Shopping.mp3',
 '/songs/Bad Bunny-Yo Perreo Sola Letra.mp3',
 '/songs/Redbone Childish Gambino.mp3',
 '/songs/The Weeknd - Call Out My Name.mp3',
 '/songs/Cesaria Evora-Sodad.mp3');


$track_1 = $music_list[0];
$track_2 = $music_list[1];
$track_3 = $music_list[2];
$track_4 = $music_list[3];
$track_5 = $music_list[4];
$track_6 = $music_list[5];
$track_7 = $music_list[6];
$track_8 = $music_list[7];
$track_9 = $music_list[8];
$track_10 = $music_list[9];
$track_11 = $music_list[10];
$track_12 = $music_list[11];
$track_13 = $music_list[12];
$track_14 = $music_list[13];
$track_15 = $music_list[14];
$track_16 = $music_list[15];
$track_17 = $music_list[16];
$track_18 = $music_list[17];
$track_19 = $music_list[18];
$track_20 = $music_list[19];
$track_21 = $music_list[20];
$track_22 = $music_list[21];
$track_23 = $music_list[22];
$track_24 = $music_list[23];
$track_25 = $music_list[24];
$track_26 = $music_list[25];
$track_27 = $music_list[26];
$track_28 = $music_list[27];
$track_29 = $music_list[28];
$track_30 = $music_list[29];
$track_31 = $music_list[30];
$track_32 = $music_list[31];
$track_33 = $music_list[32];
$track_34 = $music_list[33];
$track_35 = $music_list[34];
$track_36 = $music_list[35];
$track_37 = $music_list[36];
$track_38 = $music_list[37];
$track_39 = $music_list[38];
$track_40 = $music_list[39];
$track_41 = $music_list[40];
$track_42 = $music_list[41];
$track_43 = $music_list[42];
$track_44 = $music_list[43];
$track_45 = $music_list[44];
$track_46 = $music_list[45];
$track_47 = $music_list[46];
$track_48 = $music_list[47];
$track_49 = $music_list[48];
$track_50 = $music_list[49];
$track_51 = $music_list[50];
$track_52 = $music_list[51];
$track_53 = $music_list[52];
$track_54 = $music_list[53];
$track_55 = $music_list[54];
$track_56 = $music_list[55];
$track_57 = $music_list[56];
$track_58 = $music_list[57];
$track_59 = $music_list[58];
$track_60 = $music_list[59];
$track_61 = $music_list[60];
$track_62 = $music_list[61];
$track_63 = $music_list[62];
$track_64 = $music_list[63];
$track_65 = $music_list[64];
$track_66 = $music_list[65];
$track_67 = $music_list[66];
$track_68 = $music_list[67];
$track_69 = $music_list[68];
$track_70 = $music_list[69];
$track_71 = $music_list[70];
$track_72 = $music_list[71];
$track_73 = $music_list[72];
$track_74 = $music_list[73];
$track_75 = $music_list[74];
$track_76 = $music_list[75];
$track_77 = $music_list[76];
$track_78 = $music_list[77];
$track_79 = $music_list[78];
$track_80 = $music_list[79];
$track_81 = $music_list[80];
$track_82 = $music_list[81];
$track_83 = $music_list[82];
$track_84 = $music_list[83];
$track_85 = $music_list[84];
$track_86 = $music_list[85];
$track_87 = $music_list[86];
$track_88 = $music_list[87];
$track_89 = $music_list[88];
$track_90 = $music_list[89];
$track_91 = $music_list[90];
$track_92 = $music_list[91];
$track_93 = $music_list[92];
$track_94 = $music_list[93];
$track_95 = $music_list[94];
$track_96 = $music_list[95];
$track_97 = $music_list[96];
$track_98 = $music_list[97];
$track_99 = $music_list[98];
$track_100 = $music_list[99];
$track_101 = $music_list[100];
$track_102 = $music_list[101];
$track_103 = $music_list[102];
$track_104 = $music_list[103];
$track_105 = $music_list[104];
$track_106 = $music_list[105];
$track_107 = $music_list[106];
$track_108 = $music_list[107];
$track_109 = $music_list[108];
$track_110 = $music_list[109];
$track_111 = $music_list[110];
$track_112 = $music_list[111];
$track_113 = $music_list[112];
$track_114 = $music_list[113];



$track_order = array($track_1,$track_2,$track_3,$track_4,$track_5,$track_6,$track_7,$track_8,$track_9,$track_10,$track_11,$track_12,$track_13,
$track_14,$track_15,$track_16,$track_17,$track_18,$track_19,$track_20,$track_21,$track_22,$track_23,$track_24,$track_25,$track_26,
$track_27,$track_28,$track_29,$track_30,$track_31,$track_32,$track_33,$track_34,$track_35,$track_36,$track_37,$track_38,$track_39,
$track_40,$track_41,$track_42,$track_43,$track_44,$track_45,$track_46,$track_47,$track_48,$track_49,$track_50,$track_51,$track_52,
$track_53,$track_54,$track_55,$track_56,$track_57,$track_58,$track_59,$track_60,$track_61,$track_63,$track_64,$track_65,$track_66,
$track_67,$track_68,$track_69,$track_70,$track_71,$track_72,$track_73,$track_74,$track_75,$track_76,$track_77,$track_78,$track_79,
$track_80,$track_81,$track_82,$track_83,$track_84,$track_85,$track_86,$track_87,$track_88,$track_89,$track_90,$track_91,$track_92,
$track_93,$track_94,$track_95,$track_96,$track_97,$track_98,$track_99,$track_100,$track_101,$track_102,$track_103,$track_104,$track_105,
$track_106,$track_107,$track_108,$track_109,$track_111,$track_112,$track_113,$track_114);


// shuffle track order in order to provide individual playlist.
$shuffle($track_order);

// Convert the track_order_list to string and then assign to the newly created variable.
$track_order_string = implode(',',$track_order);




// Performing insert query execution 
$sql = "UPDATE usertable 
SET track_order_online = '$track_order_string',
track_1 = '$track_1',
track_2 = '$track_2',
track_3 = '$track_3',
track_4 = '$track_4',
track_5 = '$track_5',
track_6 = '$track_6',
track_7 = '$track_7',
track_8 = '$track_8',
track_9 = '$track_9',
track_10 = '$track_10',
track_11 = '$track_11',
track_12 = '$track_12',
track_13 = '$track_13',
track_14 = '$track_14',
track_15 = '$track_15',
track_16 = '$track_16',
track_17 = '$track_17',
track_18 = '$track_18',
track_19 = '$track_19',
track_20 = '$track_20',
track_21 = '$track_21',
track_22 = '$track_22',
track_23 = '$track_23',
track_24 = '$track_24',
track_25 = '$track_25',
track_26 = '$track_26',
track_27 = '$track_27',
track_28 = '$track_28',
track_29 = '$track_29',
track_30 = '$track_30',
track_31 = '$track_31',
track_32 = '$track_32',
track_33 = '$track_33',
track_34 = '$track_34',
track_35 = '$track_35',
track_36 = '$track_36',
track_37 = '$track_37',
track_38 = '$track_38',
track_39 = '$track_39',
track_40 = '$track_40',
track_41 = '$track_41',
track_42 = '$track_42',
track_43 = '$track_43',
track_44 = '$track_44',
track_45 = '$track_45',
track_46 = '$track_46',
track_47 = '$track_47',
track_48 = '$track_48',
track_49 = '$track_49',
track_50 = '$track_50',
track_51 = '$track_51',
track_52 = '$track_52',
track_53 = '$track_53',
track_54 = '$track_54',
track_55 = '$track_55',
track_56 = '$track_56',
track_57 = '$track_57',
track_58 = '$track_58',
track_59 = '$track_59',
track_60 = '$track_60',
track_61 = '$track_61',
track_62 = '$track_62',
track_63 = '$track_63',
track_64 = '$track_64',
track_65 = '$track_65',
track_66 = '$track_66',
track_67 = '$track_67',
track_68 = '$track_68',
track_69 = '$track_69',
track_70 = '$track_70',
track_71 = '$track_71',
track_72 = '$track_72',
track_73 = '$track_73',
track_74 = '$track_74',
track_75 = '$track_75',
track_76 = '$track_76',
track_77 = '$track_77',
track_78 = '$track_78',
track_79 = '$track_79',
track_80 = '$track_80',
track_81 = '$track_81',
track_82 = '$track_82',
track_83 = '$track_83',
track_84 = '$track_84',
track_85 = '$track_85',
track_86 = '$track_86',
track_87 = '$track_87',
track_88 = '$track_88',
track_89 = '$track_89',
track_90 = '$track_90',
track_91 = '$track_91',
track_92 = '$track_92',
track_93 = '$track_93',
track_94 = '$track_94',
track_95 = '$track_95',
track_96 = '$track_96',
track_97 = '$track_97',
track_98 = '$track_98',
track_99 = '$track_99',
track_100 = '$track_100',
track_101 = '$track_101',
track_102 = '$track_102',
track_103 = '$track_103',
track_104 = '$track_104',
track_105 = '$track_105',
track_106 = '$track_106',
track_107 = '$track_107',
track_108 = '$track_108',
track_109 = '$track_109',
track_110 = '$track_110',
track_111 = '$track_111',
track_112 = '$track_112',
track_113 = '$track_113',
track_114 = '$track_114'
WHERE (email = '$_SESSION[email]')";



# When two input values in a row have same values, an alert message pop-up and reload the annotation_task page for re-try.


# When a user answers all the questions properly, the input values are stored to the databse.
$result_1 = mysqli_query($con, $sql);
if($result_1){
    echo ("<script LANGUAGE='JavaScript'>
    window.location.href='./select-test.php';
    </script>");
    exit();
}
else{
    echo "Error: Hush! Sorry $sql. "
    .mysqli_error($con);
}


mysqli_close($con);
?>
