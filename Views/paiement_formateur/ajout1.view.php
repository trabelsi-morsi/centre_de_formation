

<form method='post' enctype="multipart/form-data" action='index.php?controller=paiement_formateur&action=ajout'>

 <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Ajout d'un nouveau paiement  </h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1">
                            

                            <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Groupe</label>
                                                        <select id="groupe" onchange="change()" required data-md-selectize name="id_grp">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                              
                                                                        foreach ($variable as $res) {

                                                                            echo ' <OPTION value="'.$res->id_grp.'"> '.$res->des_grp.'</OPTION> ' ;
                                                                }
                                                               ?>
                                                      </select> 
                            </div>
                                                 


                                                  <br/>
                          
                            

                            <div class="uk-grid">
                                    
                                    <div class="uk-width-medium-1-1">
                                        <div class="md-input-wrapper md-input-filled">
                                          <label id="resultatajax">Montant</label>
                                <input id="montant" type="number" max="" min="1" required name='montant' class="md-input"  />
                              
  </span></div>
                                        
                                    </div>
                                </div>

                            <br/>
                             <div class="parsley-row uk-margin-top">
                                    <div class="md-input-wrapper"><label for="val_birth">Date de paiement<span class="req">*</span></label><input type="text" name="datee" id="val_birth" required="" class="md-input" data-parsley-americandate="" data-parsley-americandate-message="This value should be a valid date (MM.DD.YYYY)" data-uk-datepicker="{format:'YYYY-MM-DD'}" data-parsley-id="8"><span class="md-input-bar"></span></div>
                                    
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

<script type="text/javascript">
  

  function change()
  {

    var val=document.getElementById("groupe").value;
   // alert(val);

       var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       // myObj = json.signify(this.responseText);
        //alert(myObj.base);
        //alert(myObj.date);
        //alert(v2);  
        //alert(myObj.rates[v2] );
       // document.getElementById("resultatajax").innerHTML = this.responseText;
       $("#resultatajax").html(this.responseText);

      document.getElementById("montant").max=document.getElementById("resultatajax").innerHTML ; 
      }
    };
    xmlhttp.open("GET", "page.php?controller=paiement_formateur&action=somme&grp="+val, true);
    xmlhttp.send();



  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>