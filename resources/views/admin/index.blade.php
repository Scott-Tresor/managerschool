@extends('layouts.app')

@section('title', 'Liste des utilisateurs de')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">LISTE DE NOS UTILISATEURS</h4>
                        </div>
                        <div>
                            <a href="{{ route('admin.users.create') }}"  class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="ti-clipboard btn-icon-prepend"></i> Cree une nouvel utilisateur
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Utilisateurs</h4>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                            <th>
                                                nom
                                            </th>
                                            <th>
                                                email
                                            </th>
                                            <th>
                                                role
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user as $users)
                                            <tr class="text-center">
                                                <td>
                                                    {{ $users->name }}
                                                </td>
                                                <td>
                                                    {{ $users->email }}
                                                </td>
                                                <td>
                                                    @foreach($users->roles as $userRole)
                                                        <p class="badge @if($userRole->name === 'admin') badge-danger @else badge-primary  @endif">
                                                            {{ $userRole->name }}
                                                        </p>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.users.show', $users->id ) }}"  class="btn btn-outline-primary">
                                                        <i class=" ti-new-window btn-icon-prepend"></i> Voir
                                                    </a>
                                                    @can('edit-user')
                                                    <a href="{{ route('admin.users.edit', $users->id ) }}"  class="btn btn-outline-warning">
                                                        <i class="ti-pencil btn-icon-prepend"></i> Editer
                                                    </a>
                                                    @endcan
                                                    @can('delete-user')
                                                        <form onsubmit="return confirm('Voulez vous supprimer')" action="{{ route('admin.users.destroy', $users->id) }}" method="post" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-secondary">
                                                                <i class="ti-trash  btn-icon-prepend"></i> Supprimer
                                                            </button>
                                                        </form>
                                                    @endcan

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
