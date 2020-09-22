<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $prestamo->id !!}</p>
</div>

<!-- Book Id Field -->
<div class="form-group">
    {!! Form::label('book_id', 'Book Id:') !!}
    <p>{!! $prestamo->book_id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $prestamo->user_id !!}</p>
</div>

<!-- Startdate Field -->
<div class="form-group">
    {!! Form::label('startDate', 'Startdate:') !!}
    <p>{!! $prestamo->startDate !!}</p>
</div>

<!-- Enddate Field -->
<div class="form-group">
    {!! Form::label('endDate', 'Enddate:') !!}
    <p>{!! $prestamo->endDate !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $prestamo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $prestamo->updated_at !!}</p>
</div>

