

<table>
    <thead>
      <tr>
          <th>Joueur</th>
          <th>Nom du perso</th>
          <th>HP du perso</th>
      </tr>

          <tbody>
    </thead>
      <?php
      $this->db->select('*');
      $query = $this->db->get('t_pj');

    ?>


      <?php
      foreach ($query->result() as $row)
      {
        ?>
        <tr>
        <td> <?php echo $row->joueur_user; ?></td>
        <td> <?php echo $row->nom_user; ?></td>
        <td><input type="number" name="" value="<?php echo $row->hp_user; ?>"> </td>
           </tr>
<?php
      }
       ?>
         </tr>
     </tbody>
   </table>
