@extends('index')

@section('title', 'Page Title')
 
 
@section('content')
<div style="display:flex;background-color: rgba(255,255,255,0.7);padding:50px;margin-top:50px;flex-direction:column">
    <div style="display: flex;justify-content:space-between">
        <div style="margin:20px;display:flex;flex-direction:column;justify-content:center">
            <h1>Space Shooter</h1>
            <h2>Game Android dan Webgl</h2>
            <p style="margin-top:20px;text-align:justify">
                Game space shooter ini dikembangan dengan game engine unity dan menggunakan bahasa c#. Game ini terinspirasi oleh game space shooter pada jaman dahulu. Gambar disamping menunjukan main menu yang UI nya dibuat didalam game engine unity. Terdapat menu start, option, credit dan exit.
                <br>
                Menu start akan memulai permainan dengan pemilihan pesawat tempur.
                Menu option akan menampilkan pilihan tingkat kesusahan permainan dan volume audio.
                Menu credit akan menampilkan darimana aset - aset yang dipakai pada game ini seperti model 3d pesawat, vfx pesawat, backsound musik.
                Menu exit adalah menu jika ingin keluar dari game ini.
            </p>
        </div>
        <div>
            <img src="{{asset('assets/porto/space shooter/main menu.jpeg')}}" width="300" alt="">
        </div>
    </div>
    
</div>
@endsection