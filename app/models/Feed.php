<?php


class Feed{

/**
*
*/
public static function topArtist(){

	try{
		$response = file_get_contents('https://jira.atlassian.com/rest/api/2/issue/JRA-9');
	}catch(Exception $e){

	}
	if(isset($response)){
		//$plays = json_decode($response,TRUE);
		//$topplays = $plays['worklogs'];
		//$return = array();
		//foreach($topplays as $topplay){
      //$user = $topplay[0]['displayName'];
		//	$return[] = $topplay['timeSpentSeconds'];
		//}
		return json_decode($response);
	}
}

public static function projects(){

  try{
    $response = file_get_contents('https://jira.atlassian.com/rest/api/2/project');
  }catch(Exception $e){

  }
  if(isset($response)){
    //$plays = json_decode($response,TRUE);
    //$topplays = $plays['worklogs'];
    //$return = array();
    //foreach($topplays as $topplay){
      //$user = $topplay[0]['displayName'];
    //	$return[] = $topplay['timeSpentSeconds'];
    //}
    return json_decode($response);
  }
}

public static function oneproject($id){

  try{
    $response = file_get_contents('https://jira.atlassian.com/rest/api/2/project/'.$id);
  }catch(Exception $e){

  }
  if(isset($response)){
    //$plays = json_decode($response,TRUE);
    //$topplays = $plays['worklogs'];
    //$return = array();
    //foreach($topplays as $topplay){
      //$user = $topplay[0]['displayName'];
    //	$return[] = $topplay['timeSpentSeconds'];
    //}
    return json_decode($response);
  }
}

}
