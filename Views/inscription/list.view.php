<div id="page_content_inner">
<div class="md-card uk-margin-medium-bottom">
<div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                
                                <th>ETUDIANT</th>
                                <th>GROUPE</th>
                                <th>REMISE</th>
                                <th>PRIX FINAL</th>
                                <th>MODIFIER</th>
                                <th>SUPPRIMER</th>
                            </tr>
                            </thead>
                             <tbody>
                <script>             
               

                        function idsupp(val)
                        {

                        document.getElementById("hrefsupp").href = "index.php?controller=inscription&action=supp&id_ins="+val;
                         

                        }
               </script> 





                            <div class="uk-modal" id="modal_header_footer">
                                <div class="uk-modal-dialog">
                                    <div class="uk-modal-header">
                                        <h3 class="uk-modal-title">Confirmation</h3>
                                    </div>
                                    <p> Voulez vous supprimer cet inscription ?</p>
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
                    echo "<td>".$key->nom." ".$key->prenom."</td>";
                    echo "<td>".$key->des_grp."</td>";
                    echo "<td>".$key->remise."</td>";
                    echo "<td>".$key->prixfinal."</td>";
                    echo '<td> 
                <a class="md-fab md-fab-accent" href="index.php?controller=inscription&action=modif1&id_ins='.$key->id_ins.'" style="
            width: 50px;
            height: 50px;
        ">
                    <i class="material-icons" style="
            font-size: 25px;
            margin-top: -5px;
        "></i>
                </a></td>';

                echo '<td><a class="md-fab md-fab-accent"  data-uk-modal="{target:\'#modal_header_footer\'}" onclick="idsupp(\''.$key->id_ins.'\')" href="#" style="
    width: 50px;
    height: 50px;
    background-color : #e53935 ; 
">
            <i class="material-icons" style="
    font-size: 25px;
    margin-top: -5px;
">delete</i>
        </a></td>' ;


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
        <a class="md-fab md-fab-success" href="index.php?controller=inscription&action=ajout1" id="invoice_add">
            <i class="material-icons">&#xE145;</i>
        </a>
</div>
</div>
</div>
