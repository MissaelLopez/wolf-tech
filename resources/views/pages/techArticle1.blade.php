@extends('layouts.appLayout')
@section('content')
@include('includes.breadcrumb', [ 'breadcrumbs' => [ 'Tecnología' => '/', 'Sección 1' => '/tech-section1', 'Artículo 1' => '' ] ])
<section class="mb-14">
    <div class="container p-5">
        <div class="flex flex-wrap justify-center mb-10">
            <div class="w-full px-4">
                <div class="text-center mx-auto">                    
                    <h2 class="font-bold text-3xl sm:text-4xl mb-4 dark:text-primary">Artículo sobre Tecnología 1</h2>
                    <p class="text-base">
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
      </div>
   </div>
</section>
@endsection