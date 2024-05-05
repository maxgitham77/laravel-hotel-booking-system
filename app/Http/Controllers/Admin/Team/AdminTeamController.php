<?php

namespace App\Http\Controllers\Admin\Team;

use App\DataTables\TeamsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Yajra\DataTables\render;

class AdminTeamController extends Controller
{
    public function index(TeamsDataTable $dataTable)
    {
         return $dataTable->render('backend.admin.team.index');
    }
}
