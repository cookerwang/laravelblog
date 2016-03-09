<div class="form-group">
    {!! Form::label('title', '标题:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('content', '正文:') !!}
    {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at', 'published_at') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::submit('修改文章', ['class'=>'btn btn-success form-control']) !!}
</div>