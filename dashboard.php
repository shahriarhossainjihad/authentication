<?php 
include "inc/header.php"; 
include "inc/sidenav.php"; 
include "inc/topnav.php"; 

include_once "system/lib/maincontroller.php";

$url= isset($_GET['url']) ? $_GET['url'] : NULL;
if ($url != NULL) {
   $url = rtrim($url , "/");
   $url = explode("/", $url);

} else {
   unset($url);
}



if (isset($url[0])) {
   include 'app/controller/'.$url[0].'.php';
   $jihadcntrolr = new $url[0]();
   if (isset($url[2])) {
      $jihadcntrolr->{$url[1]}($url[2]);
   }
   else {
      if (isset($url[1])) {
         $jihadcntrolr->{$url[1]}();
      }else {

      }
   }
}else {
   include 'app/controller/index.php';
   $jihadcntrolr1 = new index();
   $jihadcntrolr1->home();
}



// var_dump($url);
// var_dump($jihadcntrolr);
// if (isset($url[1]) && !empty($url[1])) {
//    $jihadcntrolr->{$url[1]}($url[2]);
// }


// $jihadcntrolr->$url[1]();


// print_r($jihadcntrolr);
// echo "<pre>";
// print_r($url); 
// echo "</pre>";

 include "inc/footer.php";
?>

<?php 
// include "inc/header.php"; 
// include "inc/sidenav.php"; 
// include "inc/topnav.php"; 

// include_once "system/lib/maincontroller.php";

// if (isset($_GET['url']) && !empty($_GET['url'])) {
//     $url = $_GET['url'];
//     $url = rtrim($url , "/");
//     $url = explode("/", $url);

//     $controller_file = 'app/controller/'.$url[0].'.php';
//     if (file_exists($controller_file)) {
//         include $controller_file;
//         $controller_class = $url[0];
//         $controller = new $controller_class();
//         if (isset($url[1]) && !empty($url[1])) {
//             $controller_method = $url[1];
//             if (method_exists($controller, $controller_method)) {
//                 if (isset($url[2]) && !empty($url[2])) {
//                     $controller->{$controller_method}($url[2]);
//                 } else {
//                     $controller->{$controller_method}();
//                 }
//             } else {
//                 echo "Error: method $controller_method not found in controller $controller_class";
//             }
//         } else {
//             echo "Error: no method specified in URL for controller $controller_class";
//         }
//     } else {
//         echo "Error: controller $controller_file not found";
//     }
// } else {
//     echo "Error: no URL parameter specified";
// }

// include "inc/footer.php";
?>