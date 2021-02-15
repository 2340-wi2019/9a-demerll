<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
        //Task 3.1: Change these items to reflect
        //four of your favorite things
        $my_favorite_things = array (
            "Traveling",
            "Photograpy",
            "UX/UI design",
            "Ballet"
        );
    ?>

    <h1>My Favorite Things</h1>
        <ol>
    <?php


foreach($my_favorite_things as $value){
    echo "<li>" . $value . "</li>";
}
?>
        </ol>
    </body>

                             		