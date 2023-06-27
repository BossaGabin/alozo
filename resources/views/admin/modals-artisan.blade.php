@if ($artisan->verified)
<div class="modal" id="myModaleVe{{ $artisan->id }}">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modifier les informations d'un artisan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('artisans.update', $artisan->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3 mt-3">
                        <label for="nom" class="form-label">Nom et Prénom:</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name"
                            value="{{ $artisan->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Télephone:</label>
                        <input type="mail" class="form-control" id="phone" name="phone"
                            value="{{ $artisan->phone }}">
                    </div>
                    <div class="mb-3">
                        <select name="categorie_id" class="form-control" id="" style="height: 50px;">
                            <option value="{{ $artisan->categorie->id }}">
                                {{ $artisan->categorie->name }}</option>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">
                                    {{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <select name="ville_id" class="form-control" id="" style="height: 50px;">
                            <option value="{{ $artisan->ville->id }}">
                                {{ $artisan->ville->name }}</option>
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Adresse:</label>
                        <input type="text" class="form-control" id="adresse" name="adresse"
                            value="{{ $artisan->adresse }}">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label" >N° pièce:</label>
                        <input type="text" class="form-control" id="adresse" name="adresse"
                            value="{{ $artisan->ID_number }}" disabled>
                    </div>
                    <button type="submit" class="btn btn-success">Valider</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>

  
@endif
<div class="modal" id="myModaleResultat{{ $artisan->id }}">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Décision de l'admin</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="mb-3 mt-3">
                    <label for="nom" class="form-label">Nom et Prénom:</label>
                    <input type="text" class="form-control" id="name" placeholder="" name="name"
                        value="{{ $artisan->name }}">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Télephone:</label>
                    <input type="mail" class="form-control" id="phone" name="phone"
                        value="{{ $artisan->phone }}">
                </div>
                <div class="mb-3">
                    <select name="categorie_id" class="form-control" id="" style="height: 50px;">
                        <option value="{{ $artisan->categorie->id }}">
                            {{ $artisan->categorie->name }}</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <select name="ville_id" class="form-control" id="" style="height: 50px;">
                        <option value="{{ $artisan->ville->id }}">{{ $artisan->ville->name }}
                        </option>
                        @foreach ($villes as $ville)
                            <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Adresse:</label>
                    <input type="text" class="form-control" id="adresse" name="adresse"
                        value="{{ $artisan->adresse }}">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">N° pièce:</label>
                    <input type="text" class="form-control" id="adresse" name="adresse"
                        value="{{ $artisan->ID_number }}">
                </div>

                <div class="d-flex">
                    <a href="{{ route('artisans.verify', ['artisanId' => $artisan->id, 'decision' => 'approuver']) }}"
                        type="submit" class="btn btn-success btn-lg">Accepter</a>
                    <form action="{{ route('artisans.destroy', $artisan->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        {{-- <button class="btn btn-danger fa fa-trash"></button>    --}}
                        <button class="btn btn-danger btn-lg" style="margin-left: 5%">Rejetter</button>
                    </form>

                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Retour</button>
            </div>

        </div>
    </div>
</div>

