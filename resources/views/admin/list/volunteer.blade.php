
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
                      <h2>Volunteer Sign-Up List</h2>
                 
                  <form method="post" action="export.php" align="right">  
                  <input type="submit" name="export" value="Export CSV" class="btn btn-success" />
                  <style>input {
                       right: 100px;
                      }</style>  
                  </form>

                    </div>

                 


                    <div class="card-body">
                      <div class="responsive-data-table">
                        <table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
                          

                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>Institute</th>
                              <th>Address</th>
                              <th>About</th>
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
                    
                    </td>
                    <td>
                    
                    </td>
                    <td>
                    
                    </td>
                    <td>
                    
                    </td>
                    <td>
                    <!-- Button trigger modal -->
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


