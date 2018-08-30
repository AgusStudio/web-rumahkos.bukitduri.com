 <?php $this->load->view('header');?>
 <body>
    <!-- Navigation -->
    <?php $this->load->view('navigator');?>
    <!-- /.Navigator -->
    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">About
        <small>Rumahkos.Bukitduri.com</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Apa itu Rumahkos.Bukitduri.com?</a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
             The Modern Business in the kost:
Kami melayani Anda dengan sepenuh hati. Kami membantu Anda pemilik rumah kos dan rumah kontrakan dalam mempromosikan properti Anda. Kami juga mambantu para pencari rumah kos dan rumah kontrakan agar cepat mendapatkan rumah kos dan rumah kontrakan impian.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bagaiman Cara Bergabung?
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
              Anda dapat bergabung bersama kami baik sebagai pengelola bisnis rumah kontrakan atau rumah kos Anda Atau Anda yang hanya sebagai pengguna jasa sewa rumah kontrakan atau rumah kos.<br/>
              Bagaimana cara bergabungnya?<br/>
              Untuk bergabung dengan kami, Anda hanya perlu mengakses situs kami di rumahkos.bukitduri.com, dan klik tombol Daftar Segera, lengkasi form pendaftaran Anda, dan selamat Anda berhasil bergabung dengan kami.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Bagaimana memposting Rumah Kontrakan dan Rumah Kos?</a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
              Cara memposting Rumah Kontrakan dan Rumah Kos Anda cukup mudah.<br/>
              Anda cukup mengakses situs kami di rumahkos.bukitduri.com, Anda login sebagi pengelola. Kemudian pilih menu Kelola Kos untuk mengakses halaman admin pengelola rumah kontrakan dan rumah kos. Dalam halaman tersebut Anda dapat menambahkan, mengahapus, atau mengubah data properti rumah kos atau rumah kontrakan Anda, menambah data penyewa dan penghuni, melihat pesan-pesan pengaduan, melihat agenda survei, dan melihat dan mencetak laporan.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
    <!-- footer -->
    <?php $this->load->view('footer');?>
    <!-- /.footer -->
  </body>
</html>
