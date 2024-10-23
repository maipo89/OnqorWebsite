<!-- List Image -->
<?php if ($selected_value == 'grid'): ?>
    <?php if( have_rows('grid') ): ?>
        <?php while( have_rows('grid') ): the_row(); 
        ?>
        <div class="grid">
            <div class="container">
                <h1>Grid</h1>
            </div>
        </div>
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 