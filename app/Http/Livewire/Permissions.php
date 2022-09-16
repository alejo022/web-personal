<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;


class Permissions extends Component
{
    use WithPagination;

    public $permiso;
    public $search = '';
    public $titulo = 'Nuevo Permiso';

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'permiso.name' => 'required',
        'permiso.slug' => 'required|unique:permissions,slug',
        'permiso.description' => 'required',
    ];

    protected $messages = [
        'permiso.name.required' => 'El nombre es requerido',
        'permiso.slug.required' => 'El slug es requerido',
        'permiso.slug.description' => 'La descripción es requerida',
    ];

    public function render()
    {
        return view('livewire.permissions',[
            'permisos' => Permission::where('name','like','%'.$this->search.'%')->orderBy('name')->paginate(10)
        ])->layout('components.layoutadmin');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->reset(['permiso']);
        $this->permiso = new Permission;
    }

    public function edit(Permission $permiso)
    {
        $this->titulo = 'Editar Permiso';
        $this->permiso = $permiso;
    }

    public function save()
    {
        $this->validate();

        Permission::updateOrCreate(['id' => $this->permiso->id],[
            'name' => $this->permiso->name,
            'slug' => $this->permiso->slug,
            'description' => $this->permiso->description
        ]);

       $this->close();
    }

    public function slug()
    {
        $this->permiso->slug = Str::slug($this->permiso->name);
    }

    public function close()
    {
        $this->reset(['permiso']);
        $this->resetErrorBag();
        $this->emit('cerrarModal');
    }
}
