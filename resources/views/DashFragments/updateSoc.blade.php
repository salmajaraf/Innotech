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
            <h6 class="m-1 font-weight-bold text-center" style="color: #201F25">Modifier un Partenaire</h6>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="{{route('updateFormSoc')}}" method="post">
                <div class="form-group row">
                    <label for="idsoc" class="col-sm-3 col-form-label">Id Partenaire :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="idsoc" id="idsoc" readonly value="{{ $socpro->id }}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nom Partenaire :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" required value="{{ $socpro->nomsoc }}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adresse" class="col-sm-3 col-form-label">Adresse Société :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="adresse" id="adresse" required value="{{ $socpro->adressesoc }}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tel" class="col-sm-3 col-form-label">Tel Société :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tel" id="tel" required value="{{ $socpro->telsoc }}"/>
                    </div>
                </div>
                <div style="position: relative; left: 80%">
                    <button type="submit" class="btn me-2 modifCl"  >Modifier</button>
                    <a class="btn btn-light" href="{{route('dashsociete')}}">Annuler</a>
                </div>
            </form>

        </div>
    </div>

</div>
</body>
</html>