@props(['balance','cardtype'])



    <div class="w-full md:w-1/2 lg:w-1/3 p-4">
        <div class="bg-white shadow-[10px_10px_9px_0px_rgba(0,0,0,0.32)_inset] rounded-lg p-6 mb-4">
            <p class="text-xs text-right">ROLETTE {{$cardtype}}</p>
            <p class="text-xs mt-4">Account balance</p>
            <p class="text-2xl mb-4">{{$balance}}</p>

            <p class="text-xs text-right text-">**** **** **** 3456</p>

            <!-- the straight line -->
            <div class="h-[1px] mt-4 mb-4 bg-gray-300"></div>

            <div class="flex">
                <a href="#" class="text-sky pl-4 hover:text-blue-700 pr-8">Withdraw</a>
                <div class="w-0.5 h-7 bg-gray-300 pt-1"></div>
                <a href="/create" class="text-sky text-s pl-8 hover:text-blue-700 pr-8">Transfer</a>
                <div class="w-0.5 h-7 bg-gray-300 pt-1"></div>
                <a href="#" class="text-sky pl-9 hover:text-blue-700 pr-5">●●●</a>
            </div>
        </div>
    </div>