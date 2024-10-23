<!-- List Image -->
<?php if ($selected_value == 'dev_landing'): ?>
    <?php if( have_rows('dev_landing') ): ?>
        <?php while( have_rows('dev_landing') ): the_row(); 
        ?>
        <div class="dev-landing">
            <div class="container">
                <h1>Website Specialists based in London</h1>
            </div>
            <div class="wrapper">
                <div class="dev-landing__media">
                    <img />
                </div>
                <div class="stripe-pulse">
                    <div class="stripe-pulse__item stripe-pulse--1">
                    </div>
                    <div class="stripe-pulse__item stripe-pulse--2">  
                    </div>
                    <div class="stripe-pulse__item stripe-pulse--3">  
                    </div>
                </div>
            </div>
         
        </div>
    <?php endwhile; ?> 
    <?php endif; ?> 
<?php endif; ?> 