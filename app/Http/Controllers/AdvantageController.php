<?php

namespace App\Http\Controllers;

use App\Models\AdvantageModel;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    public function index()
    {
        $rentcars = AdvantageModel::orderBy('a_id', 'desc')->get();
        $data = [
            'title'  => 'Menu Harga Sewa Mobil Premium - Kenz Tranz',
            'rentcars' => $rentcars
        ];
        return view('admin.VMenuSewaMobil', $data);
    }

    public function store(Request $request)
    {
        $request->validate([ 
            'a_title'   => 'required',
            'a_desc'    => 'required',
        ]);

        AdvantageModel::create([
            'a_title' => $request->a_title,
            'a_desc'    => $request->a_desc,
        ]);

        return redirect()
            ->route('home.index')
            ->with('success', 'Data advantage berhasil ditambahkan');
    }

    public function show($id)
    {
        return AdvantageModel::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $rentcar = AdvantageModel::findOrFail($id);

        $rentcar->update([
            'a_title' => $request->a_title,
            'a_desc'    => $request->a_desc,
        ]);

        return redirect()
            ->route('home.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $rentcar = AdvantageModel::findOrFail($id);
        $rentcar->delete();

        return redirect()
            ->route('home.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
