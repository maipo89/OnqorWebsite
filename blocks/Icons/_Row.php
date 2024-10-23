<!-- List Image -->
<?php if ($selected_value == 'row'): ?>
    <?php if( have_rows('row') ): ?>
        <?php while( have_rows('row') ): the_row(); 
        ?>
        <div class="row">
            <div class="container">
                <h1>Row</h1>
            </div>
        </div>
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 