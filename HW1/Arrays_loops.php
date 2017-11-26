<?php
		$randName = array(
		'computer science' => "7",
        'Sewanee' => "5",
        'frogs' => "2",
        'CSCI' => "6",
        'computers' => "9",
        'applejack' => "4",
        'MySQL' => "6",
        'Star-Puppy' => "4",
        'USS Enterprise' => "5",
        'dogs' => "7",
        'buffalo' => "1",
        'ardvaark' => "5",
        'Lizard' => "2",
        'PHP' => "9",
        'jQuery' => "4",
        'star fleet' => "6",
        'Spock' => "8"
		);
        echo '<ul>';
        foreach ($randName as $key => $value){
            echo "<li style=\"font-size:1." .$value . "em\"> $key </li>";
        }
        echo '</ul>'
	//print_r($randName);
?>