@extends('layouts.basico')

@section('content')
<div class="container mx-auto p-3">
    <div class="card mb-3 p-3">
        <img src="{{ asset('imagens/quadra.jpg') }}" class="rounded mx-auto d-block" style="width: 600px;" >
        <div class="card-body">
            <h4 class="card-title" style="text-align: center">{{$espaco->nome}}</h4>
            <div class="card mt-3 p-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Endereço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">{{$espaco->nome}}, {{$espaco->numero}}, CEP: {{$espaco->cep}}</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th scope="col">Bairro</th>
                            <th scope="col">Cidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$espaco->bairro}}</td>
                            <td>{{$espaco->cidade}}-{{$espaco->estado}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mt-3 mx-3 p-3">
            <h4 class="card-title">Lista</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection