<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Nusantara Merah Project</title>
    <meta property="og:type" content="website" />
<meta property="og:url" content="https://store.kenzieshane.my.id/" />
<meta property="og:image" content="https://www.kenzieshane.my.id/profile.jpg" />

    @auth
        <meta http-equiv="refresh" content="0; url=/dashboard">
    @endauth
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
*
 {
  font-family: "Inter", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}

body {
    background-color: #ffffff;
    color: #000000;
}
            .leftys
            {
                font-size: 100px;
                text-align:left;
            }

            .Lnav
            {

                text-align:right;
            }

            nav {
                                font-size:30px;
                              text-align:right;
                               line-height: 1;
            }
            a
            {

                color: #000000ff;
                text-decoration: none;
                  text-align:center;
            }

            .bookcase
            {
                align-items: center;
                background-color: #FF8888;
                padding:10px;
                border-radius: 10px;
                display: grid;
                /* default to single column for small screens */
                grid-template-columns: 1fr;
                gap: 10px;
            }
            /* stack three columns on larger viewports */
            @media (min-width: 640px) {
                .bookcase {
                    grid-template-columns: 1fr 1fr 1fr;
                }
            }

                        .bookcasex
            {
                align-items: center;
                padding:10px;
                border-radius: 10px;
                display: grid;
                /* default to single column for small screens */
                grid-template-columns: 1fr;
                gap: 10px;
            }
            /* stack three columns on larger viewports */
            @media (min-width: 640px) {
                .bookcasex {
                    grid-template-columns: 1fr;
                }
            }

            .books
            {
                max-width: 50%;
                height: auto;
                margin-left: auto;
                margin-right: auto;
            }

            .prev{
                                margin-left: auto;
                margin-right: auto;
            }
    </style>
</head>
<body>

    <nav>

                    <a href=/login><span> hubungi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;promo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;toko&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tentang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="Lnav"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="Lnav"
                        >
                            Log in
                        </a>

<span class="Lnav">|</span>
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="Lnav"
                                > Register
                            </a>
                        @endif
                    @endauth


                </nav>

               <h1 class=leftys style="line-height: 0">TOKO GENERIK KS</h1> 
    
                <br>
                 <div class="bookcasex">
                <img class=prev src="Screenshot from 2026-03-03 12-31-16.png">
        </div>
                         <div class="bookcasex">
               <img class=prev src="Pasted image.png">
        </div>
                <br>

                 <div class="bookcase">
                <a href=/login><img class=books src="{{asset('buku.png')}}"></a>
                <a href=/login><img class=books src="{{asset('buku1.png')}}"></a>
                <a href=/login><img class=books src="{{asset('buku2.png')}}"></a>
                </div>
                <br>
                <br>
                <p>TOKO GENERIK KS(c)2026</p>
                <br>
</body>
</html>
