<?php

use Illuminate\Database\Seeder;
use App\City;
use App\Prefecture;

class Area_cityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefecture = Prefecture::create([
            "name" => "埼玉県"
            ]);
        $client = new \GuzzleHttp\Client();
        $url = 'https://opendata.resas-portal.go.jp/api/v1/cities?prefCode=11';
        
        $response = $client->request(
            'GET',
            $url,
            ['headers' => [
                'X-API-KEY' => config('services.resas.key'),
            ],
        ]);
        $area_cities = json_decode($response->getBody(), true);
        foreach ($area_cities["result"] as $city){
            City::create([
                'name'=> $city["cityName"],
                'prefecture_id' => $prefecture -> id
            ]);
        };
        
        
        
        $prefecture = Prefecture::create([
            "name" => "千葉県"
            ]);
        $client = new \GuzzleHttp\Client();
        $url = 'https://opendata.resas-portal.go.jp/api/v1/cities?prefCode=12';
        
        $response = $client->request(
            'GET',
            $url,
            ['headers' => [
                'X-API-KEY' => config('services.resas.key'),
            ],
        ]);
        $area_cities = json_decode($response->getBody(), true);
        foreach ($area_cities["result"] as $city){
            City::create([
                'name'=> $city["cityName"],
                'prefecture_id' => $prefecture -> id
            ]);
        };
        
        
        
        $prefecture = Prefecture::create([
            "name" => "東京都"
            ]);
        $client = new \GuzzleHttp\Client();
        $url = 'https://opendata.resas-portal.go.jp/api/v1/cities?prefCode=13';
        
        $response = $client->request(
            'GET',
            $url,
            ['headers' => [
                'X-API-KEY' => config('services.resas.key'),
            ],
        ]);
        $area_cities = json_decode($response->getBody(), true);
        foreach ($area_cities["result"] as $city){
            City::create([
                'name'=> $city["cityName"],
                'prefecture_id' => $prefecture -> id
            ]);
        };
        
        
        
        $prefecture = Prefecture::create([
            "name" => "神奈川県"
            ]);
        $client = new \GuzzleHttp\Client();
        $url = 'https://opendata.resas-portal.go.jp/api/v1/cities?prefCode=14';
        
        $response = $client->request(
            'GET',
            $url,
            ['headers' => [
                'X-API-KEY' => config('services.resas.key'),
            ],
        ]);
        $area_cities = json_decode($response->getBody(), true);
        foreach ($area_cities["result"] as $city){
            City::create([
                'name'=> $city["cityName"],
                'prefecture_id' => $prefecture -> id
            ]);
        };
        
    }
}
