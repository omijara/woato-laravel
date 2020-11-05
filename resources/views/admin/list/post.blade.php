
@extends('layouts.master_admin')

@section('content')

@section('title')
Admin Dashboard | Woato Foundation
@endsection        
         

      <div class="content-wrapper">
        <div class="content">         
          <div class="breadcrumb-wrapper">
      <h1>Tables</h1>
                
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>                
              </a>
            </li>
            <li class="breadcrumb-item">
              data-tables
            </li>
            <li class="breadcrumb-item" aria-current="page">register-data-table</li>
          </ol>
        </nav>

              </div>

              <div class="row">
                <div class="col-12">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                      <h2>Post List</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-square-edit-outline"></i> Create Post
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="post_save.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" class="form-control" name="post_title" required="">
            </div>
            
            <div class="form-group">
                <label for="description">Description<span class="require">*</span></label>
                <textarea rows="5" class="form-control" name="post_decription" required=""></textarea>
            </div>
            
            <div class="form-group">
                <p><span class="require">*</span> - required fields</p>
            </div>
            <div class="form-group">
                <label>Select Image<span class="require">*</span></label>
                <input type="file" class="form-control"  name="img" required="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                  <input type="submit" value="Create" name="submit">
                    
                </button>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>




                 


                    <div class="card-body">
                      <div class="responsive-data-table">
                        <table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
                          

                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Post Title</th>
                              <th>Description</th>
                              <th>Image</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                 
                  <tr>
                    <td>
                        
                    </td>
                    
                    <td>
                      
                    </td>
                    <td>
                    
                    </td>
                    <td>
                      <a href=""><img src="" height='100' width='`150'></a>
                    </td>
                    <td>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-square-edit-outline"></i>
                    </button>

                    <button type="button" class="btn btn-danger btn-xs"><i class="mdi mdi-trash-can-outline"></i></button>

                   </td>
                 </tr>
              
                          </tbody>
                        </table>


                      </div>
                    </div>
                  </div>
                </div>


  

    </div>
  </div>

@endsection 

