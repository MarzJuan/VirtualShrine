<!DOCTYPE html>
<html>

<head>
        <title>Booking Page</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="default.css">
<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
</head>
<body>
<div class="retun-btn">
    <a href="homePage.html"> Return to Home</a>
</div>
<div class="container">
<div class="header bg-header">
<img src="Images/IconCasaReal.png">
<h2>Museo ng Kasaysayan Pampulitika ng Pilipinas</h2>
<h3>Online Reservation Form</h3>
</div>
</div>
<div class="form-flex">
<form class="bg-form">
<div class="input-box">
    <span class="date-text">
        Date of Visit
    </span>
    <div><input type="date" class="date-input"></div>
</div>
<div class="input-flex">
    <div class="input-box">
        <span class="time-text">Time of Visit</span>
        <div><input type="time" class="time-width"></div>
    </div>
    <div class="input-box">
            <span class="time-text No-visitors">Number of Visitors</span>
            <div><input type="number" class="number-width "></div>
        </div>
</div>
<span class="input-box Name-form">Name of Representative</span>
<div class="input-flex">
        <div class="input-box">
                <span class="FirstName">First Name</span>
                <div><input type="text" placeholder="First Name" class="FName-width"></div>
            </div>
            <div class="input-box">
                    <span class="LastName">Last Name</span>
                    <div><input type="text" placeholder="Last Name" class="LName-width"></div>
                </div>

</div>
<div class="input-box">
        <span class="Phone-text">
            Phone Number
        </span>
        <div><input type="text" placeholder="Phone Number" class="phone-widht"></div>
    </div>
    <div class="input-box">
        <span class="Email-text">
            Email
        </span>
        <div><input type="text" placeholder="Email Address" class="email-width"></div>
        </div>
        <div class="input-box">
        <span class="file-text">
            Please attach a Permit Letter for Visit and Valid ID :
        </span>
            <div class="file-border"> <label for="file" class="file-btn"><svg style="width:24px;height:24px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,12L16,16H13.5V19H10.5V16H8L12,12Z" />
                </svg> Choose file </label>
                <input type="file" name="file" id="file" required>
        </div>
        </div>
        <div class="input-box">
                <span class="Email-text">
                Name of Company/Agency/School
                </span>
                <div><input type="text" placeholder="Name of Organization" class="email-width org-text"></div>
            </div>

            <div>
                <input type="submit" class="booking-btn">
            </div>
</form>
</div>
</body>
</html>
