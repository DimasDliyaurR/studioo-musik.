<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js'])
</head>

<body>
    @auth
        <div class="flex">
            <div class="h-screen w-[16rem] bg-primary flex flex-col items-center">
                <div class="my-[6rem]">

                    <span class="text-green-300 text-3xl">
                        Studioo.
                    </span>
                </div>
                <a href="{{ asset('transaksi') }}">
                    <div
                        class="h-[2.5rem] w-[14rem] rounded-md {{ $tittle == 'transaksi' ? 'bg-button' : '' }} hover:bg-[#85B449] hover:text-white text-center  flex flex-row items-center p-4 my-3">
                        <i class="fa fa-book text-sm mx-[10px]"></i>
                        <span class="text-[1.5rem]">Transaksi</span>
                    </div>
                </a>

                <a href="{{ asset('booking') }}">
                    <div
                        class="h-[2.5rem] w-[14rem] rounded-md {{ $tittle == 'booking' ? 'bg-button' : '' }} hover:bg-[#85B449] hover:text-white text-center  flex flex-row items-center p-4 my-3">
                        <i class="fa fa-book text-sm mx-[10px]"></i>
                        <span class="text-[1.5rem]">Booking</span>
                    </div>
                </a>

                <a href="{{ asset('studio') }}"">
                    <div
                        class="h-[2.5rem] w-[14rem] rounded-md {{ $tittle == 'studio' ? 'bg-button' : '' }} hover:bg-[#85B449] hover:text-white text-center  flex flex-row items-center p-4 my-3">
                        <i class="fa fa-camera text-sm mx-[10px]"></i>
                        <span class="text-[1.5rem]">Studio</span>
                    </div>
                </a>

                <a href="{{ asset('inventaris') }}">
                    <div
                        class="h-[2.5rem] w-[14rem] rounded-md {{ $tittle == 'inventaris' ? 'bg-button' : '' }} hover:bg-[#85B449] hover:text-white text-center  flex flex-row items-center p-4 my-3">
                        <i class="fa fa-briefcase text-sm mx-[10px]"></i>
                        <span class="text-[1.5rem]">Inventaris</span>
                    </div>
                </a>


                <a class="align-center">
                    <form action="{{ asset('logout') }}" method="POST">
                        @csrf
                        <button class="text-red-500 my-14">
                            <i class="fa fa-arrow-left text-sm mx-[10px] "></i>
                            <span class="text-[1.5rem]">Logout</span>
                        </button>
                    </form>
                </a>
            </div>
        @endauth

        @guest
            @inertia
        @endguest

        @yield('content')
    </div>
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/js/dashboards-analytics.js"></script>
</body>
</body>

</html>
