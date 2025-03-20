<?php 

//BOUCLE FOR








// EXERCICE : affichez les numéros de 1 à 10 dans un tableau sur UNE SEULE LIGNE !
echo "<table border='1'>";
	echo "<tr>";

		for( $i = 1; $i <= 10; $i++ ){

			echo "<td> $i </td>";
		}

	echo "</tr>";
echo "</table> <hr>";

//************************************************************************** */

// EXERCICE : (boucles imbriquées) Créer un tableau avec 10 lignes contenant 10 cellules allant de 1 à 100 !

$compteur = 1; //Déclaration d'une variable avec la valeur de 1 (initialisation)

echo "<table border='3'>";

	for( $ligne = 1; $ligne <= 10; $ligne++ ){ //10 tours de boucles (pour les 10 lignes)
		
		echo "<tr>";

			for( $cellule = 1; $cellule <= 10; $cellule++ ){ //10 tours de boucles (pour les 10 cellules )

				//On passe 100 fois ici (création des 100 cases)
				echo "<td> $compteur </td>"; 
				$compteur++; //On incrémente donc on rajoute +1
			}

		echo "</tr>";
	}

echo "</table>";
//Autre version :
echo "<table border='1'>";
	for($ligne = 0; $ligne <= 9 ; $ligne++) //10 tours de boucle
	{
	    echo "<tr>"; 

	    	for($colonne = 1; $colonne <= 10; $colonne++) //10 tours de boucles
    		{
        		echo "<td>" . ( (10 * $ligne) + $colonne ) . "</td>"; 
    		}
	    echo "</tr>";
	} 
echo "</table><hr>";



//************************************************************************************** */

//EXERCICE : Parcourir/afficher toutes les infos de mes tableaux imbriqués ($multi) : grâce aux boucles foreach :
    foreach( $multi as $indice => $sous_tableau ){

        foreach( $sous_tableau as $cle => $valeur ){
    
            echo "$valeur <br>";
        }
    }
    
    echo "<hr>";
    //----------------------------------------------
    foreach( $multi as $sous_tableau ){
    
        foreach ($sous_tableau as $valeur ) {
    
            echo "$valeur <br>";
        }
    }
    
