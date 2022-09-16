<div>
    <h1>Permisos</h1>
    <div class="mb-3">
        <button wire:click="create()" data-toggle="modal" data-target="#permisos"
        class="btn btn-outline-primary"><i class="fas fa-plus"></i> Crear Nuevo
            Permiso</button>
    </div>

    <div class="col-md-10 m-auto">
        <div class="input-group mb-3">
            <input wire:model="search" class="form-control"
                placeholder="ESCRIBE EL NOMBRE DEL PERMISO" type="search" id="search">
            <div class="input-group-append">
                <span class="input-group-text h-100"><i class="fas fa-search"></i></span>
            </div>
        </div>
    </div>

    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>SLUG</th>
                    <th>DESCRIPCIÓN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permisos->sortBy('slug') as $permiso)
                    <tr>
                        <td>{{ $permiso->name }}</td>
                        <td>{{ $permiso->slug }}</td>
                        <td>{{ $permiso->description }}</td>
                        <td>

                            <a wire:click="edit({{ $permiso }})" data-toggle="modal" data-target="#permisos"
                                class="btn btn-outline-warning"><i class="fas fa-edit"></i>Editar</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $permisos->links() }}
    <div wire:ignore.self class="modal fade" id="permisos" aria-modal="false" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $titulo }}</h4>
                    <button type="button" class="close" wire:click="close" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold" for="name">Nombre:</label>
                        <input wire:keyup="slug()" wire:model="permiso.name" id="name" type="text"
                            class="form-control @error('permiso.name') is-invalid @enderror">
                        @error('permiso.name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label fw-bold">Slug:</label>
                        <input wire:model="permiso.slug" id="slug" type="text"
                            class="form-control @error('permiso.slug') is-invalid @enderror">
                        @error('permiso.slug')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label fw-bold">Descripción:</label>
                        <textarea wire:model="permiso.description" id="description" rows="3"
                            class="form-control @error('permiso.description') is-invalid @enderror"></textarea>
                        @error('permiso.description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
