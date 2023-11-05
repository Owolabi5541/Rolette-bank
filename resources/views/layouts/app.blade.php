<html>
<head>
    <title>Your Laravel App</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/2.2.15/tailwind.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
  <style>
   
  </style>
</head>

{{-- <body class="">
    <div class="flex">
        <nav class="text-blue-500 space-y-5 pt-3 bg-white h-full shadow-[10px_0px_14px_1px_rgba(0,0,0,0.24)] text-blue-500 w-1/4 fixed h-screen md:relative md:w-56 hidden md:block">
            <div class="logo-container">
                <div class="p-4">
                    <h1 class="text-4xl p-5 pt-10 font-bold">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    </h1>
                </div>
            </div>
            @php
                $isActive = fn($path) => request()->is($path) ? 'bg-blue-500 text-white' : 'text-blue-500';
            @endphp
            <a href="dashboard" class="{{ $isActive('/') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150" aria-current="page">Dashboard</a>
            <a href="/invoice" class="{{ $isActive('invoice') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Invoice</a>
            <a href="/cards" class="block py-2 px-4 {{ $isActive('cards') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Cards</a>
            <a href="/transaction" class="block py-2 px-4 {{ $isActive('transaction') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Transaction</a>
            <a href="/profile" class="block py-2 px-4 {{ $isActive('settings') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Settings</a>
            <div class="flex items-center justify-center">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-center cursor-pointer mt-20 hover:text-red-500 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Log Out</button>
                    </form>
                @else
                    <script>window.location = "/login";</script>
                @endauth
            </div>
        </nav>
        <main class="flex-1">
            <x-flash/>
           {{$slot}}
           
        </main>
    </div>


   
    <div class="flex">
        <!-- Toggle Button -->
        <button id="toggleButton" class="md:hidden fixed z-50 top-5 right-5 p-2 bg-gray-200 rounded-md shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" width="24" height="24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Side Navigation -->
        <aside  class="bg-white h-full shadow-[10px_0px_14px_1px_rgba(0,0,0,0.24)] text-blue-500 w-52 w-1/4 fixed h-screen overflow-y-auto transition-transform duration-300 ease-in-out transform -translate-x-full md:translate-x-0 side-navigation">
            <div class="p-4">
                <h1 class="text-4xl p-5 pt-10 font-bold">
                    <img src="/images/logo.png" alt="Logo" class="w-full h-full">
                </h1>
            </div>

            <nav class="text-blue-500 space-y-4 px-4 py-2">
                <a href="dashboard" class="{{ url()->current() === url('/') ? 'bg-blue-500 text-white' : 'text-blue-500' }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150" aria-current="page">Dashboard</a>
                <a href="/invoice" class="{{ url()->current() === url('/invoice') ? 'bg-blue-500 text-white' : 'text-blue-500' }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Invoice</a>
                <a href="/cards" class="block py-2 px-4 {{ url()->current() === url('/cards') ? 'bg-blue-500 text-white' : 'text-blue-500' }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Cards</a>
                <a href="/transaction" class="block py-2 px-4 {{ url()->current() === url('/transaction') ? 'bg-blue-500 text-white' : 'text-blue-500' }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Transaction</a>
                <a href="/settings" class="block py-2 px-4 {{ url()->current() === url('/settings') ? 'bg-blue-500 text-white' : 'text-blue-500' }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Settings</a>
            </nav>

            <div class="flex items-center justify-center md:hidden">
                @auth
                    <form method="POST" action="/session">
                        @method('DELETE')
                        @csrf
                        <button class="text-center cursor-pointer mt-10 hover:text-red-500 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Log Out</button>
                    </form>
                @else
                    <script>window.location.href = "/login";</script>
                @endauth
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Content goes here -->
        </div>
    </div>

    <script>
        const toggleButton = document.getElementById('toggleButton');
        const sidebar = document.querySelector('.side-navigation');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body> --}}

