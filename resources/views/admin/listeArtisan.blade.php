@extends('admin/entete')

@section('content')
    <div class="container px-6 mx-auto grid">
        <h1 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" style="margin-top: 30px">Listes des artisans
        </h1>
        <div class="container mt-3">

            <button style="margin-bottom: 10px; margin-left:90%" type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#myModal">
                <i class="fa-solid fa-square-plus"></i>
                Nouveau
            </button>
        </div>

        @include('admin.modal-add-artisan')
        {{-- {{dd($artisans)}} --}}
        <table class="table table-bordered border-black border-solid-2px">
            <thead>
                <tr>
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Nom et Prénom</th>
                    <th class="px-4 py-3">Téléphone</th>
                    <th class="px-4 py-3">Categories</th>
                    <th class="px-4 py-3">Villes</th>
                    <th class="px-4 py-3">Address</th>
                    <th class="px-4 py-3">Statut</th>
                    <th class="px-4 py-3">Etat du compte</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artisans as $artisan)
                    <tr>
                        <td> {{ $loop->index + 1 }} </td>
                        <td> {{ $artisan->name }} </td>
                        <td> {{ $artisan->phone }} </td>
                        <td> {{ $artisan->categorie->name }} </td>
                        <td> {{ $artisan->ville->name }} </td>
                        <td> {{ $artisan->adresse }} </td>
                        <td>
                            <a href="/statuts-update-artisan/{{ $artisan->id }}"
                                class="btn btn-{{ $artisan->statuts ? 'success' : 'danger' }}">{{ $artisan->statuts ? 'Actif' : 'Inactif' }}</a>
                            {{-- <a href="/statuts-update-artisan/{{ $artisan->id }}" class="btn btn-danger">Inactif</a> --}}
                        </td>
                        <td>
                            @if ($artisan->verified)
                                <a onclick="alert('Artisan déjà approuvé');" class="btn btn-success">Approuver</a>
                            @else
                                <a href="#" type="submit" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModaleResultat{{ $artisan->id }}">En attente</a>
                            @endif
                            @include('admin.modals-artisan')
                        </td>

                        <td>
                            <div style="display:flex;">
                                <!--boutton Modal  Nouveau   -->
                                <a href="#" type="submit" class="btn btn-primary fa fa-pencil" data-bs-toggle="modal" data-bs-target="#myModaleVe{{ $artisan->id }}"></a>
                                <!-- The Modal -->
                                &nbsp;
                                <!-- End boutton Modal  Nouveau   -->
                                <form action="{{ route('artisans.destroy', $artisan->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger fa fa-trash"></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
