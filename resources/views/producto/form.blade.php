<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_prod') }}
            {{ Form::text('nombre_prod', $producto->nombre_prod, ['class' => 'form-control' . ($errors->has('nombre_prod') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Prod']) }}
            {!! $errors->first('nombre_prod', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_producto') }}
            {{ Form::text('tipo_producto', $producto->tipo_producto, ['class' => 'form-control' ,'id'=>'rosa'. ($errors->has('tipo_producto') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Producto']) }}
            {!! $errors->first('tipo_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

<script type="text/javascript">
    function ShowSelected()
    {
    /* Para obtener el valor */
    var cod = document.getElementById("producto").value;
    document.getElementById('rosa').value = cod; 
    }
</script>