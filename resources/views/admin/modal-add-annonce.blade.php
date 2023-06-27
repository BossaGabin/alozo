{{-- <div id="myModal" class="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Déposer une annonce</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('annonces.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="title">Titre:</label>
                        <input type="text" class="form-control" name="title" placeholder="Exemple:" required>
                    </div>
                    <div class="form-group mt-3">
                        <select name="categorie_id" class="form-control" id="" required>
                            <option value="categorie">Choisissez une catégorie</option>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="budget">Budget:</label>
                        <input type="text" class="form-control" name="budget" placeholder="Exemple:" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="deadline">Délai:</label>
                        <input type="date" class="form-control" name="deadline" placeholder="Exemple:" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="content">Description:</label>
                        <textarea name="content" id="" class="form-control" cols="50" rows="3" required></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="content">Images:</label>
                        <input type="file" class="form-control" name="picture" placeholder="Exemple:">
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-success">Soumettre</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> --}}
<div id="myModal" class="modal modal-lg">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Déposer une annonce</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('annonces.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="title">Titre:</label>
                        <input type="text" class="form-control" name="title" placeholder="Exemple:" required>
                    </div>
                    <div class="form-group mt-3">
                        <select name="categorie_id" class="form-control" id="" required>
                            <option value="categorie">Choisissez une catégorie</option>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <select name="ville_id" class="form-control" id="" style="height: 50px;" required>
                            <option value="ville">Choisir une ville</option>
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="budget">Budget:</label>
                        <input type="text" class="form-control" name="budget" placeholder="Exemple:" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="deadline">Délai:</label>
                        <input type="date" class="form-control" name="deadline" placeholder="Exemple:" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="content">Description:</label>
                        <textarea name="content" id="" class="form-control" cols="50" rows="3"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="content">Images:</label>
                        <input type="file" class="form-control" name="images[]" placeholder="Images illustrative"
                            multiple>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-success">Envoyer le dépôt</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>