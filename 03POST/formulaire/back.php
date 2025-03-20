<h1>formulaire 3</h1>
<a href="index.php"> aller formaulaire 2</a>
<hr>

<?php

print '<pre>';
print_r($_POST);
print '<pre>';


if(empty($_POST["pseudo"]) || empty($_POST["email"]))
{

    echo "erreur tous les champs doivent être remplis";
}else{

    echo "prenom posté :  $_POST[pseudo] <br> " ;
    echo "email posté :  $_POST[email] <br> " ;

}

 // ************* autre possibilité****************

//  if(empty( $_POST['pseudo'] )){ 
//     echo " ERREUR pseudo champs oligatoire";
// }

// else{

//         echo "Prénom posté :  $_POST[pseudo] <br>";
    
//     //    _________

//     }

// if(empty( $_POST['email']) ){ 
//         echo " ERREUR email champs oligatoire";
//     }
    
// else{
        
//         echo "email postée : $_POST[email] <hr>";
//     }   
