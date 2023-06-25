<div id="devenirArtisan-modal" class="modal modal-lg">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Devenir un artisan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('artisans.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col mt-3">
                            <label for="name">Nom et Prénoms:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder=""value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="form-group col mt-3">
                            <label for="phone">Téléphone:</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder=""value="{{ Auth::user()->phone }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col mt-3">
                            <label for="email">Adresse mail:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{ Auth::user()->email }}" required>
                        </div>
                        <div class="form-group col mt-3">
                            <label for="ID_number">Numéro pièce:</label>
                            <input type="text" class="form-control" name="ID_number" id="ID_number"placeholder="Exemple:12345678" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mt-3">
                            <label for="ville_id">Ville:</label>
                            <select name="ville_id" class="form-control" id="" required>
                                <option value="ville">Choisissez une ville</option>
                                @foreach ($villes as $ville)
                                    <option {{Auth::user()->ville_id == $ville->id ? 'selected' : ''}} value="{{ $ville->id }}">{{ $ville->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col mt-3">
                            <label for="adresse">Adresse:</label>
                            <input type="text" class="form-control" name="adresse" placeholder="Exemple:IITA,Vedoko,Menontin,Zogbo" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col mt-3">
                            <label for="categorie_id">Catégories:</label>
                            <select name="categorie_id" class="form-control" id="" required>
                                <option value="categorie">Choisissez une catégorie</option>
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col mt-3">
                            <label for="certifacate">Diplôme:</label>
                            <input type="file" name="certificate" id="certifacate" class="form-control"
                                cols="50" rows="3">
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn-order" style="width: 30%"> Soumettre </button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>