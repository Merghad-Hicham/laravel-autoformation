@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                  
                    You are welcom!

                    <?php

echo "id = " .$id;
echo "name = ".$name; ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection