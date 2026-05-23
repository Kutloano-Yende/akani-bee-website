<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>B-BBEE Codes - Together We Build</title>
<meta name="description" content="Download B-BBEE codes of good practice, sector codes, and related documentation.">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'B-BBEE Codes';
$page_subtitle = 'Access and download the latest B-BBEE codes of good practice and sector-specific codes.';
$breadcrumbs = [['label' => 'BEE Information', 'url' => '#'], ['label' => 'B-BBEE Codes']];
$hero_bg = 'images/background/bee-information.png';
include 'includes/page-hero.php';

$downloads = [
  ['name' => 'Transport Bus Commuter Coach Services', 'url' => 'https://drive.usercontent.google.com/download?id=1nzgg1F-12ExG1YP5o6c8ehXXLZ2MUaU9&export=download&authuser=0&confirm=t&uuid=e67e1d9a-2615-4af1-9e65-bf3599b88f66&at=APZUnTU8klD47whHRpbt6yAK08vQ:1710531967064'],
  ['name' => 'Transport Domestic Aviation', 'url' => 'https://drive.usercontent.google.com/download?id=1Vzk05V5mvvTpVFmtrmmn933WyjdnMSQv&export=download&authuser=0&confirm=t&uuid=eaea2536-56ce-43d5-8596-677b3c2bcf67&at=APZUnTVqP8LlVqqAab5rzClsY5sF:1710531971654'],
  ['name' => 'Transport-Forwarding-Clearing', 'url' => '#'],
  ['name' => 'Transport Maritime Transport Services', 'url' => 'https://drive.usercontent.google.com/download?id=1TLM5o20dZOh2PdvUAcjmXg_J2ZlvS78i&export=download&authuser=0&confirm=t&uuid=968e276e-fb82-43a8-92de-dadd85632c0e&at=APZUnTVBnetDUv_Urxmp91BY-_Me:1710532056682'],
  ['name' => 'Transport Rail', 'url' => 'https://drive.usercontent.google.com/download?id=1bxIFfUd2p2FaIlo10pT9-qeQYe6ISoVY&export=download&authuser=0&confirm=t&uuid=0d09a1e4-d66b-4113-9d2f-0a0785820e14&at=APZUnTWJwzzg5fqhEu4o6hx7xnCj:1710532059464'],
  ['name' => 'Transport Road Freight', 'url' => 'https://drive.usercontent.google.com/download?id=1TecLInbu08nyWEJeQ2xowi2BuB7C4HVg&export=download&authuser=0&confirm=t&uuid=bfc326b3-1737-44c2-8b51-f56254fc0b7c&at=APZUnTWc25k5VHAa2ET9ZHtccu09:1710532062650'],
  ['name' => 'Transport Taxi Industry', 'url' => 'https://drive.usercontent.google.com/download?id=1f70_kwIFd8ELwneYYor8FLxNNa3SPQwv&export=download&authuser=0&confirm=t&uuid=2eeb6c81-3df9-41c5-aa0c-5897e31515ab&at=APZUnTXHG08DC2O5wWLWZBu5hwOZ:1710532066002'],
  ['name' => 'Agric Codes', 'url' => 'https://drive.usercontent.google.com/download?id=1BkMrwOJWL1c9uDGQ7eYQn21-lKBskpS3&export=download&authuser=0&confirm=t&uuid=1f0498d5-1241-4a31-ab97-0366f9d3b7d4&at=APZUnTWC-u6ooAPORMqXi4yyvuk5:1710531767055'],
  ['name' => 'MAC Gazette 39887 1 April 2016', 'url' => 'https://drive.usercontent.google.com/download?id=1fJX1_5cG9s1admK9GW9mWLy203qogO71&export=download&authuser=0&confirm=t&uuid=148968b6-c593-4b4f-a652-79e50ae78c0d&at=APZUnTXRRTpjWe8hskkDWJqDVESJ:1710531897549'],
  ['name' => 'Financial Sector Code', 'url' => 'https://drive.usercontent.google.com/download?id=121UxQzBmNx_HAv0vIof-gaJKhw4X8Gwj&export=download&authuser=0&confirm=t&uuid=44872ed8-f6f0-4de3-8767-d374b81c7df4&at=APZUnTVNafdQ8SCsOZCWGtNjw6Tk:1710531835527'],
  ['name' => 'FORESTRY SC 21 APRIL 2017 GAZETTE 40803', 'url' => 'https://drive.usercontent.google.com/download?id=1wKDCpz_WHyCGwQ3zAk-9QidtauPESiyI&export=download&authuser=0&confirm=t&uuid=57c5310e-e82b-48b5-9302-feda3c386f5b&at=APZUnTV2kpSfPh8f1XdopDYpOmZT:1710531893719'],
  ['name' => 'Amended COGP Gazette 36928 of 11 Oct 2013', 'url' => 'https://drive.usercontent.google.com/download?id=1yHJ8YhZmba-OBZ8uyHRvyM-Fb4xRTZqs&export=download&authuser=0&confirm=t&uuid=cb866f37-4caa-44c5-a890-0386c6866c2d&at=APZUnTV2ZOiqQPyweuI83OSRRk-4:1710531775978'],
  ['name' => 'Amended Construction Final 1 Dec 2017', 'url' => 'https://drive.usercontent.google.com/download?id=1mTtX6DSNjCCZAUPJAnEHtZ-MBT1FGoIF&export=download&authuser=0&confirm=t&uuid=dc801f95-72a4-4c41-ba24-0482d2141576&at=APZUnTXZ-huYmzoXuquMI1RKFBjF:1710531780067'],
  ['name' => 'Amended Finance Final 1 December 2017', 'url' => 'https://drive.usercontent.google.com/download?id=1Tov-x0PBRHlWZrbj82a3DUCvBFD1M2FV&export=download&authuser=0&confirm=t&uuid=8cbff773-2020-4fd7-81db-635a85b910b9&at=APZUnTUKYg3BPUiMBdp9pJ5bVk9d:1710531810163'],
  ['name' => 'Gazette 41866 Statement 000 - YES Initiative', 'url' => 'https://drive.usercontent.google.com/download?id=1w5vnLUKs4cWGfrt6_hxmFh2zhnJd0qRk&export=download&authuser=0&confirm=t&uuid=8154cc7b-c956-4d52-a53a-a1b282ab8e84&at=APZUnTVsEyCfGL66JhQEYN4svonJ:1710531895234'],
  ['name' => 'Defence COGP Gazette 42391 - 12 April 2019', 'url' => 'https://drive.usercontent.google.com/download?id=1LTRjmIiyQPzp3gusIPrDVvzmOI9Lg5Ff&export=download&authuser=0&confirm=t&uuid=049ad5ca-2cd2-4c5b-a1fb-d803b90372c6&at=APZUnTWYxJ5b85D1NXqtyz7Fc9nV:1710531833461'],
  ['name' => 'Property Sector Amended Codes Gazette 40910', 'url' => 'https://drive.usercontent.google.com/download?id=1CEg4rQO13bBHQRkUKDy2maZp2O4h-Ted&export=download&authuser=0&confirm=t&uuid=c54e3142-1875-4fc6-864b-c62d544471d8&at=APZUnTXgnOk3ljkBLaFAQQY9n_sJ:1710531962010'],
  ['name' => 'Tourism Amended Sector Code Gazette No 39430', 'url' => 'https://drive.usercontent.google.com/download?id=1589AvcF5PX8NqQISkGw7Hhe7hdek_6nt&export=download&authuser=0&confirm=t&uuid=4d5b1725-ebea-438a-a2d1-16ced448545d&at=APZUnTX6ZCXGSaxLXO4n1Ku45DML:1710531963789'],
  ['name' => 'Amended ICT Sector Code - Gazette 40407', 'url' => 'https://drive.usercontent.google.com/download?id=1WEnXSqycYb2Z_4PJ8xNHWuUp6D6c6Kq7&export=download&authuser=0&confirm=t&uuid=2f9faef7-f37e-472a-b225-855b0b8b589b&at=APZUnTWQOdqSEMVjZpZdbzK_1g4R:1710531828816'],
];
?>

<!-- Downloads Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">BEE Information</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">B-BBEE Codes</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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
