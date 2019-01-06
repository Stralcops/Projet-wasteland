<table>
    <thead>
      <tr>
          <th>Nom du mob</th>
          <th>HP du mob</th>
          <th>Psy du mob</th>
      </tr>

          <tbody>
    </thead>
      <?php
      $this->db->select('*');
      $query_mob = $this->db->get('t_mob');

    ?>


      <?php
      foreach ($query_mob->result() as $row)
      {
        ?>
        <tr>
        <td> <?php echo $row->nom_mob; ?></td>
        <td><input type="number" name="" value=" <?php echo $row->hp_mob; ?>"></td>
        <td><input type="number" name="" value="  <?php echo $row->psy_mob; ?>"></td>

           </tr>
<?php
      }
       ?>
         </tr>
     </tbody>
   </table>
