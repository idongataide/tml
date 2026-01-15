<?php

class contact extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        if ($this->requestMethod === 'post') {
            $body = $this->getPostData()->post;
            
            if (isset($body->no_of_people)) {
                return $this->sendBooking($body);
            }
            elseif (isset($body->service) && !isset($body->no_of_people)) {
                return $this->sendRequest($body);
            }
            else {
                return $this->sendContact($body);
            }
        }
        $this->loadView('contact');
    }

    private function sendRequest($body) {
        $email = validator::GetInputValueString(@$body, 'email');
        $name = validator::GetInputValueString(@$body, 'name');
        $phone = validator::GetInputValueString(@$body, 'phone');
        $message = validator::GetInputValueString(@$body, 'message');
        $service = validator::GetInputValueString(@$body, 'service');
        
        // Validation for service request
        $validationErrors = [];
        
        if ($name === '' || strlen($name) < 2) {
            $validationErrors[] = 'Valid full name is required (minimum 2 characters)';
        }
        
        if ($phone === '' || strlen($phone) < 6 || strlen($phone) > 16) {
            $validationErrors[] = 'A valid phone number is required (6-16 digits)';
        }
        
        if ($email === '' || !validator::IsEmail($email)) {
            $validationErrors[] = 'A valid email address is required';
        }
        
        if ($message === '' || strlen($message) < 10) {
            $validationErrors[] = 'Message must be at least 10 characters long';
        }
        
        if ($service === '') {
            $validationErrors[] = 'Service type is required';
        }
        
        if (!empty($validationErrors)) {
            return helper::Output_Error(null, implode(', ', $validationErrors));
        }

        $curl = curl_init();

        $data = [
            'service' => $service,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        ];

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://tmlapi.ufainiibom.com/api/service-request/submit',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json'
            ),
        ));

        $response = curl_exec($curl);
        
        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return helper::Output_Error(null, 'Failed to connect to server: ' . $error);
        }
        
        curl_close($curl);
        
        $decodedResponse = json_decode($response, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            return helper::Output_Error(null, 'Invalid response from server');
        }
        
        if (!isset($decodedResponse['status'])) {
            return helper::Output_Error(null, 'Invalid response format from server');
        }
        
        if ($decodedResponse['status'] == 'success') {
            return helper::Output_Success(['alert' => 'alert-success', 'status' => 'success', 'message' => $decodedResponse['message']]);
        } else {
            $errorMessage = isset($decodedResponse['message']) ? $decodedResponse['message'] : 'Unknown error occurred';
            return helper::Output_Error(null, $errorMessage);
        }
    }

    private function sendBooking($body)
    {
        $email = validator::GetInputValueString(@$body, 'email');
        $name = validator::GetInputValueString(@$body, 'name');
        $phone = validator::GetInputValueString(@$body, 'phone');
        $no_of_people = validator::GetInputValueString(@$body, 'no_of_people');
        $booking_address = validator::GetInputValueString(@$body, 'booking_address');
        $destination_address = validator::GetInputValueString(@$body, 'destination_address');
        $date = validator::GetInputValueString(@$body, 'date');
        $service = validator::GetInputValueString(@$body, 'service');
        
        // Validation for booking
        $validationErrors = [];
        
        if ($name === '' || strlen($name) < 2) {
            $validationErrors[] = 'Valid full name is required (minimum 2 characters)';
        }
        
        if ($phone === '' || strlen($phone) < 6 || strlen($phone) > 16) {
            $validationErrors[] = 'A valid phone number is required (6-16 digits)';
        }
        
        if ($email === '' || !validator::IsEmail($email)) {
            $validationErrors[] = 'A valid email address is required';
        }
        
        if ($no_of_people === '' || !is_numeric($no_of_people) || $no_of_people < 1) {
            $validationErrors[] = 'Please enter a valid number of people (minimum 1)';
        }
        
        if ($booking_address === '' || strlen($booking_address) < 5) {
            $validationErrors[] = 'Please provide a valid booking address (minimum 5 characters)';
        }
        
        if ($destination_address === '' || strlen($destination_address) < 5) {
            $validationErrors[] = 'Please provide a valid destination address (minimum 5 characters)';
        }
        
        if ($date === '' || !$this->validateDate($date)) {
            $validationErrors[] = 'Please select a valid date (format: YYYY-MM-DD)';
        }
        
        // Validate future date (optional)
        if ($date !== '' && $this->validateDate($date)) {
            $selectedDate = new DateTime($date);
            $today = new DateTime();
            if ($selectedDate < $today) {
                $validationErrors[] = 'Please select a future date';
            }
        }
        
        if ($service === '') {
            $validationErrors[] = 'Service type is required';
        }
        
        if (!empty($validationErrors)) {
            return helper::Output_Error(null, implode(', ', $validationErrors));
        }

        $curl = curl_init();

        $data = [
            'service' => $service,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'no_of_people' => $no_of_people,
            'booking_address' => $booking_address,
            'destination_address' => $destination_address,
            'date' => $date
        ];
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://tmlapi.ufainiibom.com/api/booking/submit',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json'
            ),
        ));

        $response = curl_exec($curl);
        
        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return helper::Output_Error(null, 'Failed to connect to server: ' . $error);
        }
        
        curl_close($curl);
        
        $decodedResponse = json_decode($response, true);

        
        if (json_last_error() !== JSON_ERROR_NONE) {
            return helper::Output_Error(null, 'Invalid response from server');
        }
        
        if (!isset($decodedResponse['status'])) {
            return helper::Output_Error(null, 'Invalid response format from server');
        }
        
        if ($decodedResponse['status'] == 'success') {
            return helper::Output_Success(['alert' => 'alert-success', 'status' => 'success', 'message' => 'Your booking request has been submitted successfully!']);
        } else {
            $errorMessage = isset($decodedResponse['message']) ? $decodedResponse['message'] : 'Unknown error occurred';
            return helper::Output_Error(null, $errorMessage);
        }
    }
    
    private function validateDate($date, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }
    
    private function sendContact($body) {
        $email = validator::GetInputValueString(@$body, 'email');
        $name = validator::GetInputValueString(@$body, 'name');
        $phone = validator::GetInputValueString(@$body, 'phone');
        $message = validator::GetInputValueString(@$body, 'message');
        $subject = validator::GetInputValueString(@$body, 'subject');
        
        // Validation for contact form
        $validationErrors = [];
        
        if ($name === '' || strlen($name) < 2) {
            $validationErrors[] = 'Valid full name is required (minimum 2 characters)';
        }
        
        if ($phone === '' || strlen($phone) < 6 || strlen($phone) > 16) {
            $validationErrors[] = 'A valid phone number is required (6-16 digits)';
        }
        
        if ($email === '' || !validator::IsEmail($email)) {
            $validationErrors[] = 'A valid email address is required';
        }
        
        if ($message === '' || strlen($message) < 10) {
            $validationErrors[] = 'Message must be at least 10 characters long';
        }
        
        if ($subject === '' || strlen($subject) < 3) {
            $validationErrors[] = 'Subject must be at least 3 characters long';
        }
        
        if (!empty($validationErrors)) {
            return helper::Output_Error(null, implode(', ', $validationErrors));
        }

        $curl = curl_init();

        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'subject' => $subject
        ];

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://tmlapi.ufainiibom.com/api/contact/submit',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json'
            ),
        ));

        $response = curl_exec($curl);
        
        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return helper::Output_Error(null, 'Failed to connect to server: ' . $error);
        }
                
        curl_close($curl);
        
        $decodedResponse = json_decode($response, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            return helper::Output_Error(null, 'Invalid response from server');
        }
        
        if (!isset($decodedResponse['status'])) {
            return helper::Output_Error(null, 'Invalid response format from server');
        }
        
        if ($decodedResponse['status'] == 'success') {
            return helper::Output_Success(['alert' => 'alert-success', 'status' => 'success', 'message' => $decodedResponse['message']]);
        } else {
            $errorMessage = isset($decodedResponse['message']) ? $decodedResponse['message'] : 'Unknown error occurred';
            return helper::Output_Error(null, $errorMessage);
        }
    }
}