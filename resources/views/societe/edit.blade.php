@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ url('/societe/'.$s->id) }}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nom :</label>
                        <input class="form-control" type="text" name="name" value="{{$s->nom}} ">

                    </div>
                    <div class="form-group">
                        <label for="">Email :</label>
                        <input class="form-control" type="text" name="email" value="{{$s->email}} ">

                    </div>
                    <div class="form-group">
                        
                        <input class="form-control btn btn-success" type="submit" value="Modifier">

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection