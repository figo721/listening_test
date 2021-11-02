<!-- This page is for calling the variable values from the "on-site.php" page and updating the values to the database. -->
<?php include "config.php";
session_start();
$track_1 = $_REQUEST['track_1_onsite'];
$track_2 = $_REQUEST['track_2_onsite'];
$track_3 = $_REQUEST['track_3_onsite'];
$track_4 = $_REQUEST['track_4_onsite'];
$track_5 = $_REQUEST['track_5_onsite'];
$track_6 = $_REQUEST['track_6_onsite'];
$track_7 = $_REQUEST['track_7_onsite'];
$track_8 = $_REQUEST['track_8_onsite'];
$track_9 = $_REQUEST['track_9_onsite'];
$track_10 = $_REQUEST['track_10_onsite'];
$track_11 = $_REQUEST['track_11_onsite'];
$track_12 = $_REQUEST['track_12_onsite'];
$track_13 = $_REQUEST['track_13_onsite'];
$track_14 = $_REQUEST['track_14_onsite'];
$track_15 = $_REQUEST['track_15_onsite'];
$track_16 = $_REQUEST['track_16_onsite'];
$track_17 = $_REQUEST['track_17_onsite'];
$track_18 = $_REQUEST['track_18_onsite'];
$track_19 = $_REQUEST['track_19_onsite'];
$track_20 = $_REQUEST['track_20_onsite'];
$track_21 = $_REQUEST['track_21_onsite'];
$track_22 = $_REQUEST['track_22_onsite'];
$track_23 = $_REQUEST['track_23_onsite'];
$track_24 = $_REQUEST['track_24_onsite'];
$track_25 = $_REQUEST['track_25_onsite'];
$track_26 = $_REQUEST['track_26_onsite'];
$track_27 = $_REQUEST['track_27_onsite'];
$track_28 = $_REQUEST['track_28_onsite'];
$track_29 = $_REQUEST['track_29_onsite'];
$track_30 = $_REQUEST['track_30_onsite'];
$track_31 = $_REQUEST['track_31_onsite'];
$track_32 = $_REQUEST['track_32_onsite'];
$track_33 = $_REQUEST['track_33_onsite'];
$track_34 = $_REQUEST['track_34_onsite'];
$track_35 = $_REQUEST['track_35_onsite'];
$track_36 = $_REQUEST['track_36_onsite'];
$track_37 = $_REQUEST['track_37_onsite'];
$track_38 = $_REQUEST['track_38_onsite'];
$track_39 = $_REQUEST['track_39_onsite'];
$track_40 = $_REQUEST['track_40_onsite'];
$track_41 = $_REQUEST['track_41_onsite'];
$track_42 = $_REQUEST['track_42_onsite'];
$track_43 = $_REQUEST['track_43_onsite'];
$track_44 = $_REQUEST['track_44_onsite'];
$track_45 = $_REQUEST['track_45_onsite'];
$track_46 = $_REQUEST['track_46_onsite'];
$track_47 = $_REQUEST['track_47_onsite'];
$track_48 = $_REQUEST['track_48_onsite'];
$track_49 = $_REQUEST['track_49_onsite'];
$track_50 = $_REQUEST['track_50_onsite'];
$track_51 = $_REQUEST['track_51_onsite'];
$track_52 = $_REQUEST['track_52_onsite'];
$track_53 = $_REQUEST['track_53_onsite'];
$track_54 = $_REQUEST['track_54_onsite'];
$track_55 = $_REQUEST['track_55_onsite'];
$track_56 = $_REQUEST['track_56_onsite'];
$track_57 = $_REQUEST['track_57_onsite'];
$track_58 = $_REQUEST['track_58_onsite'];
$track_59 = $_REQUEST['track_59_onsite'];
$track_60 = $_REQUEST['track_60_onsite'];
$track_61 = $_REQUEST['track_61_onsite'];
$track_62 = $_REQUEST['track_62_onsite'];
$track_63 = $_REQUEST['track_63_onsite'];
$track_64 = $_REQUEST['track_64_onsite'];
$track_65 = $_REQUEST['track_65_onsite'];
$track_66 = $_REQUEST['track_66_onsite'];
$track_67 = $_REQUEST['track_67_onsite'];
$track_68 = $_REQUEST['track_68_onsite'];
$track_69 = $_REQUEST['track_69_onsite'];
$track_70 = $_REQUEST['track_70_onsite'];
$track_71 = $_REQUEST['track_71_onsite'];
$track_72 = $_REQUEST['track_72_onsite'];
$track_73 = $_REQUEST['track_73_onsite'];
$track_74 = $_REQUEST['track_74_onsite'];
$track_75 = $_REQUEST['track_75_onsite'];
$track_76 = $_REQUEST['track_76_onsite'];
$track_77 = $_REQUEST['track_77_onsite'];
$track_78 = $_REQUEST['track_78_onsite'];
$track_79 = $_REQUEST['track_79_onsite'];
$track_80 = $_REQUEST['track_80_onsite'];
$track_81 = $_REQUEST['track_81_onsite'];
$track_82 = $_REQUEST['track_82_onsite'];
$track_83 = $_REQUEST['track_83_onsite'];
$track_84 = $_REQUEST['track_84_onsite'];
$track_85 = $_REQUEST['track_85_onsite'];
$track_86 = $_REQUEST['track_86_onsite'];
$track_87 = $_REQUEST['track_87_onsite'];
$track_88 = $_REQUEST['track_88_onsite'];
$track_89 = $_REQUEST['track_89_onsite'];
$track_90 = $_REQUEST['track_90_onsite'];
$track_91 = $_REQUEST['track_91_onsite'];
$track_92 = $_REQUEST['track_92_onsite'];
$track_93 = $_REQUEST['track_93_onsite'];
$track_94 = $_REQUEST['track_94_onsite'];
$track_95 = $_REQUEST['track_95_onsite'];
$track_96 = $_REQUEST['track_96_onsite'];
$track_97 = $_REQUEST['track_97_onsite'];
$track_98 = $_REQUEST['track_98_onsite'];
$track_99 = $_REQUEST['track_99_onsite'];
$track_100 = $_REQUEST['track_100_onsite'];
$track_101 = $_REQUEST['track_101_onsite'];
$track_102 = $_REQUEST['track_102_onsite'];
$track_103 = $_REQUEST['track_103_onsite'];
$track_104 = $_REQUEST['track_104_onsite'];
$track_105 = $_REQUEST['track_105_onsite'];
$track_106 = $_REQUEST['track_106_onsite'];
$track_107 = $_REQUEST['track_107_onsite'];
$track_108 = $_REQUEST['track_108_onsite'];
$track_109 = $_REQUEST['track_109_onsite'];
$track_110 = $_REQUEST['track_110_onsite'];
$track_111 = $_REQUEST['track_111_onsite'];
$track_112 = $_REQUEST['track_112_onsite'];
$track_113 = $_REQUEST['track_113_onsite'];
$track_114 = $_REQUEST['track_114_onsite'];
$track_order_ts_string = $_REQUEST['track_timestamp'];

