<div class="col">
    <form action="{{ url('/update/'.$produit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="codeProd" value="{{ $produit->codeProd }}">
            <input type="hidden" name="etat" value="{{ $produit->etat }}">
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
        @if($produit->image!=null)
            <div class="mb-3">
                <img src="{{ asset('images/'.$produit->image)  }}" alt="No Image" width="200px" height="200px">
            </div>
        @else
            <div class="mb-3">
                <label class="form-label">Images</label>
                <input type="file" class="form-control" name="image">

            </div>
        @endif
        <input type="submit" class="btn btn-info" value="Enregistrer">
        <input type="reset" class="btn btn-warning" value="Annuler">
    </form>
</div>
