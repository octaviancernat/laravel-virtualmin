<?php

namespace TheApp\Virtualmin;

class Virtualmin
{

    private array $config;


    public function __construct(array $config)
    {
        $this->config = $config;
    }


    public function checkConnection(): bool|string
    {
        $hostname = $this->config['hostname'];
        $username = $this->config['username'] ?? 'root';
        $password = $this->config['password'];
        $port = $this->config['port'] ?? '10000';

        $url = "https://$hostname/virtual-server/remote.cgi?json=1";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_PORT, $port);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Basic ' . base64_encode($username . ':' . $password),
        ]);

        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 1800);
        curl_setopt($ch, CURLOPT_VERBOSE, true);

        return curl_exec($ch);
    }
}
