<?php NavActions::setNavUri('/learn') ?>
<?php Response::addMetaImage('https://spee.ch/@lbryteam/everyone-banner2.jpg') ?>
<?php Response::setMetaDescription('description.team') ?>

<main class="ancillary">
  <section class="hero" style="background-image: url(https://spee.ch/@lbryteam/everyone-banner2.jpg)">
    <div class="inner-wrap inner-wrap--center-hero">
      <h1>The Team</h1>
      <h2>Teamwork makes the dream work</h2>
    </div>
  </section>

  <?php $teams = [
    "Leadership" => ['jeremy-kauffman', 'alex-grintsvayg', 'josh-finer'],
    "Tech" => ['lex-berezhny',  'jack-robison', 'victor-shyba', 'brannon-king', 'roy-lee',
                'jessop-breth'],
    "Advisory Team" => ['alex-tabarrok', 'ray-carballada', 'stephan-kinsella', 'michael-huemer'],
  ] ?>

  <?php foreach ($teams as $team => $members): ?>
    <section>
      <div class="inner-wrap">
        <h2><?php echo $team ?></h2>
      </div>
      <div class="inner-wrap team-members">
          <?php foreach ($members as $bioSlug): ?>
            <?php echo View::render('content/_bioCircle', ['slug' => $bioSlug]) ?>
          <?php endforeach ?>
      </div>
    </section>
  <?php endforeach ?>

</main>
