<?php

namespace App\Repository;

use App\Client\MarvelClient;

class MarvelHeroRepository
{
    private MarvelClient $client;

    public function __construct(MarvelClient $client)
    {
        $this->client = $client;
    }

    public function getHeroes()
    {
        $response = $this->client->request('GET', '/v1/public/characters');

        return json_decode($response->getBody());
    }
}