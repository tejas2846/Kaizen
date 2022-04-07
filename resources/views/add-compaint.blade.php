<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
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
}
  </style>
</head>
<body>
 
	<div class="wrapper">
      <div class="form_container">
	  <form name="form" action="/add-complaint" method="post" enctype="multipart/form-data">
       @csrf
        <div class="heading">
        <h2>COMPLAINT FORM</h2>
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
            <select name="area">
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
					<textarea style="resize: none;" name="description" id="" cols="10" rows="5"></textarea>
                
                    <div class="error" id="fname"></div>  
				</div>
			</div>
			<div class="form">
                <div class="form_item">
					<label>Add Image Of Issue</label>
					<input type="file" name="image" id="image">
					<div class="error" id="fname"></div>  
				</div>
			</div>

			<div class="btn">
			  <input type="submit" value="ADD COMPAINT">
			</div>
		  </form>
		</div>
	  </div>
  
</body>
</html>
