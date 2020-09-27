@extends('layouts.app')

@section('title',"Ebenezer")

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="post" action="{{ route('admin.student.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputName1">username</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                                                id="exampleInputName1"
                                                placeholder="Name"
                                                name="name"
                                                value="{{ old('name') }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Email</label>
                                            <input
                                                type="email"
                                                class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}"
                                                id="exampleInputEmail3"
                                                placeholder="Email"
                                                name="email"
                                                value="{{ old('email') }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fonction">fonction</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('fonction') ? 'is-invalid' : '' }}"
                                                id="fonction"
                                                placeholder="fonction"
                                                name="fonction"
                                                value="{{ old('fonction') }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phones">phone</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('phone') ? 'is-invalid' : '' }}"
                                                id="phones"
                                                placeholder="phone"
                                                name="phone"
                                                value="{{ old('phones') }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="adresse">adresse</label>
                                            <input
                                                type="text"
                                                class="form-control {{ $errors->first('adresse') ? 'is-invalid' : '' }}"
                                                id="adresse"
                                                placeholder="Adresse"
                                                name="adresse"
                                                value="{{ old('adresse') }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Role</label>
                                            <select class="form-control" id="exampleSelectGender">
                                                <option class="text-black">PRIMAIRE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input
                                        type="password"
                                        class="form-control {{ $errors->first('password') ? 'is-invalid' : '' }}"
                                        id="password"
                                        placeholder="password"
                                        name="password"
                                        value="{{ old('password') }}"
                                    >
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
