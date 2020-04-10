<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230;

use AlibabaCloud\Credentials\Credential;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\Config;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeAccountPageAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeAccountPageRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeAccountPageResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBankCardAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBankCardRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBankCardResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBusinessCardAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBusinessCardRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBusinessCardResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBusinessLicenseAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBusinessLicenseRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBusinessLicenseResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeCharacterAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeCharacterRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeCharacterResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeChinapassportAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeChinapassportRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeChinapassportResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeDriverLicenseAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeDriverLicenseRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeDriverLicenseResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeDrivingLicenseAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeDrivingLicenseRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeDrivingLicenseResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeIdentityCardAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeIdentityCardRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeIdentityCardResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeLicensePlateAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeLicensePlateRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeLicensePlateResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizePassportMRZAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizePassportMRZRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizePassportMRZResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeQrCodeRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeQrCodeResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeStampAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeStampRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeStampResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTableAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTableRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTableResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTakeoutOrderAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTakeoutOrderRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTakeoutOrderResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTaxiInvoiceAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTaxiInvoiceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTaxiInvoiceResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTrainTicketAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTrainTicketRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTrainTicketResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVATInvoiceAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVATInvoiceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVATInvoiceResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVerificationcodeAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVerificationcodeRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVerificationcodeResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVINCodeAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVINCodeRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVINCodeResponse;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\TrimDocumentAdvanceRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\TrimDocumentRequest;
use AlibabaCloud\SDK\Ocr\V20191230\Ocr\TrimDocumentResponse;
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

