@extends('dashboard.layout.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
  </div>
  <div class="row">
    <div class="col-lg-12">
      {{-- mengecek jika post succes akan mengemblaikan message --}}
      @if (session()->has('success'))
        <div class="alert alert-success">
          {{ session('success') }}  
        </div> 
      @endif

      <div class="table-responsive">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/categories/{{ $category->slug }}" class="d-inline" method="post">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('are you sure want to delete?')"><span data-feather="x-circle"></span></button>
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