@extends('layouts.main')

@section('container')

<style>
    .baru {
        font-family: poppins;
    }

    #warna {
        background-color:#386641;
        margin-left:4px;
    }

    #warna2 {
        background-color:green;
        margin-left:4px;
    }

    #warna2:hover {
        color:white;
        background-color:black;
    }
    #warna3 {
        background-color:#023e8a;
        margin-left:4px;
    }

    #warna3:hover {
        color:white;
        background-color:black;
    }

    #warna:hover {
        color:white;
        background-color:black;
    }

</style>

<div class="baru card mb-3">
  <div class="card-body text-center">
    <h6 align="left">Terima kasih telah berkunjung ke situs Booking Online Pendakian Gunung , melalui situs ini anda dapat melakukan pendaftaran untuk pendakian Gunung. Jika anda telah mendaftar, Silahkan <a class="text-decoration-none badge bg" id="warna3" href="/login">Login</a> . Tetapi jika belum mendaftar, anda wajib mempelajari Ketentuan Umum di bawah ini, dan anda harus menyetujuinya.</h6>
  </div>
  <div>
  <h4><marquee style="color:red;" behavior="" direction=""> Pendaftar baru, wajib membaca dan mempelajari semua persyaratan di bawah ini !!!</marquee></h4>
  </div>
</div>

<div class="baru card mb-3 text-center">
<div class="card-body text-center">
    <h6>WAJIB DILAKUKAN OLEH PENDAKI</h6>
    <hr>
    <p>
    Pendaki atau kelompok pendaki selama berada di kawasan pendakian wajib memenuhi ketentuan atau melakukan hal-hal sebagai berikut:
    </p>

    <ul  align="left">
        <li>Berbadan sehat pada saat melakukan pendakian (tidak memiliki riwayat penyakit yang berbahaya seperti asma, tekanan darah tinggi, jantung atau penyakit lainnya yang berada dalam pengawasan dokter);</li>
        <li>Masuk jalur pendakian antara pukul 06.00 s/d 18.00 WIB dan mendaki pada jalur yang sudah ditentukan/jalur resmi, yakni Jalur Lembanna dan Tasosso;</li>
        <li>Membawa/menggunakan perlengkapan pendakian yang memenuhi persyaratan keselamatan dan kenyamanan, yaitu:
            <ol type="a">
                <li>Tenda kedap air;</li>
                <li>Ransel/carier;</li>
                <li>Matras/alas tidur;</li>
                <li>Kantong tidur (sleeping bag);</li>
                <li>Sarung tangan;</li>
                <li>Kaos kaki yang minimal menutupi mata kaki;</li>
                <li>Celana (disarankan tidak menggunakan jeans);</li>
                <li>Sepatu gunung atau sepatu cats;</li>
                <li>Jas hujan;</li>
                <li>Lampu senter;</li>
                <li>Peralatan memasak dan perbekalan makanan;</li>
                <li>Obat-obatan pribadi dan kelompok;</li>
                <li>Membawa kantong sampah (trash bag);</li>
            </ol>

        </li>
        <li>Mengisi form isian barang bawaan yang menghasilkan sampah;</li>
        <li>Melakukan EVAKUASI MANDIRI terhadap rekannya yang sakit sebelum mendapatkan bantuan dari petugas.</li>
        <li>Memprioritaskan penanganan bagi wanita yang sedang menstruasi, utamanya segera membawa turun korban tersebut apabila sudah menderita sakit.</li>
    </ul>
</div>
</div>

<div class="baru card mb-3 text-center">
<div class="card-body text-center">
    <h6>DILARANG DILAKUKAN OLEH PENDAKI</h6>
    <hr>
    <p>
    Setiap pendaki atau kelompok pendaki selama berada di kawasan Pendakian, dilarang melakukan hal-hal sebagai berikut:
    </p>

    <ul  align="left">

        <li>Membawa binatang dan tumbuhan dari luar dan dari dalam kawasan Pendakian;</li>
        <li>Mengambil, memetik, memindahkan atau mencabut tumbuhan di dalam kawasan Pendakian;</li>
        <li>Membuat api unggun di dalam kawasan Pendakian;</li>
        <li>Mengganggu, memindahkan atau melakukan vandalisme pada fasilitas yang tersedia di dalam kawasan Pendakian;</li>
        <li>Melakukan penggantian atau perubahan identitas pendaki (mengganti data calon pendaki yang sudah di validasi) pada SIMAKSI tanpa sepengetahuan petugas;</li>
        <li>Menggunakan SIMAKSI pendakian untuk kegiatan lain, seperti diklat pencinta alam, kegiatan orientasi pencinta alam, atau kegiatan lain yang sejenis;</li>
        <li>Membawa obat-obatan terlarang, minuman beralkohol, atau barang lain yang sejenis;</li>
        <li>Membawa perlengkapan pembersih badan yang sulit terurai, seperti tisu basah, pasta gigi, sabun, shampoo, atau perlengkapan lain yang sejenis;</li>
        <li>Membawa peralatan yang bisa digunakan untuk melakukan perusakan kawasan, seperti golok, pisau belati, pisau dapur, atau peralatan lain yang sejenis;</li>
        <li>Membawa peralatan elektronik yang dapat mengganggu ketenangan kehidupan flora fauna, seperti radio komunikasi (handy talky) , Walkman, gamewatch, wireless speaker, atau peralatan lain yang sejenis;</li>
        <li>Melakukan perbuatan yang melanggar kesopanan, perbuatan yang meresahkan, perbuatan yang tidak menyenangkan, perbuatan asusila, atau perbuatan lain yang sejenis;</li>
    </ul>
</div>
</div>
<p>Setelah Membaca Peraturan Tersebut dan Telah setuju, Silahkan Registrasi Disini <a id="warna" class=" text-decoration-none badge bg" href="/register">Registrasi</a>  , Jika sudah Login silahkan klik disini untuk melakukan pemesanan tiket<a id="warna2" class=" text-decoration-none badge bg" href="/booking/daftar">Booking</a></p>

@endsection