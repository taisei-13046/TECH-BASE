<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            // ディレクトリに関する処理
            if(isset($_GET['dir'])&&$_GET['dir']!=''){
                $parent = $_GET['dir'];
                $dirs = scandir($_GET['dir']);
            }else{
                $parent = '../';
                $dirs = scandir('../');
            }
            // fileを除去する
            $dirs_length = count($dirs);
            for($i=0;$i<$dirs_length;$i++){
                if(!is_dir($parent.$dirs[$i])){
                    unset($dirs[$i]);
                }else if($dirs[$i]=='..'){
                    unset($dirs[$i]);
                }else if($parent=='../'&&$dirs[$i]=='.'){
                    unset($dirs[$i]);
                }else if($parent=='../'&&$dirs[$i]=='Editor'){
                    unset($dirs[$i]);
                }
            }
            $dirs = array_values($dirs);
            $list = array();

            // 次のパスを生成する
            foreach($dirs as $dir){
                if($dir=='.'){
                    $grand_parent = '';
                    $path=explode('/',$parent);
                    for($i=0;$i<count($path)-2;$i++){
                        $grand_parent.=$path[$i].'/';
                    }
                    array_push($list, array(
                        "name"=>$dir,
                        "path"=>$grand_parent
                    ));
                }else{
                    array_push($list, array(
                        "name"=>$dir,
                        "path"=>$parent.$dir.'/'
                    ));
                }
            }
        ?>
        <?php
            // ファイルに関する処理
            if(isset($_GET['dir'])&&$_GET['dir']!=''){
                $parent = $_GET['dir'];
                $files = scandir($_GET['dir']);
            }else{
                $parent = '../';
                $files = scandir('../');
            }
            
            // directoryを除去する
            $files_length = count($files);
            for($i=0;$i<$files_length;$i++){
                if(is_dir($parent.$files[$i])){
                    unset($files[$i]);
                }
            }
            $files = array_values($files);
        ?>
        <form action="" method="get">
            ディレクトリ一覧
            <select name="dir">
                <?php
                    foreach($list as $item){
                        echo "<option value=".$item['path'].">".$item['name']."</option>"; // 選択肢
                    }
                ?>
            </select>
            <input type="submit">
        </form>
        <form>
            ファイル一覧
            <select name="file">
            <?php
                foreach($files as $file){
                    if(isset($_GET["file"])&&$file==$_GET["file"]){
                        echo "<option selected value=".$file.">".$file."</option>"; // 選択肢                       
                    }else{
                        echo "<option value=".$file.">".$file."</option>"; // 選択肢
                    }
                }
                ?>
            </select>
            <input type="hidden" name="dir" value="<?php if(isset($_GET["dir"])&&$_GET["dir"]!=""){echo $_GET["dir"];}?>"> 
            <input type="submit">
        </form>
        <?php
            if(isset($_GET["file"])&&$_GET["file"]!=''){
                $filename = $_GET["file"];
                $path = $parent.$filename;
                $extension=pathinfo($path,PATHINFO_EXTENSION);
                if($extension=='png'){
                    echo "<img src=$path>";
                }else if($extension=='jpg'){
                    echo "<img src=$path>";
                }else if($extension=='gif'){
                    echo "<img src=$path>";
                }else if($extension=='bmp'){
                    echo "<img src=$path>";
                }else if($extension=='pdf'){
                    echo "<embed width='100%' height='100%' src=$path type='application/pdf'>";
                }else{
                    show_source($parent.$filename); // ソースコードを表示する関数
                }
            }
        ?>
    </body>
</html>