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

function moneyFormatIndia($num) {
    $explrestunits = "" ;
    if(strlen($num)>3) {
        $lastthree = substr($num, strlen($num)-3, strlen($num));
        $restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
        $restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
        $expunit = str_split($restunits, 2);
        for($i=0; $i<sizeof($expunit); $i++) {
            // creates each of the 2's group and adds a comma to the end
            if($i==0) {
                $explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
            } else {
                $explrestunits .= $expunit[$i].",";
            }
        }
        $thecash = $explrestunits.$lastthree;
    } else {
        $thecash = $num;
    }
    return $thecash; // writes the final format where $currency is the currency symbol.
}

function getImageUrl(string $image_name)
{
    return Storage::disk('dynamic_images')->url($image_name);
}
