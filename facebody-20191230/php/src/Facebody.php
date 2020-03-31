<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230;

use AlibabaCloud\Credentials\Credential;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\AddFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\AddFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\AddFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\BodyPostureAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\BodyPostureRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\BodyPostureResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\CompareFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\CompareFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\Config;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\CreateFaceDbRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\CreateFaceDbResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DeleteFaceDbRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DeleteFaceDbResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DeleteFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DeleteFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectBodyCountAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectBodyCountRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectBodyCountResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectLivingFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectLivingFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectMaskAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectMaskRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectMaskResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectPedestrianAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectPedestrianRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectPedestrianResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\EnhanceFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\EnhanceFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\EnhanceFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceBeautyAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceBeautyRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceBeautyResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceFilterAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceFilterRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceFilterResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceMakeupAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceMakeupRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceMakeupResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceTidyupAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceTidyupRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\FaceTidyupResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\HandPostureAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\HandPostureRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\HandPostureResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\ListFaceDbsRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\ListFaceDbsResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\ListFacesRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\ListFacesResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizeExpressionAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizeExpressionRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizeExpressionResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizeFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizeFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizeFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizePublicFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizePublicFaceResponse;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\SearchFaceAdvanceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\SearchFaceRequest;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\SearchFaceResponse;
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

class Facebody
{
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
                    'host'       => RpcUtils::getHost('facebody', $this->_regionId, $this->_endpoint),
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
     * @return FaceMakeupResponse
     */
    public function faceMakeup(FaceMakeupRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('FaceMakeup', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new FaceMakeupResponse());
    }

