<!-- This page is for update the user input values and track_order_list 
from the page of "annotation_task.php" to the database. -->

<?php include "connection.php";
session_start();

//$_REQUEST is to collect data after submitting from "annotation.php" file form. 
$annotation_1_value = $_REQUEST['annotation_1'];
$annotation_2_value = $_REQUEST['annotation_2'];
$annotation_3_value = $_REQUEST['annotation_3'];
$annotation_4_value = $_REQUEST['annotation_4'];
$annotation_5_value = $_REQUEST['annotation_5'];
$annotation_6_value = $_REQUEST['annotation_6'];
$annotation_7_value = $_REQUEST['annotation_7'];
$annotation_8_value = $_REQUEST['annotation_8'];
$annotation_9_value = $_REQUEST['annotation_9'];
$annotation_10_value = $_REQUEST['annotation_10'];
$annotation_11_value = $_REQUEST['annotation_11'];
$annotation_12_value = $_REQUEST['annotation_12'];
$annotation_13_value = $_REQUEST['annotation_13'];
$annotation_14_value = $_REQUEST['annotation_14'];
$annotation_15_value = $_REQUEST['annotation_15'];
$annotation_16_value = $_REQUEST['annotation_16'];
$annotation_17_value = $_REQUEST['annotation_17'];
$annotation_18_value = $_REQUEST['annotation_18'];
$annotation_19_value = $_REQUEST['annotation_19'];
$annotation_20_value = $_REQUEST['annotation_20'];
$annotation_21_value = $_REQUEST['annotation_21'];
$annotation_22_value = $_REQUEST['annotation_22'];
$annotation_23_value = $_REQUEST['annotation_23'];
$annotation_24_value = $_REQUEST['annotation_24'];
$annotation_25_value = $_REQUEST['annotation_25'];
$annotation_26_value = $_REQUEST['annotation_26'];
$annotation_27_value = $_REQUEST['annotation_27'];
$annotation_28_value = $_REQUEST['annotation_28'];
$annotation_29_value = $_REQUEST['annotation_29'];
$annotation_30_value = $_REQUEST['annotation_30'];
$annotation_31_value = $_REQUEST['annotation_31'];
$annotation_32_value = $_REQUEST['annotation_32'];
$annotation_33_value = $_REQUEST['annotation_33'];
$annotation_34_value = $_REQUEST['annotation_34'];
$annotation_35_value = $_REQUEST['annotation_35'];
$annotation_36_value = $_REQUEST['annotation_36'];
$annotation_37_value = $_REQUEST['annotation_37'];
$annotation_38_value = $_REQUEST['annotation_38'];
$annotation_39_value = $_REQUEST['annotation_39'];
$annotation_40_value = $_REQUEST['annotation_40'];
$annotation_41_value = $_REQUEST['annotation_41'];
$annotation_42_value = $_REQUEST['annotation_42'];
$annotation_43_value = $_REQUEST['annotation_43'];
$annotation_44_value = $_REQUEST['annotation_44'];
$annotation_45_value = $_REQUEST['annotation_45'];
$annotation_46_value = $_REQUEST['annotation_46'];
$annotation_47_value = $_REQUEST['annotation_47'];
$annotation_48_value = $_REQUEST['annotation_48'];
$annotation_49_value = $_REQUEST['annotation_49'];
$annotation_50_value = $_REQUEST['annotation_50'];
$annotation_51_value = $_REQUEST['annotation_51'];
$annotation_52_value = $_REQUEST['annotation_52'];
$annotation_53_value = $_REQUEST['annotation_53'];
$annotation_54_value = $_REQUEST['annotation_54'];
$annotation_55_value = $_REQUEST['annotation_55'];
$annotation_56_value = $_REQUEST['annotation_56'];
$annotation_57_value = $_REQUEST['annotation_57'];
$annotation_58_value = $_REQUEST['annotation_58'];
$annotation_59_value = $_REQUEST['annotation_59'];
$annotation_60_value = $_REQUEST['annotation_60'];
$annotation_61_value = $_REQUEST['annotation_61'];
$annotation_62_value = $_REQUEST['annotation_62'];
$annotation_63_value = $_REQUEST['annotation_63'];
$annotation_64_value = $_REQUEST['annotation_64'];
$annotation_65_value = $_REQUEST['annotation_65'];
$annotation_66_value = $_REQUEST['annotation_66'];
$annotation_67_value = $_REQUEST['annotation_67'];
$annotation_68_value = $_REQUEST['annotation_68'];
$annotation_69_value = $_REQUEST['annotation_69'];
$annotation_70_value = $_REQUEST['annotation_70'];
$annotation_71_value = $_REQUEST['annotation_71'];
$annotation_72_value = $_REQUEST['annotation_72'];
$annotation_73_value = $_REQUEST['annotation_73'];
$annotation_74_value = $_REQUEST['annotation_74'];
$annotation_75_value = $_REQUEST['annotation_75'];
$annotation_76_value = $_REQUEST['annotation_76'];
$annotation_77_value = $_REQUEST['annotation_77'];
$annotation_78_value = $_REQUEST['annotation_78'];
$annotation_79_value = $_REQUEST['annotation_79'];
$annotation_80_value = $_REQUEST['annotation_80'];
$annotation_81_value = $_REQUEST['annotation_81'];
$annotation_82_value = $_REQUEST['annotation_82'];
$annotation_83_value = $_REQUEST['annotation_83'];
$annotation_84_value = $_REQUEST['annotation_84'];
$annotation_85_value = $_REQUEST['annotation_85'];
$annotation_86_value = $_REQUEST['annotation_86'];
$annotation_87_value = $_REQUEST['annotation_87'];
$annotation_88_value = $_REQUEST['annotation_88'];
$annotation_89_value = $_REQUEST['annotation_89'];
$annotation_90_value = $_REQUEST['annotation_90'];
$annotation_91_value = $_REQUEST['annotation_91'];
$annotation_92_value = $_REQUEST['annotation_92'];
$annotation_93_value = $_REQUEST['annotation_93'];
$annotation_94_value = $_REQUEST['annotation_94'];
$annotation_95_value = $_REQUEST['annotation_95'];
$annotation_96_value = $_REQUEST['annotation_96'];
$annotation_97_value = $_REQUEST['annotation_97'];
$annotation_98_value = $_REQUEST['annotation_98'];
$annotation_99_value = $_REQUEST['annotation_99'];
$annotation_100_value = $_REQUEST['annotation_100'];
$annotation_101_value = $_REQUEST['annotation_101'];
$annotation_102_value = $_REQUEST['annotation_102'];
$annotation_103_value = $_REQUEST['annotation_103'];
$annotation_104_value = $_REQUEST['annotation_104'];
$annotation_105_value = $_REQUEST['annotation_105'];
$annotation_106_value = $_REQUEST['annotation_106'];
$annotation_107_value = $_REQUEST['annotation_107'];
$annotation_108_value = $_REQUEST['annotation_108'];
$annotation_109_value = $_REQUEST['annotation_109'];
$annotation_110_value = $_REQUEST['annotation_110'];
$annotation_111_value = $_REQUEST['annotation_111'];
$annotation_112_value = $_REQUEST['annotation_112'];
$annotation_113_value = $_REQUEST['annotation_113'];
$annotation_114_value = $_REQUEST['annotation_114'];
$annotation_115_value = $_REQUEST['annotation_115'];
$annotation_116_value = $_REQUEST['annotation_116'];
$annotation_117_value = $_REQUEST['annotation_117'];
$annotation_118_value = $_REQUEST['annotation_118'];
$annotation_119_value = $_REQUEST['annotation_119'];
$annotation_120_value = $_REQUEST['annotation_120'];
$annotation_121_value = $_REQUEST['annotation_121'];
$annotation_122_value = $_REQUEST['annotation_122'];
$annotation_123_value = $_REQUEST['annotation_123'];
$annotation_124_value = $_REQUEST['annotation_124'];
$annotation_125_value = $_REQUEST['annotation_125'];
$annotation_126_value = $_REQUEST['annotation_126'];
$annotation_127_value = $_REQUEST['annotation_127'];
$annotation_128_value = $_REQUEST['annotation_128'];
$annotation_129_value = $_REQUEST['annotation_129'];
$annotation_130_value = $_REQUEST['annotation_130'];
$annotation_131_value = $_REQUEST['annotation_131'];
$annotation_132_value = $_REQUEST['annotation_132'];
$annotation_133_value = $_REQUEST['annotation_133'];
$annotation_134_value = $_REQUEST['annotation_134'];
$annotation_135_value = $_REQUEST['annotation_135'];
$annotation_136_value = $_REQUEST['annotation_136'];
$annotation_137_value = $_REQUEST['annotation_137'];
$annotation_138_value = $_REQUEST['annotation_138'];
$annotation_139_value = $_REQUEST['annotation_139'];
$annotation_140_value = $_REQUEST['annotation_140'];
$annotation_141_value = $_REQUEST['annotation_141'];
$annotation_142_value = $_REQUEST['annotation_142'];
$annotation_143_value = $_REQUEST['annotation_143'];
$annotation_144_value = $_REQUEST['annotation_144'];
$annotation_145_value = $_REQUEST['annotation_145'];
$annotation_146_value = $_REQUEST['annotation_146'];
$annotation_147_value = $_REQUEST['annotation_147'];
$annotation_148_value = $_REQUEST['annotation_148'];
$annotation_149_value = $_REQUEST['annotation_149'];
$annotation_150_value = $_REQUEST['annotation_150'];
$annotation_151_value = $_REQUEST['annotation_151'];
$annotation_152_value = $_REQUEST['annotation_152'];
$annotation_153_value = $_REQUEST['annotation_153'];
$annotation_154_value = $_REQUEST['annotation_154'];
$annotation_155_value = $_REQUEST['annotation_155'];
$annotation_156_value = $_REQUEST['annotation_156'];
$annotation_157_value = $_REQUEST['annotation_157'];
$annotation_158_value = $_REQUEST['annotation_158'];
$annotation_159_value = $_REQUEST['annotation_159'];
$annotation_160_value = $_REQUEST['annotation_160'];
$annotation_161_value = $_REQUEST['annotation_161'];
$annotation_162_value = $_REQUEST['annotation_162'];
$annotation_163_value = $_REQUEST['annotation_163'];
$annotation_164_value = $_REQUEST['annotation_164'];
$annotation_165_value = $_REQUEST['annotation_165'];
$annotation_166_value = $_REQUEST['annotation_166'];
$annotation_167_value = $_REQUEST['annotation_167'];
$annotation_168_value = $_REQUEST['annotation_168'];
$annotation_169_value = $_REQUEST['annotation_169'];
$annotation_170_value = $_REQUEST['annotation_170'];
$annotation_171_value = $_REQUEST['annotation_171'];
$annotation_172_value = $_REQUEST['annotation_172'];
$annotation_173_value = $_REQUEST['annotation_173'];
$annotation_174_value = $_REQUEST['annotation_174'];
$annotation_175_value = $_REQUEST['annotation_175'];
$annotation_176_value = $_REQUEST['annotation_176'];
$annotation_177_value = $_REQUEST['annotation_177'];
$annotation_178_value = $_REQUEST['annotation_178'];
$annotation_179_value = $_REQUEST['annotation_179'];
$annotation_180_value = $_REQUEST['annotation_180'];
$annotation_181_value = $_REQUEST['annotation_181'];
$annotation_182_value = $_REQUEST['annotation_182'];
$annotation_183_value = $_REQUEST['annotation_183'];
$annotation_184_value = $_REQUEST['annotation_184'];
$annotation_185_value = $_REQUEST['annotation_185'];
$annotation_186_value = $_REQUEST['annotation_186'];
$annotation_187_value = $_REQUEST['annotation_187'];
$annotation_188_value = $_REQUEST['annotation_188'];
$annotation_189_value = $_REQUEST['annotation_189'];
$annotation_190_value = $_REQUEST['annotation_190'];
$annotation_191_value = $_REQUEST['annotation_191'];
$annotation_192_value = $_REQUEST['annotation_192'];
$annotation_193_value = $_REQUEST['annotation_193'];
$annotation_194_value = $_REQUEST['annotation_194'];
$annotation_195_value = $_REQUEST['annotation_195'];
$annotation_196_value = $_REQUEST['annotation_196'];
$annotation_197_value = $_REQUEST['annotation_197'];
$annotation_198_value = $_REQUEST['annotation_198'];
$annotation_199_value = $_REQUEST['annotation_199'];
$annotation_200_value = $_REQUEST['annotation_200'];
$annotation_201_value = $_REQUEST['annotation_201'];
$annotation_202_value = $_REQUEST['annotation_202'];
$annotation_203_value = $_REQUEST['annotation_203'];
$annotation_204_value = $_REQUEST['annotation_204'];
$annotation_205_value = $_REQUEST['annotation_205'];
$annotation_206_value = $_REQUEST['annotation_206'];
$annotation_207_value = $_REQUEST['annotation_207'];
$annotation_208_value = $_REQUEST['annotation_208'];
$annotation_209_value = $_REQUEST['annotation_209'];
$annotation_210_value = $_REQUEST['annotation_210'];
$annotation_211_value = $_REQUEST['annotation_211'];
$annotation_212_value = $_REQUEST['annotation_212'];
$annotation_213_value = $_REQUEST['annotation_213'];
$annotation_214_value = $_REQUEST['annotation_214'];
$annotation_215_value = $_REQUEST['annotation_215'];
$annotation_216_value = $_REQUEST['annotation_216'];
$annotation_217_value = $_REQUEST['annotation_217'];
$annotation_218_value = $_REQUEST['annotation_218'];
$annotation_219_value = $_REQUEST['annotation_219'];
$annotation_220_value = $_REQUEST['annotation_220'];
$annotation_221_value = $_REQUEST['annotation_221'];
$annotation_222_value = $_REQUEST['annotation_222'];
$annotation_223_value = $_REQUEST['annotation_223'];
$annotation_224_value = $_REQUEST['annotation_224'];
$annotation_225_value = $_REQUEST['annotation_225'];
$annotation_226_value = $_REQUEST['annotation_226'];
$annotation_227_value = $_REQUEST['annotation_227'];
$annotation_228_value = $_REQUEST['annotation_228'];
$annotation_229_value = $_REQUEST['annotation_229'];
$annotation_230_value = $_REQUEST['annotation_230'];
$annotation_231_value = $_REQUEST['annotation_231'];
$annotation_232_value = $_REQUEST['annotation_232'];
$annotation_233_value = $_REQUEST['annotation_233'];
$annotation_234_value = $_REQUEST['annotation_234'];
$annotation_235_value = $_REQUEST['annotation_235'];
$annotation_236_value = $_REQUEST['annotation_236'];
$annotation_237_value = $_REQUEST['annotation_237'];
$annotation_238_value = $_REQUEST['annotation_238'];
$annotation_239_value = $_REQUEST['annotation_239'];
$annotation_240_value = $_REQUEST['annotation_240'];
$annotation_241_value = $_REQUEST['annotation_241'];
$annotation_242_value = $_REQUEST['annotation_242'];
$annotation_243_value = $_REQUEST['annotation_243'];
$annotation_244_value = $_REQUEST['annotation_244'];
$annotation_245_value = $_REQUEST['annotation_245'];
$annotation_246_value = $_REQUEST['annotation_246'];
$annotation_247_value = $_REQUEST['annotation_247'];
$annotation_248_value = $_REQUEST['annotation_248'];
$annotation_249_value = $_REQUEST['annotation_249'];
$annotation_250_value = $_REQUEST['annotation_250'];
$annotation_251_value = $_REQUEST['annotation_251'];
$annotation_252_value = $_REQUEST['annotation_252'];
$annotation_253_value = $_REQUEST['annotation_253'];
$annotation_254_value = $_REQUEST['annotation_254'];
$annotation_255_value = $_REQUEST['annotation_255'];
$annotation_256_value = $_REQUEST['annotation_256'];
$annotation_257_value = $_REQUEST['annotation_257'];
$annotation_258_value = $_REQUEST['annotation_258'];
$annotation_259_value = $_REQUEST['annotation_259'];
$annotation_260_value = $_REQUEST['annotation_260'];
$annotation_261_value = $_REQUEST['annotation_261'];
$annotation_262_value = $_REQUEST['annotation_262'];
$annotation_263_value = $_REQUEST['annotation_263'];
$annotation_264_value = $_REQUEST['annotation_264'];
$annotation_265_value = $_REQUEST['annotation_265'];
$annotation_266_value = $_REQUEST['annotation_266'];
$annotation_267_value = $_REQUEST['annotation_267'];
$annotation_268_value = $_REQUEST['annotation_268'];
$annotation_269_value = $_REQUEST['annotation_269'];
$annotation_270_value = $_REQUEST['annotation_270'];
$annotation_271_value = $_REQUEST['annotation_271'];
$annotation_272_value = $_REQUEST['annotation_272'];
$annotation_273_value = $_REQUEST['annotation_273'];
$annotation_274_value = $_REQUEST['annotation_274'];
$annotation_275_value = $_REQUEST['annotation_275'];
$annotation_276_value = $_REQUEST['annotation_276'];
$annotation_277_value = $_REQUEST['annotation_277'];
$annotation_278_value = $_REQUEST['annotation_278'];
$annotation_279_value = $_REQUEST['annotation_279'];
$annotation_280_value = $_REQUEST['annotation_280'];
$annotation_281_value = $_REQUEST['annotation_281'];
$annotation_282_value = $_REQUEST['annotation_282'];
$annotation_283_value = $_REQUEST['annotation_283'];
$annotation_284_value = $_REQUEST['annotation_284'];
$annotation_285_value = $_REQUEST['annotation_285'];
$annotation_286_value = $_REQUEST['annotation_286'];
$annotation_287_value = $_REQUEST['annotation_287'];
$annotation_288_value = $_REQUEST['annotation_288'];
$annotation_289_value = $_REQUEST['annotation_289'];
$annotation_290_value = $_REQUEST['annotation_290'];
$annotation_291_value = $_REQUEST['annotation_291'];
$annotation_292_value = $_REQUEST['annotation_292'];
$annotation_293_value = $_REQUEST['annotation_293'];
$annotation_294_value = $_REQUEST['annotation_294'];
$annotation_295_value = $_REQUEST['annotation_295'];
$annotation_296_value = $_REQUEST['annotation_296'];
$annotation_297_value = $_REQUEST['annotation_297'];
$annotation_298_value = $_REQUEST['annotation_298'];
$annotation_299_value = $_REQUEST['annotation_299'];
$annotation_300_value = $_REQUEST['annotation_300'];
$annotation_301_value = $_REQUEST['annotation_301'];
$annotation_302_value = $_REQUEST['annotation_302'];
$annotation_303_value = $_REQUEST['annotation_303'];
$annotation_304_value = $_REQUEST['annotation_304'];
$annotation_305_value = $_REQUEST['annotation_305'];
$annotation_306_value = $_REQUEST['annotation_306'];
$annotation_307_value = $_REQUEST['annotation_307'];
$annotation_308_value = $_REQUEST['annotation_308'];
$annotation_309_value = $_REQUEST['annotation_309'];
$annotation_310_value = $_REQUEST['annotation_310'];
$annotation_311_value = $_REQUEST['annotation_311'];
$annotation_312_value = $_REQUEST['annotation_312'];
$annotation_313_value = $_REQUEST['annotation_313'];
$annotation_314_value = $_REQUEST['annotation_314'];
$annotation_315_value = $_REQUEST['annotation_315'];
$annotation_316_value = $_REQUEST['annotation_316'];
$annotation_317_value = $_REQUEST['annotation_317'];
$annotation_318_value = $_REQUEST['annotation_318'];
$annotation_319_value = $_REQUEST['annotation_319'];
$annotation_320_value = $_REQUEST['annotation_320'];
$annotation_321_value = $_REQUEST['annotation_321'];
$annotation_322_value = $_REQUEST['annotation_322'];
$annotation_323_value = $_REQUEST['annotation_323'];
$annotation_324_value = $_REQUEST['annotation_324'];
$annotation_325_value = $_REQUEST['annotation_325'];
$annotation_326_value = $_REQUEST['annotation_326'];
$annotation_327_value = $_REQUEST['annotation_327'];
$annotation_328_value = $_REQUEST['annotation_328'];
$annotation_329_value = $_REQUEST['annotation_329'];
$annotation_330_value = $_REQUEST['annotation_330'];
$annotation_331_value = $_REQUEST['annotation_331'];
$annotation_332_value = $_REQUEST['annotation_332'];
$annotation_333_value = $_REQUEST['annotation_333'];
$annotation_334_value = $_REQUEST['annotation_334'];
$annotation_335_value = $_REQUEST['annotation_335'];
$annotation_336_value = $_REQUEST['annotation_336'];
$annotation_337_value = $_REQUEST['annotation_337'];
$annotation_338_value = $_REQUEST['annotation_338'];
$annotation_339_value = $_REQUEST['annotation_339'];
$annotation_340_value = $_REQUEST['annotation_340'];
$annotation_341_value = $_REQUEST['annotation_341'];
$annotation_342_value = $_REQUEST['annotation_342'];

