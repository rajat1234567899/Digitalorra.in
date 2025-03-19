<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoSetting;

class SeoSettingController extends Controller
{
    public function index()
    {
        $seoSettings = SeoSetting::all();
        return view('admin.seo.index', compact('seoSettings'));
    }

    public function create()
    {
        return view('admin.seo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'page' => 'required|unique:seo_settings,page',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
        ]);

        SeoSetting::create($request->all());

        return redirect()->route('admin.seo.index')->with('success', 'SEO settings added successfully.');
    }

    public function edit($id)
    {
        $seo = SeoSetting::findOrFail($id);
        return view('admin.seo.edit', compact('seo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
        ]);

        $seo = SeoSetting::findOrFail($id);
        $seo->update($request->all());

        return redirect()->route('admin.seo.index')->with('success', 'SEO settings updated successfully.');
    }

    public function destroy($id)
    {
        SeoSetting::findOrFail($id)->delete();
        return redirect()->route('admin.seo.index')->with('success', 'SEO settings deleted successfully.');
    }
}
