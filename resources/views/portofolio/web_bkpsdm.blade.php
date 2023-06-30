@extends('index')

@section('title', 'Page Title')
 
 
@section('content')
<div style="display:flex;background-color: rgba(255,255,255,0.7);padding:50px;margin-top:50px;flex-direction:column">
    <h1>Website Badan Kepegawaian dan Pengembangan Sumber Daya Manusia (BKPSDM)</h1>
    <img src="{{asset('assets/porto/website bkpsdm/home page.png')}}" alt="">
    <p style="margin-top:20px;text-align:justify">
        Website BKPSDM mempunyai landing page seperti pada gambar diatas. Pada nav bar mempunyai menu seperti profil, pelayanan, hubungi kami, gedung diklat, artikel, sop dan standart pelayanan, materi workshop dan pencarian. Website ini dikembangkan menggunakan framewok laravel untuk mempermudah pengembangan karena laravel mempunyai semua tool yang dibutuhkan untuk mengembangkan suatu website. Untuk databasenya menggunakan mySQL.
        Pada landing page ini ada beberapa bagian, slider seperti gambar diatas. Menampilkan postingan terbaru yang telah di upload oleh admin.
    </p>
    <img src="{{asset('assets/porto/website bkpsdm/info penting.png')}}" alt="">
    <p style="margin-top:20px;text-align:justify">
        Gambar diatas menunjukan info penting yang di upload oleh admin. Info penting yang di upload pada bagian ini seperti pengumuman, sosialisasi, jadwal pelaksanaan maupun peraturan baru yang telah diterapkan. Pada landing page hanya akan menampilkan info penting terbaru yang di upload oleh admin, jika ingin melihat info penting lainnya bisa diklik selengkapnya. Detail info penting juga bisa dilihat denan mengklik salah satu info penting.
    </p>
    <img src="{{asset('assets/porto/website bkpsdm/kegiatan.png')}}" alt="">
    <p style="margin-top:20px;text-align:justify">
        Pada bagian ini menunjukan kegiatan - kegiatan ayng di upload oleh admin. Kegiatan yang di upload pada bagian ini merupakan kegiatan yang terjadi di lingkungan di dalam BKPSDM maupun diluar BKPSDM yang mengenai kepegawaian. Kegiatan yang di upload pada bagian ini meliputi kegiatan diklat, penerimaan penghargaan, uji kompetensi, kunjungan kerja maupun event - event Pemerintah Kota Surabaya yang di ikuti oleh BKPSDM.
    </p>
    <img src="{{asset('assets/porto/website bkpsdm/berita.png')}}" alt="">
    <p style="margin-top:20px;text-align:justify">
        Gambar diatas menampilkan bagian berita terkini yang di upload oleh admin. Berita yng di upload oleh admin meliputi pengumunman seleksi, pendaftaran cpns dan sebagainya. Detail dari setiap berita bisa dilihat dengan mengklik tombol selengkapnya.
    </p>
    <img src="{{asset('assets/porto/website bkpsdm/dashboard.png')}}" alt="">
    <p style="margin-top:20px;text-align:justify">
        Pada gambar diatas menunjukan halaman dashboard yang telah login oleh admin. Terdapat beberapa menu untuk mengupload konten untuk di tampilkan pada website.
    </p>
    <img src="{{asset('assets/porto/website bkpsdm/menu dashboard.png')}}" width="400" alt="">
    <p style="margin-top:20px;text-align:justify">
        Beberapa menu yang tersedia seperti Kelola Data, Konten Statis, Artikel dan Slide Show. menu kelola data untuk mengupload postingan baru pada info penting, kegiatan dan berita. Pada kelola data juga dapat menambah akun admin baru. Bisa merubah konten pada menu hubungi kami.
        Menu konten statis berfungsi untuk menambah menu baru pada nav bar.
        Menu artikel digunakan untuk mengelola menu artikel yang terdapat pada website. untuk membuat, mengedit, mengapus dan membaca artikel yang di upload oleh masyarakat di website BKPSDM.
        Menu slide show untuk mengelola menu SOP dan Standart pelayanan. Pada menu ini bisa di tampilkan dalam bentuk slide show untuk di tampilkan pada lobby BKPSDM tentang sop pelayanan yang ada di BKPSDM.
    </p>
</div>
@endsection