@extends('layouts.appLayout')
@section('content')
<div class="text-dark dark:text-white h-screen flex items-center">
  <div class="container mx-auto flex flex-wrap">
    <div class="w-full md:w-5/12 text-center p-4">
      <img src="{{ asset('images/wolf_with_moon.svg') }}" alt="Not Found" />
    </div>
    <div class="w-full md:w-7/12 text-center md:text-left p-4">
      <div class="text-6xl font-medium">403</div>
      <div class="text-xl md:text-3xl font-medium mb-4">
        
      </div>
      <div class="text-lg mb-8">
        El acceso a esta página esta prohibida
      </div>
      <a href="/" class="bg-primary text-white rounded p-4">Regresar</a>
    </div>
  </div>
</div>
@endsection