<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends \App\Http\Controllers\Controller
{

    protected $output;
    protected $input;

    /*
     * Resize function.
     * @param string filename
     * @param string sizeString
     *
     * @return blob image contents.
     */
    public function resize($filename, $height, $width, $fit)
    {

        // We can read the output path from our configuration file.
        $outputDir = 'user-uploads/';

        $fileArray = explode('/', $filename);

        $image = $fileArray[count($fileArray) - 1];
        $imageArray = explode('.', $image);
        $imageName = $imageArray[0];
        $extension = $imageArray[1];

        array_pop($fileArray);

        $dirString = implode('/', $fileArray);
        $outputDir .= $dirString;

        // Create an output file path from the size and the filename.
        $outputFile = $outputDir . '/' . $imageName . '_' . $width . 'x' . $height . '.' . $extension;

        $this->output = $outputFile;

        $inputFile = 'user-uploads/' . $filename;

        $this->input = $inputFile;

        // If the resized file already exists we will just return it.

        if (File::isFile($outputFile)) {
            return File::get($outputFile);
        }
        // File doesn't exist yet, so we will resize the original.

        $width = ($width == 0) ? null : $width;
        $height = ($width == 0) ? null : $height;

        $img = Image::make($inputFile);

        if ($fit == true) {
            $img->fit($width, $height, function ($constraint) {
                $constraint->upsize();
            }, 'center');
        } else {
            if ($height != null && $width != null) {
                $img->resize($width, $height, function ($constraint) {
                    $constraint->upsize();
                });
            }

            if ($height != null) {
                $img->resize(null, $height, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }

            if ($width != null) {
                $img->resize($width, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }
        }

        $img->save($outputFile, 60);

        // Return the resized file.
        return File::get($outputFile);

    }

    /**
     * @param string $filename
     * @return string mimetype
     */
    public function getMimeType()
    {

        // Get the file mimetype using the Symfony File class.
        $file = new \Symfony\Component\HttpFoundation\File\File($this->input);

        return $file->getMimeType();
    }

}
