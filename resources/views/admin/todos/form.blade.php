<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('due_at') ? 'has-error' : ''}}">
    {!! Form::label('due_at', 'Due At', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('datetime-local', 'due_at', null, ['class' => 'form-control']) !!}
        {!! $errors->first('due_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>