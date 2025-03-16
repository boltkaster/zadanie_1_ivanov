<?php
function getBannerText($imageName) {
    $jsonStr = file_get_contents('data/data.json');
    $data = json_decode($jsonStr, true);
    return $data['text_banner'][$imageName] ?? 'Default Text';
}
?>