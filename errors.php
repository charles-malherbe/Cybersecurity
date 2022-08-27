<?php
require 'include/header.html';
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php

                if(isset($_GET['error'])){
                    switch ($_GET['error']){
                        case '400':
                            include 'errors/400.html';
                            break;
                        case '401':
                            include 'errors/401.html';
                            break;
                        case '403':
                            include 'errors/403.html';
                            break;
                        case '404':
                            include 'errors/404.html';
                            break;
                        case '500':
                            include 'errors/500.html';
                            break;

                    }
                }

                ?>

            </div>
        </div>
    </div>
</section>

<?php
require 'include/footer.html';
?>