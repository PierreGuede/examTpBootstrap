@extends('layouts.app', ['title' => 'Liste des logements ', 'pagetitle' => 'Logement'])
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="card addblock" style="display: none">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Formulaire Ajout d'un logement</h4>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light rounded-pill"
                        id="closebtn"><i class="ri-close-line"></i></button>
                </div>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="live-preview">
                    <form id="addForm" action="{{ route('logement.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="log_file" class="form-label">nom</label>
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror"
                                        id="log_file" name="nom">
                                    @error('nom')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="log_file" class="form-label">capacité</label>
                                    <input type="text" class="form-control @error('capacité') is-invalid @enderror"
                                        id="log_file" name="capacité">
                                    @error('capacité')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="log_file" class="form-label">type</label>
                                    <input type="text" class="form-control @error('type') is-invalid @enderror"
                                        id="log_file" name="type">
                                    @error('type')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="log_file" class="form-label">lieu</label>
                                    <input type="text" class="form-control @error('lieu') is-invalid @enderror"
                                        id="log_file" name="lieu">
                                    @error('lieu')
                                        <span class="text-danger" role="alert">
                                            {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="mb-3">
                                    <label for="log_file" class="form-label">photo</label>
                                    <input type="text" class="form-control @error('photo') is-invalid @enderror"
                                        id="log_file" name="photo">
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
                                            <input type="radio" name="disponibilite" value="1" id="log_file">
                                        </div>
                                        <div class="col-md-2">
                                            <span>non</span>
                                            <input type="radio" name="disponibilite" value="0" id="log_file">
                                        </div>
                                    </div>
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
                    </form>
                </div>

            </div>
        </div>
        @foreach ($logement as $logements)

            @include('logement.show')
        @endforeach
    </div>

    <!--end col-->
</div>

    <div class="row">

        <div class="col-lg-12">

            <div class="card" id="userList">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title flex-grow-1 mb-0">Logements</h5>

                    <div class="d-flex gap-1 flex-wrap">
                        <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i
                                class="ri-delete-bin-2-line"></i></button>
                        <button type="button" class="btn btn-success btn-label rounded-pill" id="addbtn"><i
                                class="ri-add-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                            Ajouter un logement</button>
                    </div>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                     @endif
                    <table id="example" class="table dt-responsive nowrap align-middle" style="width:100%">
                        <thead class="thead">
                            <tr>
                                 <th>N°</th>
                                <th>nom</th>
                                <th>capacité</th>
                                <th>type</th>
                                <th>lieu</th>
                                <th>photo</th>
                                <th>disponibilite</th>

                                <th style="text-align:center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                                @foreach ($logement as $logement)
                                <tr>
                                    <td>{{ $logement->id }}</td>
                                    <td>{{ $logement->nom }}</td>
                                    <td>{{ $logement->capacité }}</td>
                                    <td>{{ $logement->type }}</td>
                                    <td>{{ $logement->lieu }}</td>
                                    <td>{{ $logement->photo }}</td>
                                    <td>
                                        @if ($logement->disponibilite == 1)
                                            <span class="badge badge-soft-success">Disponible</span>
                                        @else
                                        <span class="badge badge-soft-danger">Non disponible</span>

                                        @endif
                                    </td>
                                        <td style="text-align:center " class="d-flex justify-content-center ">

                                            <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="true">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item " {{-- href="{{ route('users.edit', $user->id) }}" --}}
                                                            data-bs-target="#showblock{{ $logement->id }}"
                                                            data-bs-toggle="collapse"><i class="fa fa-fw fa-edit"></i>
                                                            Modifier
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <form action="{{ route('logement.destroy', $logement->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="dropdown-item show_confirm"><i
                                                                    class="fa fa-fw fa-trash"></i> Supprimer </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                </tr>

                                @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- end card body -->

            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>


@endsection
