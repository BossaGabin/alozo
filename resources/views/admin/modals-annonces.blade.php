<div class="modal" id="myModaleVe{{ $annonce->id }}">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modifier les informations d'une annonce</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('annonces.update', $annonce->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3 mt-3">
                        <label for="nom" class="form-label">Titre:</label>
                        <input type="text" class="form-control" id="title"
                            placeholder="" name="title" value="{{ $annonce->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="content">Description:</label>
                        <textarea name="content" id="" class="form-control" cols="50" rows="3">{{ $annonce->content }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Categorie:</label>
                        <select name="categorie_id" class="form-control" id=""
                            style="height: 50px;">
                            <option value="{{ $annonce->categorie->id }}">
                                {{ $annonce->categorie->name }}</option>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">
                                    {{ $categorie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Délai:</label>
                        <input type="date" class="form-control" id="deadline"
                            name="deadline" value="{{ $annonce->deadline }}">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Budget:</label>
                        <input type="text" class="form-control" id="budget"
                            name="budget" value="{{ $annonce->budget }}">
                    </div>
                    <button type="submit" class="btn btn-success">Valider</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger"
                    data-bs-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>