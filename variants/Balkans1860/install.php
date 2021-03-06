<?php
// This is file installs the map data for the Balkans1860 variant
defined('IN_CODE') or die('This script can not be run by itself.');
require_once("variants/install.php");

InstallTerritory::$Territories=array();
$countries=$this->countries;
$territoryRawData=array(
	array('Adriatic Sea', 'Sea', 'No', 0, 428, 410, 199, 195),
	array('Aegean Sea', 'Sea', 'No', 0, 1116, 798, 519, 381),
	array('Agram', 'Coast', 'Yes', 0, 471, 272, 219, 130),
	array('Agrinio', 'Coast', 'No', 3, 840, 770, 391, 367),
	array('Ancona', 'Coast', 'Yes', 0, 266, 444, 112, 183),
	array('Ankara', 'Coast', 'Yes', 5, 1555, 556, 724, 265),
	array('Antalya', 'Coast', 'No', 5, 1444, 928, 673, 454),
	array('Athens', 'Coast', 'Yes', 3, 1037, 836, 483, 405),
	array('Bay of Kotor', 'Sea', 'No', 0, 608, 530, 283, 253),
	array('Beograd', 'Land', 'Yes', 7, 746, 242, 347, 115),
	array('Bessarabian Coast', 'Sea', 'No', 0, 1354, 225, 630, 107),
	array('Bitola', 'Land', 'Yes', 0, 828, 600, 387, 286),
	array('Black Sea', 'Sea', 'No', 0, 1520, 341, 699, 133),
	array('Bologna', 'Coast', 'No', 4, 189, 278, 88, 133),
	array('Bosporus', 'Sea', 'No', 0, 1409, 518, 636, 227),
	array('Brasov', 'Land', 'No', 0, 1116, 120, 519, 57),
	array('Brindisi', 'Coast', 'No', 4, 539, 632, 251, 302),
	array('Bucuresti', 'Land', 'Yes', 6, 1059, 210, 493, 100),
	array('Budapest', 'Land', 'Yes', 1, 764, 65, 355, 29),
	array('Burgas', 'Coast', 'Yes', 2, 1215, 429, 568, 205),
	array('Burgas Bay', 'Sea', 'No', 0, 1323, 392, 609, 192),
	array('Bursa', 'Coast', 'No', 5, 1254, 682, 584, 325),
	array('Calarasi', 'Land', 'No', 6, 1168, 240, 544, 113),
	array('Catanzaro', 'Coast', 'No', 4, 488, 720, 227, 344),
	array('Cetinje', 'Coast', 'Yes', 7, 690, 484, 318, 235),
	array('Constanta', 'Coast', 'Yes', 6, 1246, 284, 587, 135),
	array('Craiova', 'Land', 'No', 0, 955, 261, 445, 98),
	array('Eastern Mediterranean', 'Sea', 'No', 0, 1383, 1011, 644, 483),
	array('Edirne', 'Coast', 'Yes', 0, 1248, 501, 581, 239),
	array('Firenze', 'Coast', 'Yes', 4, 130, 392, 62, 196),
	array('Graz', 'Land', 'No', 1, 504, 67, 235, 38),
	array('Gulf of Izmir', 'Sea', 'No', 0, 1219, 893, 573, 438),
	array('Gulf of Taranto', 'Sea', 'No', 0, 654, 798, 305, 381),
	array('Gulf of Venezia', 'Sea', 'No', 0, 275, 246, 128, 117),
	array('Heraklion', 'Coast', 'Yes', 0, 1252, 1109, 588, 533),
	array('Iasi', 'Coast', 'Yes', 6, 1282, 150, 600, 72),
	array('Ionian Sea', 'Sea', 'No', 0, 660, 1088, 307, 519),
	array('Isernia', 'Coast', 'No', 4, 354, 497, 165, 237),
	array('Istanbul', 'Coast', 'Yes', 5, 1287, 550, 599, 263),
	array('Izmir', 'Coast', 'Yes', 5, 1319, 851, 607, 414),
	array('Kalamata', 'Coast', 'Yes', 3, 971, 950, 452, 460),
	array('Kassa', 'Land', 'No', 0, 895, 46, 416, 22),
	array('Kolosvar', 'Land', 'Yes', 0, 1004, 99, 467, 47),
	array('Kozani', 'Coast', 'No', 0, 938, 667, 436, 318),
	array('Kragujevac', 'Land', 'Yes', 7, 781, 432, 364, 210),
	array('Larisa', 'Coast', 'Yes', 3, 934, 785, 440, 383),
	array('Ligurian Sea', 'Sea', 'No', 0, 104, 535, 48, 255),
	array('Manisa', 'Land', 'No', 5, 1457, 737, 678, 352),
	array('Myrtoan Sea', 'Sea', 'No', 0, 994, 1070, 463, 511),
	array('Napoli', 'Coast', 'Yes', 4, 418, 653, 195, 312),
	array('Nis', 'Land', 'No', 0, 862, 347, 401, 165),
	array('Novi Sad', 'Land', 'No', 0, 717, 173, 332, 83),
	array('Odessa', 'Coast', 'No', 0, 1352, 86, 629, 41),
	array('Palermo', 'Coast', 'Yes', 0, 404, 924, 183, 448),
	array('Patrai', 'Coast', 'No', 3, 912, 926, 424, 446),
	array('Pecs', 'Land', 'No', 1, 633, 91, 295, 43),
	array('Pleven', 'Land', 'No', 0, 959, 320, 449, 153),
	array('Plovdiv', 'Land', 'Yes', 2, 1088, 476, 510, 227),
	array('Roma', 'Coast', 'Yes', 0, 268, 550, 126, 267),
	array('Ruse', 'Land', 'Yes', 0, 1030, 394, 483, 188),
	array('Salonika', 'Coast', 'Yes', 0, 1160, 613, 547, 297),
	array('Salzburg', 'Land', 'Yes', 0, 381, 99, 177, 47),
	array('Sarajevo', 'Land', 'Yes', 0, 643, 314, 299, 150),
	array('Saronic Gulf', 'Sea', 'No', 0, 1117, 973, 520, 465),
	array('Scutari', 'Coast', 'No', 0, 744, 562, 345, 268),
	array('Sea of Marmara', 'Sea', 'No', 0, 1346, 589, 630, 282),
	array('Serres', 'Land', 'No', 0, 942, 596, 438, 285),
	array('Sevastopol', 'Coast', 'Yes', 0, 1477, 69, 727, 59),
	array('Skopje', 'Land', 'No', 0, 879, 552, 409, 268),
	array('Sofia', 'Land', 'Yes', 2, 975, 457, 460, 218),
	array('Spalato', 'Coast', 'No', 0, 479, 345, 223, 165),
	array('Temesvar', 'Land', 'No', 0, 889, 164, 414, 78),
	array('Thermaic Gulf', 'Sea', 'No', 0, 1110, 716, 516, 348),
	array('Ticino', 'Land', 'No', 0, 35, 61, 14, 29),
	array('Tirana', 'Coast', 'Yes', 0, 733, 640, 343, 305),
	array('Tiraspol', 'Land', 'No', 0, 1203, 63, 560, 30),
	array('Torino', 'Coast', 'Yes', 4, 70, 173, 33, 83),
	array('Trent', 'Land', 'No', 0, 170, 80, 79, 40),
	array('Trieste', 'Coast', 'Yes', 1, 346, 217, 161, 104),
	array('Tyrrhenian Sea', 'Sea', 'No', 0, 311, 710, 145, 339),
	array('Varna', 'Coast', 'Yes', 0, 1242, 341, 578, 163),
	array('Venezia', 'Coast', 'Yes', 0, 197, 192, 92, 92),
	array('Western Mediterranean', 'Sea', 'No', 0, 154, 975, 72, 475),
	array('Wien', 'Land', 'Yes', 1, 666, 30, 310, 15)
);

