<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Database\QueryException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::all();
            return view('welcome')->with('users', $users);
        }catch (\Exception $e) {
            return new JsonResponse(['msg' => 'error en la ejecución', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request -> validate([
                'nombre' => 'required|string',
                'cedula' => 'required|string',
                'telefono' => 'required|string',
                'direccion' => 'required|string' 
            ]);

            $user = User::create([
                'nombre' => $request -> nombre,
                'cedula' => $request -> cedula,
                'telefono' => $request -> telefono,
                'direccion' => $request -> direccion
            ]);

            return Redirect('/');
        } catch (\Exception $e) {
            return response()->json(['msg' => 'error en la ejecución'], $e);
        }
    }

    public function registerFunction(){
        return view('register');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = User::find($id);
            return response()->json($user, 200);
        } catch (\Exception $e) {
            return response()->json(['msg' => 'error en la ejecución'], $e);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $user = User::findOrFail($id);

        return view('update', compact('user'));
    }

    public function updateData(Request $request, string $id)
    {
        try {
            User::findOrFail($id)-> update($request->all());
            return Redirect('/');
        } catch (\Exception $e) {
            return response()->json(['msg' => 'error en la ejecución'], $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            User::find($id)-> delete();
            return Redirect('/');
        } catch (\Exception $e) {
            return response()->json(['msg' => 'error en la ejecución'], $e);
        }
    }

    /**
     * Descargar pdf.
     */
    public function pdf($id) {

        $user = User::find($id);
        $pdf = Pdf::loadView('/pdf', compact('user'));

        return $pdf->download('user.pdf');
    }
}
