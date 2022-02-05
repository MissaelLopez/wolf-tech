@extends('layouts.dashboardLayout')
@section('content')
@include('includes.breadcrumb', [ 'bg' => 'bg-transparent', 'breadcrumbs' => [ 'Home' => '/', 'Dashboard' => '/dashboard', 'Lectores' => '' ] ])
<h1 class="text-2xl mb-5 px-5">Lectores</h1>
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
                @foreach ( $readers as $reader )
                    <tr class="bg-white dark:bg-dark hover:bg-gray-200 dark:hover:bg-deep text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full" src="{{ asset('images/avatar.png') }}" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">{{ $reader['name'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">{{ $reader['email'] }}</td>
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
@endsection