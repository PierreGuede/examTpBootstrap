
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="mb-3">
                        <label for="log_file" class="form-label">Champs 1</label>
                        <input type="text" class="form-control @error('nom') is-invalid @enderror"
                            id="log_file" {{-- value="{{ $logement->nom )}}" --}} name="nom">
                        @error('nom')
                            <span class="text-danger" role="alert">
                                {{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-4 col-12">
                    <div class="mb-3">
                        <label for="log_file" class="form-label">Champs 1</label>
                        <input type="text" class="form-control @error('capacité') is-invalid @enderror"
                            id="log_file" {{-- value="{{ $logement->capacité )}}" --}} name="capacité">
                        @error('capacité')
                            <span class="text-danger" role="alert">
                                {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="mb-3">
                        <label for="log_file" class="form-label">Champs 1</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror"
                            id="log_file" {{-- value="{{ $logement->type )}}" --}} name="type">
                        @error('type')
                            <span class="text-danger" role="alert">
                                {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="mb-3">
                        <label for="log_file" class="form-label">Champs 1</label>
                        <input type="text" class="form-control @error('lieu') is-invalid @enderror"
                            id="log_file" {{-- value="{{ $logement->lieu )}}" --}} name="lieu">
                        @error('lieu')
                            <span class="text-danger" role="alert">
                                {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="mb-3">
                        <label for="log_file" class="form-label">Champs 1</label>
                        <input type="text" class="form-control @error('photo') is-invalid @enderror"
                            id="log_file" {{-- value="{{ $logement->photo )}}" --}} name="photo">
                        @error('photo')
                            <span class="text-danger" role="alert">
                                {{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="mb-3">
                        <label for="log_file" class="form-label">Champs 1</label>
                        <input type="text" class="form-control @error('disponibilite') is-invalid @enderror"
                            id="log_file" {{-- value="{{ $logement->disponibilite )}}" --}} name="disponibilite">
                        @error('disponibilite')
                            <span class="text-danger" role="alert">
                                {{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!--end col-->




                <!--end col-->
                <div class="text-end">
                    <button type="submit" class="btn btn-success btn-label rounded-pill"><i
                            class="ri-save-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                        Enregistrer</button>
                </div>
                <!--end col-->

            </div>
            <!--end row-->


            {{--
                @include('logement.form')
                --}}
