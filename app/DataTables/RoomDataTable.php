<?php

namespace App\DataTables;

use App\Models\Admin\Room\Room;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RoomDataTable extends DataTable
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
                $edit = '<a href="'.route('rooms.edit', $query->id).'" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> </a>';
                $delete = '<a href="'.route('rooms.destroy', $query->id).'" class="btn btn-danger btn-sm delete-item ml-2"><i class="fas fa-trash"></i> </a>';

                $more = '<div class="btn-group dropleft">
                      <button type="button" class="btn btn-dark btn-sm ml-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-cog"></i>
                      </button>
                      <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-2px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="dropdown-item" href="'.route('show.index', $query->id).'">Gallery</a>

                      </div>
                    </div>';

                return $edit.$delete.$more;
            })
            ->addColumn('image', function ($query) {
                return '<img src="'.$query->image.'" width="50px">';
            })
            ->addColumn('room_nr', function ($query) {
                return $query->roomNumber->room_nr;
            })
            ->addColumn('room_type', function ($query) {
                return $query->roomType->name;
            })
            ->addColumn('num_of_adult', function ($query) {
                return $query->number_of_adult;
            })
            ->addColumn('num_of_children', function ($query) {
                return $query->number_of_children;
            })
            ->addColumn('smoking?', function ($query) {
                if ($query->smoking_allowed === 1) {
                    return '<span class="badge bg-success btn-sm">Yes</span>';
                } else {
                    return '<span class="badge bg-danger btn-sm">No</span>';
                }
            })
            ->addColumn('cooking?', function ($query) {
                if ($query->cooking_allowed === 1) {
                    return '<span class="badge bg-success btn-sm">Yes</span>';
                } else {
                    return '<span class="badge bg-danger btn-sm">No</span>';
                }
            })
            ->addColumn('status', function ($query) {
                if ($query->status === 1) {
                    return '<span class="badge bg-success btn-sm">Yes</span>';
                } else {
                    return '<span class="badge bg-danger btn-sm">No</span>';
                }
            })
            ->rawColumns(['action', 'image', 'room_nr', 'num_of_adult', 'num_of_children', 'smoking?', 'cooking?', 'status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Room $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('room-table')
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

            Column::make('image'),
            Column::make('room_name'),
            Column::make('room_nr'),
            Column::make('room_type'),
            Column::make('num_of_adult'),
            Column::make('num_of_children'),
            Column::make('room_capacity'),
            Column::make('price'),
            Column::make('discount'),
            Column::make('size'),
            Column::make('bed_size'),
            Column::make('smoking?'),
            Column::make('cooking?'),
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
        return 'Room_' . date('YmdHis');
    }
}
