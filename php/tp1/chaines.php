<?php
    # Question 1
    $text = 'Nous allons tester <br> <br> <br> <br> <br> <br> <br> <br> <br> quelques <EM>exemples</EM> <br> de fonctions de manipulation de chaîne de caractères<P>';
    echo $text;

    # Question 2
    echo nl2br($text);
    echo strip_tags($text);
    echo '<br><br>';
    echo strtoupper($text);
    echo strrev($text);
    echo '<br><br>';
    echo ucwords($text);
    #echo crypt($text); #changes the value of the text

    # Question 3
    echo substr(string: $text,offset: 5,length: 6);
    echo '<br>';
    echo '<br>';

    # Question 5
    # Supprimer les balises HTML et les sauts de ligne
    $texte_sans_balises = strip_tags($text);
    $texte_sans_br = str_replace(['<br>'], '', $texte_sans_balises); # Works but replaces with a null character which is still visible
    # The only code that works is preg_replace('/\s+/', ' ', $texte_sans_balises);
    # Découper la chaîne en morceaux de 10 caractères
    $longueur = strlen($texte_sans_br);
    echo "<pre>"; # Cette balise s'applique pour ce qui est entre elle
    for ($i = 0; $i < $longueur; $i += 10) {
        echo substr($texte_sans_br, $i, 10) . "\n";
    }
    echo "</pre>";
?>