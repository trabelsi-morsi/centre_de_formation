<div id="page_content_inner">
<div class="md-card">
<div class="md-card-content large-padding">
<h3 class="heading_a">Modification d'un réglement etudiant</h3>
                        </br>
                    <form id="form_validation" class="uk-form-stacked" method="POST" enctype="multipart/form-data" action='index.php?controller=reglement_etudiant&action=modif' >

                         <div class="uk-width-medium-1-2">
                                <div class="uk-form-row">
                                
                              <label for="val_select" class="uk-form-label">Inscription</label>
                               <select id="val_select" onchange="change()" required data-md-selectize name="id_ins">
                                    <OPTION value=""></OPTION>
                                         <?php
                                                              
                                           foreach ($variable as $res) {
                                            $selected="";
                                            if($tab[0]->id_ins==$res->id_ins)
                                               {
                                                   $selected="selected";
                                                                                
                                                }

                                             echo ' <OPTION '.$selected.' value="'.$res->id_ins.'"> '.$res->nom.' '.$res->prenom.'</OPTION> ' ;
                                            }
                                          ?>
                                 </select> 
                           </div>
                        </div>
                        <br>
                        <div class="uk-width-medium-1-2">
                        <div class="parsley-row uk-margin-top">
                                    <div class="md-input-wrapper"><label for="val_birth"><span class="req"></span></label><input type="text" value="<?php echo $tab[0]->datee; ?>" name="datee" id="val_birth" required="" class="md-input" data-parsley-americandate="" data-parsley-americandate-message="This value should be a valid date (MM.DD.YYYY)" data-uk-datepicker="{format:'YYYY-MM-DD'}" data-parsley-id="8"><span class="md-input-bar"></span></div>
                                    
                              </div>
                              </div>
                              <br>

                        <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><label id="resultatajax"></label>  <input id="montant" type="number" max="" min="1" value="<?php echo $tab[0]->montant; ?>" required name='montant' class="md-input"  /><span class="md-input-bar"></span></div>    
                                </div>
                         </div>

                            <br><br>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <input type="submit" class="md-btn md-btn-primary" value="Submit">
                            </div>
                        </div>
                        <input type='hidden' name='id_regl' value="<?php echo $tab[0]->id_regl; ?> "/> 
                    </form>
                </div>
 </div>
 </div>
<script type="text/javascript">
  

  function change()
  {

    var val=document.getElementById("val_select").value;
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
    xmlhttp.open("GET", "page.php?controller=reglement_etudiant&action=somme&inscri="+val, true);
    xmlhttp.send();



  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


