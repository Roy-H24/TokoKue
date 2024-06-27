<?php 
$menu = "kontak";
include 'header.php';
?>
    <div class="container">
       Kontak
    </div>
    </div>
    <div class="container d-flex justify-content-center">
			<div class="row my-2 mx-2">
				<div class="col-md-6">
			<img width="100%" src="https://png.pngtree.com/png-vector/20190725/ourlarge/pngtree-message-icon-design-vector-png-image_1587713.jpg" alt="IMG">	
		</div><!--col-->
			<div class="col-md-6">
					<h2 class="form-title">Contact us</h2>
						<p class="justify text-muted">Have an enquiry or would like to give us feedback?<br>Fill out the form below to contact our team.</p>

					<form>
						<div class="form-group pt-2 pl-1">
							<label for="exampleInputName">Nama</label>
							<input type="text" class="form-control" id="exampleInputName">
						</div>

						<div class="form-group pl-1">
							<label for="exampleInputEmail1">Email</label>
 						 	<input type="email" class="form-control" id="exampleInputEmail1">
						</div>

						<div class="form-group pl-1">
    						<label for="exampleFormControlTextarea1">Pesan</label>
    						<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>

  						</div>
  						<div class="row">
  							<div class="col-md-3 offset-md-9"><button type="submit" class="btn btn-primary">Send</button></div>
  						</div>
						
  						
  					</form>
						
			</div><!--col-->
		</div><!--row-->
		</div>
<?php include 'footer.php';?>