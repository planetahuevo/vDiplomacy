<?php
// This is file installs the map data for the AustrianSuccession variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Far Atlantic Ocean', 'Sea', 'No', 0, 50, 370, 49, 195),
	array('Near Atlantic Ocean', 'Sea', 'No', 0, 131, 600, 130, 438),
	array('Norwegian Sea', 'Sea', 'No', 0, 366, 162, 408, 60),
	array('Irish Sea', 'Sea', 'No', 0, 223, 482, 218, 306),
	array('English Channel', 'Sea', 'No', 0, 223, 554, 219, 374),
	array('North Sea', 'Sea', 'No', 0, 404, 334, 406, 162),
	array('Heligoland Bight', 'Sea', 'No', 0, 482, 406, 481, 232),
	array('Skagerrak', 'Sea', 'No', 0, 547, 308, 546, 137),
	array('Baltic Sea', 'Sea', 'No', 0, 684, 368, 684, 193),
	array('Gulf of Bothnia', 'Sea', 'No', 0, 687, 174, 703, 90),
	array('Gulf of Lion', 'Sea', 'No', 0, 432, 802, 440, 627),
	array('Western Mediterranean', 'Sea', 'No', 0, 399, 913, 414, 746),
	array('Tyrrhenian Sea', 'Sea', 'No', 0, 578, 858, 584, 686),
	array('Adriatic Sea', 'Sea', 'No', 0, 645, 769, 647, 592),
	array('Eastern Mediterranean', 'Sea', 'No', 0, 769, 998, 775, 821),
	array('Aegean Sea', 'Sea', 'No', 0, 920, 918, 923, 747),
	array('Black Sea', 'Sea', 'No', 0, 1065, 678, 1000, 522),
	array('Ireland', 'Coast', 'Yes', 3, 231, 396, 235, 222),
	array('Scotland', 'Coast', 'Yes', 3, 307, 341, 307, 167),
	array('York', 'Coast', 'No', 3, 329, 444, 330, 274),
	array('London', 'Coast', 'Yes', 3, 374, 481, 370, 306),
	array('Bristol', 'Coast', 'Yes', 3, 277, 517, 275, 342),
	array('Brest', 'Coast', 'Yes', 4, 278, 600, 276, 423),
	array('Rouen', 'Coast', 'Yes', 4, 403, 547, 401, 374),
	array('Paris', 'Land', 'Yes', 4, 360, 611, 362, 432),
	array('Bordeaux', 'Coast', 'Yes', 4, 347, 677, 351, 500),
	array('Burgundy', 'Land', 'No', 4, 451, 646, 448, 474),
	array('Provence', 'Coast', 'No', 4, 431, 726, 435, 552),
	array('York (West Coast)', 'Coast', 'No', 3, 311, 434, 322, 266),
	array('York (East Coast)', 'Coast', 'No', 3, 359, 433, 356, 258),
	array('Madrid', 'Coast', 'Yes', 9, 210, 767, 211, 604),
	array('Valencia', 'Coast', 'Yes', 9, 260, 848, 263, 677),
	array('Seville', 'Coast', 'Yes', 9, 164, 878, 167, 698),
	array('Portugal', 'Coast', 'Yes', 0, 122, 812, 118, 645),
	array('Morocco', 'Coast', 'Yes', 0, 149, 990, 150, 822),
	array('Algeria', 'Coast', 'No', 0, 375, 986, 374, 812),
	array('Tunis', 'Coast', 'Yes', 0, 526, 988, 523, 814),
	array('Sardinia', 'Coast', 'Yes', 6, 512, 883, 514, 707),
	array('Corsica', 'Coast', 'No', 0, 522, 798, 522, 623),
	array('Piedmont', 'Coast', 'Yes', 6, 506, 726, 507, 551),
	array('Savoy', 'Land', 'Yes', 6, 465, 695, 464, 523),
	array('Milan', 'Coast', 'Yes', 1, 532, 719, 532, 542),
	array('Venice', 'Coast', 'Yes', 0, 571, 709, 574, 534),
	array('Papal States', 'Coast', 'Yes', 0, 595, 793, 595, 624),
	array('Papal States (East Coast)', 'Coast', 'Yes', 0, 591, 746, 598, 571),
	array('Papal States (West Coast)', 'Coast', 'Yes', 0, 587, 810, 587, 633),
	array('Apulia', 'Coast', 'No', 9, 683, 833, 690, 662),
	array('Naples', 'Coast', 'Yes', 9, 659, 845, 695, 720),
	array('Siciliy', 'Coast', 'Yes', 9, 618, 938, 623, 765),
	array('Tuscany', 'Coast', 'No', 0, 567, 756, 568, 586),
	array('Lorraine', 'Land', 'Yes', 0, 462, 612, 461, 437),
	array('Tyrol', 'Land', 'No', 1, 564, 673, 567, 500),
	array('Worms', 'Land', 'Yes', 0, 518, 600, 519, 432),
	array('Austrian Netherlands', 'Coast', 'No', 1, 432, 540, 435, 366),
	array('Frankfurt', 'Land', 'Yes', 0, 484, 536, 479, 362),
	array('Cassel', 'Land', 'No', 0, 552, 538, 543, 356),
	array('Munich', 'Land', 'Yes', 2, 563, 627, 565, 446),
	array('Bohemia', 'Land', 'No', 1, 642, 561, 646, 388),
	array('Vienna', 'Land', 'Yes', 1, 639, 616, 646, 446),
	array('Regensburg', 'Land', 'Yes', 2, 572, 601, 575, 422),
	array('Saxony', 'Land', 'Yes', 0, 603, 534, 600, 359),
	array('Berlin', 'Land', 'Yes', 7, 603, 483, 606, 310),
	array('Silesia', 'Land', 'Yes', 1, 665, 525, 663, 348),
	array('United Netherlands', 'Coast', 'Yes', 0, 452, 499, 455, 329),
	array('Churchlands', 'Coast', 'Yes', 2, 497, 488, 497, 313),
	array('Hanover', 'Coast', 'No', 3, 534, 460, 535, 287),
	array('Hamburg', 'Coast', 'No', 0, 591, 437, 592, 262),
	array('Denmark', 'Coast', 'Yes', 0, 538, 368, 534, 194),
	array('Sweden', 'Coast', 'Yes', 0, 617, 223, 618, 46),
	array('Norway', 'Coast', 'Yes', 0, 536, 219, 538, 46),
	array('Stettin', 'Coast', 'Yes', 7, 643, 445, 639, 278),
	array('Carinthia', 'Coast', 'No', 1, 627, 689, 630, 514),
	array('Croatia', 'Coast', 'Yes', 1, 694, 649, 699, 478),
	array('Budapest', 'Land', 'Yes', 1, 771, 587, 770, 414),
	array('Transylvania', 'Land', 'No', 1, 808, 639, 806, 463),
	array('East Prussia', 'Coast', 'Yes', 7, 754, 406, 755, 241),
	array('Great Poland', 'Coast', 'No', 0, 683, 450, 685, 280),
	array('Warsaw', 'Land', 'Yes', 0, 751, 457, 757, 282),
	array('Lublin', 'Land', 'Yes', 0, 733, 525, 760, 351),
	array('Lithuania', 'Coast', 'No', 0, 799, 359, 799, 192),
	array('Pinsk', 'Land', 'Yes', 0, 832, 451, 830, 274),
	array('Podolina', 'Land', 'No', 0, 899, 509, 900, 332),
	array('Minsk', 'Land', 'No', 0, 884, 381, 890, 210),
	array('Livonia', 'Coast', 'No', 8, 798, 270, 799, 99),
	array('Finland', 'Coast', 'No', 0, 777, 152, 811, 17),
	array('St. Petersburg', 'Coast', 'Yes', 8, 930, 189, 856, 85),
	array('Moscow', 'Land', 'Yes', 8, 985, 266, 962, 101),
	array('Kiev', 'Coast', 'Yes', 8, 999, 460, 983, 291),
	array('Moldavia', 'Land', 'Yes', 0, 893, 596, 894, 427),
	array('Dalmatia', 'Coast', 'No', 0, 689, 761, 687, 588),
	array('Yesidan', 'Coast', 'No', 5, 954, 622, 951, 451),
	array('Wallachia', 'Land', 'No', 0, 896, 690, 894, 518),
	array('Belgrade', 'Land', 'Yes', 0, 801, 734, 806, 553),
	array('Bosnia', 'Coast', 'No', 5, 718, 734, 720, 565),
	array('Bulgaria', 'Coast', 'Yes', 5, 876, 756, 894, 577),
	array('Servia', 'Land', 'No', 5, 800, 777, 798, 602),
	array('Greece', 'Coast', 'Yes', 5, 811, 838, 816, 665),
	array('Albania', 'Coast', 'No', 5, 771, 842, 773, 665),
	array('Constantinople', 'Coast', 'Yes', 5, 923, 794, 927, 626),
	array('Anatolia', 'Coast', 'No', 5, 1083, 812, 1007, 686),
	array('Anatolia (North Coast)', 'Coast', 'No', 5, 1051, 758, 1031, 630),
	array('Anatolia (South Coast)', 'Coast', 'No', 5, 1045, 898, 1007, 734),
	array('Languedoc', 'Coast', 'No', 4, 363, 746, 366, 573),
	array('Gascony', 'Coast', 'No', 4, 306, 734, 313, 561),
	array('Bay of Biscay', 'Sea', 'No', 0, 251, 654, 247, 476),
	array('Champange', 'Land', 'No', 4, 427, 597, 426, 426),
	array('Lemberg', 'Land', 'No', 0, 836, 543, 836, 368),
	array('Ionian Sea', 'Sea', 'No', 0, 752, 915, 751, 747)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Far Atlantic Ocean','Near Atlantic Ocean','Yes','No'),
	array('Far Atlantic Ocean','Norwegian Sea','Yes','No'),
	array('Far Atlantic Ocean','Irish Sea','Yes','No'),
	array('Far Atlantic Ocean','Scotland','Yes','No'),
	array('Far Atlantic Ocean','Morocco','Yes','No'),
	array('Near Atlantic Ocean','Irish Sea','Yes','No'),
	array('Near Atlantic Ocean','English Channel','Yes','No'),
	array('Near Atlantic Ocean','Western Mediterranean','Yes','No'),
	array('Near Atlantic Ocean','Ireland','Yes','No'),
	array('Near Atlantic Ocean','Brest','Yes','No'),
	array('Near Atlantic Ocean','Madrid','Yes','No'),
	array('Near Atlantic Ocean','Seville','Yes','No'),
	array('Near Atlantic Ocean','Portugal','Yes','No'),
	array('Near Atlantic Ocean','Morocco','Yes','No'),
	array('Near Atlantic Ocean','Bay of Biscay','Yes','No'),
	array('Norwegian Sea','North Sea','Yes','No'),
	array('Norwegian Sea','Scotland','Yes','No'),
	array('Norwegian Sea','Norway','Yes','No'),
	array('Irish Sea','English Channel','Yes','No'),
	array('Irish Sea','Ireland','Yes','No'),
	array('Irish Sea','Scotland','Yes','No'),
	array('Irish Sea','Bristol','Yes','No'),
	array('Irish Sea','York (West Coast)','Yes','No'),
	array('English Channel','North Sea','Yes','No'),
	array('English Channel','London','Yes','No'),
	array('English Channel','Bristol','Yes','No'),
	array('English Channel','Brest','Yes','No'),
	array('English Channel','Rouen','Yes','No'),
	array('North Sea','Heligoland Bight','Yes','No'),
	array('North Sea','Skagerrak','Yes','No'),
	array('North Sea','Scotland','Yes','No'),
	array('North Sea','London','Yes','No'),
	array('North Sea','Rouen','Yes','No'),
	array('North Sea','York (East Coast)','Yes','No'),
	array('North Sea','Austrian Netherlands','Yes','No'),
	array('North Sea','United Netherlands','Yes','No'),
	array('North Sea','Denmark','Yes','No'),
	array('North Sea','Norway','Yes','No'),
	array('Heligoland Bight','United Netherlands','Yes','No'),
	array('Heligoland Bight','Churchlands','Yes','No'),
	array('Heligoland Bight','Hanover','Yes','No'),
	array('Heligoland Bight','Denmark','Yes','No'),
	array('Skagerrak','Denmark','Yes','No'),
	array('Skagerrak','Sweden','Yes','No'),
	array('Skagerrak','Norway','Yes','No'),
	array('Baltic Sea','Gulf of Bothnia','Yes','No'),
	array('Baltic Sea','Hamburg','Yes','No'),
	array('Baltic Sea','Denmark','Yes','No'),
	array('Baltic Sea','Sweden','Yes','No'),
	array('Baltic Sea','Stettin','Yes','No'),
	array('Baltic Sea','East Prussia','Yes','No'),
	array('Baltic Sea','Great Poland','Yes','No'),
	array('Baltic Sea','Lithuania','Yes','No'),
	array('Baltic Sea','Livonia','Yes','No'),
	array('Gulf of Bothnia','Sweden','Yes','No'),
	array('Gulf of Bothnia','Livonia','Yes','No'),
	array('Gulf of Bothnia','Finland','Yes','No'),
	array('Gulf of Bothnia','St. Petersburg','Yes','No'),
	array('Gulf of Lion','Western Mediterranean','Yes','No'),
	array('Gulf of Lion','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Lion','Provence','Yes','No'),
	array('Gulf of Lion','Valencia','Yes','No'),
	array('Gulf of Lion','Sardinia','Yes','No'),
	array('Gulf of Lion','Corsica','Yes','No'),
	array('Gulf of Lion','Piedmont','Yes','No'),
	array('Gulf of Lion','Languedoc','Yes','No'),
	array('Western Mediterranean','Tyrrhenian Sea','Yes','No'),
	array('Western Mediterranean','Valencia','Yes','No'),
	array('Western Mediterranean','Seville','Yes','No'),
	array('Western Mediterranean','Morocco','Yes','No'),
	array('Western Mediterranean','Algeria','Yes','No'),
	array('Western Mediterranean','Tunis','Yes','No'),
	array('Western Mediterranean','Sardinia','Yes','No'),
	array('Tyrrhenian Sea','Eastern Mediterranean','Yes','No'),
	array('Tyrrhenian Sea','Tunis','Yes','No'),
	array('Tyrrhenian Sea','Sardinia','Yes','No'),
	array('Tyrrhenian Sea','Corsica','Yes','No'),
	array('Tyrrhenian Sea','Piedmont','Yes','No'),
	array('Tyrrhenian Sea','Milan','Yes','No'),
	array('Tyrrhenian Sea','Papal States (West Coast)','Yes','No'),
	array('Tyrrhenian Sea','Naples','Yes','No'),
	array('Tyrrhenian Sea','Siciliy','Yes','No'),
	array('Tyrrhenian Sea','Tuscany','Yes','No'),
	array('Tyrrhenian Sea','Ionian Sea','Yes','No'),
	array('Adriatic Sea','Venice','Yes','No'),
	array('Adriatic Sea','Papal States (East Coast)','Yes','No'),
	array('Adriatic Sea','Apulia','Yes','No'),
	array('Adriatic Sea','Carinthia','Yes','No'),
	array('Adriatic Sea','Croatia','Yes','No'),
	array('Adriatic Sea','Dalmatia','Yes','No'),
	array('Adriatic Sea','Bosnia','Yes','No'),
	array('Adriatic Sea','Albania','Yes','No'),
	array('Adriatic Sea','Ionian Sea','Yes','No'),
	array('Eastern Mediterranean','Aegean Sea','Yes','No'),
	array('Eastern Mediterranean','Tunis','Yes','No'),
	array('Eastern Mediterranean','Siciliy','Yes','No'),
	array('Eastern Mediterranean','Greece','Yes','No'),
	array('Eastern Mediterranean','Anatolia (South Coast)','Yes','No'),
	array('Eastern Mediterranean','Ionian Sea','Yes','No'),
	array('Aegean Sea','Greece','Yes','No'),
	array('Aegean Sea','Constantinople','Yes','No'),
	array('Aegean Sea','Anatolia (South Coast)','Yes','No'),
	array('Black Sea','Kiev','Yes','No'),
	array('Black Sea','Yesidan','Yes','No'),
	array('Black Sea','Bulgaria','Yes','No'),
	array('Black Sea','Constantinople','Yes','No'),
	array('Black Sea','Anatolia (North Coast)','Yes','No'),
	array('Ireland','Scotland','Yes','Yes'),
	array('Scotland','York','No','Yes'),
	array('Scotland','York (West Coast)','Yes','No'),
	array('Scotland','York (East Coast)','Yes','No'),
	array('York','London','No','Yes'),
	array('York','Bristol','No','Yes'),
	array('London','Bristol','Yes','Yes'),
	array('London','York (East Coast)','Yes','No'),
	array('Bristol','York (West Coast)','Yes','No'),
	array('Brest','Rouen','Yes','Yes'),
	array('Brest','Paris','No','Yes'),
	array('Brest','Bordeaux','Yes','Yes'),
	array('Brest','Bay of Biscay','Yes','No'),
	array('Rouen','Paris','No','Yes'),
	array('Rouen','Austrian Netherlands','Yes','Yes'),
	array('Rouen','Champange','No','Yes'),
	array('Paris','Bordeaux','No','Yes'),
	array('Paris','Burgundy','No','Yes'),
	array('Paris','Champange','No','Yes'),
	array('Bordeaux','Burgundy','No','Yes'),
	array('Bordeaux','Provence','No','Yes'),
	array('Bordeaux','Languedoc','No','Yes'),
	array('Bordeaux','Gascony','Yes','Yes'),
	array('Bordeaux','Bay of Biscay','Yes','No'),
	array('Burgundy','Provence','No','Yes'),
	array('Burgundy','Lorraine','No','Yes'),
	array('Burgundy','Worms','No','Yes'),
	array('Burgundy','Champange','No','Yes'),
	array('Provence','Piedmont','Yes','Yes'),
	array('Provence','Savoy','No','Yes'),
	array('Provence','Languedoc','Yes','Yes'),
	array('Madrid','Valencia','No','Yes'),
	array('Madrid','Seville','No','Yes'),
	array('Madrid','Portugal','Yes','Yes'),
	array('Madrid','Gascony','Yes','Yes'),
	array('Madrid','Bay of Biscay','Yes','No'),
	array('Valencia','Seville','Yes','Yes'),
	array('Valencia','Languedoc','Yes','Yes'),
	array('Valencia','Gascony','No','Yes'),
	array('Seville','Portugal','Yes','Yes'),
	array('Morocco','Algeria','Yes','Yes'),
	array('Algeria','Tunis','Yes','Yes'),
	array('Sardinia','Corsica','Yes','Yes'),
	array('Piedmont','Savoy','No','Yes'),
	array('Piedmont','Milan','Yes','Yes'),
	array('Savoy','Milan','No','Yes'),
	array('Milan','Venice','No','Yes'),
	array('Milan','Papal States','No','Yes'),
	array('Milan','Tuscany','Yes','Yes'),
	array('Venice','Papal States','No','Yes'),
	array('Venice','Papal States (East Coast)','Yes','No'),
	array('Venice','Tyrol','No','Yes'),
	array('Venice','Carinthia','Yes','Yes'),
	array('Papal States','Apulia','No','Yes'),
	array('Papal States','Naples','No','Yes'),
	array('Papal States','Tuscany','No','Yes'),
	array('Papal States (East Coast)','Apulia','Yes','No'),
	array('Papal States (West Coast)','Naples','Yes','No'),
	array('Papal States (West Coast)','Tuscany','Yes','No'),
	array('Apulia','Naples','Yes','Yes'),
	array('Apulia','Ionian Sea','Yes','No'),
	array('Naples','Siciliy','Yes','Yes'),
	array('Naples','Ionian Sea','Yes','No'),
	array('Siciliy','Ionian Sea','Yes','No'),
	array('Lorraine','Worms','No','Yes'),
	array('Lorraine','Austrian Netherlands','No','Yes'),
	array('Lorraine','Frankfurt','No','Yes'),
	array('Lorraine','Champange','No','Yes'),
	array('Tyrol','Worms','No','Yes'),
	array('Tyrol','Munich','No','Yes'),
	array('Tyrol','Vienna','No','Yes'),
	array('Tyrol','Carinthia','No','Yes'),
	array('Worms','Frankfurt','No','Yes'),
	array('Worms','Cassel','No','Yes'),
	array('Worms','Munich','No','Yes'),
	array('Worms','Regensburg','No','Yes'),
	array('Austrian Netherlands','Frankfurt','No','Yes'),
	array('Austrian Netherlands','United Netherlands','Yes','Yes'),
	array('Austrian Netherlands','Champange','No','Yes'),
	array('Frankfurt','Cassel','No','Yes'),
	array('Frankfurt','United Netherlands','No','Yes'),
	array('Frankfurt','Churchlands','No','Yes'),
	array('Cassel','Bohemia','No','Yes'),
	array('Cassel','Regensburg','No','Yes'),
	array('Cassel','Saxony','No','Yes'),
	array('Cassel','Berlin','No','Yes'),
	array('Cassel','Churchlands','No','Yes'),
	array('Cassel','Hanover','No','Yes'),
	array('Munich','Vienna','No','Yes'),
	array('Munich','Regensburg','No','Yes'),
	array('Bohemia','Vienna','No','Yes'),
	array('Bohemia','Regensburg','No','Yes'),
	array('Bohemia','Saxony','No','Yes'),
	array('Bohemia','Silesia','No','Yes'),
	array('Bohemia','Budapest','No','Yes'),
	array('Bohemia','Lublin','No','Yes'),
	array('Vienna','Regensburg','No','Yes'),
	array('Vienna','Carinthia','No','Yes'),
	array('Vienna','Croatia','No','Yes'),
	array('Vienna','Budapest','No','Yes'),
	array('Saxony','Berlin','No','Yes'),
	array('Saxony','Silesia','No','Yes'),
	array('Berlin','Silesia','No','Yes'),
	array('Berlin','Hanover','No','Yes'),
	array('Berlin','Hamburg','No','Yes'),
	array('Berlin','Stettin','No','Yes'),
	array('Berlin','Great Poland','No','Yes'),
	array('Silesia','Great Poland','No','Yes'),
	array('Silesia','Lublin','No','Yes'),
	array('United Netherlands','Churchlands','Yes','Yes'),
	array('Churchlands','Hanover','Yes','Yes'),
	array('Hanover','Hamburg','No','Yes'),
	array('Hanover','Denmark','Yes','Yes'),
	array('Hamburg','Denmark','Yes','Yes'),
	array('Hamburg','Stettin','Yes','Yes'),
	array('Denmark','Sweden','Yes','Yes'),
	array('Sweden','Norway','Yes','Yes'),
	array('Sweden','Finland','Yes','Yes'),
	array('Norway','Finland','No','Yes'),
	array('Stettin','Great Poland','Yes','Yes'),
	array('Carinthia','Croatia','Yes','Yes'),
	array('Carinthia','Dalmatia','Yes','Yes'),
	array('Croatia','Budapest','No','Yes'),
	array('Croatia','Transylvania','No','Yes'),
	array('Croatia','Dalmatia','Yes','Yes'),
	array('Croatia','Bosnia','No','Yes'),
	array('Budapest','Transylvania','No','Yes'),
	array('Budapest','Lublin','No','Yes'),
	array('Budapest','Lemberg','No','Yes'),
	array('Transylvania','Moldavia','No','Yes'),
	array('Transylvania','Wallachia','No','Yes'),
	array('Transylvania','Belgrade','No','Yes'),
	array('Transylvania','Bosnia','No','Yes'),
	array('Transylvania','Lemberg','No','Yes'),
	array('East Prussia','Great Poland','Yes','Yes'),
	array('East Prussia','Warsaw','No','Yes'),
	array('East Prussia','Lithuania','Yes','Yes'),
	array('Great Poland','Warsaw','No','Yes'),
	array('Great Poland','Lublin','No','Yes'),
	array('Warsaw','Lublin','No','Yes'),
	array('Warsaw','Lithuania','No','Yes'),
	array('Warsaw','Pinsk','No','Yes'),
	array('Lublin','Pinsk','No','Yes'),
	array('Lublin','Podolina','No','Yes'),
	array('Lublin','Lemberg','No','Yes'),
	array('Lithuania','Pinsk','No','Yes'),
	array('Lithuania','Minsk','No','Yes'),
	array('Lithuania','Livonia','Yes','Yes'),
	array('Lithuania','St. Petersburg','No','Yes'),
	array('Pinsk','Minsk','No','Yes'),
	array('Podolina','Minsk','No','Yes'),
	array('Podolina','Kiev','No','Yes'),
	array('Podolina','Moldavia','No','Yes'),
	array('Podolina','Yesidan','No','Yes'),
	array('Podolina','Lemberg','No','Yes'),
	array('Minsk','St. Petersburg','No','Yes'),
	array('Minsk','Moscow','No','Yes'),
	array('Minsk','Kiev','No','Yes'),
	array('Livonia','St. Petersburg','Yes','Yes'),
	array('Finland','St. Petersburg','Yes','Yes'),
	array('St. Petersburg','Moscow','No','Yes'),
	array('Moscow','Kiev','No','Yes'),
	array('Kiev','Yesidan','Yes','Yes'),
	array('Moldavia','Yesidan','No','Yes'),
	array('Moldavia','Wallachia','No','Yes'),
	array('Moldavia','Lemberg','No','Yes'),
	array('Dalmatia','Bosnia','Yes','Yes'),
	array('Yesidan','Wallachia','No','Yes'),
	array('Yesidan','Bulgaria','Yes','Yes'),
	array('Wallachia','Belgrade','No','Yes'),
	array('Wallachia','Bulgaria','No','Yes'),
	array('Belgrade','Bosnia','No','Yes'),
	array('Belgrade','Bulgaria','No','Yes'),
	array('Belgrade','Servia','No','Yes'),
	array('Bosnia','Servia','No','Yes'),
	array('Bosnia','Greece','No','Yes'),
	array('Bosnia','Albania','Yes','Yes'),
	array('Bulgaria','Servia','No','Yes'),
	array('Bulgaria','Greece','No','Yes'),
	array('Bulgaria','Constantinople','Yes','Yes'),
	array('Servia','Greece','No','Yes'),
	array('Greece','Albania','Yes','Yes'),
	array('Greece','Constantinople','Yes','Yes'),
	array('Greece','Ionian Sea','Yes','No'),
	array('Albania','Ionian Sea','Yes','No'),
	array('Constantinople','Anatolia','No','Yes'),
	array('Constantinople','Anatolia (North Coast)','Yes','No'),
	array('Constantinople','Anatolia (South Coast)','Yes','No'),
	array('Languedoc','Gascony','No','Yes'),
	array('Gascony','Bay of Biscay','Yes','No')
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
