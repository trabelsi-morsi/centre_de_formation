<br/> 
            <h4 class="heading_a uk-margin-bottom">Liste des Formateurs </h4>
            <div class="md-card uk-margin-medium-bottom">
              
            <form method='post' enctype="multipart/form-data" action='index.php?controller=formateur&action=affichtype&type='+type >
                <div class="uk-width-medium-1-1">
           <div class="uk-width-medium-1-1">
                   <div class="uk-form-row"  style=" width: 50%; float: left; ">
            
            
                                                      <label for="val_select" class="uk-form-label">Type</label>
                                                        <select id="val_select" required data-md-selectize name="type" >
                                                         <OPTION value="0">--TOUT--</OPTION>
                                                                <?php
                                                                    foreach ($tab2 as $res) {
                                                                        

                                                                            echo " <OPTION  value='".$res->id_type."'> ".$res->des_type."</OPTION> " ;
                                                        
                                                                    }
                                                                   ?>
                                                      </select> 
                                            
                                            </div>
                                             <div class="uk-form-row" style=" width: 50%; margin-left: 15%; padding-top: 32px; ">
                                  <button type="submit" style="float:right;" value='Rechercher' class="md-btn md-btn-primary">Rechercher</button>
                                </div>
                                            </div>
                                            </div>
                                            </form>






                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-striped">
                            <thead>

                               
                               
                                
				                          
								<tr style = "text-align: center;"> 
											   <th >Type de formation</th>
											   <th >CIN</th>
											   <th >Nom</th>
											   <th>Prenom</th>
											   <th>Téléphone</th>
											   <th class="uk-width-1-10 uk-text-center">Adresse E-mail</th>
											   <th>Date de naissance</th>
                                               <th>Photo</th>
                                                <th>Frais/Heure</th>
                                               <th class="uk-width-1-10 uk-text-center" colspan="2">Action</th>
								</tr>

                            </thead>
                            <tbody>
               <script>             
               
function afficheimg(val)
{ 
document.getElementById("imgmodol").src = "images/"+val;
}

function idsupp(val)
{

document.getElementById("hrefsupp").href = "index.php?controller=formateur&action=supp&id_formateur="+val;
 

}
               </script>    

                         <div class="uk-modal" id="modal_lightbox">
                                <div class="uk-modal-dialog uk-modal-dialog-lightbox">
                                    <button type="button" class="uk-modal-close uk-close uk-close-alt"></button>
                                    <img src="" id="imgmodol"/>
                                    
                                </div>
                            </div>



                            <div class="uk-modal" id="modal_header_footer">
                                <div class="uk-modal-dialog">
                                    <div class="uk-modal-header">
                                        <h3 class="uk-modal-title">Confirmation</h3>
                                    </div>
                                    <p> Voulez vous supprimer ce formateur ?</p>
                                    <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Annuler</button>
                                        <button type="button" class="md-btn md-btn-flat md-btn-flat-primary"> <a href="" id="hrefsupp">Confirmer</a></button>
                                    </div>
                                </div>
                            </div>


<?php	
	foreach ($tab as $res)
	{
		
		echo '<tr>'.
		'<td>'.$res->des_type.'</td>'. 
		'<td>'.$res->cin.'</td>'. 
		'<td>'.$res->nom.'</td>'.
		'<td>'.$res->prenom.'</td>'.
		'<td>'.$res->tel.'</td>'.
        '<td>'.$res->mail.'</td>'.
        '<td>'.$res->date_naiss.'</td>'.
		'<td><img onclick="afficheimg(\''.$res->photo.'\')" data-uk-modal="{target:\'#modal_lightbox\'}" style="width: 50px;" src="images/'.$res->photo.'"></td>'.
	 	'<td>'.$res->fraisheure.'</td>'.

	 	 	'<td> 
        <a class="md-fab md-fab-accent" href="index.php?controller=formateur&action=modif1&id_formateur='.$res->id_formateur.'" style="
    width: 50px;
    height: 50px;
">
            <i class="material-icons" style="
    font-size: 25px;
    margin-top: -5px;
"></i>
        </a></td>'.

	 	 	'<td><a class="md-fab md-fab-accent"  data-uk-modal="{target:\'#modal_header_footer\'}" onclick="idsupp(\''.$res->id_formateur.'\')" href="#" style="
    width: 50px;
    height: 50px;
    background-color : #e53935 ; 
">
            <i class="material-icons" style="
    font-size: 25px;
    margin-top: -5px;
">delete</i>
        </a></td>'.
		'</tr>';
	}
 
?>
	

                            </tbody>
                 



	


	       </table>
                    </div>
                </div>
            </div>




    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="index.php?controller=formateur&action=ajout1" style="background-color : #1976d2 ;" >
            <i class="material-icons">note_add</i>
        </a>
    </div>
	
	