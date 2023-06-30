@extends('index')

@section('title', 'Page Title')
 
 
@section('content')
<div style="display:flex;background-color: rgba(255,255,255,0.7);padding:50px;margin-top:50px;flex-direction:column">
    <h1>Sistem Informasi Gedung Diklat Surabaya (Sigendis)</h1>
    <img src="{{asset('assets/porto/sigendis/landing page.png')}}" alt="">
    <p style="margin-top:20px;text-align:justify">
        Sigendis adalah sistem informasi gedung diklat. Sigendis diciptakan untuk mempermudah masyarakat untuk meminjam gedung diklat milik BKPSDM yang berlokasi di prigen pasuruan. Sigendis dikembangan dengan menggunakan framewok php yaitu laravel. Sigendis juga menggunakan database MySQL.
    </p>
    <img src="{{asset('assets/porto/sigendis/booking.png')}}" alt="">
    <p style="margin-top:20px;text-align:justify">
        Pada halaman booking ini para pengunjung halaman sigendis dapat mengecek sendiri ketersediaan jadwal untuk peminjaman sigendis. Blok tanggal yang berwarna merah muda menandakan tanggal sudah dipakai atau dipinjamkan sedangkan blok tanggal berwarna putih menandakan belum ada peminjaman pada tanggal tersebut.
        Pengguna juga bisa langsung memasukan tanggal mulai dan tanggal selesai di sebelah untuk mengecek ketersediaan jadwal. jika jadwal tersedia maka pengunjung bisa mengisi form pengajuan permohonan peminjaman. Jika tanggal tidak tersedia maka tidak bisa ke tahap berikutnya.
    </p>
    <img src="{{asset('assets/porto/sigendis/admin.png')}}" alt="">
    <p style="margin-top:20px;text-align:justify">
        Pada gambar di atas menunjukan halaman admin dari sigendis. Pada halaman ini kita bisa melihat siapa saja yang mengajukan permohonan pengajuan peminjaman gedung diklat. kita bisa melihat detailnya pada halaman ini juga. Kita bisa memberikan Approve atau pun menolaknya. Jika kita approve kita akan menghubungi pemohon via nomer telp dan menginformasikan pada pemohon untuk mengecek sigendis dibagian menu tanggapan dan memasukan email mereka.
    </p>
</div>
@endsection