<!-- To call the "connection.php" file in order to make a connection to the database -->
<!-- To call the "controllerUserData.php" in order to use necessary functions for the website -->
<?php require_once "controllerUserData.php"; 
require_once "connection.php";

//Retrieving all rows of a logged-in user to assign each track and annotation values. 
$email = $_SESSION['email'];
$sql = "SELECT * FROM usertable WHERE email = '$email'";

if($result = mysqli_query($con, $sql)){
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
            $track_1 =  $row['track_1'];
            $track_2 =  $row['track_2'];
            $track_3 =  $row['track_3'];
            $track_4 =  $row['track_4'];
            $track_5 =  $row['track_5'];
            $track_6 =  $row['track_6'];
            $track_7 =  $row['track_7'];
            $track_8 =  $row['track_8'];
            $track_9 =  $row['track_9'];
            $track_10 =  $row['track_10'];
            $track_11 =  $row['track_11'];
            $track_12 =  $row['track_12'];
            $track_13 =  $row['track_13'];
            $track_14 =  $row['track_14'];
            $track_15 =  $row['track_15'];
            $track_16 =  $row['track_16'];
            $track_17 =  $row['track_17'];
            $track_18 =  $row['track_18'];
            $track_19 =  $row['track_19'];
            $track_20 =  $row['track_20'];
            $track_21 =  $row['track_21'];
            $track_22 =  $row['track_22'];
            $track_23 =  $row['track_23'];
            $track_24 =  $row['track_24'];
            $track_25 =  $row['track_25'];
            $track_26 =  $row['track_26'];
            $track_27 =  $row['track_27'];
            $track_28 =  $row['track_28'];
            $track_29 =  $row['track_29'];
            $track_30 =  $row['track_30'];
            $track_31 =  $row['track_31'];
            $track_32 =  $row['track_32'];
            $track_33 =  $row['track_33'];
            $track_34 =  $row['track_34'];
            $track_35 =  $row['track_35'];
            $track_36 =  $row['track_36'];
            $track_37 =  $row['track_37'];
            $track_38 =  $row['track_38'];
            $track_39 =  $row['track_39'];
            $track_40 =  $row['track_40'];
            $track_41 =  $row['track_41'];
            $track_42 =  $row['track_42'];
            $track_43 =  $row['track_43'];
            $track_44 =  $row['track_44'];
            $track_45 =  $row['track_45'];
            $track_46 =  $row['track_46'];
            $track_47 =  $row['track_47'];
            $track_48 =  $row['track_48'];
            $track_49 =  $row['track_49'];
            $track_50 =  $row['track_50'];
            $track_51 =  $row['track_51'];
            $track_52 =  $row['track_52'];
            $track_53 =  $row['track_53'];
            $track_54 =  $row['track_54'];
            $track_55 =  $row['track_55'];
            $track_56 =  $row['track_56'];
            $track_57 =  $row['track_57'];
            $track_58 =  $row['track_58'];
            $track_59 =  $row['track_59'];
            $track_60 =  $row['track_60'];
            $track_61 =  $row['track_61'];
            $track_62 =  $row['track_62'];
            $track_63 =  $row['track_63'];
            $track_64 =  $row['track_64'];
            $track_65 =  $row['track_65'];
            $track_66 =  $row['track_66'];
            $track_67 =  $row['track_67'];
            $track_68 =  $row['track_68'];
            $track_69 =  $row['track_69'];
            $track_70 =  $row['track_70'];
            $track_71 =  $row['track_71'];
            $track_72 =  $row['track_72'];
            $track_73 =  $row['track_73'];
            $track_74 =  $row['track_74'];
            $track_75 =  $row['track_75'];
            $track_76 =  $row['track_76'];
            $track_77 =  $row['track_77'];
            $track_78 =  $row['track_78'];
            $track_79 =  $row['track_79'];
            $track_80 =  $row['track_80'];
            $track_81 =  $row['track_81'];
            $track_82 =  $row['track_82'];
            $track_83 =  $row['track_83'];
            $track_84 =  $row['track_84'];
            $track_85 =  $row['track_85'];
            $track_86 =  $row['track_86'];
            $track_87 =  $row['track_87'];
            $track_88 =  $row['track_88'];
            $track_89 =  $row['track_89'];
            $track_90 =  $row['track_90'];
            $track_91 =  $row['track_91'];
            $track_92 =  $row['track_92'];
            $track_93 =  $row['track_93'];
            $track_94 =  $row['track_94'];
            $track_95 =  $row['track_95'];
            $track_96 =  $row['track_96'];
            $track_97 =  $row['track_97'];
            $track_98 =  $row['track_98'];
            $track_99 =  $row['track_99'];
            $track_100 =  $row['track_100'];
            $track_101 =  $row['track_101'];
            $track_102 =  $row['track_102'];
            $track_103 =  $row['track_103'];
            $track_104 =  $row['track_104'];
            $track_105 =  $row['track_105'];
            $track_106 =  $row['track_106'];
            $track_107 =  $row['track_107'];
            $track_108 =  $row['track_108'];
            $track_109 =  $row['track_109'];
            $track_110 =  $row['track_110'];
            $track_111 =  $row['track_111'];
            $track_112 =  $row['track_112'];
            $track_113 =  $row['track_113'];
            $track_114 =  $row['track_114'];
            
            $annotation_1 =  $row['annotation_1'];
            $annotation_2 =  $row['annotation_2'];
            $annotation_3 =  $row['annotation_3'];
            $annotation_4 =  $row['annotation_4'];
            $annotation_5 =  $row['annotation_5'];
            $annotation_6 =  $row['annotation_6'];
            $annotation_7 =  $row['annotation_7'];
            $annotation_8 =  $row['annotation_8'];
            $annotation_9 =  $row['annotation_9'];
            $annotation_10 =  $row['annotation_10'];
            $annotation_11 =  $row['annotation_11'];
            $annotation_12 =  $row['annotation_12'];
            $annotation_13 =  $row['annotation_13'];
            $annotation_14 =  $row['annotation_14'];
            $annotation_15 =  $row['annotation_15'];
            $annotation_16 =  $row['annotation_16'];
            $annotation_17 =  $row['annotation_17'];
            $annotation_18 =  $row['annotation_18'];
            $annotation_19 =  $row['annotation_19'];
            $annotation_20 =  $row['annotation_20'];
            $annotation_21 =  $row['annotation_21'];
            $annotation_22 =  $row['annotation_22'];
            $annotation_23 =  $row['annotation_23'];
            $annotation_24 =  $row['annotation_24'];
            $annotation_25 =  $row['annotation_25'];
            $annotation_26 =  $row['annotation_26'];
            $annotation_27 =  $row['annotation_27'];
            $annotation_28 =  $row['annotation_28'];
            $annotation_29 =  $row['annotation_29'];
            $annotation_30 =  $row['annotation_30'];
            $annotation_31 =  $row['annotation_31'];
            $annotation_32 =  $row['annotation_32'];
            $annotation_33 =  $row['annotation_33'];
            $annotation_34 =  $row['annotation_34'];
            $annotation_35 =  $row['annotation_35'];
            $annotation_36 =  $row['annotation_36'];
            $annotation_37 =  $row['annotation_37'];
            $annotation_38 =  $row['annotation_38'];
            $annotation_39 =  $row['annotation_39'];
            $annotation_40 =  $row['annotation_40'];
            $annotation_41 =  $row['annotation_41'];
            $annotation_42 =  $row['annotation_42'];
            $annotation_43 =  $row['annotation_43'];
            $annotation_44 =  $row['annotation_44'];
            $annotation_45 =  $row['annotation_45'];
            $annotation_46 =  $row['annotation_46'];
            $annotation_47 =  $row['annotation_47'];
            $annotation_48 =  $row['annotation_48'];
            $annotation_49 =  $row['annotation_49'];
            $annotation_50 =  $row['annotation_50'];
            $annotation_51 =  $row['annotation_51'];
            $annotation_52 =  $row['annotation_52'];
            $annotation_53 =  $row['annotation_53'];
            $annotation_54 =  $row['annotation_54'];
            $annotation_55 =  $row['annotation_55'];
            $annotation_56 =  $row['annotation_56'];
            $annotation_57 =  $row['annotation_57'];
            $annotation_58 =  $row['annotation_58'];
            $annotation_59 =  $row['annotation_59'];
            $annotation_60 =  $row['annotation_60'];
            $annotation_61 =  $row['annotation_61'];
            $annotation_62 =  $row['annotation_62'];
            $annotation_63 =  $row['annotation_63'];
            $annotation_64 =  $row['annotation_64'];
            $annotation_65 =  $row['annotation_65'];
            $annotation_66 =  $row['annotation_66'];
            $annotation_67 =  $row['annotation_67'];
            $annotation_68 =  $row['annotation_68'];
            $annotation_69 =  $row['annotation_69'];
            $annotation_70 =  $row['annotation_70'];
            $annotation_71 =  $row['annotation_71'];
            $annotation_72 =  $row['annotation_72'];
            $annotation_73 =  $row['annotation_73'];
            $annotation_74 =  $row['annotation_74'];
            $annotation_75 =  $row['annotation_75'];
            $annotation_76 =  $row['annotation_76'];
            $annotation_77 =  $row['annotation_77'];
            $annotation_78 =  $row['annotation_78'];
            $annotation_79 =  $row['annotation_79'];
            $annotation_80 =  $row['annotation_80'];
            $annotation_81 =  $row['annotation_81'];
            $annotation_82 =  $row['annotation_82'];
            $annotation_83 =  $row['annotation_83'];
            $annotation_84 =  $row['annotation_84'];
            $annotation_85 =  $row['annotation_85'];
            $annotation_86 =  $row['annotation_86'];
            $annotation_87 =  $row['annotation_87'];
            $annotation_88 =  $row['annotation_88'];
            $annotation_89 =  $row['annotation_89'];
            $annotation_90 =  $row['annotation_90'];
            $annotation_91 =  $row['annotation_91'];
            $annotation_92 =  $row['annotation_92'];
            $annotation_93 =  $row['annotation_93'];
            $annotation_94 =  $row['annotation_94'];
            $annotation_95 =  $row['annotation_95'];
            $annotation_96 =  $row['annotation_96'];
            $annotation_97 =  $row['annotation_97'];
            $annotation_98 =  $row['annotation_98'];
            $annotation_99 =  $row['annotation_99'];
            $annotation_100 =  $row['annotation_100'];
            $annotation_101 =  $row['annotation_101'];
            $annotation_102 =  $row['annotation_102'];
            $annotation_103 =  $row['annotation_103'];
            $annotation_104 =  $row['annotation_104'];
            $annotation_105 =  $row['annotation_105'];
            $annotation_106 =  $row['annotation_106'];
            $annotation_107 =  $row['annotation_107'];
            $annotation_108 =  $row['annotation_108'];
            $annotation_109 =  $row['annotation_109'];
            $annotation_110 =  $row['annotation_110'];
            $annotation_111 =  $row['annotation_111'];
            $annotation_112 =  $row['annotation_112'];
            $annotation_113 =  $row['annotation_113'];
            $annotation_114 =  $row['annotation_114'];
            $annotation_115 =  $row['annotation_115'];
            $annotation_116 =  $row['annotation_116'];
            $annotation_117 =  $row['annotation_117'];
            $annotation_118 =  $row['annotation_118'];
            $annotation_119 =  $row['annotation_119'];
            $annotation_120 =  $row['annotation_120'];
            $annotation_121 =  $row['annotation_121'];
            $annotation_122 =  $row['annotation_122'];
            $annotation_123 =  $row['annotation_123'];
            $annotation_124 =  $row['annotation_124'];
            $annotation_125 =  $row['annotation_125'];
            $annotation_126 =  $row['annotation_126'];
            $annotation_127 =  $row['annotation_127'];
            $annotation_128 =  $row['annotation_128'];
            $annotation_129 =  $row['annotation_129'];
            $annotation_130 =  $row['annotation_130'];
            $annotation_131 =  $row['annotation_131'];
            $annotation_132 =  $row['annotation_132'];
            $annotation_133 =  $row['annotation_133'];
            $annotation_134 =  $row['annotation_134'];
            $annotation_135 =  $row['annotation_135'];
            $annotation_136 =  $row['annotation_136'];
            $annotation_137 =  $row['annotation_137'];
            $annotation_138 =  $row['annotation_138'];
            $annotation_139 =  $row['annotation_139'];
            $annotation_140 =  $row['annotation_140'];
            $annotation_141 =  $row['annotation_141'];
            $annotation_142 =  $row['annotation_142'];
            $annotation_143 =  $row['annotation_143'];
            $annotation_144 =  $row['annotation_144'];
            $annotation_145 =  $row['annotation_145'];
            $annotation_146 =  $row['annotation_146'];
            $annotation_147 =  $row['annotation_147'];
            $annotation_148 =  $row['annotation_148'];
            $annotation_149 =  $row['annotation_149'];
            $annotation_150 =  $row['annotation_150'];
            $annotation_151 =  $row['annotation_151'];
            $annotation_152 =  $row['annotation_152'];
            $annotation_153 =  $row['annotation_153'];
            $annotation_154 =  $row['annotation_154'];
            $annotation_155 =  $row['annotation_155'];
            $annotation_156 =  $row['annotation_156'];
            $annotation_157 =  $row['annotation_157'];
            $annotation_158 =  $row['annotation_158'];
            $annotation_159 =  $row['annotation_159'];
            $annotation_160 =  $row['annotation_160'];
            $annotation_161 =  $row['annotation_161'];
            $annotation_162 =  $row['annotation_162'];
            $annotation_163 =  $row['annotation_163'];
            $annotation_164 =  $row['annotation_164'];
            $annotation_165 =  $row['annotation_165'];
            $annotation_166 =  $row['annotation_166'];
            $annotation_167 =  $row['annotation_167'];
            $annotation_168 =  $row['annotation_168'];
            $annotation_169 =  $row['annotation_169'];
            $annotation_170 =  $row['annotation_170'];
            $annotation_171 =  $row['annotation_171'];
            $annotation_172 =  $row['annotation_172'];
            $annotation_173 =  $row['annotation_173'];
            $annotation_174 =  $row['annotation_174'];
            $annotation_175 =  $row['annotation_175'];
            $annotation_176 =  $row['annotation_176'];
            $annotation_177 =  $row['annotation_177'];
            $annotation_178 =  $row['annotation_178'];
            $annotation_179 =  $row['annotation_179'];
            $annotation_180 =  $row['annotation_180'];
            $annotation_181 =  $row['annotation_181'];
            $annotation_182 =  $row['annotation_182'];
            $annotation_183 =  $row['annotation_183'];
            $annotation_184 =  $row['annotation_184'];
            $annotation_185 =  $row['annotation_185'];
            $annotation_186 =  $row['annotation_186'];
            $annotation_187 =  $row['annotation_187'];
            $annotation_188 =  $row['annotation_188'];
            $annotation_189 =  $row['annotation_189'];
            $annotation_190 =  $row['annotation_190'];
            $annotation_191 =  $row['annotation_191'];
            $annotation_192 =  $row['annotation_192'];
            $annotation_193 =  $row['annotation_193'];
            $annotation_194 =  $row['annotation_194'];
            $annotation_195 =  $row['annotation_195'];
            $annotation_196 =  $row['annotation_196'];
            $annotation_197 =  $row['annotation_197'];
            $annotation_198 =  $row['annotation_198'];
            $annotation_199 =  $row['annotation_199'];
            $annotation_200 =  $row['annotation_200'];
            $annotation_201 =  $row['annotation_201'];
            $annotation_202 =  $row['annotation_202'];
            $annotation_203 =  $row['annotation_203'];
            $annotation_204 =  $row['annotation_204'];
            $annotation_205 =  $row['annotation_205'];
            $annotation_206 =  $row['annotation_206'];
            $annotation_207 =  $row['annotation_207'];
            $annotation_208 =  $row['annotation_208'];
            $annotation_209 =  $row['annotation_209'];
            $annotation_210 =  $row['annotation_210'];
            $annotation_211 =  $row['annotation_211'];
            $annotation_212 =  $row['annotation_212'];
            $annotation_213 =  $row['annotation_213'];
            $annotation_214 =  $row['annotation_214'];
            $annotation_215 =  $row['annotation_215'];
            $annotation_216 =  $row['annotation_216'];
            $annotation_217 =  $row['annotation_217'];
            $annotation_218 =  $row['annotation_218'];
            $annotation_219 =  $row['annotation_219'];
            $annotation_220 =  $row['annotation_220'];
            $annotation_221 =  $row['annotation_221'];
            $annotation_222 =  $row['annotation_222'];
            $annotation_223 =  $row['annotation_223'];
            $annotation_224 =  $row['annotation_224'];
            $annotation_225 =  $row['annotation_225'];
            $annotation_226 =  $row['annotation_226'];
            $annotation_227 =  $row['annotation_227'];
            $annotation_228 =  $row['annotation_228'];
            $annotation_229 =  $row['annotation_229'];
            $annotation_230 =  $row['annotation_230'];
            $annotation_231 =  $row['annotation_231'];
            $annotation_232 =  $row['annotation_232'];
            $annotation_233 =  $row['annotation_233'];
            $annotation_234 =  $row['annotation_234'];
            $annotation_235 =  $row['annotation_235'];
            $annotation_236 =  $row['annotation_236'];
            $annotation_237 =  $row['annotation_237'];
            $annotation_238 =  $row['annotation_238'];
            $annotation_239 =  $row['annotation_239'];
            $annotation_240 =  $row['annotation_240'];
            $annotation_241 =  $row['annotation_241'];
            $annotation_242 =  $row['annotation_242'];
            $annotation_243 =  $row['annotation_243'];
            $annotation_244 =  $row['annotation_244'];
            $annotation_245 =  $row['annotation_245'];
            $annotation_246 =  $row['annotation_246'];
            $annotation_247 =  $row['annotation_247'];
            $annotation_248 =  $row['annotation_248'];
            $annotation_249 =  $row['annotation_249'];
            $annotation_250 =  $row['annotation_250'];
            $annotation_251 =  $row['annotation_251'];
            $annotation_252 =  $row['annotation_252'];
            $annotation_253 =  $row['annotation_253'];
            $annotation_254 =  $row['annotation_254'];
            $annotation_255 =  $row['annotation_255'];
            $annotation_256 =  $row['annotation_256'];
            $annotation_257 =  $row['annotation_257'];
            $annotation_258 =  $row['annotation_258'];
            $annotation_259 =  $row['annotation_259'];
            $annotation_260 =  $row['annotation_260'];
            $annotation_261 =  $row['annotation_261'];
            $annotation_262 =  $row['annotation_262'];
            $annotation_263 =  $row['annotation_263'];
            $annotation_264 =  $row['annotation_264'];
            $annotation_265 =  $row['annotation_265'];
            $annotation_266 =  $row['annotation_266'];
            $annotation_267 =  $row['annotation_267'];
            $annotation_268 =  $row['annotation_268'];
            $annotation_269 =  $row['annotation_269'];
            $annotation_270 =  $row['annotation_270'];
            $annotation_271 =  $row['annotation_271'];
            $annotation_272 =  $row['annotation_272'];
            $annotation_273 =  $row['annotation_273'];
            $annotation_274 =  $row['annotation_274'];
            $annotation_275 =  $row['annotation_275'];
            $annotation_276 =  $row['annotation_276'];
            $annotation_277 =  $row['annotation_277'];
            $annotation_278 =  $row['annotation_278'];
            $annotation_279 =  $row['annotation_279'];
            $annotation_280 =  $row['annotation_280'];
            $annotation_281 =  $row['annotation_281'];
            $annotation_282 =  $row['annotation_282'];
            $annotation_283 =  $row['annotation_283'];
            $annotation_284 =  $row['annotation_284'];
            $annotation_285 =  $row['annotation_285'];
            $annotation_286 =  $row['annotation_286'];
            $annotation_287 =  $row['annotation_287'];
            $annotation_288 =  $row['annotation_288'];
            $annotation_289 =  $row['annotation_289'];
            $annotation_290 =  $row['annotation_290'];
            $annotation_291 =  $row['annotation_291'];
            $annotation_292 =  $row['annotation_292'];
            $annotation_293 =  $row['annotation_293'];
            $annotation_294 =  $row['annotation_294'];
            $annotation_295 =  $row['annotation_295'];
            $annotation_296 =  $row['annotation_296'];
            $annotation_297 =  $row['annotation_297'];
            $annotation_298 =  $row['annotation_298'];
            $annotation_299 =  $row['annotation_299'];
            $annotation_300 =  $row['annotation_300'];
            $annotation_301 =  $row['annotation_301'];
            $annotation_302 =  $row['annotation_302'];
            $annotation_303 =  $row['annotation_303'];
            $annotation_304 =  $row['annotation_304'];
            $annotation_305 =  $row['annotation_305'];
            $annotation_306 =  $row['annotation_306'];
            $annotation_307 =  $row['annotation_307'];
            $annotation_308 =  $row['annotation_308'];
            $annotation_309 =  $row['annotation_309'];
            $annotation_310 =  $row['annotation_310'];
            $annotation_311 =  $row['annotation_311'];
            $annotation_312 =  $row['annotation_312'];
            $annotation_313 =  $row['annotation_313'];
            $annotation_314 =  $row['annotation_314'];
            $annotation_315 =  $row['annotation_315'];
            $annotation_316 =  $row['annotation_316'];
            $annotation_317 =  $row['annotation_317'];
            $annotation_318 =  $row['annotation_318'];
            $annotation_319 =  $row['annotation_319'];
            $annotation_320 =  $row['annotation_320'];
            $annotation_321 =  $row['annotation_321'];
            $annotation_322 =  $row['annotation_322'];
            $annotation_323 =  $row['annotation_323'];
            $annotation_324 =  $row['annotation_324'];
            $annotation_325 =  $row['annotation_325'];
            $annotation_326 =  $row['annotation_326'];
            $annotation_327 =  $row['annotation_327'];
            $annotation_328 =  $row['annotation_328'];
            $annotation_329 =  $row['annotation_329'];
            $annotation_330 =  $row['annotation_330'];
            $annotation_331 =  $row['annotation_331'];
            $annotation_332 =  $row['annotation_332'];
            $annotation_333 =  $row['annotation_333'];
            $annotation_334 =  $row['annotation_334'];
            $annotation_335 =  $row['annotation_335'];
            $annotation_336 =  $row['annotation_336'];
            $annotation_337 =  $row['annotation_337'];
            $annotation_338 =  $row['annotation_338'];
            $annotation_339 =  $row['annotation_339'];
            $annotation_340 =  $row['annotation_340'];
            $annotation_341 =  $row['annotation_341'];
            $annotation_342 =  $row['annotation_342'];
    }}}
?>  

<!DOCTYPE html>

<html lang="en">

