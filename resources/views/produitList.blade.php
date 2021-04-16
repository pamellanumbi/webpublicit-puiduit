<div class="col">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Code</th>
            <th scope="col">Designation</th>
            <th scope="col">Description</th>
            <th scope="col">PU</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($produits as $p)
        <tr>
            <th scope="row">{{ $p->id }}</th>
            <td>{{ $p->codeProd }}</td>
            <td>{{ $p->designation }}</td>
            <td>{{ $p->description }}</td>
            <td>{{ $p->prix }}</td>
            <td>
                <a href="{{ url('/show/'.$p->id) }}" class="btn btn-sm btn-info">Afficher</a>
                <a href="{{ url('/edit/'.$p->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                <a href="{{ url('/destroy/'.$p->id) }}" class="btn btn-sm btn-danger">Supprimer</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
