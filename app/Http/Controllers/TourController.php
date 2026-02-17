<?php

namespace App\Http\Controllers;

use App\Models\TourModel;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = TourModel::orderBy('t_id', 'desc')->get();
        $data = [
            'title'  => 'Paket Wisata - Kenz Tranz',
            'tours' => $tours
        ];
        return view('admin.VMenuPaketWisata', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            't_title'       => 'required',
            't_destination' => 'required',
            't_price'       => 'required|numeric',
            't_desc'        => 'required',
            't_img'         => 'required|image|max:2048'
        ]);

        $imgPath = $request->file('t_img')->store('tour', 'public');

        TourModel::create([
            't_title'       => $request->t_title,
            't_destination' => $request->t_destination,
            't_price'       => $request->t_price,
            't_desc'        => $request->t_desc,
            't_img'         => $imgPath,
        ]);

        return redirect()
            ->route('tour.index')
            ->with('success', 'Data paket wisata berhasil ditambahkan');
    }

    public function show($id)
    {
        return TourModel::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $tour = TourModel::findOrFail($id);

        if ($request->hasFile('t_img')) {
            $tour->t_img = $request->file('t_img')->store('tour', 'public');
        }

        $tour->update([
            't_title'       => $request->t_title,
            't_destination' => $request->t_destination,
            't_price'       => $request->t_price,
            't_desc'        => $request->t_desc
        ]);

        return redirect()
            ->route('tour.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $tour = TourModel::findOrFail($id);
        $tour->delete();

        return redirect()
            ->route('tour.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
