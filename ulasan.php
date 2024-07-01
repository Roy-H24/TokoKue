<?php 
$menu = "ulasan";
include 'header.php';
?>
    <div class="container">
       Ulasan
       <section style="background-color: #ad655f;">
    <section class="komentar" id="komentar" data-aos="fade-up" data-aos-duration="1500">
      <header>
        <h4 class="judul-video">komentar</h4>
      </header>
      <form action="komentar.php" method="POST" class="komentar-form">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="Nama" required>

        <label for="message">Pesan</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="sub,it">kirim</button>
      </form>
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="card text-body">
          <div class="card-body p-4">
            <h4 class="mb-0">Komentar Terbaru</h4>
            <p class="fw-light mb-4 pb-2">Bagian Komentar terbaru oleh pengguna</p>

            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Marisa clau</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    juni,23 2024
                    <span class="badge bg-primary">Tertunda</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                Saya sangat suka donat dan cup cake nya di toko ini rasanya sangat enak sekali, meskipun dengan harga yang agak lebih mahal daripada di toko lain atau di pasar tapi selalu ada kepuasan dan sebanding lah harga dan kualitas. Ukurannya juga cukup besar jadi nikmat sekali untuk dijadikan camilan.
                </p>
              </div>
            </div>
          </div>

          <hr class="my-0" />

          <div class="card-body p-4">
            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Larasati</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    juni, 15 2024
                    <span class="badge bg-success">Berhasil</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="text-success"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-danger"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                "Enak Banget Sampai Mau Meninggal"
                </p>
              </div>
            </div>
          </div>

          <hr class="my-0" style="height: 1px;" />

          <div class="card-body p-4">
            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(33).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Alexa diandra</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                  mei 29, 2021
                    <span class="badge bg-danger">Rejected</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                  kue nya endulita,lembut dimulut,coklatnya lumer.
                </p>
              </div>
            </div>
          </div>

          <hr class="my-0" />

          <div class="card-body p-4">
            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(24).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Merissa</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    Mei 28, 2024
                    <span class="badge bg-primary">Pending</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                  mantul!!!!!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section style="background-color: #ad655f;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="card text-body">
          <div class="card-body p-4">
            <h4 class="mb-0">Komentar Terbaru</h4>
            <p class="fw-light mb-4 pb-2">Bagian Komentar terbaru oleh pengguna</p>

            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Maureen</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    March 07, 2021
                    <span class="badge bg-primary">Pending</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                  Lorem Ipsum is simply dummy text of the printing and typesetting
                  industry. Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s, when an unknown printer took a galley of type and
                  scrambled it.
                </p>
              </div>
            </div>
          </div>

          <hr class="my-0" />

          <div class="card-body p-4">
            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(26).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Lara Stewart</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    March 15, 2021
                    <span class="badge bg-success">Approved</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="text-success"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-danger"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                  Contrary to popular belief, Lorem Ipsum is not simply random text. It
                  has roots in a piece of classical Latin literature from 45 BC, making it
                  over 2000 years old. Richard McClintock, a Latin professor at
                  Hampden-Sydney College in Virginia, looked up one of the more obscure
                  Latin words, consectetur, from a Lorem Ipsum passage, and going through
                  the cites.
                </p>
              </div>
            </div>
          </div>

          <hr class="my-0" style="height: 1px;" />

          <div class="card-body p-4">
            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(33).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Alexa Bennett</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    March 24, 2021
                    <span class="badge bg-danger">Rejected</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                  There are many variations of passages of Lorem Ipsum available, but the
                  majority have suffered alteration in some form, by injected humour, or
                  randomised words which don't look even slightly believable. If you are
                  going to use a passage of Lorem Ipsum, you need to be sure.
                </p>
              </div>
            </div>
          </div>

          <hr class="my-0" />

          <div class="card-body p-4">
            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(24).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">Betty Walker</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    March 30, 2021
                    <span class="badge bg-primary">Pending</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                  It uses a dictionary of over 200 Latin words, combined with a handful of
                  model sentence structures, to generate Lorem Ipsum which looks
                  reasonable. The generated Lorem Ipsum is therefore always free from
                  repetition, injected humour, or non-characteristic words etc.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
<?php include 'footer.php';?>
