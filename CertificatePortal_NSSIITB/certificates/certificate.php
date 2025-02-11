<!DOCTYPE html>
<html>
<head>
    <title>Certificate Generator</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);
        
        header .header {
          background-color: #fff;
          height: 45px;
        }
        
        .logo {
          width: 134px;
          margin-top: 4px;
        }
        
        .generate-page {
          width: 360px;
          padding: 8% 0 0;
          margin: auto;
        }
        
        .generate-page .form .details {
          margin-top: -31px;
          margin-bottom: 26px;
        }
        
        .form {
          position: relative;
          z-index: 1;
          background: #FFFFFF;
          max-width: 360px;
          margin: 0 auto 100px;
          padding: 45px;
          text-align: center;
          box-shadow: 0 0 20px 0 rgba(5, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        
        .form input {
          font-family: "Roboto", sans-serif;
          outline: 0;
          background: #f2f2f2;
          width: 100%;
          border: 0;
          margin: 0 0 15px;
          padding: 15px;
          box-sizing: border-box;
          font-size: 14px;
        }
        
        .button {
          font-family: "Roboto", sans-serif;
          text-transform: uppercase;
          outline: 0;
          background-color: #328f8a;
          color: #000;
          border: none;
          padding: 15px;
          width: 100%;
          font-size: 14px;
          font-weight: bold;
          letter-spacing: 1px;
          transition: background-color 0.3s ease;
          cursor: pointer;
        }
        
        .button:hover {
          background-color: #08ac4b;
        }

        .container {
          position: relative;
          z-index: 1;
          max-width: 300px;
          margin: 0 auto;
        }

        body {
          background: url("bg.png") no-repeat center center fixed;
          background-size: cover;
          font-family: "Roboto", sans-serif;
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
        }

        /* Colorful Modifications */
        .generate-page .form {
          background-color: #f2f2f2;
        }
        
        .generate-page .form h1 {
          color: #328f8a;
        }
        
        .generate-page .form label {
          color: #328f8a;
        }
        
        .generate-page .form input[type="text"] {
          background-color: #FFFFFF;
          color: #000000;
        }
        
        .generate-page .form .button {
          background-color: #328f8a;
          color: #FFFFFF;
        }
        
        /* Media Queries */
        @media only screen and (max-width: 480px) {
          .generate-page {
            width: 100%;
            padding: 8% 0;
          }
          .form {
            max-width: 100%;
          }
        }
    </style>
</head>
<body>
  
    <div class="generate-page">
        <div class="form">
            <div class="details">
                <div class="login-header">
                    <h1>Certificate Generator</h1>
                </div>
            </div>
            <form class="login-form" method="POST" action="https://nss.gymkhanap.iitb.ac.in/certificates/generate_certificate.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="contact">Contact Number:</label>
                <input type="text" id="contact" name="contact" required><br>

                <label for="department">Department:</label>
                <input type="text" id="department" name="department" required><br>

                <input class="button" type="submit" value="Generate Certificate">
            </form>
        </div>
    </div>
</body>
</html>