<div id="page_content_inner"> 
<div class="md-card uk-margin-medium-bottom">
<div class="md-card-content">

                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>CIN</th>
                                <th>DATE DE NAISSANCE</th>
                                <th>MAIL</th>
                                <th>TEL</th>
                                <th>PHOTO</th>
                                <th>MODIFIER</th>
                                <th>SUPPRIMER</th>
                            </tr>
                            </thead>
                             <tbody>

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
foreach ($tab as $key ) 
{
	echo "<tr>";
	echo "<td>".$key->nom."</td>";
	echo "<td>".$key->prenom."</td>";
	echo "<td>".$key->cin."</td>";
	echo "<td>".$key->date_naiss."</td>";
	echo "<td>".$key->mail."</td>";
	echo "<td>".$key->tel."</td>";
	echo "<td><img src='img/".$key->photo."' width=70px height=50px/></td>";
	echo '<td><a class="md-fab md-fab-success" href="index.php?controller=etudiant&action=modif1&id_etd='.$key->id_etd.'" id="invoice_add">
            <i class="material-icons">&#xE150;</i>
        </a></td>'.
	
	 '<td><a class="md-fab md-fab-accent"  data-uk-modal="{target:\'#modal_header_footer\'}" onclick="idsupp(\''.$key->id_etd.'\')" href="#" style="
    width: 50px;
    height: 50px;
    background-color : #e53935 ; 
">
            <i class="material-icons" style="
    font-size: 25px;
    margin-top: -5px;
">delete</i>
        </a></td>';
	echo "</tr>";

}
echo "</table>";
?> 
       </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
 <div class="md-fab-wrapper">
        <a class="md-fab md-fab-success" href="index.php?controller=etudiant&action=ajout1" id="invoice_add">
            <i class="material-icons">&#xE145;</i>
        </a>
</div>
</div>
</div>
<script>             
               
function afficheimg(val)
{ 
document.getElementById("imgmodol").src = "images/"+val;
}

function idsupp(val)
{

document.getElementById("hrefsupp").href = "index.php?controller=etudiant&action=supp&id_etd="+val;
 

}
               </script> 