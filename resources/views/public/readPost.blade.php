@extends('layouts.appLayout')
@section('content')
<?php
    $link = '/' . $section;
    if ( $section == 'noticias' ) {        
        $link = '/';
    }
?>
@include('includes.breadcrumb', [ 'breadcrumbs' => [ $section => $link, 'publicación ' . $post['id'] => '' ] ])
<div class="max-w-screen-lg mx-auto">
    <div class="mt-12">
        <div class="flex flex-wrap md:flex-no-wrap space-x-0 md:space-x-6 mb-16">        
            <div class="mb-4 lg:mb-0  p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
                <img src="https://picsum.photos/1200/1200?random={{ rand(1, 100) }}" class="rounded-md object-cover w-full h-64">                
                <h1 class="text-primary text-4xl font-bold mt-2 mb-2 leading-tight">
                    {{ $post['title'] }}
                </h1>
                <br>
                <div class="text-dark dark:text-white font-normal">
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus velit ut nibh faucibus, sit amet hendrerit dolor mattis. Donec mattis euismod metus, ac gravida velit tempor vitae. Proin id convallis neque, eget malesuada nibh. Proin gravida sed quam sed euismod. Proin facilisis mi sed elit gravida mattis. Aenean neque turpis, luctus a lacus et, molestie facilisis nunc. Donec tristique arcu nec leo interdum, quis bibendum felis fermentum. Mauris at orci ut nibh tincidunt molestie.
                    </p>

                    <p class="mb-4">
                        Quisque luctus erat sit amet risus sodales maximus. In vestibulum maximus arcu id feugiat. Maecenas porta mollis metus vel iaculis. Nulla a purus non augue sodales aliquet non quis ante. Phasellus lorem velit, imperdiet ultricies mauris at, pretium congue lectus. Nulla pulvinar fermentum neque, et porta eros iaculis at. Mauris convallis, enim sit amet consequat auctor, turpis diam rhoncus ipsum, non accumsan dui elit eget turpis. Pellentesque velit neque, tempus fringilla cursus ac, ullamcorper eget mauris. Aliquam erat volutpat. Donec at libero iaculis, aliquam risus non, mollis arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque id dapibus nulla. Phasellus odio nunc, scelerisque in dui vitae, tincidunt ultricies neque. Aliquam bibendum quam rhoncus egestas laoreet.
                    </p>

                    <p class="mb-4">
                        Nulla ex ipsum, elementum ac tellus a, porta imperdiet odio. Nam venenatis eu turpis non hendrerit. Nullam malesuada ligula id mattis porttitor. Vestibulum porta dapibus sapien, in varius tortor eleifend sed. Fusce eget tortor quis leo commodo pulvinar. Aliquam gravida magna leo, et posuere tellus aliquam dictum. Nam vitae rutrum odio. Vivamus consequat volutpat aliquam. Nam viverra varius nisi at facilisis. Vivamus porttitor eu est at molestie. Ut laoreet nulla vitae tellus imperdiet fermentum.
                    </p>

                    <p class="mb-4">
                        Quisque pharetra at tortor ac tristique. Pellentesque metus dolor, faucibus sit amet nibh faucibus, facilisis tempus elit. Quisque sit amet tortor vel ex lobortis sagittis. Aliquam maximus in odio nec suscipit. Sed id tempus dolor, at tempus libero. Aenean condimentum risus sit amet interdum efficitur. Nunc tincidunt, magna aliquet elementum vulputate, nulla leo eleifend dui, non eleifend mi felis in enim. Maecenas interdum tortor non tellus accumsan, placerat porta dui maximus. Nunc vel dui enim. Nullam facilisis tempor egestas. Maecenas ut lacus dolor. Morbi eget vestibulum libero, a viverra dolor.
                    </p>

                    <p class="mb-4">
                        Mauris eu felis non augue tincidunt hendrerit. Fusce felis nulla, fringilla sed libero in, maximus vehicula neque. Integer ut viverra orci. Praesent id nisi maximus, auctor magna eu, malesuada mi. Pellentesque sollicitudin vulputate gravida. Nam viverra lectus vel lectus imperdiet, non molestie orci dapibus. In sed nisi mattis, laoreet sem at, varius orci. Maecenas ac libero a felis molestie posuere placerat a quam. Cras consectetur nisi vel massa lobortis mattis.
                    </p>
                </div>                
            </div>
        </div>
    </div>
</div>
<div class="mb-14">
    <div class="container p-5">
      <div class="flex flex-wrap -mx-4">
         @for ($i = 0; $i < 3; $i++)
            <div class="md:w-1/2 lg:w-1/3 px-4">            
               <div class="mx-auto mb-10">
                  <div class="rounded overflow-hidden mb-8">
                     <img src="https://picsum.photos/300/300?random={{ rand(1, 100) }}" alt="image" class="w-full" >
                  </div>
                  <div>                  
                     <h3 class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark dark:text-white">
                        {{ $posts[$i]['title'] }}
                     </h3>
                     <p class="text-base mb-2">
                        {{ $posts[$i]['body'] }}
                     </p>
                     <a href="/posts/{{ $section }}/{{ $posts[$i]['id'] }}">
                        <button class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                           Ver más
                        </button>
                     </a>
                  </div>
               </div>            
            </div>
         @endfor
      </div>
   </div>
</div>

<div class="bg-gray-100 dark:bg-deep p-5">
<div class="flex mb-4 w-full">
   <form class="w-full rounded-lg px-4 pt-2">
      <div class="flex flex-wrap -mx-3 mb-6">
         <h2 class="px-4 pt-3 pb-2 text-dark dark:text-white text-lg">Escribe un comentario</h2>
         <div class="w-full md:w-full px-3 mb-2 mt-2">
            <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-300 focus:outline-none focus:bg-white text-dark" placeholder='Escribe tu comentario' required></textarea>
         </div>
         <div class="w-full md:w-full flex items-start md:w-full px-3">
            <div class="-mr-1">
               <input type='submit' class="bg-primary text-white font-medium py-1 px-4 rounded-lg tracking-wide mr-1 cursor-pointer" required value='Enviar'>
            </div>
         </div>
      </form>
   </div>
</div>   

<div class="flex">
    <div class="flex-shrink-0 mr-3">
        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="{{ asset('images/avatar.png') }}" alt="">
    </div>
    <div class="flex-1 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
        <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
        <p class="text-sm">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua.
        </p>
        <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Respuestas</h4>
        <div class="space-y-4">
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="{{ asset('images/avatar.png') }}">
                </div>
                <div class="flex-1 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                    <p class="text-xs sm:text-sm">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="{{ asset('images/avatar.png') }}">
                </div>
                <div class="flex-1 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                    <p class="text-xs sm:text-sm">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>
            </div>
        </div>        
    </div>
</div>
<div class="flex">
    <div class="flex-shrink-0 mr-3">
        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="{{ asset('images/avatar.png') }}" alt="">
    </div>
    <div class="flex-1 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
        <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
        <p class="text-sm">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua.
        </p>
        <h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">Respuestas</h4>
        <div class="space-y-4">
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="{{ asset('images/avatar.png') }}">
                </div>
                <div class="flex-1 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                    <p class="text-xs sm:text-sm">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="{{ asset('images/avatar.png') }}">
                </div>
                <div class="flex-1 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                    <p class="text-xs sm:text-sm">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>
            </div>
        </div>        
    </div>
</div>
</div>
@endsection