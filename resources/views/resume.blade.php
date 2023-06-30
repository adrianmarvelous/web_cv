@extends('index')

@section('title', 'Page Title')
 
 
@section('content')
<div style="display: flex;flex-direction:column;background-color: rgba(255, 255, 255, 0.9);margin-top:20px;border-radius:10px;flex-wrap:wrap;padding:20px">
    <div style="width:100%;margin-bottom:10px;border-radius:5px;background-color: black;padding:10px;color:white;">
        <h1>Experience</h1>
        <p>Mempunyai pengalaman bekerja di Badan Kepegawaian dan Pengembangan Sumber Daya Manusia (BKPSDM) Pemerintah Kota Surabaya dari bulan maret 2022 sampai dengan sekarang sebagai Pengelola Teknologi Informasi. Mempunyai lingkup kerja seperti membuat program sesuai arahan atasan, memelihara dan menambah fitur pada website BKPSDM</p>
    </div>
    <div style="display:flex;width: 100%;justify-content:space-between;flex-wrap:wrap;">
        <div style="background-color: black;width:300px;padding:20px;border-radius:5px;color:white;">
            <h1>Web Developer</h1>
            <p>Menguasai pembuatan website statis maupun dinamis. Menggunakan bahasa PHP native maupun framework Laravel, html dan css, Javascript dan JQuery. Menguasai penggunaan SQL database seperti MySQL.</p>
            <div>
                <img src="{{asset('assets/icon/php.png')}}" width="40">
                <img src="{{asset('assets/icon/js.png')}}" width="40">
                <img src="{{asset('assets/icon/html-5.png')}}" width="40">
                <img src="{{asset('assets/icon/css-3.png')}}" width="40">
                <img src="{{asset('assets/icon/mysql.png')}}" width="40">
            </div>
        </div>
        <div style="background-color:black;width:300px;padding:20px;border-radius:5px;color:white;">
            <h1>Game Developer</h1>
            <p>Menguasai game development. Menguasai Unity sebagai game engine dan c# sebagai bahasa pemrogrammannya. Dapat mengembangkan game berbasis website maupun game mobile android.</p>
            <div>
                <img src="{{asset('assets/icon/unity.png')}}" width="40">
                <img src="{{asset('assets/icon/c-sharp.png')}}" width="40">
            </div>
        </div>
        <div style="background-color: black;width:300px;padding:20px;border-radius:5px;color:white;">
            <h1>Data Mining</h1>
            <p>Menguasai proses pengolahan data seperti mngumpulkan data, tahap pembersihan data atau preprocessing, tahap pengolahan data menggunakan python. python dipilih karena banyak library yang tersedia mengenai data mining.</p>
            <div>
                <img src="{{asset('assets/icon/python.png')}}" width="40">
            </div>
        </div>
    </div>
</div>
@endsection