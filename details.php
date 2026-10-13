<?php

require __DIR__. '/data.php';

require __DIR__ . "/header.php";

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$team = null;

foreach ($teams as $name => $data) {
    if ($data['ID'] === $id) {
        $team = $data;
        $team['name'] = $name;
        break;
    }
}
    ?>
        <div class="card-detail" >

            <div class="content-detail"> 
            <h2 ><?= $name ?></h2>

            <p>League: <?= $team['league'] ?> </p>

            <p>UEFA ranking:  <?=  $team['uefa-coefficient-ranking'] ?>  </p>

            <p>League position: <?= $team['league-position'] ?? 'Unknown' ?> </p>

            <p>City: <?= $team['city'] ?> </p>

            <a href="<?= $team['url'] ?>"> Visit club website →</a>
             
            </div>   
            
            <img class="team-logo" src="<?= $team['logo_uefa'] ?>" alt="">

        </div>

</body>
</html>