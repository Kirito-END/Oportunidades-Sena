<div class="card" style="width: 30rem;">
  <div class="card-body">
    <h1 class="card-title">{{$entidad->nombre}}</h5>
    <h3 class="card-subtitle mb-2 text-muted"><b>Representante Legal</b>:  {{$entidad->representante_legal}}</h6>
    <h3 class="card-text"><b>Dirección</b>:  {{$entidad->direccion}}</h3>
    <h3 class="card-text"><b>Telefono</b>:  {{$entidad->telefono}}</h3>
    <h3 class="card-text"><b>Correo Representante</b>:  {{$entidad->mail_contacto}}</h3>
    <h3 class="card-text"><b>Telefono Representante</b>:  {{$entidad->tel_contacto}}</h3>
    <h3 class="card-text"><b>Municipio</b>:  {{$entidad->municipio->municipio}}</h3>
  </div>
</div>
