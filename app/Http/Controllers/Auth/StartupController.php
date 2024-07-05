<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\UidHelper;

use App\Models\Startup;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class StartupController extends Controller
{
    public function login_page(){
        return UidHelper::login();
    }

    public function authenticate()
    {
        $datas =UidHelper::callback();
         
        $startupdata=UidHelper::getUidDetails($datas["unique_id"]);

        $directors=($startupdata["directors"]);

        $director=($directors[0]);


        $products=($startupdata["products"]);

        $product=($products[0]);

        $product_name=$product["name"];
        $product_pitch=$product["pitch"];
        $product_brief=$product["brief"];

        $startup = Startup::query()->where('unique_id', $startupdata["unique_id"])->first();
        
        if($startup){

            $user=($startup->user);
            Auth::login($user, $remember = true);

            return redirect()->route('login');
        }

        else{
            
            $super = Role::firstOrCreate(
                ["name" => "user"]
            );

            $user=new User();
            $user->name=$startupdata["name"];
            $user->email=$startupdata["login_email"];
            $user->password="nopass";
            $user->save();

            $user->assignRole($super);
           
            $latestUser = User::latest('id')->first();

            $startup = new Startup();
            $startup->name = $startupdata["name"];
            $startup->founder_name=$director["name"];
            $startup->email=$startupdata["login_email"];
            $startup->website=$startupdata["website"];
            $startup->contact_num=$startupdata["phone"];
            $startup->location=$startupdata["registered_district"];
            $startup->unique_id=$startupdata["unique_id"];
            $startup->founding_year=$startupdata["incorp_date"];
            $startup->product_details=$product_brief;
            $startup->product_usecase=$product_pitch;
            $startup->product_name=$product_name;
            $startup->user_id=$latestUser->id;
            $startup->save();

            Auth::login($user, $remember = true);

            return redirect()->route('user.dashboard');

        }

    }

  
}
