@extends('layouts.basico')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 col-lg-6">
            <h3 class="mb-3">Adicionar Atividade</h3>
            <h5 class="mb-3">Local: {{$espaco->nome}}</h5>

            <form class="needs-validation" method="POST" action="{{route('atividade.adicionar', $espaco->id)}}">
              @csrf
                <div class="row">             
                    <div class="">
                        <label for="country" class="form-label m-1">Esporte</label>
                        <select class="form-select" id="" name="esporte" required="">
                            <option value="">Escolha</option>

                            @foreach ($esportes as $esporte)
                                <option value="{{$esporte->id}}">{{$esporte->nome}}</option>
                            @endforeach
                            
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="country" class="form-label m-1">Data</label>
                        <input type="date" class="form-control" name="data" id="">
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
                        <input type="time" class="form-control"  name="hora_inicial" id="">
                        <div class="invalid-feedback">
                        Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="country" class="form-label m-1">Horario Final</label>
                        <input type="time" class="form-control"  name="hora_final" id="">
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