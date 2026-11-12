<?php

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaEdit extends Component
{
    public $nome;
    public $categoriaId;

    // funcção mount (
    // receber id de referencia do que será editado (via rota)
    // buscar por id
    // validar se a pesquisa retornou resultado
    // preencher os campos
    // )

    // função update (
    // receber id de referencia do que será editado (via rota)
    // buscar por id
    // validar se a pesquisa retornou resultado
    // capturar os dados dos campos
    // atualizar
    // retornar e redirecionar
    //)



    public function mount($id){
        $categoria = Categoria::find($id);

        if($categoria == null){
            session()->flash('error', 'categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $this->nome = $categoria->nome;
        $this->categoriaId = $categoria->id;
    }

    public function update(){
        $categoria = Categoria::find($this->categoriaId);

        if($categoria == null){
            session()->flash('error', 'categoria não encontrada');
            return redirect()->route('categoria.index');
        }

        $categoria->nome = $this->nome;

        $categoria->save();

        session()->flash('success', 'Atualizado');
        return redirect()->route('categoria.index');
    }
    
    public function render()
    {
        return view('livewire.categoria.categoria-edit');
    }
}
