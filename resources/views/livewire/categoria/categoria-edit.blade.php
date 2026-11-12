<div class="mt-5">
    <h1 class="text-center mb-5">Edição de Categoria</h1>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent='update'>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        wire:model='nome'>
                </div>
                <button type="submit" class="btn-solid theme-primary">Avançar</button>
            </form>
        </div>
    </div>
</div>
