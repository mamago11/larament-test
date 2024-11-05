<?php

    namespace App\Services\BaselinkerApi;

    use App\Services\BaselinkerApi\Exceptions\BaselinkerApiException;
    use Illuminate\Http\Client\ConnectionException;
    use Illuminate\Support\Facades\Http;

    class BaselinkerApiClient
    {
        protected $baseUrl;

        protected $apiKey;

        public function __construct()
        {
            $this->baseUrl = 'https://api.baselinker.com/connector.php';
            $this->apiKey = config('services.baselinker.api_key');
        }

        /**
         * Send a request to the BaseLinker API.
         *
         * @throws BaseLinkerApiException
         * @throws ConnectionException
         */
        public function sendRequest(string $method, array $parameters = []):array
        {
            $response = Http::withHeaders([
                'X-BLToken' => $this->apiKey,
            ])->asForm()->post($this->baseUrl, [
                'method' => $method,
                'parameters' => json_encode($parameters),
            ]);

            if ($response->successful()) {
                $data = $response->json();

                if ($data['status'] === 'SUCCESS') {
                    return $data;
                } else {
                    throw new BaseLinkerApiException($data['error_message']);
                }
            }

            throw new BaseLinkerApiException('Failed to connect to BaseLinker API.');
        }

        public function getOrders(array $parameters):array
        {
            return $this->sendRequest('getOrders', $parameters);
        }
    }
