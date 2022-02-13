<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inspector;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class InspectorController extends Controller
{
    private $repository;

    public function __construct(Inspector $inspector)
    {
        $this->repository = $inspector;
    }

    public function index()
    {
        $inspectors = Inspector::paginate(2);

        // $inspectors = $this->repository->all();

        return view('admin.pages.inspectors.index', [
            'inspectors' => $inspectors,
        ]);
    }

    public function create()
    {

        return view('admin.pages.inspectors.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        // $data['url'] = Str::kebab($request->name);
        $this->repository->create($data);

        return redirect()->route('inspectors.index');
    }

    public function show($name)
    {
        $inspector = $this->repository->where('nome', $name)->first();

        if(!$name)

        return redirect()->back();

        return view('admin.pages.inspectors.show',[
            'inspector' => $inspector,
        ]);
    }

    public function deleteInspetor($name)
    {
        $inspector = $this->repository->where('nome', $name)->first();

        if(!$name)
            return redirect()->back();

        $inspector ->delete();

        return redirect()->route('inspectors.index');


    }
}
