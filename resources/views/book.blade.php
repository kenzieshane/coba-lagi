<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $book->name }}
        </h2>
    </x-slot>

<div>
    <h1 style="color:white">
        {{ $book->name }}
    </h1>
    <p style="color:white">
        {{ $book->price }}
    </p>
    <p style="color:white">
        {{ $book->description }}
    </p>
    <p style="color:white">
        {{ $book->category }}
    </p>
    <img style="width: 100px; height: auto;" src={{ $book->image }}>
    <form action="{{route('cart.add', $book->id) }}" method="POST">
        @csrf
    <button type=submit style="border: 3px solid #ffffff; color:white; padding: 10px; border-radius: 5px;">
                            Tambah ke Keranjang
                        </button>
                        <a style="border: 3px solid #ffffff; color:white; padding: 10px; border-radius: 5px;"href="https://wa.me/6285379426392?text=Aku%20mau%20beli%20buku%20{{ $book->name }}">Hubungi Saya</a>
                    
    </div>
</form>
</x-app-layout>
