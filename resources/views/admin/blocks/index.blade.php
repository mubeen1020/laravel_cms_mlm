@extends('admin.layouts.master')
@section('content')

<input type="hidden" id="model" value="Block">

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <div class="module-title">
                    Placement List
                </div>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-sm btn-success" href="{{ route("admin.blocks.create") }}">
                    Add Placement
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Module</th>
                        <th>Type</th>
                        <th style="width:80px;">Row</th>
                        <th>Durum</th>
                        <th>Transactions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blocks as $block)
                    <tr>
                        <td>{{ $block->id }}</td>
                        <td>{{ trans('general.'.$block->model_name) }}</td>
                        <td>{{ $block->type->description }}</td>
                        <td>
                            <input type="number" class="form-control change-rank" value="{{$block->rank}}"
                                data-id="{{$block->id}}">
                        </td>
                        <td>
                            <input type="checkbox" value="1" class="flat change-status" data-id="{{$block->id}}"
                                {{ $block->status == 1 ? 'checked' : '' }}>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info align-top" href="{{ route('admin.blocks.edit', $block->id) }}">
                                Edit
                            </a>
                            <form action="{{ route('admin.blocks.destroy', $block->id) }}" method="POST"
                                onsubmit="return confirm('Emin Misiniz?');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-sm btn-danger" value="Sil">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection