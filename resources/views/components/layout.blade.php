<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <link rel="stylesheet" href="css/style.css">
</head>
<body class="h-full">

<div class="min-h-full" >
 <x-navbar></x-navbar>
  <main>
    <div class="mx-auto">
      <x-jumbotron></x-jumbotron>
      <x-about></x-about>
      <x-skill></x-skill>
      <x-project></x-project>
      <x-contact></x-contact>
      <x-footer></x-footer>
      {{ $slot }}
    </div>
  </main>
</div>

{{-- flowbite --}}
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>