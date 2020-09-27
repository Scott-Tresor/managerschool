@extends('layouts.app')

@section('title', 'Liste des eleves inscrits')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">LISTE DES ELEVES AYANT PAYER</h4>
                        </div>
                        <div>
                            <a href="{{ route('admin.paiement.create') }}"  class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="ti-clipboard btn-icon-prepend"></i>  Enregistrer le paiement
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
                                            MOTIF  DE PAIEMENT
                                        </th>
                                        <th class="text-center">
                                            PERIODE DE PAIEMENT
                                        </th>
                                        <th class="text-center">
                                            MOTIF
                                        </th>
                                        <th class="text-center">
                                            CLASSE
                                        </th>
                                        <th class="text-center">
                                            Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($paiement as $users)
                                        <tr class="text-center">
                                            <td>
                                                {{ $users->motifpaiement }}
                                            </td>
                                            <td>
                                                {{ $users->period }}
                                            </td>
                                            <td>
                                                {{ $users->mount }}
                                            </td>
                                            <td>

                                            </td>
                                            <td class="text-center mt-0 mb-0">
                                                <a href="{{ route('admin.paiement.show', $users->id ) }}"  class="btn btn-outline-primary">
                                                    <i class=" ti-new-window btn-icon-prepend"></i> Voir
                                                </a>
                                                <a href="{{ route('admin.paiement.edit', $users->id ) }}"  class="btn btn-outline-warning">
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
