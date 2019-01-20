@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{ url('/societe') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nom :</label>
                        <input class="form-control" type="text" name="name">

                    </div>
                    <div class="form-group">
                        <label for="">Email :</label>
                        <input class="form-control" type="text" name="email">

                    </div>
                    <div class="form-group">
                        
                        <input class="form-control btn btn-primary" type="submit" value="Enregistrer">

                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection