<?php
if (!isset($_SESSION))
    session_start();

class Http
{
    private $baseUrl = "";
    private $headers = "";

    public function __construct()
    {
        $this->baseUrl = "https://api.globalhrconsulting.org:8089/api/";
        $this->headers = array();
    }

    public function ShortenTxt($string,$length)
    {
        if (strlen($string) > $length) {
            $stringCut = substr($string, 0, $length); // change 15 top what ever text length you want to show.
            $endPoint = strrpos($stringCut, ' ');
            $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '...';
        }
        return $string;
    }

    /**
     * Post URL
     */
    public function GetToken()
    {
        if (isset($_SESSION['token'])) {
            return $_SESSION['token'];
        } else {
            $token = $this->PostData("jwt/token/", array("username" => "tunde", "password" => "tunde"), false);
            if (isset($token['access'])) {
                $_SESSION['token'] = $token;
                return $token['access'];
            } else {
                return "";
            }
        }
    }

    /**
     * Post URL
     */
    public function PostData($url, $data, $header = false)
    {
        $curl = curl_init();

        $headers = array(
            // 'Content-Type: application/json'
        );
        
        if ($header == true) {
            $token = $this->GetToken();
            $headers[1] = "Authorization: Bearer " . $_SESSION['token']['access'];
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->baseUrl . $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $headers,
        ));

        if(curl_exec($curl) === false)
            return json_encode(array("code" => 400, "message" => ""));

        $response = curl_exec($curl);
        if ($response === false) {
            return json_encode(array("code" => 400, "message" => ""));
        } else {
            return json_decode($response, TRUE);
        }

        curl_close($curl);
    }

    /**
     * Post URL
     */
    public function PostsData($url, $data, $header = false)
    {
        $data=$this->PostsDataHttp($url, $data, $header);
        if($data=="callagain"){
            $data=$this->PostsDataHttp($url, $data, $header);
        }

        return $data;
    }
    public function PostsDataHttp($url, $data, $header = false)
    {
        
        $curl = curl_init();

        $headers = array(
            // 'Content-Type: application/json'
        );
        
        if ($header == true) {
            $token = $this->GetToken();
            $headers[1] = "Authorization: Bearer " . $_SESSION['token']['access'];
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->baseUrl . $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $headers,
        ));

        $response = curl_exec($curl);
        if ($response === false) {
            return json_encode(array("code" => 400, "message" => ""));
        } else {
            return array("code"=>curl_getinfo($curl, CURLINFO_HTTP_CODE),"message"=>json_decode($response, TRUE));
        }

        curl_close($curl);
    }

    public function PatchData($url, $data, $header = false)
    {
        $result=$this->PatchDataHttp($url, $data, $header);
        // print_r($result);
        if($result=="callagain"){
            $result=$this->PatchDataHttp($url, $data, $header);
        }

        return $result;
    }
    public function PatchDataHttp($url, $data, $header = false)
    {
        $curl = curl_init();

        $token = $this->GetToken();
        $headers = array(
            // 'Content-Type: application/json'
        );
        // if ($header == true) {
        //     $headers[1] = "user-id: " . $_SESSION['token']['id'];
        //     $headers[2] = "access-token: " . $_SESSION['token']['access_token'];
        // }
        $headers[1] = "Authorization: Bearer " . $_SESSION['token']['access'];

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->baseUrl . $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PATCH',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $headers,
        ));

        $response = curl_exec($curl);
        // print_r($url);
        // print_r($data);
        // print_r($response);

        if ($response === false) {
            return json_encode(array("code" => 400, "message" => ""));
        } else {
            $resp = array("code"=>curl_getinfo($curl, CURLINFO_HTTP_CODE),"message"=>json_decode($response, TRUE));
            // $resp = json_decode($response, TRUE);
            if (isset($resp['code'])) {
                if ($resp['code'] == "token_not_valid" || $resp['code']==401) {
                    unset($_SESSION['token']);
                    $this->GetToken();
                    return "callagain";
                } else
                    return $resp;
            } else
                return $resp;
        }

        curl_close($curl);
    }

    /**
     * Get URL
     */
    public function GetData($url, $header = false)
    {
        $data=$this->GetDataHttp($url, $header);
        if($data=="callagain"){
            $data=$this->GetDataHttp($url, $header);
        }

        return $data;
    }
    public function GetDataHttp($url, $header = false)
    {
        $curl = curl_init();

        $token = $this->GetToken();
        $headers = array(
            'Content-Type: application/json'
        );

        // if($header==true){
        //     $headers[1]="user-id: ".$_SESSION['token']['id'];
        //     $headers[2]="access-token: ".$_SESSION['token']['access_token'];
        // }
        $headers[1] = "Authorization: Bearer " . $_SESSION['token']['access'];

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->baseUrl . $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => $headers
        ));

        $response = curl_exec($curl);

        if ($response === false) {
            return json_encode(array("code" => 400, "message" => ""));
        } else {
            $resp = json_decode($response, TRUE);
            if (isset($resp['code'])) {
                if ($resp['code'] == "token_not_valid") {
                    unset($_SESSION['token']);
                    $this->GetToken();
                    return "callagain";
                } else
                    return $resp;
            } else
                return $resp;
        }

        curl_close($curl);
    }

    /**
     * Put URL
     */
    public function PutData($url, $data, $header = false)
    {
        $curl = curl_init();

        $headers = array(
            'Content-Type: application/json'
        );
        if ($header == true) {
            $headers = array(
                'Content-Type: application/json',
                'user-id: ' . $_SESSION['id'],
                'access-token: ' . $_SESSION['access_token']
            );
        }
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->baseUrl . $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => $header
        ));

        $response = curl_exec($curl);

        if ($response === false) {
            return json_encode(array("code" => 400, "message" => ""));
        } else {
            return json_decode($response, TRUE);
        }

        curl_close($curl);
    }

    /**
     * Delete URL
     */
    public function DeleteData($url, $header = false)
    {
        $data=$this->DeleteDataHttp($url, $header);
        if($data=="callagain"){
            $data=$this->DeleteDataHttp($url, $header);
        }

        return $data;
    }
    public function DeleteDataHttp($url, $data, $header = false)
    {
        $curl = curl_init();
        $headers = array(
            'Content-Type: application/json'
        );
        // if ($header == true) {
        //     $headers = array(
        //         'Content-Type: application/json',
        //         'user-id: ' . $_SESSION['id'],
        //         'access-token: ' . $_SESSION['access_token']
        //     );
        // }
        $headers[1] = "Authorization: Bearer " . $_SESSION['token']['access'];

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->baseUrl . $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => $headers
        ));

        $response = curl_exec($curl);

        if ($response === false) {
            return json_encode(array("code" => 400, "message" => ""));
        } else {
            return json_decode($response, TRUE);
        }

        curl_close($curl);
    }

    public function PasswordHash($password)
    {
        return hash('sha256', sha1(md5($_POST['password'])));
    }
}