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

    function index()
    {
        $inspectors = Inspector::paginate(1);

        // $inspectors = $this->repository->all();

        return view('admin.pages.inspectors.index', [
            'inspectors' => $inspectors,
        ]);
    }
}
