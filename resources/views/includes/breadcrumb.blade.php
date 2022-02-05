@if ( !empty($breadcrumbs) )
<div class="px-5 py-1 sticky top-0 {{ $bg ?? 'bg-white dark:bg-dark' }} flex w-full z-40">
  <div class="flex items-center py-4 overflow-y-auto whitespace-nowrap">        
    @foreach ( $breadcrumbs as $label => $link )
        @if ( !empty( $link ) )
            <a href="{{ $link }}" class="capitalize text-dark dark:text-white hover:underline"> {{ $label }} </a>
            <span class="mx-5 text-dark dark:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </span>    
        @else
            <p class="capitalize text-primary"> {{ $label }} </p>
        @endif        
    @endforeach
  </div>
</div>
@endif