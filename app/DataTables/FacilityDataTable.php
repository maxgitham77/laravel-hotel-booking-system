<?php

namespace App\DataTables;

use App\Models\Admin\Room\Facility\Facility;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FacilityDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $edit = '<a href="'.route('facilities.edit', $query->id).'" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                $delete = '<a href="'.route('facilities.destroy', $query->id).'" class="btn btn-danger btn-sm ml-2 delete-item"><i class="fas fa-trash"></i> Delete</a>';
                return $edit.$delete;
            })
            ->addColumn('icon', function ($query) {
                return '<i class="'.$query->icon.'" style="font-size: 50px;"></i>';
            })
            ->addColumn('status', function ($query) {
                if ($query->status === 1) {
                    return '<span class="badge bg-primary">Active</span>';
                } else {
                    return '<span class="badge bg-danger">Inactive</span>';
                }
            })
            ->rawColumns(['action', 'icon', 'status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Facility $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('facility-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('icon'),
            Column::make('name'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(200)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Facility_' . date('YmdHis');
    }
}
