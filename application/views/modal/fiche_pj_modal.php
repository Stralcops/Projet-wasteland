<?php
  $this->db->where('id_pj', $id_perso);
  $query = $this->db->get('t_pj');
  $pj=  $query->result_array();
  foreach ($pj as $info_pj) {
 ?>
<div class="row m-10">

    <h4 class="td-u mb-50">Fiche de personnage : <?php echo $info_pj['pj_perso'] ?></h4>
    <form class="" id="fiche_personnage">


      <div class="row">
        <div class="col s2">
        <span>Joueur :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_joueur'] ?>">
        </div>
        <div class="col s2">
        <span>Perso :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_perso'] ?>">
        </div>
        <div class="col s2 offset-s1">
        <span>Peuple :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_peuple'] ?>">
        </div>
        <div class="col s2">
        <span>Métier :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_metier'] ?>">
        </div>
        <div class="col s2">
        <span>Sexe :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_sexe'] ?>">
        </div>
        <div class="col s2">
        <span>Origine :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_origine'] ?>">
        </div>
        <div class="col s2">
        <span>Héritage :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_heritage'] ?>">
        </div>
      </div>
      <div class="divider"></div>
      <div class="row">
        <div class="col s2">
        <span>Bonne aventure (base) :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_ba'] ?>">
        </div>
        <div class="col s2">
        <span>Bonne aventure acutelle :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_cba'] ?>">
        </div>
        <div class="col s2 offset-s1">
        <span>Eclat :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_eclat'] ?>">
        </div>
        <div class="col s2 offset-s1">
        <span>Expérience :</span> <input disabled type="text" name="" value="<?php echo $info_pj['pj_exp'] ?>">
        </div>
      </div>
      <div class="divider"></div>
      <div class="row">
        <div class="col s12  center-align  darken-4 ">
          <h5 class="mb-20 col s12">Attributs</h5>
          <div class="col s2 offset-s1">
            <span>ADResse :</span> <input id="" type="number" name="" value="<?php echo $info_pj['pj_adr'] ?>">
          </div>
          <div class="col s2">
            <span>PUIssance :</span> <input id="" type="number" name="" value="<?php echo $info_pj['pj_pui'] ?>">
          </div>
          <div class="col s2">
            <span>CLAirvoyance :</span> <input id="" type="number" name="" value="<?php echo $info_pj['pj_cla'] ?>">
          </div>
          <div class="col s2">
            <span>PREsence :</span> <input id="" type="number" name="" value="<?php echo $info_pj['pj_pre'] ?>">
          </div>
          <div class="col s2">
            <span>TREmpe :</span> <input id="" type="number" name="" value="<?php echo $info_pj['pj_tre'] ?>">
          </div>
        </div>
        <div class="col s12 center-align  darken-4 ">
              <h5 class="mb-20 col s12">Combat</h5>
        </div>

      </div>

    </form>

</div>
<?php } ?>
