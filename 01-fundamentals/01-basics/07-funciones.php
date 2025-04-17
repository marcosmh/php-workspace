<?php

    function help($title, $margin = 3) {
        return "<p class=\"m-$margin\" >$title</p>";
    }

    function help2(string $title, int $margin = 3): string {
        return "<p class=\"m-$margin\" >$title</p>";
    }

    $markup = help('Globoticket', 5);
    $markup2 = help2('Globoticket', 6);

    echo $markup."<br/>";
    echo $markup2."<br/>";

    echo "<br/><br/>";

    $title = 'Globoticket';

    function DivTitle() {
        //global $title;
        $title = $GLOBALS['title'];

        return "<div>$title</div>";
    }

?>