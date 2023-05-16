<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} Admin</title>
    <link rel="icon" href="{!! asset('img/logo/Favicon.png') !!}" type="image/x-icon">
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #3d68ff;
        }
    </style>
    @livewireStyles
</head>

<body class="font-family-karla flex" style="background-color: #f2f2f2;">
    <aside class="relative bg-stone-800 h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="#" class="text-white text-3xl font-semibold uppercase">GetFuture Admin</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{route('home.index')}}" class="flex items-center text-white hover:bg-blue-600 py-4 pl-6 nav-item">
                <i class="fas fa-chart-pie mr-3"></i>
                Dashboard
            </a>
            <a href="{{route('daftar-penjawab.index')}}" class="flex items-center text-white hover:bg-blue-600 py-4 pl-6 nav-item">
                <i class="far fa-address-card mr-3"></i>
                Daftar Penjawab
            </a>
            <a href="{{route('daftar-soal.index')}}" class="flex items-center text-white hover:bg-blue-600 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Daftar Soal
            </a>
            <a href="{{route('user.index')}}" class="flex items-center text-white hover:bg-blue-600 py-4 pl-6 nav-item">
                <i class="fas fa-user mr-3"></i>
                Manajemen User
            </a>
            <a href="{{route('pesan.index')}}" class="flex items-center text-white hover:bg-blue-600 py-4 pl-6 nav-item">
                <i class="fas fa-mail-bulk mr-3"></i>
                Kritik Saran
            </a>
        </nav>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                @livewire('navigation-menu')
            </div>
        </header>
        <header x-data="{ isOpen: false }" class="w-full bg-stone-800 py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">FUTUREDEN ADMIN</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="{{route('home.index')}}" class="flex items-center text-white hover:bg-blue-600 py-4 pl-6 nav-item">
                    <i class="fas fa-chart-pie mr-3"></i>
                    Dashboard
                </a>
                <a href="" class="flex items-center text-white hover:bg-blue-600 py-4 pl-6 nav-item">
                    <i class="	far fa-address-card mr-3"></i>
                    Daftar Penjawab
                </a>
                <a href="{{route('daftar-soal.index')}}" class="flex items-center text-white hover:bg-blue-600 py-4 pl-6 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Daftar Soal
                </a>
                <a href="{{route('user.index')}}" class="flex items-center text-white hover:bg-blue-600 py-4 pl-6 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    Manajemen User
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="flex items-center text-white hover:bg-blue-600 py-4 pl-6 nav-item"> <i class="fas fa-power-off mr-3"></i>Log Out</a>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>
        <!-- Desktop -->
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                {{$slot}}
            </main>
        </div>


        <!-- AlpineJS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
        <!-- ChartJS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <!-- AjaX Live Search -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>
            var chartOne = document.getElementById('chartOne');
            var myChart = new Chart(chartOne, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            var chartTwo = document.getElementById('chartTwo');
            var myLineChart = new Chart(chartTwo, {
                type: 'line',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
        @stack('modals')
        @livewireScripts
</body>


</html>