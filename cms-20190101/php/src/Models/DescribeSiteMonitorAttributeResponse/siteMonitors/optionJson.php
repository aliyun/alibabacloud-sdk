<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponse\siteMonitors;

use AlibabaCloud\Tea\Model;

class optionJson extends Model
{
    /**
     * @description dns_type
     *
     * @var string
     */
    public $dnsType;

    /**
     * @description dns_server
     *
     * @var string
     */
    public $dnsServer;

    /**
     * @description expect_value
     *
     * @var string
     */
    public $expectValue;

    /**
     * @description http_method
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @description response_content
     *
     * @var string
     */
    public $responseContent;

    /**
     * @description match_rule
     *
     * @var int
     */
    public $matchRule;

    /**
     * @description request_content
     *
     * @var string
     */
    public $requestContent;

    /**
     * @description cookie
     *
     * @var string
     */
    public $cookie;

    /**
     * @description header
     *
     * @var string
     */
    public $header;

    /**
     * @description username
     *
     * @var string
     */
    public $username;

    /**
     * @description password
     *
     * @var string
     */
    public $password;

    /**
     * @description time_out
     *
     * @var int
     */
    public $timeOut;

    /**
     * @description ping_num
     *
     * @var int
     */
    public $pingNum;

    /**
     * @description failure_rate
     *
     * @var float
     */
    public $failureRate;

    /**
     * @description request_format
     *
     * @var string
     */
    public $requestFormat;

    /**
     * @description response_format
     *
     * @var string
     */
    public $responseFormat;

    /**
     * @description port
     *
     * @var int
     */
    public $port;

    /**
     * @description authentication
     *
     * @var int
     */
    public $authentication;

    /**
     * @description traceroute
     *
     * @var int
     */
    public $traceroute;
    protected $_name = [
        'dnsType'         => 'dns_type',
        'dnsServer'       => 'dns_server',
        'expectValue'     => 'expect_value',
        'httpMethod'      => 'http_method',
        'responseContent' => 'response_content',
        'matchRule'       => 'match_rule',
        'requestContent'  => 'request_content',
        'cookie'          => 'cookie',
        'header'          => 'header',
        'username'        => 'username',
        'password'        => 'password',
        'timeOut'         => 'time_out',
        'pingNum'         => 'ping_num',
        'failureRate'     => 'failure_rate',
        'requestFormat'   => 'request_format',
        'responseFormat'  => 'response_format',
        'port'            => 'port',
        'authentication'  => 'authentication',
        'traceroute'      => 'traceroute',
    ];

    public function validate()
    {
        Model::validateRequired('dnsType', $this->dnsType, true);
        Model::validateRequired('dnsServer', $this->dnsServer, true);
        Model::validateRequired('expectValue', $this->expectValue, true);
        Model::validateRequired('httpMethod', $this->httpMethod, true);
        Model::validateRequired('responseContent', $this->responseContent, true);
        Model::validateRequired('matchRule', $this->matchRule, true);
        Model::validateRequired('requestContent', $this->requestContent, true);
        Model::validateRequired('cookie', $this->cookie, true);
        Model::validateRequired('header', $this->header, true);
        Model::validateRequired('username', $this->username, true);
        Model::validateRequired('password', $this->password, true);
        Model::validateRequired('timeOut', $this->timeOut, true);
        Model::validateRequired('pingNum', $this->pingNum, true);
        Model::validateRequired('failureRate', $this->failureRate, true);
        Model::validateRequired('requestFormat', $this->requestFormat, true);
        Model::validateRequired('responseFormat', $this->responseFormat, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('authentication', $this->authentication, true);
        Model::validateRequired('traceroute', $this->traceroute, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsType) {
            $res['dns_type'] = $this->dnsType;
        }
        if (null !== $this->dnsServer) {
            $res['dns_server'] = $this->dnsServer;
        }
        if (null !== $this->expectValue) {
            $res['expect_value'] = $this->expectValue;
        }
        if (null !== $this->httpMethod) {
            $res['http_method'] = $this->httpMethod;
        }
        if (null !== $this->responseContent) {
            $res['response_content'] = $this->responseContent;
        }
        if (null !== $this->matchRule) {
            $res['match_rule'] = $this->matchRule;
        }
        if (null !== $this->requestContent) {
            $res['request_content'] = $this->requestContent;
        }
        if (null !== $this->cookie) {
            $res['cookie'] = $this->cookie;
        }
        if (null !== $this->header) {
            $res['header'] = $this->header;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->timeOut) {
            $res['time_out'] = $this->timeOut;
        }
        if (null !== $this->pingNum) {
            $res['ping_num'] = $this->pingNum;
        }
        if (null !== $this->failureRate) {
            $res['failure_rate'] = $this->failureRate;
        }
        if (null !== $this->requestFormat) {
            $res['request_format'] = $this->requestFormat;
        }
        if (null !== $this->responseFormat) {
            $res['response_format'] = $this->responseFormat;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->authentication) {
            $res['authentication'] = $this->authentication;
        }
        if (null !== $this->traceroute) {
            $res['traceroute'] = $this->traceroute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return optionJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dns_type'])) {
            $model->dnsType = $map['dns_type'];
        }
        if (isset($map['dns_server'])) {
            $model->dnsServer = $map['dns_server'];
        }
        if (isset($map['expect_value'])) {
            $model->expectValue = $map['expect_value'];
        }
        if (isset($map['http_method'])) {
            $model->httpMethod = $map['http_method'];
        }
        if (isset($map['response_content'])) {
            $model->responseContent = $map['response_content'];
        }
        if (isset($map['match_rule'])) {
            $model->matchRule = $map['match_rule'];
        }
        if (isset($map['request_content'])) {
            $model->requestContent = $map['request_content'];
        }
        if (isset($map['cookie'])) {
            $model->cookie = $map['cookie'];
        }
        if (isset($map['header'])) {
            $model->header = $map['header'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['time_out'])) {
            $model->timeOut = $map['time_out'];
        }
        if (isset($map['ping_num'])) {
            $model->pingNum = $map['ping_num'];
        }
        if (isset($map['failure_rate'])) {
            $model->failureRate = $map['failure_rate'];
        }
        if (isset($map['request_format'])) {
            $model->requestFormat = $map['request_format'];
        }
        if (isset($map['response_format'])) {
            $model->responseFormat = $map['response_format'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['authentication'])) {
            $model->authentication = $map['authentication'];
        }
        if (isset($map['traceroute'])) {
            $model->traceroute = $map['traceroute'];
        }

        return $model;
    }
}
