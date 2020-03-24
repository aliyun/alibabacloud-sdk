<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808;

use AlibabaCloud\Credentials\Credential;
use AlibabaCloud\SDK\ECI\V20180808\ECI\Config;
use AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupFromTemplateRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupFromTemplateResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\CreateImageCacheRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\CreateImageCacheResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DeleteContainerGroupRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DeleteContainerGroupResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DeleteImageCacheRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DeleteImageCacheResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupMetricRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupMetricResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupPriceRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupPriceResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerLogRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerLogResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeImageCachesRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeImageCachesResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeRegionsRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeRegionsResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\ExecContainerCommandRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\ExecContainerCommandResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\RestartContainerGroupRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\RestartContainerGroupResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupByTemplateRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupByTemplateResponse;
use AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest;
use AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupResponse;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\Tea\Model;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class ECI
{
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

    public function __construct(Config $config)
    {
        if (Utils::isUnset($config)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config' can not be unset",
            ]);
        }
        if (Utils::_empty($config->endpoint)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config.endpoint' can not be empty",
            ]);
        }
        if (Utils::_empty($config->regionId)) {
            throw new TeaError([
                'name'    => 'ParameterMissing',
                'message' => "'config.regionId' can not be empty",
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
                'maxAttempts' => Utils::defaultNumber($runtime->maxAttempts, 2),
            ],
            'backoff' => [
                'policy' => Utils::defaultString($runtime->backoffPolicy, 'no'),
                'period' => Utils::defaultNumber($runtime->backoffPeriod, 0),
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
                    'Version'        => '2018-08-08',
                    'SignatureNonce' => Utils::getNonce(),
                ], $query));
                if (!Utils::isUnset($body)) {
                    $tmp            = Utils::anyifyMapValue(RpcUtils::query($body));
                    $_request->body = Utils::toFormString($tmp);
                }
                $_request->headers = [
                    'host'       => RpcUtils::getHost('Eci', $this->_regionId, $this->_endpoint),
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
                if (RpcUtils::hasError($res)) {
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
     * @return DescribeRegionsResponse
     */
    public function describeRegions(DescribeRegionsRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DescribeRegions', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new DescribeRegionsResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DescribeImageCachesResponse
     */
    public function describeImageCaches(DescribeImageCachesRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DescribeImageCaches', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new DescribeImageCachesResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DeleteImageCacheResponse
     */
    public function deleteImageCache(DeleteImageCacheRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DeleteImageCache', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new DeleteImageCacheResponse());
    }

    /**
     * @throws \Exception
     *
     * @return CreateImageCacheResponse
     */
    public function createImageCache(CreateImageCacheRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('CreateImageCache', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new CreateImageCacheResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DescribeMultiContainerGroupMetricResponse
     */
    public function describeMultiContainerGroupMetric(DescribeMultiContainerGroupMetricRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DescribeMultiContainerGroupMetric', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new DescribeMultiContainerGroupMetricResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerGroupMetricResponse
     */
    public function describeContainerGroupMetric(DescribeContainerGroupMetricRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DescribeContainerGroupMetric', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new DescribeContainerGroupMetricResponse());
    }

    /**
     * @throws \Exception
     *
     * @return UpdateContainerGroupByTemplateResponse
     */
    public function updateContainerGroupByTemplate(UpdateContainerGroupByTemplateRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('UpdateContainerGroupByTemplate', 'HTTPS', 'POST', 'AK', $request, null, $runtime), new UpdateContainerGroupByTemplateResponse());
    }

    /**
     * @throws \Exception
     *
     * @return CreateContainerGroupFromTemplateResponse
     */
    public function createContainerGroupFromTemplate(CreateContainerGroupFromTemplateRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('CreateContainerGroupFromTemplate', 'HTTPS', 'POST', 'AK', $request, null, $runtime), new CreateContainerGroupFromTemplateResponse());
    }

    /**
     * @throws \Exception
     *
     * @return ExportContainerGroupTemplateResponse
     */
    public function exportContainerGroupTemplate(ExportContainerGroupTemplateRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('ExportContainerGroupTemplate', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new ExportContainerGroupTemplateResponse());
    }

    /**
     * @throws \Exception
     *
     * @return RestartContainerGroupResponse
     */
    public function restartContainerGroup(RestartContainerGroupRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('RestartContainerGroup', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new RestartContainerGroupResponse());
    }

    /**
     * @throws \Exception
     *
     * @return UpdateContainerGroupResponse
     */
    public function updateContainerGroup(UpdateContainerGroupRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('UpdateContainerGroup', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new UpdateContainerGroupResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerGroupPriceResponse
     */
    public function describeContainerGroupPrice(DescribeContainerGroupPriceRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DescribeContainerGroupPrice', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new DescribeContainerGroupPriceResponse());
    }

    /**
     * @throws \Exception
     *
     * @return ExecContainerCommandResponse
     */
    public function execContainerCommand(ExecContainerCommandRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('ExecContainerCommand', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new ExecContainerCommandResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerLogResponse
     */
    public function describeContainerLog(DescribeContainerLogRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DescribeContainerLog', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new DescribeContainerLogResponse());
    }

    /**
     * @throws \Exception
     *
     * @return CreateContainerGroupResponse
     */
    public function createContainerGroup(CreateContainerGroupRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('CreateContainerGroup', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new CreateContainerGroupResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DescribeContainerGroupsResponse
     */
    public function describeContainerGroups(DescribeContainerGroupsRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DescribeContainerGroups', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new DescribeContainerGroupsResponse());
    }

    /**
     * @throws \Exception
     *
     * @return DeleteContainerGroupResponse
     */
    public function deleteContainerGroup(DeleteContainerGroupRequest $request, RuntimeOptions $runtime)
    {
        return Model::toModel($this->_request('DeleteContainerGroup', 'HTTPS', 'GET', 'AK', $request, null, $runtime), new DeleteContainerGroupResponse());
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
