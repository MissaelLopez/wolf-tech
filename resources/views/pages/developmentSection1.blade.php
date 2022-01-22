@extends('layouts.appLayout')
@section('content')
@include('includes.breadcrumb', [ 'breadcrumbs' => [ 'Desarrollo' => '/development', 'Sección 1' => '' ] ])
<section class="mb-14">
    <div class="container p-5">
        <div class="flex flex-wrap justify-center mb-10">
            <div class="w-full px-4">
                <div class="text-center mx-auto">                    
                    <h2 class="font-bold text-3xl sm:text-4xl mb-4 dark:text-primary">Artículos sobre Desarrollo</h2>
                    <p class="text-base">
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
      </div>
      <div class="flex flex-wrap -mx-4">
         @for ($i = 0; $i < 1; $i++)
            <div class="w-full md:w-1/2 lg:w-1/3 px-4">            
               <div class="mx-auto mb-10">
                  <div class="rounded overflow-hidden mb-8">
                     <img src="https://picsum.photos/500/500?random={{ rand(1, 100) }}" alt="image" class="w-full" >
                  </div>
                  <div>                  
                     <h3 class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark dark:text-white">
                        Artículo {{ $i + 1 }}
                     </h3>
                     <p class="text-base mb-2">
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.
                     </p>
                     <a href="/development-article{{ $i + 1 }}">
                        <button class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                           Leer Artículo
                        </button>
                     </a>
                  </div>
               </div>            
            </div>
         @endfor
      </div>
   </div>
</section>
@endsection