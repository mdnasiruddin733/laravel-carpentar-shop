<!DOCTYPE html>

<html>

<head>

    <title>laravel-pdf</title>

    <style>

    table tr th{

      background-color:#04AA6D;

      color:white;

      border: 1px solid #ddd;

      padding: 8px;

    }

    table tr td{

      border: 1px solid #ddd;

      padding: 8px;

    }

    </style>

</head>

<body>

    <h3>Laravel 8 PDF Example Using dompdf </h3>

   <table>

       <tr>

           <th>Full Name</th>

           <th>Email Id</th>

           <th>Age</th>

           <th>Phone Number</th>

       </tr>

       <tr>

           <td>{{ $name }}</td>

           <td>{{ $email }}</td>

           <td>{{ $address }}</td>

           <td>{{ $phone }}</td>

       </tr>

   </table>

</body>

</html>  