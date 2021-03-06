<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger" href="#modal1">  <i class="material-icons">add</i></a>
<a class="waves-effect waves-light btn modal-trigger red" href="#modal2">  <i class="material-icons">add</i></a>

<div id="pj" class="">
</div>
<div id="mob" class="">
</div>












<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Ajouter un PJ</h4>
    <form class="row" id="add_pj" method="post">
           <div class="row">
             <div class="input-field col s6">
               <input placeholder="Placeholder" id="joueur_user" type="text" class="validate">
               <label for="joueur_user">Nom du joueur</label>
             </div>
             <div class="input-field col s6">
               <input placeholder="Placeholder" id="nom_user" type="text" class="validate">
               <label for="nom_user">Nom du perso</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s6">
               <input placeholder="Placeholder" id="hp_user" type="text" class="validate">
               <label for="hp_user">Nombre de pv</label>
             </div>

           </div>
    </form>
  </div>
  <div class="modal-footer">
    <a href="#!" id="ajouterPj" class="modal-close waves-effect waves-green btn-flat">Ajouter</a>
  </div>
</div>




<div id="modal2" class="modal">
  <div class="modal-content">
    <h4>Ajouter un mob</h4>
    <form class="row" id="add_pj" method="post">
           <div class="row">
             <div class="input-field col s6">
               <input placeholder="Placeholder" id="nom_mob" type="text" class="validate">
               <label for="nom_mob">Nom du mob</label>
             </div>
             <div class="input-field col s6">
               <input placeholder="Placeholder" id="hp_mob" type="text" class="validate">
               <label for="hp_mob">HP du mob</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s6">
               <input placeholder="Placeholder" id="psy_mob" type="text" class="validate">
               <label for="psy_mob">Psy du mob</label>
             </div>

           </div>
    </form>
  </div>
  <div class="modal-footer">
    <a href="#!" id="ajouterMob" class="modal-close waves-effect waves-green btn-flat">Ajouter</a>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function()
{
  $("#pj").load("<?php echo base_url() ?>index.php/welcome/affiche_pj");
  $("#mob").load("<?php echo base_url() ?>index.php/welcome/affiche_mob");
});
  $("#ajouterPj").click(function()
{
  data = {
  joueur_user   : $("#joueur_user").val(),
  nom_user   :$("#nom_user").val(),
  hp_user   : $("#hp_user").val(),
  };
  console.log(data);
  $.ajax({
        url : '<?php echo base_url()?>index.php/welcome/create_user', // La ressource ciblée
        type : 'POST', // Le type de la requête HTTP.
        data: data,
        success: function()
        {
          $("#pj").load("<?php echo base_url() ?>index.php/welcome/affiche_pj");
        },
        error: function()
        {
          alert('Shit');
        },
     });
});
  $("#ajouterMob").click(function()
{
  data = {
  nom_mob   : $("#nom_mob").val(),
  hp_mob   :$("#hp_mob").val(),
  psy_mob   : $("#psy_mob").val(),
  };
  console.log(data);
  $.ajax({
        url : '<?php echo base_url()?>index.php/welcome/create_mob', // La ressource ciblée
        type : 'POST', // Le type de la requête HTTP.
        data: data,
        success: function()
        {
          $("#mob").load("<?php echo base_url() ?>index.php/welcome/affiche_mob");
        },
        error: function()
        {
          alert('Shit');
        },
     });
});
</script>
