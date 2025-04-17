<?php
    $title = 'Globoticket';

    //if statement loose comparison
    if( $title == 'Globoticket') {

    }

    //if statement strict comparison
    if($title === 'Globoticket') {
        
    }

    //if/else statement 
    if($title === 'Globoticket') {

    } else {

    }

    $skillLevel = 100;

    $competentEnough = 
    ( $skillLevel >= 100 ) &&
    ( $skillLevel <= 200 )
    ;

    $notCompetentEnough = 
    ( $skillLevel >= 100 ) ||
    ( $skillLevel <= 200 )
    ;

    if( $competentEnough ) {
        echo '<p>You are competent enough.</p>';
    } else {
        echo '<p>You still need some learning to do.</p>';
    }

    echo ($competentEnough) ?
        '<p>You are competent enough!! </p>' :
        '<p>You still need some learning to do!!.</p>'


?>