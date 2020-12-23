<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Categoría: {{$category->name}}</h1>

        @if ($posts->count() > 0)
            @foreach ($posts as $post)

                <x-card-post :post="$post"/>

            @endforeach

            @else
            <p class="text-lg text-red-400 text-center mt-8">Aún no hay Posts publicados para esta categoría</p>
        @endif


        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>



</x-app-layout>
