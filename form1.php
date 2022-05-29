<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdmitKard</title>
</head>
<body>
<link href = "form.css" type = "text/css" rel = "stylesheet" />    
        <h2>Enter Data</h2>    
        <form action="connection.php" method="post">   
            <div class = "container">    
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "name" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Email:</label>    
                    <input type = "email" name = "email" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Contact Number</label>    
                    <input type = "number" name = "contact" value = "" required/>    
                </div>    
                <div class = "form_group">    
                <label for="Course">Course level</label>

                <select name="course" id="course">
                <option value="UG" required>UG</option>
                <option value="PG" required>PG</option>
                </select>    
                </div> 
                <div class= "form_group">
                <label for="country">Country Preference</label>
                <select name="country[]" id="country" multiple size="10" style="height: 20%;">
                <option value="USA">USA</option>
                <option value="Australia">Australia</option>
                <option value="New-Zealand">New-Zealand</option>
                <option value="Canada">Canada</option>
                <option value="UK">UK</option>
                <option value="Ireland">Ireland</option>
                <option value="Germany">Germany</option>
                </select>
                </div>

 
                <div class="form_group">
                <label for="dob">DOB</label>
                <input type="date" id="dob" name="dob">
                </div>
                <input type="submit" value="Submit">
            </div>    
        </form>
            
        
</body>
</html>