<body class="">
    <!-- Desktop Navigation -->
    <div class="hidden md:flex  overflow-hidden ">
        <nav class="text-blue-500 basis-1/6  space-y-5 left-0 pt-3 bg-white overflow-y-auto shadow-[10px_0px_14px_1px_rgba(0,0,0,0.24)] text-blue-500   md:relative md:w-56 ">
            <!-- ... Your desktop navigation content ... -->
            <div class="logo-container">
                <div class="p-4">
                    <h1 class="text-4xl p-5 pt-10 font-bold">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    </h1>
                </div>
            </div>
            @php
                $isActive = fn($path) => request()->is($path) ? 'bg-blue-500 text-white' : 'text-blue-500';
            @endphp
            <a href="dashboard" class="{{ $isActive('/') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150" aria-current="page">Dashboard</a>
            <a href="/invoice" class="{{ $isActive('invoice') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Invoice</a>
            <a href="/cards" class="block py-2 px-4 {{ $isActive('cards') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Cards</a>
            <a href="/transaction" class="block py-2 px-4 {{ $isActive('transaction') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Transaction</a>
            <a href="/profile" class="block py-2 px-4 {{ $isActive('settings') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Settings</a>
            <div class="flex items-center justify-center">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-center cursor-pointer mt-20 hover:text-red-500 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Log Out</button>
                    </form>
                @else
                    <script>window.location = "/login";</script>
                @endauth
            </div>

        </nav>



        <div>


            <main class="basis-5/6 ">
            
                <x-flash/>
                
                {{$slot}}
            </main>
    </div>
       
        
    </div>






    <!-- Mobile Navigation -->
    <div class="md:hidden">
        <!-- Toggle Button -->
        <button id="toggleButton" class="fixed z-50 top-5 right-5 p-2 bg-gray-200 rounded-md shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" width="24" height="24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        

        <!-- Side Navigation -->
        <aside class="bg-white h-full shadow-[10px_0px_14px_1px_rgba(0,0,0,0.24)] text-blue-500 w-52 w-1/4 fixed h-screen overflow-y-auto transition-transform duration-300 ease-in-out transform -translate-x-full md:translate-x-0 side-navigation">
            <!-- ... Your mobile navigation content ... -->

            <div class="logo-container">
                <div class="p-4">
                    <h1 class="text-4xl p-5 pt-10 font-bold">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    </h1>
                </div>
            </div>
            @php
                $isActive = fn($path) => request()->is($path) ? 'bg-blue-500 text-white' : 'text-blue-500';
            @endphp
            <a href="dashboard" class="{{ $isActive('/') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150" aria-current="page">Dashboard</a>
            <a href="/invoice" class="{{ $isActive('invoice') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Invoice</a>
            <a href="/cards" class="block py-2 px-4 {{ $isActive('cards') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Cards</a>
            <a href="/transaction" class="block py-2 px-4 {{ $isActive('transaction') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Transaction</a>
            <a href="/profile" class="block py-2 px-4 {{ $isActive('settings') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Settings</a>
            <div class="flex items-center justify-center">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-center cursor-pointer mt-20 hover:text-red-500 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Log Out</button>
                    </form>
                @else
                    <script>window.location = "/login";</script>
                @endauth
            </div>
            
        </aside>

        
        <main class="flex-1">
            <x-flash/>
            {{$slot}}
        </main>

    </div>
    
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const confirmWithdrawButton = document.getElementById("confirmWithdraw");
            const withdrawModal = new bootstrap.Modal(document.getElementById("withdrawModal"));
    
            // Open the modal when the "Withdraw" link is clicked
            document.querySelector('[data-bs-target="#withdrawModal"]').addEventListener('click', function (e) {
                e.preventDefault(); // Prevent the link from navigating
                withdrawModal.show();
            });
    
            // Close the modal when the "Withdraw" button in the modal is clicked
            confirmWithdrawButton.addEventListener("click", function () {
                // Add your withdrawal logic here
                // Once the withdrawal is successful, close the modal
                // If using AJAX, you can place the modal close logic in your AJAX success callback
    
                // For now, let's just close the modal
                withdrawModal.hide();
            });
        });
    </script> --}}

    

    <script>
        const toggleButton = document.getElementById('toggleButton');
        const sidebar = document.querySelector('.side-navigation');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>