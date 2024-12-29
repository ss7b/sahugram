<div>
        
    <a class="grow" wire:click='toggle_like'><i
        @if ($post->liked(auth()->user()))
            class="bx bxs-heart text-red-600 text-3xl cursor-pointer ltr:mr-3 rtl:ml-3"></i></a>
        @else
            class="bx bx-heart text-3xl hover:text-gray-400 cursor-pointer ltr:mr-3 rtl:ml-3"></i></a>
        @endif
</div>
