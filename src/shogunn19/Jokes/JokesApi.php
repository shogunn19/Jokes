<?php
namespace shogunn19\Jokes;

class JokesApi
{
const URL = 'http://ec2-35-156-131-145.eu-central-1.compute.amazonaws.com/list';

 $http; 
 $jokeTab;

public function __construct($http)
{
     $this->http = $http;

     $jokeTab = json_decode( $this->http->request('GET', self::URL)->getBody(), true );
}

public function randomJoke() //losowanie losowego zartu
{ 
	return $jokeTab[rand(0,9)][content];
}


public function all() //pobieranie wszystkich dowcipow
{
	for(int i=0;i<10;++i)
	{
	  $jokesStr[i]=$jokeTab[i][content]
	}
	return $jokesStr[];
}





}





