<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buku Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if($books->isEmpty())
                    <div class="text-center py-8">
                        <p class="text-gray-500 text-lg">Anda belum menambahkan buku ke keranjang.</p>
                        <a href="{{ url('/') }}" class="mt-4 inline-block text-indigo-600 hover:text-indigo-800 font-semibold">
                            Cari buku sekarang &rarr;
                        </a>
                    </div>
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach($books as $book)
                            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 border border-gray-100">
                                <a href="{{ url($book->id) }}">
                                    <div class="relative h-64 overflow-hidden">
                                        <img src="{{ $book->image }}" alt="{{ $book->name }}" class="w-full h-full object-cover shadow-sm">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                                            <span class="text-white font-medium">Lihat Detail</span>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider">{{ $book->category }}</span>
                                        <h3 class="text-xl font-bold text-gray-900 mt-1 mb-2 line-clamp-1">{{ $book->name }}</h3>
                                        <p class="text-gray-600 text-sm line-clamp-2 mb-4">{{ $book->description }}</p>
                                        <div class="flex items-center justify-between mt-auto">
                                            <span class="text-lg font-bold text-gray-900">{{ $book->price }}</span>
                                            <form action="{{ route('cart.remove', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini dari daftar?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800 font-semibold text-sm transition">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
