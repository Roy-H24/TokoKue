
<?php 
$menu = "beranda";
include 'header.php';
?>
<video width="100%" height="800" controls>
  <source src="video/video.mp4" type="video/mp4">
  <source src="video/video.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
    <selection class="grid">
        <div class="container">
            <div class="content">
                <div class="content-left">
                    <div class="info">
                        <h2>Silakan Order Kue Kami <br>Berbagai macam rasa dan bentuk</h2>
                        <p>Manjakan Lidah , <br>
                            Hangatkan Hati </p>
                    </div>
                    <a href="produk.php"><button>Pesan Sekarang</button></a>
                </div>
                <div class="content-right">
                    <img src="image/logo.jpeg" alt="trulli" width="100%" style="border-radius:50%">
                </div>
            </div>
        </div>
    </selection>
<?php include 'footer.php';?>