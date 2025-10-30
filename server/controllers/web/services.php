<?php

class services extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = 'Services';
        $data['menu_active'] = 'services'; 
        $this->loadView('services', @$data);
    }

    public function bus_charter()
    {
        $data['page_title'] = 'Bus Charter Services';
        $data['type'] = 'service';
        $data['service'] = 'bus charter';
        $data['menu_active'] = 'services'; 
        $this->loadView('services/bus_charter', @$data);
    }

    public function intercity_services()
    {
        $data['page_title'] = 'Inter City Services';
        $data['type'] = 'service';
        $data['service'] = 'intercity services';
        $data['menu_active'] = 'services'; 
        $this->loadView('services/intercity_services', @$data);
    }


    public function urban_mass()
    {
        $data['page_title'] = 'Urban Mass Transit';
        $data['type'] = 'service';
        $data['service'] = 'urban mass transit';
        $data['menu_active'] = 'services'; 
        $this->loadView('services/urban_mass', @$data);
    }

    public function regional_bus()
    {
        $data['page_title'] = 'Regional Coach Services';
        $data['type'] = 'service';
        $data['service'] = 'regional coach services';
        $data['menu_active'] = 'services'; 
        $this->loadView('services/regional_bus', @$data);
    }
    
}
