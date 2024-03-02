@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> EDITAR INFORMACION</div>
                <div class="card-body">
                    <form action="{{route('computers.update',$computer->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">💻</span>
                            <input value="{{$computer->brand}}" name="txt_brand" type="text" class="form-control" placeholder="Brand - Marca" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">💽</span>
                            <input value="{{$computer->specification}}" name="txt_specification" type="text" class="form-control" placeholder="Specifications" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">⚙️</span>
                            <input value="{{$computer->condition}}" name="txt_condition" type="text" class="form-control" placeholder="Status" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">💸</span>
                            <input value="{{$computer->price}}" name="txt_price" type="text" class="form-control" placeholder="Price" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <br>
                        <input class="btn btn-primary" type="submit" value="GUARDAR">
                        <a class="btn btn-danger" href="{{route('computers.index')}}">CANCELAR</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection