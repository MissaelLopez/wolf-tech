@extends('layouts.dashboardLayout')
@section('content')
@include('includes.breadcrumb', [ 'bg' => 'bg-transparent', 'breadcrumbs' => [ 'Home' => '/', 'Dashboard' => '/dashboard', 'Editores' => '' ] ])
<h1 class="text-2xl mb-5 px-5">Editores</h1>
<div class="mb-10 w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-200 dark:text-gray-400 dark:bg-deep">
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Correo Electrónico</th>
                    <th class="px-4 py-3">Editar</th>
                    <th class="px-4 py-3">Eliminar</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-dark">
                @foreach ( $editors as $editor )
                    <tr class="bg-white dark:bg-dark hover:bg-gray-200 dark:hover:bg-deep text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full" src="{{ asset('images/avatar.png') }}" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">{{ $editor['name'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">{{ $editor['email'] }}</td>
                        <td class="px-4 py-3 text-xs">
                            <button class="">Editar</button>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <button class="">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<h1 class="text-2xl mb-5 px-5">Nuevo Editor</h1>
<div class="grid grid-cols-1 md:grid-cols-2">
    <form class="flex flex-col justify-center">
        <div class="flex flex-col">                
            <input required type="name" name="name" id="name" placeholder="Nombre Completo" class="w-100 mt-2 py-3 px-3 rounded-lg bg-gray-200 dark:bg-deep border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <input required type="email" name="email" id="email" placeholder="Correo Electrónico" class="w-100 mt-2 py-3 px-3 rounded-lg bg-gray-200 dark:bg-deep border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <div class="flex flex-col mt-2">
            <input required type="tel" minlength="10" maxlength="10" name="tel" id="tel" placeholder="Número de teléfono" class="w-100 mt-2 py-3 px-3 rounded-lg bg-gray-200 dark:bg-deep border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
        </div>

        <button type="submit" class="md:w-32 mt-4 font-bold bg-transparent hover:bg-primary px-5 py-2 border hover:border-none border-dark dark:border-white text-dark dark:text-white hover:text-white rounded-lg transition ease-in-out uppercase duration-300">Guardar</button>
    </form>
</div>
@endsection