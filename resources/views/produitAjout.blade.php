<div class="col">
    <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Designation</label>
            <input type="text" class="form-control" name="designation" placeholder="la designation du produit">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3" placeholder="la description du produit"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Prix unitaire</label>
            <input type="number" class="form-control" name="prix" min="1" value="1">
        </div>
        <div class="mb-3">
            <label class="form-label">Images</label>
            <input type="file" class="form-control" name="image">
        </div>
        <input type="submit" class="btn btn-info" value="Enregistrer">
        <input type="reset" class="btn btn-warning" value="Annuler">
    </form>
</div>
