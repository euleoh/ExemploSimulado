<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> Nome</th>
                <th scope="col"> Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categorias as $c)
                <tr>


                    <td>{{ $c->id }}</td>
                    <td>{{ $c->nome }}</td>
                    <td>
                        <a href="{{ route('categoria.edit', ['id' => $c->id]) }}" class="btn-solid theme-primary">
                            Editar
                        </a>

                        <button wire:click='delete({{ $c->id }})' class="btn-solid theme-danger">Excluir</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
