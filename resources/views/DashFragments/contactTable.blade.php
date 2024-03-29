<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
</head>
<body>
<div class="container-fluid" style=" padding-top: 8%;">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 " style="color: #011017">Administration de boite des Contacts</h1>
    <p class="mb-4" style="color: #011017">La table "Contacts" regroupe les messages qui ont été reçus par nos visiteurs, comprenant des détails tels que les noms, adresses e-mail, et d'autres données pertinentes, facilitant le contact avec les visiteurs du site.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-1 font-weight-bold text-center" style="color: #201F25">Contacts</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                    <tr role="row">
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="color: #011017">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="color: #011017">Nom</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="color: #011017">Prenom</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="color: #011017">Message</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="color: #011017">Actions</th>
                    </thead>
                    <tbody>
                    @if($donCont)
                    @foreach($donCont as $contact)
                    <tr class="odd">
                        <td class="sorting_1">{{ $contact->email}}</td>
                        <td>{{ $contact->nom}}</td>
                        <td>{{ $contact->prenom }}</td>
                        <td>{{ $contact->message }}</td>
                        <td style="display: flex; justify-content: space-evenly;">
              
             <span>
                <form action="{{route('suppContact')}}" method="post">
                    <input type="hidden" value="{{ $contact->email }}" name="avisparam">
                <button style="background-color: transparent; border: none; color: #201F25"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill hover-red" viewBox="0 0 16 16">
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