// To collect track play after submitting from "annotation.php" file.
$track_1 = $_REQUEST['track_1_online'];
$track_2 = $_REQUEST['track_2_online'];
$track_3 = $_REQUEST['track_3_online'];
$track_4 = $_REQUEST['track_4_online'];
$track_5 = $_REQUEST['track_5_online'];
$track_6 = $_REQUEST['track_6_online'];
$track_7 = $_REQUEST['track_7_online'];
$track_8 = $_REQUEST['track_8_online'];
$track_9 = $_REQUEST['track_9_online'];
$track_10 = $_REQUEST['track_10_online'];
$track_11 = $_REQUEST['track_11_online'];
$track_12 = $_REQUEST['track_12_online'];
$track_13 = $_REQUEST['track_13_online'];
$track_14 = $_REQUEST['track_14_online'];
$track_15 = $_REQUEST['track_15_online'];
$track_16 = $_REQUEST['track_16_online'];
$track_17 = $_REQUEST['track_17_online'];
$track_18 = $_REQUEST['track_18_online'];
$track_19 = $_REQUEST['track_19_online'];
$track_20 = $_REQUEST['track_20_online'];
$track_21 = $_REQUEST['track_21_online'];
$track_22 = $_REQUEST['track_22_online'];
$track_23 = $_REQUEST['track_23_online'];
$track_24 = $_REQUEST['track_24_online'];
$track_25 = $_REQUEST['track_25_online'];
$track_26 = $_REQUEST['track_26_online'];
$track_27 = $_REQUEST['track_27_online'];
$track_28 = $_REQUEST['track_28_online'];
$track_29 = $_REQUEST['track_29_online'];
$track_30 = $_REQUEST['track_30_online'];
$track_31 = $_REQUEST['track_31_online'];
$track_32 = $_REQUEST['track_32_online'];
$track_33 = $_REQUEST['track_33_online'];
$track_34 = $_REQUEST['track_34_online'];
$track_35 = $_REQUEST['track_35_online'];
$track_36 = $_REQUEST['track_36_online'];
$track_37 = $_REQUEST['track_37_online'];
$track_38 = $_REQUEST['track_38_online'];
$track_39 = $_REQUEST['track_39_online'];
$track_40 = $_REQUEST['track_40_online'];
$track_41 = $_REQUEST['track_41_online'];
$track_42 = $_REQUEST['track_42_online'];
$track_43 = $_REQUEST['track_43_online'];
$track_44 = $_REQUEST['track_44_online'];
$track_45 = $_REQUEST['track_45_online'];
$track_46 = $_REQUEST['track_46_online'];
$track_47 = $_REQUEST['track_47_online'];
$track_48 = $_REQUEST['track_48_online'];
$track_49 = $_REQUEST['track_49_online'];
$track_50 = $_REQUEST['track_50_online'];
$track_51 = $_REQUEST['track_51_online'];
$track_52 = $_REQUEST['track_52_online'];
$track_53 = $_REQUEST['track_53_online'];
$track_54 = $_REQUEST['track_54_online'];
$track_55 = $_REQUEST['track_55_online'];
$track_56 = $_REQUEST['track_56_online'];
$track_57 = $_REQUEST['track_57_online'];
$track_58 = $_REQUEST['track_58_online'];
$track_59 = $_REQUEST['track_59_online'];
$track_60 = $_REQUEST['track_60_online'];
$track_61 = $_REQUEST['track_61_online'];
$track_62 = $_REQUEST['track_62_online'];
$track_63 = $_REQUEST['track_63_online'];
$track_64 = $_REQUEST['track_64_online'];
$track_65 = $_REQUEST['track_65_online'];
$track_66 = $_REQUEST['track_66_online'];
$track_67 = $_REQUEST['track_67_online'];
$track_68 = $_REQUEST['track_68_online'];
$track_69 = $_REQUEST['track_69_online'];
$track_70 = $_REQUEST['track_70_online'];
$track_71 = $_REQUEST['track_71_online'];
$track_72 = $_REQUEST['track_72_online'];
$track_73 = $_REQUEST['track_73_online'];
$track_74 = $_REQUEST['track_74_online'];
$track_75 = $_REQUEST['track_75_online'];
$track_76 = $_REQUEST['track_76_online'];
$track_77 = $_REQUEST['track_77_online'];
$track_78 = $_REQUEST['track_78_online'];
$track_79 = $_REQUEST['track_79_online'];
$track_80 = $_REQUEST['track_80_online'];
$track_81 = $_REQUEST['track_81_online'];
$track_82 = $_REQUEST['track_82_online'];
$track_83 = $_REQUEST['track_83_online'];
$track_84 = $_REQUEST['track_84_online'];
$track_85 = $_REQUEST['track_85_online'];
$track_86 = $_REQUEST['track_86_online'];
$track_87 = $_REQUEST['track_87_online'];
$track_88 = $_REQUEST['track_88_online'];
$track_89 = $_REQUEST['track_89_online'];
$track_90 = $_REQUEST['track_90_online'];
$track_91 = $_REQUEST['track_91_online'];
$track_92 = $_REQUEST['track_92_online'];
$track_93 = $_REQUEST['track_93_online'];
$track_94 = $_REQUEST['track_94_online'];
$track_95 = $_REQUEST['track_95_online'];
$track_96 = $_REQUEST['track_96_online'];
$track_97 = $_REQUEST['track_97_online'];
$track_98 = $_REQUEST['track_98_online'];
$track_99 = $_REQUEST['track_99_online'];
$track_100 = $_REQUEST['track_100_online'];
$track_101 = $_REQUEST['track_101_online'];
$track_102 = $_REQUEST['track_102_online'];
$track_103 = $_REQUEST['track_103_online'];
$track_104 = $_REQUEST['track_104_online'];
$track_105 = $_REQUEST['track_105_online'];
$track_106 = $_REQUEST['track_106_online'];
$track_107 = $_REQUEST['track_107_online'];
$track_108 = $_REQUEST['track_108_online'];
$track_109 = $_REQUEST['track_109_online'];
$track_110 = $_REQUEST['track_110_online'];
$track_111 = $_REQUEST['track_111_online'];
$track_112 = $_REQUEST['track_112_online'];
$track_113 = $_REQUEST['track_113_online'];
$track_114 = $_REQUEST['track_114_online'];

