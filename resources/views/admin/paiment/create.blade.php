@extends('layouts.app')

@section('title',"Ebenezer")

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="post" action="{{ route('admin.paiement.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Motif de paiement</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('motifpaiement') ? 'is-invalid' : '' }}"
                                                id="exampleInputName1"
                                                placeholder="Name"
                                                name="name"
                                                value="{{ old('motifpaiement') }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Montant a payer</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('mount') ? 'is-invalid' : '' }}"
                                                id="exampleInputEmail3"
                                                placeholder="mount"
                                                name="mount"
                                                value="{{ old('mount') }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fonction">Moi de paiement</label>
                                            <input
                                                type="month"
                                                class="form-control {{ $errors->first('periode') ? 'is-invalid' : '' }}"
                                                id="periode"
                                                placeholder="periode"
                                                name="periode"
                                                value="{{ old('periode') }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date">date</label>
                                            <input
                                                type="date"
                                                class="form-control {{ $errors->first('date') ? 'is-invalid' : '' }}"
                                                id="date"
                                                placeholder="date"
                                                name="date"
                                                value="{{ old('date') }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Eleves</label>
                                            <select class="form-control" name="role_id" id="exampleSelectGender">
                                                @foreach($student as $roles)
                                                    <option class="text-black" id="{{ $roles->id }}" value="{{ $roles->id }}">{{ $roles->username }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Classe</label>
                                            <select class="form-control" name="role_id" id="exampleSelectGender">
                                                @foreach($class as $role)
                                                    <option class="text-black" id="{{ $role->id }}" value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Effectuer le paiement</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
