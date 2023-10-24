<div class="collapse" id="showblock{{$logements->id}}">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">Détails </h4>
            <i class="fa fa-close" data-bs-toggle="collapse" data-bs-target="#showblock{{$logements->id}}"></i>
        </div>
        <div class="card-body">
            <form id="addForm" action="{{ route('logement.update',$logements->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="mb-3">
                            <label for="log_file" class="form-label">nom</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                id="log_file" value="{{ $logements->nom }}" name="nom">
                            @error('nom')
                                <span class="text-danger" role="alert">
                                    {{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-4 col-12">
                        <div class="mb-3">
                            <label for="log_file" class="form-label">capacité</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                id="log_file" value="{{ $logements->capacité }}" name="capacité">
                            @error('capacité')
                                <span class="text-danger" role="alert">
                                    {{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="mb-3">
                            <label for="log_file" class="form-label">type</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                id="log_file" value="{{ $logements->type }}" name="type">
                            @error('type')
                                <span class="text-danger" role="alert">
                                    {{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="mb-3">
                            <label for="log_file" class="form-label">lieu</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                id="log_file" value="{{ $logements->lieu }}" name="lieu">
                            @error('lieu')
                                <span class="text-danger" role="alert">
                                    {{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="mb-3">
                            <label for="log_file" class="form-label">photo</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                id="log_file" value="{{ $logements->photo }}" name="photo">
                            @error('photo')
                                <span class="text-danger" role="alert">
                                    {{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="mb-3">
                            <label for="log_file" class="form-label">disponibilite</label>
                            <div class="d-flex ">
                                <div class="col-md-2">
                                    <span>Oui</span>
                                    <input type="radio" name="disponibilite" value="1" id="log_file" @checked($logements->disponibilite == 1)>
                                </div>
                                <div class="col-md-2">
                                    <span>non</span>
                                    <input type="radio" name="disponibilite" value="0" id="log_file" @checked($logements->disponibilite == 0)>
                                </div>
                            </div>
                            @error('nom')
                                <span class="text-danger" role="alert">
                                    {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success btn-label rounded-pill"><i
                                class="ri-save-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                            Mettre à jour</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

