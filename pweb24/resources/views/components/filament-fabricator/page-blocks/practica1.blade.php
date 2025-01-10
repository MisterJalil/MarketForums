@aware(['page'])
<?php
    use App\Models\User;
$grupo = User::role('grupoPractica')->get();
?>
<div class="px-4 py-4 md:py-8">
    <div class="px-10 max-w-7xl mx-auto">
        <p>1.- Acceso a las páginas públicas de los usuarios que tienen el role Grupo de Prácticas:
        <ul>
        @foreach($grupo as $miembro)
            <li class="px-4 py-1 hover:text-blue-600 underline"> <a href="/{{$miembro->name}}.html"> {{$miembro->name}}.html</a></li>
        @endforeach
        </ul>
        </p>
        <p>2.- Acceso a las rutas de las paginas públicas de los usuarios que tienen el role Grupo de Prácticas:
        <ul>
            @foreach($grupo as $miembro)
                <li class="px-4 py-1 hover:text-blue-600 underline"> <a href="/{{$miembro->name}}"> {{$miembro->name}}</a></li>
            @endforeach
        </ul>
        </p>
        <p>3.- Acceso a las rutas de las paginas privadas de los usuarios que tienen el role Grupo de Prácticas:
        <ul>
            @foreach($grupo as $miembro)
                <li class="px-4 py-1 hover:text-blue-600 underline"> <a href="/{{$miembro->name}}Privado"> {{$miembro->name}}Privado</a></li>
            @endforeach
        </ul>
        </p>
        </div>
</div>
