<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./voicecup/">Test Voiceup</a>
    <?php
    if ($handle = opendir('.')) {
        $files_name = [];
        while (false !== ($entry = readdir($handle))) {

            if ($entry != "." && $entry != "..") {
                $files_name[] = $entry;
                //echo "<a href=\"$entry\">$entry</a><br>\n";
            }
        }

        closedir($handle);
        sort($files_name);
        if(count($files_name) > 0 ) {
            echo '<ul>';
            foreach($files_name as $file_name) {
                echo "<li><a href=\"./$file_name\">$file_name</a></li>\n";
            }
            echo '</ul>';
        }
        
    }
    ?>
</body>

</html>