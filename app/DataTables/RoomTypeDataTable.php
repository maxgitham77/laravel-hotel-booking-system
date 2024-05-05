<?php

namespace App\DataTables;

use App\Models\Admin\Room\RoomType;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RoomTypeDataTable extends DataTable
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
                $edit = '<a href="'.route('roomtypes.edit', $query->id).'" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                $delete = '<a href="'.route('roomtypes.destroy', $query->id).'" class="btn btn-danger btn-sm ml-2 delete-item">Delete</a>';
                return $edit.$delete;
            })
            ->addColumn('image', function ($query) {
                return '<img src="'.$query->image.'" class="" style="width: 100px" />';
            })
            ->addColumn('status', function ($query) {
                if ($query->status === 1) {
                    return '<span class="badge bg-primary">Active</span>';
                } else {
                    return '<span class="badge bg-danger">Inactive</span>';
                }
            })
            ->addColumn('show_in_home_page', function ($query) {
                if ($query->show_in_home_page === 1) {
                    return '<span class="badge bg-primary">Yes</span>';
                } else {
                    return '<span class="badge bg-danger">No</span>';
                }
            })
            ->rawColumns(['action', 'image', 'status', 'show_in_home_page'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(RoomType $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('roomtype-table')
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

            //Column::make('id'),
            Column::make('image'),
            Column::make('name'),
            Column::make('show_in_home_page'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(250)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'RoomType_' . date('YmdHis');
    }
}
