

<form method='post' enctype="multipart/form-data" action='index.php?controller=formation&action=ajout'>

 <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Ajout d'une nouvelle formation </h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1">
                            <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Type de Formation</label>
                                                        <select id="val_select" required data-md-selectize name="id_type">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                              
                                                                        foreach ($variable as $res) {

                                                                            echo ' <OPTION value="'.$res->id_type.'"> '.$res->des_type.'</OPTION> ' ;
                                                                }
                                                               ?>
                                                      </select> 
                                                  </div><br/>
                        	<div class="uk-input-group">
                        		<span class="uk-input-group-addon"><i style="color: #e02631; "  class="uk-input-group-icon uk-icon-cog"></i></span>
                                <label>Désignation</label>
                                <input type="text"  required name='des_form' class="md-input"  />
                              
  
                             </div>
                             <div class="uk-form-row">
                                    <button type="submit" style="float:right;" value='ajouter' class="md-btn md-btn-primary">Ajouter</button>
                                </div>

</div>
</div>
</div>
</div>
</div>




</form>

