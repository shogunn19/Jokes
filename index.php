<?php


require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . 'src/shogunn19/Jokes/JokesApi.php';
use shogunn19\Jokes\JokesApi;

		
$http = new \GuzzleHttp\Client();

$jokesApi = new JokesApi($http);

$randJoke = $jokesApi->randomJoke();
?>

<html>

<body>

<h1>
<?php

echo "sprintf( 'Random joke is:<br> %s ',$randJoke)";

echo "All jokes listed here" . PHP_EOL; //end of line

	foreach($jokesApi->all() as $j)
	{
	  echo "<h2> 
	  {
	  $j 
	  }</h2><br>";
	}

//$jokesStr=$jokesApi->all();


?>

</h1>
</body>
</html>

