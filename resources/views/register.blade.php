  @extends('layouts.main')

  @section('title', 'Cadastro')

  @section('content') 

  <div class="container">
    <div id="register-student-container" class="col-md-6 offset-md-3">
      
      @if($errors)

          @foreach($errors->all() as $errors)

              <li style="color: red;">

                  {{ $errors }}

              </li>
          
          @endforeach
          
      @endif 
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/imgchutebox.jpg" alt="Chute Boxe No Stress" width="82" height="67">
        <h2>Academia Chute Boxe No Stress</h2>
        <p class="lead">Cadastro de Alunos</p>
      </div>       
        <div class="col-md-12">
          <h4 class="mb-3">Informações básicas</h4>
          <form enctype="multipart/form-data" action="/register_students" method="POST">
            @csrf
            <div class="row g-3">
              <div class="col-sm-6"class="form-group" >
                <label for="firstName" class="form-label">Nome</label>
                <input name="firstName" type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É necessário preencher o nome!
                </div>
              </div>
  
              <div class="col-sm-6" class="form-group">
                <label for="lastName" class="form-label">Sobrenome</label>
                <input name="lastName" type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  É necessário preencher o sobrenome!
                </div>
              </div>

              <div class="col-sm-6" class="form-group">
                <label for="sex" class="form-label">Sexo</label>
                <select class="form-select" id="sex" name="sex" required>
                  <option value="">Selecione...</option>
                  <option>Homen</option>
                  <option>Mulher</option>
                </select>
                  <div class="invalid-feedback">
                    É necessário selecionar um sexo!
                  </div>      
              </div>
  
              <div class="col-sm-6" class="form-group">
                <label for="birthDate" class="form-label">Data de nascimento</label>
                <input name="birthDate" type="text" class="form-control" id="birthDate" placeholder="">
                <div class="invalid-feedback">
                  Data incorreta!
                </div>
              </div>

              <div class="col-sm-6" class="form-group">
                <label for="fone" class="form-label">Telefone de contato</label>
                  <input name= "fone" type="text" class="form-control" id="fone" placeholder="" required>
                  <div class="invalid-feedback">
                    É necessário ter um contato!
                  </div>      
              </div>
  
              <div class="col-sm-6" class="form-group">
                <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
                <input name="email" type="text" class="form-control" id="email" placeholder="">
                <div class="invalid-feedback">
                  Email incorreto!
                </div>
              </div>
  
              <div class="col-12" class="form-group">
                <label for="address" class="form-label">Endereço</label>
                <input name="address" type="text" class="form-control" id="address" placeholder="" required>
                <div class="invalid-feedback">
                  É necessário preencher o endereço!
                </div>
              </div>
  
              <div class="col-md-5" class="form-group">
                <label for="country" class="form-label">País</label>
                <select class="form-select" id="country" name="country" required>
                  <option value="">Selecione...</option>
                  <option>Brasil</option>
                  <option>Tibete</option>
                </select>
                <div class="invalid-feedback">
                  Selecione um País!
                </div>
              </div>
  
              <div class="col-md-4" class="form-group">
                <label for="state" class="form-label">Estado</label>
                <select class="form-select" id="state" name="state" required>
                  <option value="">Selecione...</option>
                  <option>Ceará</option>
                  <option>Lhasa</option>
                </select>
                <div class="invalid-feedback">
                  Selecione um Estado!
                </div>
              </div>
  
              <div class="col-md-3" class="form-group">
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
            <hr class="my-4">    
            <button class="w-100 btn btn-primary btn-lg" type="submit" value="Cadastrar Aluno">Salvar Cadastro</button>
          </form>
      </main>
    </div>
  @endsection