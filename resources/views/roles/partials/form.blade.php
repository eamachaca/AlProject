<div class="form-group">
	{{ Form::label('name','Nombre del producto') }}
	{{ Form::text ('name',null,['class' =>'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('slug','URL Amigable') }}
	{{ Form::text ('slug',null,['class' =>'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('description','descripcion') }}
	{{ Form::textarea ('description',null,['class' =>'form-control'])}}
</div>
<hr>
<h3>Permiso Especial</h3>
<div class="form-group">
	<label>{{ Form::radio('especial','all-acess') }}Acceso Total</label>
	<label>{{ Form::radio('especial','no-acess') }}Ningun Acceso</label>
</div>
<h3>Lista de Permisos</h3>
<div class ="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
		<li>
			<label>
				{{  Form::checkbox('permissions[]',$permission->id,null) }}
				{{ $permission->name }}
				<em>({{ $permission->description ?:'Sin descripciones' }})</em>

			</label>
		</li>
		@endforeach
		
	</ul>
</div>

<div class="form-group">
	{{ Form::submit('Guardar',['class' =>'btn btn-sm btn-primary'])}}
	
</div>