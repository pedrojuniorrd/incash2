@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Responsáveis'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-6">
                                <h6>Adicionar Responsável</h6>
                            </div>
                            <div class="col-6 text-end">
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Salvar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form role="form" method="POST"
                            action="#"
                            enctype="multipart/form-data">
                            
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Username</label>
                                            <input class="form-control" type="text" name="username" value="gsantoscomp"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Email
                                                address</label>
                                            <input class="form-control" type="email" name="email" disabled=""
                                                value="gsantos@gmail.com" onfocus="focused(this)"
                                                onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Guilherme Santos</label>
                                            <input class="form-control" type="text" name="firstname" value="Admin"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Data de Nascimento</label>
                                            <input class="form-control" type="text" name="lastname" value="10/07/1997"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Endereço</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Logradouro</label>
                                            <input class="form-control" type="text" name="address" value=""
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Cidade</label>
                                            <input class="form-control" type="text" name="city" value=""
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">País</label>
                                            <input class="form-control" type="text" name="country" value=""
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">CEP</label>
                                            <input class="form-control" type="text" name="postal" value=""
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
