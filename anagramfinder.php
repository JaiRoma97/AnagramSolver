<?php
    $finder = 'active';
    $comparision = '';
?>

<html>
    <head>
                <meta charset="UTF-8">
                <title>Anagrams</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <?php include 'includes/header.php'?>

    <body>

        <div id="content">
            <div class="anagram">
                <br><br>
                <form action="includes/checkfoundanagrams.php" method="post">
                    <div class="form">
                        <h1>Find all the anagrams of a word</h1>
                        <input type="text" name="word" placeholder="Word">
                        <button type="submit" name="find" class="anagram form-check">Search anagrams!</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
