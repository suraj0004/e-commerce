<?php
use Illuminate\Support\Facades\Storage;
// use ImageIntervention;

function generateRandomString($length = 5)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return time() . '_' . $randomString;
}

function saveDynamicImage($image)
{
    $imageName = generateRandomString() . '.' . $image->extension();
    $image = ImageIntervention::make($image);
    $image->resize(400, 400);
    Storage::disk('dynamic_images')->put($imageName, $image->encode());
    return $imageName;
}

function deleteDynamicImage($image)
{
    if (Storage::disk('dynamic_images')->exists($image)) {
        Storage::disk('dynamic_images')->delete($image);
    }
}
