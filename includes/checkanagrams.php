<?php
  //Receive words
	$word1 = $_POST["word1"];
	$word2 = $_POST["word2"];
	
?>

<script>
	function compareAnagram() {
		a="<?php echo $word1?>";
		b="<?php echo $word2?>";

		//Give format and sort
		var y = a.toLowerCase().split("").sort().join(""),
				z = b.toLowerCase().split("").sort().join("");

		//Compare them
		if(y!=z) {
			window.location.href='../anagramComparison.php?false';
		} else {
			window.location.href='../anagramComparison.php?true';
		}

	}

	document.getElementById("anagram").innerHTML = compareAnagram();
</script>
