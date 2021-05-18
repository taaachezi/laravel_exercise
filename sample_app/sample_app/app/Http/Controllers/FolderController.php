<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Http\Requests\CreateFolder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    public function showCreateForm()
    {
    	return view("folders/create");
    }

    public function create(CreateFolder $request)
    {
    	$folder = new Folder();
    	// リクエストのフォームの値を変数に代入
    	$folder->title = $request->title;

        Auth::user()->folders()->save($folder);
    	
    	return redirect()->route("tasks.index", [
    		"folder" => $folder->id,
    	]);
    }
}