// create an array of the collected annotation data.
$annotation_value_array = array(
    $annotation_1_value,
    $annotation_2_value,
    $annotation_3_value,
    $annotation_4_value,
    $annotation_5_value,
    $annotation_6_value,
    $annotation_7_value,
    $annotation_8_value,
    $annotation_9_value,
    $annotation_10_value,
    $annotation_11_value,
    $annotation_12_value,
    $annotation_13_value,
    $annotation_14_value,
    $annotation_15_value,
    $annotation_16_value,
    $annotation_17_value,
    $annotation_18_value,
    $annotation_19_value,
    $annotation_20_value,
    $annotation_21_value,
    $annotation_22_value,
    $annotation_23_value,
    $annotation_24_value,
    $annotation_25_value,
    $annotation_26_value,
    $annotation_27_value,
    $annotation_28_value,
    $annotation_29_value,
    $annotation_30_value,
    $annotation_31_value,
    $annotation_32_value,
    $annotation_33_value,
    $annotation_34_value,
    $annotation_35_value,
    $annotation_36_value,
    $annotation_37_value,
    $annotation_38_value,
    $annotation_39_value,
    $annotation_40_value,
    $annotation_41_value,
    $annotation_42_value,
    $annotation_43_value,
    $annotation_44_value,
    $annotation_45_value,
    $annotation_46_value,
    $annotation_47_value,
    $annotation_48_value,
    $annotation_49_value,
    $annotation_50_value,
    $annotation_51_value,
    $annotation_52_value,
    $annotation_53_value,
    $annotation_54_value,
    $annotation_55_value,
    $annotation_56_value,
    $annotation_57_value,
    $annotation_58_value,
    $annotation_59_value,
    $annotation_60_value,
    $annotation_61_value,
    $annotation_62_value,
    $annotation_63_value,
    $annotation_64_value,
    $annotation_65_value,
    $annotation_66_value,
    $annotation_67_value,
    $annotation_68_value,
    $annotation_69_value,
    $annotation_70_value,
    $annotation_71_value,
    $annotation_72_value,
    $annotation_73_value,
    $annotation_74_value,
    $annotation_75_value,
    $annotation_76_value,
    $annotation_77_value,
    $annotation_78_value,
    $annotation_79_value,
    $annotation_80_value,
    $annotation_81_value,
    $annotation_82_value,
    $annotation_83_value,
    $annotation_84_value,
    $annotation_85_value,
    $annotation_86_value,
    $annotation_87_value,
    $annotation_88_value,
    $annotation_89_value,
    $annotation_90_value,
    $annotation_91_value,
    $annotation_92_value,
    $annotation_93_value,
    $annotation_94_value,
    $annotation_95_value,
    $annotation_96_value,
    $annotation_97_value,
    $annotation_98_value,
    $annotation_99_value,
    $annotation_100_value,
    $annotation_101_value,
    $annotation_102_value,
    $annotation_103_value,
    $annotation_104_value,
    $annotation_105_value,
    $annotation_106_value,
    $annotation_107_value,
    $annotation_108_value,
    $annotation_109_value,
    $annotation_110_value,
    $annotation_111_value,
    $annotation_112_value,
    $annotation_113_value,
    $annotation_114_value,
    $annotation_115_value,
    $annotation_116_value,
    $annotation_117_value,
    $annotation_118_value,
    $annotation_119_value,
    $annotation_120_value,
    $annotation_121_value,
    $annotation_122_value,
    $annotation_123_value,
    $annotation_124_value,
    $annotation_125_value,
    $annotation_126_value,
    $annotation_127_value,
    $annotation_128_value,
    $annotation_129_value,
    $annotation_130_value,
    $annotation_131_value,
    $annotation_132_value,
    $annotation_133_value,
    $annotation_134_value,
    $annotation_135_value,
    $annotation_136_value,
    $annotation_137_value,
    $annotation_138_value,
    $annotation_139_value,
    $annotation_140_value,
    $annotation_141_value,
    $annotation_142_value,
    $annotation_143_value,
    $annotation_144_value,
    $annotation_145_value,
    $annotation_146_value,
    $annotation_147_value,
    $annotation_148_value,
    $annotation_149_value,
    $annotation_150_value,
    $annotation_151_value,
    $annotation_152_value,
    $annotation_153_value,
    $annotation_154_value,
    $annotation_155_value,
    $annotation_156_value,
    $annotation_157_value,
    $annotation_158_value,
    $annotation_159_value,
    $annotation_160_value,
    $annotation_161_value,
    $annotation_162_value,
    $annotation_163_value,
    $annotation_164_value,
    $annotation_165_value,
    $annotation_166_value,
    $annotation_167_value,
    $annotation_168_value,
    $annotation_169_value,
    $annotation_170_value,
    $annotation_171_value,
    $annotation_172_value,
    $annotation_173_value,
    $annotation_174_value,
    $annotation_175_value,
    $annotation_176_value,
    $annotation_177_value,
    $annotation_178_value,
    $annotation_179_value,
    $annotation_180_value,
    $annotation_181_value,
    $annotation_182_value,
    $annotation_183_value,
    $annotation_184_value,
    $annotation_185_value,
    $annotation_186_value,
    $annotation_187_value,
    $annotation_188_value,
    $annotation_189_value,
    $annotation_190_value,
    $annotation_191_value,
    $annotation_192_value,
    $annotation_193_value,
    $annotation_194_value,
    $annotation_195_value,
    $annotation_196_value,
    $annotation_197_value,
    $annotation_198_value,
    $annotation_199_value,
    $annotation_200_value,
    $annotation_201_value,
    $annotation_202_value,
    $annotation_203_value,
    $annotation_204_value,
    $annotation_205_value,
    $annotation_206_value,
    $annotation_207_value,
    $annotation_208_value,
    $annotation_209_value,
    $annotation_210_value,
    $annotation_211_value,
    $annotation_212_value,
    $annotation_213_value,
    $annotation_214_value,
    $annotation_215_value,
    $annotation_216_value,
    $annotation_217_value,
    $annotation_218_value,
    $annotation_219_value,
    $annotation_220_value,
    $annotation_221_value,
    $annotation_222_value,
    $annotation_223_value,
    $annotation_224_value,
    $annotation_225_value,
    $annotation_226_value,
    $annotation_227_value,
    $annotation_228_value,
    $annotation_229_value,
    $annotation_230_value,
    $annotation_231_value,
    $annotation_232_value,
    $annotation_233_value,
    $annotation_234_value,
    $annotation_235_value,
    $annotation_236_value,
    $annotation_237_value,
    $annotation_238_value,
    $annotation_239_value,
    $annotation_240_value,
    $annotation_241_value,
    $annotation_242_value,
    $annotation_243_value,
    $annotation_244_value,
    $annotation_245_value,
    $annotation_246_value,
    $annotation_247_value,
    $annotation_248_value,
    $annotation_249_value,
    $annotation_250_value,
    $annotation_251_value,
    $annotation_252_value,
    $annotation_253_value,
    $annotation_254_value,
    $annotation_255_value,
    $annotation_256_value,
    $annotation_257_value,
    $annotation_258_value,
    $annotation_259_value,
    $annotation_260_value,
    $annotation_261_value,
    $annotation_262_value,
    $annotation_263_value,
    $annotation_264_value,
    $annotation_265_value,
    $annotation_266_value,
    $annotation_267_value,
    $annotation_268_value,
    $annotation_269_value,
    $annotation_270_value,
    $annotation_271_value,
    $annotation_272_value,
    $annotation_273_value,
    $annotation_274_value,
    $annotation_275_value,
    $annotation_276_value,
    $annotation_277_value,
    $annotation_278_value,
    $annotation_279_value,
    $annotation_280_value,
    $annotation_281_value,
    $annotation_282_value,
    $annotation_283_value,
    $annotation_284_value,
    $annotation_285_value,
    $annotation_286_value,
    $annotation_287_value,
    $annotation_288_value,
    $annotation_289_value,
    $annotation_290_value,
    $annotation_291_value,
    $annotation_292_value,
    $annotation_293_value,
    $annotation_294_value,
    $annotation_295_value,
    $annotation_296_value,
    $annotation_297_value,
    $annotation_298_value,
    $annotation_299_value,
    $annotation_300_value,
    $annotation_301_value,
    $annotation_302_value,
    $annotation_303_value,
    $annotation_304_value,
    $annotation_305_value,
    $annotation_306_value,
    $annotation_307_value,
    $annotation_308_value,
    $annotation_309_value,
    $annotation_310_value,
    $annotation_311_value,
    $annotation_312_value,
    $annotation_313_value,
    $annotation_314_value,
    $annotation_315_value,
    $annotation_316_value,
    $annotation_317_value,
    $annotation_318_value,
    $annotation_319_value,
    $annotation_320_value,
    $annotation_321_value,
    $annotation_322_value,
    $annotation_323_value,
    $annotation_324_value,
    $annotation_325_value,
    $annotation_326_value,
    $annotation_327_value,
    $annotation_328_value,
    $annotation_329_value,
    $annotation_330_value,
    $annotation_331_value,
    $annotation_332_value,
    $annotation_333_value,
    $annotation_334_value,
    $annotation_335_value,
    $annotation_336_value,
    $annotation_337_value,
    $annotation_338_value,
    $annotation_339_value,
    $annotation_340_value,
    $annotation_341_value,
    $annotation_342_value);

