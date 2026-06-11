<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>Message Sent | Akani BEE Ratings</title>
<meta name="description" content="Thank you for contacting Akani BEE Ratings. Our team will get back to you soon.">
<meta name="robots" content="noindex, nofollow">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<!-- Success Section -->
<section class="relative py-24 lg:py-32 overflow-hidden">
  <!-- Soft background accents -->
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="relative max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <!-- Animated check icon -->
    <div class="mx-auto w-24 h-24 rounded-full bg-green-100 flex items-center justify-center animate-fade-in">
      <div class="w-16 h-16 rounded-full bg-green-500 flex items-center justify-center shadow-lg shadow-green-500/30">
        <i data-lucide="check" class="w-9 h-9 text-white"></i>
      </div>
    </div>

    <h1 class="mt-8 text-3xl sm:text-4xl lg:text-5xl font-bold text-secondary">Message Sent Successfully!</h1>
    <div class="mt-4 w-16 h-1 bg-primary rounded-full mx-auto"></div>

    <p class="mt-6 text-lg text-muted-foreground leading-relaxed">
      Thank you for reaching out to <span class="font-semibold text-secondary">Akani BEE Ratings</span>.
      Our team has received your message and will get back to you soon.
    </p>

    <!-- Email tip card -->
    <div class="mt-8 inline-flex items-center gap-3 px-5 py-4 rounded-xl bg-primary/5 border border-primary/15 text-left">
      <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
        <i data-lucide="mail-check" class="w-5 h-5 text-primary"></i>
      </div>
      <p class="text-sm text-secondary/80">
        <span class="font-semibold text-secondary">Keep an eye on your email inbox</span> — that's where our reply will arrive.
      </p>
    </div>

    <!-- Actions -->
    <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
      <a href="index.php" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-semibold rounded-lg shadow-lg hover:bg-primary-hover transition-all duration-200 hover:shadow-xl hover:-translate-y-0.5">
        <i data-lucide="home" class="w-4 h-4"></i> Back to Home
      </a>
      <a href="what-we-offer.php" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-border text-secondary font-semibold rounded-lg hover:border-primary/40 hover:bg-primary/5 transition-all duration-200">
        Explore Our Services
      </a>
    </div>

    <!-- Auto-redirect notice -->
    <p class="mt-10 text-sm text-muted-foreground">
      Taking you back to the homepage in <span id="countdown" class="font-semibold text-primary">15</span> seconds…
    </p>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
// Countdown + auto-redirect to homepage
(function () {
  var seconds = 15;
  var el = document.getElementById('countdown');
  var timer = setInterval(function () {
    seconds--;
    if (el) el.textContent = seconds;
    if (seconds <= 0) {
      clearInterval(timer);
      window.location.href = 'index.php';
    }
  }, 1000);
})();
</script>
</body>
</html>
