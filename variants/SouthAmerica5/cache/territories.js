function loadTerritories() {
Territories = $H({"1":{"id":"1","name":"Barranquilla","type":"Coast","supply":"Yes","countryID":"4","coast":"No","coastParentID":"1","smallMapX":"99","smallMapY":"35","Borders":[{"id":"35","a":true,"f":true},{"id":"3","a":true,"f":false},{"id":"2","a":true,"f":false},{"id":"34","a":true,"f":true},{"id":"46","a":false,"f":true}],"CoastalBorders":[{"id":"35","a":true,"f":true},{"id":"3","a":true,"f":false},{"id":"2","a":true,"f":false},{"id":"34","a":true,"f":true},{"id":"46","a":false,"f":true}]},"2":{"id":"2","name":"Medellin","type":"Coast","supply":"Yes","countryID":"4","coast":"No","coastParentID":"2","smallMapX":"85","smallMapY":"68","Borders":[{"id":"1","a":true,"f":false},{"id":"3","a":true,"f":false},{"id":"4","a":true,"f":true},{"id":"34","a":true,"f":true},{"id":"56","a":false,"f":true}],"CoastalBorders":[{"id":"1","a":true,"f":false},{"id":"3","a":true,"f":false},{"id":"4","a":true,"f":true},{"id":"34","a":true,"f":true},{"id":"56","a":false,"f":true}]},"3":{"id":"3","name":"Bogota","type":"Land","supply":"Yes","countryID":"4","coast":"No","coastParentID":"3","smallMapX":"140","smallMapY":"94","Borders":[{"id":"1","a":true,"f":false},{"id":"2","a":true,"f":false},{"id":"35","a":true,"f":false},{"id":"37","a":true,"f":false},{"id":"10","a":true,"f":false},{"id":"5","a":true,"f":false},{"id":"4","a":true,"f":false}],"CoastalBorders":[{"id":"1","a":true,"f":false},{"id":"2","a":true,"f":false},{"id":"35","a":true,"f":false},{"id":"37","a":true,"f":false},{"id":"10","a":true,"f":false},{"id":"5","a":true,"f":false},{"id":"4","a":true,"f":false}]},"4":{"id":"4","name":"Valle Magdalena","type":"Coast","supply":"No","countryID":"4","coast":"No","coastParentID":"4","smallMapX":"90","smallMapY":"95","Borders":[{"id":"2","a":true,"f":true},{"id":"3","a":true,"f":false},{"id":"5","a":true,"f":false},{"id":"7","a":true,"f":false},{"id":"39","a":true,"f":true},{"id":"56","a":false,"f":true}],"CoastalBorders":[{"id":"2","a":true,"f":true},{"id":"3","a":true,"f":false},{"id":"5","a":true,"f":false},{"id":"7","a":true,"f":false},{"id":"39","a":true,"f":true},{"id":"56","a":false,"f":true}]},"5":{"id":"5","name":"Cordillera Oriental","type":"Land","supply":"No","countryID":"4","coast":"No","coastParentID":"5","smallMapX":"125","smallMapY":"130","Borders":[{"id":"3","a":true,"f":false},{"id":"4","a":true,"f":false},{"id":"10","a":true,"f":false},{"id":"7","a":true,"f":false}],"CoastalBorders":[{"id":"3","a":true,"f":false},{"id":"4","a":true,"f":false},{"id":"10","a":true,"f":false},{"id":"7","a":true,"f":false}]},"6":{"id":"6","name":"Chiclayo","type":"Coast","supply":"Yes","countryID":"5","coast":"No","coastParentID":"6","smallMapX":"74","smallMapY":"176","Borders":[{"id":"39","a":true,"f":true},{"id":"7","a":true,"f":false},{"id":"9","a":true,"f":false},{"id":"8","a":true,"f":true},{"id":"55","a":false,"f":true}],"CoastalBorders":[{"id":"39","a":true,"f":true},{"id":"7","a":true,"f":false},{"id":"9","a":true,"f":false},{"id":"8","a":true,"f":true},{"id":"55","a":false,"f":true}]},"7":{"id":"7","name":"Montana","type":"Land","supply":"No","countryID":"5","coast":"No","coastParentID":"7","smallMapX":"101","smallMapY":"163","Borders":[{"id":"4","a":true,"f":false},{"id":"5","a":true,"f":false},{"id":"6","a":true,"f":false},{"id":"39","a":true,"f":false},{"id":"10","a":true,"f":false},{"id":"9","a":true,"f":false}],"CoastalBorders":[{"id":"4","a":true,"f":false},{"id":"5","a":true,"f":false},{"id":"6","a":true,"f":false},{"id":"39","a":true,"f":false},{"id":"10","a":true,"f":false},{"id":"9","a":true,"f":false}]},"8":{"id":"8","name":"Lima","type":"Coast","supply":"Yes","countryID":"5","coast":"No","coastParentID":"8","smallMapX":"100","smallMapY":"225","Borders":[{"id":"6","a":true,"f":true},{"id":"9","a":true,"f":true},{"id":"55","a":false,"f":true},{"id":"54","a":false,"f":true}],"CoastalBorders":[{"id":"6","a":true,"f":true},{"id":"9","a":true,"f":true},{"id":"55","a":false,"f":true},{"id":"54","a":false,"f":true}]},"9":{"id":"9","name":"Arequipa","type":"Coast","supply":"Yes","countryID":"5","coast":"No","coastParentID":"9","smallMapX":"127","smallMapY":"240","Borders":[{"id":"6","a":true,"f":false},{"id":"7","a":true,"f":false},{"id":"8","a":true,"f":true},{"id":"10","a":true,"f":false},{"id":"40","a":true,"f":false},{"id":"19","a":true,"f":true},{"id":"54","a":false,"f":true}],"CoastalBorders":[{"id":"6","a":true,"f":false},{"id":"7","a":true,"f":false},{"id":"8","a":true,"f":true},{"id":"10","a":true,"f":false},{"id":"40","a":true,"f":false},{"id":"19","a":true,"f":true},{"id":"54","a":false,"f":true}]},"10":{"id":"10","name":"Acre","type":"Land","supply":"No","countryID":"2","coast":"No","coastParentID":"10","smallMapX":"144","smallMapY":"173","Borders":[{"id":"3","a":true,"f":false},{"id":"5","a":true,"f":false},{"id":"7","a":true,"f":false},{"id":"9","a":true,"f":false},{"id":"37","a":true,"f":false},{"id":"11","a":true,"f":false},{"id":"40","a":true,"f":false}],"CoastalBorders":[{"id":"3","a":true,"f":false},{"id":"5","a":true,"f":false},{"id":"7","a":true,"f":false},{"id":"9","a":true,"f":false},{"id":"37","a":true,"f":false},{"id":"11","a":true,"f":false},{"id":"40","a":true,"f":false}]},"11":{"id":"11","name":"Amazon Basin","type":"Land","supply":"No","countryID":"2","coast":"No","coastParentID":"11","smallMapX":"183","smallMapY":"156","Borders":[{"id":"10","a":true,"f":false},{"id":"37","a":true,"f":false},{"id":"12","a":true,"f":false},{"id":"14","a":true,"f":false},{"id":"15","a":true,"f":false},{"id":"40","a":true,"f":false}],"CoastalBorders":[{"id":"10","a":true,"f":false},{"id":"37","a":true,"f":false},{"id":"12","a":true,"f":false},{"id":"14","a":true,"f":false},{"id":"15","a":true,"f":false},{"id":"40","a":true,"f":false}]},"12":{"id":"12","name":"Roraima","type":"Land","supply":"No","countryID":"2","coast":"No","coastParentID":"12","smallMapX":"225","smallMapY":"116","Borders":[{"id":"11","a":true,"f":false},{"id":"37","a":true,"f":false},{"id":"36","a":true,"f":false},{"id":"38","a":true,"f":false},{"id":"13","a":true,"f":false},{"id":"14","a":true,"f":false}],"CoastalBorders":[{"id":"11","a":true,"f":false},{"id":"37","a":true,"f":false},{"id":"36","a":true,"f":false},{"id":"38","a":true,"f":false},{"id":"13","a":true,"f":false},{"id":"14","a":true,"f":false}]},"13":{"id":"13","name":"Belem","type":"Coast","supply":"Yes","countryID":"2","coast":"No","coastParentID":"13","smallMapX":"350","smallMapY":"155","Borders":[{"id":"12","a":true,"f":false},{"id":"38","a":true,"f":true},{"id":"14","a":true,"f":false},{"id":"16","a":true,"f":false},{"id":"17","a":true,"f":true},{"id":"47","a":false,"f":true},{"id":"48","a":false,"f":true}],"CoastalBorders":[{"id":"12","a":true,"f":false},{"id":"38","a":true,"f":true},{"id":"14","a":true,"f":false},{"id":"16","a":true,"f":false},{"id":"17","a":true,"f":true},{"id":"47","a":false,"f":true},{"id":"48","a":false,"f":true}]},"14":{"id":"14","name":"Manaus","type":"Land","supply":"Yes","countryID":"2","coast":"No","coastParentID":"14","smallMapX":"260","smallMapY":"175","Borders":[{"id":"11","a":true,"f":false},{"id":"12","a":true,"f":false},{"id":"13","a":true,"f":false},{"id":"15","a":true,"f":false},{"id":"16","a":true,"f":false}],"CoastalBorders":[{"id":"11","a":true,"f":false},{"id":"12","a":true,"f":false},{"id":"13","a":true,"f":false},{"id":"15","a":true,"f":false},{"id":"16","a":true,"f":false}]},"15":{"id":"15","name":"Mato Grosso","type":"Land","supply":"No","countryID":"2","coast":"No","coastParentID":"15","smallMapX":"239","smallMapY":"222","Borders":[{"id":"11","a":true,"f":false},{"id":"14","a":true,"f":false},{"id":"40","a":true,"f":false},{"id":"41","a":true,"f":false},{"id":"16","a":true,"f":false}],"CoastalBorders":[{"id":"11","a":true,"f":false},{"id":"14","a":true,"f":false},{"id":"40","a":true,"f":false},{"id":"41","a":true,"f":false},{"id":"16","a":true,"f":false}]},"16":{"id":"16","name":"Goias","type":"Land","supply":"No","countryID":"2","coast":"No","coastParentID":"16","smallMapX":"310","smallMapY":"247","Borders":[{"id":"13","a":true,"f":false},{"id":"14","a":true,"f":false},{"id":"15","a":true,"f":false},{"id":"41","a":true,"f":false},{"id":"43","a":true,"f":false},{"id":"18","a":true,"f":false},{"id":"17","a":true,"f":false}],"CoastalBorders":[{"id":"13","a":true,"f":false},{"id":"14","a":true,"f":false},{"id":"15","a":true,"f":false},{"id":"41","a":true,"f":false},{"id":"43","a":true,"f":false},{"id":"18","a":true,"f":false},{"id":"17","a":true,"f":false}]},"17":{"id":"17","name":"Rio de Janeiro","type":"Coast","supply":"Yes","countryID":"2","coast":"No","coastParentID":"17","smallMapX":"348","smallMapY":"310","Borders":[{"id":"13","a":true,"f":true},{"id":"16","a":true,"f":false},{"id":"18","a":true,"f":true},{"id":"48","a":false,"f":true}],"CoastalBorders":[{"id":"13","a":true,"f":true},{"id":"16","a":true,"f":false},{"id":"18","a":true,"f":true},{"id":"48","a":false,"f":true}]},"18":{"id":"18","name":"Rio Grande do Sul","type":"Coast","supply":"No","countryID":"2","coast":"No","coastParentID":"18","smallMapX":"286","smallMapY":"373","Borders":[{"id":"16","a":true,"f":false},{"id":"17","a":true,"f":true},{"id":"43","a":true,"f":false},{"id":"27","a":true,"f":false},{"id":"28","a":true,"f":false},{"id":"44","a":true,"f":true},{"id":"48","a":false,"f":true}],"CoastalBorders":[{"id":"16","a":true,"f":false},{"id":"17","a":true,"f":true},{"id":"43","a":true,"f":false},{"id":"27","a":true,"f":false},{"id":"28","a":true,"f":false},{"id":"44","a":true,"f":true},{"id":"48","a":false,"f":true}]},"19":{"id":"19","name":"Desierto Atacama","type":"Coast","supply":"No","countryID":"3","coast":"No","coastParentID":"19","smallMapX":"148","smallMapY":"295","Borders":[{"id":"9","a":true,"f":true},{"id":"40","a":true,"f":false},{"id":"42","a":true,"f":false},{"id":"20","a":true,"f":true},{"id":"54","a":false,"f":true}],"CoastalBorders":[{"id":"9","a":true,"f":true},{"id":"40","a":true,"f":false},{"id":"42","a":true,"f":false},{"id":"20","a":true,"f":true},{"id":"54","a":false,"f":true}]},"20":{"id":"20","name":"Antofagasta","type":"Coast","supply":"Yes","countryID":"3","coast":"No","coastParentID":"20","smallMapX":"160","smallMapY":"331","Borders":[{"id":"19","a":true,"f":true},{"id":"42","a":true,"f":false},{"id":"24","a":true,"f":false},{"id":"21","a":true,"f":true},{"id":"53","a":false,"f":true},{"id":"54","a":false,"f":true}],"CoastalBorders":[{"id":"19","a":true,"f":true},{"id":"42","a":true,"f":false},{"id":"24","a":true,"f":false},{"id":"21","a":true,"f":true},{"id":"53","a":false,"f":true},{"id":"54","a":false,"f":true}]},"21":{"id":"21","name":"Santiago","type":"Coast","supply":"Yes","countryID":"3","coast":"No","coastParentID":"21","smallMapX":"145","smallMapY":"385","Borders":[{"id":"20","a":true,"f":true},{"id":"24","a":true,"f":false},{"id":"25","a":true,"f":false},{"id":"26","a":true,"f":false},{"id":"22","a":true,"f":true},{"id":"53","a":false,"f":true}],"CoastalBorders":[{"id":"20","a":true,"f":true},{"id":"24","a":true,"f":false},{"id":"25","a":true,"f":false},{"id":"26","a":true,"f":false},{"id":"22","a":true,"f":true},{"id":"53","a":false,"f":true}]},"22":{"id":"22","name":"Concepcion","type":"Coast","supply":"Yes","countryID":"3","coast":"No","coastParentID":"22","smallMapX":"142","smallMapY":"470","Borders":[{"id":"21","a":true,"f":true},{"id":"26","a":true,"f":false},{"id":"23","a":true,"f":true},{"id":"51","a":false,"f":true},{"id":"53","a":false,"f":true}],"CoastalBorders":[{"id":"21","a":true,"f":true},{"id":"26","a":true,"f":false},{"id":"23","a":true,"f":true},{"id":"51","a":false,"f":true},{"id":"53","a":false,"f":true}]},"23":{"id":"23","name":"Tierra del Fuego","type":"Coast","supply":"No","countryID":"3","coast":"No","coastParentID":"23","smallMapX":"168","smallMapY":"573","Borders":[{"id":"22","a":true,"f":true},{"id":"26","a":true,"f":true},{"id":"49","a":false,"f":true},{"id":"51","a":false,"f":true},{"id":"50","a":false,"f":true}],"CoastalBorders":[{"id":"22","a":true,"f":true},{"id":"26","a":true,"f":true},{"id":"49","a":false,"f":true},{"id":"51","a":false,"f":true},{"id":"50","a":false,"f":true}]},"24":{"id":"24","name":"Gran Chaco","type":"Land","supply":"No","countryID":"1","coast":"No","coastParentID":"24","smallMapX":"177","smallMapY":"362","Borders":[{"id":"20","a":true,"f":false},{"id":"21","a":true,"f":false},{"id":"42","a":true,"f":false},{"id":"27","a":true,"f":false},{"id":"28","a":true,"f":false},{"id":"29","a":true,"f":false},{"id":"25","a":true,"f":false}],"CoastalBorders":[{"id":"20","a":true,"f":false},{"id":"21","a":true,"f":false},{"id":"42","a":true,"f":false},{"id":"27","a":true,"f":false},{"id":"28","a":true,"f":false},{"id":"29","a":true,"f":false},{"id":"25","a":true,"f":false}]},"25":{"id":"25","name":"Pampas","type":"Land","supply":"No","countryID":"1","coast":"No","coastParentID":"25","smallMapX":"182","smallMapY":"413","Borders":[{"id":"21","a":true,"f":false},{"id":"24","a":true,"f":false},{"id":"29","a":true,"f":false},{"id":"30","a":true,"f":false},{"id":"26","a":true,"f":false}],"CoastalBorders":[{"id":"21","a":true,"f":false},{"id":"24","a":true,"f":false},{"id":"29","a":true,"f":false},{"id":"30","a":true,"f":false},{"id":"26","a":true,"f":false}]},"26":{"id":"26","name":"Patagonia","type":"Coast","supply":"No","countryID":"1","coast":"No","coastParentID":"26","smallMapX":"178","smallMapY":"499","Borders":[{"id":"21","a":true,"f":false},{"id":"22","a":true,"f":false},{"id":"23","a":true,"f":true},{"id":"25","a":true,"f":false},{"id":"30","a":true,"f":true},{"id":"50","a":false,"f":true}],"CoastalBorders":[{"id":"21","a":true,"f":false},{"id":"22","a":true,"f":false},{"id":"23","a":true,"f":true},{"id":"25","a":true,"f":false},{"id":"30","a":true,"f":true},{"id":"50","a":false,"f":true}]},"27":{"id":"27","name":"Mesopotamia","type":"Land","supply":"No","countryID":"1","coast":"No","coastParentID":"27","smallMapX":"227","smallMapY":"353","Borders":[{"id":"18","a":true,"f":false},{"id":"24","a":true,"f":false},{"id":"42","a":true,"f":false},{"id":"43","a":true,"f":false},{"id":"28","a":true,"f":false}],"CoastalBorders":[{"id":"18","a":true,"f":false},{"id":"24","a":true,"f":false},{"id":"42","a":true,"f":false},{"id":"43","a":true,"f":false},{"id":"28","a":true,"f":false}]},"28":{"id":"28","name":"Santa Fe","type":"Land","supply":"Yes","countryID":"1","coast":"No","coastParentID":"28","smallMapX":"209","smallMapY":"372","Borders":[{"id":"18","a":true,"f":false},{"id":"24","a":true,"f":false},{"id":"27","a":true,"f":false},{"id":"44","a":true,"f":false},{"id":"29","a":true,"f":false}],"CoastalBorders":[{"id":"18","a":true,"f":false},{"id":"24","a":true,"f":false},{"id":"27","a":true,"f":false},{"id":"44","a":true,"f":false},{"id":"29","a":true,"f":false}]},"29":{"id":"29","name":"Buenos Aires","type":"Coast","supply":"Yes","countryID":"1","coast":"No","coastParentID":"29","smallMapX":"242","smallMapY":"432","Borders":[{"id":"24","a":true,"f":false},{"id":"25","a":true,"f":false},{"id":"28","a":true,"f":false},{"id":"44","a":true,"f":true},{"id":"30","a":true,"f":true},{"id":"50","a":false,"f":true}],"CoastalBorders":[{"id":"24","a":true,"f":false},{"id":"25","a":true,"f":false},{"id":"28","a":true,"f":false},{"id":"44","a":true,"f":true},{"id":"30","a":true,"f":true},{"id":"50","a":false,"f":true}]},"30":{"id":"30","name":"Mar del Plata","type":"Coast","supply":"Yes","countryID":"1","coast":"No","coastParentID":"30","smallMapX":"210","smallMapY":"463","Borders":[{"id":"25","a":true,"f":false},{"id":"26","a":true,"f":true},{"id":"29","a":true,"f":true},{"id":"50","a":false,"f":true}],"CoastalBorders":[{"id":"25","a":true,"f":false},{"id":"26","a":true,"f":true},{"id":"29","a":true,"f":true},{"id":"50","a":false,"f":true}]},"31":{"id":"31","name":"Costa Rica","type":"Coast","supply":"Yes","countryID":"0","coast":"Parent","coastParentID":"31","smallMapX":"25","smallMapY":"35","Borders":[{"id":"34","a":true,"f":true},{"id":"46","a":false,"f":true},{"id":"52","a":false,"f":true},{"id":"55","a":false,"f":true}],"CoastalBorders":[{"id":"34","a":true,"f":false}]},"32":{"id":"32","name":"Costa Rica (North Coast)","type":"Coast","supply":"No","countryID":"0","coast":"Child","coastParentID":"31","smallMapX":"33","smallMapY":"30","Borders":[{"id":"46","a":false,"f":true},{"id":"34","a":false,"f":true}],"CoastalBorders":[{"id":"46","a":false,"f":true},{"id":"34","a":false,"f":true}]},"33":{"id":"33","name":"Costa Rica (South Coast)","type":"Coast","supply":"No","countryID":"0","coast":"Child","coastParentID":"31","smallMapX":"15","smallMapY":"40","Borders":[{"id":"52","a":false,"f":true},{"id":"55","a":false,"f":true},{"id":"34","a":false,"f":true}],"CoastalBorders":[{"id":"52","a":false,"f":true},{"id":"55","a":false,"f":true},{"id":"34","a":false,"f":true}]},"34":{"id":"34","name":"Panama","type":"Coast","supply":"No","countryID":"0","coast":"No","coastParentID":"34","smallMapX":"50","smallMapY":"50","Borders":[{"id":"1","a":true,"f":true},{"id":"2","a":true,"f":true},{"id":"31","a":true,"f":true},{"id":"46","a":false,"f":true},{"id":"55","a":false,"f":true},{"id":"56","a":false,"f":true}],"CoastalBorders":[{"id":"1","a":true,"f":true},{"id":"2","a":true,"f":true},{"id":"31","a":true,"f":false},{"id":"46","a":false,"f":true},{"id":"55","a":false,"f":true},{"id":"56","a":false,"f":true},{"id":"32","a":false,"f":true},{"id":"33","a":false,"f":true}]},"35":{"id":"35","name":"Trujillo","type":"Coast","supply":"No","countryID":"0","coast":"No","coastParentID":"35","smallMapX":"145","smallMapY":"29","Borders":[{"id":"1","a":true,"f":true},{"id":"3","a":true,"f":false},{"id":"36","a":true,"f":true},{"id":"37","a":true,"f":false},{"id":"46","a":false,"f":true}],"CoastalBorders":[{"id":"1","a":true,"f":true},{"id":"3","a":true,"f":false},{"id":"36","a":true,"f":true},{"id":"37","a":true,"f":false},{"id":"46","a":false,"f":true}]},"36":{"id":"36","name":"Caracas","type":"Coast","supply":"Yes","countryID":"0","coast":"No","coastParentID":"36","smallMapX":"195","smallMapY":"44","Borders":[{"id":"12","a":true,"f":false},{"id":"35","a":true,"f":true},{"id":"38","a":true,"f":true},{"id":"37","a":true,"f":false},{"id":"46","a":false,"f":true},{"id":"47","a":false,"f":true}],"CoastalBorders":[{"id":"12","a":true,"f":false},{"id":"35","a":true,"f":true},{"id":"38","a":true,"f":true},{"id":"37","a":true,"f":false},{"id":"46","a":false,"f":true},{"id":"47","a":false,"f":true}]},"37":{"id":"37","name":"Orinoco Springs","type":"Land","supply":"No","countryID":"0","coast":"No","coastParentID":"37","smallMapX":"177","smallMapY":"91","Borders":[{"id":"3","a":true,"f":false},{"id":"10","a":true,"f":false},{"id":"11","a":true,"f":false},{"id":"12","a":true,"f":false},{"id":"35","a":true,"f":false},{"id":"36","a":true,"f":false}],"CoastalBorders":[{"id":"3","a":true,"f":false},{"id":"10","a":true,"f":false},{"id":"11","a":true,"f":false},{"id":"12","a":true,"f":false},{"id":"35","a":true,"f":false},{"id":"36","a":true,"f":false}]},"38":{"id":"38","name":"Guyana","type":"Coast","supply":"Yes","countryID":"0","coast":"No","coastParentID":"38","smallMapX":"265","smallMapY":"74","Borders":[{"id":"12","a":true,"f":false},{"id":"13","a":true,"f":true},{"id":"36","a":true,"f":true},{"id":"47","a":false,"f":true}],"CoastalBorders":[{"id":"12","a":true,"f":false},{"id":"13","a":true,"f":true},{"id":"36","a":true,"f":true},{"id":"47","a":false,"f":true}]},"39":{"id":"39","name":"Ecuador","type":"Coast","supply":"Yes","countryID":"0","coast":"No","coastParentID":"39","smallMapX":"59","smallMapY":"124","Borders":[{"id":"4","a":true,"f":true},{"id":"6","a":true,"f":true},{"id":"7","a":true,"f":false},{"id":"56","a":false,"f":true},{"id":"55","a":false,"f":true}],"CoastalBorders":[{"id":"4","a":true,"f":true},{"id":"6","a":true,"f":true},{"id":"7","a":true,"f":false},{"id":"56","a":false,"f":true},{"id":"55","a":false,"f":true}]},"40":{"id":"40","name":"La Paz","type":"Land","supply":"Yes","countryID":"0","coast":"No","coastParentID":"40","smallMapX":"175","smallMapY":"238","Borders":[{"id":"9","a":true,"f":false},{"id":"10","a":true,"f":false},{"id":"11","a":true,"f":false},{"id":"15","a":true,"f":false},{"id":"19","a":true,"f":false},{"id":"41","a":true,"f":false},{"id":"43","a":true,"f":false},{"id":"42","a":true,"f":false}],"CoastalBorders":[{"id":"9","a":true,"f":false},{"id":"10","a":true,"f":false},{"id":"11","a":true,"f":false},{"id":"15","a":true,"f":false},{"id":"19","a":true,"f":false},{"id":"41","a":true,"f":false},{"id":"43","a":true,"f":false},{"id":"42","a":true,"f":false}]},"41":{"id":"41","name":"Yungas","type":"Land","supply":"No","countryID":"0","coast":"No","coastParentID":"41","smallMapX":"219","smallMapY":"270","Borders":[{"id":"15","a":true,"f":false},{"id":"16","a":true,"f":false},{"id":"40","a":true,"f":false},{"id":"43","a":true,"f":false}],"CoastalBorders":[{"id":"15","a":true,"f":false},{"id":"16","a":true,"f":false},{"id":"40","a":true,"f":false},{"id":"43","a":true,"f":false}]},"42":{"id":"42","name":"Potosi","type":"Land","supply":"Yes","countryID":"0","coast":"No","coastParentID":"42","smallMapX":"172","smallMapY":"303","Borders":[{"id":"19","a":true,"f":false},{"id":"20","a":true,"f":false},{"id":"24","a":true,"f":false},{"id":"27","a":true,"f":false},{"id":"40","a":true,"f":false},{"id":"43","a":true,"f":false}],"CoastalBorders":[{"id":"19","a":true,"f":false},{"id":"20","a":true,"f":false},{"id":"24","a":true,"f":false},{"id":"27","a":true,"f":false},{"id":"40","a":true,"f":false},{"id":"43","a":true,"f":false}]},"43":{"id":"43","name":"Paraguay","type":"Land","supply":"Yes","countryID":"0","coast":"No","coastParentID":"43","smallMapX":"230","smallMapY":"311","Borders":[{"id":"16","a":true,"f":false},{"id":"18","a":true,"f":false},{"id":"27","a":true,"f":false},{"id":"40","a":true,"f":false},{"id":"41","a":true,"f":false},{"id":"42","a":true,"f":false}],"CoastalBorders":[{"id":"16","a":true,"f":false},{"id":"18","a":true,"f":false},{"id":"27","a":true,"f":false},{"id":"40","a":true,"f":false},{"id":"41","a":true,"f":false},{"id":"42","a":true,"f":false}]},"44":{"id":"44","name":"Uruguay","type":"Coast","supply":"Yes","countryID":"0","coast":"No","coastParentID":"44","smallMapX":"257","smallMapY":"400","Borders":[{"id":"18","a":true,"f":true},{"id":"28","a":true,"f":false},{"id":"29","a":true,"f":true},{"id":"48","a":false,"f":true},{"id":"50","a":false,"f":true}],"CoastalBorders":[{"id":"18","a":true,"f":true},{"id":"28","a":true,"f":false},{"id":"29","a":true,"f":true},{"id":"48","a":false,"f":true},{"id":"50","a":false,"f":true}]},"45":{"id":"45","name":"Islas Juan Fernandez","type":"Coast","supply":"Yes","countryID":"0","coast":"No","coastParentID":"45","smallMapX":"60","smallMapY":"425","Borders":[{"id":"54","a":false,"f":true},{"id":"53","a":false,"f":true},{"id":"51","a":false,"f":true},{"id":"52","a":false,"f":true}],"CoastalBorders":[{"id":"54","a":false,"f":true},{"id":"53","a":false,"f":true},{"id":"51","a":false,"f":true},{"id":"52","a":false,"f":true}]},"46":{"id":"46","name":"Caribbean Sea","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"46","smallMapX":"168","smallMapY":"15","Borders":[{"id":"1","a":false,"f":true},{"id":"34","a":false,"f":true},{"id":"35","a":false,"f":true},{"id":"36","a":false,"f":true},{"id":"47","a":false,"f":true},{"id":"31","a":false,"f":true}],"CoastalBorders":[{"id":"1","a":false,"f":true},{"id":"34","a":false,"f":true},{"id":"35","a":false,"f":true},{"id":"36","a":false,"f":true},{"id":"47","a":false,"f":true},{"id":"32","a":false,"f":true}]},"47":{"id":"47","name":"Mid Atlantic Ocean","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"47","smallMapX":"335","smallMapY":"55","Borders":[{"id":"13","a":false,"f":true},{"id":"36","a":false,"f":true},{"id":"38","a":false,"f":true},{"id":"46","a":false,"f":true},{"id":"48","a":false,"f":true},{"id":"49","a":false,"f":true}],"CoastalBorders":[{"id":"13","a":false,"f":true},{"id":"36","a":false,"f":true},{"id":"38","a":false,"f":true},{"id":"46","a":false,"f":true},{"id":"48","a":false,"f":true},{"id":"49","a":false,"f":true}]},"48":{"id":"48","name":"Brazilian Sea","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"48","smallMapX":"420","smallMapY":"145","Borders":[{"id":"13","a":false,"f":true},{"id":"17","a":false,"f":true},{"id":"18","a":false,"f":true},{"id":"44","a":false,"f":true},{"id":"47","a":false,"f":true},{"id":"49","a":false,"f":true},{"id":"50","a":false,"f":true}],"CoastalBorders":[{"id":"13","a":false,"f":true},{"id":"17","a":false,"f":true},{"id":"18","a":false,"f":true},{"id":"44","a":false,"f":true},{"id":"47","a":false,"f":true},{"id":"49","a":false,"f":true},{"id":"50","a":false,"f":true}]},"49":{"id":"49","name":"Southwest Atlantic","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"49","smallMapX":"354","smallMapY":"427","Borders":[{"id":"23","a":false,"f":true},{"id":"47","a":false,"f":true},{"id":"48","a":false,"f":true},{"id":"50","a":false,"f":true},{"id":"51","a":false,"f":true}],"CoastalBorders":[{"id":"23","a":false,"f":true},{"id":"47","a":false,"f":true},{"id":"48","a":false,"f":true},{"id":"50","a":false,"f":true},{"id":"51","a":false,"f":true}]},"50":{"id":"50","name":"Coast of Argentina","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"50","smallMapX":"242","smallMapY":"481","Borders":[{"id":"23","a":false,"f":true},{"id":"26","a":false,"f":true},{"id":"29","a":false,"f":true},{"id":"30","a":false,"f":true},{"id":"44","a":false,"f":true},{"id":"48","a":false,"f":true},{"id":"49","a":false,"f":true}],"CoastalBorders":[{"id":"23","a":false,"f":true},{"id":"26","a":false,"f":true},{"id":"29","a":false,"f":true},{"id":"30","a":false,"f":true},{"id":"44","a":false,"f":true},{"id":"48","a":false,"f":true},{"id":"49","a":false,"f":true}]},"51":{"id":"51","name":"Scotia Sea","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"51","smallMapX":"82","smallMapY":"515","Borders":[{"id":"22","a":false,"f":true},{"id":"23","a":false,"f":true},{"id":"45","a":false,"f":true},{"id":"49","a":false,"f":true},{"id":"53","a":false,"f":true},{"id":"52","a":false,"f":true}],"CoastalBorders":[{"id":"22","a":false,"f":true},{"id":"23","a":false,"f":true},{"id":"45","a":false,"f":true},{"id":"49","a":false,"f":true},{"id":"53","a":false,"f":true},{"id":"52","a":false,"f":true}]},"52":{"id":"52","name":"Southeast Pacific","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"52","smallMapX":"22","smallMapY":"325","Borders":[{"id":"45","a":false,"f":true},{"id":"51","a":false,"f":true},{"id":"55","a":false,"f":true},{"id":"54","a":false,"f":true},{"id":"31","a":false,"f":true}],"CoastalBorders":[{"id":"45","a":false,"f":true},{"id":"51","a":false,"f":true},{"id":"55","a":false,"f":true},{"id":"54","a":false,"f":true},{"id":"33","a":false,"f":true}]},"53":{"id":"53","name":"Bahia da Coquimbo","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"53","smallMapX":"121","smallMapY":"394","Borders":[{"id":"20","a":false,"f":true},{"id":"21","a":false,"f":true},{"id":"22","a":false,"f":true},{"id":"45","a":false,"f":true},{"id":"51","a":false,"f":true},{"id":"54","a":false,"f":true}],"CoastalBorders":[{"id":"20","a":false,"f":true},{"id":"21","a":false,"f":true},{"id":"22","a":false,"f":true},{"id":"45","a":false,"f":true},{"id":"51","a":false,"f":true},{"id":"54","a":false,"f":true}]},"54":{"id":"54","name":"Bahia da Arica","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"54","smallMapX":"90","smallMapY":"315","Borders":[{"id":"8","a":false,"f":true},{"id":"9","a":false,"f":true},{"id":"19","a":false,"f":true},{"id":"20","a":false,"f":true},{"id":"45","a":false,"f":true},{"id":"52","a":false,"f":true},{"id":"53","a":false,"f":true},{"id":"55","a":false,"f":true}],"CoastalBorders":[{"id":"8","a":false,"f":true},{"id":"9","a":false,"f":true},{"id":"19","a":false,"f":true},{"id":"20","a":false,"f":true},{"id":"45","a":false,"f":true},{"id":"52","a":false,"f":true},{"id":"53","a":false,"f":true},{"id":"55","a":false,"f":true}]},"55":{"id":"55","name":"Galapagos Sea","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"55","smallMapX":"35","smallMapY":"110","Borders":[{"id":"6","a":false,"f":true},{"id":"8","a":false,"f":true},{"id":"34","a":false,"f":true},{"id":"39","a":false,"f":true},{"id":"52","a":false,"f":true},{"id":"54","a":false,"f":true},{"id":"56","a":false,"f":true},{"id":"31","a":false,"f":true}],"CoastalBorders":[{"id":"6","a":false,"f":true},{"id":"8","a":false,"f":true},{"id":"34","a":false,"f":true},{"id":"39","a":false,"f":true},{"id":"52","a":false,"f":true},{"id":"54","a":false,"f":true},{"id":"56","a":false,"f":true},{"id":"33","a":false,"f":true}]},"56":{"id":"56","name":"Golfo de Panama","type":"Sea","supply":"No","countryID":"0","coast":"No","coastParentID":"56","smallMapX":"65","smallMapY":"75","Borders":[{"id":"2","a":false,"f":true},{"id":"4","a":false,"f":true},{"id":"34","a":false,"f":true},{"id":"39","a":false,"f":true},{"id":"55","a":false,"f":true}],"CoastalBorders":[{"id":"2","a":false,"f":true},{"id":"4","a":false,"f":true},{"id":"34","a":false,"f":true},{"id":"39","a":false,"f":true},{"id":"55","a":false,"f":true}]}});
}