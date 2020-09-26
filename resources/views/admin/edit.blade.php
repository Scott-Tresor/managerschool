@extends('layouts.app')

@section('title',"Edition du profil de  {{ $user->name }}")

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('admin.users.update', $user) }}">
                                @method("PATCH")
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
                                                value="{{ $user->name }}"
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
                                                value="{{ $user->email }}"
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
                                                value="{{ $user->fonction }}"
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
                                                value="{{ $user->phone }}"
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
                                                value="{{ $user->adresse }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Role</label>
                                            <select class="form-control" id="exampleSelectGender">
                                                @foreach($roles as $role)
                                                    <option class="text-black">
                                                        {{ $role->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Mettre a jours</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
