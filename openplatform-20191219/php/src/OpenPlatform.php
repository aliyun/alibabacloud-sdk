<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenPlatform\V20191219;

use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use Util\RuntimeOptions;

use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Credential;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\Config;

class OpenPlatform {
    protected $_name = [];

    private $_endpoint;

    private $_regionId;

    private $_protocol;

    private $_userAgent;

    private $_readTimeout;

    private $_connectTimeout;

    private $_httpProxy;

    private $_httpsProxy;

    private $_noProxy;

    private $_socks5Proxy;

    private $_socks5NetWork;

    private $_maxIdleConns;

    private $_credential;

    public function __construct(Config $config){
        if (Util::isUnset($config)) {
            throw new TeaError([
                "name" => "ParameterMissing",
                "message" => "'config' can not be unset"
            ]);
        }
        if (Util::_empty($config->endpoint)) {
            throw new TeaError([
                "name" => "ParameterMissing",
                "message" => "'config.endpoint' can not be empty"
            ]);
        }
        if (Util::_empty($config->regionId)) {
            throw new TeaError([
                "name" => "ParameterMissing",
                "message" => "'config.regionId' can not be empty"
            ]);
        }
        if (Util::_empty($config->type)) {
            $config->type = "access_key";
        }
        $credentialConfig = new Credential\Config([
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
    }

    public function _request($action, $protocol, $method, $request, RuntimeOptions $runtime){
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => Util::defaultNumber($runtime->readTimeout, $this->_readTimeout),
            "connectTimeout" => Util::defaultNumber($runtime->connectTimeout, $this->_connectTimeout),
            "httpProxy" => Util::defaultString($runtime->httpProxy, $this->_httpProxy),
            "httpsProxy" => Util::defaultString($runtime->httpsProxy, $this->_httpsProxy),
            "noProxy" => Util::defaultString($runtime->noProxy, $this->_noProxy),
            "maxIdleConns" => Util::defaultNumber($runtime->maxIdleConns, $this->_maxIdleConns),
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Util::defaultNumber($runtime->maxAttempts, 2)
            ],
            "backoff" => [
                "policy" => Util::defaultString($runtime->backoffPolicy, "no"),
                "period" => Util::defaultNumber($runtime->backoffPeriod, 0)
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
                $accessKeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $_request->protocol = Util::defaultString($this->_protocol, $protocol);
                $_request->method = $method;
                $_request->pathname = "/";
                $_request->query = RPCUtil::query([
                    "Action" => $action,
                    "Format" => "json",
                    "RegionId" => $this->_regionId,
                    "Timestamp" => RPCUtil::getTimestamp(),
                    "Version" => "2019-12-19",
                    "SignatureMethod" => "HMAC-SHA1",
                    "SignatureVersion" => "1.0",
                    "SignatureNonce" => Util::getNonce(),
                    "AccessKeyId" => $accessKeyId,
                    $request
                ]);
                $_request->headers = [
                    "host" => RPCUtil::getHost("OpenPlatform", $this->_regionId, $this->_endpoint),
                    "user-agent" => $this->getUserAgent()
                ];
                $_request->query["Signature"] = RPCUtil::getSignature($_request, $accessKeySecret);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $obj = Util::readAsJSON($_response->body);
                $body = Util::assertAsMap($obj);
                if (RPCUtil::hasError($body)) {
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

    public function authorizeFileUpload(AuthorizeFileUploadRequest $request, RuntimeOptions $runtime){
        return $this->_request("AuthorizeFileUpload", "HTTPS", "GET", $request, $runtime);
    }

    public function getUserAgent(){
        $userAgent = Util::getUserAgent($this->_userAgent);
        return $userAgent;
    }

    public function getAccessKeyId(){
        if (Util::isUnset($this->_credential)) {
            return "";
        }
        $accessKeyId = $this->_credential->getAccessKeyId();
        return $accessKeyId;
    }

    public function getAccessKeySecret(){
        if (Util::isUnset($this->_credential)) {
            return "";
        }
        $secret = $this->_credential->getAccessKeySecret();
        return $secret;
    }
}
