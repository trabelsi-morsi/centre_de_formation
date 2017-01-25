

<form method='post' enctype="multipart/form-data" action='index.php?controller=calendrier&action=ajout'>

 <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Ajout d'un nouveau calendrier  </h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1">
                            

                            <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Heure</label>
                                                        <select id="val_select" required data-md-selectize name="heuredeb">
                                                         <OPTION value=""  ></OPTION>
                                                          <OPTION value="8"> 8:00-10:00</OPTION>
                                                          <OPTION value="10"> 10:00-12:00</OPTION>
                                                          <OPTION value="14"> 14:00-16:00</OPTION>
                                                         <OPTION value="16"> 16:00-18:00</OPTION> 
                                                      </select> 
                            </div>
                                                 


                                                  <br/>
                          
                            
                                 <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i style=""  class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <div class="md-input-wrapper"><label for="uk_dp_1">Date </label><input  name='datee' class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}"><span class="md-input-bar"></span></div>
                                        
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

