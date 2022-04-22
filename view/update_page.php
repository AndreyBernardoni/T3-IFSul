<html>

<head>
    <meta charset="utf-8" />
    <title>Atualizar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .card-register-product {
            padding: 15vh 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Andrey Fialho 2T
        </a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="card-register-product">
                <div class="card">
                    <div class="card-header">
                        <h4>Atualizar Compromisso</h4>

                        <?php
                        if (isset($_GET['success']) && $_GET['success'] == 'true') {
                            echo '<div class="alert alert-success" role="alert">Compromisso atualizado com sucesso!</div>';
                        } else if (isset($_GET['success']) && $_GET['success'] == 'false') {
                            echo '<div class="alert alert-danger" role="alert">Erro ao atualizar o compromisso!</div>';
                        }
                        ?>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="../controller/update.php">
                                    <div class="form-group">
                                        <input type="hidden" name="id" class="form-control" value="<?= $_POST["id"] ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Data</label>
                                        <input type="date" name="data" class="form-control" placeholder="Data" <?php
                                                                                                                if (isset($_POST["data"])) {
                                                                                                                ?> value="<?= $_POST["data"] ?>" <?php
                                                                                                                                                }
                                                                                                                                                    ?>required />
                                    </div>
                                    <div class="form-group">
                                        <label>Local</label>
                                        <input type="text" name="local" class="form-control" placeholder="Local" <?php
                                                                                                                    if (isset($_POST["local"])) {
                                                                                                                    ?> value="<?= $_POST["local"] ?>" <?php
                                                                                                                                                    }
                                                                                                                                                        ?>required />
                                    </div>
                                    <div class="form-group">
                                        <label>Horário</label>
                                        <input type="time" name="hora" class="form-control" placeholder="Horário" <?php
                                                                                                                    if (isset($_POST["hora"])) {
                                                                                                                    ?> value="<?= $_POST["hora"] ?>" <?php
                                                                                                                                                    }
                                                                                                                                                        ?>required />
                                    </div>
                                    <div class="form-group">
                                        <label>Descrição do Compromisso</label>
                                        <input type="text" name="descricao" class="form-control" placeholder="Descrição" <?php
                                                                                                                            if (isset($_POST["descricao"])) {
                                                                                                                            ?> value="<?= $_POST["descricao"] ?>" <?php
                                                                                                                                                            }
                                                                                                                                                                ?> />
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-warning btn-block" href="../index.php">Voltar</a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Atualizar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>