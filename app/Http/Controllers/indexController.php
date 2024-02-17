<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use App\Services\AdminServiceInterface;
use App\Services\MenuServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    private MenuServiceInterface $menuService;

    public function __construct(MenuServiceInterface $menuService, AdminServiceInterface $adminService)
    {
      $this->menuService = $menuService;
      $this->adminService = $adminService;
    }
      public function main()
    {
       $technologies = Technology::query()->with(['technologies'])->get();

       $projects = Project::with('technologies')->get();

       return view('main', [
       'menu' => $this->menuService->getMenu(),
       'projects' => $projects,
      ]);
    }

    public function form()
    {
        return view('layout.form');
    }

    public function addProjects(Request $request)
    {
        $image = $request->file('image');

        $filePath = "/images/projects";

        $fileName = sprintf("%s_%s", time(), $image->getClientOriginalName());

        Storage::disk('public')->put($filePath, $image);

        $fileUrl = Storage::disk('public')->url($filePath); //url

        $project = Project::query()->create([
        'name' => $request->input('name'),
        'image_url' => $fileUrl
        ]);

       return response()->json($project);
    }
       public function admin()
       {
            $technologies = Technology::query()->with(['technologies'])->get();

              $projects = Project::with('technologies')->get();

                return view('layout.form', [
                 'admin' => $this->adminService->getAdmin(),
                    'projects' => $projects,
          ]);
         }
}