<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>clienys</title>

    <style>
        input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type="number"] {
    -moz-appearance: textfield;
    appearance: textfield;
}
    </style>
</head>
<body>
<div class="container-fluid" style=" padding-top: 8%;">
    <!-- Page Heading -->
    <p class="mb-1" style="visibility: hidden">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-1 font-weight-bold text-center" style="color: #201F25">Modifier une Template</h6>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="{{route('updateTemplate')}}" method="post">
                <div class="form-group row">
                    <label for="nomtemp" class="col-sm-3 col-form-label">Nom Template :</label>
                    <div class="col-sm-9">
                        <input type="hidden" name="idtemp" value="{{$tempinfo->id}}" />
                        <input type="text" class="form-control" name="nomtemp" id="nomtemp" required value="{{$tempinfo->nom}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prixtemp" class="col-sm-3 col-form-label">Prix :</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="prixtemp" id="prixtemp" required value="{{$tempinfo->prix}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-sm-3 col-form-label">Description :</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="description" class="form-control"  id="description">{{$tempinfo->description}}</textarea>
                    </div>
                </div>
                <div style="position: relative; left: 80%">
                    <button type="submit" class="btn me-2 modifCl"  >Modifier</button>
                    <a class="btn btn-light" href="/dashtemplates">Annuler</a>
                </div>
            </form>

        </div>
    </div>

</div>
</body>
</html>