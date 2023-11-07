<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('imageHandler')) {
    function imageHandler($arr, $locate, $prev = "", $iName = "photo")
    {
        $exts = [
            "jpg", "png", "PNG", "jpeg", 'jfif'
        ];

        if (count($arr) != 0 && $arr[$iName]['name'] != "") {
            $image = $arr[$iName]['name'];
            $str = explode(".", $image);
            $stat = false;
            $flare = explode(".", $image);

            foreach ($exts as $ext) {
                if ($flare[count($flare) - 1] == $ext) {
                    $stat = true;
                }
            }

            if ($stat == true) {
                move_uploaded_file($arr[$iName]['tmp_name'], 'assets/img/' . $locate . '/' . $image);
            } else {
                echo "<script>
                    alert('Mohon untuk memasukkan gambar yang benar');
                    history.go(-1);
                </script>";
            }
        } else {
            $image = "default.jpg";

            if ($prev != "") {
                $image = $prev;
            }
        }

        return $image;
    }
}
