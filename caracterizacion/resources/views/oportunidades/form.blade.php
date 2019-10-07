@if ($dato == 'actualizar')
    <div class="form-group row">
        <label for="responsable_id" class="col-sm-2 control-label">Responsable</label>
        <div class="col-sm-10">
            <select name="responsable_id" id="responsable_id" class="form-control @error('responsable_id') is-invalid @enderror">
                <option value="{{isset($oportunidad->resposable_id)?$user[0]->id:$user[0]->id}}"
                    >{{isset($oportunidad->responsable_id)?$user[0]->nombre_completo:'Seleccione la responsable...'}}</option>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->nombre_completo}}</option>                
                @endforeach
            </select>
            @error('responsable_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
@endif
<div class="form-group row">
    <label for="cod_oportunidad" class="col-sm-2 control-label">Tipo de oportunidad</label>
    <div class="col-sm-10">
        <select name="cod_oportunidad" id="cod_oportunidad" class="form-control @error('cod_oportunidad') is-invalid @enderror" required>
            <option value="{{isset($oportunidad->cod_oportunidad)?$oportunidad->tipoOportunidad->id:0}}"
                >{{isset($oportunidad->cod_oportunidad)?$oportunidad->tipoOportunidad->tipo_oportunidad:'Seleccione la oportunidad...'}}</option>
            @foreach ($tiposOportunidad as $oportunidades)
                <option value="{{$oportunidades->id}}">{{$oportunidades->tipo_oportunidad}}</option>                
            @endforeach
        </select>
        @error('cod_oportunidad')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="entidad_id" class="col-sm-2 control-label">Entidad</label>
    <div class="col-sm-10">
        <select name="entidad_id" id="entidad_id" class="form-control @error('entidad_id') is-invalid @enderror" required>
            <option value="{{isset($oportunidad->entidad_id)?$oportunidad->entidad->id:0}}"
            >{{isset($oportunidad->entidad_id)?$oportunidad->entidad->nombre:'Seleccione la entidad...'}}</option>
            @foreach ($entidades as $entidad)
                <option value="{{$entidad->id}}">{{$entidad->nombre}}</option>
            @endforeach
        </select>
        @error('entidad_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="fecha_origen" class="col-sm-2 control-label">Fecha origen</label>
    <div class="col-sm-10">
        <input type="date" class="form-control @error('fecha_origen') is-invalid @enderror" name="fecha_origen" 
        value="{{ isset($oportunidad->fecha_origen)?$oportunidad->fecha_origen:old('fecha_origen') }}" required>
        @error('fecha_origen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="descripcion" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
        <textarea type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" required 
        cols="30" rows="10">{{ isset($oportunidad->descripcion)?$oportunidad->descripcion:old('descripcion') }}</textarea>
        @error('descripcion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="compromiso_aleado" class="col-sm-2 control-label">Compromiso Aleado</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('compromiso_aleado') is-invalid @enderror" name="compromiso_aleado" 
        value="{{ isset($oportunidad->compromiso_aleado)?$oportunidad->compromiso_aleado:old('compromiso_aleado') }}" required>
        @error('compromiso_aleado')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="compromiso_centro" class="col-sm-2 control-label">Compromiso Centro</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('compromiso_centro') is-invalid @enderror" name="compromiso_centro" 
        value="{{ isset($oportunidad->compromiso_centro)?$oportunidad->compromiso_centro:old('compromiso_centro') }}" required>
        @error('compromiso_centro')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="resultado_relacional" class="col-sm-2 control-label">Resultado Relacional</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('resultado_relacional') is-invalid @enderror" name="resultado_relacional" 
        value="{{ isset($oportunidad->resultado_relacional)?$oportunidad->resultado_relacional:old('resultado_relacional') }}" required>
        @error('resultado_relacional')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>