<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Chute Boxe No Stress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-light">   
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="img/imgchutebox.jpg" alt="Banner" width="82" height="67">
          <h2>Academia Chute Boxe No Stress</h2>
          <p class="lead">Cadastro de Alunos</p>
        </div>       
          <div class="col-md-12">
            <h4 class="mb-3">Informações básicas de cadastro</h4>
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">Nome</label>
                  <input name="firstName" type="text" class="form-control" id="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    É necessário preencher o nome!
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Sobrenome</label>
                  <input name="lastName" type="text" class="form-control" id="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    É necessário preencher o sobrenome!
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="sex" class="form-label">Sexo</label>
                  <select class="form-select" id="sex" required>
                    <option value="">Selecione...</option>
                    <option>Homen</option>
                    <option>Mulher</option>
                  </select>
                    <div class="invalid-feedback">
                      É necessário selecionar um sexo!
                    </div>      
                </div>
    
                <div class="col-sm-6">
                  <label for="birthDate" class="form-label">Data de nascimento</label>
                  <input name="birthDate" type="text" class="form-control" id="birthDate" placeholder="">
                  <div class="invalid-feedback">
                    Data incorreta!
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="fone" class="form-label">Telefone de contato</label>
                    <input name= "fone" type="text" class="form-control" id="fone" placeholder="" required>
                    <div class="invalid-feedback">
                      É necessário ter um contato!
                    </div>      
                </div>
    
                <div class="col-sm-6">
                  <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
                  <input name="email" type="text" class="form-control" id="email" placeholder="">
                  <div class="invalid-feedback">
                    Email incorreto!
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address" class="form-label">Endereço</label>
                  <input name="address" type="text" class="form-control" id="address" placeholder="" required>
                  <div class="invalid-feedback">
                    É necessário preencher o endereço!
                  </div>
                </div>
    
                <div class="col-md-5">
                  <label for="country" class="form-label">País</label>
                  <select class="form-select" id="country" required>
                    <option value="">Selecione...</option>
                    <option>Brasil</option>
                    <option>Tibete</option>
                  </select>
                  <div class="invalid-feedback">
                    Selecione um País!
                  </div>
                </div>
    
                <div class="col-md-4">
                  <label for="state" class="form-label">Estado</label>
                  <select class="form-select" id="state" required>
                    <option value="">Selecione...</option>
                    <option>Ceará</option>
                    <option>Lhasa</option>
                  </select>
                  <div class="invalid-feedback">
                    Selecione um Estado!
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="zip" class="form-label">Cep</label>
                  <input name="zip" type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Preencha o Cep!
                  </div>
                </div>

              </div>                     
              <div class="my-3">                
              </div>    
              <div class="row gy-3">                
                </div>                
                </div>                
              </div>    
              <hr class="my-4">    
              <button class="w-100 btn btn-primary btn-lg" type="submit">Salvar Cadastro</button>
            </form>
          </div>
        </div>
      </main>
    
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 Academia Chute Boxe No Stress</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>