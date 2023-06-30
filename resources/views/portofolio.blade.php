@extends('index')

@section('title', 'Page Title')
 
 
@section('content')
<div style="display:flex;color: white;margin-top:100px">
    <div style="display:flex;justify-content:center;flex-direction:column">
        <p style="font-size:92px;font-weight:bold;">Portofolio</p>
        <p>Here you will find all my works</p>
    </div>
    <div style="width:100%;background-color:black;display:flex;padding:5px;flex-wrap:wrap;margin:20px">
        @php
            $header = array("Sijaka","Sinora","Sigendis","Website BKPSDM","Space Shooter");
            $desc = array(
                "Sistem Informasi Pertanggungjawaban Keuangan dan Arsip",
                "Sistem Penomoran Surat",
                "Sistem Informasi Gedung Diklat Surabaya",
                "",
                "Game android dan game webgl"
            );
            $link = array(
                "",
                "",
                "portofolio/sigendis",
                "portofolio/web_bkpsdm",
                "portofolio/space_shooter"
            );
        @endphp
        @foreach ($header as $index => $item)
        <div style="background-color: rgb(30,30,30);padding:20px;width:30%;margin:10px;display:flex;justify-content:space-between;flex-direction:column">
            <h1>{{ $item }}</h1>
            <p>{{ $desc[$index] }}</p>
            <a href="{{$link[$index]}}" class="btn btn-warning">Detail</a>
        </div>
        @endforeach
    </div>
</div>
@endsection