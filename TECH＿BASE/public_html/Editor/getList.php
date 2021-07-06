<?php


function getPath($path){
            $list = scandir($path);
            $dir = array(); $length = count($list);
            for($i=0; $i<$length; $i++){
            if($list[$i] != '.' && $list[$i] != '..'){
            if($list[$i]=='Editor'){continue;}
            if($list[$i]=='debug.log'){continue;}
            if(is_dir($path.'/'.$list[$i])){
            if(null != ($a = getPath($path.'/'.$list[$i]))){
                // 子を持つフォルダ
                array_push($dir, array(
                    "name"=>$list[$i],
                    "path"=>"$path/$list[$i]",
                    "type"=>"folder",
                    "children"=>$a));
            }else{
                // 子を持たないフォルダ
                array_push($dir, array(
                    "name"=>$list[$i],
                    "type"=>"folder",
                    "path"=>"$path/$list[$i]"));
            }
            }else{
                // ファイル
                array_push($dir, array(
                    "name"=>$list[$i],
                    "type"=>pathinfo($list[$i], PATHINFO_EXTENSION),
                    "path"=>$path.'/'.$list[$i]));
            }
            }
            }
            return $dir;
        }
        // $id = $request->input('data')['id'];
        $mydir = getPath("..");
        http_response_code(200);
        echo json_encode($mydir,JSON_UNESCAPED_UNICODE|JSON_INVALID_UTF8_SUBSTITUTE);
?>