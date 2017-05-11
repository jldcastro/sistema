<div class="row" >
    <div class="form-group has-feedback col-md-12">
        <div class="alert alert-success alert-dismissible" id="msj-success" role="alert" style="display: none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Rol de usuario asignado correctamente</strong>
        </div>
        <div class="alert alert-danger alert-dismissible" id="msj-success2" role="alert" style="display: none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Rol de usuario denegado correctamente</strong>
        </div>
        <div class="box-header with-border">
            <h3 class="box-title">Asignar rol</h3>
        </div><!-- /.box-header -->

        <div class= "form-group has-feedback col-md-12">
            {!!Form::label('Asignar Roles')!!}
            @foreach($usuario->getRoles() as $rl)
                <span class="label label-warning" style="margin-left:10px;">{{ $rl }} </span>
            @endforeach
        </div>
        <div class="box-body">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-3" for="tipo">Rol a asignar</label>
                    <div class="col-sm-6" >
                        <select id="rol1" name="rol1" class="form-control">
                            @foreach($roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-xs btn-primary" onclick="asignar_rol({{ $usuario->id }});" >Asignar rol</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-3" for="tipo">Rol a quitar</label>
                    <div class="col-sm-6" >
                        <select id="rol2" name="rol2" class="form-control">
                            @foreach($roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3" >
                        <button type="button" class="btn btn-xs btn-primary" onclick="quitar_rol({{ $usuario->id }});" >Quitar rol</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function asignar_rol(idusu){
        var idrol=$("#rol1").val();
        var miurl="http://localhost/sistema/public"+"/asignar_rol/"+idusu+"/"+idrol+"";

        $.ajax({
            url: miurl,

            success:function(){
                $('#msj-success').fadeIn();
            }
        }).done( function(resul)
            {
                var etiquetas="";
                var roles=$.parseJSON(resul);
                $.each(roles,function(index, value) {
                etiquetas+= '<span class="label label-warning">'+value+'</span> ';
                })
            });
    }

    function quitar_rol(idusu){
        var idrol=$("#rol2").val();
        var miurl="http://localhost/sistema/public"+"/quitar_rol/"+idusu+"/"+idrol+"";

        $.ajax({
            url: miurl,

            success:function(){
                $('#msj-success2').fadeIn();
            }
        }).done( function(resul)
            {
                var etiquetas="";
                var roles=$.parseJSON(resul);
                $.each(roles,function(index, value) {
                etiquetas+= '<span class="label label-warning" style="margin-left:10px;" >'+value+'</span> ';
                })
            });
    }


</script>