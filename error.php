<?php if(count($error) > 0): ?>
    <?php foreach ($error as $errors) :?>
        <div class="alert alert-danger">
            <p> <?php echo $errors; ?> </p>
        </div>
    <?php endforeach;?>
<?php endif;?>