@extends('layouts.app')

@section('title', 'Liste des eleves inscrits')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">LISTE DES ELEVES INSCRITS</h4>
                        </div>
                        <div>
                            <a href="{{ route('admin.student.create') }}"  class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="ti-clipboard btn-icon-prepend"></i>  inscrire un nouveau eleve
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Liste des eleves inscrits</h4>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-center">
                                            nom
                                        </th>
                                        <th class="text-center">
                                            postnom
                                        </th>
                                        <th class="text-center">
                                            classe
                                        </th>
                                        <th class="text-center">
                                            Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($student as $users)
                                        <tr class="text-center">
                                            <td>
                                                {{ $users->username }}
                                            </td>
                                            <td>
                                                {{ $users->firstname }}
                                            </td>
                                            <td>

                                            </td>
                                            <td class="text-center mt-0 mb-0">
                                                <a href="{{ route('admin.student.show', $users->id ) }}"  class="btn btn-outline-primary">
                                                    <i class=" ti-new-window btn-icon-prepend"></i> Voir
                                                </a>
                                                <a href="{{ route('admin.student.edit', $users->id ) }}"  class="btn btn-outline-warning">
                                                    <i class="ti-pencil btn-icon-prepend"></i> Editer
                                                </a>
                                                <form onsubmit="return confirm('Voulez vous supprimer')" action="{{ route('admin.student.destroy', $users->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-secondary">
                                                        <i class="ti-trash  btn-icon-prepend"></i> Supprimer
                                                    </button>
                                                </form>
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
