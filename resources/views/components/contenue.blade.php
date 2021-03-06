<div class="row">
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title text-md-center text-xl-left">Eleves inscrit</p>
                <div
                    class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ DB::table('students')->count() }}</h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title text-md-center text-xl-left">Eleves en ordre</p>
                <div
                    class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ DB::table('receiveds')->count() }}</h3>
                    <i class="ti-face-sad  icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title text-md-center text-xl-left">Utilisateur</p>
                <div
                    class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ DB::table('users')->count() }}</h3>
                    <i class="ti-user  icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title text-md-center text-xl-left">Statistiques</p>
                <div
                    class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"></h3>
                    <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Utilisateurs</h4>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
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
                                <td class="text-center">
                                    @foreach($users->roles as $userRole)
                                    <p
                                        class="badge @if($userRole->name === 'admin') badge-danger @else badge-primary @endif">
                                        {{ $userRole->name }}
                                    </p>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('admin.users.show', $users->id ) }}"
                                        class="btn btn-outline-primary">
                                        <i class=" ti-new-window btn-icon-prepend"></i> Voir
                                    </a>
                                    @can('delete-user')
                                    <form onsubmit="return confirm('Voulez vous supprimer')"
                                        action="{{ route('admin.users.destroy', $users->id) }}" method="post"
                                        class="d-inline">
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
