<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
         integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->

        <!-- Styles -->
        <style>
            *{
                padding:0px;
                margin:0px;
            }
             div{
                 width:100%;
             }
             .bar{
                 width:100%;
                 background-color:black;
             }
             .menubar{
                width:100%;
                 height:8px;
                 padding:0px;
                margin-top:-15px;
                 background-color:red;
             }

             li{
                 display:inline-block;
                 text-align:center;
                 width: 100px;
                 height:50px;
                 line height:50px;
                
                 
             }
             a{
                 color:white;
                 display:block;
                 text-decoration: none;
                 padding-top:10px;
             }
            
             img{
                 height:52px;
             }
        </style>
    </head>
    <body>
       
        <div class="" >
             <div class="" >
              
             <ul class="pl-5 bar " >
               <li> <img src=" {{asset('img/logo_simplon.png')}} " alt=""></li>
               <li><a href="/" class="av1" >ACCUEIL</a></li>
               <li><a href="actualites" class="av2">ACTUALITES</a></li>
               <li><a href="evenements" class="av3">EVENEMENTS</a></li>
               <li><a href="apprenants" class="av4">APPRENANTS</a></li>
               <li><a href="allumnis" class="av5">ALLUMNIS</a></li>
           </ul> 
           <div class="menubar"> </div>
             </div>  
             @yield('content')
        </div>
           
          <div  class="footpad ">
             
               <div class="foot " >  
               <div class="footbar  "> </div>
                 <p>copyrightaaa @simplon/Auf All right reserved</p>
               </div>
          </div>

        <script src=" {{ asset('js/jquery-3.4.1.min.js') }} "></script>
         <script src="{{ asset('js/myjava.js') }}"></script>
    </body>
</html>
