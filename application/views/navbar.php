<?php
  $url = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Infops Examination Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<!--Error/ Success Message-->

  <?php if($success = $this->session->flashdata('success')):?>
     <!--Toast-->
     <div class="bs-example float-message text-white bg-danger">
        <div class="toast" id="myToast">
            <div class="toast-header" style="background:#89be47">
                <strong class="mr-auto"><?= $success; ?></strong>
                <small></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <div class="toast-body">
                <div><?= $success; ?></div>
            </div> -->
        </div>
    </div>
    <!--/Toast-->
    <?php endif;?>

    <?php if($error = $this->session->flashdata('error')):?>
       <!--Toast-->
     <div class="bs-example float-message">
        <div class="toast" id="myToast">
            <div class="toast-header" style="background: #be4747">
                <strong class="mr-auto"><?= $error; ?></strong>
                <small></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- 
            <div class="toast-body">
                <div><?= $error; ?></div>
            </div> -->
        </div>
    </div>
    <!--/Toast-->
    <?php endif;?>


    <?php if($warning = $this->session->flashdata('warning')):?>
       <!--Toast-->
     <div class="bs-example float-message">
        <div class="toast" id="myToast">
            <div class="toast-header" style="background: #008c9a">
                <strong class="mr-auto"><?= $warning; ?></strong>
                <small></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- 
            <div class="toast-body">
                <div><?= $error; ?></div>
            </div> -->
        </div>
    </div>
    <!--/Toast-->
    <?php endif;?>
    <!--/Error/ Success Message End-->