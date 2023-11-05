<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Rolette') }}</title>

        <!-- Fonts -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/2.2.15/tailwind.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer>       
    </script>
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
 />
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>


<style>

@keyframes blink {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
}

.animate-blink {
  animation: blink 1s infinite;
}

</style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <script >
//The Signup form slide
document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("form");
  const progress = document.getElementById("progress");
  const steps = form.querySelectorAll(".step");
  const nextButtons = form.querySelectorAll(".next-button");
  const prevButtons = form.querySelectorAll(".prev-button");

  let currentStep = 0;
  updateProgress();

  nextButtons.forEach((button, index) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      steps[currentStep].classList.add("hidden");
      currentStep++;
      steps[currentStep].classList.remove("hidden");
      updateProgress();
    });
  });

  prevButtons.forEach((button, index) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      steps[currentStep].classList.add("hidden");
      currentStep--;
      steps[currentStep].classList.remove("hidden");
      updateProgress();
    });
  });

  function updateProgress() {
    const progressPercentage = (currentStep / (steps.length - 1)) * 100;
    progress.style.width = `${progressPercentage}%`;
  }
});



</script>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> -->

            <div >
                {{ $slot }}

            </div>
        </div>

    </body>
    <script>
    var input = document.querySelector('#phone'),
        errorMsg = document.querySelector('#error-msg'),
        validMsg = document.querySelector('#valid-msg');

    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long"];

    var iti = window.intlTelInput(input, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",

        allowExtensions:true,
        formatOnDisplay:true,
        autoFormat:true,
        autoHideDialCode:true,
        autoplaceholder:true,
        defaultCountry:"",
        ipinfoToken:"yolo",
        initialCountry: "GB",
        preferredCountries:['sa','ae','qa','om','bh','kw','ma'],
        preventInvalidNumbers:true,
        

        nationalMode:false,
        numberType: "MOBILE",
        

        geolpLookup: function (callback) {
          $.get("http://ipinfo.io", function() {}, "jsonp").always(function (resp){
        var countryCode = (resp && resp.country) ? resp.country : ""
        callback(rountryCode);
            });},
                
            });


    

    var reset = function() {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

    var validateInput = function() {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                validMsg.classList.remove('hide');
            } else {
                input.classList.add('error');
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        }
    };

    

    input.addEventListener('input', validateInput);
    input.addEventListener('blur', validateInput);
    input.addEventListener('change', reset);



</script>
    
</html>