$track_order = array($track_1,$track_2,$track_3,$track_4,$track_5,$track_6,$track_7,$track_8,$track_9,$track_10,$track_11,$track_12,$track_13,
$track_14,$track_15,$track_16,$track_17,$track_18,$track_19,$track_20,$track_21,$track_22,$track_23,$track_24,$track_25,$track_26,
$track_27,$track_28,$track_29,$track_30,$track_31,$track_32,$track_33,$track_34,$track_35,$track_36,$track_37,$track_38,$track_39,
$track_40,$track_41,$track_42,$track_43,$track_44,$track_45,$track_46,$track_47,$track_48,$track_49,$track_50,$track_51,$track_52,
$track_53,$track_54,$track_55,$track_56,$track_57,$track_58,$track_59,$track_60,$track_61,$track_63,$track_64,$track_65,$track_66,
$track_67,$track_68,$track_69,$track_70,$track_71,$track_72,$track_73,$track_74,$track_75,$track_76,$track_77,$track_78,$track_79,
$track_80,$track_81,$track_82,$track_83,$track_84,$track_85,$track_86,$track_87,$track_88,$track_89,$track_90,$track_91,$track_92,
$track_93,$track_94,$track_95,$track_96,$track_97,$track_98,$track_99,$track_100,$track_101,$track_102,$track_103,$track_104,$track_105,
$track_106,$track_107,$track_108,$track_109,$track_111,$track_112,$track_113,$track_114);

# To conver the track_order_list into a string variable.  
$track_order_string = implode(',',$track_order);

// Performing insert query execution
$sql = "UPDATE listening_test 
SET track_order_onsite = '$track_order_string',
track_order_timestamp = '$track_order_ts_string'
WHERE (username = '$_SESSION[username]')";


$result = mysqli_query($con, $sql);
if ($result){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Data Saved Succesfully');
    window.location.href='./thank_you.php';
    </script>");
exit();
}
else{
    echo "Error: Hush! Sorry $sql. "
    .mysqli_error($con);
}


mysqli_close($con);
?>