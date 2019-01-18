<div class="form-group">
	{!! Form::label('name','Nombre del producto')  !!}
	{!! Form::text('name',null,$attributes=['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('short','Descripcion breve del producto')  !!}
	{!! Form::text('short',null,$attributes=['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('body','Descripcion breve del producto')  !!}
	{!! Form::textarea('short',null,$attributes=['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR',['class' => 'btn btn-primary'])  !!}
</div>