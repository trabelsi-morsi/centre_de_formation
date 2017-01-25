

<form method='post' enctype="multipart/form-data" action='index.php?controller=groupe&action=ajout'>

 <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Ajout d'un nouveau groupe </h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            

                            <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Formation</label>
                                                        <select id="val_select" required data-md-selectize name="id_formation">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                              
                                                                        foreach ($variable1 as $res) {

                                                                            echo ' <OPTION value="'.$res->id_formation.'"> '.$res->des_form.'</OPTION> ' ;
                                                                }
                                                               ?>
                                                      </select> 
                                                  </div>
                                                  <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Formateur</label>

                                                        <select id="val_select" required data-md-selectize name="id_formateur">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                              
                                                                        foreach ($variable2 as $res) {

                                                                            echo ' <OPTION value="'.$res->id_formateur.'"> '.$res->nom.'</OPTION> ' ;
                                                                }
                                                               ?>
                                                      </select> 
                                                  </div>


                                                  <br/>
                        	<div class="uk-input-group">
                            <span class="uk-input-group-addon"><i style="color: #e02631; "  class="uk-input-group-icon uk-icon-cog"></i></span>
                                <label>Désignation</label>
                                <input type="text"  required name='des_grp' class="md-input"  />
                              
  
                             </div><br/>
                             </div>
                             <div class="uk-width-medium-1-2">
                                                    <div class="uk-input-group">
                            <span class="uk-input-group-addon"><i style="color: #e02631; "  class="uk-input-group-icon uk-icon-cog"></i></span>
                                <label>Nbre d'heures</label>
                                <input type="number"  required name='nbreheure' class="md-input"  />
                              
  
                             </div><br/>
                             <div class="uk-input-group">
                            <span class="uk-input-group-addon"><i style="color: #e02631; "  class="uk-input-group-icon uk-icon-cog"></i></span>
                                <label>Prix/heure</label>
                                <input type="number"  required name='prixheure' class="md-input"  />
                              
  
                             </div><br/>
                             <div class="uk-input-group">
                            <span class="uk-input-group-addon"><i style="color: #e02631; "  class="uk-input-group-icon uk-icon-cog"></i></span>
                                <label>Frais du formateur</label>
                                <input type="number"  required name='fraisformateur' class="md-input"  />
                              
  
                             </div>

                             <br/>
                             <div class="uk-form-row">
                                    <button type="submit" style="float:right;" value='ajouter' class="md-btn md-btn-primary">Ajouter</button>
                                </div>

</div>
</div>
</div>
</div>
</div>




</form>

