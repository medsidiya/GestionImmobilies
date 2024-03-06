@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-user-plus"></i> Moddifier  Vendeur
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('Vendeur.update', $vendeur->id) }}">
                            @csrf
                            @method("PATCH")

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" name="nom" value="{{ $vendeur->nom }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="prenom">
Prénom</label>
<input type="text" class="form-control" name="prenom" value="{{ $vendeur->prenom }}">
</div>
</div>


                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="NNI">NNI</label>
                                <input type="number" class="form-control" name="NNI" value="{{ $vendeur->NNI }}">
                            </div>
                            <div class="col-md-6">
                                <label for="telephone">Téléphone</label>
                                <input type="text" class="form-control" name="telephone" value="{{ $vendeur->telephone }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="dateNaiss">Date de Naissance</label>
                                <input type="date" class="form-control" name="dateNaiss" value="{{ $vendeur->dateNaiss }}">
                            </div>
                        </div>
<br>
                        <div class="form-group row">
                            <div class="col-md-12 text-left">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
.card {
margin-top: 20px;
}

css
Copy code
    .card-header {
        background-color: #b3e5fc;
        text-align: center;
    }
</style>
@endpush