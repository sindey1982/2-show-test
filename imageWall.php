<?php
 //header("Content-type:image/jpeg");
 $wallFrame = '{"photoWallId": "specific_id_001", "photoWallName": "pw001","cellBorder":3,"cellPadding":5, "pages": [{"pageId": "uuid_page_001","pageWidth":417,"pageHeight":480,"index": 1,"cells": [{"photoid": "1","width": 207,"height": 243,"index": 1,"top": 0,"left": 0,"ftop":0,"fleft":0,"fwidth":207,"fheight":242},{"photoid": "2","width": 210,"height": 287,"index": 2,"top": 0,"left": 207,"ftop":0,"fleft":0,"fwidth":210,"fheight":287},{"photoid": "7","width": 207,"height": 237,"index": 7,"top": 242,"left": 0,"ftop":0,"fleft":0,"fwidth":207,"fheight":237},{"photoid": "8","width": 210,"height": 193,"index": 8,"top": 287,"left": 207,"ftop":0,"fleft":0,"fwidth":210,"fheight":192}]},{"pageId":"uuid_page_003","pageWidth":420,"pageHeight":480,"index": 1,"cells":[{"photoid": "3","width": 210,"height": 137,"index": 3,"top": 0,"left": 0,"ftop":0,"fleft":0,"fwidth":210,"fheight":137},{"photoid": "4","width": 210,"height": 292,"index": 4,"top": 0,"left": 210,"ftop":0,"fleft":0,"fwidth":210,"fheight":292},{"photoid": "6","width": 210,"height": 169,"index": 6,"top": 137,"left": 0,"ftop":0,"fleft":0,"fwidth":210,"fheight":168},{"photoid": "9","width": 210,"height": 188,"index": 9,"top": 292,"left": 210,"ftop":0,"fleft":0,"fwidth":210,"fheight":187},{"photoid": "10","width":210,"height": 174,"index": 10,"top": 305,"left": 0,"ftop":0,"fleft":0,"fwidth":210,"fheight":174}]},{"pageId":"uuid_page_004","pageWidth":500,"pageHeight":480,"index": 1,"cells":[{"photoid": "11","width": 500,"height": 286,"index": 11,"top": 0,"left": 0,"ftop":47,"fleft":514,"fwidth":976,"fheight":558},{"photoid": "12","width": 316,"height": 193,"index": 12,"top": 286,"left": 0,"ftop":21,"fleft":193,"fwidth":1163,"fheight":710},{"photoid": "13","width": 184,"height": 193,"index": 12,"top": 286,"left": 316,"ftop":0,"fleft":855,"fwidth":647,"fheight":679}]}]}';
 include '../g_api/RoundedCorner.class.php';
 //$result=g_rescaleImage('../img/bg-13.jpg','../img/test2.jpg',300,200);
 $rounder = new RoundedCorner('../img/bg-13.jpg', 20);  
$rounder->round_it();  



 