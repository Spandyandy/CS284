 m=  <html>
    <link rel="stylesheet" href="cloud.css">
    <link rel="stylesheet" href="flutter.css">
    
    <div class='tagCloud'>
    <header>Tag Cloud</header> 
        <ul>
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
            foreach ($randName as $key => $value){
               echo "<li style=\"font-size:1." .$value . "em\"> $key </li>\n";
            }
          ?>
        </ul>
    </div>


    <div class='flutter'>
    <header>Butterfly Census 2016</header> 

        <ul>
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
                foreach ($randName as $key => $value){
                   echo "<li style=\"font-size:1." .$value . "em\"> $key </li>\n";
                }
            ?>
        </ul>
    </div>

</html>