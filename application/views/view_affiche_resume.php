<?php
$this->db->select('*');
$query_resume = $this->db->get('t_resume');
 ?>
<section class="flex container">
  <?php foreach ($query_resume->result() as $row)
  { ?>
  <div class="z-depth-5" style="width:100%">
    <h3 class="p-10"><?php echo $row->nom_resume ?></h3>
    <p class="p-10"><?php echo $row->text_resume ?></p>
    <span class="left-align w-100">Séance du : <?php echo $row->date_resume ?></span>
  </div>
<?php } ?>
</section>