// To create an array of the collected track data.
$track_order = array($track_1,$track_2,$track_3,$track_4,$track_5,$track_6,$track_7,$track_8,$track_9,$track_10,$track_11,$track_12,$track_13,
$track_14,$track_15,$track_16,$track_17,$track_18,$track_19,$track_20,$track_21,$track_22,$track_23,$track_24,$track_25,$track_26,
$track_27,$track_28,$track_29,$track_30,$track_31,$track_32,$track_33,$track_34,$track_35,$track_36,$track_37,$track_38,$track_39,
$track_40,$track_41,$track_42,$track_43,$track_44,$track_45,$track_46,$track_47,$track_48,$track_49,$track_50,$track_51,$track_52,
$track_53,$track_54,$track_55,$track_56,$track_57,$track_58,$track_59,$track_60,$track_61,$track_63,$track_64,$track_65,$track_66,
$track_67,$track_68,$track_69,$track_70,$track_71,$track_72,$track_73,$track_74,$track_75,$track_76,$track_77,$track_78,$track_79,
$track_80,$track_81,$track_82,$track_83,$track_84,$track_85,$track_86,$track_87,$track_88,$track_89,$track_90,$track_91,$track_92,
$track_93,$track_94,$track_95,$track_96,$track_97,$track_98,$track_99,$track_100,$track_101,$track_102,$track_103,$track_104,$track_105,
$track_106,$track_107,$track_108,$track_109,$track_111,$track_112,$track_113,$track_114);

