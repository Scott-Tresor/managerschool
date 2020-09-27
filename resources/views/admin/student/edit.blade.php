@extends('layouts.app')

@section('title',"Ebenezer")

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="post" action="{{ route('admin.student.update', $student) }}">
                                @method("PATCH")
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Nom</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('username') ? 'is-invalid' : '' }}"
                                                id="exampleInputName1"
                                                placeholder="username"
                                                name="username"
                                                value="{{ $student->username }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Post nom</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('postname') ? 'is-invalid' : '' }}"
                                                id="exampleInputEmail3"
                                                placeholder="Post nom"
                                                name="postname"
                                                value="{{ $student->postname }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Prenom</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('firstname') ? 'is-invalid' : '' }}"
                                                id="firstname"
                                                placeholder="firstname"
                                                name="firstname"
                                                value="{{ $student->firstname }}"
                                            >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="age">Date de naissance</label>
                                            <input
                                                type="date"
                                                class="form-control {{ $errors->first('age') ? 'is-invalid' : '' }}"
                                                id="age"
                                                placeholder="age"
                                                name="age"
                                                value="{{ $student->age }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phones">Nom du tutaire</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('tutairename') ? 'is-invalid' : '' }}"
                                                id="tutairename"
                                                placeholder="tutairename"
                                                name="tutairename"
                                                value="{{ $student->tutairename }}"
                                            >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phonenumber">Numero de telephone du tutaire</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('phonenumber') ? 'is-invalid' : '' }}"
                                                id="phonenumber"
                                                placeholder="Numero du tutaire"
                                                name="phonenumber"
                                                value="{{ $student->phonenumber }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="adresse">Adresse</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('adresse') ? 'is-invalid' : '' }}"
                                                id="adresse"
                                                placeholder="Adresse de l'eleve"
                                                name="adresse"
                                                value="{{ $student->adresse }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Section</label>
                                            <select name="option_id" class="form-control @error('option_id') is-invalid @enderror" id="exampleSelectGender">
                                                @foreach($option as $section)
                                                    <option class="text-black" value="{{ $section->id }}" id="{{ $section->id }}">
                                                        {{ $section->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nationality">Nationalite du parent</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('nationality') ? 'is-invalid' : '' }}"
                                                id="nationality"
                                                placeholder="Nationalite du parent"
                                                name="nationality"
                                                value="{{ $student->nationality }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Section</label>
                                            <select name="classe_id" class="form-control @error('classe_id') is-invalid @enderror" id="exampleSelectGender">
                                                @foreach($class as $classe)
                                                    <option class="text-black" id="{{ $classe->id }}" value="{{ $classe->id }}">
                                                        {{ $classe->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">
                                    <i class=" ti-save  btn-icon-prepend"></i> Enregistrement
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
