<dialog class="Modal" id="<?php echo e($id); ?>">
    <div class="Modal-inner">
        <button class="js-close-modal Modal-close-button" type="button">
            <span aria-hidden="true">&times;</span>
        </button>

        <div class="Modal-header">
            <h2><?php echo e($title); ?></h2>
        </div>

        <div class="Modal-body">
            <?php echo e($slot); ?>

        </div>
    </div>
</dialog>
