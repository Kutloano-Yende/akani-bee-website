<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>Explanatory Notes - Together We Build</title>
<meta name="description" content="Download B-BBEE explanatory notes and guidelines.">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'Explanatory Notes';
$page_subtitle = 'Download B-BBEE explanatory notes, compliance guidelines, and frameworks.';
$breadcrumbs = [['label' => 'BEE Information', 'url' => '#'], ['label' => 'Explanatory Notes']];
$hero_bg = 'images/background/bee-information.png';
include 'includes/page-hero.php';

$downloads = [
  ['name' => 'Explanatory Notice 1 of 2019 - Submission of Info for BEE Compliancy Report', 'url' => 'https://drive.usercontent.google.com/download?id=1GSNYZsGDj2FHJSPLTL4fKxh5HTbfxXCB&export=download&authuser=0&confirm=t&uuid=7e319602-2d0b-4cab-8a00-06e0f70252e7&at=APZUnTVhk3jK8beCV6qsGQthoLX_:1710530934702'],
  ['name' => 'SAHRC Disability Monitoring Framework and Guidelines Draft', 'url' => 'https://drive.usercontent.google.com/download?id=1huAqunuM0-imWiJ6v_hokVN1MkHXMKiL&export=download&authuser=0&confirm=t&uuid=7a49cd7a-e723-446c-b7c1-36241c48855a&at=APZUnTXlF9iogrgvahHO7vPSrpE3:1710531076633'],
  ['name' => 'Thresholds for BEE Transactions Gazette June 2017', 'url' => 'https://drive.usercontent.google.com/download?id=1KqX8OnKupg7Ss3Nbu5ypis_kMe6SgdkB&export=download&authuser=0&confirm=t&uuid=a14b9c47-a8c5-420b-a6a9-95476ae9d675&at=APZUnTXFVJ9Wv0FIFF7dx8aMVMY7:1710530944077'],
  ['name' => 'Explanatory Notice 1 of 2021 - Guidelines on Completion of Compliance Matrix', 'url' => 'https://drive.usercontent.google.com/download?id=14XAyRgf1i9cqn2P0_YMXJS69ufpGUXNz&export=download&authuser=0&confirm=t&uuid=d801ad6b-4524-4d27-bcdf-3ec634aaaa5d&at=APZUnTWaFfBPSwgCtUSDhBRuNQz8:1710530936821'],
  ['name' => 'Explanatory Notice 2 of 2021 - Guidelines on Completion of Compliance Matrix', 'url' => 'https://drive.usercontent.google.com/download?id=14XAyRgf1i9cqn2P0_YMXJS69ufpGUXNz&export=download&authuser=0&confirm=t&uuid=d801ad6b-4524-4d27-bcdf-3ec634aaaa5d&at=APZUnTWaFfBPSwgCtUSDhBRuNQz8:1710530936821'],
];
?>

<!-- Downloads Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">BEE Information</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">Explanatory Notes</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-5xl mx-auto">
      <?php foreach ($downloads as $dl): ?>
      <a href="<?= $dl['url'] ?>" class="group flex items-center gap-3 p-4 rounded-xl border border-border bg-white hover:border-primary/30 hover:shadow-lg transition-all duration-300">
        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary transition-colors">
          <i data-lucide="download" class="w-5 h-5 text-primary group-hover:text-white transition-colors"></i>
        </div>
        <span class="text-sm font-medium text-secondary group-hover:text-primary transition-colors leading-snug"><?= $dl['name'] ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
