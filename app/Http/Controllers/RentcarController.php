<?php

namespace App\Http\Controllers;

use App\Models\RentcarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RentcarController extends Controller
{
    public function index()
    {
        $rentcars = RentcarModel::orderBy('r_id', 'desc')->get();
        $data = [
            'title'  => 'Menu Harga Sewa Mobil Premium - Kenz Tranz',
            'rentcars' => $rentcars
        ];
        return view('admin.VMenuSewaMobil', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'r_car_name' => 'required',
            'r_price'    => 'required|numeric',
            'r_desc'     => 'nullable',
            'r_img'      => 'required|image|max:2048'
        ]);

        $imgPath = $request->file('r_img')->store('rentcar', 'public');

        return redirect()
            ->route('rentcar.index')
            ->with('success', 'Data harga sewa mobil berhasil ditambahkan');
    }

    public function show($id)
    {
        return RentcarModel::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $rentcar = RentcarModel::findOrFail($id);

        if ($request->hasFile('r_img')) {
            $rentcar->r_img = $request->file('r_img')->store('rentcar', 'public');
        }

        $rentcar->update([
            'r_car_name' => $request->r_car_name,
            'r_price'    => $request->r_price,
            'r_desc'     => $request->r_desc,
        ]);

        return redirect()
            ->route('rentcar.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $rentcar = RentcarModel::findOrFail($id);
        $rentcar->delete();

        return redirect()
            ->route('rentcar.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
