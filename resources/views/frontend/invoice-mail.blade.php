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
   <div class="col-md-10 mx-auto">
       <h3>Hi {{$name}}</h3>
       <p class="text-primary">Your order for <strong>{{$product_name}}</strong> is placed successfully.</p>
       <p><strong>Transaction ID:</strong>{{$tran_id}}</p>
       <p><strong>Paid Amount:</strong>{{$amount}}TK.</p>
   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>  