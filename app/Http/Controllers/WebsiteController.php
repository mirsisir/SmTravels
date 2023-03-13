<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {

        return view('website.home');
    }

    public function contact_us()
    {

        return view('website.contact');
    }

    public function package($id)
    {
        $packages = Package::where('category_id',$id)->get();
        $category = Category::find($id);

        return view('website.package',compact('packages','category'));
    }

        public function package_details($id)
    {
        $packages = Package::find($id);

        return view('website.package',compact('package'));
    }
}
