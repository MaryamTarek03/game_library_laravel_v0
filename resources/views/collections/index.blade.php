@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/bootstrap/css/bootstrap.css', 'resources/bootstrap/js/bootstrap.js'])
@endif

<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
<x-layout text="Collections" image="/images/background.png">
    <div class="">
        <div class="">
            {{--            <h1 class="text-3xl font-bold text-gray-800 mb-6">Collections</h1>--}}
            <div class="grid gap-4">
                <!-- Collection Card -->
                @foreach($collections as $collection)
                    <a href="{{ route('collections.showByName', $collection->name) }}">

                        <div class="flex items-start bg-gray-800 shadow-md rounded-lg overflow-hidden">
                            <img
                                src="/images/camping.jpg"

                                alt="{{ $collection->name }}"
                                class="w-24 h-24 object-cover"
                            />
                            <div class="p-4">
                                <h2 class="text-xl font-semibold text-gray-100">{{ $collection->name }}</h2>
                                <p class="text-gray-400 text-sm">
                                    {{ $collection->description }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
                <!-- Repeat this block for each collections -->
            </div>
        </div>
    </div>
</x-layout>
