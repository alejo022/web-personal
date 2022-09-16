<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Str;
use Livewire\Component;

class Roles extends Component
{
    public $role;
    public $checkPermissions = [];
    public $titulo = 'Crear nuevo Rol';

    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'role.name' => 'required',
        'role.slug' => 'required'
    ];

    protected $messages = [
        'role.name.required' => 'El nombre es requerido',
        'role.slug.required' => 'El slug es requerido',
    ];

    public function render()
    {
        return view('livewire.roles',[
            'roles' => Role::orderBy('name')->paginate(10),
            'permisos' =>  Permission::all()
        ])->layout('components.layoutadmin');
    }

    public function create()
    {
        $this->reset(['role','checkPermissions']);
        $this->role = new Role;
    }

    public function edit(Role $role)
    {
        $this->titulo = 'Editar Rol';
        $this->role = $role;
        $this->checkPermissions = $this->role->permissions->pluck('id')->map(function ($id){
            return strval($id);
        })->toArray();
    }

    public function save()
    {
        $this->validate();

        Role::updateOrCreate(['id' => $this->role->id],[
            'name' => $this->role->name,
            'slug' => $this->role->slug
        ])->permissions()->sync($this->checkPermissions);

        $this->close();
        $this->emit('success','El rol fue guardado correctamente.');
    }

    public function slug()
    {
        $this->role->slug = Str::slug($this->role->name);
    }

    public function close()
    {
        $this->reset(['role','checkPermissions','titulo']);
        $this->resetErrorBag();
        $this->emit('cerrarModal');
    }

}
