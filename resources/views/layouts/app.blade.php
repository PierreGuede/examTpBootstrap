@include('layouts.partials.main')
@php
    // $title = $title ?? 'Titre';
    // $pagetitle = $pagetitle ?? 'Accueil';
@endphp

<head>
    @include('layouts.partials.title-meta', ['title' => $title])
    <!-- Sweet Alert css-->
    {{-- <link href="{{asset("assets/libs/sweetalert2/sweetalert2.min.css")}}" rel="stylesheet" type="text/css" /> --}}
    @include('layouts.partials.head-css')
    <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.partials.menu')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    @include('layouts.partials.page-title', [
                        'pagetitle' => $pagetitle,
                        'title' => $title,
                    ])

                    <div class="row">
                        <div class="col-lg-12">
                            @include('layouts.partials.alert')
                        </div>
                    </div>

                    @yield('content')

                    @include('layouts.partials.footer')
                </div>
                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->


            @include('layouts.partials.vendor-scripts')

            <script>

                $(document).on('click', '#logbtn', function() {

                    $('#logtext').val($(this).attr('data-log'));

                });

                $(document).on('click', '#updateLigneButton', function() {

                 console.log($("#editLigneForm").attr('action'));

                });
                $(document).on('click', '#updateLigne', function() {

                  console.log($(this).attr('data-comment'));
                    $('#addLigne').hide();
                    $('#editLigne').show();
                    $('#refarticleEdited').val($(this).attr('data-refarticle'));
                    $('#designationEdited').val($(this).attr('data-designation'));
                    $('#qtecolliseeEdited').val($(this).attr('data-qtecollisee'));
                    $('#prixruEdited').val($(this).attr('data-prixru'));
                    $('#docLigneId').val($(this).attr('data-docligneId'));
                    $('#commentEdited').val($(this).attr('data-comment'));


                    var montantFixeText = $(this).attr('data-prixru');
                    var montantFixe = parseFloat(montantFixeText.replace(/\s/g, "").replace(",", "."));



                    $("#resultatEdited").text(montantFixe.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
                });

                 $(document).on('click', '#loadDatasEdit', function() {


                    $('#refarticleEdited').val($(this).attr('data-refarticle'));
                    $('#designationEdited').val($(this).attr('data-designation'));
                    $('#prixruEdited').val($(this).attr('data-prixru'));
                    $('#qtecolliseeEdited').val(1);
                    $('#myModalDatasEdit').modal('hide');


                    var montantFixeText = $(this).attr('data-prixru');
                    var montantFixe = parseFloat(montantFixeText.replace(/\s/g, "").replace(",", "."));


                    $("#resultatEdited").text(montantFixe.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
                });

                 $(document).on('click', '#loadDatas', function() {


                    $('#refarticle').val($(this).attr('data-refarticle'));
                    $('#designation').val($(this).attr('data-designation'));
                    $('#prixru').val($(this).attr('data-prixru'));
                    $('#qtecollisee').val(1);
                    $('#myModalDatas').modal('hide');


                    var montantFixeText = $(this).attr('data-prixru');
                    var montantFixe = parseFloat(montantFixeText.replace(/\s/g, "").replace(",", "."));


                    $("#resultat").text(montantFixe.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
                });



                document.addEventListener("DOMContentLoaded", function () {

                var qtecollisee = document.getElementById("qtecollisee");
                var qtecolliseeEdited = document.getElementById("qtecolliseeEdited");


                qtecollisee.addEventListener("input", function () {
                    // Remplacez les virgules par des points
                    this.value = this.value.replace(/,/g, ".");

                    // Supprimez tout caractère qui n'est pas un chiffre ou un point
                    this.value = this.value.replace(/[^0-9.]/g, "");
                });

                qtecolliseeEdited.addEventListener("input", function () {
                    // Remplacez les virgules par des points
                    this.value = this.value.replace(/,/g, ".");

                    // Supprimez tout caractère qui n'est pas un chiffre ou un point
                    this.value = this.value.replace(/[^0-9.]/g, "");
                });
            });

                $("#qtecollisee").on("input", function () {

                    var valeurQuantite = parseFloat($(this).val());

                    var montantFixeText = $("#prixru").val();
                    var montantFixe = parseFloat(montantFixeText.replace(/\s/g, "").replace(",", "."));


                    if (!isNaN(valeurQuantite) || !isNaN(montantFixe)) {


                        console.log(valeurQuantite);
                        console.log(montantFixe);

                        var resultat = valeurQuantite * montantFixe;
                        if (isNaN(valeurQuantite)) {
                            $("#resultat").text(0);
                        }else{

                            $("#resultat").text(resultat.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
                        }

                    } else {

                        $("#resultat").text(0);
                    }
               });

                $("#qtecolliseeEdited").on("input", function () {

                    var valeurQuantite = parseFloat($(this).val());

                    var montantFixeText = $("#prixruEdited").val();
                    var montantFixe = parseFloat(montantFixeText.replace(/\s/g, "").replace(",", "."));


                    if (!isNaN(valeurQuantite) || !isNaN(montantFixe)) {


                        var resultat = valeurQuantite * montantFixe;
                        console.log(resultat);
                        if (isNaN(valeurQuantite)) {

                            $("#resultatEdited").text(0);
                        }else{
                            console.log(resultat);
                            $("#resultatEdited").text(resultat.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
                        }

                    } else {

                        $("#resultatEdited").text(0);
                    }
               });


                $(document).on('click', '#addbtn', function() {
                    document.getElementsByClassName('addblock')[0].style.display = 'block';
                    document.getElementsByClassName('editblock')[0].style.display = 'none';
                });
                $(document).on('click', '#viewbtn', function() {

                    document.getElementsByClassName('loaderblock')[0].style.display = 'block';
                });
                $(document).on('click', '#closebtn', function() {

                    document.getElementsByClassName('addblock')[0].style.display = 'none';
                    document.getElementsByClassName('editblock')[0].style.display = 'none';
                });

                $(document).on('click', '#cancelbtn', function() {
                    document.getElementsByClassName('addblock')[0].style.display = 'none';
                    document.getElementsByClassName('editblock')[0].style.display = 'none';
                });

                $(document).on('click', '#editbtn', function() {

                    document.getElementsByClassName('addblock')[0].style.display = 'none';
                    document.getElementsByClassName('editblock')[0].style.display = 'block';


                    $('#updname').val($(this).attr('data-name'));
                    $('#updemail').val($(this).attr('data-email'));
                    document.forms.editForm.action = $(this).attr('data-updurl');
                });
                $(document).on('click', '#deletebtn', function() {
                    document.forms.deleteForm.action = $(this).attr('data-deleteurl');
                });
            </script>
            @include('script')
            <!-- Styles -->
            {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" /> --}}
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
            <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
            <!-- Or for RTL support -->
            {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" /> --}}

            <!-- Scripts -->
            {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script> --}}
            {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> --}}
            <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
            <script>
                $(".form-select-search").select2({
                    theme: "bootstrap-5",
                    containerCssClass: "select2--small",
                    dropdownCssClass: "select2--small",
                });
            </script>
            <style>
                .bg-gray {
                    background: rgba(0, 0, 0, 0.05)
                }

                .form-showing {
                    background: rgba(0, 0, 0, 0.05)
                }

                .hide {
                    display: none;
                }
            </style>

</body>

</html>
