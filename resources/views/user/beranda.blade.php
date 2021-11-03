<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }
                
        #menu-toggle:checked + #menu {
            display: block;
        }
        
        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }
        
        .hover\:grow:hover {
            transform: scale(1.02);
        }
        
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        
        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">Informasi Penerbangan</a></li>
                        <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="#">About</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                <button type="submit" class="inline-block no-underline hover:text-black hover:underline py-2 px-4">logout</button>
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <img class="h-8 w-auto sm-16" src="{{ asset('/images/logo.jpg') }}">
            <div class="inlinte-text">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl ">
                    Welcome to Diatmika's Travel!
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">

                <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a>

                <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                        <circle cx="10.5" cy="18.5" r="1.5" />
                        <circle cx="17.5" cy="18.5" r="1.5" />
                    </svg>
                </a>

            </div>
        </div>
    </nav>

    <div class="carousel relative container mx-auto" style="max-width:1600px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url({{ asset('/images/Sydney.jpg') }});">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-4xl my-6">Sydney Opera House, Australia</p>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url({{ asset('/images/india.jpg')}});">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-white text-4xl my-4">Mysore Palace, India</p>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url({{asset('/images/Kyoto.jpg')}});">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-white text-4xl my-4">Kyoto, Jepang</p>
                        </div>
                    </div>

                </div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>

        </div>
    </div>

    <!--	 

Alternatively if you want to just have a single hero

<section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

	<div class="container mx-auto">

		<div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
			<h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
			<a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">products</a>

		</div>

	  </div>

</section>

