<div class ="container">
    <?php /** @var \App\Models\Fan[] $data */
    foreach ($data as $fan) { ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?=$fan->getName() ?>
            </h1>
            <p class="lead"><?=$fan->getPassword() ?></p>
        </div>
    </div>
<?php } ?>