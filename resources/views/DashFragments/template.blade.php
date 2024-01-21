<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>clienys</title>
</head>
<body>
<div class="container-fluid" style=" padding-top: 8%;">
    <h1 class="h3 mb-2 text-gray-800">Gestion de Nos Templates</h1>
    <p class="mb-4">Consultez  facilement les détails des différents templates proposés, y compris les fonctionnalités, les prix et d'autres informations importantes.</p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-1 font-weight-bold text-center" style="color: #201F25">Templates</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="row">
                    <div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                    <tr role="row">
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >Nom Template</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Prix</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Description</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Action</th>
                    </thead>
                    <tbody>
                    @if($dontemp)
                    @foreach($dontemp as $temp)
                    <tr class="odd">
                        <td class="sorting_1">{{$temp->nom}}</td>
                        <td>{{$temp->prix}}</td>
                        <td>{{$temp->description}}</td>
                        <td style="display: flex; justify-content: space-evenly;">
              <span>
                <form action="{{route('updatetemp')}}" method="get">
                    <input type="hidden" value="{{ $temp->id }}" name="tempid">
                  <button style="background-color: transparent; border: none; color: grey"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill hover-green" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                  </svg></button>
                </form>
              </span>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                    
                    </tbody>
                </table>
                </div>
                </div>

                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>