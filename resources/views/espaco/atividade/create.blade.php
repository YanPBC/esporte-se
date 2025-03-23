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
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 col-lg-8">
            <h2 class="m-3">LISTA DE ATIVIDADES</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col-6">Esporte</th>
                    <th scope="col-2">Data/Hora</th>
                    <th scope="col-2">Vagas</th>
                    <th scope="col-2">Ação</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($espaco->atividades as $atividade)
                        @if($atividade->data >= \Carbon\Carbon::today())
                        <tr>
                            <th scope="row">{{$atividade->esporte->nome}}</th>
                            <td>{{date('d/m/Y', strtotime($atividade->data))}} - {{date('H:i', strtotime($atividade->hora_inicial))}}</td>
                            <td>{{$atividade->vagas}}</td>
                            <td>
                                <form action="{{route('atividade.delete',['id'=> $atividade->id,'espaco'=>$espaco])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="submit()" class="btn btn-outline-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"></path></svg>
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection