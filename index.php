<?php

require __DIR__. '/data.php';

require __DIR__ . "/header.php";

    ?>

    <div class="cards" >

    <?php 
    foreach ($teams as $name => $team):
    ?>
        <div class="card" >

            <img class="team-logo" src="<?= $team['logo_uefa'] ?>" alt="">

            <h2><?= $name ?></h2>

            <p>League: <?= $team['league'] ?> </p>

            <p>UEFA ranking:  <?=  $team['uefa-coefficient-ranking'] ?>  </p>

            <p>League position: <?= $team['league-position'] ?? 'Unknown' ?> </p>

            <p>City: <?= $team['city'] ?> </p>

            <a href="<?= $team['url'] ?>"> Visit club website</a>          
        </div>

    <?php endforeach; ?>

    </div>

</body>
</html>