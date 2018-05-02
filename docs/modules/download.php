<?php
 
// place this code inside a php file and call it f.e. "download.php"
$path = $_SERVER['DOCUMENT_ROOT']."/course_materials/"; // change the path to fit your websites document structure
$fullPath = $path.$_GET['download_file'];
 
if ($fd = fopen ($fullPath, "r")) {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) {
        case "pdf":
        header("Content-type: application/pdf"); 
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download
        break;
        default; // Other document formats (doc, docx, odt, ods etc)
        header('Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
    }
    header("Content-length: $fsize");
    header("Cache-control: private"); //use this to open files directly
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);
exit;
// example: place this kind of link into the document where the file download is offered:
// <a href="download.php?download_file=nhanes13-14_abridged.txt">Download here</a>
?>