<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-y-6">
            @foreach ($categories as $category)
            <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg bg-slate-800">
                <img class="w-full h-48 rounded-t" src="{{ Storage::url($category->image) }}" alt="Image" />
                <div class="px-6 py-4">
                    <a href="{{ route('categories.show', $category->id) }}" type="button">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-red-700 hover:text-red-500 uppercase">{{ $category->name }}</h4>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>