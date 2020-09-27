@extends('layouts.app')

@section('title',"Ebenezer")

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="post" action="">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Motif de paiement</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('motifpaiement') ? 'is-invalid' : '' }}"
                                                id="exampleInputName1"
                                                placeholder="motifpaiement"
                                                name="motifpaiement"
                                                value="{{ $received->motifpaiement }}"
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
                                                value="{{ $received->mount }}"
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
                                                class="form-control {{ $errors->first('period') ? 'is-invalid' : '' }}"
                                                id="period"
                                                placeholder="period"
                                                name="period"
                                                value="{{ $received->period }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Eleves</label>
                                            <select class="form-control" name="student_id" id="exampleSelectGender">
                                                @foreach($student as $eleves)
                                                    <option class="text-black" id="{{ $eleves->id }}" value="{{ $eleves->id }}">{{ $eleves->username }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Classe</label>
                                            <select class="form-control" name="classe_id" id="exampleSelectGender">
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
