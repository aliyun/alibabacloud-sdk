<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230;

use AlibabaCloud\Credentials\Credential;
use AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\Config;
use AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageRequest;
use AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse;
use AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanTextRequest;
use AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanTextResponse;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\Tea\Model;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Imageaudit
{
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

    public function __construct(Config $config)
    {
        if (Utils::isUnset($config)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config' can not be unset",
            ]);
        }
        if (Utils::empty_($config->endpoint)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config.endpoint' can not be empty",
            ]);
        }
        if (Utils::empty_($config->regionId)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config.regionId' can not be empty",
            ]);
        }
        if (Utils::empty_($config->type)) {
            $config->type = 'access_key';
        }
        $credentialConfig = new \AlibabaCloud\Credentials\Credential\Config([
            'accessKeyId'     => $config->accessKeyId,
            'type'            => $config->type,
            'accessKeySecret' => $config->accessKeySecret,
            'securityToken'   => $config->securityToken,
        ]);
        $this->_credential     = new Credential($credentialConfig);
        $this->_endpoint       = $config->endpoint;
        $this->_protocol       = $config->protocol;
        $this->_regionId       = $config->regionId;
        $this->_userAgent      = $config->userAgent;
        $this->_readTimeout    = $config->readTimeout;
        $this->_connectTimeout = $config->connectTimeout;
        $this->_httpProxy      = $config->httpProxy;
        $this->_httpsProxy     = $config->httpsProxy;
        $this->_noProxy        = $config->noProxy;
        $this->_socks5Proxy    = $config->socks5Proxy;
        $this->_socks5NetWork  = $config->socks5NetWork;
        $this->_maxIdleConns   = $config->maxIdleConns;
    }

    /**
     * @param string $action
     * @param string $protocol
     * @param string $method
     * @param object $request
     *
     * @throws \Exception
     *
     * @return array|object
     */
    public function _request($action, $protocol, $method, $request, RuntimeOptions $runtime)
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
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 2),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 0),
            ],
            'ignoreSSL' => $runtime->ignoreSSL,
        ];
        $_lastRequest   = null;
        $_lastException = null;
        $_now           = time();
        $_retryTimes    = 0;
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
                $accessKeyId        = $this->getAccessKeyId();
                $accessKeySecret    = $this->getAccessKeySecret();
                $_request->protocol = Utils::defaultString($this->_protocol, $protocol);
                $_request->method   = $method;
                $_request->pathname = '/';
                $_request->query    = RpcUtils::query(Tea::merge([
                    'Action'           => $action,
                    'Format'           => 'json',
                    'RegionId'         => $this->_regionId,
                    'Timestamp'        => RpcUtils::getTimestamp(),
                    'Version'          => '2019-12-30',
                    'SignatureMethod'  => 'HMAC-SHA1',
                    'SignatureVersion' => '1.0',
                    'SignatureNonce'   => Utils::getNonce(),
                    'AccessKeyId'      => $accessKeyId,
                ], $request));
                $_request->headers = [
                    'host'       => RpcUtils::getHost('imageaudit', $this->_regionId, $this->_endpoint),
                    'user-agent' => $this->getUserAgent(),
                ];
                $_request->query['Signature'] = RpcUtils::getSignature($_request, $accessKeySecret);
                $_lastRequest                 = $_request;
                $_response                    = Tea::send($_request, $_runtime);
                $obj                          = Utils::readAsJSON($_response->body);
                $body                         = Utils::assertAsMap($obj);
                if (RpcUtils::hasError($body)) {
                    throw new TeaError([
                        'message' => $body['Message'],
                        'data'    => $body,
                        'code'    => $body['Code'],
                    ]);
                }

                return $body;
            } catch (\Exception $e) {
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;

                    continue;
                }

                throw $e;
            }
        }

        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * @throws \Exception
     *
     * @return ScanTextResponse
     */
    public function scanText(ScanTextRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('ScanText', 'HTTPS', 'POST', $request, $runtime), new ScanTextResponse());
    }

    /**
     * @throws \Exception
     *
     * @return ScanImageResponse
     */
    public function scanImage(ScanImageRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('ScanImage', 'HTTPS', 'POST', $request, $runtime), new ScanImageResponse());
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
