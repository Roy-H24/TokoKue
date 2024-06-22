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
    <div class="col-sm-3 mb-3">
      <a href="https://api.whatsapp.com/send?phone=6285741779225&text=Halo, saya ingin memesan kue <?php echo $row["nm_produk"] ?>">
      <img class="img-produk" src="<?php echo $row["img"] ?>" alt="trulli">
      <?php echo $row["nm_produk"] ?>
      <h3><?php echo $row["harga"] ?></h3>
      </a>
    </div>
  <?php }
} else {
  echo "0 results";
}

?>
</div>


</div>
<?php include 'footer.php';?>