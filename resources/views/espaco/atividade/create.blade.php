@extends('layouts.basico')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 col-lg-6">
            <h4 class="mb-3">Adicionar Atividade</h4>
            <form class="needs-validation" method="POST" action="">
              @csrf
                <div class="row">             
                    <div class="">
                        <label for="country" class="form-label m-1">Esporte</label>
                        <select class="form-select" id="" name="" required="">
                            <option value="">Escolha</option>
                            <option value="volei">Volei</option>
                            <option value="futebol">Futebol</option>
                            <option value="tenis">Tenis</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="country" class="form-label m-1">Data</label>
                        <input type="date" class="form-control" name="" id="">
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="country" class="form-label m-1">Número de Vagas</label>
                        <input type="text" name="vagas" class="form-control" id="vagas" placeholder="" required="">
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <label for="country" class="form-label m-1">Horario inicial</label>
                        <input type="time" class="form-control"  name="" id="">
                        <div class="invalid-feedback">
                        Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="country" class="form-label m-1">Horario Final</label>
                        <input type="time" class="form-control"  name="" id="">
                        <div class="invalid-feedback">
                        Please select a valid country.
                        </div>
                    </div>
                </div> 

                <hr class="my-4">
    
                <button class="w-100 btn btn-primary btn-lg" type="submit">Adicionar atividade</button>
            </form>
          </div>
    </div>
</div>
@endsection