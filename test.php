<?php
    include('TMDb.php');

    // Default English language
    $tmdb = new TMDb('a0c95fc534edc09abb8ca39bffed7974');

    // Set-up the class with your own language
    $tmdb_nl = new TMDb('a0c95fc534edc09abb8ca39bffed7974', 'fr');

    // If you want to load the TMDb-config (default FALSE)
    $tmdb_load_config = new TMDb('a0c95fc534edc09abb8ca39bffed7974', 'fr', TRUE);


    // After initialize the class
    // First request a token from API

  
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <pre>

<?php
$genre = $tmdb_nl->getGenres();


for ($i=0; $i < count($genre['genres']) ; $i++) 
{ 
  echo $genre['genres'][$i]['name'];
}



?>

</pre>
</body>
</html>