<SCRIPT language="javascript">
function aff_fichier ( contenu ){
	var _div = document.getElementById("lecture");
	_div.innerHTML = contenu;
}
</SCRIPT>

<?php

function lire_fichier ( $abscence ){
	// --- Open the file
	$tableau=file( $abscence );
	
	// affichage du contenu du tableau
	$contenu = "";
	while ( $i < count($tableau) ){
		// --- reprise de l'ensemble du fichier
		$contenu = $tableau[i];
	}
	
	// --- Il s'agit ici d'afficher le résultat de la lecture dans ta div 'lecture'
	// --- appel à une fonction javascript
	echo '<SCRIPT language="javascript">aff_fichier("'.$contenu.'")</SCRIPT>';
}
// --- Affichage de tes liens :
//
echo '<a href="lire_fichier("abs-v.txt")">abs-v.txt</a>';

// --- Affichage de ta div :
echo '<div id="lecture" name="lecture"></div>';


?>