<?php
use Cloudinary\Configuration\Configuration;

// configure globally via a JSON object

return [
    Configuration::instance([
        'cloud' => [
          'cloud_name' => env('CLOUDINARY_CLOUD_NAME'), 
          'api_key' => env('CLOUDINARY_API_KEY'), 
          'api_secret' => env('CLOUDINARY_API_SECRET')],
        'url' => [
          'secure' => true]])
];
