<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AnunciaController extends Controller
{
    //
    public function index()
    {
        $inmuebles = Products::select('products.*', 'departments.description as department_description', 'provinces.description as province_description', 'districts.description as district_description')
            ->join('departments', 'products.departamento_id', '=', 'departments.id')
            ->join('provinces', 'products.provincia_id', '=', 'provinces.id')
            ->join('districts', 'products.distrito_id', '=', 'districts.id')
            ->where('products.vendedor_ext', '=', 1)
            ->with('tags')
            ->orderBy('products.created_at', 'desc')

            ->get();

        return view('pages.anunciante.index', compact('inmuebles'));
    }

    public function updateVisible(Request $request)
    {
        $id = $request->id;
        $field = $request->field;
        $status = $request->status;
        try {
            $product = Products::find($id);

            if (!$product) {
                return response()->json(['message' => 'Producto no encontrado'], 404);
            }

            // Actualizar el campo dinámicamente
            $product->update([
                $field => $status
            ]);
            return response()->json(['message' => 'registro actualizado']);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['message' => 'NO actualizado']);
        }

        // Verificar si el producto existe

    }
}
