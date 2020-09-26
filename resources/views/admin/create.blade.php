@extends('layouts.app')

@section('title',"Ebenezer")

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="post" action="{{ route('admin.users.create') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">username</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="exampleInputName1"
                                        placeholder="Name"
                                        name="name"
                                        value=""
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="exampleInputEmail3"
                                        placeholder="Email"
                                        name="email"
                                        value=""
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="fonction">fonction</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="fonction"
                                        placeholder="fonction"
                                        name="fonction"
                                        value=""
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="phones">phone</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="phones"
                                        placeholder="phone"
                                        name="phone"
                                        value=""
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="adresse">adresse</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="adresse"
                                        placeholder="Adresse"
                                        name="adresse"
                                        value=""
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Role</label>
                                    <select class="form-control" id="exampleSelectGender">
                                        <option>ROLE_USER</option>
                                        <option>ROLE_ADMIN</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="password"
                                        placeholder="Location"
                                        name="password"
                                        value=""
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
