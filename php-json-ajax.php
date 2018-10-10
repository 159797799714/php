<?php
     header("Content -Type: text /html; charset = UTF-8");
     $username = $_GET["username"];
     $password = $_GET["password"];
     //链接json文件
     $json = file_get_contents("php-json-ajax.json");
     //json字符串转换
     $json = json_decode($json);
     $arrTable = array();

              for($i = 0; $i < count($json); $i++) {
                 // 生成tr
                 // array_push: 数组添加元素， 第一个参数是数组本身， 第二个是要添加的元素 
                  array_push($arrTable, "<tr>");
                  foreach($json[$i] as $key => $val) {
                    // 添加td
                    array_push($arrTable, "<td>$val</td>");
                  }
                  array_push($arrTable, "</tr>");
              }
              echo join($arrTable);
?>