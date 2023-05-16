<?php

?>


<div class="col-6">
    <div class="card">
        <div class="card-header">
            <div class="card-image">
                <img src="<?php echo $movie->image ?>" alt="il padrino">
            </div>
        </div>
        <div class="card-body">
            <div>
                <h1>
                    <?php echo $movie->title ?>
                </h1>

                <h3 class="d-flex">
                    Lingua:
                    <div class="img-box mx-3">
                        <?php echo $movie->getFlag() ?>
                    </div>
                </h3>

                <h3>
                    Data:
                    <?php echo $movie->date ?>
                </h3>

                <h3>
                    Voto:
                    <?php echo $movie->vote ?>
                </h3>
            </div>
        </div>
    </div>
</div>