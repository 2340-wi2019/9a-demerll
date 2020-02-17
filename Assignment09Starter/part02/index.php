<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
        //Task 3.1: Change these items to reflect
        //four of your favorite things
        $my_favorite_things = array (
            "1.Traveling",
            "2.Photograpy",
            "3.UX/UI design",
            "4.Ballet"
        );
    ?>

    <h1>My Favorite Things</h1>

    <?php


foreach($my_favorite_things as $value){
    echo $value . "<br>";
}
?>

    </body>

                             		