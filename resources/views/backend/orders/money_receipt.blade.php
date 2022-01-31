<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<style>
    .sign{
        font-size:14px;

    }
    .signature{
        position: relative;
    }
    .sign::after{
        content:"";
        position:absolute;
        display:block;
        width:120px;
        height:1px;
        background-color:#000;
        left:0px;
        top:0px;
    }
</style>
</head>
<body>
<div class="row my-3">
    <div class="col-md-12 p-3 text-center">
            <h3 style="margin-bottom:10px;">{{settings()->name}}</h3>
            <img class="card-img-top" src="{{public_path()."/".settings()->logo}}" alt="" style="width:90px;display:block;margin-bottom:10px;">
            <p class="text-center">Phone:&nbsp;{{settings()->phone}}</p>
            <p class="text-center">Email:&nbsp;{{settings()->email}}</p>
            <h4 class="text-center" style="margin-bottom:10px;">Money Receipt</h4>
            <p style="float:left;">Cash Receipt: #{{$id}}</p>
            <p style="float:right">Date: {{date('d/m/Y')}}</p> 
    </div>
</div>
<table class="table table-stripped" style="margin-bottom:50px;">
    <tbody>
        <tr>
            <th>Customer Name:</th>
            <td>{{$name}}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{$email}}</td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td>{{$phone}}</td>
        </tr>
        <tr>
            <th>Address:</th>
            <td>{{$address}}</td>
        </tr>
        <tr>
            <th>Product Name:</th>
            <td>{{$product_name}}</td>
        </tr>
        <tr>
            <th>SKU No:</th>
            <td>{{$sku}}</td>
        </tr>
        <tr>
            <th>Product Photo:</th>
            <td><img src="{{$product_image}}" alt="" style="width:100px;height:70px;"></td>
        </tr>
        <tr>
            <th>Payable Amount:</th>
            <td>{{$amount}}TK.</td>
        </tr>
    </tbody>
</table>


<p style="float:left;" class="signature">
<span class="sign">Authurity Signature</span>
</p>
<p style="float:right" class="signature">
<span class="sign">Customer Signature</span>
</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>  