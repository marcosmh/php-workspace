<?php
    
    echo "Variables & Constants ******  <br/><br/>";

    $title = "GloboTicket";

    define('TITLE','GloboTicket-C');

    echo $title;
    echo "<br/>";
    echo TITLE;
    echo "<br/>";

    $skillLevel = 100;
    define('LANGUAGE','PHP');

    echo $skillLevel;
    echo "<br/>";
    echo LANGUAGE;
    echo "<br/>";

    printf('<p>My skill %s level is %d </p>', LANGUAGE,$skillLevel);

    echo "Data Types: String: ******  <br/><br/>";

    $price = '$42';
    $text = "This ticket costs $price";
    $text2 = "This ticket costs \"" . $price . "\"";

    echo "<p>$text</p>";
    echo "<p>$text2</p>";

    echo "Data Types: Numbers: ******  <br/><br/>";

    $skillLevels = 100;
    $confidenceLevel = "5E-1";

    echo $skillLevels;
    echo "<br/>";
    echo $confidenceLevel;
    echo "<br/>";

    echo "Data Types: Booleans and Others: ******  <br/><br/>";

    $competentEnough = 
        ( $skillLevel >= 100 ) &&
        ( $skillLevel <= 200 )
    ;

    $notCompetentEnough = 
    ( $skillLevel >= 100 ) ||
    ( $skillLevel <= 200 )
    ;
    
    var_dump($competentEnough);
    echo "<br/>";
    var_dump($notCompetentEnough);
    


?>