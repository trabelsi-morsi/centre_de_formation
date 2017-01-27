<?php
$file="formateur.xls";
$contenu="";

$contenu.= "<table  border ='1'>
<thead>
<tr>
                                                 <th >Type de formation</th>
                                               <th >CIN</th>
                                               <th >Nom</th>
                                               <th>Prenom</th>
                                               <th>Téléphone</th>
                                               <th >Adresse E-mail</th>
                                               <th>Date de naissance</th>
                                               
                                                <th>Frais/Heure</th>
</tr>
</thead>";


foreach ($res as $res2){
$contenu.='
<tr>
   <td>'.$res2->des_type.'</td>'. 
        '<td>'.$res2->cin.'</td>'. 
        '<td>'.$res2->nom.'</td>'.
        '<td>'.$res2->prenom.'</td>'.
        '<td>'.$res2->tel.'</td>'.
        '<td>'.$res2->mail.'</td>'.
        '<td>'.$res2->date_naiss.'</td>'.

    
    '<td>'.$res2->fraisheure.'</td> 

    </tr>   
';
}





$contenu.= "</table>";
