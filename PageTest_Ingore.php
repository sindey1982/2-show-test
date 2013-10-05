<?php
$_POST['code']="dedd";
include '../lib/Page.class.php';
$page = new Page();
//$result  = $page->createPage_Random(" ","2show_1373361872505", '{ "photos":["678a5008-fa7f-3c7e-4382-08a8b77707dd", "68ab89bb-723b-c22d-988c-e4bece3aaf34", "7a6e9dfb-63ad-735d-f61d-ce7fdd0c5edc"]}');
//var_dump(json_decode($result));

/*$result  = $page->createPageTemplate("","测试模板5",'{"width":600, "height":450, "cellNum":2 "cells":[{"width":600,"height":300, "float":"none", "top": 0,"left": 0,"index":1},{"width":600,"height":140,"float":"left","top":0,"left": 300,"index":2},{"width":600,"height":300, "float":"none", "top": 0,"left": 0,"index":1},{"width":600,"height":300, "float":"none", "top": 0,"left": 0,"index":1}]}',5);
var_dump($result);

$temp = json_decode($result);
$updateResult = $page->savePageTemplate('',$temp->templateId, "这是修改测试", '{"test":"test"}', 5);
var_dump($updateResult);
$enableResult = $page->enablePageTemplate('',$temp->templateId);
var_dump($enableResult);*/
//$removeResult = $page->removePage('','sdfse');
//var_dump($removeResult);

//echo $page->createPage_Template('', '2show_1373361872505', '1', '{"photos":["photo_id_001", "photo_id_002", "photo_id_003"]}');
var_dump($page->getPages('',"2show_1373361872505")) ;

