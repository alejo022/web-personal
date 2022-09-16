<div>
    <h1>Usuarios</h1>

    <div class="col-md-2">
        <button wire:click="$emit('create')" type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#users"><i class="fas fa-plus"></i> Nuevo Usuario</button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>ROLES</th>
                <th>ESTADO</th>
                <th>ACCION</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>@foreach ($user->roles as $role)
                        {{$role->name}}
                    @endforeach</td>
                    <td><span class="badge badge-{{$user->active ? 'success' : 'danger'}}">{{$user->active ? 'Activo' : 'Inactivo'}}</span></td>
                    <td><a wire:click="$emit('edit',{{$user->id}})" data-toggle="modal" data-target="#users" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{$users->links()}}

    @livewire('edit-user')
</div>
