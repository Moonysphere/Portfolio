<?php
$donne = array(
    "nomproduit" => "clou",
    "quantiter" => mt_rand(1, 1000),
    "prix" => 0.10
);

$donne2 = array(
    "nomproduit" => "marteaux",
    "quantiter" => mt_rand(1, 100),
    "prix" => 19
);
$donne3 = array(
    "nomproduit" => "regle",
    "quantiter" => mt_rand(1, 100),
    "prix" => 5
);

$donne4 = array(
    "nomproduit" => "pvc",
    "quantiter" => mt_rand(1, 100),
    "prix" => 5
);
$donne5 = array(
    "nomproduit" => "peinture",
    "quantiter" => mt_rand(1, 100),
    "prix" => 9
);


function multi ($num1,$num2 ){
    $resultat = $num1 * $num2;

    return($resultat);
}
function toto ($p,$p2,$p3,$p4,$p5){

    $toto = $p + $p2 + $p3 + $p4 + $p5;
    return ($toto);
}

function ttc ($ht){

    $resultat = $ht/100*20;
$resultat = $resultat + $ht;
    return($resultat);
}
function tva ($tva){

  $resultat = $tva/100*20;

    return ($resultat);
}

$date = date("m/d/y");
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Facture</title>
</head>

<body>
    <div class="box">
        <div class = "topfacture">
<img class= "logo" src="image/CastoramaLogo.png" alt="logocastorama">
<h2>Facture</h2>
</div>
<div class="adresse ">
<ul>
<li>Adresse : 35 rue Plombiers 75000 Paris</li>
<li>Numero de siren : 123 456 789</li>
<li>Numero de telephone : 04 12 13 14 12</li>
<li>Enregistré au RCS/RM de Paris</li>
</ul>
</div>
<div class="num">
<ul>
    <li>Numero de facture: 00001</li>
    <li>Numero de client: 038429</li>
    <li>Date : <?php echo ($date); ?></li>
</ul>
</div>


<table class="table1">
    <thead>
        <tr>
            <th colspan="4">Désignation des produits ou prestations</th>
            <th>Quantité</th>
            <th>Prix unitaire ht</th>
          <th>Total HT</th>
        </tr>
    </thead>
    <tbody>
        <tr >
            <td colspan="4"><?php echo ($donne["nomproduit"]);?></td>
            <td><?php echo ($donne["quantiter"]);?></td>
            <td><?php echo ($donne["prix"]);?></td>
            <td><?php echo ($resultat=multi($donne["quantiter"],$donne["prix"]));?></td>
        </tr>
        <tr class="lign1">
            <td colspan="4"><?php echo ($donne2["nomproduit"]);?></td>
            <td><?php echo ($donne2["quantiter"]);?></td>
            <td><?php echo ($donne2["prix"]);?></td>
            <td><?php echo ($resultat2=multi($donne2["quantiter"],$donne2["prix"]));?></td>
        </tr>
        <tr>
            <td colspan="4"><?php echo ($donne3["nomproduit"]);?></td>
            <td><?php echo ($donne3["quantiter"]);?></td>
            <td><?php echo ($donne3["prix"]);?></td>
            <td><?php echo ($resultat3=multi($donne3["quantiter"],$donne3["prix"]));?></td>
        </tr>
        <tr class="lign1">
            <td colspan="4"><?php echo ($donne4["nomproduit"]);?></td>
            <td><?php echo ($donne4["quantiter"]);?></td>
            <td><?php echo ($donne4["prix"]);?></td>
            <td><?php echo ($resultat4=multi($donne4["quantiter"],$donne4["prix"]));?></td>
        </tr>
        <tr>
            <td colspan="4"><?php echo ($donne5["nomproduit"]);?></td>
            <td><?php echo ($donne5["quantiter"]);?></td>
            <td><?php echo ($donne5["prix"]);?></td>
            <td><?php echo ($resultat5=multi($donne5["quantiter"],$donne5["prix"]));?></td>
        </tr>
    </tbody>
</table>

<div class="resultat">
    <table class="table2">
        <tr><td>Total HT : <?php echo ($resultatht =toto ($resultat,$resultat2,$resultat3,$resultat4,$resultat5));?> </td></tr>
        <tr><td>Montant de TVA : <?php echo(tva ($resultatht))?> </td></tr>
        <tr><td>Total TTC : <?php echo(ttc ($resultatht))?> </td></tr>
        
    </table>
   
</div>


<div class="mention">
    <p>Les présentes conditions générales de vente régissent les relations entre la société CASTORAMA France S.A.S, S.A au capital de 304 186 300 €, dont le siège social est situé : Parc d'activités à Templemars (59175), RCS Lille 451 678 973, et les clients souhaitant passer commande sur le site www.castorama.fr.

*Service client : 09 74 75 01 74 (prix d'un appel local)

Le fait, pour tout client, de passer commande sur le site « www.castorama.fr » implique son acceptation sans réserve des présentes conditions générales de vente.

Tous les magasins CASTORAMA proposent un service de retrait des produits en Drive, suite à une commande passée sur le site www.castorama.fr.

Ces conditions s'appliquent lors de ventes réalisées au moyen de tout site internet édité par CASTORAMA France, dont www.castorama.fr, que les produits soient livrés ou retirés dans un magasin CASTORAMA , et ce à l'exclusion de toutes autres conditions, notamment celles applicables dans les magasins CASTORAMA.

Ces conditions générales de vente peuvent être modifiées à tout moment par CASTORAMA.</p>
</div>











</div> 
</body>
</html>