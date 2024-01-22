<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <title>clienys</title>
</head>
<body>
<div class="container-fluid" style=" padding-top: 8%;" th:fragment="clienys">
    <!-- Page Heading -->
    <p class="mb-1" style="visibility: hidden">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-1 font-weight-bold text-center" style="color: #201F25">Modifier Votre Profil</h6>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="{{route('updateFormAdmin')}}" method="post">
                <div class="form-group row">
                    <label for="idadmin" class="col-sm-3 col-form-label">Votre Id :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="idadmin" id="idadmin" readonly value="{{ $adminpro->id }}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Votre Nom :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" required value="{{ $adminpro->name }}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Votre Email :</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="email" readonly value="{{ $adminpro->email }}"/>
                    </div>
                </div>
                <div style="position: relative; left: 80%">
                    <button type="submit" class="btn me-2 modifCl"  >Modifier</button>
                    <a class="btn btn-light" href="{{route('dash/dashboard')}}">Annuler</a>
                </div>
            </form>

        </div>
    </div>

</div>
</body>
</html>