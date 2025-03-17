@extends('layouts.basico')

@section('content')
<div class="container bg-body-tertiary rounded">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="row">
            <h4 class="border-bottom pb-4 ">
                <a class="link-body-emphasis link-opacity-25-hover link-underline link-underline-opacity-0" href="{{route('espaco.create')}}">
                    <strong>
                        <button type="button" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"></path>
            </svg>
                            
                          
                        Novo Espaço  </button>                     
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
                    <div class="row">
                        <div class="col">
                            <a href="{{route('espaco.show', $espaco->id)}}" class="btn btn-primary text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"></path>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"></path>
                                </svg>
                                Visualizar
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{route('espaco.edit', $espaco->id)}}" type="button" class="btn btn-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"></path>
                                </svg>
                                Editar
                              </a>
                        </div>
                        <div class="col">
                            <a href="{{route('espaco.destroy', $espaco->id)}}" type="button" class="btn btn-danger text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"></path>
                                </svg>
                                Excluir
                              </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection