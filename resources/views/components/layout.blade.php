<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Portofolio Laravel</title>
  {{-- tailwind vite --}}
  @vite('resources/css/app.css')
  {{-- fonts --}}
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  {{-- alpine --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  {{-- css --}}
  <link rel="stylesheet" href="css/style.css">
  {{-- font awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="h-full">

<div class="min-h-full" >
 <x-navbar></x-navbar>
 <header>
  <div class="mx-auto">
  <x-jumbotron></x-jumbotron>
</div>
 </header>
  <main>
    <div class="mx-auto">
      <x-about></x-about>
      <x-skill></x-skill>
      <x-project></x-project>
      <x-contact></x-contact>
      {{ $slot }}
    </div>
  </main>
  <x-footer></x-footer>
</div>

{{-- js --}}
<script src="../public/js/script.js"></script>
{{-- flowbite --}}
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>