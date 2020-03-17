<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212;

use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Credentials\Credential;
use AlibabaCloud\Tea\FileForm\FileForm;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

use AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByNameRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByPicRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByPicAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\DeleteImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\AddImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\AddImageAdvanceRequest;
use AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\Config;

class ImageSearch {
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

    public function __construct(Config $config){
        if (Utils::isUnset($config)) {
            throw new TeaError([
                "name" => "ParameterMissing",
                "message" => "'config' can not be unset"
            ]);
        }
        if (Utils::_empty($config->regionId)) {
            throw new TeaError([
                "name" => "ParameterMissing",
                "message" => "'config.regionId' can not be empty"
            ]);
        }
        if (Utils::_empty($config->endpoint)) {
            throw new TeaError([
                "name" => "ParameterMissing",
                "message" => "'config.endpoint' can not be empty"
            ]);
        }
        if (Utils::_empty($config->type)) {
            $config->type = "access_key";
        }
        $credentialConfig = new \AlibabaCloud\Credentials\Credential\Config([
            "accessKeyId" => $config->accessKeyId,
            "type" => $config->type,
            "accessKeySecret" => $config->accessKeySecret,
            "securityToken" => $config->securityToken
        ]);
        $this->_credential = new Credential($credentialConfig);
        $this->_endpoint = $config->endpoint;
        $this->_protocol = $config->protocol;
        $this->_regionId = $config->regionId;
        $this->_userAgent = $config->userAgent;
        $this->_readTimeout = $config->readTimeout;
        $this->_connectTimeout = $config->connectTimeout;
        $this->_httpProxy = $config->httpProxy;
        $this->_httpsProxy = $config->httpsProxy;
        $this->_noProxy = $config->noProxy;
        $this->_socks5Proxy = $config->socks5Proxy;
        $this->_socks5NetWork = $config->socks5NetWork;
        $this->_maxIdleConns = $config->maxIdleConns;
        $this->_endpointType = $config->endpointType;
        $this->_openPlatformEndpoint = $config->openPlatformEndpoint;
    }

    public function _request($action, $protocol, $method, $request, RuntimeOptions $runtime){
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => Utils::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            "connectTimeout" => Utils::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            "httpProxy" => Utils::defaultString($runtime->httpProxy, $this->_httpProxy),
            "httpsProxy" => Utils::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            "noProxy" => Utils::defaultString($runtime->noProxy, $this->_noProxy),
            "maxIdleConns" => Utils::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry($_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime($_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $_request->protocol = Utils::defaultString($this->_protocol, $protocol);
                $_request->method = $method;
                $_request->pathname = "/";
                $accessKeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $_request->query = RpcUtils::query([
                    "Action" => $action,
                    "Format" => "json",
                    "RegionId" => $this->_regionId,
                    "Timestamp" => RpcUtils::getTimestamp(),
                    "Version" => "2020-02-12",
                    "SignatureMethod" => "HMAC-SHA1",
                    "SignatureVersion" => "1.0",
                    "SignatureNonce" => Utils::getNonce(),
                    "AccessKeyId" => $accessKeyId,
                    $request
                ]);
                $_request->headers = [
                    "host" => RpcUtils::getHost("ImageSearch", $this->_regionId, $this->_endpoint),
                    "user-agent" => $this->getUserAgent()
                ];
                $_request->query["Signature"] = RpcUtils::getSignature($_request, $accessKeySecret);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $obj = Utils::readAsJSON($_response->body);
                $body = Utils::assertAsMap($obj);
                if (Utils::is4xx($_response->statusCode) || Utils::is5xx($_response->statusCode)) {
                    throw new TeaError([
                        "message" => $body["Message"],
                        "data" => $body,
                        "code" => $body["Code"]
                    ]);
                }
                return $body;
            }
            catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest);
    }

    public function searchImageByName(SearchImageByNameRequest $request, RuntimeOptions $runtime){
        return $this->_request("SearchImageByName", "HTTPS", "POST", $request, $runtime);
    }

    public function searchImageByPic(SearchImageByPicRequest $request, RuntimeOptions $runtime){
        return $this->_request("SearchImageByPic", "HTTPS", "POST", $request, $runtime);
    }

    public function searchImageByPicAdvance(SearchImageByPicAdvanceRequest $request, RuntimeOptions $runtime){
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            "product" => "ImageSearch",
            "regionId" => $this->_regionId
        ]);
        $authResponse = $this->authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->picContentObject,
            "contentType" => ""
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
        ]);
        $ossRuntime = new \AlibabaCloud\SDK\OSS\OSS\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $this->ossClient->postObject($uploadRequest, $ossRuntime);
        $searchImageByPicreq = new SearchImageByPicRequest([]);
        RpcUtils::convert($request, $searchImageByPicreq);
        $searchImageByPicreq->picContent = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $searchImageByPicResp = $this->searchImageByPic($searchImageByPicreq, $runtime);
        return $searchImageByPicResp;
    }

    public function deleteImage(DeleteImageRequest $request, RuntimeOptions $runtime){
        return $this->_request("DeleteImage", "HTTPS", "POST", $request, $runtime);
    }

    public function addImage(AddImageRequest $request, RuntimeOptions $runtime){
        return $this->_request("AddImage", "HTTPS", "POST", $request, $runtime);
    }

    public function addImageAdvance(AddImageAdvanceRequest $request, RuntimeOptions $runtime){
        $accessKeyId = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config([
            "accessKeyId" => $accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => "openplatform.aliyuncs.com",
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
        ]);
        $authClient = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            "product" => "ImageSearch",
            "regionId" => $this->_regionId
        ]);
        $authResponse = $this->authClient->authorizeFileUpload($authRequest, $runtime);
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            "accessKeyId" => $authResponse->accessKeyId,
            "accessKeySecret" => $accessKeySecret,
            "type" => "access_key",
            "endpoint" => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            "protocol" => $this->_protocol,
            "regionId" => $this->_regionId
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            "filename" => $authResponse->objectKey,
            "content" => $request->picContentObject,
            "contentType" => ""
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            "accessKeyId" => $authResponse->accessKeyId,
            "policy" => $authResponse->encodedPolicy,
            "signature" => $authResponse->signature,
            "key" => $authResponse->objectKey,
            "file" => $fileObj,
            "successActionStatus" => "201"
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            "bucketName" => $authResponse->bucket,
            "header" => $ossHeader
        ]);
        $ossRuntime = new \AlibabaCloud\SDK\OSS\OSS\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $this->ossClient->postObject($uploadRequest, $ossRuntime);
        $addImagereq = new AddImageRequest([]);
        RpcUtils::convert($request, $addImagereq);
        $addImagereq->picContent = "http://" . $authResponse->bucket . "." . $authResponse->endpoint . "/" . $authResponse->objectKey . "";
        $addImageResp = $this->addImage($addImagereq, $runtime);
        return $addImageResp;
    }

    public function getUserAgent(){
        $userAgent = Utils::getUserAgent($this->_userAgent);
        return $userAgent;
    }

    public function getAccessKeyId(){
        if (Utils::isUnset($this->_credential)) {
            return "";
        }
        $accessKeyId = $this->_credential->getAccessKeyId();
        return $accessKeyId;
    }

    public function getAccessKeySecret(){
        if (Utils::isUnset($this->_credential)) {
            return "";
        }
        $secret = $this->_credential->getAccessKeySecret();
        return $secret;
    }
}
