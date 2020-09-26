@extends('layouts.app')

@section('title',"Ebenezer {{ $user->name }} ")

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Utilisateurs</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
