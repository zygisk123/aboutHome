<?php
$typeFlat = false;
?>

<form method = "POST">
  <div class="mb-3">
    <label for="adress" class="form-label">Adress</label>
    <input type="text" class="form-control" name="adress" id="adress">
  </div>

  <div class="mb-3">
    <label for="roomCount" class="form-label">Rooms</label>
    <input type="text" class="form-control" name = "roomCount" id="roomCount">
  </div>

  <div class="mb-3">
    <label for="type" class="form-label">Building type</label>
    <select name="buldingType" id = "type" class="form-select" onchange="checkType()" aria-label="Default select example">
        <option selected >Select building type</option>
        <option  value="0">Flat</option>
        <option value="1">House</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="floor" class="form-label">Floor</label>
    <input type="text"  class="form-control" name = "floor" id="floor">
  </div>
  <button type="submit" name = "addHouse" class="btn btn-primary">Submit</button>
</form>



<script>

    function checkType() {
        buildingType = document.getElementById("type").value;
        floor = document.getElementById("floor");

        if (buildingType == 0) {
            floor.disabled = "";
        }
        if (buildingType == 1) {
            floor.disabled = "disabled";
        }
    }
</script>