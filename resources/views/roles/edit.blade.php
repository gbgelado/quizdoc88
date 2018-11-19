@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.roles.title')</h3>
    
    {!! Form::model($role, ['method' => 'PUT', 'route' => ['roles.update', $role->id]]) !!}

    <div class="card">
        <div class="card-header">
            @lang('quickadmin.edit')
        </div>

        <div class="card-body">
          <div class="form-group">
              {!! Form::label('title', 'Title*', ['class' => 'control-label']) !!}
              {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '']) !!}
              <p class="help-block"></p>
              @if($errors->has('title'))
                  <p class="help-block">
                      {{ $errors->first('title') }}
                  </p>
              @endif
          </div>
        </div>
        <div class="card-footer">
          {!! Form::submit(trans('quickadmin.update'), ['class' => 'btn btn-info']) !!}
        </div>
    </div>

    {!! Form::close() !!}
@stop

