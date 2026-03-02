<style>
    .booklist {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .book {
        border: 1px solid #ccc;
        background-image: linear-gradient(to bottom, #FFFFFF, #FF6666);
        padding: 10px;
        width: 200px;
    }
    .book-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('The Nusantara Merah Project Store') }}
        </h2>
    </x-slot>

    <br>
<div>
    <div class=booklist>
    <?php $shop_db = DB::table('shop_db')->get(); ?>
        @foreach ($shop_db as $book)
            <div class="book">
                <img class="book-image" src="{{ $book->image }}" alt="{{ $book->name }}">
                <h2>{{ $book->name }}</h2>
                <p>{{ $book->description }}</p>
                <p>{{ $book->price }}</p>
                <a href="{{ $book->id }}">Beli</a>
            </div>
        @endforeach
    </div>
</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Kamu sudah berhasil masuk!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
