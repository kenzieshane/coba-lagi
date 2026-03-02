<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $book->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/3">
                        <img src="{{ $book->image }}" alt="{{ $book->name }}" class="w-full rounded-lg shadow-md">
                    </div>
                    <div class="md:w-2/3">
                        <p>{{ $book->category }}
                        <h1 class="text-3xl font-bold mb-4">{{ $book->name }}</h1>
                        <p class="text-2xl text-indigo-600 font-semibold mb-4">{{ $book->price }}</p>
                        <div class="prose max-w-none mb-6">
                            <p class="text-gray-700 leading-relaxed">
                                {{ $book->description }}
                            </p>
                        </div>
                        @php
                            $isOwned = false;
                            if (auth()->check()) {
                                $ownedProducts = trim(auth()->user()->owned_product);
                                $productsArray = $ownedProducts ? explode(',', $ownedProducts) : [];
                                $isOwned = in_array($book->id, $productsArray);
                            }
                        @endphp

                        @if($isOwned)
                            <div class="flex flex-col gap-4">
                                <span class="bg-green-100 text-green-800 px-6 py-3 rounded-lg font-bold text-center border border-green-200">
                                    Sudah Ditambahkan ke Buku Saya
                                </span>
                                <a href="{{ route('my.books') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-indigo-700 transition text-center">
                                    Lihat Koleksi Saya
                                </a>
                            </div>
                        @else
                            <form action="{{ route('cart.add', $book->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-indigo-700 transition w-full md:w-auto">
                                    Tambah ke Keranjang
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
