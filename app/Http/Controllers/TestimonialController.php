<?php

namespace App\Http\Controllers;

use App\Models\TestimonialModel;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = TestimonialModel::orderBy('te_id', 'desc')->get();
        $data = [
            'title'  => 'Menu Testimoni - Kenz Tranz',
            'testimonials' => $testimonials
        ];
        return view('admin.VMenuTestimoni', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'te_img' => 'required|image|max:2048'
        ]);

        $imgPath = $request->file('te_img')->store('testimonial', 'public');

        TestimonialModel::create([
            'te_img' => $imgPath,
        ]);

        return redirect()
            ->route('testimonial.index')
            ->with('success', 'Data testimoni berhasil ditambahkan');
    }

    public function show($id)
    {
        return TestimonialModel::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $testimonial = TestimonialModel::findOrFail($id);

        if ($request->hasFile('te_img')) {
            $testimonial->te_img = $request->file('te_img')->store('testimonial', 'public');
            $testimonial->update();
        }

        return redirect()
            ->route('testimonial.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $testimonial = TestimonialModel::findOrFail($id);
        $testimonial->delete();

        return redirect()
            ->route('testimonial.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
