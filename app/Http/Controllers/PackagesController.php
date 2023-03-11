<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;
use Exception;

class PackagesController extends Controller
{


    public function index()
    {
        $packages = Package::with('category')->paginate(25);

        return view('packages.index', compact('packages'));
    }


    public function create()
    {
        $categories = Category::pluck('name','id')->all();

        return view('packages.create', compact('categories'));
    }


    public function store(Request $request)
    {

            
            $data = $this->getData($request);
            
            Package::create($data);

            return redirect()->route('packages.package.index')
                ->with('success_message', 'Package was successfully added.');

    }


    public function show($id)
    {
        $package = Package::with('category')->findOrFail($id);

        return view('packages.show', compact('package'));
    }


    public function edit($id)
    {
        $package = Package::findOrFail($id);
        $categories = Category::pluck('name','id')->all();

        return view('packages.edit', compact('package','categories'));
    }


    public function update($id, Request $request)
    {

            
            $data = $this->getData($request);
            
            $package = Package::findOrFail($id);
            $package->update($data);

            return redirect()->route('packages.package.index')
                ->with('success_message', 'Package was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $package = Package::findOrFail($id);
            $package->delete();

            return redirect()->route('packages.package.index')
                ->with('success_message', 'Package was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'title' => 'required|nullable|string|min:1|max:255',
            'image' => ['nullable','file'],
            'discription' => 'required|nullable|string|min:1',
            'notes' => 'string|min:1|max:1000|nullable',
            'price' => 'required|nullable|string|min:1',
            'time' => 'required|nullable|string|min:1',
            'category_id' => 'nullable', 
        ];

                if ($request->route()->getAction()['as'] == 'packages.package.store' || $request->has('custom_delete_image')) {
            array_push($rules['image'], 'required');
        }
        $data = $request->validate($rules);

        if ($request->has('custom_delete_image')) {
            $data['image'] = null;
        }
        if ($request->hasFile('image')) {
            $data['image'] = $this->moveFile($request->file('image'));
        }



        return $data;
    }
  
    /**
     * Moves the attached file to the server.
     *
     * @param Symfony\Component\HttpFoundation\File\UploadedFile $file
     *
     * @return string
     */
    protected function moveFile($file)
    {
        if (!$file->isValid()) {
            return '';
        }
        $path = config('codegenerator.files_upload_path', 'uploads');

        $saved = $file->store('public/' . $path, config('filesystems.default'));

        return substr($saved, 7);
    }
}
