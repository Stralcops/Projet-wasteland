<?php foreach ($query_mob->result() as $row)
{ ?>
<div class="card z-depth-5">
  <div class="name">
    <h4><?php echo $row->nom_mob; ?></h4>
    <p>PV max : <?php echo $row->hp_mob; ?></p>
    <p>PV restant : <input type="number" name="" value="<?php echo $row->hp_mob; ?>"></p>
  </div>
</div>
<?php } ?>
<a class="waves-effect waves-light btn modal-trigger red" href="#modal2">  <i class="material-icons">add</i></a>
