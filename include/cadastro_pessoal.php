<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro Pessoal</title>
    
    <!-- Barra de Navegação -->
    <?php
        include "navbar_cad.php";
    ?>
    <!-- Área do Formulário -->
    <div class="container">
        <div class="login">
            <!-- Título -->
            <div class="cadastro">
                <div id="cadastro">Cadastro Pessoal</div></div>
            <!-- Formulário -->
            <div class="form">
              <!-- LINHA 1 DO FORMULÁRIO -->
              <form action="arquivo" method="post">
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" name="nome" />
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">E-mail (institucional):</label>
                    <input type="email" class="form-control" name="e-mail" />
                  </div>
                </div>

                <!-- LINHA 2 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Instituição da titulação:</label>
                    <div class="form-group">
                    <input type="text" class="form-control" id="instituicao_titulacao" name="instituicao_titulacao"
                          placeholder="Digite aqui">
                  </div>
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">Ano de conclusão:</label>
                    <input type="text" class="form-control" name="ano_conclusao" />
                  </div>
                </div>

                <!-- LINHA 3 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm-3">
                    <label for="">Estado:</label>
                    <input type="text" class="form-control" id="estado" name="estado"
                          placeholder="Digite aqui">
                  </div>
                  <!-- 1ª Coluna -->
                  <div class="col-sm-3">
                    <label for="">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade"
                          placeholder="Digite aqui">
                  </div>
                  <!-- 2ª Coluna  -->
                  <div class="col-sm">
                    <label for="">Instituição atual:</label>
                    <input type="text" class="form-control" id="instituicao_atual" name="instituicao_atual"
                          placeholder="Digite aqui">
                  </div>
                </div>

                <!-- LINHA 4 DO FORMULÁRIO-->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Nível de escolaridade:</label>
                    <input type="text" class="form-control" id="nivel_escolaridade" name="nivel_escolaridade"
                    placeholder="Digite aqui">
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">Função/cargo:</label>
                    <input type="text" class="form-control" id="funcao_cargo" name="funcao_cargo"
                    placeholder="Digite aqui">
                  </div>
                </div>

                <!-- LINHA 5 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                      <label for="">Senha:</label>
                      <input type="text" class="form-control" name="senha" />
                    </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm" id="recaptcha">
                    <div class="recaptcha"></div>
                  </div>
                </div>
                
                <!-- LINHA 6 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Confirmar senha:</label>
                    <input type="text" class="form-control" name="confirmar_ senha" />
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm" id="recaptcha">
                    <button type="button" class="btn btn-warning" id="voltar">Voltar</button>
                    <button type="submit" class="btn btn-info" id="registrar" name="submit">Registrar-se</button>
                  </div>
                </div>
              </form>
          </div>
      </div>
      <!-- Rodapé -->
    
    </div>
    <?php include "footer.php"?>
    
    
        
    

</body>
</html>