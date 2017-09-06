<?php
	function latest(){
		$latest=file_get_contents('https://newsapi.org/v1/articles?source=the-next-web&sortBy=latest&apiKey=35e73dfe104747df80de0463a627f108');
		$res=json_decode($latest,true);
		return $res;	
	}

	function channel(){
		$list=file_get_contents("https://newsapi.org/v1/sources");
		$res=json_decode($list,true);
		return $res;
	}

	function count_channel(){
		$list=file_get_contents("https://newsapi.org/v1/sources");
		$res=json_decode($list,true);				
		$count=count($res['sources']);
		return $count;
	}
	
	function channel_news($channel_id){	
		$channel_news=file_get_contents("https://newsapi.org/v1/articles?source=".$channel_id."&apiKey=35e73dfe104747df80de0463a627f108");
		$res=json_decode($channel_news,true);
		return $res;
	}

?>