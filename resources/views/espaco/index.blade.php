@extends('layouts.basico')

@section('content')
<div class="container bg-body-tertiary rounded">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="row">
            <h4 class="border-bottom pb-4 ">
                <a class="link-body-emphasis link-opacity-25-hover link-underline link-underline-opacity-0" href="{{route('espaco.create')}}">
                    <strong>
                        <button type="button" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"></path></svg>
                            Novo Espaço  
                        </button>                     
                    </strong>
                </a>
            </h4>
        </div>
        @foreach($espacos as $espaco)
            <div class="row border-bottom align-items-center">
                <div class="col-8">
                    <div class="row">
                        <div class=" h5 link-light">
                            <a href="{{route('espaco.show', $espaco->id)}}" class="link-underline link-underline-opacity-0">
                                <span class="link-light"> {{$espaco->nome}}</span>
                            </a>
                        </div>
                    </div>
                        <div class="row justify-content-between small text-secondary-emphasis mb-0 lh-sm">
                            <p class="col-4">{{$espaco->logradouro}}, {{$espaco->numero}}</p>
                            <p class="col-4">{{$espaco->cidade}}-{{$espaco->estado}}</p>
                            <p class="col-4">___ atividades</p>
                        </div>
                </div>
                <div class="col-4">
                    <div class="row text-center d-none d-md-flex">
                        <div class="col-4" >
                            <a href="{{route('atividade.create', $espaco->id)}}" class="btn btn-primary text-dark d-flex">
                                <span class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill m-1" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"></path></svg>
                                Atividades</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{route('espaco.edit', $espaco->id)}}" type="button" class="btn btn-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"></path></svg>
                                Editar
                              </a>
                        </div>
                        <div class="col-4">
                            <form action="{{route('espaco.destroy',$espaco->id)}}">
                                @csrf
                                @method('DELETE')
                                <a type="button" onclick="submit()" class="btn btn-danger text-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"></path></svg>
                                    Excluir
                                </a>
                            </form>
                        </div>
                    </div>

                    <!-- Botão Dropdown para telas menores que md -->
                    <div class="d-md-none">
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Atividades</a></li>
                                <li><a class="dropdown-item" href="#">Editar</a></li>
                                <li><a class="dropdown-item" href="#">Excluir</a></li>
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="container mt-3">
                        <!-- Botões visíveis em telas md ou maiores -->
                        <div class="d-none d-md-flex gap-2">
                            <button class="btn btn-primary">Botão 1</button>
                            <button class="btn btn-secondary">Botão 2</button>
                            <button class="btn btn-success">Botão 3</button>
                        </div>
                    
                        <!-- Botão Dropdown para telas menores que md -->
                        <div class="d-md-none">
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    Menu
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Botão 1</a></li>
                                    <li><a class="dropdown-item" href="#">Botão 2</a></li>
                                    <li><a class="dropdown-item" href="#">Botão 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection