<?php

namespace App\Client;

use GuzzleHttp\Client;

class MarvelClient extends Client
{
    public function __construct()
    {
        $timestamp = time();
        $hash = md5(sprintf('%s%s%s', $timestamp, $_ENV['MARVEL_PRIVATE_API_KEY'], $_ENV['MARVEL_PUBLIC_API_KEY']));

        parent::__construct([
            'base_uri' => 'https://gateway.marvel.com',
            'query' => [
                'ts' => $timestamp,
                'apikey' => $_ENV['MARVEL_PUBLIC_API_KEY'],
                'hash' => $hash,
            ],
        ]);
    }
}
