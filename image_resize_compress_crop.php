<?php

function resize_image($file, $w, $h, $crop = false)
{
    $file = file_get_contents($file);

    $src = imagecreatefromstring($file);
    if (!$src) {
        return false;
    }

    $width = imagesx($src);
    $height = imagesy($src);

    $r = $width / $height;
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width - ($width * abs($r - $w / $h)));
        } else {
            $height = ceil($height - ($height * abs($r - $w / $h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w / $h > $r) {
            $newwidth = $h * $r;
            $newheight = $h;
        } else {
            $newheight = $w / $r;
            $newwidth = $w;
        }
    }
    //$src = imagecreatefrompng($file);
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    // Buffering
    ob_start();
    imagepng($dst);
    $data = ob_get_contents();
    ob_end_clean();
    // return $data;
    return 'data:image/jpeg;base64,' . base64_encode($data);
}

?>
<!-- ? /compresses/resized -->
<img src="<?php echo resize_image('img.png', 300, 300); ?>" alt="Faster Review" >

<!--? /simple -->
 <img src="img.png" alt="" srcset="">
