<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-blond text-gray-600">{{$post->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>

        {{-- Contenido principal --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img src="{{Storage::url($post->image->url)}}" class="w-full h-70 object-cover object-center">
                    @else
                        <img src="">
                    @endif
                </figure>
                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
            </div>

            
        </div>
    </div>
</x-app-layout>