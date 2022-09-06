<?php
//se existir
if (isset($_COOKIE['corCookie'])){

    $cor = $_COOKIE['corCookie'];
        
    echo("<style>

        body{
            background-color:".$cor.";
        }
        h1{
            color: white;
        }
        h3{
            color: white;
        }
        h6{
            color: white;
        }
        #config{
            color: white;
        }
        a{
            color: white;
        }
        h5{
            color: white;
        }
        p{
            color: white;
        }
        .card{
            background-color: #212529;
        }
    
        footer{
            background-color: #212529;
        }
        #exampleModalLabel{
            color: black;
        }
        b{
            color: white;
        }
        .teste{
            display: none;  
            }
     </style>");

}else {

}
//se existir
if (isset($_COOKIE['fontCookie'])){
       
    $font = $_COOKIE['fontCookie'];
            
    echo("<style>
    body{
    font-family: ".$font.";
    }
    </style>");

}else {

}
//se existir
if (isset($_COOKIE['estiloFontCookie'])){

    $estiloFont = $_COOKIE['estiloFontCookie'];
        
    echo("<style>
    body{
        font-style: ".$estiloFont.";
    }
    </style>");
    
}else {

}

?> 