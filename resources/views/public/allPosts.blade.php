@extends('layouts.appLayout')
@section('content')    
    <section class="mb-14">
        <div class="hidden h-screen" id="status">            
            <div class="flex flex-wrap -mx-4">
                @for ($i = 0; $i < 8; $i++)
                <div class="shadow rounded-md p-4 max-w-sm w-full mx-auto mb-5">
                    <div class="animate-pulse flex space-x-4 space-y-4">
                        <div class="rounded-xl bg-gray-200 dark:bg-deep h-10 w-10"></div>
                        <div class="flex-1 space-y-6 py-1">
                            <div class="h-2 bg-gray-200 dark:bg-deep rounded"></div>
                            <div class="space-y-3">
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="h-2 bg-gray-200 dark:bg-deep rounded col-span-2"></div>
                                    <div class="h-2 bg-gray-200 dark:bg-deep rounded col-span-1"></div>
                                </div>
                                <div class="h-2 bg-gray-200 dark:bg-deep rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>       
        </div>

        <div id="section-breadcrumbs" class="px-5 py-2 sticky top-0 bg-white dark:bg-dark flex w-full z-40">
            <div class="flex items-center overflow-y-auto whitespace-nowrap"></div>
        </div>

        <div class="max-w-screen-lg mx-auto">
            <div class="mt-12">
                <div class="flex flex-wrap md:flex-no-wrap space-x-0 md:space-x-6 mb-16">                                        
                    <div id="section-content-post" class="mb-4 lg:mb-0  p-4 lg:p-0 w-full md:w-4/7 relative rounded block"></div>
                </div>
            </div>
        </div>

        <div class="container px-5">
            <div id="section-posts" class="flex flex-wrap -mx-4"></div>
        </div>
    </section>
@endsection