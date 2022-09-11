<div>
    <div wire:ignore.self class="modal fade" id="users" aria-modal="false" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $titulo }}</h4>
                    <button type="button" class="close" wire:click="close" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="name">Nombre:</label>
                                <input wire:model="user.name" id="name" type="text"
                                    class="form-control @error('user.name') is-invalid @enderror">
                                @error('user.name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div wire:poll.1s class="mb-3">

                                <label class="form-label fw-bold">Rol asignado:</label> <br>

                                @isset($user->roles)
                                    @forelse ($user->roles as $role)
                                        <a wire:click="deleteRole({{ $role->id }})" role="button" tabindex="0"
                                            class="text-danger"><i class="fa-solid fa-trash-can"></i>
                                            {{ $role->name }}</a> <br>
                                    @empty
                                        <p>Ningún Rol Asignado</p>
                                    @endforelse
                                @endisset
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="correo" class="form-label fw-bold">Correo:</label>
                                <input wire:model="user.email" id="correo" type="email"
                                    class="form-control @error('user.email') is-invalid @enderror">
                                @error('user.email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="role" class="fw-bold">Seleccione rol:</label>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <select wire:model="role"
                                            class="form-control mb-3  @error('role') is-invalid @enderror" id="role">
                                            <option value="">Seleccionar</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        @if ($btnRol)
                                            <button wire:click="addRole()" class="btn btn-success"><i
                                                    class="fa fa-plus"></i></button>
                                        @endif
                                    </div>
                                </div>
                                @error('role')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Contraseña:</label>
                                <input wire:model="password" id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="">Estado:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input wire:model="user.active"
                                            class="form-check-input @error('user.active') is-invalid @enderror"
                                            type="radio" name="active" id="activo" value="1">
                                        <label class="form-check-label" for="activo">Activo</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input wire:model="user.active"
                                            class="form-check-input @error('user.active') is-invalid @enderror"
                                            type="radio" name="active" id="inactivo" value="0">
                                        <label class="form-check-label" for="inactivo">Inactivo</label>
                                    </div>
                                    @error('user.active')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
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
