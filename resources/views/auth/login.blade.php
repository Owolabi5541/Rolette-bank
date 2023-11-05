




<x-guest-layout>

<div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5" >
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="md:flex w-full">
            <div class="hidden md:block  w-1/2  py-10 px-10" style="background-image: url('{{ asset('images/sky.jpeg') }}');">
            <svg version="1.1" class="animate-blink" style=" animation: blink 3s infinite" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" width="100%" height="auto" fill="#000000" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#CFDCE5;" d="M336.242,241.292V126.206c0-44.239-35.992-80.243-80.231-80.243 c-44.252,0-80.243,36.004-80.243,80.243v115.086h-45.963V126.206C129.806,56.624,186.416,0,256.011,0 c69.582,0,126.193,56.624,126.193,126.206v115.086H336.242z"></path> <rect x="91.789" y="240.068" style="fill:#3B82F6;" width="328.421" height="271.932"></rect> <path style="fill:#314A5F;" d="M296.369,453.532l-23.863-70.115c16.148-6.532,27.545-22.35,27.545-40.838 c0-24.326-19.72-44.046-44.045-44.046s-44.045,19.72-44.045,44.046c0,18.488,11.397,34.306,27.545,40.838l-23.862,70.115H296.369z"></path> </g></svg></div>
            <div class="container mx-auto max-w-md px-4 mb-8">



            <form class="space-y-6" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <div class="text-center mb-10">
        <h1 class="font-bold text-3xl text-gray-900 mb-4">LOGIN</h1>
        <!-- <p class="text-sm animate-blink text-red-300" >Do not share your login details</p> -->
      </div>
        <!-- Email Address -->
        <div  class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <!-- label -->
            <x-input-label for="email" :value="__('Email')" />
            <!-- text input -->
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <!-- error input -->
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div  class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
           <!-- label -->
        <x-input-label for="password" :value="__('Password')" />
        <!-- text input -->
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <!-- error input -->                
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <x-primary-button >
                {{ __('Log in') }}
            </x-primary-button>



            <div class="flex items-center justify-between mt-4">
    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-500 shadow-sm focus:ring-blue-500" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>
    
    
    @if (Route::has('password.request'))
        <div class="text-sm text-gray-600">
            <a class="underline hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        </div>
    @endif
</div>
    </form>


              <div class="justify-center py-5">
                
                <hr class=" border-gray-300 w-full">
      <p class="mt-8 animated-blink">Click to have a <a href="{{route('register')}}" class="text-blue-500 hover:text-blue-700 font-semibold">Rolette
              account</a></p>
              </div>                 
</div>

</x-guest-layout>