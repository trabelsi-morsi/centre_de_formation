
<form method='post' enctype="multipart/form-data"  action='index.php?controller=salle&action=modif'>
<div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Modification d'une salle</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1">

                            <div class="uk-input-group">
                        		<span class="uk-input-group-addon"><i style="color: #e02631; "  class="uk-input-group-icon uk-icon-cog"></i></span>
                                <label>Désignation</label>
                                <input type="text" name='nom' value="<?php echo $tab[0]->nom; ?>"   class="md-input"  />

                             </div>
                             <div class="uk-form-row">
                                    <button type="submit" style="float:right;" value='modifier' class="md-btn md-btn-primary">Modifier</button>
                                </div>

                             </div>
                             </div>
                             </div>
                             </div>
                             </div>

<input type='hidden' name='id_salle' value="<?php echo $tab[0]->id_salle; ?>" >


</form>



 
	 