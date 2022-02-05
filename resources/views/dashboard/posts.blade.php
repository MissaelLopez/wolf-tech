@extends('layouts.dashboardLayout')
@section('content')
@include('includes.breadcrumb', [ 'bg' => 'bg-transparent', 'breadcrumbs' => [ 'Home' => '/', 'Dashboard' => '/dashboard', 'Publicaciones' => '' ] ])
<h1 class="text-2xl mb-5 px-5">Publicaciones</h1>
<div class="mb-10 w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-200 dark:text-gray-400 dark:bg-deep">
                    <th class="px-4 py-3">Titulo</th>
                    <th class="px-4 py-3">Editor</th>
                    <th class="px-4 py-3">Editar</th>
                    <th class="px-4 py-3">Eliminar</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-dark">
                @for ($i = 0; $i <= 5; $i++)
                    <tr class="bg-white dark:bg-dark hover:bg-gray-200 dark:hover:bg-deep text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">{{ $posts[$i]['title'] }}</td>
                        <td class="px-4 py-3 text-sm">{{ $editors[$i]['name'] }}</td>
                        <td class="px-4 py-3 text-xs">
                            <button class="">Editar</button>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <button class="">Eliminar</button>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
<a href="/dashboard/new-post">
<button type="submit" class="mt-4 font-bold bg-transparent hover:bg-primary px-5 py-2 border hover:border-none border-dark dark:border-white text-dark dark:text-white hover:text-white rounded-lg transition ease-in-out uppercase duration-300">Nueva Publicación</button>
</a>
@endsection