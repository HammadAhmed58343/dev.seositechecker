<x-canvas-layout>
   
    <div class="row">
        <div class="col-md-9">{{ $slot }}</div>
    
    @if (!Widget::group('post-sidebar')->isEmpty())
            <x-application-sidebar>
                @widgetGroup('post-sidebar')
            </x-application-sidebar>
    
    @endif
 </div>
   
</x-canvas-layout>
