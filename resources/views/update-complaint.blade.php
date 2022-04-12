<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
 
  <style>
 @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: sans-serif;
}

body{
      height: 100vh;
      background: #e1edf9;
}

.wrapper{
  max-width: 450px;
  width: 100%;
  margin: 30px auto 0;
  padding: 10px;

}

.wrapper .form_container{
  background: #fff;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 3px;
}
.heading{
  background: #015a80;
  margin: -30px;
  text-align: center;
  color: white;
  font-size: 19px;
  margin-bottom: 35px;
  padding: 10px;
  
  
}
.wrapper .form_container .form_item{
  margin-bottom: 25px;
}

.form_wrap.fullname,
.form_wrap.select_box{
  display: flex;
}

.form_wrap.fullname .form_item,
.form_wrap.select_box .form_item{
  width: 50%;
}
.form_item>textarea{
    width:100%;
}
.form_wrap.fullname .form_item:first-child,
.form_wrap.select_box .form_item:first-child{
  margin-right: 4%;
}

.wrapper .form_container .form_item label{
  display: block;
  margin-bottom: 5px;
}

.form_item input[type="text"],input[type="file"],
.form_item select{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_item input[type="text"],textarea:focus{
  border-color: #6271f0;
}

.btn input[type="submit"]{
  background: #1598d4;
  border: 1px solid #1598d4;
  padding: 10px;
  width: 100%;
  font-size: 16px;
  letter-spacing: 1px;
  border-radius: 3px;
  cursor: pointer;
  color: #fff;
}
textarea{
    width:100%;
    padding:0px;
}
  </style>
</head>
<body>
  <header>

    <nav style="background-color: white;" class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Trash</span>-Transfer</a>

        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Resolved Complaints</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">My Complaints</a>
            </li>
            
            <li class="nav-item">
              <a class="btn btn-dark ml-lg-3" href="">Log out</a>
            </li>
            
            
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
 
	<div class="wrapper">
      <div class="form_container">
	  <form name="form" action="/update-save-complaint" method="post" enctype="multipart/form-data">
       @csrf
        <div class="heading">
        <h2>COMPLAINT UPDATE FORM</h2>
        </div>
        <div class=" select_box">
          <div class="form_item">
            <label>Compaint Type</label>
            <select name="type">
                <option>COMPAINT1</option>
                <option>COM2</option>
                <option>COMP2</option>
                <option>COMP3</option>
            </select>
            <div class="error" id="city"></div>  
        </div>
    <div class="form_item">
            <label>Area</label>
            <select value={{$complaint->area}} name="area">
                <option>BOPAL</option>
                <option>GITA MANDIR</option>
                <option>NARODA</option>
                <option>NEHRUNAGAR</option>
                <option>AIRPORT</option>
                <option>MG LIBRARY</option>
                <option>ISRO</option>
            </select>
            <div class="error" id="country"></div>  
        </div>
    </div>
			<div class="form">
				<div class="form_item">
					<label>Compaint Description</label>
<textarea style="resize: none;"  name="description" id="" cols="10" rows="4">{{$complaint->description}}</textarea>
                
                    <div class="error" id="fname"></div>  
				</div>
			</div>
			<div class="form">
                <div class="form_item">
					<input type="hidden" name="id" value="{{$complaint->id}}">
					<div class="error" id="fname"></div>  
				</div>
			</div>

			<div class="btn">
			  <input type="submit" value="UPDATE COMPAINT">
			</div>
		  </form>
		</div>
	  </div>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    
    <script src="../assets/vendor/wow/wow.min.js"></script>
    
    <script src="../assets/js/theme.js"></script>
  
</body>
</html>