-->
    <form action="{{ route('cariPenerbangan') }}" method="POST" class="grid">
      @csrf
        <div class="pt-5 px-8 shadow-md rounded-md text-center font-bold" style="max-width: 100%">
            <label class="block">
            <span class="text-black-700">Cari Harga Tiket Pesawat Murah dan Terjangkau Disini!</span>
            </label>
            <div>
                <label class="inline-flex items-center">
                  <input
                    id="sj"
                    type="radio"
                    class="form-radio"
                    name="radio"
                    value="1"
                    checked
                  />
                  <span class="ml-2">Sekali Jalan</span>
                </label>
                <label class="inline-flex items-center">
                  <input id="pp" type="radio" class="form-radio" name="radio" value="2" />
                  <span class="ml-2">Pulang-Pergi</span>
                </label>
              </div>
              <br>

            <div class="grid grid-cols-3">
                <label class="block text-left" style="max-width: 400px">
                    <span class="text-black-700">Lokasi Dari</span>
                    <select class="form-select block w-full mt-1" name="asal">
                          @foreach ($lokasi as $item)
                          <option value="{{$item->id}}">{{$item->nm_lokasi}}</option>
                          @endforeach
                    </select>
                    @error('asal')
                        {{$message}}
                    @enderror
                </label>
                <label class="block text-left" style="max-width: 400px">
                    <span class="text-black-700">Tujuan</span>
                    <select class="form-select block w-full mt-1" name="tujuan">
                      @foreach ($lokasi as $item)
                      <option value="{{$item->id}}">{{$item->nm_lokasi}}</option>
                      @endforeach
                    </select>
                    @error('tujuan')
                        {{$message}}
                    @enderror
                </label>
                <label class="block text-left" style="max-width: 400px">
                    <span class="text-black-700">Berangkat</span>
                    <input type="date" class="form-date" name="tanggal_keberangkatan" value="2" />
                    @error('tanggal_keberangkatan')
                        {{$message}}
                    @enderror
                </label>
                <label id="pulang" class="block text-left hidden" style="max-width: 400px">
                    <span class="text-black-700">Pulang</span>
                    <input type="date" class="form-date" name="tanggal_pulang" value="2" />
                    @error('tanggal_pulang')
                        {{$message}}
                    @enderror
                </label>
                <div class="">
                  <label class="block text-left" style="max-width: 400px">
                    <span class="text-black-700">Jumlah Penumpang</span>
                </label>
                  <label class="block text-left" style="max-width: 400px">
                    <span class="text-gray-700">Dewasa
                      <input type="number" placeholder="0" class="form-select block w-full mt-1" id="selectPenumpang" name="dewasa" />
                    </span>
                    <span class="text-gray-700">Remaja
                      <input type="number" placeholder="0" class="form-select block w-full mt-1" id="selectPenumpang" name="remaja" />
                    </span>
                    <span class="text-gray-700">Anak - Anak
                      <input type="number" placeholder="0" class="form-select block w-full mt-1" id="selectPenumpang" name="anak"/>
                    </span>
                </label>
                </div>
                <label class="block text-left" style="max-width: 400px">
                    <span class="text-black-700">Kelas</span>
                        <select class="form-select block w-full mt-1">
                            <option>VVIP</option>
                            <option>VIP</option>
                            <option>First Class</option>
                            <option>Ekonomi</option>
                            <option>Bisnis</option>
                        </select>
                </label>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                  Cari Penerbangan!
                </button>
            </div>
        </div>
    </form>


  {{-- Most Popular Journey! --}}
    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="travel" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl ">
				Most Popular Journey!
			</a>
                <div class="flex items-center" id="store-nav-content">
                    <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z" />
                        </svg>
                    </a>
                    <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                        <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z" />
                        </svg>
                    </a>
                </div>
              </div>
            </nav>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <img class="hover:grow hover:shadow-lg" src={{ asset('/images/Sydney.jpg') }}>
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Sydney</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">Sydney Opera House merupakan salah satu bangunan abad ke-20 yang paling unik dan terkenal. Gedung ini terletak di Bennerlong Point di Sydney Harbour Bridge dan pemandangan kedua bangunan ini menjadi ikon tersendiri bagi Australia.</p>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <img class="hover:grow hover:shadow-lg" src={{ asset('/images/Bali.jpg') }}>
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Bali</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">Di Dunia, Bali terkenal sebagai tujuan pariwisata dengan keunikan berbagai hasil seni budayanya, khususnya bagi para wisatawan Jepang dan Australia. Bali juga dikenal dengan julukan Pulau Dewata dan Pulau Seribu.</p>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <img class="hover:grow hover:shadow-lg" src={{ asset('/images/Singapore.jpeg') }}>
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Singapura</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">Singapura memiliki industri pariwisata yang berkembang baik, dengan lebih dari 8 juta pengunjung pada 2004. Singapura telah tercatat di antara wisatawan mancanegara sebagai tujuan wisata yang menarik, membuat pariwisata salah satu dari industri besar di Singapura</p>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <img class="hover:grow hover:shadow-lg" src={{ asset('/images/london.jpg') }}>
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">London Bridge</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">London Bridge adalah jembatan penyebrangan sungai Thames tertua di London. Jembatan ini didirikan tahun 1970an, meskipun demikian, bangunan sebelumnya sudah ada sejak tahun 53 Masehi.</p>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <img class="hover:grow hover:shadow-lg" src={{ asset('/images/Kyoto.jpg') }}>
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Kyoto</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">Kyoto adalah salah satu prefektur di Jepang yang populer di antara wisatawan mancanegara. Kyoto dikenal menjadi pusat kebudayaan dan seni Jepang. Wisatawan dengan mudah akan menemukan kuil-kuil bersejarah, rumah-rumah tradisional, dan event tradisional di Kyoto. </p>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <img class="hover:grow hover:shadow-lg" src={{ asset('/images/Beijing.jfif') }}>
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Beijing</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">Beijing merupakan kota yang sudah dikenal secara umum oleh orang banyak, yaitu merupakan Ibu Kota dari negara Tiongkok. Setiap orang pasti mengenal dengan tujuan-tujuan wisata ikonik Beijing seperti Great Wall, Tiananmen Square, Olympic Park, Temple of Heaven dan destinasi lainnya. </p>
            </div>
            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <img class="hover:grow hover:shadow-lg" src={{ asset('/images/korea.jpg') }}>
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">Korea</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">Salah satu tempat wisata di Korea Selatan yang wajib Anda kunjungi. Terletak di jantung Kota Seoul, Istana Gyeongbokgung salah satu bangunan/istana paling ikonik di negara ini juga merupakan istana terbesar dari 5 istana besar di Korea yang masih ada</p>
            </div>

            <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <img class="hover:grow hover:shadow-lg" src={{ asset('/images/india.jpg') }}>
                    <div class="pt-3 flex items-center justify-between">
                        <p class="">India</p>
                        <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                        </svg>
                    </div>
                    <p class="pt-1 text-gray-900">Istana di India yang satu ini berada di Gujarat, Negara India bagian barat tepatnya di Kota Vadodara. Istana ini dikenal dengan nama Lakhsmi Vilas Palace dan dibangun pada tahun 1890 diatas lahan seluas 2 kilometer.</p>
            </div>
            </div>
    </section>

    <footer class="text-gray-600 body-font">
        <div
          class="
            container
            px-5
            py-24
            mx-auto
            flex
            md:items-center
            lg:items-start
            md:flex-row md:flex-nowrap
            flex-wrap flex-col
          "
        >
          <div
            class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left"
          >
            <a
              href=""
              class="
                flex
                title-font
                font-medium
                items-center
                md:justify-start
                justify-center
                text-gray-900
              "
            >
              <i class="fas fa-cubes fa-lg text-purple-500"></i>
              <span class="ml-3 text-xl">Tailwind elements</span>
            </a>
            <p class="mt-2 text-sm text-gray-500">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi,
              quam?
            </p>
          </div>
          <div
            class="
              flex-grow flex flex-wrap
              md:pl-20
              -mb-10
              md:mt-0
              mt-10
              md:text-left
              text-center
            "
          >
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2
                class="
                  title-font
                  font-medium
                  text-gray-900
                  tracking-widest
                  text-sm
                  mb-3
                "
              >
                CATEGORIES
              </h2>
              <nav class="list-none mb-10">
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >First Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Second Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Third Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Fourth Link</a
                  >
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2
                class="
                  title-font
                  font-medium
                  text-gray-900
                  tracking-widest
                  text-sm
                  mb-3
                "
              >
                CATEGORIES
              </h2>
              <nav class="list-none mb-10">
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >First Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Second Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Third Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Fourth Link</a
                  >
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2
                class="
                  title-font
                  font-medium
                  text-gray-900
                  tracking-widest
                  text-sm
                  mb-3
                "
              >
                CATEGORIES
              </h2>
              <nav class="list-none mb-10">
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >First Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Second Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Third Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Fourth Link</a
                  >
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2
                class="
                  title-font
                  font-medium
                  text-gray-900
                  tracking-widest
                  text-sm
                  mb-3
                "
              >
                CATEGORIES
              </h2>
              <nav class="list-none mb-10">
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >First Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Second Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Third Link</a
                  >
                </li>
                <li>
                  <a href="" class="text-gray-600 hover:text-gray-800"
                    >Fourth Link</a
                  >
                </li>
              </nav>
            </div>
          </div>
        </div>
        <div class="bg-gray-100">
          <div
            class="
              container
              mx-auto
              py-4
              px-5
              flex flex-wrap flex-col
              sm:flex-row
            "
          >
            <p class="text-gray-500 text-sm text-center sm:text-left">
              © 2021 Copyright: Diatmika's Travel
            </p>
            <span
              class="
                inline-flex
                sm:ml-auto sm:mt-0
                mt-2
                justify-center
                sm:justify-start
              "
            >
              <a href="" class="text-gray-500">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="ml-3 text-gray-500">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="ml-3 text-gray-500">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="" class="ml-3 text-gray-500">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="" class="ml-3 text-gray-500">
                <i class="fab fa-instagram"></i>
              </a>
            </span>
          </div>
        </div>
      </footer>

<script>
  const sj = document.getElementById('sj');
  const pp = document.getElementById('pp');
  const pulang = document.getElementById('pulang');

  sj.addEventListener('change', function() {
    pulang.classList.toggle('hidden');
  })
  pp.addEventListener('change', function() {
    pulang.classList.toggle('hidden');
  })

</script>