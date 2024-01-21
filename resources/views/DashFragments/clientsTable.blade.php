<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>clienys</title>
</head>
<body>
<div class="container-fluid" style=" padding-top: 8%;">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Informations sur Nos Clients</h1>
    <p class="mb-4">La table "Clients" regroupe les informations individuelles des clients, comprenant des détails tels que les noms, adresses e-mail, et d'autres données pertinentes, facilitant la gestion et l'interaction avec les utilisateurs du site.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-1 font-weight-bold text-center" style="color: #201F25">Clients</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                    <tr role="row">
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >Id</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >Nom</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" > Email</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Nombre de Commande</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Actions</th>
                    </thead>
                    <tbody>
                    @if($donclients)
                    @foreach($donclients as $client)
                    <tr class="odd">
                        <td class="sorting_1">{{ $client->id }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->nombre_commandes }}</td>
                        <td style="display: flex; justify-content: space-evenly;">
              <span>
                <form action="{{route('updateclient')}}" method="get">
                    <input type="hidden" value="{{ $client->id }}" name="userparam">
                  <button style="background-color: transparent; border: none; color: grey"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill hover-green" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                  </svg></button>
                </form>
              </span>
                            <span>
                <form action="{{route('suppUser')}}" method="post">
                    <input type="hidden" value="{{ $client->id }}" name="usernameparam">
                <button style="background-color: transparent; border: none; color: grey"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill hover-red" viewBox="0 0 16 16">
                  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
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