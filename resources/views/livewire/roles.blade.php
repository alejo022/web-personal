<div>
    <h1>Roles</h1>

    @can('acceso', 'roles-crear','roles-editar')
        <button wire:click="create" type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#roles"><i class="fas fa-plus"></i> Nuevo Rol</button>
    @endcan

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>SLUG</th>
                <th>ACCION</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{$role->name}}</td>
                    <td>{{$role->slug}}</td>
                    <td>
                        @can('acceso', 'roles-editar')
                            <a wire:click="edit({{$role->id}})" data-toggle="modal" data-target="#roles" class="btn btn-outline-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                        @endcan
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <div wire:ignore.self class="modal fade" id="roles" aria-modal="false"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{$titulo}}</h4>
                    <button type="button" class="close" wire:click="close" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold" for="name">Nombre:</label>
                        <input wire:keyup="slug()" wire:model="role.name" type="text" class="form-control border-radius-campo @error('role.name') is-invalid @enderror">
                        @error('role.name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label fw-bold">Slug:</label>
                        <input wire:model="role.slug" type="text" class="form-control border-radius-campo @error('role.name') is-invalid @enderror">
                        @error('role.slug')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="slug">Permisos:</label>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>
                                        Permiso
                                    </th>
                                    <th>
                                        Descripción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permisos->sortBy('slug') as $permission)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" value="{{ $permission->id }}" type="checkbox" wire:model="checkPermissions" id="{{ $permission->id }}">
                                                <label class="form-check-label"
                                                    for="{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0">{{ $permission->description }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" wire:click="close">Cerrar</button>
                    <button type="button" class="btn btn-primary" wire:click="save">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
