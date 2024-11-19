@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Главная
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin.main.index')}}"><i class="fa fa-home"></i>Главная</a></li>
            <li class="active">Ползователи</li>
        </ol>
    </section>
</div>
@endsection