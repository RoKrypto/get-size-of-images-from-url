<?php
// https://stackoverflow.com/questions/28430115/javascript-get-size-in-bytes-from-html-img-src
// https://stackoverflow.com/questions/6272663/php-how-to-get-web-image-size-in-kb

function getImagesSizes(...$imagesURLs) {
    $imagesSizes = [];

    foreach ($imagesURLs as &$imageURL) {
        $imgHeaders = get_headers($imageURL, true);
        array_push($imagesSizes, [
            'imageURL' => $imageURL,
            'imageSize' => $imgHeaders['Content-Length']
        ]);
    }

    unset($imageURL);

    return $imagesSizes;
}

var_dump(
    getImagesSizes('url1', 'url2')
);