<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">adress</th>
      <th scope="col">rooms</th>
      <th scope="col">house/flat</th>
      <th scope="col">floor</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($houses as $key => $house) {?>
        <tr>
            <td><?=$house->id?></td>
            <td><?=$house->adress?></td>
            <td><?=$house->roomCount?></td>
            <td><?=($house->isHouse)?"house":"flat"?></td>
            <td><?=$house->floor?></td>
        </tr>
    <?php } ?>
  </tbody>
</table>