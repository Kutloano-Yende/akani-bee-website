<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>B-BBEE Act and Amendments - Together We Build</title>
<meta name="description" content="Download the B-BBEE Act, amendments, and related gazette documents.">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'B-BBEE Act & Amendments';
$page_subtitle = 'Access the B-BBEE Act, Commissioner Practice Guide, and Verification Manual.';
$breadcrumbs = [['label' => 'BEE Information', 'url' => '#'], ['label' => 'B-BBEE Act & Amendments']];
$hero_bg = 'images/background/bee-information.png';
include 'includes/page-hero.php';

$downloads = [
  ['name' => 'BEE Act Gazette', 'url' => 'https://drive.usercontent.google.com/download?id=1Dcxpmq2oRD3Mw5LN6uIXrbgidKcC6BXI&export=download&authuser=0&confirm=t&uuid=2e7ade30-d6ec-40ff-b30f-935c57690e40&at=APZUnTVaDZH-NXaAOOFYjA47mdrX:1710489515853'],
  ['name' => 'BEE Commissioner Practice Guide', 'url' => 'https://drive.usercontent.google.com/download?id=11jJCYqIYM0NCyIgu024fykTrTJx7u-GT&export=download&authuser=0&confirm=t&uuid=6e7b3ce7-632d-4a4e-87d6-2b27eaacd066&at=APZUnTWlALOYsvycjUWWBSz8hKVC:1710489656385'],
  ['name' => 'Verification Manual', 'url' => 'https://drive.usercontent.google.com/download?id=1tBBa3uZtdUZLhc3q7JkCQ5k80swElrGV&export=download&authuser=0&confirm=t&uuid=f9e8d293-8304-44bf-b2b5-9dd646ffde3b&at=APZUnTV8HHntxRRfLe-d4rvsn-8N:1710489683327'],
];
?>

<!-- Downloads Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">BEE Information</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">B-BBEE Act and Amendments</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl mx-auto">
      <?php foreach ($downloads as $dl): ?>
      <a href="<?= $dl['url'] ?>" class="group flex items-center gap-3 p-5 rounded-xl border border-border bg-white hover:border-primary/30 hover:shadow-lg transition-all duration-300">
        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary transition-colors">
          <i data-lucide="download" class="w-6 h-6 text-primary group-hover:text-white transition-colors"></i>
        </div>
        <span class="text-sm font-semibold text-secondary group-hover:text-primary transition-colors leading-snug"><?= $dl['name'] ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
