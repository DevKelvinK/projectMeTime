<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Style CSS -->
  <link rel="stylesheet" href="public/assets/CSS/global.css">

  <!-- TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Phosphor Icons -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>

  <link rel="shortcut icon" type="image/svg" sizes="32x32" href="">

  <title>MeTime - Sistema de Reservas / Agendamento</title>
</head>

<body class="relative min-w-[375px] sm:h-screen sm:overflow-hidden">
  <header class="absolute z-10 w-full flex items-center justify-center pt-[70px] px-10 sm:pt-[90px]">
    <a href="#" class="absolute left-8 rounded-full focus:outline-pink-secondary hidden">
      <i class="ph-bold ph-arrow-left text-2xl"></i>
    </a>

    <!-- Logo -->
    <img src="/assets/images/Logo.svg" alt="Logo MeTime" class="w-[95px] sm:w-[132px]">
  </header>

  <?php require base_path("/app/views/{$view}.view.php"); ?>

  <script src="/assets/JS/tailwindCustom.js"></script>
</body>

</html>