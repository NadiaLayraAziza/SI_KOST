<?php

namespace App\Models;

use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use DB;

class Oracle
{
        private String $endpoint = 'https://objectstorage.ap-sydney-1.oraclecloud.com/p/EJhLrzeswhrKxVpWuHUoWV8xQ90e7Qdy8XSDbDYDNssM0SpKnOgOBXy2l_TmyaIU/n/sdy9gcem5ezl/b/bucket-kost/o/';
        private String $access_key = 'd1b4ba12ce7c231b40c668fee62761060f75ab17';
        private String $secret_key = 'CfAXtg3PVQxTTJC2PTvhYho+LkEMjDBW++SBwmkZLPQ=';
        private String $region = 'ap-sydney-1';

        public function prepare()
        {
                return new S3Client([
                        'region' => $this->region,
                        'version' => 'latest',
                        'credentials' => [
                                            'key' => $this->access_key,
                                            'secret' => $this->secret_key,
                        ],
                        'bucket_endpoint' => true,
                        'endpoint' => $this->endpoint
                ]);
        }

        public function uploadObject($file, $folder)
        {
                try {
                        $key_name = $file-> getClientOriginalName();

                        $conf = $this->prepare();
                        $result = $conf->putObject([
                                'Bucket' => $folder,
                                'Key' => $key_name,
                                'SourceFile' => $file,
                        ]);

                        $url = 'https://objectstorage.ap-sydney-1.oraclecloud.com/p/EJhLrzeswhrKxVpWuHUoWV8xQ90e7Qdy8XSDbDYDNssM0SpKnOgOBXy2l_TmyaIU/n/sdy9gcem5ezl/b/bucket-kost/o/'.$folder.'/'.$key_name;
                        return $url;
                }catch (S3Exception $e) {
                        return $e->getMessage() . '/n';
                }
        }
}
