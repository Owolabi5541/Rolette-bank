@php
    $isActive = fn($path) => request()->is($path) ? 'bg-blue-500 text-white' : 'text-blue-500';
@endphp

<nav class="text-blue-500 space-y-10 pt-5">
    <a href="/" class="{{ $isActive('/') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150" aria-current="page">Dashboard</a>
    <a href="/invoice" class="{{ $isActive('invoice') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Invoice</a>
    <a href="/cards" class="block py-2 px-4 {{ $isActive('cards') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Cards</a>
    <a href="/transaction" class="block py-2 px-4 {{ $isActive('transaction') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Transaction</a>
    <a href="/settings" class="block py-2 px-4 {{ $isActive('settings') }} text-center hover:text-blue-700 px-3 py-2 text-sm font-medium block py-2 px-4 hover:bg-sky-150">Settings</a>
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