<?php

namespace App\DataTables;

use App\Models\Admin\Room\RoomNumber\RoomNumber;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RoomNumberDataTable extends DataTable
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
                $edit = '<a href="'.route('roomnumbers.edit', $query->id).'" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                $delete = '<a href="'.route('roomnumbers.destroy',$query->id).'" class="btn btn-danger btn-sm ml-2 delete-item"><i class="fas fa-trash"></i> Delete</a>';

                return $edit.$delete;
            })
            ->addColumn('status', function ($query) {
                if ($query->status === 1) {
                    return '<span class="badge bg-primary">Active</span>';
                } else {
                    return '<span class="badge bg-danger">Inactive</span>';
                }
            })
            ->addColumn('room_nr', function ($query) {
                $rn ='<button type="button" class="btn btn-secondary position-relative btn-sm">
                        <i class=""></i>' .$query->room_nr. '<span class="position-absolute top-0 start-100 translate-middle badge border border-light bg-success p-2 bfree"><span class="">Free</span></span>
										</button>';
                return $rn;
            })
            ->rawColumns(['action', 'status', 'room_nr'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(RoomNumber $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('roomnumber-table')
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
            Column::make('room_nr'),
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
        return 'RoomNumber_' . date('YmdHis');
    }
}
