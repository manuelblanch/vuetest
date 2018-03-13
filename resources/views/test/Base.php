
@extends('adminlte::layouts.app')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Test
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Test</a></li>
        <li class="active">Test</li>
      </ol>
    </section>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection
