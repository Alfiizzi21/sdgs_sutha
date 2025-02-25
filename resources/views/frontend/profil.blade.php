@extends('layouts.frontend.master')
@section('title')
    Buku
@endsection
@section('content')
<style>
    .blog-grid{
        margin-top: 20px;
    }

    .buku{
        max-height: 250px;
    }
</style>
<div class="blog-grid section-spacing">
    <div class="container clearfix">
        <div class="theme-title-one">
            <h2>Profil Pusat Kajian SDGs UIN Jambi</h2>
        </div>
        @if($profil != null)
        <div class="container">
            <img src="{{url('images/'.$profil->gambar)}}" alt="" style="max-height: 400px;" style="margin-left: 200px;;">
        </div>
        <div class="row">
            <p>{!!$profil->content!!}</p>
        </div> <!-- /.row -->
        @endif
    </div> <!-- /.container -->
</div>
@endsection
