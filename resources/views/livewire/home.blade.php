<div wire:poll>
    @if(\Cache::get('launch') == false)
        <img src="bg.jpg" class="w-full">
    @else
        <video autoplay class="w-full">
          <source src="vid.mp4" type="video/mp4">
        </video>
    @endif
</div>
