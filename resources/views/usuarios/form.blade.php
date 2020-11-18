@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if()
                            <form action="{{url('usuarios/add')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nome: </label>
                                    <input type="text" name="name" class="form-control"
                                           aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp">
                                </div>

                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>





                            <form action="{{url('usuarios/add')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nome: </label>
                                    <input type="text" name="name" class="form-control"
                                           aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp">
                                </div>

                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
