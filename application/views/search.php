<!-- Search Result -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url(); ?>">Home</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url(); ?>search/<?= $name; ?>">Search: <?= $name; ?></a></li>
    </ol>
</nav>


<div class="container">
    <div class="row top">
        <div class="col-xs-6">
            <h2 class="sub-header">Used Languages</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">Language</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($langs as $n => $i): ?>
                            <tr>

                                <td class="col-md-1"><?= $n . " (" . $i . ")" ?></td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>

        </div>

        <div class="col-xs-6">
            <h2 class="sub-header">Repositories Info</h2>
            <div class="table-responsive">
                <table  id="repos" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Repo Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Language</th>
                            <th scope="col">Stars</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($repos as $id => $repo): ?>
                            <tr>
                                <th scope="row"><?= $repo->id ?></th>
                                <td><?= $repo->full_name ?></td>
                                <td><?= $repo->description ?></td>
                                <td><?= $repo->language ?></td>
                                <td><?= $repo->watchers ?></td>
                            </tr>

                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>