<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Showroom Mobil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  {{-- load css file --}}
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&family=Rubik+Distressed&display=swap");

    body {
      font-family: "Poppins", sans-serif;
    }

    .navbar a {
      color: #e0e0e0;
      font-weight: 600;
    }

    .navbar a:hover {
      color: #fff;
    }

    /* Jumbotron */
    #home h1 {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 800;
      font-size: 56px;
      line-height: 66px;
      letter-spacing: 1.2px;
      text-transform: capitalize;
    }

    #home p {
      font-style: normal;
      font-weight: 400;
      font-size: 20px;
      line-height: 23px;
      letter-spacing: 0.2px;
    }

    #home .wrap {
      margin-top: 200px;
    }

    #home .img {
      width: 750px;
      height: 500px;
    }

    /* Add Page */
    #form {
      padding-top: 50px;
      padding-bottom: 50px;
    }

    #form .add {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 700;
      font-size: 32px;
      line-height: 38px;
    }

    #form .tambahp {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 19px;
      color: #757575;
    }

    #form form {
      margin-top: 50px;
    }

    #form label,
    input {
      display: block;
    }

    #form label {
      font-size: 20px;
      line-height: 24px;
      letter-spacing: 1.2px;
      margin-top: 30px;
    }

    #form input {
      width: 1000px;
      height: 50px;
      border: 1px solid #757575;
      border-radius: 8px;
      margin-top: 20px;
      padding-left: 10px;
      padding-right: 10px;
    }

    #form textarea {
      padding: 20px;
      margin-top: 20px;
    }

    /* List Pages */
    #list {
      padding-top: 50px;
      padding-bottom: 50px;
    }

    #list h1 {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 900;
      font-size: 32px;
      line-height: 38px;
    }

    #list p {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 19px;
      color: #757575;
      margin-top: 20px;
    }

    #list .card {
      background: #ffffff;
      box-shadow: 6px 14px 40px rgba(210, 210, 210, 0.6);
      border-radius: 16px;
      width: 400px;
      margin-top: 50px;
    }

    /* Detail Page */
    #detail {
      padding-top: 50px;
      padding-bottom: 50px;
    }

    #detail .tambahh1 {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 700;
      font-size: 32px;
      line-height: 38px;
    }

    #detail .tambahp {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 19px;
      color: #757575;
    }

    #detail img {
      width: 500px;
      height: 500px;
      object-fit: contain;
      border-radius: 16px;
      margin-top: 20px;
    }

    #detail label,
    input {
      display: block;
    }

    #detail label {
      font-size: 20px;
      line-height: 24px;
      letter-spacing: 1.2px;
      margin-top: 30px;
    }

    #detail input {
      width: 600px;
      height: 50px;
      border: 1px solid #757575;
      border-radius: 8px;
      margin-top: 20px;
      padding-left: 10px;
      padding-right: 10px;
    }

    #detail textarea {
      padding: 20px;
      margin-top: 20px;
    }

    #login .left {
      background-image: url("../images/hrv.png");
      background-size: cover;
    }

    .required {
      color: red;
    }

    /* Profile Page */
    #profile label {
      width: 20%;
    }

    #profile .profile input {
      width: 950px;
      height: 40px;
      background: #ffffff;
      border: 1px solid #000000;
      border-radius: 10px;
      padding-left: 10px;
    }

    #profile h1 {
      margin-left: auto;
      margin-right: auto;
      padding-bottom: 20px;
    }

    #profile .profile h2 {
      font-size: 20px;
      font-weight: 400;
    }

    .profile button {
      width: 139px;
      height: 50px;
      border-radius: 8px;
      border: none;
      color: white;
    }
  </style>
</head>

<body>
  @include('layouts.navbar')

  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
