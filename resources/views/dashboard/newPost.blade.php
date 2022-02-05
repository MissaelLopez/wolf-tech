@extends('layouts.dashboardLayout')
@section('content')
@include('includes.breadcrumb', [ 'breadcrumbs' => [ 'Home' => '/', 'Dashboard' => '/dashboard', 'Publicaciones' => '/dashboard/posts', 'Nueva Publicación' => '' ] ])
@endsection