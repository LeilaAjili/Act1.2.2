<?php
?>

<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
<meta charset="utf-8" />
</head>
</html>
 



<?php

define('default_nb', '5');


function getArticle($nb=NULL)
{

    $nb = ($nb==NULL) ? default_nb : $nb;




    $articles = [
        [
            'titre' => 'Article 1',
            'texte' => 'Ceci est le premier article',
            'auteur' => 'Sylvie',
            'date' => '2021-10-06',
            
        ],
        [
            'titre' => 'Article 2',
            'texte' => 'Ceci est le deuxième article',
            'auteur' => 'Pierre',
            'date' => '2021-09-09',
        ],
        [
            'titre' => 'Article 3',
            'texte' => 'Ceci est le troisième article',
            'auteur' => 'Nathalie',
            'date' => '2022-10-10',
        ],
        [
            'titre' => 'Article 4',
            'texte' => 'Ceci est le quatrième article',
            'auteur' => 'Isabelle',
            'date' => '2023-10-10',
        ],
        [
            'titre' => 'Article 5',
            'texte' => 'Ceci est le cinquième article',
            'auteur' => 'Sophie',
            'date' => '2020-10-10',
        ],
        [
            'titre' => 'Article 6',
            'texte' => 'Ceci est le sixième article',
            'auteur' => 'Bilel',
            'date' => '2019-10-10',
        ]
    ];

//compare and sort
function sortFunction( $a, $b ) {

    return  strtotime($b["date"]) - strtotime($a["date"]);
}
usort($articles, "sortFunction");


//eliminate wrong dates

/*foreach($articles as $i => $ligne){
    
        $today = date("Y-m-d");
        
        if($articles[$i]['date'] > $today)
        unset($articles[$i]);
    
}*/

    
    echo"<table class='table'>
    <th>TITRE</th>
    <th>TEXTE</th>
    <th>AUTEUR</th>
    <th>DATE DE PUBLICATION</th>";
    
    echo "<tr>";
    foreach($articles as $i => $ligne){
        $timestamp1 = strtotime($articles[$i]['date']) ;
        $today = date("Y-m-d");
        $timestamp2=strtotime($today);
        
        
        
    foreach($ligne as $cle=>$valeur){
        if($timestamp1<=$timestamp2 )
        {
            
        echo("<td>".$valeur."</td>");
        
    
    }
   
}
    echo"</tr>";
    
}
echo "</table>";

}




?>

