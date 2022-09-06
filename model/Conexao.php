<?php

class Conexao
{
    // método
    public static function conectar()
    {
       
        //conexão local
        global $conexao;
        $conexao = new PDO("mysql:host=localhost;
                            dbname=bdProjeto", 
                            "root",
                            "");

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET CHARACTER SET utf8");
        
        return $conexao;
   }
}
