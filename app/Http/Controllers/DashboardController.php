<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Templates;
use App\Models\Contact;

use Illuminate\Http\Request;
use App\Models\Commande;

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
        return view('dash/dashHome')->with('numberOfClients', $numberOfClients)->with('numberOfOrders', $numberOfOrders)->with('numberOfTemplates', $numberOfTemplates)->with('numberOfComments', $numberOfComments);   
     }

    }

       