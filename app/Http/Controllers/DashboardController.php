<?php

namespace App\Http\Controllers;

use App\Models\User;
<<<<<<< HEAD
use App\Models\Templates;
use App\Models\Contact;

use Illuminate\Http\Request;
use App\Models\Commande;
=======
use App\Models\Commande;
use App\Models\Templates;
use App\Models\Contact;


use Illuminate\Http\Request;
>>>>>>> 08565323635274750873e4f50298b98388cf4b85

class DashboardController extends Controller
{
    public function showDashboard()
    {
        // Retrieve the number of clients
        $numberOfClients = User::count();

        // Retrieve the number of orders
        $numberOfOrders = Commande::count();
        $numberOfTemplates =Templates::count();
        $numberOfComments =Contact::count();

        // Pass the data to the view
<<<<<<< HEAD
        return view('dash/dashHome')->with('numberOfClients', $numberOfClients)->with('numberOfOrders', $numberOfOrders)->with('numberOfTemplates', $numberOfTemplates)->with('numberOfComments', $numberOfComments);   
     }

    }

       
=======
        return view('dash/dashHome')->with('numberOfClients', $numberOfClients)->with('numberOfOrders', $numberOfOrders)->with('numberOfTemplates', $numberOfTemplates)->with('numberOfComments', $numberOfComments);
    }
}
>>>>>>> 08565323635274750873e4f50298b98388cf4b85
