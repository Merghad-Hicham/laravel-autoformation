@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                   
                    <h1>les société create</h1>
                    <div class="pull-right">
                        <a href="{{url('societe/create')}}" class=" btn btn-success">Nouvelle Societe</a>

                    </div>
              <table >
              <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>action</th>

                </tr>

              </thead>
              <tbody>
                @foreach($hicham as $h)
                <tr>
                    <td> {{$h->nom}} </td>
                    <td> {{$h->email}} </td>
                    <td> 
                          <form action="{{ url('/societe/'.$h->id) }}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="" class="btn btn-primary">Details</a>
                         <a href=" {{url('societe/'.$h->id.'/edit')}}" class="btn btn-default">Editer</a>
                            <button href="" class="btn btn-danger"> Supprimer</button> 
                         </form> 
                         
                     </td>
                </tr>
                @endforeach
              </tbody>
              </table>
                    
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection