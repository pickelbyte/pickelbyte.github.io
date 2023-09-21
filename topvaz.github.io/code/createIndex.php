	<?php

/*
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

*/


/*

https://v.ballbang.co/code/createDetail.php?page=data&id=retro-bowl

cd  /var/www/codehay.net/html/code;
php createIndex.php

php createCategory.php

php createDetail.php




*/
// echo $gameName; die;

require("config.php");
require("gameArray.php");
$page='data';
$htmlIdex=file_get_contents("$githubPage/index.html");


	foreach ($allGame as $gameId => $value) {
		$htmlPopularList=file_get_contents("$githubPage/htmlPopularList.html");

		$ranNum=rand(count($Popular)/2,count($Popular));		
		$similar=array_rand($Popular,$ranNum);
		shuffle($similar);
		// print_r($gameId); die;	
		



		$similar=array_unique($similar);
		$html_list="";
		$n=0;
		foreach ($similar as $key => $value) {
			
			$value=trim($value); 
			
			// echo $key.'<br/>'; die;
			if(!array_key_exists($value,$allGame)){continue;}
			$n++;
			if($n==13){break;}

			$data_new=str_replace('imgLink', $allGame[$value]['imgLink'], $htmlPopularList);
			$data_new=str_replace('gameName', $allGame[$value]['gameName'], $data_new);
			$data_new=str_replace('gameId', $allGame[$value]['gameId'], $data_new);

			$gameCategory=$allGame[$value]['gameCategory'];
			$gameCategory=explode(',', $gameCategory);
			$gameCategory=trim($gameCategory[0]);
			// echo $gameCategory; die; 
			$data_new=str_replace('gameCategory', $gameCategory, $data_new);
			// echo $data_new;

			$html_list=$html_list."\n".$data_new;


			// die;




		}


	$n=0;
	foreach ($allGame as $gameId => $value) {
		$htmlList=file_get_contents("$githubPage/htmlGameList.html");

		$ranNum=rand(count($Popular)/2,count($Popular));		
		$similar=array_rand($Popular,$ranNum);
		shuffle($similar);
		// print_r($gameId); die;	
		



		$similar=array_unique($similar);
		$You_may_like="";
		
		
			foreach ($similar as $key => $value) {
				$value=trim($value); 

				// echo $value.'<br/>'; die;
				if(!array_key_exists($value,$allGame)){continue;}


				$data_new=str_replace('imgLink', $allGame[$value]['imgLink'], $htmlList);
				$data_new=str_replace('gameName', $allGame[$value]['gameName'], $data_new);
				$data_new=str_replace('gameId', $allGame[$value]['gameId'], $data_new);

				$gameCategory=$allGame[$value]['gameCategory'];
				$gameCategory=explode(',', $gameCategory);
				$gameCategory=trim($gameCategory[0]);
				// echo $gameCategory; die; 
				$data_new=str_replace('gameCategory', $gameCategory, $data_new);
				// echo $data_new;

				$You_may_like=$You_may_like."\n".$data_new;


				// die;




			}


		$n++;
		if($n==47){break;}			

		}




		// echo $html_list; die;






	}




	$htmlIdex=str_replace('siteName', $siteName, $htmlIdex);
	$htmlIdex=str_replace('PopularList_Here', $html_list, $htmlIdex);
	$htmlIdex=str_replace('YouMayLike_Here', $You_may_like, $htmlIdex);
	// echo "<br/> xxx ====================================== <br/>"; 
	// echo $htmlIdex; die;
	file_put_contents("../index.html", $htmlIdex);






?>