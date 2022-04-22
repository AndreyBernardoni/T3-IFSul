<?php require_once '../controller/search.php' ?>

<html>

<head>
    <meta charset="utf-8" />
    <title>Pesquisar</title>
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
                        <h4>Pesquisa</h4>
                    </div>

                    <div class="card-body">
                        <div class="card-body">

                            <div class="card mb-3 bg-light">
                                <div class="card-body">
                                    <?php

                                    if ($db->search($local)) {
                                        echo '<h5 class="card-title">Resultado da pesquisa</h5>';
                                        echo '<p class="card-text">';
                                        echo '<table class="table table-striped">';
                                        echo '<thead>';
                                        echo '<tr>';
                                        echo '<th scope="col">Data</th>';
                                        echo '<th scope="col">Local</th>';
                                        echo '<th scope="col">Hora</th>';
                                        echo '<th scope="col">Descrição</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($db->search($local) as $key => $value) {
                                            echo '<tr>';
                                            echo '<td>' . $value['dt_data'] . '</td>';
                                            echo '<td>' . $value['txt_local'] . '</td>';
                                            echo '<td>' . $value['hr_hora'] . '</td>';
                                            echo '<td>' . $value['txt_descricao'] . '</td>';
                                            echo '</tr>';
                                        }
                                        echo '</tbody>';
                                        echo '</table>';
                                        echo '</p>';
                                    } else {
                                        echo '<h5 class="card-title">Nenhum resultado encontrado</h5>';
                                    }

                                    ?>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="search_page.php" class="btn btn-info btn-block">Voltar</a>
                    </div>
                    
                </div>
            </div>
        </div>
</body>

</html>