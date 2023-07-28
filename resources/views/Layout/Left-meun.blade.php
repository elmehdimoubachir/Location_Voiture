@extends('Layout/Layout')
@section('laftMeun')
<style>
      body{margin:0;}

    .sidenav {
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 50px;
      left: 0;
      background-color:rgb(27, 2, 85);
      overflow-x: hidden;
      padding-top: 40px;
    }

    .sidenav a, .dropdown-btn {
      padding: 10px 8px 6px 16px;
      text-decoration: none;
      font-size: 20px;
      color: #818181;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
    }

    .sidenav a:hover, .dropdown-btn:hover {
      color: #f1f1f1;
    }

    .main {
      margin-left: 200px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 0px 10px;
    }

    .active {
      background-color: rgb(8, 129, 251);
      color: white;
    }

    .dropdown-container {
      display: none;
      background-color:rgb(15, 2, 65);
      padding-left: 8px;
    }

    .fa-caret-down {
      float: right;
      padding-right: 8px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    
    </style>

    

   
    @endsection