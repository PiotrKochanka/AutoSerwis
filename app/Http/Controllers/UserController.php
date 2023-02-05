<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cms.users', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        $data = User::all();

        return view('cms.users-add', [
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['int'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $data = new User();

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        $data->password = Hash::make($request->password);

        $data->save();

        return redirect("/home/uzytkownicy")->with('status','Udało się dodać element');
    }

    public function showData($id)
    {
        $data = User::find($id);
        return view('cms.edytuj_uzytkownika', ['data'=>$data]);
    }

    public function update(Request $request)
    {
        $data=User::find($request->id);
        $data->name=$request->name;
        $data->surname=$request->surname;
        $data->email=$request->email;
        $data->save();
        return redirect()->back()->with('status','Dane zostały zmienione pomyślnie');
    }
}