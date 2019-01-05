<?php 

class vari{
	var $highschool;
	var $university;
	var $kemampuan;
}


$school = new vari();
$school->highschool="SMAN 1 Sukaresmi";
$school->university="Universitas Pakuan Bogor";
$skill = new vari();
$skill->kemampuan = array("Office","HTML","CSS","JS","Java");

	$item=array( "name" => "Muhammad Husni Farid",
				 "address" => "Pacet, Cianjur, Jawa Barat",
				 "hobbies" => ["Ngoding", "Baca Manga", "Nonton film,anime,drakor"],
				 "is_married" => FALSE,				 						
				 "school" => [  "highschool" => $school->highschool, 
				 				"university" => $school->university],
				 "skill" => $skill->kemampuan);



function functJSON($value){

	return json_encode($value); 
}

echo functJSON($item);





 ?>