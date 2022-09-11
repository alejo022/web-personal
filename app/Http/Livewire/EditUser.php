<?php

namespace App\Http\Livewire;

use App\Models\Empresa;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EditUser extends Component
{
    public $user, $password;
    public $role, $userRoles = [];
    public $titulo = '';
    public $btnRol = false;

    protected $listeners = ['create','edit'];

    protected $rules = [
        'user.name' => 'required',
        'user.email' => 'required|email:rfc,dns|unique:users,email',
        'password' => 'required|min:8',
        'user.active' => 'required',
        'role' => 'required'
    ];

    protected $messages =  [
        'user.name.required' => 'El nombre es requerido.',
        'user.active.required' => 'El estado es requerido.',
        'user.email.required' => 'El correo es requerido.',
        'user.email.email' => 'No es un correo valido.',
        'password.min' => 'Se requiere mínimo 8 caracteres.',
        'password.required' => 'La contraseña es requerida.',
        'user.active' => 'El estado es requerido.'
    ];

    public function render()
    {
        return view('livewire.edit-user',[
            'roles' => Role::all(),
        ]);
    }

    public function create()
    {
        $this->titulo = 'Crear nuevo Usuario';
        $this->user = new User;
    }

    public function edit(User $user)
    {
        $this->titulo = 'Editar Usuario';
        $this->user = $user;
        $this->btnRol = true;
    }

    public function save()
    {
        if ($this->user->id) {
            $this->validate([
                'user.name' => 'required',
                'user.email' => 'required|email:rfc,dns',
                'password' => $this->password == null ? 'nullable' : 'required|min:8',
                'user.active' => 'required'
            ]);

            $this->user->update([
                'name' => $this->user->name,
                'email' => $this->user->email,
                 $this->password == null ? : 'password' => Hash::make($this->password),
                'active' => $this->user->active,
            ]);

        } else {
            $this->validate();

            User::create([
                'name' => $this->user->name,
                'email' => $this->user->email,
                'password' => Hash::make($this->password),
                'active' => $this->user->active,
            ])->roles()->attach($this->role);
        }

        $this->close();
        $this->emitUp('render');
    }

    public function addRole()
    {
        $this->user->roles()->attach($this->role);
        $this->emitUp('render');
    }

    public function deleteRole(Role $role)
    {
        $this->user->roles()->detach($role->id);
        $this->emitUp('render');
    }

    public function close()
    {
        $this->reset(['user','role','userRoles','btnRol','password']);
        $this->resetErrorBag();
        $this->emit('cerrarModal');
    }

}
