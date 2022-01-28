@extends('layouts.authLayout')
@section('content')
<h1 class="text-center text-white font-bold text-xl mb-5">{{ $msg ?? 'Registrate para continuar' }}</h1>
<div class="bg-white dark:bg-deep shadow w-full rounded-lg divide-y divide-gray-200">
    <div class="px-5 py-10">
        <form class="text-center" action="/signup" method="POST">
            @csrf
            <label class="font-semibold text-sm text-gray-600 pb-1 block">Nombre de usuario</label>
            <input type="text" name="username" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" required />
            <label class="font-semibold text-sm text-gray-600 pb-1 block">Correo Electrónico</label>
            <input type="email" name="email" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" required />
            <label class="font-semibold text-sm text-gray-600 pb-1 block">Contraseña</label>
            <input type="password" name="password" class="border rounded-lg px-3 py-2 mt-1 mb-10 text-sm w-full" required minlength="8" maxlength="12" />
            <button type="submit" class="bg-primary text-white w-1/2 py-2.5 rounded-lg text-sm font-semibold text-center">
                Registrarse
            </button>
        </form>
    </div>
</div>
@endsection