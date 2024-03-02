@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} 
                    <a class="btn btn-success" href="{{route('computers.create')}}">AGREGAR NUEVO</a></div>

                <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Brand</th>
                                <th>specification</th>
                                <th>status</th>
                                <th>price</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        @foreach ($computers as $computer )                                                                                                                                                    
                            <tr>
                                <td>{{$computer->brand}}</td>
                                <td>{{$computer->specification}}</td>
                                <td>{{$computer->condition}}</td>
                                <td>{{$computer->price}}</td>
                                <td>
                                <a class="btn btn-warning" href="{{route('computers.edit',$computer->id)}}">EDITAR</a>  
                                </td>
                                <td>
                                    <form action="{{route('computers.destroy',$computer->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Eliminar">
                                </form>
                                </td>



                            </tr>
                        @endforeach 
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection