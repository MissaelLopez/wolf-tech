@extends('layouts.appLayout')
@section('content')    
    <section class="mb-14">
        <div class="hidden h-screen p-10" id="status">
            <div class="lds-hourglass"></div>
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