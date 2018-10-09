<!-- Login Home -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url(); ?>">Home</a></li>
    </ol>
</nav>

<div class="container">
    <div class="row top">
        <div class="col-md-9 welcome-text">
            <div class="welcome-text">
                <?php if (!$this->github->get_access_token()) { ?>
                    <?php echo anchor('authorize', '<i class="icon-github icon-spin"></i> Login with GitHub to continue!', array('class' => 'btn btn-block', 'id' => 'login-button')); ?>
                <?php } else { ?>
                    <h1>Please search for repo!</h1>

                <?php } ?>
            </div>
        </div>
    </div>