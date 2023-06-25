<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ajout artisan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"> </button>
            </div>
            <!-- Modal body -->
            <form action="" method="POST" class="row g-3" style="padding:30px;">
                @csrf
                <div class="col-md-6">
                    <label for="lastname" class="form-label">Nom Complet</label>
                    <input type="text" class="form-control" name="" id="" required>
                </div>
                <div class="col-md-6">
                    <div class="col-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="" name=""
                            placeholder="artisan@gmail.com" required>
                    </div>
                    <div class="col-6">
                        <label for="address" class="form-label">Categories</label>
                        <input type="text" class="form-control" id="adress" name="adress"
                            placeholder="Apartment,">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Adress</label>
                        <input type="text" name="work" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Photo</label>
                        <input type="file" name="" class="form-control" id="">
                    </div>

                    <!-- Modal footer -->

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Ajouter</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>