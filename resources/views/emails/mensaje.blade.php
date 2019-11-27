<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <h2>Contendientes</h2>

    <p>Estimando(a) {{ $pet->user->name }}</p>
    <p>
        Se le notifica que tiene el pokemon <b>{{ $pet->nombre }} es parte de su equipo,</b>
        registrado para el torneo y es de tipo {{$pet->tipo}}.
    </p>
</body>
</html>