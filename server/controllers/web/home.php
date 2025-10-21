<?php

class home extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {    
        $data['page_title'] = 'TML - Transport Company';
        $data['menu_active'] = 'index';
        $data['latest'] = $this->latestnews();
        $data['menu_active'] = 'home'; 
        $this->renderView('index', @$data);
    }

    private function latestnews()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tml.lifevantagenigeria.com/api/latest-news',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
                // 'Cache-Control: no-cache',
            ],
    
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);
    
        $response = curl_exec($curl);
        curl_close($curl);
        $decodedResponse = json_decode($response, true);
        
        return $decodedResponse['data'] ?? [];
    }
}
