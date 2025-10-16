@extends('utama')
@section('judul_menu')
   {{-- ini dari section judul_menu, dengan data : {{$isi_data}} <br> --}}
   @php

   @endphp
   @if($isi_data == 1)
       Data diisi dengan angka 1
    @elseif($isi_data > 1)
       Data diisi dengan angka lebih dari 1
    @else
    tidak ada data atau data tidak valid
    @endif

    @for($x = 0; $x <= 5; $x++)
        nilainya adalah {{$x}} <br>
    @endfor
   
@endsection
@section('isi_menu')
    ini isi dari section isi_menu
@endsection