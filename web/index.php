<?php

$connexion = new PDO('mysql:dbname=box;host=127.0.0.1', 'root', 'root');
$query = "select * from card";
$res = $connexion->query($query);

if ($res)
{
	while($data = $res->fetch()) {
		var_dump($data);
	}  
}
?>
<a href="./accueil.php">Accueil</a>
<a href="./cards.php">Cartes</a> <!-- Ajout/modification/suppression de cartes -->
<a href="./box.php">Boites</a> <!-- Ajout/modification/suppression de boites -->
<a href="./in.php">Boites</a> <!-- Ajout/modification/suppression de boites -->


<?php
/*

TODO :
1. Créer le menu carte : table card
2. Créer le menu boite : table : regroupement, box
3. integrer des cartes à des regroupements : table : box_card

Jour 1 : ajout des cartes dans un regroupement
Jour 5 : Première connexion, on vérifie la date de la boite 1
Si null : On lui propose le contenu de la boite 1 et on s'arrète là
Sinon (si date différente du jour) : 
Jour 7 : On lui propose le contenu de la boite 1 et on regarde la date de la boite 2
Si null : On lui propose le contenu de la boite 2 et on s'arrète là
...

Si aucune boite n'a de date à null, on propose le contenu de toutes les boites du regroupement.

Proposer un bouton reset.


*/
?>