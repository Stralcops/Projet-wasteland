<div class="row">
  <div class="draggable col s5 offset-s1 card">
    <h4>Liste des joueurs</h4>
    <table>
       <tr>
           <th>Joueur</th>
           <th>Personnage</th>
           <th>PV base</th>
           <th>PV restant</th>
           <th></th>
       </tr>
       <?php
       $query = $this->db->get('t_pj');

     foreach ($query->result() as $info_user)
     {

          // code...


        ?>
       <tr>
           <td><?php echo  $info_user->pj_joueur; ?></td>
           <td><?php echo $info_user->pj_perso ?></td>
           <td><?php echo  $info_user->pj_hp?></td>
           <td><?php echo  $info_user->pj_chp?></td>
           <td class="right-align">
             <div class="btn blue darken-4 ">
                 Action
             </div>
             <div class="btn green darken-4 modal_fiche_pj" data-id="<?php echo  $info_user->id_pj?>">
                 <i class="material-icons modal-trigger" href="#modal1">assignment</i>
             </div>
          </td>
       </tr>
     <?php } ?>
    </table>
  </div>
  <div class="col s4 offset-s1 card">
    <h4>Combat</h4>
    <div class="btn" >Commencer un combat</div>
  </div>

</div>
<div class="row ">
  <div class="draggable col s5 offset-s1 card">
    <h4>Bestiare</h4>
    <table>
       <tr>
           <th>Nom du mob</th>
           <th>PV base</th>
           <th>PV restant</th>
           <th></th>
       </tr>
       <?php
       $query = $this->db->get('t_mob');

     foreach ($query->result() as $info_mob)
     {
        ?>
       <tr>
           <td><?php echo $info_mob->mob_nom?></td>
           <td><?php echo  $info_mob->mob_hp?></td>
           <td><?php echo  $info_mob->mob_chp?></td>
           <td class="right-align">
             <div class="btn blue darken-4 ">
                 Action
             </div>
             <div class="btn green darken-4 modal_fiche_pj" data-id="<?php echo  $info_mob->id_mob?>">
                 <i class="material-icons modal-trigger" href="#modal1">assignment</i>
             </div>
          </td>
       </tr>
     <?php } ?>
    </table>
  </div>
</div>
<script type="text/javascript">
$('.modal_fiche_pj').click(function()
{
  var id_pj = $(this).attr("data-id");
  $('.modal').modal();
  $('#modal1').load("<?php echo base_url() ?>pj/fiche_pj_modal/"+id_pj);
});




$( function() {
   $( ".draggable" ).draggable(
     {
            drag: function(){
                var offset = $(this).offset();
                var xPos = offset.left;
                var yPos = offset.top;
                $('#posX').text('x: ' + xPos);
                $('#posY').text('y: ' + yPos);
            }
 })
   $('#posX').change(
     function()
     {
       console.log($('#posX').val());

     });
});



</script>
<div id="modal1" class="modal">

</div>
