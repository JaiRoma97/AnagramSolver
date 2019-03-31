<?php
    $finder = '';
    $comparison = 'active';
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
                <form action="includes/checkanagrams.php" method="post">
                    <div class="form">
                        <h1>Are these words anagrams?</h1>
                        <input type="text" name="word1" placeholder="First word">
                        <input type="text" name="word2" placeholder="Second word">
                        <button type="submit" name="check" class="anagram form-check">Check them!</button>
                        <?php
							if(isset($_GET["true"])) {
							echo "<br><br>";
							echo '<span style="color:#009933;text-align:center;">They are anagrams!</span>';
							}
							if(isset($_GET["false"])) {
							echo "<br><br>";
							echo '<span style="color:red;text-align:center;">They are not anagrams...</span>';
							}
						?>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