<!-- The followings are to import released packages -->
<head>
    <meta charset="utf-8" />
    <title>Listening Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="star-rating-svg.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="functions.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet" />
    <link href="scss/bootstrap-select.css" rel="stylesheet" />
    <link href="scss/variables.scss" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
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
            background-image: url("background.jpg");
            font-family: Helvetica, Arial, sans-serif;
            font-size: 16px;
            color: #000;
            margin: 0;
            padding: 0;
        }
        /*
        To use SWIPER Framework
        */
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

        .hline-bottom {
            padding-bottom: 10px;
            border-bottom: 2px solid #000;
         
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
    
    <!--navigation bar at the top of the page -->
    <nav class="navbar">
    <a class="navbar-brand" href="#">Listening Test</a>
    <div class="topnav-centered">
        <a style="color:white"> ** Please click the save button (at the bottom) before leaving ** </a>
    </div>
    
    <!--The "Move to Bottom" button enables to move of a user's location from current view to the end of the page -->        
    <button type="button" class="btn btn-light"><a href="#data_save">Move to Bottom</a></button>
    </nav>

    <!-- Swiper -->
    <div class="swiper mySwiper swiper-h">
        
        <div class="swiper-wrapper">

        <!-- Annotation Task Slide-->
            
            <!--"overflow:scroll" is one of SWIPER Framework defined function that enables to use scroll bar to explore content of current webpage.
        --> 
            
           <div class="swiper-slide" style="overflow: scroll;">
                <div class="center_1">
                    <h2 style="font-weight:bold; color: darkgreen;">Annotation Task</h2>
                    <div class="block_1 hline-bottom"></div>
                    <div class="container">
                        <p class="" style="margin: 5px;">
                            <h5>Please listen to the 114 songs and answer the following questions. </h5>
                            <br>
                            Q1. How do you feel the song, on a range from calm (-1.0) to energetic (1.0)?
                            <br><br>
                            Q2. How do you perceive the song, on a range from unpleasantness/negative (-1.0) to pleasantness/positive (1.0)? 
                            <br><br>
                            Q3. How much do you like the song? - from "I very much dislike it" (1) to "I very much like it" (7)
                            <br>
                            <br><hr>
                            *** Please wait approximately 1-2 minutes for loading ***
                            <br><br>
                            *** To annotate a task, drag the button or click your desirable position on the slider *** 
                            <br>                     
                        </p>
                    </div>
                    <div class="block_1 hline-bottom"></div>
                        <section class="page-section " id="contact ">
                            <br>
                            <div class="container">
                                <!-- Contact Section Form-->
                                <div class="row ">
                                    <div class="col-lg-10 mx-auto ">
                                        <div class="control-group ">
                                            <div class="form-group floating-label-form-group controls mb-0 pb-2 ">
                                            
                                            <!--"Insert_1.php" file It enables to store of input value from a user when the user clicks the “Save” button at the bottom of the page. -->  
                                            <form action="insert_1.php" method="POST">
                                                <p>
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_1</h2>
                                                </p>
                                                <input type="hidden" name="track_1_online" id="track_1">
                                            
                                                <!-- To retrieve track from the database, "echo" function of PHP is required -->                    
                                                <iframe src="<?php echo $track_1;?>" id="track0" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'"></iframe>

                                                <div class="slidecontainer">
                                                    <span class="v1">
                                                        
                                                        <!-- the value of the annotation task is able retrieve its stored value in the database with the function of php language (echo)-->
                                                        <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                            <input type="range" name = "annotation_1" style="width: 100%;" value="<?php echo $annotation_1;?>" min="-1" max="1" step="0.01" class="slider" id="q1">
                                                        <p>Value: <span id="demo1"></span></p>
                                                    </span>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v2">
                                                    
                                                            <p>Q2.How do you perceive the song (from negative to positive)?
                                                            </p>
                                                            <input type="range" name = "annotation_2" style="width: 100%;" value="<?php echo $annotation_2;?>" min="-1" max="1" step="0.01" class="slider" id="q2">
                                                            <p>Value: <span id="demo2"></span></p>
                                                    </span>
                                                </div>

                                                <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                <div class="slidecontainer">
                                                    <span class="v3">
                                                        <input type="range" name = "annotation_3" style="width: 100%;" value="<?php echo $annotation_3;?>" min="1" max="7" step="1" class="slider" id="q3">
                                                        <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                        <p>Rating: <span id="demo3"></span></p>
                                                    </span>
                                                </div><br>

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_2</h2>
                                                </p>
                                                <input type="hidden" name="track_2_online" id="track_2">
                                                <iframe src="<?php echo $track_2;?>" id="track1" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v4">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_4" style="width:100%;" value="<?php echo $annotation_4;?>" min="-1" max="1" step="0.01" class="slider" id="q4" required>
                                                    <p>Value: <span id="demo4"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v5">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_5" style="width:100%;" value="<?php echo $annotation_5;?>" min="-1" max="1" step="0.01" class="slider" id="q5" required>
                                                    <p>Value: <span id="demo5"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v6">
                                                            <input type="range" name = "annotation_6" list="sliderticks" style="width:100%;" value="<?php echo $annotation_6;?>" min="1" max="7" step="1" class="slider" id="q6" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                                </div>
                                                            <p>Rating: <span id="demo6"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_3</h2>
                                                </p>
                                                                                                
                                                <input type="hidden" name="track_3_online" id="track_3">
                                                <iframe src="<?php echo $track_3;?>" id="track2" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v7">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_7" style="width:100%;" value="<?php echo $annotation_7;?>" min="-1" max="1" step="0.01" class="slider" id="q7" required>
                                                    <p>Value: <span id="demo7"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v8">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_8" style="width:100%;" value="<?php echo $annotation_8;?>" min="-1" max="1" step="0.01" class="slider" id="q8" required>
                                                    <p>Value: <span id="demo8"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v9">
                                                            <input type="range" name = "annotation_9" list="sliderticks" style="width:100%;" value="<?php echo $annotation_9;?>" min="1" max="7" step="1" class="slider" id="q9" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo9"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_4</h2>
                                                </p>
                                                       
                                                <input type="hidden" name="track_4_online" id="track_4">
                                                <iframe src="<?php echo $track_4;?>" id="track3" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v10">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_10" style="width:100%;" value="<?php echo $annotation_10;?>" min="-1" max="1" step="0.01" class="slider" id="q10" required>
                                                    <p>Value: <span id="demo10"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v11">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_11" style="width:100%;" value="<?php echo $annotation_11;?>" min="-1" max="1" step="0.01" class="slider" id="q11" required>
                                                    <p>Value: <span id="demo11"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v12">
                                                            <input type="range" name = "annotation_12" list="sliderticks" style="width:100%;" value="<?php echo $annotation_12;?>" min="1" max="7" step="1" class="slider" id="q12" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo12"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_5</h2>
                                                </p>                   
                                                <input type="hidden" name="track_5_online" id="track_5">
                                                <iframe src="<?php echo $track_5;?>" id="track4" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v13">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_13" style="width:100%;" value="<?php echo $annotation_13;?>" min="-1" max="1" step="0.01" class="slider" id="q13" required>
                                                    <p>Value: <span id="demo13"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v14">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_14" style="width:100%;" value="<?php echo $annotation_14;?>" min="-1" max="1" step="0.01" class="slider" id="q14" required>
                                                    <p>Value: <span id="demo14"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v15">
                                                            <input type="range" name = "annotation_15" list="sliderticks" style="width:100%;" value="<?php echo $annotation_15;?>" min="1" max="7" step="1" class="slider" id="q15" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo15"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_6</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_6_online" id="track_6">
                                                <iframe src="<?php echo $track_6;?>" id="track5" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v16">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_16" style="width:100%;" value="<?php echo $annotation_16;?>" min="-1" max="1" step="0.01" class="slider" id="q16" required>
                                                    <p>Value: <span id="demo16"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v17">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_17" style="width:100%;" value="<?php echo $annotation_17;?>" min="-1" max="1" step="0.01" class="slider" id="q17" required>
                                                    <p>Value: <span id="demo17"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v18">
                                                            <input type="range" name = "annotation_18" list="sliderticks" style="width:100%;" value="<?php echo $annotation_18;?>" min="1" max="7" step="1" class="slider" id="q18" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo18"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_7</h2>
                                                </p>
                                          
                                                <input type="hidden" name="track_7_online" id="track_7">
                                                <iframe src="<?php echo $track_7;?>" id="track6" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v19">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range"  name = "annotation_19" style="width:100%;" value="<?php echo $annotation_19;?>" min="-1" max="1" step="0.01" class="slider" id="q19" required>
                                                    <p>Value: <span id="demo19"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v20">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_20" style="width:100%;" value="<?php echo $annotation_20;?>" min="-1" max="1" step="0.01" class="slider" id="q20" required>
                                                    <p>Value: <span id="demo20"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v21">
                                                            <input type="range" name = "annotation_21" list="sliderticks" style="width:100%;" value="<?php echo $annotation_21;?>" min="1" max="7" step="1" class="slider" id="q21" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo21"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_8</h2>
                                                </p>                   
                                                <input type="hidden" name="track_8_online" id="track_8">
                                                <iframe src="<?php echo $track_8;?>" id="track7" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v22">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_22" style="width:100%;" value="<?php echo $annotation_22;?>" min="-1" max="1" step="0.01" class="slider" id="q22" required>
                                                    <p>Value: <span id="demo22"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v23">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_23" style="width:100%;" value="<?php echo $annotation_23;?>" min="-1" max="1" step="0.01" class="slider" id="q23" required>
                                                    <p>Value: <span id="demo23"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v24">
                                                            <input type="range" name = "annotation_24" list="sliderticks" style="width:100%;" value="<?php echo $annotation_24;?>" min="1" max="7" step="1" class="slider" id="q24" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo24"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>
                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_9</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_9_online" id="track_9">
                                                <iframe src="<?php echo $track_9;?>" id="track8" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v25">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_25" style="width:100%;" value="<?php echo $annotation_25;?>" min="-1" max="1" step="0.01" class="slider" id="q25" required>
                                                    <p>Value: <span id="demo25"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v26">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_26" style="width:100%;" value="<?php echo $annotation_26;?>" min="-1" max="1" step="0.01" class="slider" id="q26" required>
                                                    <p>Value: <span id="demo26"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v27">
                                                            <input type="range" name = "annotation_27" list="sliderticks" style="width:100%;" value="<?php echo $annotation_27;?>" min="1" max="7" step="1" class="slider" id="q27" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo27"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_10</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_10_online" id="track_10">
                                                <iframe src="<?php echo $track_10;?>" id="track9" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v28">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_28" style="width:100%;" value="<?php echo $annotation_28;?>" min="-1" max="1" step="0.01" class="slider" id="q28" required>
                                                    <p>Value: <span id="demo28"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v29">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_29" style="width:100%;" value="<?php echo $annotation_29;?>" min="-1" max="1" step="0.01" class="slider" id="q29" required>
                                                    <p>Value: <span id="demo29"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v30">
                                                            <input type="range" name = "annotation_30" list="sliderticks" style="width:100%;" value="<?php echo $annotation_30;?>" min="1" max="7" step="1" class="slider" id="q30" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo30"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_11</h2>
                                                </p>                                               
                                                <input type="hidden" name="track_11_online" id="track_11">
                                                <iframe src="<?php echo $track_11;?>" id="track10" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v31">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_31" style="width:100%;" value="<?php echo $annotation_31;?>" min="-1" max="1" step="0.01" class="slider" id="q31" required>
                                                    <p>Value: <span id="demo31"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v32">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_32" style="width:100%;" value="<?php echo $annotation_32;?>" min="-1" max="1" step="0.01" class="slider" id="q32" required>
                                                    <p>Value: <span id="demo32"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v33">
                                                            <input type="range" name = "annotation_33" list="sliderticks" style="width:100%;" value="<?php echo $annotation_33;?>" min="1" max="7" step="1" class="slider" id="q33" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo33"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_12</h2>
                                                </p>
                                                <input type="hidden" name="track_12_online" id="track_12">
                                                <iframe src="<?php echo $track_12;?>" id="track11" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v34">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_34" style="width:100%;" value="<?php echo $annotation_34;?>" min="-1" max="1" step="0.01" class="slider" id="q34" required>
                                                    <p>Value: <span id="demo34"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v35">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_35" style="width:100%;" value="<?php echo $annotation_35;?>" min="-1" max="1" step="0.01" class="slider" id="q35" required>
                                                    <p>Value: <span id="demo35"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v36">
                                                            <input type="range" name = "annotation_36" list="sliderticks" style="width:100%;" value="<?php echo $annotation_36;?>" min="1" max="7" step="1" class="slider" id="q36" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo36"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_13</h2>
                                                </p>
                           
                                                <input type="hidden" name="track_13_online" id="track_13">
                                                <iframe src="<?php echo $track_13;?>" id="track12" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v37">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_37" style="width:100%;" value="<?php echo $annotation_37;?>" min="-1" max="1" step="0.01" class="slider" id="q37" required>
                                                    <p>Value: <span id="demo37"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v38">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_38" style="width:100%;" value="<?php echo $annotation_38;?>" min="-1" max="1" step="0.01" class="slider" id="q38" required>
                                                    <p>Value: <span id="demo38"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v39">
                                                            <input type="range" name = "annotation_39" list="sliderticks" style="width:100%;" value="<?php echo $annotation_39;?>" min="1" max="7" step="1" class="slider" id="q39" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo39"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_14</h2>
                                                </p>
                                                
                                                <input type="hidden" name="track_14_online" id="track_14">
                                                <iframe src="<?php echo $track_14;?>" id="track13" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v40">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_40" style="width:100%;" value="<?php echo $annotation_40;?>" min="-1" max="1" step="0.01" class="slider" id="q40" required>
                                                    <p>Value: <span id="demo40"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v41">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_41" style="width:100%;" value="<?php echo $annotation_41;?>" min="-1" max="1" step="0.01" class="slider" id="q41" required>
                                                    <p>Value: <span id="demo41"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v42">
                                                            <input type="range" name = "annotation_42" list="sliderticks" style="width:100%;" value="<?php echo $annotation_42;?>" min="1" max="7" step="1" class="slider" id="q42" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo42"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_15</h2>
                                                </p>
                                                
                                                <input type="hidden" name="track_15_online" id="track_15">
                                                <iframe src="<?php echo $track_15;?>" id="track14" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v43">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_43" style="width:100%;" value="<?php echo $annotation_43;?>" min="-1" max="1" step="0.01" class="slider" id="q43" required>
                                                    <p>Value: <span id="demo43"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v44">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_44" style="width:100%;" value="<?php echo $annotation_44;?>" min="-1" max="1" step="0.01" class="slider" id="q44" required>
                                                    <p>Value: <span id="demo44"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v45">
                                                            <input type="range" name = "annotation_45" list="sliderticks" style="width:100%;" value="<?php echo $annotation_45;?>" min="1" max="7" step="1" class="slider" id="q45" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo45"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_16</h2>
                                                </p> 
                                                
                                                <input type="hidden" name="track_16_online" id="track_16">
                                                <iframe src="<?php echo $track_16;?>" id="track15" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v46">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_46" style="width:100%;" value="<?php echo $annotation_46;?>" min="-1" max="1" step="0.01" class="slider" id="q46" required>
                                                    <p>Value: <span id="demo46"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v47">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_47" style="width:100%;" value="<?php echo $annotation_47;?>" min="-1" max="1" step="0.01" class="slider" id="q47" required>
                                                    <p>Value: <span id="demo47"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v48">
                                                            <input type="range" name = "annotation_48" list="sliderticks" style="width:100%;" value="<?php echo $annotation_48;?>" min="1" max="7" step="1" class="slider" id="q48" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo48"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_17</h2>
                                                </p>
                                                                                                
                                                <input type="hidden" name="track_17_online" id="track_17">

                                                <iframe src="<?php echo $track_17;?>" id="track16" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v49">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_49" style="width:100%;" value="<?php echo $annotation_49;?>" min="-1" max="1" step="0.01" class="slider" id="q49" required>
                                                    <p>Value: <span id="demo49"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v50">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_50" style="width:100%;" value="<?php echo $annotation_50;?>" min="-1" max="1" step="0.01" class="slider" id="q50" required>
                                                    <p>Value: <span id="demo50"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v51">
                                                            <input type="range" name = "annotation_51" list="sliderticks" style="width:100%;" value="<?php echo $annotation_51;?>" min="1" max="7" step="1" class="slider" id="q51" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo51"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_18</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_18_online" id="track_18">

                                                <iframe src="<?php echo $track_18;?>" id='track17' width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v52">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_52" style="width:100%;" value="<?php echo $annotation_52;?>" min="-1" max="1" step="0.01" class="slider" id="q52" required>
                                                    <p>Value: <span id="demo52"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v53">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_53" style="width:100%;" value="<?php echo $annotation_53;?>" min="-1" max="1" step="0.01" class="slider" id="q53" required>
                                                    <p>Value: <span id="demo53"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v54">
                                                            <input type="range" name = "annotation_54" list="sliderticks" style="width:100%;" value="<?php echo $annotation_54;?>" min="1" max="7" step="1" class="slider" id="q54" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo54"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_19</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_19_online" id="track_19">
                                                <iframe src="<?php echo $track_19;?>" id="track18" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v55">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_55" style="width:100%;" value="<?php echo $annotation_55;?>" min="-1" max="1" step="0.01" class="slider" id="q55" required>
                                                    <p>Value: <span id="demo55"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v56">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_56" style="width:100%;" value="<?php echo $annotation_56;?>" min="-1" max="1" step="0.01" class="slider" id="q56" required>
                                                    <p>Value: <span id="demo56"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v57">
                                                            <input type="range" name = "annotation_57" list="sliderticks" style="width:100%;" value="<?php echo $annotation_57;?>" min="1" max="7" step="1" class="slider" id="q57" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo57"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_20</h2>
                                                </p>
                        
                                                <input type="hidden" name="track_20_online" id="track_20">
                                                <iframe src="<?php echo $track_20;?>" id="track19" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v58">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_58" style="width:100%;" value="<?php echo $annotation_58;?>" min="-1" max="1" step="0.01" class="slider" id="q58" required>
                                                    <p>Value: <span id="demo58"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v59">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_59" style="width:100%;" value="<?php echo $annotation_59;?>" min="-1" max="1" step="0.01" class="slider" id="q59" required>
                                                    <p>Value: <span id="demo59"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v60">
                                                            <input type="range" name = "annotation_60" list="sliderticks" style="width:100%;" value="<?php echo $annotation_60;?>" min="1" max="7" step="1" class="slider" id="q60" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo60"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_21</h2>
                                                </p>
                                                <input type="hidden" name="track_21_online" id="track_21">
                                                <iframe src="<?php echo $track_21;?>" id="track20" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v61">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="hidden" name="track_21_online" id="track_21">
                                                    <input type="range" name = "annotation_61" style="width:100%;" value="<?php echo $annotation_61;?>" min="-1" max="1" step="0.01" class="slider" id="q61" required>
                                                    <p>Value: <span id="demo61"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v62">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_62" style="width:100%;" value="<?php echo $annotation_62;?>" min="-1" max="1" step="0.01" class="slider" id="q62" required>
                                                    <p>Value: <span id="demo62"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v63">
                                                            <input type="range" name = "annotation_63" list="sliderticks" style="width:100%;" value="<?php echo $annotation_63;?>" min="1" max="7" step="1" class="slider" id="q63" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo63"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_22</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_22_online" id="track_22">
                                                <iframe src="<?php echo $track_22;?>" id="track21" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v64">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_64" style="width:100%;" value="<?php echo $annotation_64;?>" min="-1" max="1" step="0.01" class="slider" id="q64" required>
                                                    <p>Value: <span id="demo64"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v65">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_65" style="width:100%;" value="<?php echo $annotation_65;?>" min="-1" max="1" step="0.01" class="slider" id="q65" required>
                                                    <p>Value: <span id="demo65"></span></p>
                                                    </span>
                                                    </h>
                                                </div>
                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v66">
                                                            <input type="range" name = "annotation_66" list="sliderticks" style="width:100%;" value="<?php echo $annotation_66;?>" min="1" max="7" step="1" class="slider" id="q66" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo66"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_23</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_23_online" id="track_23">
                                                <iframe src="<?php echo $track_23;?>" id="track22" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v67">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_67" style="width:100%;" value="<?php echo $annotation_67;?>" min="-1" max="1" step="0.01" class="slider" id="q67" required>
                                                    <p>Value: <span id="demo67"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v68">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_68" style="width:100%;" value="<?php echo $annotation_68;?>" min="-1" max="1" step="0.01" class="slider" id="q68" required>
                                                    <p>Value: <span id="demo68"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v69">
                                                            <input type="range" name = "annotation_69" list="sliderticks" style="width:100%;" value="<?php echo $annotation_69;?>" min="1" max="7" step="1" class="slider" id="q69" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo69"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_24</h2>
                                                </p>                                   
                                                <input type="hidden" name="track_24_online" id="track_24">
                                                <iframe src="<?php echo $track_24;?>" id='track23' width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v70">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_70" style="width:100%;" value="<?php echo $annotation_70;?>" min="-1" max="1" step="0.01" class="slider" id="q70" required>
                                                    <p>Value: <span id="demo70"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v71">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_71" style="width:100%;" value="<?php echo $annotation_71;?>" min="-1" max="1" step="0.01" class="slider" id="q71" required>
                                                    <p>Value: <span id="demo71"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v72">
                                                            <input type="range" name = "annotation_72" list="sliderticks" style="width:100%;" value="<?php echo $annotation_72;?>" min="1" max="7" step="1" class="slider" id="q72" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo72"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_25</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_25_online" id="track_25">
                                                <iframe src="<?php echo $track_25;?>" id="track24" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v73">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_73" style="width:100%;" value="<?php echo $annotation_73;?>" min="-1" max="1" step="0.01" class="slider" id="q73" required>
                                                    <p>Value: <span id="demo73"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v74">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_74" style="width:100%;" value="<?php echo $annotation_74;?>" min="-1" max="1" step="0.01" class="slider" id="q74" required>
                                                    <p>Value: <span id="demo74"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v75">
                                                            <input type="range" name = "annotation_75" list="sliderticks" style="width:100%;" value="<?php echo $annotation_75;?>" min="1" max="7" step="1" class="slider" id="q75" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo75"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_26</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_26_online" id="track_26">
                                                <iframe src="<?php echo $track_26;?>" id="track25" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v76">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_76" style="width:100%;" value="<?php echo $annotation_76;?>" min="-1" max="1" step="0.01" class="slider" id="q76" required>
                                                    <p>Value: <span id="demo76"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v77">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_77" style="width:100%;" value="<?php echo $annotation_77;?>" min="-1" max="1" step="0.01" class="slider" id="q77" required>
                                                    <p>Value: <span id="demo77"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v78">
                                                            <input type="range" name = "annotation_78" list="sliderticks" style="width:100%;" value="<?php echo $annotation_78;?>" min="1" max="7" step="1" class="slider" id="q78" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo78"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_27</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_27_online" id="track_27">
                                                <iframe src="<?php echo $track_27;?>" id="track26" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v79">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_79" style="width:100%;" value="<?php echo $annotation_79;?>" min="-1" max="1" step="0.01" class="slider" id="q79" required>
                                                    <p>Value: <span id="demo79"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v80">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_80" style="width:100%;" value="<?php echo $annotation_80;?>" min="-1" max="1" step="0.01" class="slider" id="q80" required>
                                                    <p>Value: <span id="demo80"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v81">
                                                            <input type="range" name = "annotation_81" list="sliderticks" style="width:100%;" value="<?php echo $annotation_81;?>" min="1" max="7" step="1" class="slider" id="q81" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo81"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_28</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_28_online" id="track_28">
                                                <iframe src="<?php echo $track_28;?>" id="track27" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v82">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_82" style="width:100%;" value="<?php echo $annotation_82;?>" min="-1" max="1" step="0.01" class="slider" id="q82" required>
                                                    <p>Value: <span id="demo82"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v83">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_83" style="width:100%;" value="<?php echo $annotation_83;?>" min="-1" max="1" step="0.01" class="slider" id="q83" required>
                                                    <p>Value: <span id="demo83"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v84">
                                                            <input type="range" name = "annotation_84" list="sliderticks" style="width:100%;" value="<?php echo $annotation_84;?>" min="1" max="7" step="1" class="slider" id="q84" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo84"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_29</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_29_online" id="track_29">
                                                <iframe src="<?php echo $track_29;?>" id="track28" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v85">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_85" style="width:100%;" value="<?php echo $annotation_85;?>" min="-1" max="1" step="0.01" class="slider" id="q85" required>
                                                    <p>Value: <span id="demo85"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v86">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_86" style="width:100%;" value="<?php echo $annotation_86;?>" min="-1" max="1" step="0.01" class="slider" id="q86" required>
                                                    <p>Value: <span id="demo86"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v87">
                                                            <input type="range" name = "annotation_87" list="sliderticks" style="width:100%;" value="<?php echo $annotation_87;?>" min="1" max="7" step="1" class="slider" id="q87" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo87"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_30</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_30_online" id="track_30">
                                                <iframe src="<?php echo $track_30;?>" id="track29" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v88">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_88" style="width:100%;" value="<?php echo $annotation_88;?>" min="-1" max="1" step="0.01" class="slider" id="q88" required>
                                                    <p>Value: <span id="demo88"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v89">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_89" style="width:100%;" value="<?php echo $annotation_89;?>" min="-1" max="1" step="0.01" class="slider" id="q89" required>
                                                    <p>Value: <span id="demo89"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v90">
                                                            <input type="range" name = "annotation_90" list="sliderticks" style="width:100%;" value="<?php echo $annotation_90;?>" min="1" max="7" step="1" class="slider" id="q90" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo90"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_31</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_31_online" id="track_31">
                                                <iframe src="<?php echo $track_31;?>" id="track30" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v91">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_91" style="width:100%;" value="<?php echo $annotation_91;?>" min="-1" max="1" step="0.01" class="slider" id="q91" required>
                                                    <p>Value: <span id="demo91"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v92">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_92" style="width:100%;" value="<?php echo $annotation_92;?>" min="-1" max="1" step="0.01" class="slider" id="q92" required>
                                                    <p>Value: <span id="demo92"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v93">
                                                            <input type="range" name = "annotation_93" list="sliderticks" style="width:100%;" value="<?php echo $annotation_93;?>" min="1" max="7" step="1" class="slider" id="q93" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo93"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_32</h2>
                                                </p>
                                                                                      
                                                <input type="hidden" name="track_32_online" id="track_32">
                                                <iframe src="<?php echo $track_32;?>" id="track31" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v94">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_94" style="width:100%;" value="<?php echo $annotation_94;?>" min="-1" max="1" step="0.01" class="slider" id="q94" required>
                                                    <p>Value: <span id="demo94"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v95">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_95" style="width:100%;" value="<?php echo $annotation_95;?>" min="-1" max="1" step="0.01" class="slider" id="q95" required>
                                                    <p>Value: <span id="demo95"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                
                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v96">
                                                            <input type="range" name = "annotation_96" list="sliderticks" style="width:100%;" value="<?php echo $annotation_96;?>" min="1" max="7" step="1" class="slider" id="q96" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo96"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_33</h2>
                                                </p>
                                                
                                                
                                                
                                                <input type="hidden" name="track_33_online" id="track_33">
                                                <iframe src="<?php echo $track_33;?>" id="track32" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v97">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_97" style="width:100%;" value="<?php echo $annotation_97;?>" min="-1" max="1" step="0.01" class="slider" id="q97" required>
                                                    <p>Value: <span id="demo97"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v98">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_98" style="width:100%;" value="<?php echo $annotation_98;?>" min="-1" max="1" step="0.01" class="slider" id="q98" required>
                                                    <p>Value: <span id="demo98"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v99">
                                                            <input type="range" name = "annotation_99" list="sliderticks" style="width:100%;" value="<?php echo $annotation_99;?>" min="1" max="7" step="1" class="slider" id="q99" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo99"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_34</h2>
                                                </p>
                                         
                                                <input type="hidden" name="track_34_online" id="track_34">
                                                <iframe src="<?php echo $track_34;?>" id="track33" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v100">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_100" style="width:100%;" value="<?php echo $annotation_100;?>" min="-1" max="1" step="0.01" class="slider" id="q100" required>
                                                    <p>Value: <span id="demo100"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v101">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_101" style="width:100%;" value="<?php echo $annotation_101;?>" min="-1" max="1" step="0.01" class="slider" id="q101" required>
                                                    <p>Value: <span id="demo101"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v102">
                                                            <input type="range" name = "annotation_102" list="sliderticks" style="width:100%;" value="<?php echo $annotation_102;?>" min="1" max="7" step="1" class="slider" id="q102" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo102"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_35</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_35_online" id="track_35">
                                                <iframe src="<?php echo $track_35;?>" id="track34" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v103">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_103" style="width:100%;" value="<?php echo $annotation_103;?>" min="-1" max="1" step="0.01" class="slider" id="q103" required>
                                                    <p>Value: <span id="demo103"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v104">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_104" style="width:100%;" value="<?php echo $annotation_104;?>" min="-1" max="1" step="0.01" class="slider" id="q104" required>
                                                    <p>Value: <span id="demo104"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v105">
                                                            <input type="range" name = "annotation_105" list="sliderticks" style="width:100%;" value="<?php echo $annotation_105;?>" min="1" max="7" step="1" class="slider" id="q105" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo105"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_36</h2>
                                                </p>
                                                <input type="hidden" name="track_36_online" id="track_36">
                                                <iframe src="<?php echo $track_36;?>" id="track35" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v106">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_106" style="width:100%;" value="<?php echo $annotation_106;?>" min="-1" max="1" step="0.01" class="slider" id="q106" required>
                                                    <p>Value: <span id="demo106"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v107">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_107" style="width:100%;" value="<?php echo $annotation_107;?>" min="-1" max="1" step="0.01" class="slider" id="q107" required>
                                                    <p>Value: <span id="demo107"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v108">
                                                            <input type="range" name = "annotation_108" list="sliderticks" style="width:100%;" value="<?php echo $annotation_108;?>" min="1" max="7" step="1" class="slider" id="q108" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo108"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_37</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_37_online" id="track_37">
                                                <iframe src="<?php echo $track_37;?>" id="track36" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v109">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_109" style="width:100%;" value="<?php echo $annotation_109;?>" min="-1" max="1" step="0.01" class="slider" id="q109" required>
                                                    <p>Value: <span id="demo109"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v110">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_110" style="width:100%;" value="<?php echo $annotation_110;?>" min="-1" max="1" step="0.01" class="slider" id="q110" required>
                                                    <p>Value: <span id="demo110"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v111">
                                                            <input type="range" name = "annotation_111" list="sliderticks" style="width:100%;" value="<?php echo $annotation_111;?>" min="1" max="7" step="1" class="slider" id="q111" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo111"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_38</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_38_online" id="track_38">
                                                <iframe src="<?php echo $track_38;?>" id="track37" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v112">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_112" style="width:100%;" value="<?php echo $annotation_112;?>" min="-1" max="1" step="0.01" class="slider" id="q112" required>
                                                    <p>Value: <span id="demo112"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v113">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_113" style="width:100%;" value="<?php echo $annotation_113;?>" min="-1" max="1" step="0.01" class="slider" id="q113" required>
                                                    <p>Value: <span id="demo113"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v114">
                                                            <input type="range" name = "annotation_114" list="sliderticks" style="width:100%;" value="<?php echo $annotation_114;?>" min="1" max="7" step="1" class="slider" id="q114" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo114"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_39</h2>
                                                </p>                                              
                                                                                             
                                                <input type="hidden" name="track_39_online" id="track_39">
                                                <iframe src="<?php echo $track_39;?>" id="track38" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v115">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_115" style="width:100%;" value="<?php echo $annotation_115;?>" min="-1" max="1" step="0.01" class="slider" id="q115" required>
                                                    <p>Value: <span id="demo115"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v116">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_116" style="width:100%;" value="<?php echo $annotation_116;?>" min="-1" max="1" step="0.01" class="slider" id="q116" required>
                                                    <p>Value: <span id="demo116"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v117">
                                                            <input type="range" name = "annotation_117" list="sliderticks" style="width:100%;" value="<?php echo $annotation_117;?>" min="1" max="7" step="1" class="slider" id="q117" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo117"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>



                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_40</h2>
                                                </p>                                               
                                                                                               
                                                <input type="hidden" name="track_40_online" id="track_40">
                                                <iframe src="<?php echo $track_40;?>" id="track39" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v118">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_118" style="width:100%;" value="<?php echo $annotation_118;?>" min="-1" max="1" step="0.01" class="slider" id="q118" required>
                                                    <p>Value: <span id="demo118"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v119">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_119" style="width:100%;" value="<?php echo $annotation_119;?>" min="-1" max="1" step="0.01" class="slider" id="q119" required>
                                                    <p>Value: <span id="demo119"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v120">
                                                            <input type="range" name = "annotation_120" list="sliderticks" style="width:100%;" value="<?php echo $annotation_120;?>" min="1" max="7" step="1" class="slider" id="q120" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo120"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_41</h2>
                                                </p>                                               
                                                
                                                <input type="hidden" name="track_41_online" id="track_41">
                                                <iframe src="<?php echo $track_41;?>" id="track40" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>
                                                <div class="slidecontainer">
                                                    <span class="v121">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_121" style="width:100%;" value="<?php echo $annotation_121;?>" min="-1" max="1" step="0.01" class="slider" id="q121" required>
                                                    <p>Value: <span id="demo121"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v122">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_122" style="width:100%;" value="<?php echo $annotation_122;?>" min="-1" max="1" step="0.01" class="slider" id="q122" required>
                                                    <p>Value: <span id="demo122"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v123">
                                                            <input type="range" name = "annotation_123" list="sliderticks" style="width:100%;" value="<?php echo $annotation_123;?>" min="1" max="7" step="1" class="slider" id="q123" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo123"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_42</h2>
                                                </p>     
                                                                                              
                                                <input type="hidden" name="track_42_online" id="track_42">
                                                <iframe src="<?php echo $track_42;?>" id="track41" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v124">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_124" style="width:100%;" value="<?php echo $annotation_124;?>" min="-1" max="1" step="0.01" class="slider" id="q124" required>
                                                    <p>Value: <span id="demo124"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v125">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_125" style="width:100%;" value="<?php echo $annotation_125;?>" min="-1" max="1" step="0.01" class="slider" id="q125" required>
                                                    <p>Value: <span id="demo125"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v126">
                                                            <input type="range" name = "annotation_126" list="sliderticks" style="width:100%;" value="<?php echo $annotation_126;?>" min="1" max="7" step="1" class="slider" id="q126" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo126"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_43</h2>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_43_online" id="track_43">
                                                <iframe src="<?php echo $track_43;?>" id="track42" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v127">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_127" style="width:100%;" value="<?php echo $annotation_127;?>" min="-1" max="1" step="0.01" class="slider" id="q127" required>
                                                    <p>Value: <span id="demo127"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v128">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_128" style="width:100%;" value="<?php echo $annotation_128;?>" min="-1" max="1" step="0.01" class="slider" id="q128" required>
                                                    <p>Value: <span id="demo128"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v129">
                                                            <input type="range" name = "annotation_129" list="sliderticks" style="width:100%;" value="<?php echo $annotation_129;?>" min="1" max="7" step="1" class="slider" id="q129" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo129"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_44</h2>
                                                </p>                 
                                                                                              
                                                <input type="hidden" name="track_44_online" id="track_44">
                                                <iframe src="<?php echo $track_44;?>" id="track43" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v130">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_130" style="width:100%;" value="<?php echo $annotation_130;?>" min="-1" max="1" step="0.01" class="slider" id="q130" required>
                                                    <p>Value: <span id="demo130"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v131">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_131" style="width:100%;" value="<?php echo $annotation_131;?>" min="-1" max="1" step="0.01" class="slider" id="q131" required>
                                                    <p>Value: <span id="demo131"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v132">
                                                            <input type="range" name = "annotation_132" list="sliderticks" style="width:100%;" value="<?php echo $annotation_132;?>" min="1" max="7" step="1" class="slider" id="q132" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo132"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_45</h2>
                                                </p>                                              
                                                                                               
                                                <input type="hidden" name="track_45_online" id="track_45">
                                                <iframe src="<?php echo $track_45;?>" id="track44" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v133">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name = "annotation_133" style="width:100%;" value="<?php echo $annotation_133;?>" min="-1" max="1" step="0.01" class="slider" id="q133" required>
                                                    <p>Value: <span id="demo133"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v134">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name = "annotation_134" style="width:100%;" value="<?php echo $annotation_134;?>" min="-1" max="1" step="0.01" class="slider" id="q134" required>
                                                    <p>Value: <span id="demo134"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                        <span class="v135">
                                                            <input type="range" name = "annotation_135" list="sliderticks" style="width:100%;" value="<?php echo $annotation_135;?>" min="1" max="7" step="1" class="slider" id="q135" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo135"></span></p>
                                                        </span>
                                                    </h>
                                                </div><br>


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_46</h2></p>
                                                </p>
                                                                                               
                                                <input type="hidden" name="track_46_online" id="track_46">
                                                <iframe src="<?php echo $track_46;?>" id="track45" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe> 
                                                <div class="slidecontainer">
                                                    <span class="v136">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_136" style="width:100%;" value="<?php echo $annotation_136;?>" min="-1" max="1" step="0.01" class="slider" id="q136" required>
                                                    <p>Value: <span id="demo136"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v137">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_137" style="width:100%;" value="<?php echo $annotation_137;?>" min="-1" max="1" step="0.01" class="slider" id="q137" required>
                                                    <p>Value: <span id="demo137"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v138">
                                                            <input type="range" name ="annotation_138" list="sliderticks" style="width:100%;" value="<?php echo $annotation_138;?>" min="1" max="7" step="1" class="slider" id="q138" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo138"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                        

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_47</h2></p>
                                                </p>
                                                
                                                
                                                <input type="hidden" name="track_47_online" id="track_47">
                                                <iframe src="<?php echo $track_47;?>" id="track46" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v139">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_139" style="width:100%;" value="<?php echo $annotation_139;?>" min="-1" max="1" step="0.01" class="slider" id="q139" required>
                                                    <p>Value: <span id="demo139"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v140">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_140" style="width:100%;" value="<?php echo $annotation_140;?>" min="-1" max="1" step="0.01" class="slider" id="q140" required>
                                                    <p>Value: <span id="demo140"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v141">
                                                        <input type="range" name ="annotation_141" list="sliderticks" style="width:100%;" value="<?php echo $annotation_141;?>" min="1" max="7" step="1" class="slider" id="q141" required>                                                    
                                                        <div class="sliderticks">
                                                        <P>1</P>
                                                        <p>2</p>
                                                        <p>3</p>
                                                        <p>4</p>
                                                        <p>5</p>
                                                        <p>6</p>
                                                        <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo141"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                    <br>
                                                    <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_48</h2></p>
                                                    </p>
                                                    
                                                                                                        
                                                    <input type="hidden" name="track_48_online" id="track_48">
                                                    <iframe src="<?php echo $track_48;?>" id="track47" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                    </iframe>

                                                    <div class="slidecontainer">
                                                        <span class="v142">
                                                        <h align="Center">
                                                        <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                        <input type="range" name ="annotation_142" style="width:100%;" value="<?php echo $annotation_142;?>" min="-1" max="1" step="0.01" class="slider" id="q142" required>
                                                        <p>Value: <span id="demo142"></span></p>
                                                        </span>
                                                        </h>
                                                    </div><br>

                                                    <div class="slidecontainer">
                                                        <span class="v143">
                                                        <h align="Center">
                                                        <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                        <input type="range" name ="annotation_143" style="width:100%;" value="<?php echo $annotation_143;?>" min="-1" max="1" step="0.01" class="slider" id="q143" required>
                                                        <p>Value: <span id="demo143"></span></p>
                                                        </span>
                                                        </h>
                                                    </div>

                                                    <div class="slidecontainer">
                                                        <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v144">
                                                            <input type="range" name ="annotation_144" list="sliderticks" style="width:100%;" value="<?php echo $annotation_144;?>" min="1" max="7" step="1" class="slider" id="q144" required>                                                    
                                                            <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                            </div>
                                                            <p>Rating: <span id="demo144"></span></p>
                                                        </span>
                                                        </h>
                                                    </div><br>
                                    


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_49</h2></p>
                                                </p>
                                                                                               
                                                <input type="hidden" name="track_49_online" id="track_49">
                                                <iframe src="<?php echo $track_49;?>" id="track48" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v145">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_145" style="width:100%;" value="<?php echo $annotation_145;?>" min="-1" max="1" step="0.01" class="slider" id="q145" required>
                                                    <p>Value: <span id="demo145"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v146">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_146" style="width:100%;" value="<?php echo $annotation_146;?>" min="-1" max="1" step="0.01" class="slider" id="q146" required>
                                                    <p>Value: <span id="demo146"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v147">
                                                        <input type="range" name ="annotation_147" list="sliderticks" style="width:100%;" value="<?php echo $annotation_147;?>" min="1" max="7" step="1" class="slider" id="q147" required>                                                    
                                                        <div class="sliderticks">
                                                        <P>1</P>
                                                        <p>2</p>
                                                        <p>3</p>
                                                        <p>4</p>
                                                        <p>5</p>
                                                        <p>6</p>
                                                        <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo147"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_50</h2></p>
                                                </p>
                                                
                                                <input type="hidden" name="track_50_online" id="track_50">
                                                <iframe src="<?php echo $track_50;?>" id="track49" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v148">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_148" style="width:100%;" value="<?php echo $annotation_148;?>" min="-1" max="1" step="0.01" class="slider" id="q148" required>
                                                    <p>Value: <span id="demo148"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v149">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_149" style="width:100%;" value="<?php echo $annotation_149;?>" min="-1" max="1" step="0.01" class="slider" id="q149" required>
                                                    <p>Value: <span id="demo149"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v150">
                                                        <input type="range" name ="annotation_150" list="sliderticks" style="width:100%;" value="<?php echo $annotation_150;?>" min="1" max="7" step="1" class="slider" id="q150" required>                                                    
                                                        <div class="sliderticks">
                                                        <P>1</P>
                                                        <p>2</p>
                                                        <p>3</p>
                                                        <p>4</p>
                                                        <p>5</p>
                                                        <p>6</p>
                                                        <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo150"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_51</h2></p>
                                                </p>
                                                  
                                                <input type="hidden" name="track_51_online" id="track_51">
                                                <iframe src="<?php echo $track_51;?>" id='track50' width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v151">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_151" style="width:100%;" value="<?php echo $annotation_151;?>" min="-1" max="1" step="0.01" class="slider" id="q151" required>
                                                    <p>Value: <span id="demo151"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v152">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_152" style="width:100%;" value="<?php echo $annotation_152;?>" min="-1" max="1" step="0.01" class="slider" id="q152" required>
                                                    <p>Value: <span id="demo152"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v153">
                                                        <input type="range" name ="annotation_153" list="sliderticks" style="width:100%;" value="<?php echo $annotation_153;?>" min="1" max="7" step="1" class="slider" id="q153" required>                                                    
                                                        <div class="sliderticks">
                                                        <P>1</P>
                                                        <p>2</p>
                                                        <p>3</p>
                                                        <p>4</p>
                                                        <p>5</p>
                                                        <p>6</p>
                                                        <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo153"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_52</h2></p>
                                                </p>
                                                                                              
                                                <input type="hidden" name="track_52_online" id="track_52">
                                                <iframe src="<?php echo $track_52;?>" id="track51" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v154">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_154" style="width:100%;" value="<?php echo $annotation_154;?>" min="-1" max="1" step="0.01" class="slider" id="q154" required>
                                                    <p>Value: <span id="demo154"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v155">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_155" style="width:100%;" value="<?php echo $annotation_155;?>" min="-1" max="1" step="0.01" class="slider" id="q155" required>
                                                    <p>Value: <span id="demo155"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v156">
                                                        <input type="range" name ="annotation_156" list="sliderticks" style="width:100%;" value="<?php echo $annotation_156;?>" min="1" max="7" step="1" class="slider" id="q156" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo156"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_53</h2></p>
                                                </p>
                                                     
                                                <input type="hidden" name="track_53_online" id="track_53">
                                                <iframe src="<?php echo $track_53;?>" id="track52" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v157">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_157" style="width:100%;" value="<?php echo $annotation_157;?>" min="-1" max="1" step="0.01" class="slider" id="q157" required>
                                                    <p>Value: <span id="demo157"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v158">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_158" style="width:100%;" value="<?php echo $annotation_158;?>" min="-1" max="1" step="0.01" class="slider" id="q158" required>
                                                    <p>Value: <span id="demo158"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v159">
                                                        <input type="range" name ="annotation_159" list="sliderticks" style="width:100%;" value="<?php echo $annotation_159;?>" min="1" max="7" step="1" class="slider" id="q159" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo159"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_54</h2></p>
                                                </p>
                                                
                                                <input type="hidden" name="track_54_online" id="track_54">
                                                <iframe src="<?php echo $track_54;?>" id="track53" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v160">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_160" style="width:100%;" value="<?php echo $annotation_160;?>" min="-1" max="1" step="0.01" class="slider" id="q160" required>
                                                    <p>Value: <span id="demo160"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v161">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_161" style="width:100%;" value="<?php echo $annotation_161;?>" min="-1" max="1" step="0.01" class="slider" id="q161" required>
                                                    <p>Value: <span id="demo161"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v162">
                                                        <input type="range" name ="annotation_162" list="sliderticks" style="width:100%;" value="<?php echo $annotation_162;?>" min="1" max="7" step="1" class="slider" id="q162" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo162"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_55</h2></p>
                                                </p>                                          
                                                                                                  
                                                <input type="hidden" name="track_55_online" id="track_55">
                                                <iframe src="<?php echo $track_55;?>" id="track54" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v163">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_163" style="width:100%;" value="<?php echo $annotation_163;?>" min="-1" max="1" step="0.01" class="slider" id="q163" required>
                                                    <p>Value: <span id="demo163"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v164">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_164" style="width:100%;" value="<?php echo $annotation_164;?>" min="-1" max="1" step="0.01" class="slider" id="q164" required>
                                                    <p>Value: <span id="demo164"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v165">
                                                        <input type="range" name ="annotation_165" list="sliderticks" style="width:100%;" value="<?php echo $annotation_165;?>" min="1" max="7" step="1" class="slider" id="q165" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo165"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_56</h2></p>
                                                </p>
                                                                                               
                                                <input type="hidden" name="track_56_online" id="track_56">
                                                <iframe src="<?php echo $track_56;?>" id="track55" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v166">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_166" style="width:100%;" value="<?php echo $annotation_166;?>" min="-1" max="1" step="0.01" class="slider" id="q166" required>
                                                    <p>Value: <span id="demo166"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v167">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_167" style="width:100%;" value="<?php echo $annotation_167;?>" min="-1" max="1" step="0.01" class="slider" id="q167" required>
                                                    <p>Value: <span id="demo167"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v168">
                                                        <input type="range" name ="annotation_168" list="sliderticks" style="width:100%;" value="<?php echo $annotation_168;?>" min="1" max="7" step="1" class="slider" id="q168" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo168"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                        

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_57</h2></p>
                                                </p>
                                                                                            
                                                <input type="hidden" name="track_57_online" id="track_57">
                                                <iframe src="<?php echo $track_57;?>" id="track56" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v169">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_169" style="width:100%;" value="<?php echo $annotation_169;?>" min="-1" max="1" step="0.01" class="slider" id="q169" required>
                                                    <p>Value: <span id="demo169"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v170">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_170" style="width:100%;" value="<?php echo $annotation_170;?>" min="-1" max="1" step="0.01" class="slider" id="q170" required>
                                                    <p>Value: <span id="demo170"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v171">
                                                        <input type="range" name ="annotation_171" list="sliderticks" style="width:100%;" value="<?php echo $annotation_171;?>" min="1" max="7" step="1" class="slider" id="q171" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo171"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_58</h2></p>
                                                </p>
                                                                                          
                                                <input type="hidden" name="track_58_online" id="track_58">
                                                <iframe src="<?php echo $track_58;?>" id="track57" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v172">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_172" style="width:100%;" value="<?php echo $annotation_172;?>" min="-1" max="1" step="0.01" class="slider" id="q172" required>
                                                    <p>Value: <span id="demo172"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v173">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_173" style="width:100%;" value="<?php echo $annotation_173;?>" min="-1" max="1" step="0.01" class="slider" id="q173" required>
                                                    <p>Value: <span id="demo173"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v174">
                                                        <input type="range" name ="annotation_174" list="sliderticks" style="width:100%;" value="<?php echo $annotation_174;?>" min="1" max="7" step="1" class="slider" id="q174" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo174"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_59</h2></p>
                                                </p>
                                                                         
                                                <input type="hidden" name="track_59_online" id="track_59">
                                                <iframe src="<?php echo $track_59;?>" id="track58" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v175">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_175" style="width:100%;" value="<?php echo $annotation_175;?>" min="-1" max="1" step="0.01" class="slider" id="q175" required>
                                                    <p>Value: <span id="demo175"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v176">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_176" style="width:100%;" value="<?php echo $annotation_176;?>" min="-1" max="1" step="0.01" class="slider" id="q176" required>
                                                    <p>Value: <span id="demo176"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v177">
                                                        <input type="range" name ="annotation_177" list="sliderticks" style="width:100%;" value="<?php echo $annotation_177;?>" min="1" max="7" step="1" class="slider" id="q177" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo177"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_60</h2></p>
                                                </p>                                                  
                                                
                                                <input type="hidden" name="track_60_online" id="track_60">
                                                <iframe src="<?php echo $track_60;?>" id="track59" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v178">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_178" style="width:100%;" value="<?php echo $annotation_178;?>" min="-1" max="1" step="0.01" class="slider" id="q178" required>
                                                    <p>Value: <span id="demo178"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v179">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_179" style="width:100%;" value="<?php echo $annotation_179;?>" min="-1" max="1" step="0.01" class="slider" id="q179" required>
                                                    <p>Value: <span id="demo179"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v180">
                                                        <input type="range" name ="annotation_180" list="sliderticks" style="width:100%;" value="<?php echo $annotation_180;?>" min="1" max="7" step="1" class="slider" id="q180" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo180"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_61</h2></p>
                                                </p>
                                                                                              
                                                <input type="hidden" name="track_61_online" id="track_61">
                                                <iframe src="<?php echo $track_61;?>" id="track60" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v181">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_181" style="width:100%;" value="<?php echo $annotation_181;?>" min="-1" max="1" step="0.01" class="slider" id="q181" required>
                                                    <p>Value: <span id="demo181"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v182">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_182" style="width:100%;" value="<?php echo $annotation_182;?>" min="-1" max="1" step="0.01" class="slider" id="q182" required>
                                                    <p>Value: <span id="demo182"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v183">
                                                        <input type="range" name ="annotation_183" list="sliderticks" style="width:100%;" value="<?php echo $annotation_183;?>" min="1" max="7" step="1" class="slider" id="q183" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo183"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_62</h2></p>
                                                </p>
                                                                                         
                                                <input type="hidden" name="track_62_online" id="track_62">
                                                <iframe src="<?php echo $track_62;?>" id="track61" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v184">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_184" style="width:100%;" value="<?php echo $annotation_184;?>" min="-1" max="1" step="0.01" class="slider" id="q184" required>
                                                    <p>Value: <span id="demo184"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v185">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_185" style="width:100%;" value="<?php echo $annotation_185;?>" min="-1" max="1" step="0.01" class="slider" id="q185" required>
                                                    <p>Value: <span id="demo185"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v186">
                                                    <input type="range" name ="annotation_186" list="sliderticks" style="width:100%;" value="<?php echo $annotation_186;?>" min="1" max="7" step="1" class="slider" id="q186" required>                                                    
                                                    <div class="sliderticks">
                                                        <P>1</P>
                                                        <p>2</p>
                                                        <p>3</p>
                                                        <p>4</p>
                                                        <p>5</p>
                                                        <p>6</p>
                                                        <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo186"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_63</h2></p>
                                                </p>                                                
                                                                                               
                                                <input type="hidden" name="track_63_online" id="track_63">
                                                <iframe src="<?php echo $track_63;?>" id="track62" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v187">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_187" style="width:100%;" value="<?php echo $annotation_187;?>" min="-1" max="1" step="0.01" class="slider" id="q187" required>
                                                    <p>Value: <span id="demo187"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v188">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_188" style="width:100%;" value="<?php echo $annotation_188;?>" min="-1" max="1" step="0.01" class="slider" id="q188" required>
                                                    <p>Value: <span id="demo188"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v189">
                                                        <input type="range" name ="annotation_189" list="sliderticks" style="width:100%;" value="<?php echo $annotation_189;?>" min="1" max="7" step="1" class="slider" id="q189" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo189"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_64</h2></p>
                                                </p>                                                   
                                                                                                  
                                                <input type="hidden" name="track_64_online" id="track_64">
                                                <iframe src="<?php echo $track_64;?>" id="track63" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v190">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_190" style="width:100%;" value="<?php echo $annotation_190;?>" min="-1" max="1" step="0.01" class="slider" id="q190" required>
                                                    <p>Value: <span id="demo190"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v191">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_191" style="width:100%;" value="<?php echo $annotation_191;?>" min="-1" max="1" step="0.01" class="slider" id="q191" required>
                                                    <p>Value: <span id="demo191"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v192">
                                                        <input type="range" name ="annotation_192" list="sliderticks" style="width:100%;" value="<?php echo $annotation_192;?>" min="1" max="7" step="1" class="slider" id="q192" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo192"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_65</h2></p>
                                                </p>                                                 
                                                                                                   
                                                <input type="hidden" name="track_65_online" id="track_65">
                                                <iframe src="<?php echo $track_65;?>" id="track64" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v193">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_193" style="width:100%;" value="<?php echo $annotation_193;?>" min="-1" max="1" step="0.01" class="slider" id="q193" required>
                                                    <p>Value: <span id="demo193"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v194">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_194" style="width:100%;" value="<?php echo $annotation_194;?>" min="-1" max="1" step="0.01" class="slider" id="q194" required>
                                                    <p>Value: <span id="demo194"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v195">
                                                        <input type="range" name ="annotation_195" list="sliderticks" style="width:100%;" value="<?php echo $annotation_195;?>" min="1" max="7" step="1" class="slider" id="q195" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo195"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_66</h2></p>
                                                </p>
                                                    
                                                <input type="hidden" name="track_66_online" id="track_66">
                                                <iframe src="<?php echo $track_66;?>" id="track65" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v196">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_196" style="width:100%;" value="<?php echo $annotation_196;?>" min="-1" max="1" step="0.01" class="slider" id="q196" required>
                                                    <p>Value: <span id="demo196"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v197">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_197" style="width:100%;" value="<?php echo $annotation_197;?>" min="-1" max="1" step="0.01" class="slider" id="q197" required>
                                                    <p>Value: <span id="demo197"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v198">
                                                        <input type="range" name ="annotation_198" list="sliderticks" style="width:100%;" value="<?php echo $annotation_198;?>" min="1" max="7" step="1" class="slider" id="q198" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo198"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_67</h2></p>
                                                </p>
                                                                                
                                                <input type="hidden" name="track_67_online" id="track_67">
                                                <iframe src="<?php echo $track_67;?>" id="track66" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v199">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_199" style="width:100%;" value="<?php echo $annotation_199;?>" min="-1" max="1" step="0.01" class="slider" id="q199" required>
                                                    <p>Value: <span id="demo199"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v200">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_200" style="width:100%;" value="<?php echo $annotation_200;?>" min="-1" max="1" step="0.01" class="slider" id="q200" required>
                                                    <p>Value: <span id="demo200"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v201">
                                                        <input type="range" name ="annotation_201" list="sliderticks" style="width:100%;" value="<?php echo $annotation_201;?>" min="1" max="7" step="1" class="slider" id="q201" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo201"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_68</h2></p>
                                                </p>                                                   
                                                                                                
                                                <input type="hidden" name="track_68_online" id="track_68">
                                                <iframe src="<?php echo $track_68;?>" id="track67" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v202">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_202" style="width:100%;" value="<?php echo $annotation_202;?>" min="-1" max="1" step="0.01" class="slider" id="q202" required>
                                                    <p>Value: <span id="demo202"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v203">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_203" style="width:100%;" value="<?php echo $annotation_203;?>" min="-1" max="1" step="0.01" class="slider" id="q203" required>
                                                    <p>Value: <span id="demo203"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v204">
                                                        <input type="range" name ="annotation_204" list="sliderticks" style="width:100%;" value="<?php echo $annotation_204;?>" min="1" max="7" step="1" class="slider" id="q204" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo204"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_69</h2></p>
                                                </p>                                                 
                                                                                                  
                                                <input type="hidden" name="track_69_online" id="track_69">
                                                <iframe src="<?php echo $track_69;?>" id="track68" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v205">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_205" style="width:100%;" value="<?php echo $annotation_205;?>" min="-1" max="1" step="0.01" class="slider" id="q205" required>
                                                    <p>Value: <span id="demo205"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v206">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_206" style="width:100%;" value="<?php echo $annotation_206;?>" min="-1" max="1" step="0.01" class="slider" id="q206" required>
                                                    <p>Value: <span id="demo206"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v207">
                                                        <input type="range" name ="annotation_207" list="sliderticks" style="width:100%;" value="<?php echo $annotation_207;?>" min="1" max="7" step="1" class="slider" id="q207" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo207"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_70</h2></p>
                                                </p>
                                                                                             
                                                <input type="hidden" name="track_70_online" id="track_70">
                                                <iframe src="<?php echo $track_70;?>" id="track69" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v208">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_208" style="width:100%;" value="<?php echo $annotation_208;?>" min="-1" max="1" step="0.01" class="slider" id="q208" required>
                                                    <p>Value: <span id="demo208"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v209">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_209" style="width:100%;" value="<?php echo $annotation_209;?>" min="-1" max="1" step="0.01" class="slider" id="q209" required>
                                                    <p>Value: <span id="demo209"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v210">
                                                        <input type="range" name ="annotation_210" list="sliderticks" style="width:100%;" value="<?php echo $annotation_210;?>" min="1" max="7" step="1" class="slider" id="q210" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo210"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_71</h2></p>
                                                </p>
                                                                                               
                                                <input type="hidden" name="track_71_online" id="track_71">
                                                <iframe src="<?php echo $track_71;?>" id="track70" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v211">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_211" style="width:100%;" value="<?php echo $annotation_211;?>" min="-1" max="1" step="0.01" class="slider" id="q211" required>
                                                    <p>Value: <span id="demo211"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v212">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_212" style="width:100%;" value="<?php echo $annotation_212;?>" min="-1" max="1" step="0.01" class="slider" id="q212" required>
                                                    <p>Value: <span id="demo212"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v213">
                                                        <input type="range" name ="annotation_213" list="sliderticks" style="width:100%;" value="<?php echo $annotation_213;?>" min="1" max="7" step="1" class="slider" id="q213" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo213"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_72</h2></p>
                                                </p>
                                                                                         
                                                <input type="hidden" name="track_72_online" id="track_72">
                                                <iframe src="<?php echo $track_72;?>" id="track71" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v214">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_214" style="width:100%;" value="<?php echo $annotation_214;?>" min="-1" max="1" step="0.01" class="slider" id="q214" required>
                                                    <p>Value: <span id="demo214"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v215">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_215" style="width:100%;" value="<?php echo $annotation_215;?>" min="-1" max="1" step="0.01" class="slider" id="q215" required>
                                                    <p>Value: <span id="demo215"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v216">
                                                        <input type="range" name ="annotation_216" list="sliderticks" style="width:100%;" value="<?php echo $annotation_216;?>" min="1" max="7" step="1" class="slider" id="q216" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo216"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_73</h2></p>
                                                </p>                                                 
                                                                                            
                                                <input type="hidden" name="track_73_online" id="track_73">
                                                <iframe src="<?php echo $track_73;?>" id="track72" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v217">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_217" style="width:100%;" value="<?php echo $annotation_217;?>" min="-1" max="1" step="0.01" class="slider" id="q217" required>
                                                    <p>Value: <span id="demo217"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v218">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_218" style="width:100%;" value="<?php echo $annotation_218;?>" min="-1" max="1" step="0.01" class="slider" id="q218" required>
                                                    <p>Value: <span id="demo218"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v219">
                                                        <input type="range" name ="annotation_219" list="sliderticks" style="width:100%;" value="<?php echo $annotation_219;?>" min="1" max="7" step="1" class="slider" id="q219" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo219"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_74</h2></p>
                                                </p>                                              
                                                                                   
                                                <input type="hidden" name="track_74_online" id="track_74">
                                                <iframe src="<?php echo $track_74;?>" id="track73" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v220">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_220" style="width:100%;" value="<?php echo $annotation_220;?>" min="-1" max="1" step="0.01" class="slider" id="q220" required>
                                                    <p>Value: <span id="demo220"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v221">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_221" style="width:100%;" value="<?php echo $annotation_221;?>" min="-1" max="1" step="0.01" class="slider" id="q221" required>
                                                    <p>Value: <span id="demo221"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v222">
                                                        <input type="range" name ="annotation_222" list="sliderticks" style="width:100%;" value="<?php echo $annotation_222;?>" min="1" max="7" step="1" class="slider" id="q222" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo222"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_75</h2></p>
                                                </p>                                                 
                                                                                             
                                                <input type="hidden" name="track_75_online" id="track_75">
                                                <iframe src="<?php echo $track_75;?>" id="track74" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v223">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_223" style="width:100%;" value="<?php echo $annotation_223;?>" min="-1" max="1" step="0.01" class="slider" id="q223" required>
                                                    <p>Value: <span id="demo223"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v224">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_224" style="width:100%;" value="<?php echo $annotation_224;?>" min="-1" max="1" step="0.01" class="slider" id="q224" required>
                                                    <p>Value: <span id="demo224"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v225">
                                                        <input type="range" name ="annotation_225" list="sliderticks" style="width:100%;" value="<?php echo $annotation_225;?>" min="1" max="7" step="1" class="slider" id="q225" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo225"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                    <br>
                                                    <p align="Center">
                                                    <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_76</h2></p>
                                                    </p>
                                                    <input type="hidden" name="track_76_online" id="track_76">
                                                    <iframe src="<?php echo $track_76;?>" id="track75" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                    </iframe>

                                                    <div class="slidecontainer">
                                                        <span class="v226">
                                                        <h align="Center">
                                                        <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                        <input type="range" name ="annotation_226" style="width:100%;" value="<?php echo $annotation_226;?>" min="-1" max="1" step="0.01" class="slider" id="q226" required>
                                                        <p>Value: <span id="demo226"></span></p>
                                                        </span>
                                                        </h>
                                                    </div>

                                                    <div class="slidecontainer">
                                                        <span class="v227">
                                                        <h align="Center">
                                                        <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                        <input type="range" name ="annotation_227" style="width:100%;" value="<?php echo $annotation_227;?>" min="-1" max="1" step="0.01" class="slider" id="q227" required>
                                                        <p>Value: <span id="demo227"></span></p>
                                                        </span>
                                                        </h>
                                                    </div>

                                                    <div class="slidecontainer">
                                                        <h align="Center">
                                                        <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                        <span class="v228">
                                                                <input type="range" name ="annotation_228" list="sliderticks" style="width:100%;" value="<?php echo $annotation_228;?>" min="1" max="7" step="1" class="slider" id="q228" required>                                                    
                                                                <div class="sliderticks">
                                                                    <P>1</P>
                                                                    <p>2</p>
                                                                    <p>3</p>
                                                                    <p>4</p>
                                                                    <p>5</p>
                                                                    <p>6</p>
                                                                    <p>7</p>
                                                                </div><br>
                                                                <p>Rating: <span id="demo228"></span></p>
                                                        </span>
                                                        </h>
                                                    </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_77</h2></p>
                                                </p>
                                                                                         
                                                <input type="hidden" name="track_77_online" id="track_77">
                                                <iframe src="<?php echo $track_77;?>" id="track76" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v229">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_229" style="width:100%;" value="<?php echo $annotation_229;?>" min="-1" max="1" step="0.01" class="slider" id="q229" required>
                                                    <p>Value: <span id="demo229"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v230">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_230" style="width:100%;" value="<?php echo $annotation_230;?>" min="-1" max="1" step="0.01" class="slider" id="q230" required>
                                                    <p>Value: <span id="demo230"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v231">
                                                        <input type="range" name ="annotation_231" list="sliderticks" style="width:100%;" value="<?php echo $annotation_231;?>" min="1" max="7" step="1" class="slider" id="q231" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo231"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_78</h2></p>
                                                </p>                                                  
                                                                                            
                                                <input type="hidden" name="track_78_online" id="track_78">
                                                <iframe src="<?php echo $track_78;?>" id="track77" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v232">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_232" style="width:100%;" value="<?php echo $annotation_232;?>" min="-1" max="1" step="0.01" class="slider" id="q232" required>
                                                    <p>Value: <span id="demo232"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v233">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_233" style="width:100%;" value="<?php echo $annotation_233;?>" min="-1" max="1" step="0.01" class="slider" id="q233" required>
                                                    <p>Value: <span id="demo233"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v234">
                                                        <input type="range" name ="annotation_234" list="sliderticks" style="width:100%;" value="<?php echo $annotation_234;?>" min="1" max="7" step="1" class="slider" id="q234" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo234"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_79</h2></p>
                                                </p>                                                   
                                                                                             
                                                <input type="hidden" name="track_79_online" id="track_79">
                                                <iframe src="<?php echo $track_79;?>" id="track78" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v235">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_235" style="width:100%;" value="<?php echo $annotation_235;?>" min="-1" max="1" step="0.01" class="slider" id="q235" required>
                                                    <p>Value: <span id="demo235"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v236">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_236" style="width:100%;" value="<?php echo $annotation_236;?>" min="-1" max="1" step="0.01" class="slider" id="q236" required>
                                                    <p>Value: <span id="demo236"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v237">
                                                        <input type="range" name ="annotation_237" list="sliderticks" style="width:100%;" value="<?php echo $annotation_237;?>" min="1" max="7" step="1" class="slider" id="q237" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo237"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_80</h2></p>
                                                </p>                                                  
                                                                                             
                                                <input type="hidden" name="track_80_online" id="track_80">
                                                <iframe src="<?php echo $track_80;?>" id="track79" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v238">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_238" style="width:100%;" value="<?php echo $annotation_238;?>" min="-1" max="1" step="0.01" class="slider" id="q238" required>
                                                    <p>Value: <span id="demo238"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v239">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_239" style="width:100%;" value="<?php echo $annotation_239;?>" min="-1" max="1" step="0.01" class="slider" id="q239" required>
                                                    <p>Value: <span id="demo239"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v240">
                                                        <input type="range" name ="annotation_240" list="sliderticks" style="width:100%;" value="<?php echo $annotation_240;?>" min="1" max="7" step="1" class="slider" id="q240" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo240"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_81</h2></p>
                                                </p>                                                
                                                                                                
                                                <input type="hidden" name="track_81_online" id="track_81">
                                                <iframe src="<?php echo $track_81;?>" id="track80" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v241">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_241" style="width:100%;" value="<?php echo $annotation_241;?>" min="-1" max="1" step="0.01" class="slider" id="q241" required>
                                                    <p>Value: <span id="demo241"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v242">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_242" style="width:100%;" value="<?php echo $annotation_242;?>" min="-1" max="1" step="0.01" class="slider" id="q242" required>
                                                    <p>Value: <span id="demo242"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v243">
                                                            <input type="range" name ="annotation_243" list="sliderticks" style="width:100%;" value="<?php echo $annotation_243;?>" min="1" max="7" step="1" class="slider" id="q243" required>                                                    
                                                            <div class="sliderticks">
                                                                <P>1</P>
                                                                <p>2</p>
                                                                <p>3</p>
                                                                <p>4</p>
                                                                <p>5</p>
                                                                <p>6</p>
                                                                <p>7</p>
                                                            </div><br>
                                                            <p>Rating: <span id="demo243"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_82</h2></p>
                                                </p>
                                                                                             
                                                <input type="hidden" name="track_82_online" id="track_82">
                                                <iframe src="<?php echo $track_82;?>" id="track81" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v244">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_244" style="width:100%;" value="<?php echo $annotation_244;?>" min="-1" max="1" step="0.01" class="slider" id="q244" required>
                                                    <p>Value: <span id="demo244"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v245">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_245" style="width:100%;" value="<?php echo $annotation_245;?>" min="-1" max="1" step="0.01" class="slider" id="q245" required>
                                                    <p>Value: <span id="demo245"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v246">
                                                        <input type="range" name ="annotation_246" list="sliderticks" style="width:100%;" value="<?php echo $annotation_246;?>" min="1" max="7" step="1" class="slider" id="q246" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo246"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_83</h2></p>
                                                </p>                                                
                                                                                                 
                                                <input type="hidden" name="track_83_online" id="track_83">
                                                <iframe src="<?php echo $track_83;?>" id="track82" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v247">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_247" style="width:100%;" value="<?php echo $annotation_247;?>" min="-1" max="1" step="0.01" class="slider" id="q247" required>
                                                    <p>Value: <span id="demo247"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v248">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_248" style="width:100%;" value="<?php echo $annotation_248;?>" min="-1" max="1" step="0.01" class="slider" id="q248" required>
                                                    <p>Value: <span id="demo248"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v249">
                                                        <input type="range" name ="annotation_249" list="sliderticks" style="width:100%;" value= min="1" max="7" step="1" class="slider" id="q249" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo249"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_84</h2></p>
                                                </p>                                                 
                                                                                                 
                                                <input type="hidden" name="track_84_online" id="track_84">
                                                <iframe src="<?php echo $track_84;?>" id="track83" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v250">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_250" style="width:100%;" value="<?php echo $annotation_250;?>" min="-1" max="1" step="0.01" class="slider" id="q250" required>
                                                    <p>Value: <span id="demo250"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v251">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_251" style="width:100%;" value="<?php echo $annotation_251;?>" min="-1" max="1" step="0.01" class="slider" id="q251" required>
                                                    <p>Value: <span id="demo251"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v252">
                                                        <input type="range" name ="annotation_252" list="sliderticks" style="width:100%;" value="<?php echo $annotation_252;?>" min="1" max="7" step="1" class="slider" id="q252" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo252"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_85</h2></p>
                                                </p>                                                 
                                                                                             
                                                <input type="hidden" name="track_85_online" id="track_85">
                                                <iframe src="<?php echo $track_85;?>" id="track84" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v253">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_253" style="width:100%;" value="<?php echo $annotation_253;?>" min="-1" max="1" step="0.01" class="slider" id="q253" required>
                                                    <p>Value: <span id="demo253"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v254">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_254" style="width:100%;" value="<?php echo $annotation_254;?>" min="-1" max="1" step="0.01" class="slider" id="q254" required>
                                                    <p>Value: <span id="demo254"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v255">
                                                        <input type="range" name ="annotation_255" list="sliderticks" style="width:100%;" value="<?php echo $annotation_255;?>" min="1" max="7" step="1" class="slider" id="q255" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo255"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                        

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_86</h2></p>
                                                </p>                                                  
                                                                                                 
                                                <input type="hidden" name="track_86_online" id="track_86">
                                                <iframe src="<?php echo $track_86;?>" id="track85" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v256">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_256" style="width:100%;" value="<?php echo $annotation_256;?>" min="-1" max="1" step="0.01" class="slider" id="q256" required>
                                                    <p>Value: <span id="demo256"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v257">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_257" style="width:100%;" value="<?php echo $annotation_257;?>" min="-1" max="1" step="0.01" class="slider" id="q257" required>
                                                    <p>Value: <span id="demo257"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v258">
                                                        <input type="range" name ="annotation_258" list="sliderticks" style="width:100%;" value="<?php echo $annotation_258;?>" min="1" max="7" step="1" class="slider" id="q258" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo258"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_87</h2></p>
                                                </p>                                                  
                                                                                                   
                                                <input type="hidden" name="track_87_online" id="track_87">
                                                <iframe src="<?php echo $track_87;?>" id="track86" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v259">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_259" style="width:100%;" value="<?php echo $annotation_259;?>" min="-1" max="1" step="0.01" class="slider" id="q259" required>
                                                    <p>Value: <span id="demo259"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v260">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_260" style="width:100%;" value="<?php echo $annotation_260;?>" min="-1" max="1" step="0.01" class="slider" id="q260" required>
                                                    <p>Value: <span id="demo260"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v261">
                                                        <input type="range" name ="annotation_261" list="sliderticks" style="width:100%;" value="<?php echo $annotation_261;?>" min="1" max="7" step="1" class="slider" id="q261" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo261"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                        

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_88</h2></p>
                                                </p>
                                                                                                 
                                                <input type="hidden" name="track_88_online" id="track_88">
                                                <iframe src="<?php echo $track_88;?>" id="track87" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v262">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_262" style="width:100%;" value="<?php echo $annotation_262;?>" min="-1" max="1" step="0.01" class="slider" id="q262" required>
                                                    <p>Value: <span id="demo262"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v263">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_263" style="width:100%;" value="<?php echo $annotation_263;?>" min="-1" max="1" step="0.01" class="slider" id="q263" required>
                                                    <p>Value: <span id="demo263"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v264">
                                                        <input type="range" name ="annotation_264" list="sliderticks" style="width:100%;" value="<?php echo $annotation_264;?>" min="1" max="7" step="1" class="slider" id="q264" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo264"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_89</h2></p>
                                                </p>                                              
                                                                                               
                                                <input type="hidden" name="track_89_online" id="track_89">
                                                <iframe src="<?php echo $track_89;?>" id="track88" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v265">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_265" style="width:100%;" value="<?php echo $annotation_265;?>" min="-1" max="1" step="0.01" class="slider" id="q265" required>
                                                    <p>Value: <span id="demo265"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v266">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_266" style="width:100%;" value="<?php echo $annotation_266;?>" min="-1" max="1" step="0.01" class="slider" id="q266" required>
                                                    <p>Value: <span id="demo266"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v267">
                                                        <input type="range" name ="annotation_267" list="sliderticks" style="width:100%;" value="<?php echo $annotation_267;?>" min="1" max="7" step="1" class="slider" id="q267" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo267"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_90</h2></p>
                                                </p>                                                   
                                                                                                 
                                                <input type="hidden" name="track_90_online" id="track_90">
                                                <iframe src="<?php echo $track_90;?>" id="track89" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v268">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_268" style="width:100%;" value="<?php echo $annotation_268;?>" min="-1" max="1" step="0.01" class="slider" id="q268" required>
                                                    <p>Value: <span id="demo268"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v269">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_269" style="width:100%;" value="<?php echo $annotation_269;?>" min="-1" max="1" step="0.01" class="slider" id="q269" required>
                                                    <p>Value: <span id="demo269"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v270">
                                                        <input type="range" name ="annotation_270" list="sliderticks" style="width:100%;" value="<?php echo $annotation_270;?>" min="1" max="7" step="1" class="slider" id="q270" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo270"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_91</h2></p>
                                                </p>                                                  
                                                                                                 
                                                <input type="hidden" name="track_91_online" id="track_91">
                                                <iframe src="<?php echo $track_91;?>" id="track90" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v271">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_271" style="width:100%;" value="<?php echo $annotation_271;?>" min="-1" max="1" step="0.01" class="slider" id="q271" required>
                                                    <p>Value: <span id="demo271"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v272">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_272" style="width:100%;" value="<?php echo $annotation_272;?>" min="-1" max="1" step="0.01" class="slider" id="q272" required>
                                                    <p>Value: <span id="demo272"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v273">
                                                        <input type="range" name ="annotation_273" list="sliderticks" style="width:100%;" value="<?php echo $annotation_273;?>" min="1" max="7" step="1" class="slider" id="q273" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo273"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_92</h2></p>
                                                </p>                                                  
                                                                                                  
                                                <input type="hidden" name="track_92_online" id="track_92">
                                                <iframe src="<?php echo $track_92;?>" id="track91" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v274">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_274" style="width:100%;" value="<?php echo $annotation_274;?>" min="-1" max="1" step="0.01" class="slider" id="q274" required>
                                                    <p>Value: <span id="demo274"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v275">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_275" style="width:100%;" value="<?php echo $annotation_275;?>" min="-1" max="1" step="0.01" class="slider" id="q275" required>
                                                    <p>Value: <span id="demo275"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v276">
                                                        <input type="range" name ="annotation_276" list="sliderticks" style="width:100%;" value="<?php echo $annotation_276;?>" min="1" max="7" step="1" class="slider" id="q276" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo276"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_93</h2></p>
                                                </p>
                                                                                            
                                                <input type="hidden" name="track_93_online" id="track_93">
                                                <iframe src="<?php echo $track_93;?>" id="track92" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v277">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_277" style="width:100%;" value="<?php echo $annotation_277;?>" min="-1" max="1" step="0.01" class="slider" id="q277" required>
                                                    <p>Value: <span id="demo277"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v278">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_278" style="width:100%;" value="<?php echo $annotation_278;?>" min="-1" max="1" step="0.01" class="slider" id="q278" required>
                                                    <p>Value: <span id="demo278"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v279">
                                                        <input type="range" name ="annotation_279" list="sliderticks" style="width:100%;" value="<?php echo $annotation_279;?>" min="1" max="7" step="1" class="slider" id="q279" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo279"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_94</h2></p>
                                                </p>                                                 
                                                                                                
                                                <input type="hidden" name="track_94_online" id="track_94">
                                                <iframe src="<?php echo $track_94;?>" id="track93" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v280">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_280" style="width:100%;" value="<?php echo $annotation_280;?>" min="-1" max="1" step="0.01" class="slider" id="q280" required>
                                                    <p>Value: <span id="demo280"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v281">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_281" style="width:100%;" value="<?php echo $annotation_281;?>" min="-1" max="1" step="0.01" class="slider" id="q281" required>
                                                    <p>Value: <span id="demo281"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v282">
                                                        <input type="range" name ="annotation_282" list="sliderticks" style="width:100%;" value="<?php echo $annotation_282;?>" min="1" max="7" step="1" class="slider" id="q282" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo282"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_95</h2></p>
                                                </p>                                                  
                                                                                                   
                                                <input type="hidden" name="track_95_online" id="track_95">
                                                <iframe src="<?php echo $track_95;?>" id="track94" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v283">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_283" style="width:100%;" value="<?php echo $annotation_283;?>" min="-1" max="1" step="0.01" class="slider" id="q283" required>
                                                    <p>Value: <span id="demo283"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v284">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_284" style="width:100%;" value="<?php echo $annotation_284;?>" min="-1" max="1" step="0.01" class="slider" id="q284" required>
                                                    <p>Value: <span id="demo284"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v285">
                                                        <input type="range" name ="annotation_285" list="sliderticks" style="width:100%;" value="<?php echo $annotation_285;?>" min="1" max="7" step="1" class="slider" id="q285" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo285"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_96</h2></p>
                                                </p>                                                 
                                                                                                
                                                <input type="hidden" name="track_96_online" id="track_96">
                                                <iframe src="<?php echo $track_96;?>" id="track95" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v286">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_286" style="width:100%;" value="<?php echo $annotation_286;?>" min="-1" max="1" step="0.01" class="slider" id="q286" required>
                                                    <p>Value: <span id="demo286"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v287">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_287" style="width:100%;" value="<?php echo $annotation_287;?>" min="-1" max="1" step="0.01" class="slider" id="q287" required>
                                                    <p>Value: <span id="demo287"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v288">
                                                        <input type="range" name ="annotation_288" list="sliderticks" style="width:100%;" value="<?php echo $annotation_288;?>" min="1" max="7" step="1" class="slider" id="q288" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo288"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                        

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_97</h2></p>
                                                </p>
                                                                                      
                                                <input type="hidden" name="track_97_online" id="track_97">
                                                <iframe src="<?php echo $track_97;?>" id="track96" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v289">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_289" style="width:100%;" value="<?php echo $annotation_289;?>" min="-1" max="1" step="0.01" class="slider" id="q289" required>
                                                    <p>Value: <span id="demo289"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v290">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_290" style="width:100%;" value="<?php echo $annotation_290;?>" min="-1" max="1" step="0.01" class="slider" id="q290" required>
                                                    <p>Value: <span id="demo290"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v291">
                                                        <input type="range" name ="annotation_291" list="sliderticks" style="width:100%;" value="<?php echo $annotation_291;?>" min="1" max="7" step="1" class="slider" id="q291" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo291"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_98</h2></p>
                                                </p>
                                                                                                  
                                                <input type="hidden" name="track_98_online" id="track_98">
                                                <iframe src="<?php echo $track_98;?>" id="track97" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v292">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_292" style="width:100%;" value="<?php echo $annotation_292;?>" min="-1" max="1" step="0.01" class="slider" id="q292" required>
                                                    <p>Value: <span id="demo292"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v293">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_293" style="width:100%;" value="<?php echo $annotation_293;?>" min="-1" max="1" step="0.01" class="slider" id="q293" required>
                                                    <p>Value: <span id="demo293"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v294">
                                                        <input type="range" name ="annotation_294" list="sliderticks" style="width:100%;" value="<?php echo $annotation_294;?>" min="1" max="7" step="1" class="slider" id="q294" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo294"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_99</h2></p>
                                                </p>
                                                  
                                                <input type="hidden" name="track_99_online" id="track_99">
                                                <iframe src="<?php echo $track_99;?>" id="track98" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v295">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_295" style="width:100%;" value="<?php echo $annotation_295;?>" min="-1" max="1" step="0.01" class="slider" id="q295" required>
                                                    <p>Value: <span id="demo295"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v296">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_296" style="width:100%;" value="<?php echo $annotation_296;?>" min="-1" max="1" step="0.01" class="slider" id="q296" required>
                                                    <p>Value: <span id="demo296"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v297">
                                                        <input type="range" name ="annotation_297" list="sliderticks" style="width:100%;" value="<?php echo $annotation_297;?>" min="1" max="7" step="1" class="slider" id="q297" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo297"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_100</h2></p>
                                                </p>
                                                                               
                                                <input type="hidden" name="track_100_online" id="track_100">
                                                <iframe src="<?php echo $track_100;?>" id="track99" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v298">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_298" style="width:100%;" value="<?php echo $annotation_298;?>" min="-1" max="1" step="0.01" class="slider" id="q298" required>
                                                    <p>Value: <span id="demo298"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v299">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_299" style="width:100%;" value="<?php echo $annotation_299;?>" min="-1" max="1" step="0.01" class="slider" id="q299" required>
                                                    <p>Value: <span id="demo299"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v300">
                                                        <input type="range" name ="annotation_300" list="sliderticks" style="width:100%;" value="<?php echo $annotation_300;?>" min="1" max="7" step="1" class="slider" id="q300" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo300"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_101</h2></p>
                                                </p>
                                                                                                 
                                                <input type="hidden" name="track_101_online" id="track_101">
                                                <iframe src="<?php echo $track_101;?>" id="track100" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v301">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_301" style="width:100%;" value="<?php echo $annotation_301;?>" min="-1" max="1" step="0.01" class="slider" id="q301" required>
                                                    <p>Value: <span id="demo301"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v302">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_302" style="width:100%;" value="<?php echo $annotation_302;?>" min="-1" max="1" step="0.01" class="slider" id="q302" required>
                                                    <p>Value: <span id="demo302"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v303">
                                                        <input type="range" name ="annotation_303" list="sliderticks" style="width:100%;" value="<?php echo $annotation_303;?>" min="1" max="7" step="1" class="slider" id="q303" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo303"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_102</h2></p>
                                                </p>                                                  
                                                                                                  
                                                <input type="hidden" name="track_102_online" id="track_102">
                                                <iframe src="<?php echo $track_102;?>" id="track101" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v304">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_304" style="width:100%;" value="<?php echo $annotation_304;?>" min="-1" max="1" step="0.01" class="slider" id="q304" required>
                                                    <p>Value: <span id="demo304"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v305">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_305" style="width:100%;" value="<?php echo $annotation_305;?>" min="-1" max="1" step="0.01" class="slider" id="q305" required>
                                                    <p>Value: <span id="demo305"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v306">
                                                        <input type="range" name ="annotation_306" list="sliderticks" style="width:100%;" value="<?php echo $annotation_306;?>" min="1" max="7" step="1" class="slider" id="q306" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo306"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_103</h2></p>
                                                </p>
                                                        
                                                <input type="hidden" name="track_103_online" id="track_103">
                                                <iframe src="<?php echo $track_103;?>" id="track102" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v307">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_307" style="width:100%;" value="<?php echo $annotation_307;?>" min="-1" max="1" step="0.01" class="slider" id="q307" required>
                                                    <p>Value: <span id="demo307"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v308">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_308" style="width:100%;" value="<?php echo $annotation_308;?>" min="-1" max="1" step="0.01" class="slider" id="q308" required>
                                                    <p>Value: <span id="demo308"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v309">
                                                        <input type="range" name ="annotation_309" list="sliderticks" style="width:100%;" value="<?php echo $annotation_309;?>" min="1" max="7" step="1" class="slider" id="q309" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo309"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_104</h2></p>
                                                </p>
                                                
                                                <input type="hidden" name="track_104_online" id="track_104">
                                                <iframe src="<?php echo $track_104;?>" id="track103" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v310">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_310" style="width:100%;" value="<?php echo $annotation_310;?>" min="-1" max="1" step="0.01" class="slider" id="q310" required>
                                                    <p>Value: <span id="demo310"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v311">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_311" style="width:100%;" value="<?php echo $annotation_311;?>" min="-1" max="1" step="0.01" class="slider" id="q311" required>
                                                    <p>Value: <span id="demo311"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v312">
                                                        <input type="range" name ="annotation_312" list="sliderticks" style="width:100%;" value="<?php echo $annotation_312;?>" min="1" max="7" step="1" class="slider" id="q312" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo312"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_105</h2></p>
                                                </p>
                                                                                        
                                                <input type="hidden" name="track_105_online" id="track_105">
                                                <iframe src="<?php echo $track_105;?>" id="track104" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v313">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_313" style="width:100%;" value="<?php echo $annotation_313;?>" min="-1" max="1" step="0.01" class="slider" id="q313" required>
                                                    <p>Value: <span id="demo313"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v314">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_314" style="width:100%;" value="<?php echo $annotation_314;?>" min="-1" max="1" step="0.01" class="slider" id="q314" required>
                                                    <p>Value: <span id="demo314"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v315">
                                                        <input type="range" name ="annotation_315" list="sliderticks" style="width:100%;" value="<?php echo $annotation_315;?>" min="1" max="7" step="1" class="slider" id="q315" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo315"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_106</h2></p>
                                                </p>
                                                                                           
                                                <input type="hidden" name="track_106_online" id="track_106">
                                                <iframe src="<?php echo $track_106;?>" id="track105" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v316">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_316" style="width:100%;" value="<?php echo $annotation_316;?>" min="-1" max="1" step="0.01" class="slider" id="q316" required>
                                                    <p>Value: <span id="demo316"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v317">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_317" style="width:100%;" value="<?php echo $annotation_317;?>" min="-1" max="1" step="0.01" class="slider" id="q317" required>
                                                    <p>Value: <span id="demo317"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v318">
                                                        <input type="range" name ="annotation_318" list="sliderticks" style="width:100%;" value="<?php echo $annotation_318;?>" min="1" max="7" step="1" class="slider" id="q318" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo318"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_107</h2></p>
                                                </p>
                                                                                             
                                                <input type="hidden" name="track_107_online" id="track_107">
                                                <iframe src="<?php echo $track_107;?>" id="track106" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v319">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_319" style="width:100%;" value="<?php echo $annotation_319;?>" min="-1" max="1" step="0.01" class="slider" id="q319" required>
                                                    <p>Value: <span id="demo319"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v320">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_320" style="width:100%;" value="<?php echo $annotation_320;?>" min="-1" max="1" step="0.01" class="slider" id="q320" required>
                                                    <p>Value: <span id="demo320"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v321">
                                                        <input type="range" name ="annotation_321" list="sliderticks" style="width:100%;" value="<?php echo $annotation_321;?>" min="1" max="7" step="1" class="slider" id="q321" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo321"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_108</h2></p>
                                                </p>
                                                                       
                                                <input type="hidden" name="track_108_online" id="track_108">
                                                <iframe src="<?php echo $track_108;?>" id="track107" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v322">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_322" style="width:100%;" value="<?php echo $annotation_322;?>" min="-1" max="1" step="0.01" class="slider" id="q322" required>
                                                    <p>Value: <span id="demo322"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v323">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_323" style="width:100%;" value="<?php echo $annotation_323;?>" min="-1" max="1" step="0.01" class="slider" id="q323" required>
                                                    <p>Value: <span id="demo323"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v324">
                                                        <input type="range" name ="annotation_324" list="sliderticks" style="width:100%;" value="<?php echo $annotation_324;?>" min="1" max="7" step="1" class="slider" id="q324" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo324"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_109</h2></p>
                                                </p>
                                                                                               
                                                <input type="hidden" name="track_109_online" id="track_109">
                                                <iframe src="<?php echo $track_109;?>" id="track108" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v325">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_325" style="width:100%;" value="<?php echo $annotation_325;?>" min="-1" max="1" step="0.01" class="slider" id="q325" required>
                                                    <p>Value: <span id="demo325"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v326">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_326" style="width:100%;" value="<?php echo $annotation_326;?>" min="-1" max="1" step="0.01" class="slider" id="q326" required>
                                                    <p>Value: <span id="demo326"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v327">
                                                        <input type="range" name ="annotation_327" list="sliderticks" style="width:100%;" value="<?php echo $annotation_327;?>" min="1" max="7" step="1" class="slider" id="q327" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo327"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_110</h2></p>
                                                </p>
                                                                               
                                                <input type="hidden" name="track_110_online" id="track_110">
                                                <iframe src="<?php echo $track_110;?>" id="track109" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v328">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_328" style="width:100%;" value="<?php echo $annotation_328;?>" min="-1" max="1" step="0.01" class="slider" id="q328" required>
                                                    <p>Value: <span id="demo328"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v329">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_329" style="width:100%;" value="<?php echo $annotation_329;?>" min="-1" max="1" step="0.01" class="slider" id="q329" required>
                                                    <p>Value: <span id="demo329"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v330">
                                                        <input type="range" name ="annotation_330" list="sliderticks" style="width:100%;" value="<?php echo $annotation_330;?>" min="1" max="7" step="1" class="slider" id="q330" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo330"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_111</h2></p>
                                                </p>
                                                                                  
                                                <input type="hidden" name="track_111_online" id="track_111">
                                                <iframe src="<?php echo $track_111;?>" id="track110" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v331">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_331" style="width:100%;" value="<?php echo $annotation_331;?>" min="-1" max="1" step="0.01" class="slider" id="q331" required>
                                                    <p>Value: <span id="demo331"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v332">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_332" style="width:100%;" value="<?php echo $annotation_332;?>" min="-1" max="1" step="0.01" class="slider" id="q332" required>
                                                    <p>Value: <span id="demo332"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v333">
                                                        <input type="range" name ="annotation_333" list="sliderticks" style="width:100%;" value="<?php echo $annotation_333;?>" min="1" max="7" step="1" class="slider" id="q333" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo333"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_112</h2></p>
                                                </p>
                                                                                          
                                                <input type="hidden" name="track_112_online" id="track_112">
                                                <iframe src="<?php echo $track_112;?>" id="track111" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v334">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_334" style="width:100%;" value="<?php echo $annotation_334;?>" min="-1" max="1" step="0.01" class="slider" id="q334" required>
                                                    <p>Value: <span id="demo334"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v335">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_335" style="width:100%;" value="<?php echo $annotation_335;?>" min="-1" max="1" step="0.01" class="slider" id="q335" required>
                                                    <p>Value: <span id="demo335"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v336">
                                                        <input type="range" name ="annotation_336" list="sliderticks" style="width:100%;" value="<?php echo $annotation_336;?>" min="1" max="7" step="1" class="slider" id="q336" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo336"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            

                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_113</h2></p>
                                                </p>
                                                                                      
                                                <input type="hidden" name="track_113_online" id="track_113">
                                                <iframe src="<?php echo $track_113;?>" id="track112" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v337">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_337" style="width:100%;" value="<?php echo $annotation_337;?>" min="-1" max="1" step="0.01" class="slider" id="q337" required>
                                                    <p>Value: <span id="demo337"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v338">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_338" style="width:100%;" value="<?php echo $annotation_338;?>" min="-1" max="1" step="0.01" class="slider" id="q338" required>
                                                    <p>Value: <span id="demo338"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>
                                                    <span class="v339">
                                                        <input type="range" name ="annotation_339" list="sliderticks" style="width:100%;" value="<?php echo $annotation_339;?>" min="1" max="7" step="1" class="slider" id="q339" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo339"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                            


                                                <div class="block_1 hline-bottom"></div>
                                                <br>
                                                <p align="Center">
                                                <h2 class=" page-section-heading text-center text-uppercase text-secondary mb-0 ">Task_114</h2></p>
                                                </p>
                                                   
                                                <input type="hidden" name="track_114_online" id="track_114">
                                                <iframe src="<?php echo $track_114;?>" id="track113" width="100%" height="150" frameBorder="0" preload="none" autoplay="false" autostart="false" type=”audio/mpeg” sandbox allow="autoplay 'none'">
                                                </iframe>

                                                <div class="slidecontainer">
                                                    <span class="v340">
                                                    <h align="Center">
                                                    <br><p>Q1.How do you feel the song (from calm to energetic)?</p>
                                                    <input type="range" name ="annotation_340" style="width:100%;" value="<?php echo $annotation_340;?>" min="-1" max="1" step="0.01" class="slider" id="q340" required>
                                                    <p>Value: <span id="demo340"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>

                                                <div class="slidecontainer">
                                                    <span class="v341">
                                                    <h align="Center">
                                                    <p>Q2.How do you perceive the song (from negative to positive)?</p> 
                                                    <input type="range" name ="annotation_341" style="width:100%;" value="<?php echo $annotation_341;?>" min="-1" max="1" step="0.01" class="slider" id="q341" required>
                                                    <p>Value: <span id="demo341"></span></p>
                                                    </span>
                                                    </h>
                                                </div>

                                                <div class="slidecontainer">
                                                    <h align="Center">
                                                    <p><br>Q3.How much do you like the song (from 1 to 7)?</p>

                                                    <span class="v342">
                                                        <input type="range" name ="annotation_342" list="sliderticks" style="width:100%;" value="<?php echo $annotation_342;?>" min="1" max="7" step="1" class="slider" id="q342" required>                                                    
                                                        <div class="sliderticks">
                                                            <P>1</P>
                                                            <p>2</p>
                                                            <p>3</p>
                                                            <p>4</p>
                                                            <p>5</p>
                                                            <p>6</p>
                                                            <p>7</p>
                                                        </div>
                                                        <p>Rating: <span id="demo342"></span></p>
                                                    </span>
                                                    </h>
                                                </div><br>
                                                
                                                <!-- When click the save button, all input values will store in the database through the PHP (insert_1-1.php) file. -->
                                                <div id="data_save">
                                                <button style="height:50px;width:80px" type="submit" value="Save" id="save">Save</button>
                                            </form>
                                            <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="swiper-pagination "></div>
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
        var swiper2 = new Swiper(".mySwiper2", {
            direction: "vertical",
            mousewheel: true,
            slidesPerView: 1,
            allowSlidePrev: true,
            freemode: true,
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


    <script>
    // The following code is to represent each value of the scale slider of annotation or Likert on the page
    var slider1 = document.getElementById("q1");
        var demo1 = document.getElementById("demo1");
        demo1.innerHTML = slider1.value;
        slider1.oninput = function() {
            vq1 = demo1.innerHTML = this.value;
        }
        var slider2 = document.getElementById("q2");
        var demo2 = document.getElementById("demo2");
        demo2.innerHTML = slider2.value;
        slider2.oninput = function() {
            vq2 = demo2.innerHTML = this.value;
        }
        var slider3 = document.getElementById("q3");
        var demo3 = document.getElementById("demo3");
        demo3.innerHTML = slider3.value;
        slider3.oninput = function() {
            vq3 = demo3.innerHTML = this.value;
        }
        var slider4 = document.getElementById("q4");
        var demo4 = document.getElementById("demo4");
        demo4.innerHTML = slider4.value;
        slider4.oninput = function() {
            vq4 = demo4.innerHTML = this.value;
        }
        var slider5 = document.getElementById("q5");
        var demo5 = document.getElementById("demo5");
        demo5.innerHTML = slider5.value;
        slider5.oninput = function() {
            vq5 = demo5.innerHTML = this.value;
        }
        var slider6 = document.getElementById("q6");
        var demo6 = document.getElementById("demo6");
        demo6.innerHTML = slider6.value;
        slider6.oninput = function() {
            vq6 = demo6.innerHTML = this.value;
        }
        var slider7 = document.getElementById("q7");
        var demo7 = document.getElementById("demo7");
        demo7.innerHTML = slider7.value;
        slider7.oninput = function() {
            vq7 = demo7.innerHTML = this.value;
        }
        var slider8 = document.getElementById("q8");
        var demo8 = document.getElementById("demo8");
        demo8.innerHTML = slider8.value;
        slider8.oninput = function() {
            vq8 = demo8.innerHTML = this.value;
        }
        var slider9 = document.getElementById("q9");
        var demo9 = document.getElementById("demo9");
        demo9.innerHTML = slider9.value;
        slider9.oninput = function() {
            vq9 = demo9.innerHTML = this.value;
        }
        var slider10 = document.getElementById("q10");
        var demo10 = document.getElementById("demo10");
        demo10.innerHTML = slider10.value;
        slider10.oninput = function() {
            vq10 = demo10.innerHTML = this.value;
        }
        var slider11 = document.getElementById("q11");
        var demo11 = document.getElementById("demo11");
        demo11.innerHTML = slider11.value;
        slider11.oninput = function() {
            vq11 = demo11.innerHTML = this.value;
        }
        var slider12 = document.getElementById("q12");
        var demo12 = document.getElementById("demo12");
        demo12.innerHTML = slider12.value;
        slider12.oninput = function() {
            vq12 = demo12.innerHTML = this.value;
        }
        var slider13 = document.getElementById("q13");
        var demo13 = document.getElementById("demo13");
        demo13.innerHTML = slider13.value;
        slider13.oninput = function() {
            vq13 = demo13.innerHTML = this.value;
        }
        var slider14 = document.getElementById("q14");
        var demo14 = document.getElementById("demo14");
        demo14.innerHTML = slider14.value;
        slider14.oninput = function() {
            vq14 = demo14.innerHTML = this.value;
        }
        var slider15 = document.getElementById("q15");
        var demo15 = document.getElementById("demo15");
        demo15.innerHTML = slider15.value;
        slider15.oninput = function() {
            vq15 = demo15.innerHTML = this.value;
        }
        var slider16 = document.getElementById("q16");
        var demo16 = document.getElementById("demo16");
        demo16.innerHTML = slider16.value;
        slider16.oninput = function() {
            vq16 = demo16.innerHTML = this.value;
        }
        var slider17 = document.getElementById("q17");
        var demo17 = document.getElementById("demo17");
        demo17.innerHTML = slider17.value;
        slider17.oninput = function() {
            vq17 = demo17.innerHTML = this.value;
        }
        var slider18 = document.getElementById("q18");
        var demo18 = document.getElementById("demo18");
        demo18.innerHTML = slider18.value;
        slider18.oninput = function() {
            vq18 = demo18.innerHTML = this.value;
        }
        var slider19 = document.getElementById("q19");
        var demo19 = document.getElementById("demo19");
        demo19.innerHTML = slider19.value;
        slider19.oninput = function() {
            vq19 = demo19.innerHTML = this.value;
        }
        var slider20 = document.getElementById("q20");
        var demo20 = document.getElementById("demo20");
        demo20.innerHTML = slider20.value;
        slider20.oninput = function() {
            vq20 = demo20.innerHTML = this.value;
        }
        var slider21 = document.getElementById("q21");
        var demo21 = document.getElementById("demo21");
        demo21.innerHTML = slider21.value;
        slider21.oninput = function() {
            vq21 = demo21.innerHTML = this.value;
        }
        var slider22 = document.getElementById("q22");
        var demo22 = document.getElementById("demo22");
        demo22.innerHTML = slider22.value;
        slider22.oninput = function() {
            vq22 = demo22.innerHTML = this.value;
        }
        var slider23 = document.getElementById("q23");
        var demo23 = document.getElementById("demo23");
        demo23.innerHTML = slider23.value;
        slider23.oninput = function() {
            vq23 = demo23.innerHTML = this.value;
        }
        var slider24 = document.getElementById("q24");
        var demo24 = document.getElementById("demo24");
        demo24.innerHTML = slider24.value;
        slider24.oninput = function() {
            vq24 = demo24.innerHTML = this.value;
        }
        var slider25 = document.getElementById("q25");
        var demo25 = document.getElementById("demo25");
        demo25.innerHTML = slider25.value;
        slider25.oninput = function() {
            vq25 = demo25.innerHTML = this.value;
        }
        var slider26 = document.getElementById("q26");
        var demo26 = document.getElementById("demo26");
        demo26.innerHTML = slider26.value;
        slider26.oninput = function() {
            vq26 = demo26.innerHTML = this.value;
        }
        var slider27 = document.getElementById("q27");
        var demo27 = document.getElementById("demo27");
        demo27.innerHTML = slider27.value;
        slider27.oninput = function() {
            vq27 = demo27.innerHTML = this.value;
        }
        var slider28 = document.getElementById("q28");
        var demo28 = document.getElementById("demo28");
        demo28.innerHTML = slider28.value;
        slider28.oninput = function() {
            vq28 = demo28.innerHTML = this.value;
        }
        var slider29 = document.getElementById("q29");
        var demo29 = document.getElementById("demo29");
        demo29.innerHTML = slider29.value;
        slider29.oninput = function() {
            vq29 = demo29.innerHTML = this.value;
        }
        var slider30 = document.getElementById("q30");
        var demo30 = document.getElementById("demo30");
        demo30.innerHTML = slider30.value;
        slider30.oninput = function() {
            vq30 = demo30.innerHTML = this.value;
        }

        var slider32 = document.getElementById("q32");
        var demo32 = document.getElementById("demo32");
        demo32.innerHTML = slider32.value;
        slider32.oninput = function() {
            vq32 = demo32.innerHTML = this.value;
        }
        var slider33 = document.getElementById("q33");
        var demo33 = document.getElementById("demo33");
        demo33.innerHTML = slider33.value;
        slider33.oninput = function() {
            vq33 = demo33.innerHTML = this.value;
        }
        var slider34 = document.getElementById("q34");
        var demo34 = document.getElementById("demo34");
        demo34.innerHTML = slider34.value;
        slider34.oninput = function() {
            vq34 = demo34.innerHTML = this.value;
        }
        var slider35 = document.getElementById("q35");
        var demo35 = document.getElementById("demo35");
        demo35.innerHTML = slider35.value;
        slider35.oninput = function() {
            vq35 = demo35.innerHTML = this.value;
        }
        var slider36 = document.getElementById("q36");
        var demo36 = document.getElementById("demo36");
        demo36.innerHTML = slider36.value;
        slider36.oninput = function() {
            vq36 = demo36.innerHTML = this.value;
        }
        var slider37 = document.getElementById("q37");
        var demo37 = document.getElementById("demo37");
        demo37.innerHTML = slider37.value;
        slider37.oninput = function() {
            vq37 = demo37.innerHTML = this.value;
        }
        var slider38 = document.getElementById("q38");
        var demo38 = document.getElementById("demo38");
        demo38.innerHTML = slider38.value;
        slider38.oninput = function() {
            vq38 = demo38.innerHTML = this.value;
        }
        var slider39 = document.getElementById("q39");
        var demo39 = document.getElementById("demo39");
        demo39.innerHTML = slider39.value;
        slider39.oninput = function() {
            vq39 = demo39.innerHTML = this.value;
        }
        var slider40 = document.getElementById("q40");
        var demo40 = document.getElementById("demo40");
        demo40.innerHTML = slider40.value;
        slider40.oninput = function() {
            vq40 = demo40.innerHTML = this.value;
        }
        var slider41 = document.getElementById("q41");
        var demo41 = document.getElementById("demo41");
        demo41.innerHTML = slider41.value;
        slider41.oninput = function() {
            vq41 = demo41.innerHTML = this.value;
        }
        var slider42 = document.getElementById("q42");
        var demo42 = document.getElementById("demo42");
        demo42.innerHTML = slider42.value;
        slider42.oninput = function() {
            vq42 = demo42.innerHTML = this.value;
        }
        var slider43 = document.getElementById("q43");
        var demo43 = document.getElementById("demo43");
        demo43.innerHTML = slider43.value;
        slider43.oninput = function() {
            vq43 = demo43.innerHTML = this.value;
        }
        var slider44 = document.getElementById("q44");
        var demo44 = document.getElementById("demo44");
        demo44.innerHTML = slider44.value;
        slider44.oninput = function() {
            vq44 = demo44.innerHTML = this.value;
        }
        var slider45 = document.getElementById("q45");
        var demo45 = document.getElementById("demo45");
        demo45.innerHTML = slider45.value;
        slider45.oninput = function() {
            vq45 = demo45.innerHTML = this.value;
        }
        var slider46 = document.getElementById("q46");
        var demo46 = document.getElementById("demo46");
        demo46.innerHTML = slider46.value;
        slider46.oninput = function() {
            vq46 = demo46.innerHTML = this.value;
        }
        var slider47 = document.getElementById("q47");
        var demo47 = document.getElementById("demo47");
        demo47.innerHTML = slider47.value;
        slider47.oninput = function() {
            vq47 = demo47.innerHTML = this.value;
        }
        var slider48 = document.getElementById("q48");
        var demo48 = document.getElementById("demo48");
        demo48.innerHTML = slider48.value;
        slider48.oninput = function() {
            vq48 = demo48.innerHTML = this.value;
        }
        var slider49 = document.getElementById("q49");
        var demo49 = document.getElementById("demo49");
        demo49.innerHTML = slider49.value;
        slider49.oninput = function() {
            vq49 = demo49.innerHTML = this.value;
        }
        var slider50 = document.getElementById("q50");
        var demo50 = document.getElementById("demo50");
        demo50.innerHTML = slider50.value;
        slider50.oninput = function() {
            vq50 = demo50.innerHTML = this.value;
        }
        var slider51 = document.getElementById("q51");
        var demo51 = document.getElementById("demo51");
        demo51.innerHTML = slider51.value;
        slider51.oninput = function() {
            vq51 = demo51.innerHTML = this.value;
        }
        var slider52 = document.getElementById("q52");
        var demo52 = document.getElementById("demo52");
        demo52.innerHTML = slider52.value;
        slider52.oninput = function() {
            vq52 = demo52.innerHTML = this.value;
        }
        var slider53 = document.getElementById("q53");
        var demo53 = document.getElementById("demo53");
        demo53.innerHTML = slider53.value;
        slider53.oninput = function() {
            vq53 = demo53.innerHTML = this.value;
        }
        var slider54 = document.getElementById("q54");
        var demo54 = document.getElementById("demo54");
        demo54.innerHTML = slider54.value;
        slider54.oninput = function() {
            vq54 = demo54.innerHTML = this.value;
        }
        var slider55 = document.getElementById("q55");
        var demo55 = document.getElementById("demo55");
        demo55.innerHTML = slider55.value;
        slider55.oninput = function() {
            vq55 = demo55.innerHTML = this.value;
        }
        var slider56 = document.getElementById("q56");
        var demo56 = document.getElementById("demo56");
        demo56.innerHTML = slider56.value;
        slider56.oninput = function() {
            vq56 = demo56.innerHTML = this.value;
        }
        var slider57 = document.getElementById("q57");
        var demo57 = document.getElementById("demo57");
        demo57.innerHTML = slider57.value;
        slider57.oninput = function() {
            vq57 = demo57.innerHTML = this.value;
        }
        var slider58 = document.getElementById("q58");
        var demo58 = document.getElementById("demo58");
        demo58.innerHTML = slider58.value;
        slider58.oninput = function() {
            vq58 = demo58.innerHTML = this.value;
        }
        var slider59 = document.getElementById("q59");
        var demo59 = document.getElementById("demo59");
        demo59.innerHTML = slider59.value;
        slider59.oninput = function() {
            vq59 = demo59.innerHTML = this.value;
        }
        var slider60 = document.getElementById("q60");
        var demo60 = document.getElementById("demo60");
        demo60.innerHTML = slider60.value;
        slider60.oninput = function() {
            vq60 = demo60.innerHTML = this.value;
        }
        var slider61 = document.getElementById("q61");
        var demo61 = document.getElementById("demo61");
        demo61.innerHTML = slider61.value;
        slider61.oninput = function() {
            vq61 = demo61.innerHTML = this.value;
        }
        var slider62 = document.getElementById("q62");
        var demo62 = document.getElementById("demo62");
        demo62.innerHTML = slider62.value;
        slider62.oninput = function() {
            vq62 = demo62.innerHTML = this.value;
        }
        var slider63 = document.getElementById("q63");
        var demo63 = document.getElementById("demo63");
        demo63.innerHTML = slider63.value;
        slider63.oninput = function() {
            vq63 = demo63.innerHTML = this.value;
        }
        var slider64 = document.getElementById("q64");
        var demo64 = document.getElementById("demo64");
        demo64.innerHTML = slider64.value;
        slider64.oninput = function() {
            vq64 = demo64.innerHTML = this.value;
        }
        var slider65 = document.getElementById("q65");
        var demo65 = document.getElementById("demo65");
        demo65.innerHTML = slider65.value;
        slider65.oninput = function() {
            vq65 = demo65.innerHTML = this.value;
        }
        var slider66 = document.getElementById("q66");
        var demo66 = document.getElementById("demo66");
        demo66.innerHTML = slider66.value;
        slider66.oninput = function() {
            vq66 = demo66.innerHTML = this.value;
        }
        var slider67 = document.getElementById("q67");
        var demo67 = document.getElementById("demo67");
        demo67.innerHTML = slider67.value;
        slider67.oninput = function() {
            vq67 = demo67.innerHTML = this.value;
        }
        var slider68 = document.getElementById("q68");
        var demo68 = document.getElementById("demo68");
        demo68.innerHTML = slider68.value;
        slider68.oninput = function() {
            vq68 = demo68.innerHTML = this.value;
        }
        var slider69 = document.getElementById("q69");
        var demo69 = document.getElementById("demo69");
        demo69.innerHTML = slider69.value;
        slider69.oninput = function() {
            vq69 = demo69.innerHTML = this.value;
        }
        var slider70 = document.getElementById("q70");
        var demo70 = document.getElementById("demo70");
        demo70.innerHTML = slider70.value;
        slider70.oninput = function() {
            vq70 = demo70.innerHTML = this.value;
        }
        var slider71 = document.getElementById("q71");
        var demo71 = document.getElementById("demo71");
        demo71.innerHTML = slider71.value;
        slider71.oninput = function() {
            vq71 = demo71.innerHTML = this.value;
        }
        var slider72 = document.getElementById("q72");
        var demo72 = document.getElementById("demo72");
        demo72.innerHTML = slider72.value;
        slider72.oninput = function() {
            vq72 = demo72.innerHTML = this.value;
        }
        var slider73 = document.getElementById("q73");
        var demo73 = document.getElementById("demo73");
        demo73.innerHTML = slider73.value;
        slider73.oninput = function() {
            vq73 = demo73.innerHTML = this.value;
        }
        var slider74 = document.getElementById("q74");
        var demo74 = document.getElementById("demo74");
        demo74.innerHTML = slider74.value;
        slider74.oninput = function() {
            vq74 = demo74.innerHTML = this.value;
        }
        var slider75 = document.getElementById("q75");
        var demo75 = document.getElementById("demo75");
        demo75.innerHTML = slider75.value;
        slider75.oninput = function() {
            vq75 = demo75.innerHTML = this.value;
        }
        var slider76 = document.getElementById("q76");
        var demo76 = document.getElementById("demo76");
        demo76.innerHTML = slider76.value;
        slider76.oninput = function() {
            vq76 = demo76.innerHTML = this.value;
        }
        var slider77 = document.getElementById("q77");
        var demo77 = document.getElementById("demo77");
        demo77.innerHTML = slider77.value;
        slider77.oninput = function() {
            vq77 = demo77.innerHTML = this.value;
        }
        var slider78 = document.getElementById("q78");
        var demo78 = document.getElementById("demo78");
        demo78.innerHTML = slider78.value;
        slider78.oninput = function() {
            vq78 = demo78.innerHTML = this.value;
        }
        var slider79 = document.getElementById("q79");
        var demo79 = document.getElementById("demo79");
        demo79.innerHTML = slider79.value;
        slider79.oninput = function() {
            vq79 = demo79.innerHTML = this.value;
        }
        var slider80 = document.getElementById("q80");
        var demo80 = document.getElementById("demo80");
        demo80.innerHTML = slider80.value;
        slider80.oninput = function() {
            vq80 = demo80.innerHTML = this.value;
        }
        var slider81 = document.getElementById("q81");
        var demo81 = document.getElementById("demo81");
        demo81.innerHTML = slider81.value;
        slider81.oninput = function() {
            vq81 = demo81.innerHTML = this.value;
        }
        var slider82 = document.getElementById("q82");
        var demo82 = document.getElementById("demo82");
        demo82.innerHTML = slider82.value;
        slider82.oninput = function() {
            vq82 = demo82.innerHTML = this.value;
        }
        var slider83 = document.getElementById("q83");
        var demo83 = document.getElementById("demo83");
        demo83.innerHTML = slider83.value;
        slider83.oninput = function() {
            vq83 = demo83.innerHTML = this.value;
        }
        var slider84 = document.getElementById("q84");
        var demo84 = document.getElementById("demo84");
        demo84.innerHTML = slider84.value;
        slider84.oninput = function() {
            vq84 = demo84.innerHTML = this.value;
        }
        var slider85 = document.getElementById("q85");
        var demo85 = document.getElementById("demo85");
        demo85.innerHTML = slider85.value;
        slider85.oninput = function() {
            vq85 = demo85.innerHTML = this.value;
        }
        var slider86 = document.getElementById("q86");
        var demo86 = document.getElementById("demo86");
        demo86.innerHTML = slider86.value;
        slider86.oninput = function() {
            vq86 = demo86.innerHTML = this.value;
        }
        var slider87 = document.getElementById("q87");
        var demo87 = document.getElementById("demo87");
        demo87.innerHTML = slider87.value;
        slider87.oninput = function() {
            vq87 = demo87.innerHTML = this.value;
        }
        var slider88 = document.getElementById("q88");
        var demo88 = document.getElementById("demo88");
        demo88.innerHTML = slider88.value;
        slider88.oninput = function() {
            vq88 = demo88.innerHTML = this.value;
        }
        var slider89 = document.getElementById("q89");
        var demo89 = document.getElementById("demo89");
        demo89.innerHTML = slider89.value;
        slider89.oninput = function() {
            vq89 = demo89.innerHTML = this.value;
        }
        var slider90 = document.getElementById("q90");
        var demo90 = document.getElementById("demo90");
        demo90.innerHTML = slider90.value;
        slider90.oninput = function() {
            vq90 = demo90.innerHTML = this.value;
        }
        var slider91 = document.getElementById("q91");
        var demo91 = document.getElementById("demo91");
        demo91.innerHTML = slider91.value;
        slider91.oninput = function() {
            vq91 = demo91.innerHTML = this.value;
        }
        var slider92 = document.getElementById("q92");
        var demo92 = document.getElementById("demo92");
        demo92.innerHTML = slider92.value;
        slider92.oninput = function() {
            vq92 = demo92.innerHTML = this.value;
        }
        var slider93 = document.getElementById("q93");
        var demo93 = document.getElementById("demo93");
        demo93.innerHTML = slider93.value;
        slider93.oninput = function() {
            vq93 = demo93.innerHTML = this.value;
        }
        var slider94 = document.getElementById("q94");
        var demo94 = document.getElementById("demo94");
        demo94.innerHTML = slider94.value;
        slider94.oninput = function() {
            vq94 = demo94.innerHTML = this.value;
        }
        var slider95 = document.getElementById("q95");
        var demo95 = document.getElementById("demo95");
        demo95.innerHTML = slider95.value;
        slider95.oninput = function() {
            vq95 = demo95.innerHTML = this.value;
        }
        var slider96 = document.getElementById("q96");
        var demo96 = document.getElementById("demo96");
        demo96.innerHTML = slider96.value;
        slider96.oninput = function() {
            vq96 = demo96.innerHTML = this.value;
        }
        var slider97 = document.getElementById("q97");
        var demo97 = document.getElementById("demo97");
        demo97.innerHTML = slider97.value;
        slider97.oninput = function() {
            vq97 = demo97.innerHTML = this.value;
        }
        var slider98 = document.getElementById("q98");
        var demo98 = document.getElementById("demo98");
        demo98.innerHTML = slider98.value;
        slider98.oninput = function() {
            vq98 = demo98.innerHTML = this.value;
        }
        var slider99 = document.getElementById("q99");
        var demo99 = document.getElementById("demo99");
        demo99.innerHTML = slider99.value;
        slider99.oninput = function() {
            vq99 = demo99.innerHTML = this.value;
        }
        var slider100 = document.getElementById("q100");
        var demo100 = document.getElementById("demo100");
        demo100.innerHTML = slider100.value;
        slider100.oninput = function() {
            vq100 = demo100.innerHTML = this.value;
        }
        var slider101 = document.getElementById("q101");
        var demo101 = document.getElementById("demo101");
        demo101.innerHTML = slider101.value;
        slider101.oninput = function() {
            vq101 = demo101.innerHTML = this.value;
        }
        var slider102 = document.getElementById("q102");
        var demo102 = document.getElementById("demo102");
        demo102.innerHTML = slider102.value;
        slider102.oninput = function() {
            vq102 = demo102.innerHTML = this.value;
        }
        var slider103 = document.getElementById("q103");
        var demo103 = document.getElementById("demo103");
        demo103.innerHTML = slider103.value;
        slider103.oninput = function() {
            vq103 = demo103.innerHTML = this.value;
        }
        var slider104 = document.getElementById("q104");
        var demo104 = document.getElementById("demo104");
        demo104.innerHTML = slider104.value;
        slider104.oninput = function() {
            vq104 = demo104.innerHTML = this.value;
        }
        var slider105 = document.getElementById("q105");
        var demo105 = document.getElementById("demo105");
        demo105.innerHTML = slider105.value;
        slider105.oninput = function() {
            vq105 = demo105.innerHTML = this.value;
        }
        var slider106 = document.getElementById("q106");
        var demo106 = document.getElementById("demo106");
        demo106.innerHTML = slider106.value;
        slider106.oninput = function() {
            vq106 = demo106.innerHTML = this.value;
        }
        var slider107 = document.getElementById("q107");
        var demo107 = document.getElementById("demo107");
        demo107.innerHTML = slider107.value;
        slider107.oninput = function() {
            vq107 = demo107.innerHTML = this.value;
        }
        var slider108 = document.getElementById("q108");
        var demo108 = document.getElementById("demo108");
        demo108.innerHTML = slider108.value;
        slider108.oninput = function() {
            vq108 = demo108.innerHTML = this.value;
        }
        var slider109 = document.getElementById("q109");
        var demo109 = document.getElementById("demo109");
        demo109.innerHTML = slider109.value;
        slider109.oninput = function() {
            vq109 = demo109.innerHTML = this.value;
        }
        var slider110 = document.getElementById("q110");
        var demo110 = document.getElementById("demo110");
        demo110.innerHTML = slider110.value;
        slider110.oninput = function() {
            vq110 = demo110.innerHTML = this.value;
        }
        var slider111 = document.getElementById("q111");
        var demo111 = document.getElementById("demo111");
        demo111.innerHTML = slider111.value;
        slider111.oninput = function() {
            vq111 = demo111.innerHTML = this.value;
        }
        var slider112 = document.getElementById("q112");
        var demo112 = document.getElementById("demo112");
        demo112.innerHTML = slider112.value;
        slider112.oninput = function() {
            vq112 = demo112.innerHTML = this.value;
        }
        var slider113 = document.getElementById("q113");
        var demo113 = document.getElementById("demo113");
        demo113.innerHTML = slider113.value;
        slider113.oninput = function() {
            vq113 = demo113.innerHTML = this.value;
        }
        var slider114 = document.getElementById("q114");
        var demo114 = document.getElementById("demo114");
        demo114.innerHTML = slider114.value;
        slider114.oninput = function() {
            vq114 = demo114.innerHTML = this.value;
        }
        var slider115 = document.getElementById("q115");
        var demo115 = document.getElementById("demo115");
        demo115.innerHTML = slider115.value;
        slider115.oninput = function() {
            vq115 = demo115.innerHTML = this.value;
        }
        var slider116 = document.getElementById("q116");
        var demo116 = document.getElementById("demo116");
        demo116.innerHTML = slider116.value;
        slider116.oninput = function() {
            vq116 = demo116.innerHTML = this.value;
        }
        var slider117 = document.getElementById("q117");
        var demo117 = document.getElementById("demo117");
        demo117.innerHTML = slider117.value;
        slider117.oninput = function() {
            vq117 = demo117.innerHTML = this.value;
        }
        var slider118 = document.getElementById("q118");
        var demo118 = document.getElementById("demo118");
        demo118.innerHTML = slider118.value;
        slider118.oninput = function() {
            vq118 = demo118.innerHTML = this.value;
        }
        var slider119 = document.getElementById("q119");
        var demo119 = document.getElementById("demo119");
        demo119.innerHTML = slider119.value;
        slider119.oninput = function() {
            vq119 = demo119.innerHTML = this.value;
        }
        var slider120 = document.getElementById("q120");
        var demo120 = document.getElementById("demo120");
        demo120.innerHTML = slider120.value;
        slider120.oninput = function() {
            vq120 = demo120.innerHTML = this.value;
        }
        var slider121 = document.getElementById("q121");
        var demo121 = document.getElementById("demo121");
        demo121.innerHTML = slider121.value;
        slider121.oninput = function() {
            vq121 = demo121.innerHTML = this.value;
        }
        var slider122 = document.getElementById("q122");
        var demo122 = document.getElementById("demo122");
        demo122.innerHTML = slider122.value;
        slider122.oninput = function() {
            vq122 = demo122.innerHTML = this.value;
        }
        var slider123 = document.getElementById("q123");
        var demo123 = document.getElementById("demo123");
        demo123.innerHTML = slider123.value;
        slider123.oninput = function() {
            vq123 = demo123.innerHTML = this.value;
        }
        var slider124 = document.getElementById("q124");
        var demo124 = document.getElementById("demo124");
        demo124.innerHTML = slider124.value;
        slider124.oninput = function() {
            vq124 = demo124.innerHTML = this.value;
        }
        var slider125 = document.getElementById("q125");
        var demo125 = document.getElementById("demo125");
        demo125.innerHTML = slider125.value;
        slider125.oninput = function() {
            vq125 = demo125.innerHTML = this.value;
        }
        var slider126 = document.getElementById("q126");
        var demo126 = document.getElementById("demo126");
        demo126.innerHTML = slider126.value;
        slider126.oninput = function() {
            vq126 = demo126.innerHTML = this.value;
        }
        var slider127 = document.getElementById("q127");
        var demo127 = document.getElementById("demo127");
        demo127.innerHTML = slider127.value;
        slider127.oninput = function() {
            vq127 = demo127.innerHTML = this.value;
        }
        var slider128 = document.getElementById("q128");
        var demo128 = document.getElementById("demo128");
        demo128.innerHTML = slider128.value;
        slider128.oninput = function() {
            vq128 = demo128.innerHTML = this.value;
        }
        var slider129 = document.getElementById("q129");
        var demo129 = document.getElementById("demo129");
        demo129.innerHTML = slider129.value;
        slider129.oninput = function() {
            vq129 = demo129.innerHTML = this.value;
        }
        var slider130 = document.getElementById("q130");
        var demo130 = document.getElementById("demo130");
        demo130.innerHTML = slider130.value;
        slider130.oninput = function() {
            vq130 = demo130.innerHTML = this.value;
        }
        var slider131 = document.getElementById("q131");
        var demo131 = document.getElementById("demo131");
        demo131.innerHTML = slider131.value;
        slider131.oninput = function() {
            vq131 = demo131.innerHTML = this.value;
        }
        var slider132 = document.getElementById("q132");
        var demo132 = document.getElementById("demo132");
        demo132.innerHTML = slider132.value;
        slider132.oninput = function() {
            vq132 = demo132.innerHTML = this.value;
        }
        var slider133 = document.getElementById("q133");
        var demo133 = document.getElementById("demo133");
        demo133.innerHTML = slider133.value;
        slider133.oninput = function() {
            vq133 = demo133.innerHTML = this.value;
        }
        var slider134 = document.getElementById("q134");
        var demo134 = document.getElementById("demo134");
        demo134.innerHTML = slider134.value;
        slider134.oninput = function() {
            vq134 = demo134.innerHTML = this.value;
        }
        var slider135 = document.getElementById("q135");
        var demo135 = document.getElementById("demo135");
        demo135.innerHTML = slider135.value;
        slider135.oninput = function() {
            vq135 = demo135.innerHTML = this.value;
        }
        var slider136 = document.getElementById("q136");
        var demo136 = document.getElementById("demo136");
        demo136.innerHTML = slider136.value;
        slider136.oninput = function() {
            vq136 = demo136.innerHTML = this.value;
        }
        var slider137 = document.getElementById("q137");
        var demo137 = document.getElementById("demo137");
        demo137.innerHTML = slider137.value;
        slider137.oninput = function() {
            vq137 = demo137.innerHTML = this.value;
        }
        var slider138 = document.getElementById("q138");
        var demo138 = document.getElementById("demo138");
        demo138.innerHTML = slider138.value;
        slider138.oninput = function() {
            vq138 = demo138.innerHTML = this.value;
        }
        var slider139 = document.getElementById("q139");
        var demo139 = document.getElementById("demo139");
        demo139.innerHTML = slider139.value;
        slider139.oninput = function() {
            vq139 = demo139.innerHTML = this.value;
        }
        var slider140 = document.getElementById("q140");
        var demo140 = document.getElementById("demo140");
        demo140.innerHTML = slider140.value;
        slider140.oninput = function() {
            vq140 = demo140.innerHTML = this.value;
        }
        var slider141 = document.getElementById("q141");
        var demo141 = document.getElementById("demo141");
        demo141.innerHTML = slider141.value;
        slider141.oninput = function() {
            vq141 = demo141.innerHTML = this.value;
        }
        var slider142 = document.getElementById("q142");
        var demo142 = document.getElementById("demo142");
        demo142.innerHTML = slider142.value;
        slider142.oninput = function() {
            vq142 = demo142.innerHTML = this.value;
        }
        var slider143 = document.getElementById("q143");
        var demo143 = document.getElementById("demo143");
        demo143.innerHTML = slider143.value;
        slider143.oninput = function() {
            vq143 = demo143.innerHTML = this.value;
        }
        var slider144 = document.getElementById("q144");
        var demo144 = document.getElementById("demo144");
        demo144.innerHTML = slider144.value;
        slider144.oninput = function() {
            vq144 = demo144.innerHTML = this.value;
        }
        var slider145 = document.getElementById("q145");
        var demo145 = document.getElementById("demo145");
        demo145.innerHTML = slider145.value;
        slider145.oninput = function() {
            vq145 = demo145.innerHTML = this.value;
        }
        var slider146 = document.getElementById("q146");
        var demo146 = document.getElementById("demo146");
        demo146.innerHTML = slider146.value;
        slider146.oninput = function() {
            vq146 = demo146.innerHTML = this.value;
        }
        var slider147 = document.getElementById("q147");
        var demo147 = document.getElementById("demo147");
        demo147.innerHTML = slider147.value;
        slider147.oninput = function() {
            vq147 = demo147.innerHTML = this.value;
        }
        var slider148 = document.getElementById("q148");
        var demo148 = document.getElementById("demo148");
        demo148.innerHTML = slider148.value;
        slider148.oninput = function() {
            vq148 = demo148.innerHTML = this.value;
        }
        var slider149 = document.getElementById("q149");
        var demo149 = document.getElementById("demo149");
        demo149.innerHTML = slider149.value;
        slider149.oninput = function() {
            vq149 = demo149.innerHTML = this.value;
        }
        var slider150 = document.getElementById("q150");
        var demo150 = document.getElementById("demo150");
        demo150.innerHTML = slider150.value;
        slider150.oninput = function() {
            vq150 = demo150.innerHTML = this.value;
        }
        var slider151 = document.getElementById("q151");
        var demo151 = document.getElementById("demo151");
        demo151.innerHTML = slider151.value;
        slider151.oninput = function() {
            vq151 = demo151.innerHTML = this.value;
        }
        var slider152 = document.getElementById("q152");
        var demo152 = document.getElementById("demo152");
        demo152.innerHTML = slider152.value;
        slider152.oninput = function() {
            vq152 = demo152.innerHTML = this.value;
        }
        var slider153 = document.getElementById("q153");
        var demo153 = document.getElementById("demo153");
        demo153.innerHTML = slider153.value;
        slider153.oninput = function() {
            vq153 = demo153.innerHTML = this.value;
        }
        var slider154 = document.getElementById("q154");
        var demo154 = document.getElementById("demo154");
        demo154.innerHTML = slider154.value;
        slider154.oninput = function() {
            vq154 = demo154.innerHTML = this.value;
        }
        var slider155 = document.getElementById("q155");
        var demo155 = document.getElementById("demo155");
        demo155.innerHTML = slider155.value;
        slider155.oninput = function() {
            vq155 = demo155.innerHTML = this.value;
        }
        var slider156 = document.getElementById("q156");
        var demo156 = document.getElementById("demo156");
        demo156.innerHTML = slider156.value;
        slider156.oninput = function() {
            vq156 = demo156.innerHTML = this.value;
        }
        var slider157 = document.getElementById("q157");
        var demo157 = document.getElementById("demo157");
        demo157.innerHTML = slider157.value;
        slider157.oninput = function() {
            vq157 = demo157.innerHTML = this.value;
        }
        var slider158 = document.getElementById("q158");
        var demo158 = document.getElementById("demo158");
        demo158.innerHTML = slider158.value;
        slider158.oninput = function() {
            vq158 = demo158.innerHTML = this.value;
        }
        var slider159 = document.getElementById("q159");
        var demo159 = document.getElementById("demo159");
        demo159.innerHTML = slider159.value;
        slider159.oninput = function() {
            vq159 = demo159.innerHTML = this.value;
        }
        var slider160 = document.getElementById("q160");
        var demo160 = document.getElementById("demo160");
        demo160.innerHTML = slider160.value;
        slider160.oninput = function() {
            vq160 = demo160.innerHTML = this.value;
        }
        var slider161 = document.getElementById("q161");
        var demo161 = document.getElementById("demo161");
        demo161.innerHTML = slider161.value;
        slider161.oninput = function() {
            vq161 = demo161.innerHTML = this.value;
        }
        var slider162 = document.getElementById("q162");
        var demo162 = document.getElementById("demo162");
        demo162.innerHTML = slider162.value;
        slider162.oninput = function() {
            vq162 = demo162.innerHTML = this.value;
        }
        var slider163 = document.getElementById("q163");
        var demo163 = document.getElementById("demo163");
        demo163.innerHTML = slider163.value;
        slider163.oninput = function() {
            vq163 = demo163.innerHTML = this.value;
        }
        var slider164 = document.getElementById("q164");
        var demo164 = document.getElementById("demo164");
        demo164.innerHTML = slider164.value;
        slider164.oninput = function() {
            vq164 = demo164.innerHTML = this.value;
        }
        var slider165 = document.getElementById("q165");
        var demo165 = document.getElementById("demo165");
        demo165.innerHTML = slider165.value;
        slider165.oninput = function() {
            vq165 = demo165.innerHTML = this.value;
        }
        var slider166 = document.getElementById("q166");
        var demo166 = document.getElementById("demo166");
        demo166.innerHTML = slider166.value;
        slider166.oninput = function() {
            vq166 = demo166.innerHTML = this.value;
        }
        var slider167 = document.getElementById("q167");
        var demo167 = document.getElementById("demo167");
        demo167.innerHTML = slider167.value;
        slider167.oninput = function() {
            vq167 = demo167.innerHTML = this.value;
        }
        var slider168 = document.getElementById("q168");
        var demo168 = document.getElementById("demo168");
        demo168.innerHTML = slider168.value;
        slider168.oninput = function() {
            vq168 = demo168.innerHTML = this.value;
        }
        var slider169 = document.getElementById("q169");
        var demo169 = document.getElementById("demo169");
        demo169.innerHTML = slider169.value;
        slider169.oninput = function() {
            vq169 = demo169.innerHTML = this.value;
        }
        var slider170 = document.getElementById("q170");
        var demo170 = document.getElementById("demo170");
        demo170.innerHTML = slider170.value;
        slider170.oninput = function() {
            vq170 = demo170.innerHTML = this.value;
        }
        var slider171 = document.getElementById("q171");
        var demo171 = document.getElementById("demo171");
        demo171.innerHTML = slider171.value;
        slider171.oninput = function() {
            vq171 = demo171.innerHTML = this.value;
        }
        var slider172 = document.getElementById("q172");
        var demo172 = document.getElementById("demo172");
        demo172.innerHTML = slider172.value;
        slider172.oninput = function() {
            vq172 = demo172.innerHTML = this.value;
        }
        var slider173 = document.getElementById("q173");
        var demo173 = document.getElementById("demo173");
        demo173.innerHTML = slider173.value;
        slider173.oninput = function() {
            vq173 = demo173.innerHTML = this.value;
        }
        var slider174 = document.getElementById("q174");
        var demo174 = document.getElementById("demo174");
        demo174.innerHTML = slider174.value;
        slider174.oninput = function() {
            vq174 = demo174.innerHTML = this.value;
        }
        var slider175 = document.getElementById("q175");
        var demo175 = document.getElementById("demo175");
        demo175.innerHTML = slider175.value;
        slider175.oninput = function() {
            vq175 = demo175.innerHTML = this.value;
        }
        var slider176 = document.getElementById("q176");
        var demo176 = document.getElementById("demo176");
        demo176.innerHTML = slider176.value;
        slider176.oninput = function() {
            vq176 = demo176.innerHTML = this.value;
        }
        var slider177 = document.getElementById("q177");
        var demo177 = document.getElementById("demo177");
        demo177.innerHTML = slider177.value;
        slider177.oninput = function() {
            vq177 = demo177.innerHTML = this.value;
        }
        var slider178 = document.getElementById("q178");
        var demo178 = document.getElementById("demo178");
        demo178.innerHTML = slider178.value;
        slider178.oninput = function() {
            vq178 = demo178.innerHTML = this.value;
        }
        var slider179 = document.getElementById("q179");
        var demo179 = document.getElementById("demo179");
        demo179.innerHTML = slider179.value;
        slider179.oninput = function() {
            vq179 = demo179.innerHTML = this.value;
        }
        var slider180 = document.getElementById("q180");
        var demo180 = document.getElementById("demo180");
        demo180.innerHTML = slider180.value;
        slider180.oninput = function() {
            vq180 = demo180.innerHTML = this.value;
        }
        var slider181 = document.getElementById("q181");
        var demo181 = document.getElementById("demo181");
        demo181.innerHTML = slider181.value;
        slider181.oninput = function() {
            vq181 = demo181.innerHTML = this.value;
        }
        var slider182 = document.getElementById("q182");
        var demo182 = document.getElementById("demo182");
        demo182.innerHTML = slider182.value;
        slider182.oninput = function() {
            vq182 = demo182.innerHTML = this.value;
        }
        var slider183 = document.getElementById("q183");
        var demo183 = document.getElementById("demo183");
        demo183.innerHTML = slider183.value;
        slider183.oninput = function() {
            vq183 = demo183.innerHTML = this.value;
        }
        var slider184 = document.getElementById("q184");
        var demo184 = document.getElementById("demo184");
        demo184.innerHTML = slider184.value;
        slider184.oninput = function() {
            vq184 = demo184.innerHTML = this.value;
        }
        var slider185 = document.getElementById("q185");
        var demo185 = document.getElementById("demo185");
        demo185.innerHTML = slider185.value;
        slider185.oninput = function() {
            vq185 = demo185.innerHTML = this.value;
        }
        var slider186 = document.getElementById("q186");
        var demo186 = document.getElementById("demo186");
        demo186.innerHTML = slider186.value;
        slider186.oninput = function() {
            vq186 = demo186.innerHTML = this.value;
        }
        var slider187 = document.getElementById("q187");
        var demo187 = document.getElementById("demo187");
        demo187.innerHTML = slider187.value;
        slider187.oninput = function() {
            vq187 = demo187.innerHTML = this.value;
        }
        var slider188 = document.getElementById("q188");
        var demo188 = document.getElementById("demo188");
        demo188.innerHTML = slider188.value;
        slider188.oninput = function() {
            vq188 = demo188.innerHTML = this.value;
        }
        var slider189 = document.getElementById("q189");
        var demo189 = document.getElementById("demo189");
        demo189.innerHTML = slider189.value;
        slider189.oninput = function() {
            vq189 = demo189.innerHTML = this.value;
        }
        var slider190 = document.getElementById("q190");
        var demo190 = document.getElementById("demo190");
        demo190.innerHTML = slider190.value;
        slider190.oninput = function() {
            vq190 = demo190.innerHTML = this.value;
        }
        var slider191 = document.getElementById("q191");
        var demo191 = document.getElementById("demo191");
        demo191.innerHTML = slider191.value;
        slider191.oninput = function() {
            vq191 = demo191.innerHTML = this.value;
        }
        var slider192 = document.getElementById("q192");
        var demo192 = document.getElementById("demo192");
        demo192.innerHTML = slider192.value;
        slider192.oninput = function() {
            vq192 = demo192.innerHTML = this.value;
        }
        var slider193 = document.getElementById("q193");
        var demo193 = document.getElementById("demo193");
        demo193.innerHTML = slider193.value;
        slider193.oninput = function() {
            vq193 = demo193.innerHTML = this.value;
        }
        var slider194 = document.getElementById("q194");
        var demo194 = document.getElementById("demo194");
        demo194.innerHTML = slider194.value;
        slider194.oninput = function() {
            vq194 = demo194.innerHTML = this.value;
        }
        var slider195 = document.getElementById("q195");
        var demo195 = document.getElementById("demo195");
        demo195.innerHTML = slider195.value;
        slider195.oninput = function() {
            vq195 = demo195.innerHTML = this.value;
        }
        var slider196 = document.getElementById("q196");
        var demo196 = document.getElementById("demo196");
        demo196.innerHTML = slider196.value;
        slider196.oninput = function() {
            vq196 = demo196.innerHTML = this.value;
        }
        var slider197 = document.getElementById("q197");
        var demo197 = document.getElementById("demo197");
        demo197.innerHTML = slider197.value;
        slider197.oninput = function() {
            vq197 = demo197.innerHTML = this.value;
        }
        var slider198 = document.getElementById("q198");
        var demo198 = document.getElementById("demo198");
        demo198.innerHTML = slider198.value;
        slider198.oninput = function() {
            vq198 = demo198.innerHTML = this.value;
        }
        var slider199 = document.getElementById("q199");
        var demo199 = document.getElementById("demo199");
        demo199.innerHTML = slider199.value;
        slider199.oninput = function() {
            vq199 = demo199.innerHTML = this.value;
        }
        var slider200 = document.getElementById("q200");
        var demo200 = document.getElementById("demo200");
        demo200.innerHTML = slider200.value;
        slider200.oninput = function() {
            vq200 = demo200.innerHTML = this.value;
        }
        var slider201 = document.getElementById("q201");
        var demo201 = document.getElementById("demo201");
        demo201.innerHTML = slider201.value;
        slider201.oninput = function() {
            vq201 = demo201.innerHTML = this.value;
        }
        var slider202 = document.getElementById("q202");
        var demo202 = document.getElementById("demo202");
        demo202.innerHTML = slider202.value;
        slider202.oninput = function() {
            vq202 = demo202.innerHTML = this.value;
        }
        var slider203 = document.getElementById("q203");
        var demo203 = document.getElementById("demo203");
        demo203.innerHTML = slider203.value;
        slider203.oninput = function() {
            vq203 = demo203.innerHTML = this.value;
        }
        var slider204 = document.getElementById("q204");
        var demo204 = document.getElementById("demo204");
        demo204.innerHTML = slider204.value;
        slider204.oninput = function() {
            vq204 = demo204.innerHTML = this.value;
        }
        var slider205 = document.getElementById("q205");
        var demo205 = document.getElementById("demo205");
        demo205.innerHTML = slider205.value;
        slider205.oninput = function() {
            vq205 = demo205.innerHTML = this.value;
        }
        var slider206 = document.getElementById("q206");
        var demo206 = document.getElementById("demo206");
        demo206.innerHTML = slider206.value;
        slider206.oninput = function() {
            vq206 = demo206.innerHTML = this.value;
        }
        var slider207 = document.getElementById("q207");
        var demo207 = document.getElementById("demo207");
        demo207.innerHTML = slider207.value;
        slider207.oninput = function() {
            vq207 = demo207.innerHTML = this.value;
        }
        var slider208 = document.getElementById("q208");
        var demo208 = document.getElementById("demo208");
        demo208.innerHTML = slider208.value;
        slider208.oninput = function() {
            vq208 = demo208.innerHTML = this.value;
        }
        var slider209 = document.getElementById("q209");
        var demo209 = document.getElementById("demo209");
        demo209.innerHTML = slider209.value;
        slider209.oninput = function() {
            vq209 = demo209.innerHTML = this.value;
        }
        var slider210 = document.getElementById("q210");
        var demo210 = document.getElementById("demo210");
        demo210.innerHTML = slider210.value;
        slider210.oninput = function() {
            vq210 = demo210.innerHTML = this.value;
        }
        var slider211 = document.getElementById("q211");
        var demo211 = document.getElementById("demo211");
        demo211.innerHTML = slider211.value;
        slider211.oninput = function() {
            vq211 = demo211.innerHTML = this.value;
        }
        var slider212 = document.getElementById("q212");
        var demo212 = document.getElementById("demo212");
        demo212.innerHTML = slider212.value;
        slider212.oninput = function() {
            vq212 = demo212.innerHTML = this.value;
        }
        var slider213 = document.getElementById("q213");
        var demo213 = document.getElementById("demo213");
        demo213.innerHTML = slider213.value;
        slider213.oninput = function() {
            vq213 = demo213.innerHTML = this.value;
        }
        var slider214 = document.getElementById("q214");
        var demo214 = document.getElementById("demo214");
        demo214.innerHTML = slider214.value;
        slider214.oninput = function() {
            vq214 = demo214.innerHTML = this.value;
        }
        var slider215 = document.getElementById("q215");
        var demo215 = document.getElementById("demo215");
        demo215.innerHTML = slider215.value;
        slider215.oninput = function() {
            vq215 = demo215.innerHTML = this.value;
        }
        var slider216 = document.getElementById("q216");
        var demo216 = document.getElementById("demo216");
        demo216.innerHTML = slider216.value;
        slider216.oninput = function() {
            vq216 = demo216.innerHTML = this.value;
        }
        var slider217 = document.getElementById("q217");
        var demo217 = document.getElementById("demo217");
        demo217.innerHTML = slider217.value;
        slider217.oninput = function() {
            vq217 = demo217.innerHTML = this.value;
        }
        var slider218 = document.getElementById("q218");
        var demo218 = document.getElementById("demo218");
        demo218.innerHTML = slider218.value;
        slider218.oninput = function() {
            vq218 = demo218.innerHTML = this.value;
        }
        var slider219 = document.getElementById("q219");
        var demo219 = document.getElementById("demo219");
        demo219.innerHTML = slider219.value;
        slider219.oninput = function() {
            vq219 = demo219.innerHTML = this.value;
        }
        var slider220 = document.getElementById("q220");
        var demo220 = document.getElementById("demo220");
        demo220.innerHTML = slider220.value;
        slider220.oninput = function() {
            vq220 = demo220.innerHTML = this.value;
        }
        var slider221 = document.getElementById("q221");
        var demo221 = document.getElementById("demo221");
        demo221.innerHTML = slider221.value;
        slider221.oninput = function() {
            vq221 = demo221.innerHTML = this.value;
        }
        var slider222 = document.getElementById("q222");
        var demo222 = document.getElementById("demo222");
        demo222.innerHTML = slider222.value;
        slider222.oninput = function() {
            vq222 = demo222.innerHTML = this.value;
        }
        var slider223 = document.getElementById("q223");
        var demo223 = document.getElementById("demo223");
        demo223.innerHTML = slider223.value;
        slider223.oninput = function() {
            vq223 = demo223.innerHTML = this.value;
        }
        var slider224 = document.getElementById("q224");
        var demo224 = document.getElementById("demo224");
        demo224.innerHTML = slider224.value;
        slider224.oninput = function() {
            vq224 = demo224.innerHTML = this.value;
        }
        var slider225 = document.getElementById("q225");
        var demo225 = document.getElementById("demo225");
        demo225.innerHTML = slider225.value;
        slider225.oninput = function() {
            vq225 = demo225.innerHTML = this.value;
        }
        var slider226 = document.getElementById("q226");
        var demo226 = document.getElementById("demo226");
        demo226.innerHTML = slider226.value;
        slider226.oninput = function() {
            vq226 = demo226.innerHTML = this.value;
        }
        var slider227 = document.getElementById("q227");
        var demo227 = document.getElementById("demo227");
        demo227.innerHTML = slider227.value;
        slider227.oninput = function() {
            vq227 = demo227.innerHTML = this.value;
        }
        var slider228 = document.getElementById("q228");
        var demo228 = document.getElementById("demo228");
        demo228.innerHTML = slider228.value;
        slider228.oninput = function() {
            vq228 = demo228.innerHTML = this.value;
        }
        var slider229 = document.getElementById("q229");
        var demo229 = document.getElementById("demo229");
        demo229.innerHTML = slider229.value;
        slider229.oninput = function() {
            vq229 = demo229.innerHTML = this.value;
        }
        var slider230 = document.getElementById("q230");
        var demo230 = document.getElementById("demo230");
        demo230.innerHTML = slider230.value;
        slider230.oninput = function() {
            vq230 = demo230.innerHTML = this.value;
        }
        var slider231 = document.getElementById("q231");
        var demo231 = document.getElementById("demo231");
        demo231.innerHTML = slider231.value;
        slider231.oninput = function() {
            vq231 = demo231.innerHTML = this.value;
        }
        var slider232 = document.getElementById("q232");
        var demo232 = document.getElementById("demo232");
        demo232.innerHTML = slider232.value;
        slider232.oninput = function() {
            vq232 = demo232.innerHTML = this.value;
        }
        var slider233 = document.getElementById("q233");
        var demo233 = document.getElementById("demo233");
        demo233.innerHTML = slider233.value;
        slider233.oninput = function() {
            vq233 = demo233.innerHTML = this.value;
        }
        var slider234 = document.getElementById("q234");
        var demo234 = document.getElementById("demo234");
        demo234.innerHTML = slider234.value;
        slider234.oninput = function() {
            vq234 = demo234.innerHTML = this.value;
        }
        var slider235 = document.getElementById("q235");
        var demo235 = document.getElementById("demo235");
        demo235.innerHTML = slider235.value;
        slider235.oninput = function() {
            vq235 = demo235.innerHTML = this.value;
        }
        var slider236 = document.getElementById("q236");
        var demo236 = document.getElementById("demo236");
        demo236.innerHTML = slider236.value;
        slider236.oninput = function() {
            vq236 = demo236.innerHTML = this.value;
        }
        var slider237 = document.getElementById("q237");
        var demo237 = document.getElementById("demo237");
        demo237.innerHTML = slider237.value;
        slider237.oninput = function() {
            vq237 = demo237.innerHTML = this.value;
        }
        var slider238 = document.getElementById("q238");
        var demo238 = document.getElementById("demo238");
        demo238.innerHTML = slider238.value;
        slider238.oninput = function() {
            vq238 = demo238.innerHTML = this.value;
        }
        var slider239 = document.getElementById("q239");
        var demo239 = document.getElementById("demo239");
        demo239.innerHTML = slider239.value;
        slider239.oninput = function() {
            vq239 = demo239.innerHTML = this.value;
        }
        var slider240 = document.getElementById("q240");
        var demo240 = document.getElementById("demo240");
        demo240.innerHTML = slider240.value;
        slider240.oninput = function() {
            vq240 = demo240.innerHTML = this.value;
        }
        var slider241 = document.getElementById("q241");
        var demo241 = document.getElementById("demo241");
        demo241.innerHTML = slider241.value;
        slider241.oninput = function() {
            vq241 = demo241.innerHTML = this.value;
        }
        var slider242 = document.getElementById("q242");
        var demo242 = document.getElementById("demo242");
        demo242.innerHTML = slider242.value;
        slider242.oninput = function() {
            vq242 = demo242.innerHTML = this.value;
        }
        var slider243 = document.getElementById("q243");
        var demo243 = document.getElementById("demo243");
        demo243.innerHTML = slider243.value;
        slider243.oninput = function() {
            vq243 = demo243.innerHTML = this.value;
        }
        var slider244 = document.getElementById("q244");
        var demo244 = document.getElementById("demo244");
        demo244.innerHTML = slider244.value;
        slider244.oninput = function() {
            vq244 = demo244.innerHTML = this.value;
        }
        var slider245 = document.getElementById("q245");
        var demo245 = document.getElementById("demo245");
        demo245.innerHTML = slider245.value;
        slider245.oninput = function() {
            vq245 = demo245.innerHTML = this.value;
        }
        var slider246 = document.getElementById("q246");
        var demo246 = document.getElementById("demo246");
        demo246.innerHTML = slider246.value;
        slider246.oninput = function() {
            vq246 = demo246.innerHTML = this.value;
        }
        var slider247 = document.getElementById("q247");
        var demo247 = document.getElementById("demo247");
        demo247.innerHTML = slider247.value;
        slider247.oninput = function() {
            vq247 = demo247.innerHTML = this.value;
        }
        var slider248 = document.getElementById("q248");
        var demo248 = document.getElementById("demo248");
        demo248.innerHTML = slider248.value;
        slider248.oninput = function() {
            vq248 = demo248.innerHTML = this.value;
        }
        var slider249 = document.getElementById("q249");
        var demo249 = document.getElementById("demo249");
        demo249.innerHTML = slider249.value;
        slider249.oninput = function() {
            vq249 = demo249.innerHTML = this.value;
        }
        var slider250 = document.getElementById("q250");
        var demo250 = document.getElementById("demo250");
        demo250.innerHTML = slider250.value;
        slider250.oninput = function() {
            vq250 = demo250.innerHTML = this.value;
        }
        var slider251 = document.getElementById("q251");
        var demo251 = document.getElementById("demo251");
        demo251.innerHTML = slider251.value;
        slider251.oninput = function() {
            vq251 = demo251.innerHTML = this.value;
        }
        var slider252 = document.getElementById("q252");
        var demo252 = document.getElementById("demo252");
        demo252.innerHTML = slider252.value;
        slider252.oninput = function() {
            vq252 = demo252.innerHTML = this.value;
        }
        var slider253 = document.getElementById("q253");
        var demo253 = document.getElementById("demo253");
        demo253.innerHTML = slider253.value;
        slider253.oninput = function() {
            vq253 = demo253.innerHTML = this.value;
        }
        var slider254 = document.getElementById("q254");
        var demo254 = document.getElementById("demo254");
        demo254.innerHTML = slider254.value;
        slider254.oninput = function() {
            vq254 = demo254.innerHTML = this.value;
        }
        var slider255 = document.getElementById("q255");
        var demo255 = document.getElementById("demo255");
        demo255.innerHTML = slider255.value;
        slider255.oninput = function() {
            vq255 = demo255.innerHTML = this.value;
        }
        var slider256 = document.getElementById("q256");
        var demo256 = document.getElementById("demo256");
        demo256.innerHTML = slider256.value;
        slider256.oninput = function() {
            vq256 = demo256.innerHTML = this.value;
        }
        var slider257 = document.getElementById("q257");
        var demo257 = document.getElementById("demo257");
        demo257.innerHTML = slider257.value;
        slider257.oninput = function() {
            vq257 = demo257.innerHTML = this.value;
        }
        var slider258 = document.getElementById("q258");
        var demo258 = document.getElementById("demo258");
        demo258.innerHTML = slider258.value;
        slider258.oninput = function() {
            vq258 = demo258.innerHTML = this.value;
        }
        var slider259 = document.getElementById("q259");
        var demo259 = document.getElementById("demo259");
        demo259.innerHTML = slider259.value;
        slider259.oninput = function() {
            vq259 = demo259.innerHTML = this.value;
        }
        var slider260 = document.getElementById("q260");
        var demo260 = document.getElementById("demo260");
        demo260.innerHTML = slider260.value;
        slider260.oninput = function() {
            vq260 = demo260.innerHTML = this.value;
        }
        var slider261 = document.getElementById("q261");
        var demo261 = document.getElementById("demo261");
        demo261.innerHTML = slider261.value;
        slider261.oninput = function() {
            vq261 = demo261.innerHTML = this.value;
        }
        var slider262 = document.getElementById("q262");
        var demo262 = document.getElementById("demo262");
        demo262.innerHTML = slider262.value;
        slider262.oninput = function() {
            vq262 = demo262.innerHTML = this.value;
        }
        var slider263 = document.getElementById("q263");
        var demo263 = document.getElementById("demo263");
        demo263.innerHTML = slider263.value;
        slider263.oninput = function() {
            vq263 = demo263.innerHTML = this.value;
        }
        var slider264 = document.getElementById("q264");
        var demo264 = document.getElementById("demo264");
        demo264.innerHTML = slider264.value;
        slider264.oninput = function() {
            vq264 = demo264.innerHTML = this.value;
        }
        var slider265 = document.getElementById("q265");
        var demo265 = document.getElementById("demo265");
        demo265.innerHTML = slider265.value;
        slider265.oninput = function() {
            vq265 = demo265.innerHTML = this.value;
        }
        var slider266 = document.getElementById("q266");
        var demo266 = document.getElementById("demo266");
        demo266.innerHTML = slider266.value;
        slider266.oninput = function() {
            vq266 = demo266.innerHTML = this.value;
        }
        var slider267 = document.getElementById("q267");
        var demo267 = document.getElementById("demo267");
        demo267.innerHTML = slider267.value;
        slider267.oninput = function() {
            vq267 = demo267.innerHTML = this.value;
        }
        var slider268 = document.getElementById("q268");
        var demo268 = document.getElementById("demo268");
        demo268.innerHTML = slider268.value;
        slider268.oninput = function() {
            vq268 = demo268.innerHTML = this.value;
        }
        var slider269 = document.getElementById("q269");
        var demo269 = document.getElementById("demo269");
        demo269.innerHTML = slider269.value;
        slider269.oninput = function() {
            vq269 = demo269.innerHTML = this.value;
        }
        var slider270 = document.getElementById("q270");
        var demo270 = document.getElementById("demo270");
        demo270.innerHTML = slider270.value;
        slider270.oninput = function() {
            vq270 = demo270.innerHTML = this.value;
        }
        var slider271 = document.getElementById("q271");
        var demo271 = document.getElementById("demo271");
        demo271.innerHTML = slider271.value;
        slider271.oninput = function() {
            vq271 = demo271.innerHTML = this.value;
        }
        var slider272 = document.getElementById("q272");
        var demo272 = document.getElementById("demo272");
        demo272.innerHTML = slider272.value;
        slider272.oninput = function() {
            vq272 = demo272.innerHTML = this.value;
        }
        var slider273 = document.getElementById("q273");
        var demo273 = document.getElementById("demo273");
        demo273.innerHTML = slider273.value;
        slider273.oninput = function() {
            vq273 = demo273.innerHTML = this.value;
        }
        var slider274 = document.getElementById("q274");
        var demo274 = document.getElementById("demo274");
        demo274.innerHTML = slider274.value;
        slider274.oninput = function() {
            vq274 = demo274.innerHTML = this.value;
        }
        var slider275 = document.getElementById("q275");
        var demo275 = document.getElementById("demo275");
        demo275.innerHTML = slider275.value;
        slider275.oninput = function() {
            vq275 = demo275.innerHTML = this.value;
        }
        var slider276 = document.getElementById("q276");
        var demo276 = document.getElementById("demo276");
        demo276.innerHTML = slider276.value;
        slider276.oninput = function() {
            vq276 = demo276.innerHTML = this.value;
        }
        var slider277 = document.getElementById("q277");
        var demo277 = document.getElementById("demo277");
        demo277.innerHTML = slider277.value;
        slider277.oninput = function() {
            vq277 = demo277.innerHTML = this.value;
        }
        var slider278 = document.getElementById("q278");
        var demo278 = document.getElementById("demo278");
        demo278.innerHTML = slider278.value;
        slider278.oninput = function() {
            vq278 = demo278.innerHTML = this.value;
        }
        var slider279 = document.getElementById("q279");
        var demo279 = document.getElementById("demo279");
        demo279.innerHTML = slider279.value;
        slider279.oninput = function() {
            vq279 = demo279.innerHTML = this.value;
        }
        var slider280 = document.getElementById("q280");
        var demo280 = document.getElementById("demo280");
        demo280.innerHTML = slider280.value;
        slider280.oninput = function() {
            vq280 = demo280.innerHTML = this.value;
        }
        var slider281 = document.getElementById("q281");
        var demo281 = document.getElementById("demo281");
        demo281.innerHTML = slider281.value;
        slider281.oninput = function() {
            vq281 = demo281.innerHTML = this.value;
        }
        var slider282 = document.getElementById("q282");
        var demo282 = document.getElementById("demo282");
        demo282.innerHTML = slider282.value;
        slider282.oninput = function() {
            vq282 = demo282.innerHTML = this.value;
        }
        var slider283 = document.getElementById("q283");
        var demo283 = document.getElementById("demo283");
        demo283.innerHTML = slider283.value;
        slider283.oninput = function() {
            vq283 = demo283.innerHTML = this.value;
        }
        var slider284 = document.getElementById("q284");
        var demo284 = document.getElementById("demo284");
        demo284.innerHTML = slider284.value;
        slider284.oninput = function() {
            vq284 = demo284.innerHTML = this.value;
        }
        var slider285 = document.getElementById("q285");
        var demo285 = document.getElementById("demo285");
        demo285.innerHTML = slider285.value;
        slider285.oninput = function() {
            vq285 = demo285.innerHTML = this.value;
        }
        var slider286 = document.getElementById("q286");
        var demo286 = document.getElementById("demo286");
        demo286.innerHTML = slider286.value;
        slider286.oninput = function() {
            vq286 = demo286.innerHTML = this.value;
        }
        var slider287 = document.getElementById("q287");
        var demo287 = document.getElementById("demo287");
        demo287.innerHTML = slider287.value;
        slider287.oninput = function() {
            vq287 = demo287.innerHTML = this.value;
        }
        var slider288 = document.getElementById("q288");
        var demo288 = document.getElementById("demo288");
        demo288.innerHTML = slider288.value;
        slider288.oninput = function() {
            vq288 = demo288.innerHTML = this.value;
        }
        var slider289 = document.getElementById("q289");
        var demo289 = document.getElementById("demo289");
        demo289.innerHTML = slider289.value;
        slider289.oninput = function() {
            vq289 = demo289.innerHTML = this.value;
        }
        var slider290 = document.getElementById("q290");
        var demo290 = document.getElementById("demo290");
        demo290.innerHTML = slider290.value;
        slider290.oninput = function() {
            vq290 = demo290.innerHTML = this.value;
        }
        var slider291 = document.getElementById("q291");
        var demo291 = document.getElementById("demo291");
        demo291.innerHTML = slider291.value;
        slider291.oninput = function() {
            vq291 = demo291.innerHTML = this.value;
        }
        var slider292 = document.getElementById("q292");
        var demo292 = document.getElementById("demo292");
        demo292.innerHTML = slider292.value;
        slider292.oninput = function() {
            vq292 = demo292.innerHTML = this.value;
        }
        var slider293 = document.getElementById("q293");
        var demo293 = document.getElementById("demo293");
        demo293.innerHTML = slider293.value;
        slider293.oninput = function() {
            vq293 = demo293.innerHTML = this.value;
        }
        var slider294 = document.getElementById("q294");
        var demo294 = document.getElementById("demo294");
        demo294.innerHTML = slider294.value;
        slider294.oninput = function() {
            vq294 = demo294.innerHTML = this.value;
        }
        var slider295 = document.getElementById("q295");
        var demo295 = document.getElementById("demo295");
        demo295.innerHTML = slider295.value;
        slider295.oninput = function() {
            vq295 = demo295.innerHTML = this.value;
        }
        var slider296 = document.getElementById("q296");
        var demo296 = document.getElementById("demo296");
        demo296.innerHTML = slider296.value;
        slider296.oninput = function() {
            vq296 = demo296.innerHTML = this.value;
        }
        var slider297 = document.getElementById("q297");
        var demo297 = document.getElementById("demo297");
        demo297.innerHTML = slider297.value;
        slider297.oninput = function() {
            vq297 = demo297.innerHTML = this.value;
        }
        var slider298 = document.getElementById("q298");
        var demo298 = document.getElementById("demo298");
        demo298.innerHTML = slider298.value;
        slider298.oninput = function() {
            vq298 = demo298.innerHTML = this.value;
        }
        var slider299 = document.getElementById("q299");
        var demo299 = document.getElementById("demo299");
        demo299.innerHTML = slider299.value;
        slider299.oninput = function() {
            vq299 = demo299.innerHTML = this.value;
        }
        var slider300 = document.getElementById("q300");
        var demo300 = document.getElementById("demo300");
        demo300.innerHTML = slider300.value;
        slider300.oninput = function() {
            vq300 = demo300.innerHTML = this.value;
        }
        var slider301 = document.getElementById("q301");
        var demo301 = document.getElementById("demo301");
        demo301.innerHTML = slider301.value;
        slider301.oninput = function() {
            vq301 = demo301.innerHTML = this.value;
        }
        var slider302 = document.getElementById("q302");
        var demo302 = document.getElementById("demo302");
        demo302.innerHTML = slider302.value;
        slider302.oninput = function() {
            vq302 = demo302.innerHTML = this.value;
        }
        var slider303 = document.getElementById("q303");
        var demo303 = document.getElementById("demo303");
        demo303.innerHTML = slider303.value;
        slider303.oninput = function() {
            vq303 = demo303.innerHTML = this.value;
        }
        var slider304 = document.getElementById("q304");
        var demo304 = document.getElementById("demo304");
        demo304.innerHTML = slider304.value;
        slider304.oninput = function() {
            vq304 = demo304.innerHTML = this.value;
        }
        var slider305 = document.getElementById("q305");
        var demo305 = document.getElementById("demo305");
        demo305.innerHTML = slider305.value;
        slider305.oninput = function() {
            vq305 = demo305.innerHTML = this.value;
        }
        var slider306 = document.getElementById("q306");
        var demo306 = document.getElementById("demo306");
        demo306.innerHTML = slider306.value;
        slider306.oninput = function() {
            vq306 = demo306.innerHTML = this.value;
        }
        var slider307 = document.getElementById("q307");
        var demo307 = document.getElementById("demo307");
        demo307.innerHTML = slider307.value;
        slider307.oninput = function() {
            vq307 = demo307.innerHTML = this.value;
        }
        var slider308 = document.getElementById("q308");
        var demo308 = document.getElementById("demo308");
        demo308.innerHTML = slider308.value;
        slider308.oninput = function() {
            vq308 = demo308.innerHTML = this.value;
        }
        var slider309 = document.getElementById("q309");
        var demo309 = document.getElementById("demo309");
        demo309.innerHTML = slider309.value;
        slider309.oninput = function() {
            vq309 = demo309.innerHTML = this.value;
        }
        var slider310 = document.getElementById("q310");
        var demo310 = document.getElementById("demo310");
        demo310.innerHTML = slider310.value;
        slider310.oninput = function() {
            vq310 = demo310.innerHTML = this.value;
        }
        var slider311 = document.getElementById("q311");
        var demo311 = document.getElementById("demo311");
        demo311.innerHTML = slider311.value;
        slider311.oninput = function() {
            vq311 = demo311.innerHTML = this.value;
        }
        var slider312 = document.getElementById("q312");
        var demo312 = document.getElementById("demo312");
        demo312.innerHTML = slider312.value;
        slider312.oninput = function() {
            vq312 = demo312.innerHTML = this.value;
        }
        var slider313 = document.getElementById("q313");
        var demo313 = document.getElementById("demo313");
        demo313.innerHTML = slider313.value;
        slider313.oninput = function() {
            vq313 = demo313.innerHTML = this.value;
        }
        var slider314 = document.getElementById("q314");
        var demo314 = document.getElementById("demo314");
        demo314.innerHTML = slider314.value;
        slider314.oninput = function() {
            vq314 = demo314.innerHTML = this.value;
        }
        var slider315 = document.getElementById("q315");
        var demo315 = document.getElementById("demo315");
        demo315.innerHTML = slider315.value;
        slider315.oninput = function() {
            vq315 = demo315.innerHTML = this.value;
        }
        var slider316 = document.getElementById("q316");
        var demo316 = document.getElementById("demo316");
        demo316.innerHTML = slider316.value;
        slider316.oninput = function() {
            vq316 = demo316.innerHTML = this.value;
        }
        var slider317 = document.getElementById("q317");
        var demo317 = document.getElementById("demo317");
        demo317.innerHTML = slider317.value;
        slider317.oninput = function() {
            vq317 = demo317.innerHTML = this.value;
        }
        var slider318 = document.getElementById("q318");
        var demo318 = document.getElementById("demo318");
        demo318.innerHTML = slider318.value;
        slider318.oninput = function() {
            vq318 = demo318.innerHTML = this.value;
        }
        var slider319 = document.getElementById("q319");
        var demo319 = document.getElementById("demo319");
        demo319.innerHTML = slider319.value;
        slider319.oninput = function() {
            vq319 = demo319.innerHTML = this.value;
        }
        var slider320 = document.getElementById("q320");
        var demo320 = document.getElementById("demo320");
        demo320.innerHTML = slider320.value;
        slider320.oninput = function() {
            vq320 = demo320.innerHTML = this.value;
        }
        var slider321 = document.getElementById("q321");
        var demo321 = document.getElementById("demo321");
        demo321.innerHTML = slider321.value;
        slider321.oninput = function() {
            vq321 = demo321.innerHTML = this.value;
        }
        var slider322 = document.getElementById("q322");
        var demo322 = document.getElementById("demo322");
        demo322.innerHTML = slider322.value;
        slider322.oninput = function() {
            vq322 = demo322.innerHTML = this.value;
        }
        var slider323 = document.getElementById("q323");
        var demo323 = document.getElementById("demo323");
        demo323.innerHTML = slider323.value;
        slider323.oninput = function() {
            vq323 = demo323.innerHTML = this.value;
        }
        var slider324 = document.getElementById("q324");
        var demo324 = document.getElementById("demo324");
        demo324.innerHTML = slider324.value;
        slider324.oninput = function() {
            vq324 = demo324.innerHTML = this.value;
        }
        var slider325 = document.getElementById("q325");
        var demo325 = document.getElementById("demo325");
        demo325.innerHTML = slider325.value;
        slider325.oninput = function() {
            vq325 = demo325.innerHTML = this.value;
        }
        var slider326 = document.getElementById("q326");
        var demo326 = document.getElementById("demo326");
        demo326.innerHTML = slider326.value;
        slider326.oninput = function() {
            vq326 = demo326.innerHTML = this.value;
        }
        var slider327 = document.getElementById("q327");
        var demo327 = document.getElementById("demo327");
        demo327.innerHTML = slider327.value;
        slider327.oninput = function() {
            vq327 = demo327.innerHTML = this.value;
        }
        var slider328 = document.getElementById("q328");
        var demo328 = document.getElementById("demo328");
        demo328.innerHTML = slider328.value;
        slider328.oninput = function() {
            vq328 = demo328.innerHTML = this.value;
        }
        var slider329 = document.getElementById("q329");
        var demo329 = document.getElementById("demo329");
        demo329.innerHTML = slider329.value;
        slider329.oninput = function() {
            vq329 = demo329.innerHTML = this.value;
        }
        var slider330 = document.getElementById("q330");
        var demo330 = document.getElementById("demo330");
        demo330.innerHTML = slider330.value;
        slider330.oninput = function() {
            vq330 = demo330.innerHTML = this.value;
        }
        var slider331 = document.getElementById("q331");
        var demo331 = document.getElementById("demo331");
        demo331.innerHTML = slider331.value;
        slider331.oninput = function() {
            vq331 = demo331.innerHTML = this.value;
        }
        var slider332 = document.getElementById("q332");
        var demo332 = document.getElementById("demo332");
        demo332.innerHTML = slider332.value;
        slider332.oninput = function() {
            vq332 = demo332.innerHTML = this.value;
        }
        var slider333 = document.getElementById("q333");
        var demo333 = document.getElementById("demo333");
        demo333.innerHTML = slider333.value;
        slider333.oninput = function() {
            vq333 = demo333.innerHTML = this.value;
        }
        var slider334 = document.getElementById("q334");
        var demo334 = document.getElementById("demo334");
        demo334.innerHTML = slider334.value;
        slider334.oninput = function() {
            vq334 = demo334.innerHTML = this.value;
        }
        var slider335 = document.getElementById("q335");
        var demo335 = document.getElementById("demo335");
        demo335.innerHTML = slider335.value;
        slider335.oninput = function() {
            vq335 = demo335.innerHTML = this.value;
        }
        var slider336 = document.getElementById("q336");
        var demo336 = document.getElementById("demo336");
        demo336.innerHTML = slider336.value;
        slider336.oninput = function() {
            vq336 = demo336.innerHTML = this.value;
        }
        var slider337 = document.getElementById("q337");
        var demo337 = document.getElementById("demo337");
        demo337.innerHTML = slider337.value;
        slider337.oninput = function() {
            vq337 = demo337.innerHTML = this.value;
        }
        var slider338 = document.getElementById("q338");
        var demo338 = document.getElementById("demo338");
        demo338.innerHTML = slider338.value;
        slider338.oninput = function() {
            vq338 = demo338.innerHTML = this.value;
        }
        var slider339 = document.getElementById("q339");
        var demo339 = document.getElementById("demo339");
        demo339.innerHTML = slider339.value;
        slider339.oninput = function() {
            vq339 = demo339.innerHTML = this.value;
        }
        var slider340 = document.getElementById("q340");
        var demo340 = document.getElementById("demo340");
        demo340.innerHTML = slider340.value;
        slider340.oninput = function() {
            vq340 = demo340.innerHTML = this.value;
        }
        var slider341 = document.getElementById("q341");
        var demo341 = document.getElementById("demo341");
        demo341.innerHTML = slider341.value;
        slider341.oninput = function() {
            vq341 = demo341.innerHTML = this.value;
        }
        var slider342 = document.getElementById("q342");
        var demo342 = document.getElementById("demo342");
        demo342.innerHTML = slider342.value;
        slider342.oninput = function() {
            vq342 = demo342.innerHTML = this.value;
        }

    </script>


    <script>
           
           var audio;
           var playlist;
           var tracks;
           var current;
           var timestamp = []
           var track_order = []
        
        

        document.getElementById("track0").src ="<?php echo $track_1;?>";
        document.getElementById("track1").src ="<?php echo $track_2;?>";
        document.getElementById("track2").src ="<?php echo $track_3;?>";
        document.getElementById("track3").src ="<?php echo $track_4;?>";
        document.getElementById("track4").src ="<?php echo $track_5;?>";
        document.getElementById("track5").src ="<?php echo $track_6;?>";
        document.getElementById("track6").src ="<?php echo $track_7;?>";
        document.getElementById("track7").src ="<?php echo $track_8;?>";
        document.getElementById("track8").src ="<?php echo $track_9;?>";
        document.getElementById("track9").src ="<?php echo $track_10;?>";
        document.getElementById("track10").src ="<?php echo $track_11;?>";
        document.getElementById("track11").src ="<?php echo $track_12;?>";
        document.getElementById("track12").src ="<?php echo $track_13;?>";
        document.getElementById("track13").src ="<?php echo $track_14;?>";
        document.getElementById("track14").src ="<?php echo $track_15;?>";
        document.getElementById("track15").src ="<?php echo $track_16;?>";
        document.getElementById("track16").src ="<?php echo $track_17;?>";
        document.getElementById("track17").src ="<?php echo $track_18;?>";
        document.getElementById("track18").src ="<?php echo $track_19;?>";
        document.getElementById("track19").src ="<?php echo $track_20;?>";
        document.getElementById("track20").src ="<?php echo $track_21;?>";
        document.getElementById("track21").src ="<?php echo $track_22;?>";
        document.getElementById("track22").src ="<?php echo $track_23;?>";
        document.getElementById("track23").src ="<?php echo $track_24;?>";
        document.getElementById("track24").src ="<?php echo $track_25;?>";
        document.getElementById("track25").src ="<?php echo $track_26;?>";
        document.getElementById("track26").src ="<?php echo $track_27;?>";
        document.getElementById("track27").src ="<?php echo $track_28;?>";
        document.getElementById("track28").src ="<?php echo $track_29;?>";
        document.getElementById("track29").src ="<?php echo $track_30;?>";
        document.getElementById("track30").src ="<?php echo $track_31;?>";
        document.getElementById("track31").src ="<?php echo $track_32;?>";
        document.getElementById("track32").src ="<?php echo $track_33;?>";
        document.getElementById("track33").src ="<?php echo $track_34;?>";
        document.getElementById("track34").src ="<?php echo $track_35;?>";
        document.getElementById("track35").src ="<?php echo $track_36;?>";
        document.getElementById("track36").src ="<?php echo $track_37;?>";
        document.getElementById("track37").src ="<?php echo $track_38;?>";
        document.getElementById("track38").src ="<?php echo $track_39;?>";
        document.getElementById("track39").src ="<?php echo $track_40;?>";
        document.getElementById("track40").src ="<?php echo $track_41;?>";
        document.getElementById("track41").src ="<?php echo $track_42;?>";
        document.getElementById("track42").src ="<?php echo $track_43;?>";
        document.getElementById("track43").src ="<?php echo $track_44;?>";
        document.getElementById("track44").src ="<?php echo $track_45;?>";
        document.getElementById("track45").src ="<?php echo $track_46;?>";
        document.getElementById("track46").src ="<?php echo $track_47;?>";
        document.getElementById("track47").src ="<?php echo $track_48;?>";
        document.getElementById("track48").src ="<?php echo $track_49;?>";
        document.getElementById("track49").src ="<?php echo $track_50;?>";
        document.getElementById("track50").src ="<?php echo $track_51;?>";
        document.getElementById("track51").src ="<?php echo $track_52;?>";
        document.getElementById("track52").src ="<?php echo $track_53;?>";
        document.getElementById("track53").src ="<?php echo $track_54;?>";
        document.getElementById("track54").src ="<?php echo $track_55;?>";
        document.getElementById("track55").src ="<?php echo $track_56;?>";
        document.getElementById("track56").src ="<?php echo $track_57;?>";
        document.getElementById("track57").src ="<?php echo $track_58;?>";
        document.getElementById("track58").src ="<?php echo $track_59;?>";
        document.getElementById("track59").src ="<?php echo $track_60;?>";
        document.getElementById("track60").src ="<?php echo $track_61;?>";
        document.getElementById("track61").src ="<?php echo $track_62;?>";
        document.getElementById("track62").src ="<?php echo $track_63;?>";
        document.getElementById("track63").src ="<?php echo $track_64;?>";
        document.getElementById("track64").src ="<?php echo $track_65;?>";
        document.getElementById("track65").src ="<?php echo $track_66;?>";
        document.getElementById("track66").src ="<?php echo $track_67;?>";
        document.getElementById("track67").src ="<?php echo $track_68;?>";
        document.getElementById("track68").src ="<?php echo $track_69;?>";
        document.getElementById("track69").src ="<?php echo $track_70;?>";
        document.getElementById("track70").src ="<?php echo $track_71;?>";
        document.getElementById("track71").src ="<?php echo $track_72;?>";
        document.getElementById("track72").src ="<?php echo $track_73;?>";
        document.getElementById("track73").src ="<?php echo $track_74;?>";
        document.getElementById("track74").src ="<?php echo $track_75;?>";
        document.getElementById("track75").src ="<?php echo $track_76;?>";
        document.getElementById("track76").src ="<?php echo $track_77;?>";
        document.getElementById("track77").src ="<?php echo $track_78;?>";
        document.getElementById("track78").src ="<?php echo $track_79;?>";
        document.getElementById("track79").src ="<?php echo $track_80;?>";
        document.getElementById("track80").src ="<?php echo $track_81;?>";
        document.getElementById("track81").src ="<?php echo $track_82;?>";
        document.getElementById("track82").src ="<?php echo $track_83;?>";
        document.getElementById("track83").src ="<?php echo $track_84;?>";
        document.getElementById("track84").src ="<?php echo $track_85;?>";
        document.getElementById("track85").src ="<?php echo $track_86;?>";
        document.getElementById("track86").src ="<?php echo $track_87;?>";
        document.getElementById("track87").src ="<?php echo $track_88;?>";
        document.getElementById("track88").src ="<?php echo $track_89;?>";
        document.getElementById("track89").src ="<?php echo $track_90;?>";
        document.getElementById("track90").src ="<?php echo $track_91;?>";
        document.getElementById("track91").src ="<?php echo $track_92;?>";
        document.getElementById("track92").src ="<?php echo $track_93;?>";
        document.getElementById("track93").src ="<?php echo $track_94;?>";
        document.getElementById("track94").src ="<?php echo $track_95;?>";
        document.getElementById("track95").src ="<?php echo $track_96;?>";
        document.getElementById("track96").src ="<?php echo $track_97;?>";
        document.getElementById("track97").src ="<?php echo $track_98;?>";
        document.getElementById("track98").src ="<?php echo $track_99;?>";
        document.getElementById("track99").src ="<?php echo $track_100;?>";
        document.getElementById("track100").src ="<?php echo $track_101;?>";
        document.getElementById("track101").src ="<?php echo $track_102;?>";
        document.getElementById("track102").src ="<?php echo $track_103;?>";
        document.getElementById("track103").src ="<?php echo $track_104;?>";
        document.getElementById("track104").src ="<?php echo $track_105;?>";
        document.getElementById("track105").src ="<?php echo $track_106;?>";
        document.getElementById("track106").src ="<?php echo $track_107;?>";
        document.getElementById("track107").src ="<?php echo $track_108;?>";
        document.getElementById("track108").src ="<?php echo $track_109;?>";
        document.getElementById("track109").src ="<?php echo $track_110;?>";
        document.getElementById("track110").src ="<?php echo $track_111;?>";
        document.getElementById("track111").src ="<?php echo $track_112;?>";
        document.getElementById("track112").src ="<?php echo $track_113;?>";
        document.getElementById("track113").src ="<?php echo $track_114;?>";

        document.getElementById("track_1").value = "<?php echo $track_1;?>";
        document.getElementById("track_2").value = "<?php echo $track_2;?>";
        document.getElementById("track_3").value = "<?php echo $track_3;?>";
        document.getElementById("track_4").value = "<?php echo $track_4;?>";
        document.getElementById("track_5").value = "<?php echo $track_5;?>";
        document.getElementById("track_6").value = "<?php echo $track_6;?>";
        document.getElementById("track_7").value = "<?php echo $track_7;?>";
        document.getElementById("track_8").value = "<?php echo $track_8;?>";
        document.getElementById("track_9").value = "<?php echo $track_9;?>";
        document.getElementById("track_10").value = "<?php echo $track_10;?>";
        document.getElementById("track_11").value = "<?php echo $track_11;?>";
        document.getElementById("track_12").value = "<?php echo $track_12;?>";
        document.getElementById("track_13").value = "<?php echo $track_13;?>";
        document.getElementById("track_14").value = "<?php echo $track_14;?>";
        document.getElementById("track_15").value = "<?php echo $track_15;?>";
        document.getElementById("track_16").value = "<?php echo $track_16;?>";
        document.getElementById("track_17").value = "<?php echo $track_17;?>";
        document.getElementById("track_18").value = "<?php echo $track_18;?>";
        document.getElementById("track_19").value = "<?php echo $track_19;?>";
        document.getElementById("track_20").value = "<?php echo $track_20;?>";
        document.getElementById("track_21").value = "<?php echo $track_21;?>";
        document.getElementById("track_22").value = "<?php echo $track_22;?>";
        document.getElementById("track_23").value = "<?php echo $track_23;?>";
        document.getElementById("track_24").value = "<?php echo $track_24;?>";
        document.getElementById("track_25").value = "<?php echo $track_25;?>";
        document.getElementById("track_26").value = "<?php echo $track_26;?>";
        document.getElementById("track_27").value = "<?php echo $track_27;?>";
        document.getElementById("track_28").value = "<?php echo $track_28;?>";
        document.getElementById("track_29").value = "<?php echo $track_29;?>";
        document.getElementById("track_30").value = "<?php echo $track_30;?>";
        document.getElementById("track_31").value = "<?php echo $track_31;?>";
        document.getElementById("track_32").value = "<?php echo $track_32;?>";
        document.getElementById("track_33").value = "<?php echo $track_33;?>";
        document.getElementById("track_34").value = "<?php echo $track_34;?>";
        document.getElementById("track_35").value = "<?php echo $track_35;?>";
        document.getElementById("track_36").value = "<?php echo $track_36;?>";
        document.getElementById("track_37").value = "<?php echo $track_37;?>";
        document.getElementById("track_38").value = "<?php echo $track_38;?>";
        document.getElementById("track_39").value = "<?php echo $track_39;?>";
        document.getElementById("track_40").value = "<?php echo $track_40;?>";
        document.getElementById("track_41").value = "<?php echo $track_41;?>";
        document.getElementById("track_42").value = "<?php echo $track_42;?>";
        document.getElementById("track_43").value = "<?php echo $track_43;?>";
        document.getElementById("track_44").value = "<?php echo $track_44;?>";
        document.getElementById("track_45").value = "<?php echo $track_45;?>";
        document.getElementById("track_46").value = "<?php echo $track_46;?>";
        document.getElementById("track_47").value = "<?php echo $track_47;?>";
        document.getElementById("track_48").value = "<?php echo $track_48;?>";
        document.getElementById("track_49").value = "<?php echo $track_49;?>";
        document.getElementById("track_50").value = "<?php echo $track_50;?>";
        document.getElementById("track_51").value = "<?php echo $track_51;?>";
        document.getElementById("track_52").value = "<?php echo $track_52;?>";
        document.getElementById("track_53").value = "<?php echo $track_53;?>";
        document.getElementById("track_54").value = "<?php echo $track_54;?>";
        document.getElementById("track_55").value = "<?php echo $track_55;?>";
        document.getElementById("track_56").value = "<?php echo $track_56;?>";
        document.getElementById("track_57").value = "<?php echo $track_57;?>";
        document.getElementById("track_58").value = "<?php echo $track_58;?>";
        document.getElementById("track_59").value = "<?php echo $track_59;?>";
        document.getElementById("track_60").value = "<?php echo $track_60;?>";
        document.getElementById("track_61").value = "<?php echo $track_61;?>";
        document.getElementById("track_62").value = "<?php echo $track_62;?>";
        document.getElementById("track_63").value = "<?php echo $track_63;?>";
        document.getElementById("track_64").value = "<?php echo $track_64;?>";
        document.getElementById("track_65").value = "<?php echo $track_65;?>";
        document.getElementById("track_66").value = "<?php echo $track_66;?>";
        document.getElementById("track_67").value = "<?php echo $track_67;?>";
        document.getElementById("track_68").value = "<?php echo $track_68;?>";
        document.getElementById("track_69").value = "<?php echo $track_69;?>";
        document.getElementById("track_70").value = "<?php echo $track_70;?>";
        document.getElementById("track_71").value = "<?php echo $track_71;?>";
        document.getElementById("track_72").value = "<?php echo $track_72;?>";
        document.getElementById("track_73").value = "<?php echo $track_73;?>";
        document.getElementById("track_74").value = "<?php echo $track_74;?>";
        document.getElementById("track_75").value = "<?php echo $track_75;?>";
        document.getElementById("track_76").value = "<?php echo $track_76;?>";
        document.getElementById("track_77").value = "<?php echo $track_77;?>";
        document.getElementById("track_78").value = "<?php echo $track_78;?>";
        document.getElementById("track_79").value = "<?php echo $track_79;?>";
        document.getElementById("track_80").value = "<?php echo $track_80;?>";
        document.getElementById("track_81").value = "<?php echo $track_81;?>";
        document.getElementById("track_82").value = "<?php echo $track_82;?>";
        document.getElementById("track_83").value = "<?php echo $track_83;?>";
        document.getElementById("track_84").value = "<?php echo $track_84;?>";
        document.getElementById("track_85").value = "<?php echo $track_85;?>";
        document.getElementById("track_86").value = "<?php echo $track_86;?>";
        document.getElementById("track_87").value = "<?php echo $track_87;?>";
        document.getElementById("track_88").value = "<?php echo $track_88;?>";
        document.getElementById("track_89").value = "<?php echo $track_89;?>";
        document.getElementById("track_90").value = "<?php echo $track_90;?>";
        document.getElementById("track_91").value = "<?php echo $track_91;?>";
        document.getElementById("track_92").value = "<?php echo $track_92;?>";
        document.getElementById("track_93").value = "<?php echo $track_93;?>";
        document.getElementById("track_94").value = "<?php echo $track_94;?>";
        document.getElementById("track_95").value = "<?php echo $track_95;?>";
        document.getElementById("track_96").value = "<?php echo $track_96;?>";
        document.getElementById("track_97").value = "<?php echo $track_97;?>";
        document.getElementById("track_98").value = "<?php echo $track_98;?>";
        document.getElementById("track_99").value = "<?php echo $track_99;?>";
        document.getElementById("track_100").value = "<?php echo $track_100;?>";
        document.getElementById("track_101").value = "<?php echo $track_101;?>";
        document.getElementById("track_102").value = "<?php echo $track_102;?>";
        document.getElementById("track_103").value = "<?php echo $track_103;?>";
        document.getElementById("track_104").value = "<?php echo $track_104;?>";
        document.getElementById("track_105").value = "<?php echo $track_105;?>";
        document.getElementById("track_106").value = "<?php echo $track_106;?>";
        document.getElementById("track_107").value = "<?php echo $track_107;?>";
        document.getElementById("track_108").value = "<?php echo $track_108;?>";
        document.getElementById("track_109").value = "<?php echo $track_109;?>";
        document.getElementById("track_110").value = "<?php echo $track_110;?>";
        document.getElementById("track_111").value = "<?php echo $track_111;?>";
        document.getElementById("track_112").value = "<?php echo $track_112;?>";
        document.getElementById("track_113").value = "<?php echo $track_113;?>";
        document.getElementById("track_114").value = "<?php echo $track_114;?>";

        // All input values convert to constant value type in order to pass the values to the database.
        const track_1_online = document.getElementById("track_1").value;
        const track_2_online = document.getElementById("track_2").value;
        const track_3_online = document.getElementById("track_3").value;
        const track_4_online = document.getElementById("track_4").value;
        const track_5_online = document.getElementById("track_5").value;
        const track_6_online = document.getElementById("track_6").value;
        const track_7_online = document.getElementById("track_7").value;
        const track_8_online = document.getElementById("track_8").value;
        const track_9_online = document.getElementById("track_9").value;
        const track_10_online = document.getElementById("track_10").value;
        const track_11_online = document.getElementById("track_11").value;
        const track_12_online = document.getElementById("track_12").value;
        const track_13_online = document.getElementById("track_13").value;
        const track_14_online = document.getElementById("track_14").value;
        const track_15_online = document.getElementById("track_15").value;
        const track_16_online = document.getElementById("track_16").value;
        const track_17_online = document.getElementById("track_17").value;
        const track_18_online = document.getElementById("track_18").value;
        const track_19_online = document.getElementById("track_19").value;
        const track_20_online = document.getElementById("track_20").value;
        const track_21_online = document.getElementById("track_21").value;
        const track_22_online = document.getElementById("track_22").value;
        const track_23_online = document.getElementById("track_23").value;
        const track_24_online = document.getElementById("track_24").value;
        const track_25_online = document.getElementById("track_25").value;
        const track_26_online = document.getElementById("track_26").value;
        const track_27_online = document.getElementById("track_27").value;
        const track_28_online = document.getElementById("track_28").value;
        const track_29_online = document.getElementById("track_29").value;
        const track_30_online = document.getElementById("track_30").value;
        const track_31_online = document.getElementById("track_31").value;
        const track_32_online = document.getElementById("track_32").value;
        const track_33_online = document.getElementById("track_33").value;
        const track_34_online = document.getElementById("track_34").value;
        const track_35_online = document.getElementById("track_35").value;
        const track_36_online = document.getElementById("track_36").value;
        const track_37_online = document.getElementById("track_37").value;
        const track_38_online = document.getElementById("track_38").value;
        const track_39_online = document.getElementById("track_39").value;
        const track_40_online = document.getElementById("track_40").value;
        const track_41_online = document.getElementById("track_41").value;
        const track_42_online = document.getElementById("track_42").value;
        const track_43_online = document.getElementById("track_43").value;
        const track_44_online = document.getElementById("track_44").value;
        const track_45_online = document.getElementById("track_45").value;
        const track_46_online = document.getElementById("track_46").value;
        const track_47_online = document.getElementById("track_47").value;
        const track_48_online = document.getElementById("track_48").value;
        const track_49_online = document.getElementById("track_49").value;
        const track_50_online = document.getElementById("track_50").value;
        const track_51_online = document.getElementById("track_51").value;
        const track_52_online = document.getElementById("track_52").value;
        const track_53_online = document.getElementById("track_53").value;
        const track_54_online = document.getElementById("track_54").value;
        const track_55_online = document.getElementById("track_55").value;
        const track_56_online = document.getElementById("track_56").value;
        const track_57_online = document.getElementById("track_57").value;
        const track_58_online = document.getElementById("track_58").value;
        const track_59_online = document.getElementById("track_59").value;
        const track_60_online = document.getElementById("track_60").value;
        const track_61_online = document.getElementById("track_61").value;
        const track_62_online = document.getElementById("track_62").value;
        const track_63_online = document.getElementById("track_63").value;
        const track_64_online = document.getElementById("track_64").value;
        const track_65_online = document.getElementById("track_65").value;
        const track_66_online = document.getElementById("track_66").value;
        const track_67_online = document.getElementById("track_67").value;
        const track_68_online = document.getElementById("track_68").value;
        const track_69_online = document.getElementById("track_69").value;
        const track_70_online = document.getElementById("track_70").value;
        const track_71_online = document.getElementById("track_71").value;
        const track_72_online = document.getElementById("track_72").value;
        const track_73_online = document.getElementById("track_73").value;
        const track_74_online = document.getElementById("track_74").value;
        const track_75_online = document.getElementById("track_75").value;
        const track_76_online = document.getElementById("track_76").value;
        const track_77_online = document.getElementById("track_77").value;
        const track_78_online = document.getElementById("track_78").value;
        const track_79_online = document.getElementById("track_79").value;
        const track_80_online = document.getElementById("track_80").value;
        const track_81_online = document.getElementById("track_81").value;
        const track_82_online = document.getElementById("track_82").value;
        const track_83_online = document.getElementById("track_83").value;
        const track_84_online = document.getElementById("track_84").value;
        const track_85_online = document.getElementById("track_85").value;
        const track_86_online = document.getElementById("track_86").value;
        const track_87_online = document.getElementById("track_87").value;
        const track_88_online = document.getElementById("track_88").value;
        const track_89_online = document.getElementById("track_89").value;
        const track_90_online = document.getElementById("track_90").value;
        const track_91_online = document.getElementById("track_91").value;
        const track_92_online = document.getElementById("track_92").value;
        const track_93_online = document.getElementById("track_93").value;
        const track_94_online = document.getElementById("track_94").value;
        const track_95_online = document.getElementById("track_95").value;
        const track_96_online = document.getElementById("track_96").value;
        const track_97_online = document.getElementById("track_97").value;
        const track_98_online = document.getElementById("track_98").value;
        const track_99_online = document.getElementById("track_99").value;
        const track_100_online = document.getElementById("track_100").value;
        const track_101_online = document.getElementById("track_101").value;
        const track_102_online = document.getElementById("track_102").value;
        const track_103_online = document.getElementById("track_103").value;
        const track_104_online = document.getElementById("track_104").value;
        const track_105_online = document.getElementById("track_105").value;
        const track_106_online = document.getElementById("track_106").value;
        const track_107_online = document.getElementById("track_107").value;
        const track_108_online = document.getElementById("track_108").value;
        const track_109_online = document.getElementById("track_109").value;
        const track_110_online = document.getElementById("track_110").value;
        const track_111_online = document.getElementById("track_111").value;
        const track_112_online = document.getElementById("track_112").value;
        const track_113_online = document.getElementById("track_113").value;
        const track_114_online = document.getElementById("track_114").value;

        
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


</body>

</html>