class Ocr
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
        if (Utils::emptyWithSuffix($config->regionId)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config.regionId' can not be empty",
            ]);
        }
        if (Utils::emptyWithSuffix($config->endpoint)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config.endpoint' can not be empty",
            ]);
        }
        if (Utils::emptyWithSuffix($config->type)) {
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
                    'host'       => RpcUtils::getHost('ocr', $this->_regionId, $this->_endpoint),
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
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult(GetAsyncJobResultRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('GetAsyncJobResult', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new GetAsyncJobResultResponse());
    }

    /**
     * @throws \Exception
     *
     * @return TrimDocumentResponse
     */
    public function trimDocument(TrimDocumentRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('TrimDocument', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new TrimDocumentResponse());
    }

    /**
     * @throws \Exception
     *
     * @return TrimDocumentResponse
     */
    public function trimDocumentAdvance(TrimDocumentAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
            'content'     => $request->fileURLObject,
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
        $trimDocumentreq = new TrimDocumentRequest([]);
        RpcUtils::convert($request, $trimDocumentreq);
        $trimDocumentreq->fileURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->trimDocument($trimDocumentreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeChinapassportResponse
     */
    public function recognizeChinapassport(RecognizeChinapassportRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeChinapassport', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeChinapassportResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeChinapassportResponse
     */
    public function recognizeChinapassportAdvance(RecognizeChinapassportAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeChinapassportreq = new RecognizeChinapassportRequest([]);
        RpcUtils::convert($request, $recognizeChinapassportreq);
        $recognizeChinapassportreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeChinapassport($recognizeChinapassportreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVerificationcodeResponse
     */
    public function recognizeVerificationcode(RecognizeVerificationcodeRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeVerificationcode', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeVerificationcodeResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVerificationcodeResponse
     */
    public function recognizeVerificationcodeAdvance(RecognizeVerificationcodeAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeVerificationcodereq = new RecognizeVerificationcodeRequest([]);
        RpcUtils::convert($request, $recognizeVerificationcodereq);
        $recognizeVerificationcodereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVerificationcode($recognizeVerificationcodereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizePassportMRZResponse
     */
    public function recognizePassportMRZ(RecognizePassportMRZRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizePassportMRZ', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizePassportMRZResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizePassportMRZResponse
     */
    public function recognizePassportMRZAdvance(RecognizePassportMRZAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizePassportMRZreq = new RecognizePassportMRZRequest([]);
        RpcUtils::convert($request, $recognizePassportMRZreq);
        $recognizePassportMRZreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizePassportMRZ($recognizePassportMRZreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeTakeoutOrderResponse
     */
    public function recognizeTakeoutOrder(RecognizeTakeoutOrderRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeTakeoutOrder', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeTakeoutOrderResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeTakeoutOrderResponse
     */
    public function recognizeTakeoutOrderAdvance(RecognizeTakeoutOrderAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeTakeoutOrderreq = new RecognizeTakeoutOrderRequest([]);
        RpcUtils::convert($request, $recognizeTakeoutOrderreq);
        $recognizeTakeoutOrderreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeTakeoutOrder($recognizeTakeoutOrderreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeQrCodeResponse
     */
    public function recognizeQrCode(RecognizeQrCodeRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeQrCode', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeQrCodeResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVATInvoiceResponse
     */
    public function recognizeVATInvoice(RecognizeVATInvoiceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeVATInvoice', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeVATInvoiceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVATInvoiceResponse
     */
    public function recognizeVATInvoiceAdvance(RecognizeVATInvoiceAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
            'content'     => $request->fileURLObject,
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
        $recognizeVATInvoicereq = new RecognizeVATInvoiceRequest([]);
        RpcUtils::convert($request, $recognizeVATInvoicereq);
        $recognizeVATInvoicereq->fileURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVATInvoice($recognizeVATInvoicereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeCharacterResponse
     */
    public function recognizeCharacter(RecognizeCharacterRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeCharacter', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeCharacterResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeCharacterResponse
     */
    public function recognizeCharacterAdvance(RecognizeCharacterAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeCharacterreq = new RecognizeCharacterRequest([]);
        RpcUtils::convert($request, $recognizeCharacterreq);
        $recognizeCharacterreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeCharacter($recognizeCharacterreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoice(RecognizeTaxiInvoiceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeTaxiInvoice', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeTaxiInvoiceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeTaxiInvoiceResponse
     */
    public function recognizeTaxiInvoiceAdvance(RecognizeTaxiInvoiceAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeTaxiInvoicereq = new RecognizeTaxiInvoiceRequest([]);
        RpcUtils::convert($request, $recognizeTaxiInvoicereq);
        $recognizeTaxiInvoicereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeTaxiInvoice($recognizeTaxiInvoicereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeIdentityCardResponse
     */
    public function recognizeIdentityCard(RecognizeIdentityCardRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeIdentityCard', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeIdentityCardResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeIdentityCardResponse
     */
    public function recognizeIdentityCardAdvance(RecognizeIdentityCardAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeIdentityCardreq = new RecognizeIdentityCardRequest([]);
        RpcUtils::convert($request, $recognizeIdentityCardreq);
        $recognizeIdentityCardreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeIdentityCard($recognizeIdentityCardreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeLicensePlateResponse
     */
    public function recognizeLicensePlate(RecognizeLicensePlateRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeLicensePlate', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeLicensePlateResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeLicensePlateResponse
     */
    public function recognizeLicensePlateAdvance(RecognizeLicensePlateAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeLicensePlatereq = new RecognizeLicensePlateRequest([]);
        RpcUtils::convert($request, $recognizeLicensePlatereq);
        $recognizeLicensePlatereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeLicensePlate($recognizeLicensePlatereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeTableResponse
     */
    public function recognizeTable(RecognizeTableRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeTable', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeTableResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeTableResponse
     */
    public function recognizeTableAdvance(RecognizeTableAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeTablereq = new RecognizeTableRequest([]);
        RpcUtils::convert($request, $recognizeTablereq);
        $recognizeTablereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeTable($recognizeTablereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicense(RecognizeDrivingLicenseRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeDrivingLicense', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeDrivingLicenseResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeDrivingLicenseResponse
     */
    public function recognizeDrivingLicenseAdvance(RecognizeDrivingLicenseAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeDrivingLicensereq = new RecognizeDrivingLicenseRequest([]);
        RpcUtils::convert($request, $recognizeDrivingLicensereq);
        $recognizeDrivingLicensereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeDrivingLicense($recognizeDrivingLicensereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCard(RecognizeBankCardRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeBankCard', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeBankCardResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeBankCardResponse
     */
    public function recognizeBankCardAdvance(RecognizeBankCardAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeBankCardreq = new RecognizeBankCardRequest([]);
        RpcUtils::convert($request, $recognizeBankCardreq);
        $recognizeBankCardreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeBankCard($recognizeBankCardreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeTrainTicketResponse
     */
    public function recognizeTrainTicket(RecognizeTrainTicketRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeTrainTicket', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeTrainTicketResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeTrainTicketResponse
     */
    public function recognizeTrainTicketAdvance(RecognizeTrainTicketAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeTrainTicketreq = new RecognizeTrainTicketRequest([]);
        RpcUtils::convert($request, $recognizeTrainTicketreq);
        $recognizeTrainTicketreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeTrainTicket($recognizeTrainTicketreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeDriverLicenseResponse
     */
    public function recognizeDriverLicense(RecognizeDriverLicenseRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeDriverLicense', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeDriverLicenseResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeDriverLicenseResponse
     */
    public function recognizeDriverLicenseAdvance(RecognizeDriverLicenseAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeDriverLicensereq = new RecognizeDriverLicenseRequest([]);
        RpcUtils::convert($request, $recognizeDriverLicensereq);
        $recognizeDriverLicensereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeDriverLicense($recognizeDriverLicensereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeAccountPageResponse
     */
    public function recognizeAccountPage(RecognizeAccountPageRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeAccountPage', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeAccountPageResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeAccountPageResponse
     */
    public function recognizeAccountPageAdvance(RecognizeAccountPageAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeAccountPagereq = new RecognizeAccountPageRequest([]);
        RpcUtils::convert($request, $recognizeAccountPagereq);
        $recognizeAccountPagereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeAccountPage($recognizeAccountPagereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeStampResponse
     */
    public function recognizeStamp(RecognizeStampRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeStamp', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeStampResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeStampResponse
     */
    public function recognizeStampAdvance(RecognizeStampAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeStampreq = new RecognizeStampRequest([]);
        RpcUtils::convert($request, $recognizeStampreq);
        $recognizeStampreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeStamp($recognizeStampreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeBusinessCardResponse
     */
    public function recognizeBusinessCard(RecognizeBusinessCardRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeBusinessCard', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeBusinessCardResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeBusinessCardResponse
     */
    public function recognizeBusinessCardAdvance(RecognizeBusinessCardAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeBusinessCardreq = new RecognizeBusinessCardRequest([]);
        RpcUtils::convert($request, $recognizeBusinessCardreq);
        $recognizeBusinessCardreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeBusinessCard($recognizeBusinessCardreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVINCodeResponse
     */
    public function recognizeVINCode(RecognizeVINCodeRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeVINCode', 'HTTPS', 'POST', 'AK', $request, null, $runtime), new RecognizeVINCodeResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeVINCodeResponse
     */
    public function recognizeVINCodeAdvance(RecognizeVINCodeAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeVINCodereq = new RecognizeVINCodeRequest([]);
        RpcUtils::convert($request, $recognizeVINCodereq);
        $recognizeVINCodereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeVINCode($recognizeVINCodereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicense(RecognizeBusinessLicenseRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RecognizeBusinessLicense', 'HTTPS', 'POST', 'AK', null, $request, $runtime), new RecognizeBusinessLicenseResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RecognizeBusinessLicenseResponse
     */
    public function recognizeBusinessLicenseAdvance(RecognizeBusinessLicenseAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'ocr',
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
        $recognizeBusinessLicensereq = new RecognizeBusinessLicenseRequest([]);
        RpcUtils::convert($request, $recognizeBusinessLicensereq);
        $recognizeBusinessLicensereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->recognizeBusinessLicense($recognizeBusinessLicensereq, $runtime);
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
