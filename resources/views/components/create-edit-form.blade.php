<input class="w-full border border-gray-200 bg-gray-50 black focus:outline-name rounded-xl" name="image" id="file-input" type="file">
<p class="mt-2 text-sm text-gray-500 dark:text-gray-300" id="file-input"> PNG, JPG or GIF.</p>

<textarea name="description" rows="5" class="mt-5 w-full border border-gray-200 rounded-xl" placeholder="{{__('Write a description')}}">
    {{$post->description ?? ''}}
</textarea>