# Convert the track_order_list to string and then assign to the newly created variable.
$track_order_string = implode(',',$track_order);


// Performing insert query execution 
$sql = "UPDATE usertable 
SET annotation_1 = '$annotation_1_value',
annotation_2 = '$annotation_2_value',   
annotation_3 = '$annotation_3_value',
annotation_4 = '$annotation_4_value',
annotation_5 = '$annotation_5_value',
annotation_6 = '$annotation_6_value',
annotation_7 = '$annotation_7_value',
annotation_8 = '$annotation_8_value',
annotation_9 = '$annotation_9_value',
annotation_10 = '$annotation_10_value',
annotation_11 = '$annotation_11_value',
annotation_12 = '$annotation_12_value',
annotation_13 = '$annotation_13_value',
annotation_14 = '$annotation_14_value',
annotation_15 = '$annotation_15_value',
annotation_16 = '$annotation_16_value',
annotation_17 = '$annotation_17_value',
annotation_18 = '$annotation_18_value',
annotation_19 = '$annotation_19_value',
annotation_20 = '$annotation_20_value',
annotation_21 = '$annotation_21_value',
annotation_22 = '$annotation_22_value',
annotation_23 = '$annotation_23_value',
annotation_24 = '$annotation_24_value',
annotation_25 = '$annotation_25_value',
annotation_26 = '$annotation_26_value',
annotation_27 = '$annotation_27_value',
annotation_28 = '$annotation_28_value',
annotation_29 = '$annotation_29_value',
annotation_30 = '$annotation_30_value',
annotation_31 = '$annotation_31_value',
annotation_32 = '$annotation_32_value',
annotation_33 = '$annotation_33_value',
annotation_34 = '$annotation_34_value',
annotation_35 = '$annotation_35_value',
annotation_36 = '$annotation_36_value',
annotation_37 = '$annotation_37_value',
annotation_38 = '$annotation_38_value',
annotation_39 = '$annotation_39_value',
annotation_40 = '$annotation_40_value',
annotation_41 = '$annotation_41_value',
annotation_42 = '$annotation_42_value',
annotation_43 = '$annotation_43_value',
annotation_44 = '$annotation_44_value',
annotation_45 = '$annotation_45_value',
annotation_46 = '$annotation_46_value',
annotation_47 = '$annotation_47_value',
annotation_48 = '$annotation_48_value',
annotation_49 = '$annotation_49_value',
annotation_50 = '$annotation_50_value',
annotation_51 = '$annotation_51_value',
annotation_52 = '$annotation_52_value',
annotation_53 = '$annotation_53_value',
annotation_54 = '$annotation_54_value',
annotation_55 = '$annotation_55_value',
annotation_56 = '$annotation_56_value',
annotation_57 = '$annotation_57_value',
annotation_58 = '$annotation_58_value',
annotation_59 = '$annotation_59_value',
annotation_60 = '$annotation_60_value',
annotation_61 = '$annotation_61_value',
annotation_62 = '$annotation_62_value',
annotation_63 = '$annotation_63_value',
annotation_64 = '$annotation_64_value',
annotation_65 = '$annotation_65_value',
annotation_66 = '$annotation_66_value',
annotation_67 = '$annotation_67_value',
annotation_68 = '$annotation_68_value',
annotation_69 = '$annotation_69_value',
annotation_70 = '$annotation_70_value',
annotation_71 = '$annotation_71_value',
annotation_72 = '$annotation_72_value',
annotation_73 = '$annotation_73_value',
annotation_74 = '$annotation_74_value',
annotation_75 = '$annotation_75_value',
annotation_76 = '$annotation_76_value',
annotation_77 = '$annotation_77_value',
annotation_78 = '$annotation_78_value',
annotation_79 = '$annotation_79_value',
annotation_80 = '$annotation_80_value',
annotation_81 = '$annotation_81_value',
annotation_82 = '$annotation_82_value',
annotation_83 = '$annotation_83_value',
annotation_84 = '$annotation_84_value',
annotation_85 = '$annotation_85_value',
annotation_86 = '$annotation_86_value',
annotation_87 = '$annotation_87_value',
annotation_88 = '$annotation_88_value',
annotation_89 = '$annotation_89_value',
annotation_90 = '$annotation_90_value',
annotation_91 = '$annotation_91_value',
annotation_92 = '$annotation_92_value',
annotation_93 = '$annotation_93_value',
annotation_94 = '$annotation_94_value',
annotation_95 = '$annotation_95_value',
annotation_96 = '$annotation_96_value',
annotation_97 = '$annotation_97_value',
annotation_98 = '$annotation_98_value',
annotation_99 = '$annotation_99_value',
annotation_100 = '$annotation_100_value',
annotation_101 = '$annotation_101_value',
annotation_102 = '$annotation_102_value',
annotation_103 = '$annotation_103_value',
annotation_104 = '$annotation_104_value',
annotation_105 = '$annotation_105_value',
annotation_106 = '$annotation_106_value',
annotation_107 = '$annotation_107_value',
annotation_108 = '$annotation_108_value',
annotation_109 = '$annotation_109_value',
annotation_110 = '$annotation_110_value',
annotation_111 = '$annotation_111_value',
annotation_112 = '$annotation_112_value',
annotation_113 = '$annotation_113_value',
annotation_114 = '$annotation_114_value',
annotation_115 = '$annotation_115_value',
annotation_116 = '$annotation_116_value',
annotation_117 = '$annotation_117_value',
annotation_118 = '$annotation_118_value',
annotation_119 = '$annotation_119_value',
annotation_120 = '$annotation_120_value',
annotation_121 = '$annotation_121_value',
annotation_122 = '$annotation_122_value',
annotation_123 = '$annotation_123_value',
annotation_124 = '$annotation_124_value',
annotation_125 = '$annotation_125_value',
annotation_126 = '$annotation_126_value',
annotation_127 = '$annotation_127_value',
annotation_128 = '$annotation_128_value',
annotation_129 = '$annotation_129_value',
annotation_130 = '$annotation_130_value',
annotation_131 = '$annotation_131_value',
annotation_132 = '$annotation_132_value',
annotation_133 = '$annotation_133_value',
annotation_134 = '$annotation_134_value',
annotation_135 = '$annotation_135_value',
annotation_136 = '$annotation_136_value',
annotation_137 = '$annotation_137_value',
annotation_138 = '$annotation_138_value',
annotation_139 = '$annotation_139_value',
annotation_140 = '$annotation_140_value',
annotation_141 = '$annotation_141_value',
annotation_142 = '$annotation_142_value',
annotation_143 = '$annotation_143_value',
annotation_144 = '$annotation_144_value',
annotation_145 = '$annotation_145_value',
annotation_146 = '$annotation_146_value',
annotation_147 = '$annotation_147_value',
annotation_148 = '$annotation_148_value',
annotation_149 = '$annotation_149_value',
annotation_150 = '$annotation_150_value',
annotation_151 = '$annotation_151_value',
annotation_152 = '$annotation_152_value',
annotation_153 = '$annotation_153_value',
annotation_154 = '$annotation_154_value',
annotation_155 = '$annotation_155_value',
annotation_156 = '$annotation_156_value',
annotation_157 = '$annotation_157_value',
annotation_158 = '$annotation_158_value',
annotation_159 = '$annotation_159_value',
annotation_160 = '$annotation_160_value',
annotation_161 = '$annotation_161_value',
annotation_162 = '$annotation_162_value',
annotation_163 = '$annotation_163_value',
annotation_164 = '$annotation_164_value',
annotation_165 = '$annotation_165_value',
annotation_166 = '$annotation_166_value',
annotation_167 = '$annotation_167_value',
annotation_168 = '$annotation_168_value',
annotation_169 = '$annotation_169_value',
annotation_170 = '$annotation_170_value',
annotation_171 = '$annotation_171_value',
annotation_172 = '$annotation_172_value',
annotation_173 = '$annotation_173_value',
annotation_174 = '$annotation_174_value',
annotation_175 = '$annotation_175_value',
annotation_176 = '$annotation_176_value',
annotation_177 = '$annotation_177_value',
annotation_178 = '$annotation_178_value',
annotation_179 = '$annotation_179_value',
annotation_180 = '$annotation_180_value',
annotation_181 = '$annotation_181_value',
annotation_182 = '$annotation_182_value',
annotation_183 = '$annotation_183_value',
annotation_184 = '$annotation_184_value',
annotation_185 = '$annotation_185_value',
annotation_186 = '$annotation_186_value',
annotation_187 = '$annotation_187_value',
annotation_188 = '$annotation_188_value',
annotation_189 = '$annotation_189_value',
annotation_190 = '$annotation_190_value',
annotation_191 = '$annotation_191_value',
annotation_192 = '$annotation_192_value',
annotation_193 = '$annotation_193_value',
annotation_194 = '$annotation_194_value',
annotation_195 = '$annotation_195_value',
annotation_196 = '$annotation_196_value',
annotation_197 = '$annotation_197_value',
annotation_198 = '$annotation_198_value',
annotation_199 = '$annotation_199_value',
annotation_200 = '$annotation_200_value',
annotation_201 = '$annotation_201_value',
annotation_202 = '$annotation_202_value',
annotation_203 = '$annotation_203_value',
annotation_204 = '$annotation_204_value',
annotation_205 = '$annotation_205_value',
annotation_206 = '$annotation_206_value',
annotation_207 = '$annotation_207_value',
annotation_208 = '$annotation_208_value',
annotation_209 = '$annotation_209_value',
annotation_210 = '$annotation_210_value',
annotation_211 = '$annotation_211_value',
annotation_212 = '$annotation_212_value',
annotation_213 = '$annotation_213_value',
annotation_214 = '$annotation_214_value',
annotation_215 = '$annotation_215_value',
annotation_216 = '$annotation_216_value',
annotation_217 = '$annotation_217_value',
annotation_218 = '$annotation_218_value',
annotation_219 = '$annotation_219_value',
annotation_220 = '$annotation_220_value',
annotation_221 = '$annotation_221_value',
annotation_222 = '$annotation_222_value',
annotation_223 = '$annotation_223_value',
annotation_224 = '$annotation_224_value',
annotation_225 = '$annotation_225_value',
annotation_226 = '$annotation_226_value',
annotation_227 = '$annotation_227_value',
annotation_228 = '$annotation_228_value',
annotation_229 = '$annotation_229_value',
annotation_230 = '$annotation_230_value',
annotation_231 = '$annotation_231_value',
annotation_232 = '$annotation_232_value',
annotation_233 = '$annotation_233_value',
annotation_234 = '$annotation_234_value',
annotation_235 = '$annotation_235_value',
annotation_236 = '$annotation_236_value',
annotation_237 = '$annotation_237_value',
annotation_238 = '$annotation_238_value',
annotation_239 = '$annotation_239_value',
annotation_240 = '$annotation_240_value',
annotation_241 = '$annotation_241_value',
annotation_242 = '$annotation_242_value',
annotation_243 = '$annotation_243_value',
annotation_244 = '$annotation_244_value',
annotation_245 = '$annotation_245_value',
annotation_246 = '$annotation_246_value',
annotation_247 = '$annotation_247_value',
annotation_248 = '$annotation_248_value',
annotation_249 = '$annotation_249_value',
annotation_250 = '$annotation_250_value',
annotation_251 = '$annotation_251_value',
annotation_252 = '$annotation_252_value',
annotation_253 = '$annotation_253_value',
annotation_254 = '$annotation_254_value',
annotation_255 = '$annotation_255_value',
annotation_256 = '$annotation_256_value',
annotation_257 = '$annotation_257_value',
annotation_258 = '$annotation_258_value',
annotation_259 = '$annotation_259_value',
annotation_260 = '$annotation_260_value',
annotation_261 = '$annotation_261_value',
annotation_262 = '$annotation_262_value',
annotation_263 = '$annotation_263_value',
annotation_264 = '$annotation_264_value',
annotation_265 = '$annotation_265_value',
annotation_266 = '$annotation_266_value',
annotation_267 = '$annotation_267_value',
annotation_268 = '$annotation_268_value',
annotation_269 = '$annotation_269_value',
annotation_270 = '$annotation_270_value',
annotation_271 = '$annotation_271_value',
annotation_272 = '$annotation_272_value',
annotation_273 = '$annotation_273_value',
annotation_274 = '$annotation_274_value',
annotation_275 = '$annotation_275_value',
annotation_276 = '$annotation_276_value',
annotation_277 = '$annotation_277_value',
annotation_278 = '$annotation_278_value',
annotation_279 = '$annotation_279_value',
annotation_280 = '$annotation_280_value',
annotation_281 = '$annotation_281_value',
annotation_282 = '$annotation_282_value',
annotation_283 = '$annotation_283_value',
annotation_284 = '$annotation_284_value',
annotation_285 = '$annotation_285_value',
annotation_286 = '$annotation_286_value',
annotation_287 = '$annotation_287_value',
annotation_288 = '$annotation_288_value',
annotation_289 = '$annotation_289_value',
annotation_290 = '$annotation_290_value',
annotation_291 = '$annotation_291_value',
annotation_292 = '$annotation_292_value',
annotation_293 = '$annotation_293_value',
annotation_294 = '$annotation_294_value',
annotation_295 = '$annotation_295_value',
annotation_296 = '$annotation_296_value',
annotation_297 = '$annotation_297_value',
annotation_298 = '$annotation_298_value',
annotation_299 = '$annotation_299_value',
annotation_300 = '$annotation_300_value',
annotation_301 = '$annotation_301_value',
annotation_302 = '$annotation_302_value',
annotation_303 = '$annotation_303_value',
annotation_304 = '$annotation_304_value',
annotation_305 = '$annotation_305_value',
annotation_306 = '$annotation_306_value',
annotation_307 = '$annotation_307_value',
annotation_308 = '$annotation_308_value',
annotation_309 = '$annotation_309_value',
annotation_310 = '$annotation_310_value',
annotation_311 = '$annotation_311_value',
annotation_312 = '$annotation_312_value',
annotation_313 = '$annotation_313_value',
annotation_314 = '$annotation_314_value',
annotation_315 = '$annotation_315_value',
annotation_316 = '$annotation_316_value',
annotation_317 = '$annotation_317_value',
annotation_318 = '$annotation_318_value',
annotation_319 = '$annotation_319_value',
annotation_320 = '$annotation_320_value',
annotation_321 = '$annotation_321_value',
annotation_322 = '$annotation_322_value',
annotation_323 = '$annotation_323_value',
annotation_324 = '$annotation_324_value',
annotation_325 = '$annotation_325_value',
annotation_326 = '$annotation_326_value',
annotation_327 = '$annotation_327_value',
annotation_328 = '$annotation_328_value',
annotation_329 = '$annotation_329_value',
annotation_330 = '$annotation_330_value',
annotation_331 = '$annotation_331_value',
annotation_332 = '$annotation_332_value',
annotation_333 = '$annotation_333_value',
annotation_334 = '$annotation_334_value',
annotation_335 = '$annotation_335_value',
annotation_336 = '$annotation_336_value',
annotation_337 = '$annotation_337_value',
annotation_338 = '$annotation_338_value',
annotation_339 = '$annotation_339_value',
annotation_340 = '$annotation_340_value',
annotation_341 = '$annotation_341_value',
annotation_342 = '$annotation_342_value', 
track_order_online = '$track_order_string',
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
$element_count_total = count($annotation_value_array);

