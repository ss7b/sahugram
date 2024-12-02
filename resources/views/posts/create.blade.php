<x-app-layout>

    <div class="card p-10">
        {{-- Title --}}
        <h1 class="text-3xl mb-10">{{__('create a new post')}}</h1>

        {{-- Errors --}}
        <div class="flex flex-col justify-center item-center w-full">
            @if ($errors->any())
                <div class="w-full bg-red-50 text-red-700 p-5 mb-5 rounded-xl">
                    <ul class="list-disc pl-4">

                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        {{-- Form --}}
        <form action="/p/create" method="POST" class="w-full" enctype="multipart/form-data">
            @csrf

            <input class="w-full border border-gray-200 bg-gray-50 black focus:outline-name rounded-xl" name="image" id="file-input" type="file">
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-300" id="file-input"> PNG, JPG or GIF.</p>
            
            <textarea name="description" rows="5" class="mt-5 w-full border border-gray-200 rounded-xl" placeholder="{{__('Write a description')}}"></textarea>
            
            <x-primary-button class="mt-4">{{__('create post')}}</x-primery-button>
        
        </form>
    </div>
</x-app-layout>