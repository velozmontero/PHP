<?php
    // CONSTANTS
    define("TITLE", "PHP Practice");
?>

<!doctype html>
<html>
    <head>
        <title><?php echo TITLE; ?></title>
    </head>
    <body>
        <?php 
            echo ("Hello World!<br>");
            print ('Hello world!!<br>');
            
            $name = "Frank";
            echo "Hello " . $name . "<br>";
            // BOOLEAN
            $loggedIn = true;
            
            // INTEGER
            $myAge = 26;
            
            // FLOATING POINT
            $totalPrice = 232.38;
            
            //STRING
            $fullName = "Frank Veloz";
            echo "Hello, my name is $fullName and I am $myAge years old <br>";
        
            $user1 = array(
                        "username" => "velozmontero",
                        "fullname" => "Frank Veloz",
                        "age"      => 26,
                        "gender"   => "male",
                        "country"  => "US"
                    );
        
            $user2 = array(
                        "username" => "bravolidia08",
                        "fullname" => "Lidia Bravo",
                        "age"      => 26,
                        "gender"   => "female",
                        "country"  => "US"
                    );
        
            $masterArray = array(
                $user1,$user2
            );
            echo "<hr><br>";
            echo ("user 1 is " . $masterArray[0]['username'] . "<br>"); 
            echo ("user 2 is " . $masterArray[1]['username'] . "<br>");
        ?>
    </body>
</html>