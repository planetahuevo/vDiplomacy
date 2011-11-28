<?php
// This is file installs the map data for the Hussite variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Magdeburg', 'Coast', 'Yes', 0, 45, 183, 26, 79),
	array('Potsdam', 'Coast', 'Yes', 5, 208, 92, 111, 49),
	array('Berlin', 'Coast', 'Yes', 5, 370, 112, 201, 79),
	array('Frankfurt', 'Coast', 'Yes', 5, 525, 119, 261, 50),
	array('Landsberg', 'Land', 'No', 4, 675, 113, 356, 94),
	array('Posen', 'Coast', 'Yes', 4, 964, 178, 482, 93),
	array('Warschau', 'Coast', 'Yes', 4, 1464, 315, 688, 84),
	array('Wittenberg', 'Land', 'No', 5, 228, 341, 123, 142),
	array('Fürstenwalde', 'Land', 'No', 2, 412, 256, 195, 127),
	array('Cottbus', 'Coast', 'Yes', 0, 553, 319, 284, 202),
	array('Grünberg', 'Land', 'Yes', 0, 721, 338, 373, 173),
	array('Kalisch', 'Land', 'No', 4, 949, 319, 478, 175),
	array('Lodz', 'Land', 'No', 4, 1185, 339, 620, 193),
	array('Leipzig', 'Coast', 'Yes', 8, 113, 407, 53, 201),
	array('Meissen', 'Land', 'No', 8, 309, 539, 114, 221),
	array('Dresden', 'Coast', 'Yes', 8, 372, 488, 176, 240),
	array('Senftenberg', 'Land', 'No', 8, 342, 358, 175, 176),
	array('Görlitz', 'Coast', 'Yes', 0, 533, 490, 266, 233),
	array('Glogau', 'Land', 'No', 2, 669, 417, 345, 213),
	array('Liegnitz', 'Land', 'No', 2, 820, 441, 415, 217),
	array('Breslau', 'Coast', 'Yes', 0, 908, 452, 490, 261),
	array('Gleiwitz', 'Coast', 'No', 2, 1160, 730, 588, 366),
	array('Radom', 'Land', 'No', 4, 1412, 547, 708, 288),
	array('Jena', 'Land', 'No', 8, 81, 529, 38, 301),
	array('Chemnitz', 'Land', 'Yes', 8, 226, 552, 109, 269),
	array('Zwickau', 'Land', 'No', 8, 194, 647, 94, 335),
	array('Teplitz', 'Land', 'No', 7, 376, 649, 188, 325),
	array('Tetschen', 'Land', 'No', 2, 487, 568, 246, 291),
	array('Aussig', 'Coast', 'Yes', 0, 488, 622, 254, 311),
	array('Friedland', 'Coast', 'Yes', 0, 623, 627, 307, 314),
	array('Hirschberg', 'Land', 'No', 2, 688, 575, 343, 264),
	array('Waldenburg', 'Land', 'No', 2, 879, 620, 403, 303),
	array('Oppeln', 'Land', 'No', 2, 961, 668, 484, 331),
	array('Ostrau', 'Coast', 'Yes', 0, 1127, 890, 545, 448),
	array('Neu Sandec', 'Land', 'No', 4, 1290, 885, 652, 446),
	array('Krakau', 'Coast', 'Yes', 4, 1356, 729, 691, 417),
	array('Bayreuth', 'Land', 'No', 1, 69, 802, 21, 371),
	array('Eger', 'Coast', 'Yes', 0, 202, 738, 105, 363),
	array('Saaz', 'Coast', 'Yes', 0, 282, 684, 139, 341),
	array('Schlan', 'Land', 'Yes', 7, 392, 737, 201, 371),
	array('Leitmeritz', 'Land', 'No', 7, 446, 694, 226, 346),
	array('Altstadt', 'Coast', 'Yes', 7, 504, 670, 251, 342),
	array('Bunzlau', 'Land', 'No', 7, 587, 669, 290, 336),
	array('Königgratz', 'Coast', 'Yes', 6, 660, 743, 326, 362),
	array('Oreb', 'Land', 'Yes', 6, 749, 673, 364, 339),
	array('Leitomischl', 'Land', 'Yes', 6, 790, 790, 407, 359),
	array('Schönberg', 'Land', 'No', 2, 906, 748, 449, 406),
	array('Olmütz', 'Coast', 'Yes', 2, 823, 911, 407, 453),
	array('Prerau', 'Land', 'No', 2, 988, 895, 492, 444),
	array('Kremsier', 'Land', 'No', 2, 1017, 991, 512, 497),
	array('Sillein', 'Coast', 'Yes', 3, 1155, 941, 620, 482),
	array('Kaschau', 'Land', 'No', 3, 1298, 1078, 682, 558),
	array('Regensburg', 'Coast', 'Yes', 1, 48, 920, 31, 473),
	array('Fürth', 'Land', 'No', 1, 150, 895, 73, 451),
	array('Tachau', 'Coast', 'Yes', 0, 217, 792, 99, 426),
	array('Rakonitz', 'Land', 'No', 7, 279, 753, 140, 384),
	array('Kladno', 'Land', 'No', 7, 373, 823, 191, 411),
	array('Beneschau', 'Land', 'No', 7, 510, 851, 257, 423),
	array('Neustadt', 'Coast', 'Yes', 7, 509, 791, 268, 378),
	array('Kuttenberg', 'Land', 'Yes', 0, 629, 832, 318, 417),
	array('Pardubitz', 'Land', 'No', 6, 701, 843, 357, 410),
	array('Brünn', 'Coast', 'Yes', 2, 907, 957, 450, 482),
	array('Landshut', 'Land', 'No', 1, 98, 1095, 41, 550),
	array('Straubing', 'Land', 'No', 1, 214, 983, 97, 499),
	array('Pilsen', 'Coast', 'Yes', 2, 247, 882, 117, 447),
	array('Klattau', 'Land', 'No', 9, 346, 944, 165, 496),
	array('Rokitzan', 'Coast', 'Yes', 9, 380, 913, 190, 455),
	array('Pibrams', 'Land', 'No', 9, 466, 887, 232, 442),
	array('Pisek', 'Coast', 'Yes', 9, 445, 999, 206, 495),
	array('Tabor', 'Coast', 'Yes', 9, 485, 930, 268, 445),
	array('Pilgrams', 'Land', 'No', 9, 587, 920, 290, 462),
	array('Iglau', 'Coast', 'Yes', 2, 681, 962, 366, 465),
	array('München', 'Coast', 'Yes', 1, 182, 1168, 92, 591),
	array('Passau', 'Coast', 'Yes', 1, 318, 1069, 160, 540),
	array('Prachatitz', 'Land', 'No', 9, 413, 1052, 212, 532),
	array('Budweis', 'Coast', 'Yes', 0, 512, 1059, 263, 531),
	array('Znoim', 'Land', 'No', 2, 719, 1021, 349, 508),
	array('Lundenburg', 'Coast', 'Yes', 0, 871, 1041, 443, 518),
	array('Salzburg', 'Land', 'No', 0, 354, 1196, 189, 638),
	array('Linz', 'Coast', 'Yes', 0, 516, 1155, 265, 581),
	array('Hollabrunn', 'Land', 'No', 0, 682, 1117, 314, 572),
	array('Wien', 'Coast', 'Yes', 0, 726, 1218, 412, 588),
	array('Sankt Pölten', 'Land', 'No', 0, 639, 1286, 316, 642),
	array('Pressburg', 'Coast', 'Yes', 3, 930, 1155, 471, 581),
	array('Trentschin', 'Land', 'No', 3, 1064, 1133, 536, 570),
	array('Ofen', 'Coast', 'Yes', 3, 1241, 1309, 647, 656),
	array('Bautzen', 'Coast', 'Yes', 0, 462, 452, 231, 229),
	array('Ratibor', 'Coast', 'Yes', 0, 1022, 773, 510, 396),
	array('Tschenstochau', 'Coast', 'Yes', 0, 1237, 658, 616, 336),
	array('Radisch', 'Land', 'No', 2, 979, 1020, 492, 509)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Magdeburg','Potsdam','Yes','Yes'),
	array('Magdeburg','Berlin','Yes','No'),
	array('Magdeburg','Frankfurt','Yes','No'),
	array('Magdeburg','Wittenberg','No','Yes'),
	array('Magdeburg','Leipzig','Yes','Yes'),
	array('Magdeburg','Dresden','Yes','No'),
	array('Potsdam','Berlin','Yes','Yes'),
	array('Potsdam','Wittenberg','No','Yes'),
	array('Potsdam','Cottbus','Yes','No'),
	array('Berlin','Frankfurt','No','Yes'),
	array('Berlin','Wittenberg','No','Yes'),
	array('Berlin','Fürstenwalde','No','Yes'),
	array('Berlin','Cottbus','Yes','No'),
	array('Frankfurt','Landsberg','No','Yes'),
	array('Frankfurt','Posen','Yes','No'),
	array('Frankfurt','Warschau','Yes','No'),
	array('Frankfurt','Fürstenwalde','No','Yes'),
	array('Frankfurt','Cottbus','Yes','Yes'),
	array('Frankfurt','Görlitz','Yes','No'),
	array('Frankfurt','Breslau','Yes','No'),
	array('Landsberg','Posen','No','Yes'),
	array('Landsberg','Warschau','No','Yes'),
	array('Landsberg','Cottbus','No','Yes'),
	array('Landsberg','Grünberg','No','Yes'),
	array('Landsberg','Kalisch','No','Yes'),
	array('Posen','Warschau','No','Yes'),
	array('Posen','Kalisch','No','Yes'),
	array('Posen','Tschenstochau','Yes','No'),
	array('Warschau','Kalisch','No','Yes'),
	array('Warschau','Lodz','No','Yes'),
	array('Warschau','Radom','No','Yes'),
	array('Warschau','Krakau','Yes','No'),
	array('Wittenberg','Fürstenwalde','No','Yes'),
	array('Wittenberg','Leipzig','No','Yes'),
	array('Wittenberg','Meissen','No','Yes'),
	array('Wittenberg','Dresden','No','Yes'),
	array('Wittenberg','Senftenberg','No','Yes'),
	array('Fürstenwalde','Cottbus','No','Yes'),
	array('Fürstenwalde','Senftenberg','No','Yes'),
	array('Cottbus','Grünberg','No','Yes'),
	array('Cottbus','Senftenberg','No','Yes'),
	array('Cottbus','Görlitz','Yes','Yes'),
	array('Cottbus','Glogau','No','Yes'),
	array('Cottbus','Bautzen','Yes','Yes'),
	array('Grünberg','Kalisch','No','Yes'),
	array('Grünberg','Glogau','No','Yes'),
	array('Grünberg','Liegnitz','No','Yes'),
	array('Kalisch','Lodz','No','Yes'),
	array('Kalisch','Liegnitz','No','Yes'),
	array('Kalisch','Breslau','No','Yes'),
	array('Lodz','Breslau','No','Yes'),
	array('Lodz','Radom','No','Yes'),
	array('Lodz','Oppeln','No','Yes'),
	array('Lodz','Tschenstochau','No','Yes'),
	array('Leipzig','Meissen','No','Yes'),
	array('Leipzig','Dresden','Yes','No'),
	array('Leipzig','Jena','No','Yes'),
	array('Leipzig','Chemnitz','No','Yes'),
	array('Meissen','Dresden','No','Yes'),
	array('Meissen','Chemnitz','No','Yes'),
	array('Meissen','Zwickau','No','Yes'),
	array('Meissen','Teplitz','No','Yes'),
	array('Meissen','Tetschen','No','Yes'),
	array('Dresden','Senftenberg','No','Yes'),
	array('Dresden','Tetschen','No','Yes'),
	array('Dresden','Aussig','Yes','No'),
	array('Dresden','Bautzen','No','Yes'),
	array('Senftenberg','Bautzen','No','Yes'),
	array('Görlitz','Glogau','No','Yes'),
	array('Görlitz','Breslau','Yes','No'),
	array('Görlitz','Tetschen','No','Yes'),
	array('Görlitz','Friedland','Yes','Yes'),
	array('Görlitz','Hirschberg','No','Yes'),
	array('Görlitz','Bautzen','No','Yes'),
	array('Glogau','Liegnitz','No','Yes'),
	array('Glogau','Hirschberg','No','Yes'),
	array('Liegnitz','Breslau','No','Yes'),
	array('Liegnitz','Hirschberg','No','Yes'),
	array('Liegnitz','Waldenburg','No','Yes'),
	array('Breslau','Waldenburg','No','Yes'),
	array('Breslau','Oppeln','No','Yes'),
	array('Breslau','Ostrau','Yes','No'),
	array('Breslau','Ratibor','Yes','No'),
	array('Gleiwitz','Oppeln','No','Yes'),
	array('Gleiwitz','Krakau','No','Yes'),
	array('Gleiwitz','Ratibor','No','Yes'),
	array('Gleiwitz','Tschenstochau','No','Yes'),
	array('Radom','Krakau','No','Yes'),
	array('Radom','Tschenstochau','No','Yes'),
	array('Jena','Chemnitz','No','Yes'),
	array('Jena','Zwickau','No','Yes'),
	array('Jena','Bayreuth','No','Yes'),
	array('Jena','Eger','No','Yes'),
	array('Chemnitz','Zwickau','No','Yes'),
	array('Zwickau','Teplitz','No','Yes'),
	array('Zwickau','Eger','No','Yes'),
	array('Zwickau','Saaz','No','Yes'),
	array('Teplitz','Tetschen','No','Yes'),
	array('Teplitz','Aussig','No','Yes'),
	array('Teplitz','Saaz','No','Yes'),
	array('Teplitz','Schlan','No','Yes'),
	array('Teplitz','Leitmeritz','No','Yes'),
	array('Tetschen','Aussig','No','Yes'),
	array('Tetschen','Friedland','No','Yes'),
	array('Tetschen','Bautzen','No','Yes'),
	array('Aussig','Friedland','No','Yes'),
	array('Aussig','Saaz','Yes','No'),
	array('Aussig','Leitmeritz','No','Yes'),
	array('Aussig','Altstadt','Yes','Yes'),
	array('Aussig','Bunzlau','No','Yes'),
	array('Aussig','Königgratz','Yes','No'),
	array('Aussig','Neustadt','Yes','No'),
	array('Friedland','Hirschberg','No','Yes'),
	array('Friedland','Bunzlau','No','Yes'),
	array('Friedland','Oreb','No','Yes'),
	array('Hirschberg','Waldenburg','No','Yes'),
	array('Hirschberg','Oreb','No','Yes'),
	array('Waldenburg','Oppeln','No','Yes'),
	array('Waldenburg','Oreb','No','Yes'),
	array('Waldenburg','Leitomischl','No','Yes'),
	array('Oppeln','Ostrau','No','Yes'),
	array('Oppeln','Leitomischl','No','Yes'),
	array('Oppeln','Schönberg','No','Yes'),
	array('Oppeln','Olmütz','No','Yes'),
	array('Oppeln','Prerau','No','Yes'),
	array('Oppeln','Ratibor','No','Yes'),
	array('Oppeln','Tschenstochau','No','Yes'),
	array('Ostrau','Neu Sandec','No','Yes'),
	array('Ostrau','Prerau','No','Yes'),
	array('Ostrau','Kremsier','No','Yes'),
	array('Ostrau','Sillein','No','Yes'),
	array('Ostrau','Ratibor','Yes','Yes'),
	array('Neu Sandec','Krakau','No','Yes'),
	array('Neu Sandec','Sillein','No','Yes'),
	array('Neu Sandec','Kaschau','No','Yes'),
	array('Neu Sandec','Ratibor','No','Yes'),
	array('Krakau','Kaschau','No','Yes'),
	array('Krakau','Ratibor','No','Yes'),
	array('Krakau','Tschenstochau','No','Yes'),
	array('Bayreuth','Eger','No','Yes'),
	array('Bayreuth','Regensburg','No','Yes'),
	array('Bayreuth','Fürth','No','Yes'),
	array('Bayreuth','Tachau','No','Yes'),
	array('Eger','Saaz','Yes','Yes'),
	array('Eger','Tachau','No','Yes'),
	array('Eger','Rakonitz','No','Yes'),
	array('Saaz','Schlan','No','Yes'),
	array('Saaz','Altstadt','Yes','No'),
	array('Saaz','Königgratz','Yes','No'),
	array('Saaz','Rakonitz','No','Yes'),
	array('Schlan','Leitmeritz','No','Yes'),
	array('Schlan','Rakonitz','No','Yes'),
	array('Schlan','Kladno','No','Yes'),
	array('Leitmeritz','Altstadt','No','Yes'),
	array('Leitmeritz','Kladno','No','Yes'),
	array('Altstadt','Bunzlau','No','Yes'),
	array('Altstadt','Kladno','No','Yes'),
	array('Altstadt','Beneschau','No','Yes'),
	array('Altstadt','Neustadt','Yes','Yes'),
	array('Altstadt','Pilsen','Yes','No'),
	array('Altstadt','Rokitzan','Yes','No'),
	array('Bunzlau','Königgratz','No','Yes'),
	array('Bunzlau','Oreb','No','Yes'),
	array('Bunzlau','Neustadt','No','Yes'),
	array('Bunzlau','Kuttenberg','No','Yes'),
	array('Königgratz','Oreb','No','Yes'),
	array('Königgratz','Leitomischl','No','Yes'),
	array('Königgratz','Kuttenberg','No','Yes'),
	array('Königgratz','Pardubitz','No','Yes'),
	array('Oreb','Leitomischl','No','Yes'),
	array('Leitomischl','Schönberg','No','Yes'),
	array('Leitomischl','Pardubitz','No','Yes'),
	array('Schönberg','Olmütz','No','Yes'),
	array('Schönberg','Pardubitz','No','Yes'),
	array('Schönberg','Iglau','No','Yes'),
	array('Schönberg','Ratibor','No','Yes'),
	array('Olmütz','Prerau','No','Yes'),
	array('Olmütz','Pardubitz','No','Yes'),
	array('Olmütz','Brünn','No','Yes'),
	array('Olmütz','Iglau','No','Yes'),
	array('Olmütz','Znoim','No','Yes'),
	array('Olmütz','Lundenburg','Yes','No'),
	array('Olmütz','Wien','Yes','No'),
	array('Olmütz','Pressburg','Yes','No'),
	array('Olmütz','Ratibor','No','Yes'),
	array('Prerau','Kremsier','No','Yes'),
	array('Prerau','Brünn','No','Yes'),
	array('Prerau','Ratibor','No','Yes'),
	array('Kremsier','Sillein','No','Yes'),
	array('Kremsier','Kaschau','No','Yes'),
	array('Kremsier','Brünn','No','Yes'),
	array('Kremsier','Trentschin','No','Yes'),
	array('Kremsier','Radisch','No','Yes'),
	array('Sillein','Kaschau','No','Yes'),
	array('Sillein','Pressburg','Yes','No'),
	array('Sillein','Ofen','Yes','No'),
	array('Kaschau','Trentschin','No','Yes'),
	array('Kaschau','Ofen','No','Yes'),
	array('Regensburg','Fürth','No','Yes'),
	array('Regensburg','Landshut','No','Yes'),
	array('Regensburg','Straubing','No','Yes'),
	array('Regensburg','München','Yes','No'),
	array('Regensburg','Passau','Yes','No'),
	array('Fürth','Tachau','No','Yes'),
	array('Fürth','Straubing','No','Yes'),
	array('Fürth','Pilsen','No','Yes'),
	array('Tachau','Rakonitz','No','Yes'),
	array('Tachau','Pilsen','Yes','Yes'),
	array('Rakonitz','Kladno','No','Yes'),
	array('Rakonitz','Pilsen','No','Yes'),
	array('Rakonitz','Rokitzan','No','Yes'),
	array('Kladno','Beneschau','No','Yes'),
	array('Kladno','Pilsen','No','Yes'),
	array('Kladno','Rokitzan','No','Yes'),
	array('Kladno','Pibrams','No','Yes'),
	array('Beneschau','Neustadt','No','Yes'),
	array('Beneschau','Kuttenberg','No','Yes'),
	array('Beneschau','Pibrams','No','Yes'),
	array('Beneschau','Tabor','No','Yes'),
	array('Neustadt','Kuttenberg','No','Yes'),
	array('Neustadt','Pisek','Yes','No'),
	array('Neustadt','Tabor','Yes','No'),
	array('Neustadt','Budweis','Yes','No'),
	array('Kuttenberg','Pardubitz','No','Yes'),
	array('Kuttenberg','Tabor','No','Yes'),
	array('Kuttenberg','Pilgrams','No','Yes'),
	array('Kuttenberg','Iglau','No','Yes'),
	array('Pardubitz','Iglau','No','Yes'),
	array('Brünn','Iglau','Yes','No'),
	array('Brünn','Znoim','No','Yes'),
	array('Brünn','Lundenburg','Yes','Yes'),
	array('Brünn','Radisch','No','Yes'),
	array('Landshut','Straubing','No','Yes'),
	array('Landshut','München','No','Yes'),
	array('Landshut','Passau','No','Yes'),
	array('Straubing','Pilsen','No','Yes'),
	array('Straubing','Klattau','No','Yes'),
	array('Straubing','München','No','Yes'),
	array('Pilsen','Klattau','No','Yes'),
	array('Pilsen','Rokitzan','Yes','Yes'),
	array('Klattau','Rokitzan','No','Yes'),
	array('Klattau','Pisek','No','Yes'),
	array('Klattau','München','No','Yes'),
	array('Klattau','Passau','No','Yes'),
	array('Klattau','Prachatitz','No','Yes'),
	array('Rokitzan','Pibrams','No','Yes'),
	array('Rokitzan','Pisek','No','Yes'),
	array('Pibrams','Pisek','No','Yes'),
	array('Pibrams','Tabor','No','Yes'),
	array('Pisek','Tabor','Yes','Yes'),
	array('Pisek','Prachatitz','No','Yes'),
	array('Pisek','Budweis','Yes','Yes'),
	array('Tabor','Pilgrams','No','Yes'),
	array('Tabor','Budweis','Yes','Yes'),
	array('Pilgrams','Iglau','No','Yes'),
	array('Pilgrams','Budweis','No','Yes'),
	array('Iglau','Budweis','No','Yes'),
	array('Iglau','Znoim','No','Yes'),
	array('Iglau','Lundenburg','Yes','No'),
	array('München','Passau','Yes','Yes'),
	array('München','Salzburg','No','Yes'),
	array('Passau','Prachatitz','No','Yes'),
	array('Passau','Salzburg','No','Yes'),
	array('Passau','Linz','Yes','No'),
	array('Prachatitz','Budweis','No','Yes'),
	array('Prachatitz','Salzburg','No','Yes'),
	array('Prachatitz','Linz','No','Yes'),
	array('Budweis','Znoim','No','Yes'),
	array('Budweis','Linz','No','Yes'),
	array('Znoim','Lundenburg','No','Yes'),
	array('Znoim','Linz','No','Yes'),
	array('Znoim','Hollabrunn','No','Yes'),
	array('Lundenburg','Hollabrunn','No','Yes'),
	array('Lundenburg','Wien','Yes','Yes'),
	array('Lundenburg','Pressburg','Yes','Yes'),
	array('Lundenburg','Radisch','No','Yes'),
	array('Salzburg','Linz','No','Yes'),
	array('Salzburg','Sankt Pölten','No','Yes'),
	array('Salzburg','Pressburg','No','Yes'),
	array('Linz','Hollabrunn','No','Yes'),
	array('Linz','Wien','Yes','No'),
	array('Linz','Sankt Pölten','No','Yes'),
	array('Hollabrunn','Wien','No','Yes'),
	array('Hollabrunn','Sankt Pölten','No','Yes'),
	array('Wien','Sankt Pölten','No','Yes'),
	array('Wien','Pressburg','Yes','Yes'),
	array('Sankt Pölten','Pressburg','No','Yes'),
	array('Pressburg','Trentschin','No','Yes'),
	array('Pressburg','Ofen','Yes','Yes'),
	array('Pressburg','Radisch','No','Yes'),
	array('Trentschin','Ofen','No','Yes'),
	array('Trentschin','Radisch','No','Yes')
);

foreach($bordersRawData as $borderRawRow)
{
	list($from, $to, $fleets, $armies)=$borderRawRow;
	InstallTerritory::$Territories[$to]  ->addBorder(InstallTerritory::$Territories[$from],$fleets,$armies);
}
unset($bordersRawData);

InstallTerritory::runSQL($this->mapID);
InstallCache::terrJSON($this->territoriesJSONFile(),$this->mapID);
?>
