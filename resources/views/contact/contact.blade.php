<h1>
    MI contacto es {{$nombre}} y tiene {{$edad}} años
</h1>
@if($edad > 18)
    <h1>Es mayor de edad</h1>
@else
    <h1>No es mayo de edad</h1>
@endif
