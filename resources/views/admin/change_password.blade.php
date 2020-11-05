
@extends('layouts.master_admin')

@section('content')

@section('title')
Admin Dashboard | Woato Foundation
@endsection 

 	<link rel="stylesheet" type="text/css" href="../css/style2.css">
  	<link rel="stylesheet" href="../css/parsley.css">

	<form action="#" method="POST" data-parsley-validate>


				<h2>Change Password</h2>
				<!--<div class="form-group">
					<label for="">Enter Your Username:</label>
					<input type="text" class="form-control" name="username" required="">
				</div> -->
				<div class="form-group">
					<label for="">New Password:</label>
					<input type="password" class="form-control" id="pw" name="npass" required="">
				</div>
				<div class="form-group">
					<label for="">Confirm Password:</label>
					<input type="password" class="form-control" name="cpass" data-parsley-equalto="#pw" required="">
				</div>

				</br>
					<button type="submit" name="register" class="btn">update</button>
					<input type="button" value="cancel" class="btn" onclick="history.back();" />

			</form>


<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/parsley.min.js"></script>

@endsection 
			