<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
}
.container {
    margin: 0  auto;
    width: 960px;
    padding: 50px;
    background-color: #8fd0ec;
    border-radius: 30px;
}

input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: orange;
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #0992BF;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
  font-weight: bold;
}
.divfoot{
  font-size: 20px;
  font-weight: bold;
}
.divfoot a{
  text-decoration: none;
  color:#3471EB;
}
.divfoot a:hover{
  text-decoration: underline;
  color: #4CAF50;
}
.buttonback {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bold;

}
</style>
</head>
<body>
<form action="{{ route('register') }}" method="post">
    @csrf
  <div class="container">
  <center>  <h1> Patient Registeration Form</h1> </center>
  <hr>
  <label> Patient Name : </label>
<input type="text" name="name" placeholder= "Give your Patient Name ... " size="15" required />

<div>
<label>
Gender :
</label><br>
<input type="radio" value="Male" name="gender" checked > Male
<input type="radio" value="Female" name="gender"> Female
</div>



<label>
Phone :
</label>
<input type="text" name="phone" placeholder="Phone No." size="11"/ required>
Current Address :
<textarea cols="80" rows="5" name="address" placeholder="Current Address" value="address" required>
</textarea>
 <label for="email"><b>Email</b></label>
 <input type="text" placeholder="Enter Email" name="email" required>

 <div>
    <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="dob">
    </div>

 <div>
    <label>
    Blood Group :
    </label>

    <select name="blood_group">
    <option disabled selected >Group Name</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    </select>
    </div>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>


    <button type="submit" name ="submit" class="registerbtn">Register</button>
</form>
<a href="/" class="buttonback">Back</a>
</body>
</html>
