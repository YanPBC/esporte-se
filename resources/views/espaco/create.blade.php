@extends('layouts.basico')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Novo Espaço</h4>
            <form class="needs-validation" method="POST" action="{{route('espaco.store')}}">
              @csrf
              <div class="row g-3">
                <div class="col-12">
                  <label for="nome do espaco" class="form-label">Nome do Espaço</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="CEP" class="form-label">CEP</label>
                  <div class="input-group has-validation">
                    <input type="text" name="cep" class="form-control" placeholder="xxxxx-xxx">
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>
    
                <div class="col-10">
                  <label for="email" class="form-label">Logradouro</label>
                  <input type="text" class="form-control" name="logradouro">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
                <div class="col-2">
                  <label for="email" class="form-label">Número</label>
                  <input type="text" name="numero" class="form-control">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address" class="form-label">Bairro</label>
                  <input type="text" class="form-control" name="bairro" required="">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
    
                <div class="col-6">
                  <label for="address2" class="form-label">Cidade</label>
                  <input type="text" name="cidade" class="form-control">
                </div>
                <div class="col-6">
                  <label for="address2" class="form-label">UF</label>
                  <input type="text" name="estado" class="form-control" >
                </div>

              <hr class="my-4">
    
              <h4 class="mb-3">Tipo de Espaço</h4>
    
              <div class="my-3">
                <div class="form-check">
                  <input id="1" name="tipo" type="radio" class="form-check-input" value="1" checked="" required="">
                  <label class="form-check-label" for="publico">Espaço Publico</label>
                </div>
                <div class="form-check">
                  <input id="2" name="tipo" type="radio" class="form-check-input" value="2" required="">
                  <label class="form-check-label" for="privado">Espaço Privado</label>
                </div>

              </div>
    
              <hr class="my-4">
    
              <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar Espaço!</button>
            </form>
          </div>
    </div>
</div>
@endsection