@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Editar Cliente</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.clients.update', $client->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="clients_name" class="required">Nombre del cliente </label>
                                <input type="text" name="clients_name" id="clients_name" class="form-control {{$errors->has('clients_name') ? 'is-invalid' : ''}}" placeholder="Ingrese el nombre del cliente" value="{{old('clients_name', $client->clients_name)}}">
                                @if ($errors->has('clients_name'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('clients_name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="clients_email" class="required">Email del cliente </label>
                                <input type="email" name="clients_email" id="clients_email" class="form-control {{$errors->has('clients_email') ? 'is-invalid' : ''}}" placeholder="Ingrese el email del cliente" value="{{old('clients_email', $client->clients_email)}}">
                                @if ($errors->has('clients_email'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('clients_email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="clients_phone_number" class="required">Teléfono del cliente</label>
                                <input type="text" name="clients_phone_number" id="clients_phone_number" class="form-control {{$errors->has('clients_phone_number') ? 'is-invalid' : ''}}" placeholder="Ingrese el teléfono del cliente" value="{{old('clients_phone_number', $client->clients_phone_number)}}">
                                @if ($errors->has('clients_phone_number'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('clients_phone_number') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="clients_message" class="required">Mensaje del cliente</label>
                                <input type="text" name="clients_message" id="clients_message" class="form-control {{$errors->has('clients_message') ? 'is-invalid' : ''}}" placeholder="Ingrese el teléfono del cliente" value="{{old('clients_message', $client->clients_message)}}">
                                @if ($errors->has('clients_message'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('clients_message') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{route('admin.clients.index')}}">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Regresar
                                    </a>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i>Editar
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
