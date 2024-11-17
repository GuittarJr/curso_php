<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Contato</h2>
        </div>
        <div class="card-body">
            <form action="pages/forms/contato.php" method="POST" role="form">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input name="name" type="text" class = "form-control" placeholder = "Digite seu nome">
                    <br>
                    <label for="email">Email:</label>
                    <input name="email" type="email" class = "form-control" placeholder = "Entre com seu email">
                    <br>
                    <label for="subeject">Assunto:</label>
                    <input name="subject" type="text" class = "form-control" placeholder = "Assunto">
                    <br>
                    <label for="message">Mensagem:</label>
                    <br>
                    <textarea class="form-control" name="message" rows="10" cols="30"></textarea>
                    <div class="button-right">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>