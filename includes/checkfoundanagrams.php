<?php
    $finder = 'active';
    $comparison = '';

    require "sorter.php";
	//Receive words
    $searchedWord = $_POST["word"];
    //evitar problemas con mayusculas
    $searchedWord = strtolower($searchedWord);

	$sorter = new Sorter();
    $words = file('../files/dic.txt');
    //un poquito de orden (para mostrar por pantalla la palabra original despues, asi no la perdemos)
	$sortedSearchedWord = $sorter->sortAnagram($searchedWord);
?>

<html>
    <head>
                <meta charset="UTF-8">
                <title>Anagrams</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="../css/styles.css" />
    </head>

    <?php include '../includes/header.php'?>

    <body>
        <div id="content">
            <div class="anagram">
                <br><br>
                    <form action="../anagramfinder.php">
                    <div class="form">
                        <h1>Anagrams of <?php echo $searchedWord?>:</h1>
                        <?php
                            foreach ($words as $word) {
                                $sortedDictionaryWord = $sorter->sortAnagram($word);
                                $sortedDictionaryWord = trim($sortedDictionaryWord);
                                if (strcmp($sortedSearchedWord, $sortedDictionaryWord)==0) {
                                        echo "<font size='4' color='grey'>".$word."</font><br>";
                                        echo "\r\n";
                                }
                        }
                        ?> 
                    <br>                                    
                   <button type="submit" name="back" class="anagram form-check">Go back</button>
                    </div>
                    </form>
            </div>
        </div>
    </body>
</html>
