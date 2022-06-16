<?php
  $nav = [
    [
      "name" => "Expansions",
      "link" => "#",
      "sub" => [
        [
          "name" => "Dragon King",
          "link" => "#",
        ], [
          "name" => "Dung Beetle Knight",
          "link" => "#",
        ], [
          "name" => "Lion Knight",
          "link" => "#",
        ], [
          "name" => "Flower Knight",
          "link" => "#",
        ], [
          "name" => "Manhunter",
          "link" => "#",
        ], [
          "name" => "Gorm",
          "link" => "#",
        ], [
          "name" => "Slenderman",
          "link" => "#",
        ], [
          "name" => "Sunstalker",
          "link" => "#",
        ], [
          "name" => "Lonely Tree",
          "link" => "#",
        ], [
          "name" => "Spidicules",
          "link" => "#",
        ], [
          "name" => "Lion God",
          "link" => "#",
        ]
      ]
    ]
  ];
?>

<nav>
  <div class="nav__box">
    <section class="left logo">
      <a href="http://localhost/whitespeaker/public/">
        <img src="http://localhost/whitespeaker/public/media/img/logo.svg" alt="Logo">
      </a>
    </section>
    <section class="middle">
      <?php foreach ($nav as $item): ?>
        <div class="nav__item">
          <a href="<?= $item['link']; ?>">
            <?= $item['name']; ?>
            <?php if (!empty($item['sub'] ?? [])): ?>
              <div class="nav__arrow">&#10148;</div>
            <?php endif; ?>
          </a>
          <?php if (!empty($item['sub'] ?? [])): ?>
            <div class="nav__list">
              <?php foreach ($item['sub'] as $sub): ?>
                <div class="nav__list__item">
                  <a href="<?= $sub['link']; ?>"><?= $sub['name']; ?></a>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </section>
    <section class="right">
    </section>
  </div>
</nav>
