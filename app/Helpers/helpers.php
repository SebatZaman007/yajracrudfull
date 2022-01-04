<?php

use Intervention\Image\Facades\Image;

if(!function_exists('fileUpload'))

{
    function fileUpload($new_file, $path, $old_file_name = null, $width = null, $height = null)
    {
        if (!file_exists(public_path($path))) {
            mkdir(public_path($path), 0777, true);
        }
        $file_name = time() . '_' . $new_file->getClientOriginalName();
        $destinationPath = $path;

        $url = asset($path);
        $old_file_path = str_replace($url . '/', '', $old_file_name);

        if (isset($old_file_name) && $old_file_name != "" && file_exists($path . $old_file_path)) {
            unlink($path . $old_file_path);
        }
        if ($height || $width) {

            $imageResize = Image::make($new_file)
                ->resize($width, $height)
                ->save($destinationPath . $file_name);
        } else {
            $new_file->move($destinationPath, $file_name);
        }
        return $file_name;
    }
}


if(!function_exists('BlogImage'))
{
    function BlogImage()
    {
        return 'upload_images/';
    }
}
