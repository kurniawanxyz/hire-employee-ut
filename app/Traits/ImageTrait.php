<?php
namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

trait ImageTrait
{
    public function uploadImage(UploadedFile $file, $folder = "images"):string
    {
        $fileName = 'storage/'. $folder .'/'. $file->hashName();
        $file->store($folder);
        return $fileName;
    }

    /**
     * Menangani penghapusan gambar
     * @param string $path
     * @return void
     */
    public function deleteImage($path):void
    {
       File::delete($path);
    }
}