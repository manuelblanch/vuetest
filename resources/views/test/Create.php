@extends('adminlte::layouts.app')

@section('htmlheader_title')
    <h2>Test</h2>

@endsection
    <!-- Main content -->
    @section('main-content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Afegeix</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('brand.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                        </div>

                        
                      </div>
                    </div>
                  </div>
                </div>

@endsection
