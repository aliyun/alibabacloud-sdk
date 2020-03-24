<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191219;

use AlibabaCloud\Credentials\Credential;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\ClassifyVehicleInsuranceAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\ClassifyVehicleInsuranceRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\ClassifyVehicleInsuranceResponse;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\Config;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectMainBodyAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectMainBodyRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectMainBodyResponse;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectObjectAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectObjectRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectObjectResponse;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectTransparentImageAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectTransparentImageRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectTransparentImageResponse;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectVehicleAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectVehicleRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectVehicleResponse;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectWhiteBaseImageAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectWhiteBaseImageRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\DetectWhiteBaseImageResponse;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\RecognizeVehicleDamageAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\RecognizeVehicleDamageRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\RecognizeVehicleDamageResponse;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\RecognizeVehicleDashboardAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\RecognizeVehicleDashboardRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\RecognizeVehicleDashboardResponse;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\RecognizeVehiclePartsAdvanceRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\RecognizeVehiclePartsRequest;
use AlibabaCloud\SDK\Objectdet\V20191219\Objectdet\RecognizeVehiclePartsResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\Tea\Model;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Objectdet
{
    protected $_name = [];

    private $_endpoint;

    private $_regionId;

    private $_protocol;

    private $_userAgent;

    private $_endpointType;

    private $_readTimeout;

    private $_connectTimeout;

    private $_httpProxy;

    private $_httpsProxy;

    private $_socks5Proxy;

    private $_socks5NetWork;

    private $_noProxy;

    private $_maxIdleConns;

    private $_openPlatformEndpoint;

    private $_credential;

    public function __construct(Config $config)
    {
        if (Utils::isUnset($config)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config' can not be unset",
            ]);
        }
        if (Utils::_empty($config->regionId)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config.regionId' can not be empty",
            ]);
        }
        if (Utils::_empty($config->endpoint)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config.endpoint' can not be empty",
            ]);
        }
        if (Utils::_empty($config->type)) {
            $config->type = 'access_key';
        }
        $credentialConfig = new \AlibabaCloud\Credentials\Credential\Config([
            'accessKeyId'     => $config->accessKeyId,
            'type'            => $config->type,
            'accessKeySecret' => $config->accessKeySecret,
            'securityToken'   => $config->securityToken,
        ]);
        $this->_credential           = new Credential($credentialConfig);
        $this->_endpoint             = $config->endpoint;
        $this->_protocol             = $config->protocol;
        $this->_regionId             = $config->regionId;
        $this->_userAgent            = $config->userAgent;
        $this->_readTimeout          = $config->readTimeout;
        $this->_connectTimeout       = $config->connectTimeout;
        $this->_httpProxy            = $config->httpProxy;
        $this->_httpsProxy           = $config->httpsProxy;
        $this->_noProxy              = $config->noProxy;
        $this->_socks5Proxy          = $config->socks5Proxy;
        $this->_socks5NetWork        = $config->socks5NetWork;
        $this->_maxIdleConns         = $config->maxIdleConns;
        $this->_endpointType         = $config->endpointType;
        $this->_openPlatformEndpoint = $config->openPlatformEndpoint;
    }

    /**
     * @param string $action
     * @param string $protocol
     * @param string $method
     * @param string $authType
     * @param object $query
     * @param object $body
     *
     * @throws \Exception
     *
     * @return array|object
     */
    public function _request($action, $protocol, $method, $authType, $query, $body, RuntimeOptions $runtime)
    {
        $runtime->validate();
        $_runtime = [
            'timeouted'      => 'retry',
            'readTimeout'    => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            'connectTimeout' => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            'httpProxy'      => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            'httpsProxy'     => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            'noProxy'        => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            'maxIdleConns'   => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            'retry'          => [
                'retryable'   => $runtime->autoretry,
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 3),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 1),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest = null;
        $_now         = time();
        $_retryTimes  = 0;
        while (Tea::allowRetry($_runtime['retry'], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime['backoff'], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;

            try {
                $_request           = new Request();
                $_request->protocol = Utils::defaultString($this->_protocol, $protocol);
                $_request->method   = $method;
                $_request->pathname = '/';
                $_request->query    = RpcUtils::query(Tea::merge([
                    'Action'         => $action,
                    'Format'         => 'json',
                    'RegionId'       => $this->_regionId,
                    'Timestamp'      => RpcUtils::getTimestamp(),
                    'Version'        => '2019-12-30',
                    'SignatureNonce' => Utils::getNonce(),
                ], $query));
                if (!Utils::isUnset($body)) {
                    $tmp            = Utils::anyifyMapValue(RpcUtils::query($body));
                    $_request->body = Utils::toFormString($tmp);
                }
                $_request->headers = [
                    'host'       => RpcUtils::getHost('objectdet', $this->_regionId, $this->_endpoint),
                    'user-agent' => $this->getUserAgent(),
                ];
                if (!Utils::equalString($authType, 'Anonymous')) {
                    $accessKeyId                         = $this->getAccessKeyId();
                    $accessKeySecret                     = $this->getAccessKeySecret();
                    $_request->query['SignatureMethod']  = 'HMAC-SHA1';
                    $_request->query['SignatureVersion'] = '1.0';
                    $_request->query['AccessKeyId']      = $accessKeyId;
                    $_request->query['Signature']        = RpcUtils::getSignature($_request, $accessKeySecret);
                }
                $_lastRequest = $_request;
                $_response    = Tea::send($_request, $_runtime);
                $obj          = Utils::readAsJSON($_response->body);
                $res          = Utils::assertAsMap($obj);
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    throw new TeaError([
                        'message' => $res['Message'],
                        'data'    => $res,
                        'code'    => $res['Code'],
                    ]);
                }

                return $res;
            } catch (\Exception $e) {
                if (Tea::isRetryable($_runtime['retry'], $_retryTimes)) {
                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest);
    }

    /**
     * @throws \Exception
     *
     * @return DetectTransparentImageResponse
     */
    public function detectTransparentImage(DetectTransparentImageRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DetectTransparentImage', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new DetectTransparentImageResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectTransparentImageResponse
     */
    public function detectTransparentImageAdvance(DetectTransparentImageAdvanceRequest $request, RuntimeOptions $runtime)
    {
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'objectdet',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $detectTransparentImagereq = new DetectTransparentImageRequest([]);
        RpcUtils::convert($request, $detectTransparentImagereq);
        $detectTransparentImagereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectTransparentImage($detectTransparentImagereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectObjectResponse
     */
    public function detectObject(DetectObjectRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DetectObject', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new DetectObjectResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectObjectResponse
     */
    public function detectObjectAdvance(DetectObjectAdvanceRequest $request, RuntimeOptions $runtime)
    {
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'objectdet',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $detectObjectreq = new DetectObjectRequest([]);
        RpcUtils::convert($request, $detectObjectreq);
        $detectObjectreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectObject($detectObjectreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectWhiteBaseImageResponse
     */
    public function detectWhiteBaseImage(DetectWhiteBaseImageRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DetectWhiteBaseImage', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new DetectWhiteBaseImageResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectWhiteBaseImageResponse
     */
    public function detectWhiteBaseImageAdvance(DetectWhiteBaseImageAdvanceRequest $request, RuntimeOptions $runtime)
    {
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'objectdet',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $detectWhiteBaseImagereq = new DetectWhiteBaseImageRequest([]);
        RpcUtils::convert($request, $detectWhiteBaseImagereq);
        $detectWhiteBaseImagereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectWhiteBaseImage($detectWhiteBaseImagereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ClassifyVehicleInsuranceResponse
     */
    public function classifyVehicleInsurance(ClassifyVehicleInsuranceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('ClassifyVehicleInsurance', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new ClassifyVehicleInsuranceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return ClassifyVehicleInsuranceResponse
     */
    public function classifyVehicleInsuranceAdvance(ClassifyVehicleInsuranceAdvanceRequest $request, RuntimeOptions $runtime)
    {
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'objectdet',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $classifyVehicleInsurancereq = new ClassifyVehicleInsuranceRequest([]);
        RpcUtils::convert($request, $classifyVehicleInsurancereq);
        $classifyVehicleInsurancereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->classifyVehicleInsurance($classifyVehicleInsurancereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVehicleDashboardResponse
     */
    public function recognizeVehicleDashboard(RecognizeVehicleDashboardRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeVehicleDashboard', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeVehicleDashboardResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVehicleDashboardResponse
     */
    public function recognizeVehicleDashboardAdvance(RecognizeVehicleDashboardAdvanceRequest $request, RuntimeOptions $runtime)
    {
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'objectdet',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeVehicleDashboardreq = new RecognizeVehicleDashboardRequest([]);
        RpcUtils::convert($request, $recognizeVehicleDashboardreq);
        $recognizeVehicleDashboardreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVehicleDashboard($recognizeVehicleDashboardreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVehicleDamageResponse
     */
    public function recognizeVehicleDamage(RecognizeVehicleDamageRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeVehicleDamage', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeVehicleDamageResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVehicleDamageResponse
     */
    public function recognizeVehicleDamageAdvance(RecognizeVehicleDamageAdvanceRequest $request, RuntimeOptions $runtime)
    {
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'objectdet',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeVehicleDamagereq = new RecognizeVehicleDamageRequest([]);
        RpcUtils::convert($request, $recognizeVehicleDamagereq);
        $recognizeVehicleDamagereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVehicleDamage($recognizeVehicleDamagereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVehiclePartsResponse
     */
    public function recognizeVehicleParts(RecognizeVehiclePartsRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeVehicleParts', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeVehiclePartsResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVehiclePartsResponse
     */
    public function recognizeVehiclePartsAdvance(RecognizeVehiclePartsAdvanceRequest $request, RuntimeOptions $runtime)
    {
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'objectdet',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $recognizeVehiclePartsreq = new RecognizeVehiclePartsRequest([]);
        RpcUtils::convert($request, $recognizeVehiclePartsreq);
        $recognizeVehiclePartsreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVehicleParts($recognizeVehiclePartsreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectVehicleResponse
     */
    public function detectVehicle(DetectVehicleRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DetectVehicle', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new DetectVehicleResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectVehicleResponse
     */
    public function detectVehicleAdvance(DetectVehicleAdvanceRequest $request, RuntimeOptions $runtime)
    {
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'objectdet',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $detectVehiclereq = new DetectVehicleRequest([]);
        RpcUtils::convert($request, $detectVehiclereq);
        $detectVehiclereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectVehicle($detectVehiclereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectMainBodyResponse
     */
    public function detectMainBody(DetectMainBodyRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DetectMainBody', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new DetectMainBodyResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectMainBodyResponse
     */
    public function detectMainBodyAdvance(DetectMainBodyAdvanceRequest $request, RuntimeOptions $runtime)
    {
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'objectdet',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig    = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        $detectMainBodyreq = new DetectMainBodyRequest([]);
        RpcUtils::convert($request, $detectMainBodyreq);
        $detectMainBodyreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectMainBody($detectMainBodyreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return string
     */
    public function getUserAgent()
    {
        return Utils::getUserAgent($this->_userAgent);
    }

    /**
     * @throws \Exception
     *
     * @return string
     */
    public function getAccessKeyId()
    {
        if (Utils::isUnset($this->_credential)) {
            return '';
        }

        return $this->_credential->getAccessKeyId();
    }

    /**
     * @throws \Exception
     *
     * @return string
     */
    public function getAccessKeySecret()
    {
        if (Utils::isUnset($this->_credential)) {
            return '';
        }

        return $this->_credential->getAccessKeySecret();
    }
}
