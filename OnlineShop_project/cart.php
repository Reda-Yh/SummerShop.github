<?php
    require_once("../inc/header.php");
?>

<!-- Body Content -->


<div class="col-md-12">
    <a class="badge bg-danger link" href="#">Empty shopping card</a>
</div>
<table class="table my-5">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Black t-shirt</td>
      <td>
      <form action="">
            <select class="form-control form-select w-12" id="exampleFormControlSelect1">
                <option selected value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </form>
      </td>
      <td>99&euro;</td>
      <td><img style="width: 50px;" src="/pictures/black_t-shirt.png" alt="Black t-shirt"></td>
      <td><a href="#">Delete</a></td>
    </tr>
    <tr>
        <td colspan="5" class="text-end"><strong>Total ammount : </strong>99&euro;</td>
    </tr>
  </tbody>
</table>

<div class="col-md-12">
    <a class="badge bg-black link" href="/OnlineShop_project/index.php">Go back to t-shirt category</a>
</div>

<div class="d-flex justify-content-end col-md-12">
    <form action="">
        <input type="submit" value="Pay" class="btn btn-outline-secondary">
    </form>
</div>



<?php
    require_once("../inc/footer.php");
?>