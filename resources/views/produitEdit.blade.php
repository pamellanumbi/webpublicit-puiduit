<div class="col">
    <form action="{{ url('/update/'.$produit->id) }}" method="post">
        <div class="mb-3">
            <input type="hidden" name="id" value="{{ $produit->id }}">
            <label class="form-label">Designation</label>
            <input type="text" class="form-control" name="designation" value="{{ $produit->designation }}" placeholder="la designation du produit">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3" value="{{ $produit->description }}" placeholder="la description du produit"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Prix unitaire</label>
            <input type="number" class="form-control" name="prix" min="1" value="{{ $produit->prix }}">
        </div>
        <input type="submit" class="btn btn-info" value="Enregistrer">
        <input type="reset" class="btn btn-warning" value="Annuler">
    </form>
</div>
