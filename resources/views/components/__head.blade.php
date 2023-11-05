

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/2.2.15/tailwind.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer>       
    </script>
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

<link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
 />
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>


 
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




<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>





</head>