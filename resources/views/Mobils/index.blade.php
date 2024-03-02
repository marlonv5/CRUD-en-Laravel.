@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} 
                    <a class="btn btn-success" href="{{route('mobils.create')}}">AGREGAR NUEVO</a></div>

                <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Country</th>
                                <th>stock</th>
                                <th>price</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        @foreach ($mobils as $mobil )                                                                                                                                                    
                            <tr>
                                <td>{{$mobil->brand}}</td>
                                <td>{{$mobil->country}}</td>
                                <td>{{$mobil->stock}}</td>
                                <td>{{$mobil->price}}</td>
                                <td>
                                <a class="btn btn-warning" href="{{route('mobils.edit',$mobil->id)}}">EDITAR</a>  
                                </td>
                                <td>
                                    <form action="{{route('mobils.destroy',$mobil->id)}}" method="post">
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