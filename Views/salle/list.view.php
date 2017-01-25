 <br/>
 <h2 class="heading_a uk-margin-bottom">Liste des Salles </h2>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-striped">
                            <thead>
				                          
								<tr style = "text-align: center;"> 
											   <th>Numéro</th>
											   <th>Designation</th>
											   <th colspan="2">Action</th>
								</tr>

                            </thead>
<tbody>
               <script>             
               


function idsupp(val)
{

document.getElementById("hrefsupp").href = "index.php?controller=salle&action=supp&id_salle="+val;
 

}
               </script>    

                        



                            <div class="uk-modal" id="modal_header_footer">
                                <div class="uk-modal-dialog">
                                    <div class="uk-modal-header">
                                        <h3 class="uk-modal-title">Confirmation</h3>
                                    </div>
                                    <p> Voulez vous supprimer cette salle ?</p>
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
		'<td>'.$res->id_salle.'</td>'. 
		'<td>'.$res->nom.'</td>'. 
		
	 	 	'<td> 
        <a class="md-fab md-fab-accent" href="index.php?controller=salle&action=modif1&id_salle='.$res->id_salle.'" style="
    width: 50px;
    height: 50px;
">
            <i class="material-icons" style="
    font-size: 25px;
    margin-top: -5px;
"></i>
        </a></td>'.

	 	 	'<td><a class="md-fab md-fab-accent"  data-uk-modal="{target:\'#modal_header_footer\'}" onclick="idsupp(\''.$res->id_salle.'\')" href="#" style="
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
        <a class="md-fab md-fab-accent" href="index.php?controller=salle&action=ajout1" style="background-color : #1976d2 ;" >
            <i class="material-icons">note_add</i>
        </a>
    </div>
	
	