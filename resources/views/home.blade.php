<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Nusantara Merah Project</title>
    
    @auth
        <meta http-equiv="refresh" content="0; url=/dashboard">
    @endauth
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');

body {
    background-color: #AA0000;
    color: #FFFFFF;
}
            h1
            {
                font-family: 'Open Sans';
                text-align:center;
            }

            nav
            {
                font-family: 'Open Sans';
                text-align:center;
            }

            a
            {
                font-family: 'Open Sans';
                color: #FFFFFF;
                text-decoration: none;
            }

            .bookcase
            {
                align-items: center;
                background-color: #FF8888;
                padding:10px;
                border-radius: 10px;
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
            }
            .books
            {
                max-width: 266px;
                max-height: 800px;
                margin-left: auto;
                margin-right: auto;
            }
    </style>
</head>
<body>
    <h1>☭ The Nusantara Merah Project</h1>
    <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

<span>|</span>
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
                <br>

                <div class="bookcase">
                <img class=books src="{{asset('buku.png')}}">
                <img class=books src="{{asset('buku1.png')}}">
                <img class=books src="{{asset('buku2.png')}}">
                </div>
                <p>Seri Nusantara Merah Project ini adalah kumpulan buku tentang sejarah alternatif Indonesia mulai dari 1949.</p>
</body>
</html>
