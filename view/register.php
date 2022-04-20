<html>

<head>
    <meta charset="utf-8" />
    <title>Cadastrar</title>
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
                        <h4>Adicionar Compromisso</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="">
                                    <div class="form-group">
                                        <label>Data</label>
                                        <input type="date" name="date" class="form-control" placeholder="Data" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Local</label>
                                        <input type="text" name="local" class="form-control" placeholder="Local" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Horário</label>
                                        <input type="time" name="hour" class="form-control" placeholder="Horário" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Descrição do Compromisso</label>
                                        <input type="text" name="desc" class="form-control" placeholder="Descrição"/>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-warning btn-block" href="../index.php">Voltar</a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
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