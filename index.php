<?php

/**
 * 1. Récupérer le contenu du fichier lire.txt à l'aide de la fonction file_get_contents
 * 2. Afficher le contenu du fichier dans un div
 */
// TODO Votre code ici.

echo "<div>" . file_get_contents('lire.txt') . "</div>";
echo "<br><br>";

/**
 * 3. Faites la même chose à l'aide d'une boucle et de la fonction fgets(), récupérez les lignes du fichier une à une.
 * 4. Affichez le contenu de chaque ligne dans un nouveau span.
 * --> N'oubliez pas de fermer votre fichier.
 */
// TODO Votre code ici.
$text = fopen('lire.txt', 'r');
$size = filesize('lire.txt');
while ($content = fgets($text)){
    echo nl2br($content);
}
fclose($text);
echo "<br><br>";
/**
 * 5. Récupérez les caractères un à un et n'affichez le caractère que s'il s'agit d'autre chose qu'un espace, qu'un point ou qu'un point d'interrogation / exclamation.
 * --> N'oubliez pas de fermer votre fichier.
 */
// TODO Votre code ici.
$text = fopen('lire.txt', 'r');
while ($char = fgetc($text)){
    echo $char !== " " && $char !== "." && $char !== "?" && $char !== "!" ? $char : null;
}
fclose($text);
/**
 * 6. Ne cherchez pas la logique dans cet exo ^^
 */