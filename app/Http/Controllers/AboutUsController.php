<?php

namespace App\Http\Controllers;

use App\Models\AboutUsModel;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $abouts = AboutUsModel::orderBy('ab_id', 'desc')->get();
        $data = [
        	'title'  => 'Menu Tentang Kami - Kenz Tranz',
            'abouts' => $abouts
        ];
        return view('admin.VMenuTentangKami', $data);
    }

    public function update(Request $request, $id)
    {
        $about = AboutUsModel::findOrFail($id);

        if ($request->hasFile('ab_rentcar_img')) {
            $about->ab_rentcar_img = $request->file('ab_rentcar_img')->store('about/rentcar', 'public');
        }

        if ($request->hasFile('ab_tour_img')) {
            $about->ab_tour_img = $request->file('ab_tour_img')->store('about/tour', 'public');
        }

        $about->update([
            'ab_kenztrans' => $request->ab_kenztrans,
            'ab_rentcar'    => $request->ab_rentcar,
            'ab_tour'    => $request->ab_tour,
        ]);

        return redirect()
            ->route('about.index')
            ->with('success', 'Data berhasil diupdate');
    }
}
