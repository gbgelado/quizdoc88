@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.questions-options.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['questions_options.store']]) !!}

    <div class="card">
        <div class="card-header">
            @lang('quickadmin.create')
        </div>
        
        <div class="card-body">
          <div class="form-group">
              {!! Form::label('question_id', 'question*', ['class' => 'control-label']) !!}
              {!! Form::select('question_id', $questions, old('question_id'), ['class' => 'form-control']) !!}
              <p class="help-block"></p>
              @if($errors->has('question_id'))
                  <p class="help-block">
                      {{ $errors->first('question_id') }}
                  </p>
              @endif
          </div>
          <div class="form-group">
              {!! Form::label('option', 'Option*', ['class' => 'control-label']) !!}
              {!! Form::text('option', old('option'), ['class' => 'form-control', 'placeholder' => '']) !!}
              <p class="help-block"></p>
              @if($errors->has('option'))
                  <p class="help-block">
                      {{ $errors->first('option') }}
                  </p>
              @endif
          </div>

          <!-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->

          <div class="form-group form-check">
              {!! Form::hidden('correct', 0) !!}
              {!! Form::checkbox('correct', 1, 0, ['class' => 'form-check-input', 'id' => 'correct']) !!}
              {!! Form::label('correct', 'Correct', ['class' => 'control-label', 'for' => 'checkbox_correct']) !!}
              <p class="help-block"></p>
              @if($errors->has('correct'))
                  <p class="help-block">
                      {{ $errors->first('correct') }}
                  </p>
              @endif
          </div>
        </div>
        <div class="card-footer">
          {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-info']) !!}
        </div>
    </div>

    {!! Form::close() !!}
@stop