$initial_value_array = array('0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4',
'0','0','4');


function check_index($annotation_value_array){
    for ($i = 0;$i < $element_count_total-2; $i +=3){
        if($annotation_value_array[$i] == 0){
            if($annotation_value_array[$i+1] == 0){
                if($annotation_value_array[$i+2] == 0){
                    $temp_num = $i;
                    break;
                }
                
            }
            
        }
    else{
        $temp_num = 339;
    }    
    return $temp_num;
}
}

$element_count = check_index($annotation_value_array);

for($i=0; $i < $element_count-2; $i+=3){
    if($annotation_value_array[$i] == 0){
        if($annotation_value_array[$i+1] == 0){
            if($annotation_value_array[$i+2] == 4){
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Please answer each question properly!');
                window.location.href='./annotation_task.php';
                </script>");
                exit();
    }}}}


$element_count = check_index($annotation_value_array);
# When a user answers all the questions properly, the input values are stored to the databse.
$result_1 = mysqli_query($con, $sql);
if($result_1){
    if($element_count == 339){
        for($i=0; $i < $element_count-2; $i+=3){
            if($annotation_value_array[$i] == 0){
                if($annotation_value_array[$i+1] == 0){
                    if($annotation_value_array[$i+2] == 4){
                        echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Please answer the questions properly!');
                        window.location.href='./annotation_task.php';
                        </script>");
                        exit();
                    }}}}
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Saved Successfully!');
        window.location.href='./demographic.php';
        </script>");
        exit();
    }
    else{   
            echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Saved Successfully!');
        window.location.href='./select-test.php';
        </script>");
        exit();
    }

}
else{
       echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Saved Successfully!');
        window.location.href='./select-test.php';
        </script>");
        exit();
}


mysqli_close($con);
?>

