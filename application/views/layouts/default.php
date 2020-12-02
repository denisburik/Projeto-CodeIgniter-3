<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <title>Project CI 3</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-4 bg-primary">
                <div class="nav text-center text-white h2">Project CI 3</div>
            </div>
        </div>
    </div>
    <?php $this->load->view($view) ?>

</body>
</html>