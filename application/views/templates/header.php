<!DOCTYPE html>
<head>
    <!-- robot speak -->
    <meta charset="utf-8">
    <title><?= $title; ?></title>

    <link rel="icon" href="<?= base_url(); ?>assets/img/icons/favicon-32.png" type="image/png"><!-- default favicon -->

    <!-- crayons and paint -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- magical wizardry -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="subpage">
    <!-- Header -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="fab fa-git-square"></i> GitHub Repositories from API</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if (!$this->github->get_access_token()) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="authorize">Login With GitHub!</a>
                    </li>
                <?php endif; ?>

                <?php if ($this->github->get_access_token()) : ?>
                    <li>
                        <a class="nav-link" href="<?php echo base_url(); ?>secure/logout"><i class="fas fa-unlock-alt"></i> Logout</a>              
                    <?php endif; ?>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="<?= base_url(); ?>search/">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>
    </nav>