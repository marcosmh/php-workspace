<?php

    $roles = ['buyer','seller','admin'];

    echo count($roles);
    echo "<br/><br/>";

    for($i = 0; $i < count($roles); $i++ ){
        echo $roles[$i] . "<br/>";
    }
    echo "<br/>";

    foreach($roles as $rol ){
        echo "$rol <br/>";
    }

    echo "<br/><br/>";

    $languages = [
        'PHP' => 'PHP: Hypertext Preprocessor',
        'VB' => 'Visual Basic',
        'JavaSE' => 'Java Standard Edition'
    ];

    var_dump( $languages );

    echo "<br/><br/>";

    foreach( $languages as $index => $lang ) {
        echo "$index: $lang<br/>";
    }

    

?>