<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>Affidavits - Together We Build</title>
<meta name="description" content="Download B-BBEE affidavit templates for EME and QSE entities.">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'Affidavits';
$page_subtitle = 'Download affidavit templates for EME and QSE entities across various sector codes.';
$breadcrumbs = [['label' => 'BEE Information', 'url' => '#'], ['label' => 'Affidavits']];
$hero_bg = 'images/background/bee-information.png';
include 'includes/page-hero.php';

$downloads = [
  ['name' => 'Agri Affidavit EME', 'url' => 'https://drive.usercontent.google.com/download?id=1P0ChR4_jdqUdf_ykAaMUIZncQNFLiM9J&export=download&authuser=0&confirm=t&uuid=9545dd82-fecc-467a-a18d-d42d1ceb6789&at=APZUnTXTaOZcLKrXKNpIIXmhIrRn:1710531138960'],
  ['name' => 'Agri Affidavit QSE', 'url' => 'https://drive.usercontent.google.com/download?id=1Iyta_FZup8EZg7Vi94WUz-UTMxAHaOqL&export=download&authuser=0&confirm=t&uuid=64f705b9-309b-410d-84e3-86c69ab296ee&at=APZUnTWVMMkgwCxz8jZOKOy5Qu-C:1710531140218'],
  ['name' => 'Construction SC-EME Affidavit', 'url' => 'https://drive.usercontent.google.com/download?id=19sKZgRLZOnM2YWnjrQAS8EAaPlEeZOYG&export=download&authuser=0&confirm=t&uuid=dd6f47bb-7a09-4530-954b-d7a9d8e53bf8&at=APZUnTV-k_9h9afrL6daEzN0YfLi:1710531214723'],
  ['name' => 'DTI BEE Affidavit EME-Gen', 'url' => 'https://drive.usercontent.google.com/download?id=1xDG55oYLCJEvABjnO5BpFyS6-DkY0H9z&export=download&authuser=0&confirm=t&uuid=90f733e4-16e0-4e64-9283-46fa0210517f&at=APZUnTUfg-w5XDUBmfEHmFDhQ1fH:1710531175855'],
  ['name' => 'DTI BEE Affidavit EME-Spec', 'url' => 'https://drive.usercontent.google.com/download?id=1X6n0DJ3hkykzXAlHEhCqifaREBcIm7JC&export=download&authuser=0&confirm=t&uuid=f81a3594-c6c0-4e18-84a0-fa16dade101a&at=APZUnTWK3HsZWV6dJ_WyV24Y-zZb:1710531181161'],
  ['name' => 'DTI BEE Affidavit QSE-Gen', 'url' => 'https://drive.usercontent.google.com/download?id=1Yt2IO8tziHixyEEYW_hQzh3GHJKKloW1&export=download&authuser=0&confirm=t&uuid=625c4e05-90da-4b8b-b0da-d3c651419755&at=APZUnTW4AF9TS9mOSZ0LuxYRwtt_:1710531312150'],
  ['name' => 'DTI BEE Affidavit QSE-Spec', 'url' => 'https://drive.usercontent.google.com/download?id=1DKTdPyn1HOKTS40f326qJBAQ3k4CxI9X&export=download&authuser=0&confirm=t&uuid=d1ff360f-2b31-44b0-bc0d-89b13bf4d968&at=APZUnTWETqne1FdtL6vw9AEHbq9d:1710531320948'],
  ['name' => 'Finance Affidavit EME', 'url' => 'https://drive.usercontent.google.com/download?id=12JJZVAe20cJKXpoxRuzAR4awDYfq-YqM&export=download&authuser=0&confirm=t&uuid=3defb062-d50c-4056-982d-c1ba734356e4&at=APZUnTXmjjia7GWJu9t1bCudhgMr:1710531342760'],
  ['name' => 'Finance Affidavit QSE', 'url' => 'https://drive.usercontent.google.com/download?id=1cwcqIH6wR6epxtf7lN4pfJTf3G7FOr48&export=download&authuser=0&confirm=t&uuid=dc26bcd9-7122-4043-8aee-11e97f44f077&at=APZUnTVjDjn6MSyhKQSKjRfkG5BE:1710531345453'],
  ['name' => 'ICT EME Affidavit', 'url' => 'https://drive.usercontent.google.com/download?id=1dq2sUODHxt6AJxP5SG_hJJwQrYalo2sD&export=download&authuser=0&confirm=t&uuid=37b7ebe1-0b13-417d-96d7-8d9c149dae7d&at=APZUnTVW60VJ2F5ZiDTnf4MyQ2sb:1710531413179'],
  ['name' => 'ICT QSE Affidavit', 'url' => 'https://drive.usercontent.google.com/download?id=1dq2sUODHxt6AJxP5SG_hJJwQrYalo2sD&export=download&authuser=0&confirm=t&uuid=9d17489c-f946-4aeb-96f8-0d68b1fdbefc&at=APZUnTWF6EaH2gcL_dJdTG2bV0Ji:1710531359712'],
];
?>

<!-- Downloads Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">BEE Information</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">Affidavits</h2>
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
