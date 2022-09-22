<?php

// date_default_timezone_set('America/Sao_Paulo');

// abstract class Conn
// {
//       LOCAL
//       const host = 'localhost';
//       const dbname = 'portifolio';
//       const user = 'root';
//       const password = '';
      
//       static function conectar()
//       {
//             try
//             {
//                 $pdo = new PDO("mysql:host=".self::host.";dbname=".self::dbname.";charset=utf8", self::user, self::password);
// 			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 			return $pdo;
// 		} catch(PDOException $e) {
// 			echo 'ERROR: ' . $e->getMessage();
// 		}
//             }
      
// }

// abstract class Formulario

// {
//     static function Projetos($email,$msg,$nome,$projeto)
//     {
//         try{
//             $pdo= Conn::conectar();
//             $mensagem = $pdo->prepare("INSERT INTO formulario (nome,email,projeto,mensagem) VALUES (:nome,:email, :projeto,:mensagem)");
//             $mensagem->bindValue(":nome", $nome);
//             $mensagem->bindValue(":email", $email);
//             $mensagem->bindValue(":projeto", $projeto);
//             $mensagem->bindValue(":mensagem", $msg);
//             $mensagem->execute();
            
//             if($mensagem){
//                 return 1;
//             }else{
//                 return 0;
//             }
//         } catch (PDOException $e){
//             echo "ERROR: ".$e->getMessage();
//         }
//     }
// }
