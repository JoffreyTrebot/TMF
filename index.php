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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TrouveMonFilm</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="index.css" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

        <header>
            <img id="logo" src="img/logo_tmf.png">
            <h1 id="slogan">[ DESCRIPTION / PHRASE D'ACCROCHE ]</h1>
            <div class="container">
                <form id="formulaire" method="GET">
                    <div class="form-row">
                        <div class="col-lg-3">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Genre</option>
                                <?php 
                                    $genre = $tmdb_nl->getGenres();
                                    $value=1;
                                    for ($i=0; $i < count($genre['genres']) ; $i++) 
                                    { 
                                        ?>
                                        <option value="<?php echo $value ?>"><?php echo $genre['genres'][$i]['name']; ?></option>
                                        <?php
                                        $value++;
                                    
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect1">
                                <option selected>Année</option>
                                <?php 
                                    $value = 1;
                                    for($i = 2018; $i >= 1900; $i--){
                                        ?>
                                        <option value="<?php echo $value ?>"><?php echo $i ?></option>
                                        <?php
                                        $value++;
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect2">
                                <option selected>Trier par</option>
                                <option value="1">Popularité descendante</option>
                                <option value="2">Popularité ascendante</option>
                                <option value="3">Note descendante</option>
                                <option value="4">Note ascendante</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect3">
                                <option selected>Mots-clés</option>
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center">
                        <button type="submit" id="tmf_btn" class="btn btn-success col-6"><h3>TROUVE MON FILM</h3></button>
                    </div>
                </form>
            </div>
        </header>

    </body>
</html>