<?php 
$menu = "produk";
include 'header.php';
?>
<style>
  a{
    text-decoration: none;
    color:black;
  }
  .img-produk{
    width: 100%;
    height:200px;
    object-fit: contain;
  }
</style>
<div class="container">

<div class="row">

<?php

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
    <div class="col-sm-3 mb-3 text-center p-3">
      <div class="card border border-danger " style="width: 18rem; height: 350px">
        <a href="https://api.whatsapp.com/send?phone=6285741779225&text=Halo, saya ingin memesan kue <?= $row["nm_produk"] ?>">
        <img class="img-produk mt-4" src="image/cake/<?= $row["image"]; ?>" alt="trulli">
          <div class="card-body">
            <h4 class="p-2"><?= ucwords($row["nm_produk"]) ?></h4>
            <p>Rp<?= number_format($row["harga"], 0, ',', '.'); ?></p>
          </div>
        </a>
      </div>
    </div>
  <?php }
} else {
  echo "0 results";
}

?>
</div>


</div>
<?php include 'footer.php';?>