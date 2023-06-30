@extends('index')

@section('title', 'Page Title')
 
 
@section('content')
<div style="display:flex;color: white;">
    <div style="display:flex;flex-direction:column;padding:20px">
        <div style="margin:20px">
            <h1>Skills</h1>
            <hr>
            <div>
                <h2>Web Development</h2>
                <p>Menguasai bahasa php native maupun mengunakan framework laravel, html dan css, javascript dan jquery.</p>
                <div>
                    <img src="{{asset('assets/icon/php.png')}}" width="40">
                    <img src="{{asset('assets/icon/js.png')}}" width="40">
                    <img src="{{asset('assets/icon/html-5.png')}}" width="40">
                    <img src="{{asset('assets/icon/css-3.png')}}" width="40">
                    <img src="{{asset('assets/icon/mysql.png')}}" width="40">
                </div>
            </div>
            <div style="margin-top:20px">
                <h2>Game Development</h2>
                <p>Menguasai penggunaan game engine unity dengan menggunakan bahasa c#.</p>
                <div>
                    <img src="{{asset('assets/icon/unity.png')}}" width="40">
                    <img src="{{asset('assets/icon/c-sharp.png')}}" width="40">
                </div>
            </div>
            <div style="margin-top:20px">
                <h2>Data Mining</h2>
                <p>Menguasai proses pengolahan data seperti mngumpulkan data, tahap pembersihan data atau preprocessing, tahap pengolahan data menggunakan python.</p>
                <div>
                    <img src="{{asset('assets/icon/python.png')}}" width="40">
                </div>
            </div>
            <div style="margin-top:20px">
                <h2>UI / UX</h2>
                <p>Menguasai design interface maupun user experience dengan menggunakan figma.</p>
                <div>
                    <img src="{{asset('assets/icon/figma.png')}}" width="40">
                </div>
            </div>
        </div>
    </div>
    <div style="margin:20px;background-color: rgba(0,0,0,0.9);padding:20px;height:100%">
        <div>
            <h1>Experience</h1>
            <hr>
            <p>Badan Kepegawaian dan Pengembangan Sumer Daya Manusia (BKPSDM)</p>
            <p>2022 - Sekarang</p>
        </div>
        <div>
            <h1>Education</h1>
            <hr>
            <h2>Narotama University</h2>
            <p>Informatic Engineering</p>
            <p>IPK 3.27</p>
            <p>2016 - 2020</p>
        </div>
    </div>
</div>
@endsection