    /**
     * @throws \Exception
     *
     * @return FaceMakeupResponse
     */
    public function faceMakeupAdvance(FaceMakeupAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $faceMakeupreq = new FaceMakeupRequest([]);
        RpcUtils::convert($request, $faceMakeupreq);
        $faceMakeupreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->faceMakeup($faceMakeupreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return HandPostureResponse
     */
    public function handPosture(HandPostureRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('HandPosture', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new HandPostureResponse());
    }

    /**
     * @throws \Exception
     *
     * @return HandPostureResponse
     */
    public function handPostureAdvance(HandPostureAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $handPosturereq = new HandPostureRequest([]);
        RpcUtils::convert($request, $handPosturereq);
        $handPosturereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->handPosture($handPosturereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return BodyPostureResponse
     */
    public function bodyPosture(BodyPostureRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('BodyPosture', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new BodyPostureResponse());
    }

    /**
     * @throws \Exception
     *
     * @return BodyPostureResponse
     */
    public function bodyPostureAdvance(BodyPostureAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $bodyPosturereq = new BodyPostureRequest([]);
        RpcUtils::convert($request, $bodyPosturereq);
        $bodyPosturereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->bodyPosture($bodyPosturereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectPedestrianResponse
     */
    public function detectPedestrian(DetectPedestrianRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DetectPedestrian', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new DetectPedestrianResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectPedestrianResponse
     */
    public function detectPedestrianAdvance(DetectPedestrianAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $detectPedestrianreq = new DetectPedestrianRequest([]);
        RpcUtils::convert($request, $detectPedestrianreq);
        $detectPedestrianreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectPedestrian($detectPedestrianreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FaceBeautyResponse
     */
    public function faceBeauty(FaceBeautyRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('FaceBeauty', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new FaceBeautyResponse());
    }

    /**
     * @throws \Exception
     *
     * @return FaceBeautyResponse
     */
    public function faceBeautyAdvance(FaceBeautyAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $faceBeautyreq = new FaceBeautyRequest([]);
        RpcUtils::convert($request, $faceBeautyreq);
        $faceBeautyreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->faceBeauty($faceBeautyreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FaceFilterResponse
     */
    public function faceFilter(FaceFilterRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('FaceFilter', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new FaceFilterResponse());
    }

    /**
     * @throws \Exception
     *
     * @return FaceFilterResponse
     */
    public function faceFilterAdvance(FaceFilterAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $faceFilterreq = new FaceFilterRequest([]);
        RpcUtils::convert($request, $faceFilterreq);
        $faceFilterreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->faceFilter($faceFilterreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EnhanceFaceResponse
     */
    public function enhanceFace(EnhanceFaceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('EnhanceFace', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new EnhanceFaceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return EnhanceFaceResponse
     */
    public function enhanceFaceAdvance(EnhanceFaceAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $enhanceFacereq = new EnhanceFaceRequest([]);
        RpcUtils::convert($request, $enhanceFacereq);
        $enhanceFacereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->enhanceFace($enhanceFacereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return FaceTidyupResponse
     */
    public function faceTidyup(FaceTidyupRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('FaceTidyup', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new FaceTidyupResponse());
    }

    /**
     * @throws \Exception
     *
     * @return FaceTidyupResponse
     */
    public function faceTidyupAdvance(FaceTidyupAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $faceTidyupreq = new FaceTidyupRequest([]);
        RpcUtils::convert($request, $faceTidyupreq);
        $faceTidyupreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->faceTidyup($faceTidyupreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchFaceResponse
     */
    public function searchFace(SearchFaceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('SearchFace', 'HTTPS', 'GET', 'AK', null, $request, $runtime), new SearchFaceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return SearchFaceResponse
     */
    public function searchFaceAdvance(SearchFaceAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
            'content'     => $request->imageUrlObject,
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
        // Step 2: request final api
        $searchFacereq = new SearchFaceRequest([]);
        RpcUtils::convert($request, $searchFacereq);
        $searchFacereq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->searchFace($searchFacereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListFaceDbsResponse
     */
    public function listFaceDbs(ListFaceDbsRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('ListFaceDbs', 'HTTPS', 'GET', 'AK', null, $request, $runtime), new ListFaceDbsResponse());
    }

    /**
     * @throws \Exception
     *
     * @return ListFacesResponse
     */
    public function listFaces(ListFacesRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('ListFaces', 'HTTPS', 'GET', 'AK', null, $request, $runtime), new ListFacesResponse());
    }

    /**
     * @throws \Exception
     *
     * @return CreateFaceDbResponse
     */
    public function createFaceDb(CreateFaceDbRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('CreateFaceDb', 'HTTPS', 'GET', 'AK', null, $request, $runtime), new CreateFaceDbResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DeleteFaceResponse
     */
    public function deleteFace(DeleteFaceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DeleteFace', 'HTTPS', 'GET', 'AK', null, $request, $runtime), new DeleteFaceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DeleteFaceDbResponse
     */
    public function deleteFaceDb(DeleteFaceDbRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DeleteFaceDb', 'HTTPS', 'GET', 'AK', null, $request, $runtime), new DeleteFaceDbResponse());
    }

    /**
     * @throws \Exception
     *
     * @return AddFaceResponse
     */
    public function addFace(AddFaceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('AddFace', 'HTTPS', 'GET', 'AK', null, $request, $runtime), new AddFaceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return AddFaceResponse
     */
    public function addFaceAdvance(AddFaceAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
            'content'     => $request->imageUrlObject,
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
        // Step 2: request final api
        $addFacereq = new AddFaceRequest([]);
        RpcUtils::convert($request, $addFacereq);
        $addFacereq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->addFace($addFacereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeExpressionResponse
     */
    public function recognizeExpression(RecognizeExpressionRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeExpression', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeExpressionResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeExpressionResponse
     */
    public function recognizeExpressionAdvance(RecognizeExpressionAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $recognizeExpressionreq = new RecognizeExpressionRequest([]);
        RpcUtils::convert($request, $recognizeExpressionreq);
        $recognizeExpressionreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeExpression($recognizeExpressionreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizePublicFaceResponse
     */
    public function recognizePublicFace(RecognizePublicFaceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizePublicFace', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizePublicFaceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectLivingFaceResponse
     */
    public function detectLivingFace(DetectLivingFaceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DetectLivingFace', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new DetectLivingFaceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectBodyCountResponse
     */
    public function detectBodyCount(DetectBodyCountRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DetectBodyCount', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new DetectBodyCountResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectBodyCountResponse
     */
    public function detectBodyCountAdvance(DetectBodyCountAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $detectBodyCountreq = new DetectBodyCountRequest([]);
        RpcUtils::convert($request, $detectBodyCountreq);
        $detectBodyCountreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectBodyCount($detectBodyCountreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetectMaskResponse
     */
    public function detectMask(DetectMaskRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DetectMask', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new DetectMaskResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectMaskResponse
     */
    public function detectMaskAdvance(DetectMaskAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $detectMaskreq = new DetectMaskRequest([]);
        RpcUtils::convert($request, $detectMaskreq);
        $detectMaskreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectMask($detectMaskreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFace(RecognizeFaceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeFace', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeFaceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeFaceResponse
     */
    public function recognizeFaceAdvance(RecognizeFaceAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $recognizeFacereq = new RecognizeFaceRequest([]);
        RpcUtils::convert($request, $recognizeFacereq);
        $recognizeFacereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeFace($recognizeFacereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CompareFaceResponse
     */
    public function compareFace(CompareFaceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('CompareFace', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new CompareFaceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectFaceResponse
     */
    public function detectFace(DetectFaceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DetectFace', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new DetectFaceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DetectFaceResponse
     */
    public function detectFaceAdvance(DetectFaceAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
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
            'product'  => 'facebody',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
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
        // Step 2: request final api
        $detectFacereq = new DetectFaceRequest([]);
        RpcUtils::convert($request, $detectFacereq);
        $detectFacereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->detectFace($detectFacereq, $runtime);
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
