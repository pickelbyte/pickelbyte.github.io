<?php 
//  ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


/*

v.appnaz.com/nhap/makeSimilar.php?cat=Sports&num=10

cd /var/www/code/html/code;
php createCategory.php



*/
require("config.php");
require("gameArray.php");




	$catNameArray=array(
		'Sports', 'Action', 'Car', 'Skill', 'Running', 'Racing', 'Shooting', 'Puzzle', 'Fighting', 'Multiplayer', 'Adventure', 'twoPlayer', 'threeD', 'Stickman', 'Idle', 'Moto', 'Popular', 'New',

		


		
	);


	
	
	// print_r($allGame); die;
	foreach ($catNameArray as $key => $category) {
		$html=file_get_contents("$githubPage/htmlGameList.html");
		$html2=file_get_contents("$githubPage/category.html");
		
		// echo $category; die;
		switch ($category) {
		/*
			case 'xxx':
			$ranNum=rand(count($xxx)/2,count($xxx));		
			$newArray=array_rand($xxx,$ranNum);
			break;

		*/			
			case 'Idle':
			$ranNum=rand(count($Idle)/2,count($Idle));		
			$newArray=array_rand($Idle,$ranNum);
			break;

			case 'Moto':
			$ranNum=rand(count($Moto)/2,count($Moto));		
			$newArray=array_rand($Moto,$ranNum);
			break;

			case 'Popular':
			$ranNum=rand(count($Popular)/2,count($Popular));		
			$newArray=array_rand($Popular,$ranNum);
			break;

			case 'New':
			$ranNum=rand(count($New)/2,count($New));		
			$newArray=array_rand($New,$ranNum);
			break;



			case 'Fighting':
			$ranNum=rand(count($Fighting)/2,count($Fighting));		
			$newArray=array_rand($Fighting,$ranNum);
			break;

			case 'Sports':
			$ranNum=rand(count($Sports)/2,count($Sports));		
			$newArray=array_rand($Sports,$ranNum);
			break;


			case 'Action':
			$ranNum=rand(count($Action)/2,count($Action));		
			$newArray=array_rand($Action,$ranNum);
			break;

			case 'Car':
			$ranNum=rand(count($Car)/2,count($Car));		
			$newArray=array_rand($Car,$ranNum);
			break;

			case 'Skill':
			$ranNum=rand(count($Skill)/2,count($Skill));		
			$newArray=array_rand($Skill,$ranNum);
			break;

			case 'Running':
			$ranNum=rand(count($Running)/2,count($Running));		
			$newArray=array_rand($Running,$ranNum);
			break;

			case 'Racing':
			$ranNum=rand(count($Racing)/2,count($Racing));		
			$newArray=array_rand($Racing,$ranNum);
			break;

			case 'Shooting':
			$ranNum=rand(count($Shooting)/2,count($Shooting));		
			$newArray=array_rand($Shooting,$ranNum);
			break;

			case 'Puzzle':
			$ranNum=rand(count($Puzzle)/2,count($Puzzle));		
			$newArray=array_rand($Puzzle,$ranNum);
			break;

			case 'Multiplayer':
			$ranNum=rand(count($Multiplayer)/2,count($Multiplayer));		
			$newArray=array_rand($Multiplayer,$ranNum);
			break;

			case 'Adventure':
			$ranNum=rand(count($Adventure)/2,count($Adventure));		
			$newArray=array_rand($Adventure,$ranNum);
			break;

			case 'twoPlayer':
			$ranNum=rand(count($twoPlayer)/2,count($twoPlayer));		
			$newArray=array_rand($twoPlayer,$ranNum);
			break;

			case 'threeD':
			$ranNum=rand(count($threeD)/2,count($threeD));		
			$newArray=array_rand($threeD,$ranNum);
			break;

			case 'Stickman':
			$ranNum=rand(count($Stickman)/2,count($Stickman));		
			$newArray=array_rand($Stickman,$ranNum);
			break;



			default:
				echo "Fail ----------------- ";
				break;
		}
		// print_r($newArray); die;
		$newCatString='';
		shuffle($newArray);
		foreach ($newArray as $key => $gameId) {
			// code...
			// echo $gameId.', ';
			$newCatString=$gameId.', '.$newCatString;
		}

		echo "\n$category ==================== \n \n";
		// echo $newCatString; die;


		
		$listGame=explode(',', $newCatString);
		$result=array_unique($listGame);
		// print_r($result); die;
		$html_list="";
		$n=0;
		foreach ($result as $key => $value1) {
			$n++;

			if($value1==end($result)){ continue; }
			$value1=trim($value1); 
			// echo $value1.'<br/>'; die;
			if(!array_key_exists($value1,$allGame)){continue;}

			$data_new=str_replace('imgLink', $allGame[$value1]['imgLink'], $html);
			$data_new=str_replace('gameName', $allGame[$value1]['gameName'], $data_new);
			$data_new=str_replace('gameId', $allGame[$value1]['gameId'], $data_new);

			$gameCategory=$allGame[$value1]['gameCategory'];
			$gameCategory=explode(',', $gameCategory);
			$gameCategory=trim($gameCategory[0]);
			// echo $gameCategory; die; 
			$data_new=str_replace('gameCategory', $gameCategory, $data_new);
			// echo $data_new; die;

			$html_list=$html_list."\n".$data_new;


			// die;

			if($n==$catGameNumbers){break;}


		}

		// echo "New: <br/>".$html_list; die;
		$html2=str_replace('GameList_Here', $html_list, $html2);
		$html2=str_replace('catName', $category, $html2);
		$html2=str_replace('siteName', $siteName, $html2);
		$catFileName=strtolower($category);
		file_put_contents("../category/$catFileName.html", $html2);

		// echo $html2; die;






	}	















?>