@extends('layout.app')


@section('title')
    show books - {{ $category->name }}
@endsection


@section('breadcrump')
    @parent
@endsection

@section('content')
    {{--  @if (session()->has('success'))
<div class="alert alert-success ">
  {{ session('success') }}
</div>
@endif

@if (session()->has('info'))
<div class="alert alert-success ">
  {{ session('info') }}
</div>
@endif

@if (session()->has('delete'))
<div class="alert alert-success ">
  {{ session('delete') }}
</div>
@endif  --}}
    <x-alert type="success" />
    <x-alert type="danger" />
    <x-alert type="info" />
    <!--begin::Content-->

    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between m-2">
            <input type="text" name="name" class="form-control mx-2" placeholder="category name"
                value="{{ request('name') }}">
            <select name="status" class="form-control mx-2" id="">
                <option value="">All</option>
                <option value="active" @selected(request('status') == 'active')>Active</option>
                <option value="inactive" @selected(request('status') == 'inactive')>InActive</option>

            </select>

            <input type="date" name="start_date" class="form-control mx-2" placeholder="category name"
                value="{{ request('start_date') }}">
            <input type="date" name="end_date" class="form-control mx-2" placeholder="category name"
                value="{{ request('end_date') }}">

            <button type="submit" class="btn btn-primary">Filter</button>
        </form>




        <!--begin::Tables Widget 11-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Show Books - {{ $category->name }}</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new products</span>
                </h3>
                <a href="{{ route('categories.index') }}" class="btn btn-primary">Categories</a>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bold text-muted bg-light">
                                <th> id </th>
                                <th class="min-w-125px">Book Name</th>
                                <th class="min-w-125px"> author</th>
                                <th class="min-w-125px">Library</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">price</th>


                                <th class="min-w-125px">Created at</th>


                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            {{--  @if ($categories->count())


                                                            @foreach ($categories as $category)
                                                            <tr>
                                                                <td>{{ $category->id }}</td>
                                                                <td>{{ $category->name }}</td>
                                                                <td>{{ $category->desc }}</td>
                                                                <td>{{ $category->created_at }}</td>
                                                                <td>{{ $category->updated_at }}</td>
                                                                <td class="text-end" style="justify-content: space-betwee;display:flex">

                                                                    <a href="{{ route('categories.edit' , $category->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <i class="ki-outline ki-pencil fs-2"></i>
                                                                    </a>
                                                                    <form action="{{ route('categories.destroy', $category->id) }}" method="post" >
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                        <i class="ki-outline ki-trash fs-2"></i>
                                                                    </button>


                                                                    </form>

                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        @else
                                                        <tr>
                                                            <td>No Data</td>
                                                        </tr>
                                                        @endif  --}}
                            @forelse ($category->books as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>{{ $item->library->name }}</td>

                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->created_at }}</td>


                                </tr>
                            @empty
                                <tr>
                                    <td>No Data</td>
                                </tr>
                            @endforelse

                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>

    </div>
    <!--end::Content container-->
@endsection

@push('styles')
    <style>

    </style>
@endpush

@push('scripts')
    <script></script>
@endpush
