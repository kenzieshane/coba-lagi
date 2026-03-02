<x-app-layout>
    <x-slot name="header">
        <h2 clas="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buku Saya') }}
        </h2>
    </x-slot>

    <div clas="py-12">
        <div>
            <div>
                @if($books->isEmpty())
                    <div>
                        <p>Anda belum menambahkan buku ke keranjang.</p>
                        <a href="{{ url('/') }}">
                            Cari buku sekarang &rarr;
                        </a>
                    </div>
                @else
                    <div style=color:#ffffff>
                        @foreach($books as $book)
                            <div>
                                <a href="{{ url($book->id) }}">
                                    <div>
                                        <img style="width:120px"    src="{{ $book->image }}" alt="{{ $book->name }}" clas="w-full h-full object-cover shadow-sm">
                                        <div>
                                            <span>Lihat Detail</span>
                                        </div>
                                    </div>
                                    <div clas="p-5">
                                        <span clas="text-xs font-bold text-indigo-600 uppercase tracking-wider">{{ $book->category }}</span>
                                        <h3 clas="text-xl font-bold text-gray-900 mt-1 mb-2 line-clamp-1">{{ $book->name }}</h3>
                                        <p clas="text-gray-600 text-sm line-clamp-2 mb-4">{{ $book->description }}</p>
                                        <div clas="flex items-center justify-between mt-auto">
                                            <span clas="text-lg font-bold text-gray-900">{{ $book->price }}</span>
                                            <form action="{{ route('cart.remove', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini dari daftar?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" clas="text-red-600 hover:text-red-800 font-semibold text-sm transition">
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
<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
