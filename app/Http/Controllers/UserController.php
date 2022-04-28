<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('Usuarios.index', compact('users'));
    }

    public function store(Request $request)
    {
        $user = new User();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'level' => 'required|string',
            'email' => 'required|string',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
            $user->name = $request->name;
            $user->level = $request->level;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->back()
                ->with('success', 'Usuario agregado correctamente');
        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la alta del usuario ');
        }
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'level' => 'required|string',
            'email' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
            $user->name = $request->name;
            $user->level = $request->level;
            $user->email = $request->email;
            $user->update();

            return redirect()->back()
                ->with('success', 'Usuario editado correctamente');
        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la edicion del usuario ');
        }
    }

    public function delete( $id)
    {
        $user = User::find($id);

        try {
          
            $user->delete();

            return redirect()->back()
                ->with('eliminar', 'ok');
        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error al eliminar el usuario ');
        }
    }
}
