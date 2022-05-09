<?php
    include_once('templates/header.php');
    include_once('process/pizza.php');
?>
    <div id="main-banner">
        <h1>Faça seu pedido</h1>
    </div>
    <div id="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Monte a pizza conforme o seu desejo:</h2>
                    <form action="process/pizza.php" method="POST" id='pizza-form'>
                        <div class="form-group">
                            <label for="borda">Borda:</label>
                            <select name="borda" id="borda" class="form-control">
                                <option value="">Selecione a borda</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="massa">Massa:</label>
                            <select name="massa" id="massa" class="form-control">
                                <option value="">Selecione a massa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sabores">Sabores (no máximo 3)</label>
                            <select multiple name="sabores" id="sabores" class="form-control">
                                <option value="">Selecione os sabores</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Fazer pedido!" class='btn btn-primary'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once('templates/footer.php');
?>