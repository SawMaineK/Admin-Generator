<div class="row">
	<!-- Name Field -->
	<div class="form-group col-sm-6 col-lg-6">
	    {!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	</div>
<div class="row">
	<!-- Email Field -->
	<div class="form-group col-sm-6 col-lg-6">
	    {!! Form::label('email', 'Email:') !!}
		{!! Form::email('email', null, ['class' => 'form-control']) !!}
	</div>
	</div>
<div class="row">
	<!-- Password Field -->
	<div class="form-group col-sm-6 col-lg-6">
	    {!! Form::label('password', 'Password:') !!}
		{!! Form::password('password', ['class' => 'form-control']) !!}
	</div>
</div>
<div class="row">
	<!-- Submit Field -->
	<div class="form-group col-sm-12">
	    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
	    <a class="btn btn-default-outline" href="{!! route('users.index') !!}">Cancel</a>
	</div>
</div>
