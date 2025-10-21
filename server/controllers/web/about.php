<?php

class about extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['page_title'] = 'About Us';
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tmlapi.ufainiibom.com/api/stories',
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
        
        $data['stories'] = $decodedResponse['data'] ?? [];
        $data['menu_active'] = 'about'; 
        $this->loadView('about-us', @$data);
    }

    public function leadership()
    {
        $data['page_title'] = 'Leadership';
        $data['menu_active'] = 'about'; 
        $this->loadView('leadership', @$data);
    }
    
    public function faq()
    {
        $data['page_title'] = 'Frequently Asked Questions';
        $data['menu_active'] = 'about'; 
        $this->loadView('faqs', @$data);
    }
    
    
    public function leaderships($id)
    {
        $leaders = [
            
            1 => [
                'title' => 'Jamil Malik',
                'sub_title' => 'Chief Operating Officer (COO)',
                'p_1' => "Jamil Malik is a seasoned professional with over 27 years of experience in the global passenger mobility industry. Having held executive positions across Europe, the Middle East, and Africa, he has a proven track record of driving strategic growth and operational excellence. Jamil possesses an unparalleled ability to navigate complex business environments, optimize resources, and deliver exceptional results.",
                'p_2' => "His expertise lies in leading teams through transformative change, from startup ventures to established enterprises. Jamil has previously served as the CEO of KGL Passenger Transport Services in Kuwait, COO of City Group Co. in Kuwait, Group Commercial Director of MYN Group in Saudi Arabia, and Operations Director of First Group in the UK.",
                'p_3' => "Jamil has consistently demonstrated a keen ability to drive operational excellence and growth, successfully navigating diverse markets and business environments to achieve outstanding results."
            ],
            
            2 => [
                'title' => 'Femi Sholeye, FCA',
                'sub_title' => 'Chief Financial Officer (CFO)',
                'p_1' => "Femi Sholeye is a distinguished financial leader with 16 years of professional experience, specializing in the Nigerian transport management sector. He holds an MBA in Finance from the University of Lagos, a B.Sc. in Accounting from Olabisi Onabanjo University, and is a Fellow member of the Institute of Chartered Accountants of Nigeria (FCA).",
                'p_2' => "Femi possesses deep expertise in financial analysis, project pricing, and international reporting standards. His career spans across both the transport and banking sectors. He is a two-time recipient of the prestigious TSL Extra Mile Award, recognizing his dedication to exceeding expectations and driving exceptional financial performance.",
                'p_3' => "As CFO of TSL Metroline, Femi continues to lead the company's financial strategy, ensuring sustainable growth and positioning the company for long-term success."
            ],
            
            3 => [
                'title' => 'Olusola Iwasanmi',
                'sub_title' => 'Head, Commercial & Business Intelligence',
                'p_1' => "Olusola Iwasanmi is a dynamic leader with over 16 years of professional experience in enterprise risk management, strategic growth initiatives, and business management within the Nigerian transport industry. He holds a Master's in Business Administration, Balanced Scorecard Professional (BSP) from Lausanne Business School, Switzerland, and a B.Sc. in Accounting from the University of Lagos, Nigeria. He is also an Associate member of the Institute of Chartered Accountants of Nigeria (ACA) and a Balanced  Scorecard Professional (BSP).",
                'p_2' => "As the Head of Commercial & Business Intelligence, Olusola leads a team that delivers exceptional results through data-driven insights and innovative commercial strategies. His leadership is instrumental in driving growth and supporting informed decision-making at TSL Metroline.",
                'p_3' => "Olusola’s ability to translate complex data into actionable business strategies has made him a key player in steering the company toward greater success."
            ],
            
            4 => [
                'title' => 'Olalekan Olagunju',
                'sub_title' => 'Head, Safety, Security & Quality',
                'p_1' => "Olalekan Olagunju is a seasoned Occupational health, safety, and security expert with over 17 years of professional experience in the Nigerian transport sector. He holds a master’s degree in environmental management (MEM) and a B. Tech in Pure and Applied Chemistry from Ladoke Akintola University of Technology. He has professional qualification in NEBOSH International Diploma for Occupational Health and Safety Management, 2014.",
                'p_2' => "He also holds Certified Protection Professional (CPP) certificate by American Society of Industrial Security (ASIS) 2017. Lekan has successfully implemented robust safety programs and procedures within the Nigerian transport sector, ensuring operational excellence and compliance with safety regulations.",
                'p_3' => "Olalekan is committed to risk mitigation and the continual promotion of operational safety and quality. As the Head of Safety, Security & Quality, Olalekan works diligently to foster a culture of safety and security across TSL Metroline's operations, ensuring the company maintains the highest standards in all aspects of safety."
            ],
            
            5 => [
                'title' => 'Olusegun Adeyemo',
                'sub_title' => 'Head, Drivers’ Administration',
                'p_1' => "Olusegun Adeyemo is a dedicated leader with over 17 years of professional experience in driver coordination and management. He holds a B.Ed. in Health Education from the University of Ibadan, Nigeria, and Master's in Business Administration from Malaysia University of Science and Technology, and is a certified Global Business Strategist from the Metropolitan School of Business and Management (UK).",
                'p_2' => "Olusegun has a profound understanding of the transport industry and is committed to delivering excellent leadership within the Drivers’ Administration Unit at TSL Metroline. He oversees driver operations, training, and support to improve drivers' technical and intellectual capacities while promoting productivity and professionalism.",
                'p_3' => "Through his leadership, Olusegun ensures that TSL Metroline maintains a professional and efficient workforce, providing excellent service delivery to clients and upholding safety standards."
            ],
            
            6 => [
                'title' => 'Emem Ogheneochuko',
                'sub_title' => 'Head, Human Resources & Admin',
                'p_1' => "Emem Ogheneochuko is a strategic HR leader with over 10 years of experience in talent management and organizational development. She holds an M.Sc. in Organizational Behavior from the University of Lagos, Nigeria, and a B.Sc. in Business Administration from the University of Lagos.",
                'p_2' => "Her expertise spans across people and project management, with a strong focus on tackling complex challenges in talent acquisition, company culture, and employee skill development. Emem is skilled in navigating complex situations and driving long-term solutions for organizational growth.",
                'p_3' => "As the Head of Human Resources & Admin at TSL Metroline, Emem plays a key role in shaping the company’s workforce, ensuring that the company attracts, retains, and develops the best talent to meet its strategic goals."
            ]


        ];
    
        $data['lead'] = $leaders[$id];
        $this->loadView('details', @$data);
    }



    public function videos()
    {
        $data['page_title'] = 'videos';
        $this->loadView('videos', @$data);
    }

    public function gallery()
    {
        $data['page_title'] = 'Gallery';
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tls.lifevantagenigeria.com/api/images',
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
        
        $data['gallery'] = $decodedResponse['data'] ?? [];
        $this->loadView('gallery', @$data);
    }

}