foreach($territoryRawData as $territoryRawRow)
{
	list($name, $type, $supply, $countryID, $x, $y, $sx, $sy)=$territoryRawRow;
	new InstallTerritory($name, $type, $supply, $countryID, $x, $y, $sx, $sy);
}
unset($territoryRawData);

$bordersRawData=array(
	array('Adriatic Sea','Agram','Yes','No'),
	array('Adriatic Sea','Ancona','Yes','No'),
	array('Adriatic Sea','Bay of Kotor','Yes','No'),
	array('Adriatic Sea','Cetinje','Yes','No'),
	array('Adriatic Sea','Gulf of Venezia','Yes','No'),
	array('Adriatic Sea','Isernia','Yes','No'),
	array('Adriatic Sea','Spalato','Yes','No'),
	array('Aegean Sea','Athens','Yes','No'),
	array('Aegean Sea','Gulf of Izmir','Yes','No'),
	array('Aegean Sea','Larisa','Yes','No'),
	array('Aegean Sea','Saronic Gulf','Yes','No'),
	array('Aegean Sea','Thermaic Gulf','Yes','No'),
	array('Agram','Graz','No','Yes'),
	array('Agram','Gulf of Venezia','Yes','No'),
	array('Agram','Novi Sad','No','Yes'),
	array('Agram','Pecs','No','Yes'),
	array('Agram','Sarajevo','No','Yes'),
	array('Agram','Spalato','Yes','Yes'),
	array('Agram','Trieste','Yes','Yes'),
	array('Agrinio','Athens','Yes','Yes'),
	array('Agrinio','Gulf of Taranto','Yes','No'),
	array('Agrinio','Kozani','No','Yes'),
	array('Agrinio','Larisa','No','Yes'),
	array('Agrinio','Tirana','Yes','Yes'),
	array('Ancona','Bologna','Yes','Yes'),
	array('Ancona','Firenze','No','Yes'),
	array('Ancona','Gulf of Venezia','Yes','No'),
	array('Ancona','Isernia','Yes','Yes'),
	array('Ancona','Roma','No','Yes'),
	array('Ankara','Black Sea','Yes','No'),
	array('Ankara','Bursa','No','Yes'),
	array('Ankara','Istanbul','Yes','Yes'),
	array('Ankara','Manisa','No','Yes'),
	array('Antalya','Eastern Mediterranean','Yes','No'),
	array('Antalya','Izmir','Yes','Yes'),
	array('Antalya','Manisa','No','Yes'),
	array('Athens','Gulf of Taranto','Yes','No'),
	array('Athens','Kalamata','Yes','Yes'),
	array('Athens','Larisa','Yes','Yes'),
	array('Athens','Patrai','Yes','Yes'),
	array('Athens','Saronic Gulf','Yes','No'),
	array('Bay of Kotor','Brindisi','Yes','No'),
	array('Bay of Kotor','Cetinje','Yes','No'),
	array('Bay of Kotor','Gulf of Taranto','Yes','No'),
	array('Bay of Kotor','Isernia','Yes','No'),
	array('Bay of Kotor','Scutari','Yes','No'),
	array('Bay of Kotor','Tirana','Yes','No'),
	array('Beograd','Craiova','No','Yes'),
	array('Beograd','Kragujevac','No','Yes'),
	array('Beograd','Nis','No','Yes'),
	array('Beograd','Novi Sad','No','Yes'),
	array('Beograd','Sarajevo','No','Yes'),
	array('Beograd','Temesvar','No','Yes'),
	array('Bessarabian Coast','Black Sea','Yes','No'),
	array('Bessarabian Coast','Burgas Bay','Yes','No'),
	array('Bessarabian Coast','Constanta','Yes','No'),
	array('Bessarabian Coast','Iasi','Yes','No'),
	array('Bessarabian Coast','Odessa','Yes','No'),
	array('Bessarabian Coast','Sevastopol','Yes','No'),
	array('Bitola','Kozani','No','Yes'),
	array('Bitola','Scutari','No','Yes'),
	array('Bitola','Serres','No','Yes'),
	array('Bitola','Skopje','No','Yes'),
	array('Bitola','Tirana','No','Yes'),
	array('Black Sea','Bosporus','Yes','No'),
	array('Black Sea','Burgas Bay','Yes','No'),
	array('Black Sea','Istanbul','Yes','No'),
	array('Black Sea','Sevastopol','Yes','No'),
	array('Bologna','Firenze','No','Yes'),
	array('Bologna','Gulf of Venezia','Yes','No'),
	array('Bologna','Torino','No','Yes'),
	array('Bologna','Venezia','Yes','Yes'),
	array('Bosporus','Burgas Bay','Yes','No'),
	array('Bosporus','Edirne','Yes','No'),
	array('Bosporus','Istanbul','Yes','No'),
	array('Bosporus','Sea of Marmara','Yes','No'),
	array('Brasov','Bucuresti','No','Yes'),
	array('Brasov','Craiova','No','Yes'),
	array('Brasov','Iasi','No','Yes'),
	array('Brasov','Kolosvar','No','Yes'),
	array('Brasov','Temesvar','No','Yes'),
	array('Brasov','Tiraspol','No','Yes'),
	array('Brindisi','Catanzaro','Yes','Yes'),
	array('Brindisi','Gulf of Taranto','Yes','No'),
	array('Brindisi','Isernia','Yes','Yes'),
	array('Brindisi','Napoli','No','Yes'),
	array('Bucuresti','Calarasi','No','Yes'),
	array('Bucuresti','Craiova','No','Yes'),
	array('Bucuresti','Iasi','No','Yes'),
	array('Bucuresti','Pleven','No','Yes'),
	array('Budapest','Kassa','No','Yes'),
	array('Budapest','Novi Sad','No','Yes'),
	array('Budapest','Pecs','No','Yes'),
	array('Budapest','Temesvar','No','Yes'),
	array('Budapest','Wien','No','Yes'),
	array('Burgas','Burgas Bay','Yes','No'),
	array('Burgas','Edirne','Yes','Yes'),
	array('Burgas','Plovdiv','No','Yes'),
	array('Burgas','Ruse','No','Yes'),
	array('Burgas','Varna','Yes','Yes'),
	array('Burgas Bay','Constanta','Yes','No'),
	array('Burgas Bay','Edirne','Yes','No'),
	array('Burgas Bay','Varna','Yes','No'),
	array('Bursa','Gulf of Izmir','Yes','No'),
	array('Bursa','Istanbul','Yes','Yes'),
	array('Bursa','Izmir','Yes','Yes'),
	array('Bursa','Manisa','No','Yes'),
	array('Bursa','Salonika','Yes','Yes'),
	array('Bursa','Sea of Marmara','Yes','No'),
	array('Bursa','Thermaic Gulf','Yes','No'),
	array('Calarasi','Constanta','No','Yes'),
	array('Calarasi','Iasi','No','Yes'),
	array('Calarasi','Pleven','No','Yes'),
	array('Calarasi','Ruse','No','Yes'),
	array('Calarasi','Varna','No','Yes'),
	array('Catanzaro','Gulf of Taranto','Yes','No'),
	array('Catanzaro','Napoli','Yes','Yes'),
	array('Catanzaro','Palermo','Yes','Yes'),
	array('Catanzaro','Tyrrhenian Sea','Yes','No'),
	array('Cetinje','Kragujevac','No','Yes'),
	array('Cetinje','Sarajevo','No','Yes'),
	array('Cetinje','Scutari','Yes','Yes'),
	array('Cetinje','Spalato','Yes','Yes'),
	array('Constanta','Iasi','Yes','Yes'),
	array('Constanta','Varna','Yes','Yes'),
	array('Craiova','Nis','No','Yes'),
	array('Craiova','Pleven','No','Yes'),
	array('Craiova','Temesvar','No','Yes'),
	array('Eastern Mediterranean','Gulf of Izmir','Yes','No'),
	array('Eastern Mediterranean','Heraklion','Yes','No'),
	array('Eastern Mediterranean','Izmir','Yes','No'),
	array('Eastern Mediterranean','Myrtoan Sea','Yes','No'),
	array('Eastern Mediterranean','Saronic Gulf','Yes','No'),
	array('Edirne','Istanbul','Yes','Yes'),
	array('Edirne','Plovdiv','No','Yes'),
	array('Edirne','Salonika','No','Yes'),
	array('Edirne','Serres','No','Yes'),
	array('Firenze','Ligurian Sea','Yes','No'),
	array('Firenze','Roma','Yes','Yes'),
	array('Firenze','Torino','Yes','Yes'),
	array('Graz','Pecs','No','Yes'),
	array('Graz','Salzburg','No','Yes'),
	array('Graz','Trieste','No','Yes'),
	array('Graz','Wien','No','Yes'),
	array('Gulf of Izmir','Izmir','Yes','No'),
	array('Gulf of Izmir','Saronic Gulf','Yes','No'),
	array('Gulf of Izmir','Thermaic Gulf','Yes','No'),
	array('Gulf of Taranto','Ionian Sea','Yes','No'),
	array('Gulf of Taranto','Palermo','Yes','No'),
	array('Gulf of Taranto','Patrai','Yes','No'),
	array('Gulf of Taranto','Tirana','Yes','No'),
	array('Gulf of Taranto','Tyrrhenian Sea','Yes','No'),
	array('Gulf of Venezia','Trieste','Yes','No'),
	array('Gulf of Venezia','Venezia','Yes','No'),
	array('Heraklion','Myrtoan Sea','Yes','No'),
	array('Heraklion','Saronic Gulf','Yes','No'),
	array('Iasi','Odessa','Yes','Yes'),
	array('Iasi','Tiraspol','No','Yes'),
	array('Ionian Sea','Kalamata','Yes','No'),
	array('Ionian Sea','Myrtoan Sea','Yes','No'),
	array('Ionian Sea','Palermo','Yes','No'),
	array('Ionian Sea','Patrai','Yes','No'),
	array('Ionian Sea','Western Mediterranean','Yes','No'),
	array('Isernia','Napoli','No','Yes'),
	array('Isernia','Roma','No','Yes'),
	array('Istanbul','Salonika','Yes','Yes'),
	array('Istanbul','Sea of Marmara','Yes','No'),
	array('Izmir','Manisa','No','Yes'),
	array('Kalamata','Myrtoan Sea','Yes','No'),
	array('Kalamata','Patrai','Yes','Yes'),
	array('Kalamata','Saronic Gulf','Yes','No'),
	array('Kassa','Kolosvar','No','Yes'),
	array('Kassa','Temesvar','No','Yes'),
	array('Kassa','Wien','No','Yes'),
	array('Kolosvar','Temesvar','No','Yes'),
	array('Kolosvar','Tiraspol','No','Yes'),
	array('Kozani','Larisa','Yes','Yes'),
	array('Kozani','Salonika','Yes','Yes'),
	array('Kozani','Serres','No','Yes'),
	array('Kozani','Thermaic Gulf','Yes','No'),
	array('Kozani','Tirana','No','Yes'),
	array('Kragujevac','Nis','No','Yes'),
	array('Kragujevac','Sarajevo','No','Yes'),
	array('Kragujevac','Scutari','No','Yes'),
	array('Kragujevac','Skopje','No','Yes'),
	array('Larisa','Thermaic Gulf','Yes','No'),
	array('Ligurian Sea','Roma','Yes','No'),
	array('Ligurian Sea','Torino','Yes','No'),
	array('Ligurian Sea','Tyrrhenian Sea','Yes','No'),
	array('Ligurian Sea','Western Mediterranean','Yes','No'),
	array('Myrtoan Sea','Saronic Gulf','Yes','No'),
	array('Napoli','Roma','Yes','Yes'),
	array('Napoli','Tyrrhenian Sea','Yes','No'),
	array('Nis','Pleven','No','Yes'),
	array('Nis','Skopje','No','Yes'),
	array('Nis','Sofia','No','Yes'),
	array('Novi Sad','Pecs','No','Yes'),
	array('Novi Sad','Sarajevo','No','Yes'),
	array('Novi Sad','Temesvar','No','Yes'),
	array('Odessa','Sevastopol','Yes','Yes'),
	array('Odessa','Tiraspol','No','Yes'),
	array('Palermo','Tyrrhenian Sea','Yes','No'),
	array('Palermo','Western Mediterranean','Yes','No'),
	array('Pecs','Wien','No','Yes'),
	array('Pleven','Ruse','No','Yes'),
	array('Pleven','Sofia','No','Yes'),
	array('Plovdiv','Ruse','No','Yes'),
	array('Plovdiv','Serres','No','Yes'),
	array('Plovdiv','Sofia','No','Yes'),
	array('Roma','Tyrrhenian Sea','Yes','No'),
	array('Ruse','Sofia','No','Yes'),
	array('Ruse','Varna','No','Yes'),
	array('Salonika','Sea of Marmara','Yes','No'),
	array('Salonika','Serres','No','Yes'),
	array('Salonika','Thermaic Gulf','Yes','No'),
	array('Salzburg','Trent','No','Yes'),
	array('Salzburg','Trieste','No','Yes'),
	array('Salzburg','Venezia','No','Yes'),
	array('Sarajevo','Spalato','No','Yes'),
	array('Scutari','Skopje','No','Yes'),
	array('Scutari','Tirana','Yes','Yes'),
	array('Sea of Marmara','Thermaic Gulf','Yes','No'),
	array('Serres','Skopje','No','Yes'),
	array('Serres','Sofia','No','Yes'),
	array('Skopje','Sofia','No','Yes'),
	array('Ticino','Torino','No','Yes'),
	array('Ticino','Trent','No','Yes'),
	array('Torino','Trent','No','Yes'),
	array('Torino','Venezia','No','Yes'),
	array('Trent','Venezia','No','Yes'),
	array('Trieste','Venezia','Yes','Yes'),
	array('Tyrrhenian Sea','Western Mediterranean','Yes','No')
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
