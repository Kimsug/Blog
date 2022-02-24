<x-app-layout>
    <div class="container py-8">
        <h1 class="uppercase text-center text-3xl font-bold">
            Categoría: {{$post->name}}
        </h1>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
        
            @foreach ($post as $post)
                <x-card-products :post="$post">
                     
                </x-card-products>
            @endforeach
        
        </div>
        <div class="mt-4">
            {{$post->links()}}
        </div>
    </div>
</x-app-layout>