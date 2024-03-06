@extends('layouts.auth')

@section('content')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>transaction details</title>

    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Service name: {{$transaction->id}}
                        <button class="btn btn-success float-end "><a href="print/{{$transaction->id}}" @click.prevent="printme" target="_blank" class="text-white text-decoration-none">imprimer</a></button>
                        {{-- <button type="button" class="btn btn-primary float-end " data-bs-toggle="modal" data-bs-target="#staticBackdrop">add service</button> --}}
                    </h4>
                </div>
                <div class="card-body">
                    <h1>this is the hole details of transctio</h1>

                    in {{$transaction->dateTr}} 
                    Mr {{$vendeurs->id}} sold to mr {{$acheteurs->nom}}  a land in {{$terrains->emplacement}}
                    the temoin was {{$temoins->nom}} and it done by {{$notaires->nom}}
            </div>
        </div>
    </div>
    <script src="{{url('js/app.js')}}"></script>
</body>
</html>

@endsection