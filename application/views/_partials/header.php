<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <style>
        *{
            margin:0;
            padding:0;
            outline:none;
            box-sizing:border-box;
            font-family: 'Roboto', sans-serif;
        }

        .container{
            max-width: 1100px;
            margin:20px auto;
        }
        table{
            width: 100%;
        
        }
        table td{
       
            padding: 10px;
            border-right:1px solid #c8c8c8;
            border-top:1px solid #c8c8c8;
        }
        table tr td:first-child{
            border-left:1px solid #c8c8c8;
        }
        table tbody tr:last-child td{
            border-bottom:1px solid #c8c8c8;
        }
        thead td{
            font-weight:bold;
        }
        .light{
            font-weight:300;
        }
        .fifth{
            background: #303030;
        }
        .fifth td{
            color:white;
        }
        h1{
            margin-bottom: 20px;
        }

        a{
            display: inline-block;
            padding:0px 10px;
            color: blue;
        }

        form label{
            width: 10%;
            display: block;
            font-size: .87em;
        }
        form input, form select{
            width: 20%;
            padding: 5px;
        }
        .btn{
            width: auto;
        }
        .form-group{
            margin-top:10px;
        }
        .form-group > *{
            display: inline-block;
        }
        .btn{
            border: none;
            padding:5px 15px !important;
            background: #ff8f8f;
            font-size: .9em;
            text-decoration: none;
            cursor: pointer;
            color:black;
        }
        .btn.primary{
            background: #8fd1ff;
        }

        .form-group > textarea{
            vertical-align: middle;
        }

        .error{
            background: #fd6666;
            display: block;
            color: #861717;
            font-size: .8em;
            display: block;
            width: 20%;
            margin: 10px 0px 0px 120px;
        }
        span{
            color:red;
        }

        .success{
            background: #66d166;
            width: 50%;
            padding:7px 12px;
            color: #238810;
            font-size: .8em;
            margin: 10px 0px 0px 31%; 
        }
        .show-product p{
            font-size: 1.4em;
        }
        .show-product > div >div {
            margin: 10px;
        }
        .show-product > div >div >p{
            display: inline-block;
        }
        .mt-10{
            margin-top: 10px;
        }
        table form{
            display: inline-block;
        }
    </style>
</head>
<body>
