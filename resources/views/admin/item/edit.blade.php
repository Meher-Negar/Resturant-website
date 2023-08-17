@extends('layouts.app')
@section('admin_content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Item Create New</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Item New</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('item.update',$item->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="name">Item Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $item->name}}">
                  </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="name">Item Price</label>
                    <input type="text" class="form-control" name="price" id="price"  value="{{ $item->price}}">
                  </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="name">Category Name</label>
                    <select class="form-control" name="category">
                      @foreach($categories as $category)
                      <option value="{{ $category->id}}">{{$category->name}}

                      </option>
                      @endforeach
                    </select>
                  </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="name">Item Price</label>
                    <textarea name="details" id="details"
                    class="form-control"  >{{ $item->details}}</textarea> 
                  </div>
                    </div>
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" >Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection