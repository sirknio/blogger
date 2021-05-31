<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">
            {{ $post->name }}
        </h1>
        <div class="text-lg text-gray-500 mb-2">
            {{ $post->extract }}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Contenido Princial --}}
            <div class="lg:col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                </figure>

                <div class="text-base text-gray-500 mt-6">
                    {{ $post->body }}
                </div>
            </div>
            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">
                    <div class="m-3 my-5">
                        Más en {{ $post->category->name }}
                    </div>

                    <ul>
                        @foreach ($similars as $similar)
                            <li class="mb-4">
                                <a class="flex" href="{{ route('posts.show', $similar) }}">
                                    <img class="h-24 object-cover object-center" src="{{ Storage::url($similar->image->url) }}" alt="">
                                    <span class="ml-2 text-gray-600 text-base font-semibold">
                                        {{ $similar->name }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </h1>
            </aside>
        </div>
    </div>
</x-app-layout>