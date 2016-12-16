<?php


require_once __DIR__.'/../vendor/autoload.php';
use shogunn19\Jokes\JokesApi;

		
$http = new \GuzzleHttp\Client(); 

$jokesApi = new JokesApi($http);

$randJoke = $jokesApi->randJoke();
?>

<html>

	<body>

		<h1>
		<?php

		echo sprintf( 'Random joke is:<br> %s ',$randJoke);

		echo "All jokes listed here";

		$jokesStr=$jokesApi->all();


		?>

		</h1>
	</body>
</html>

