<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\serviceConfig\functionComputeConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\serviceConfig\mockHeaders;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\serviceConfig\vpcConfig;
use AlibabaCloud\Tea\Model;

class serviceConfig extends Model
{
    /**
     * @description serviceProtocol
     *
     * @var string
     */
    public $serviceProtocol;

    /**
     * @description serviceAddress
     *
     * @var string
     */
    public $serviceAddress;

    /**
     * @description serviceHttpMethod
     *
     * @var string
     */
    public $serviceHttpMethod;

    /**
     * @description servicePath
     *
     * @var string
     */
    public $servicePath;

    /**
     * @description serviceTimeout
     *
     * @var int
     */
    public $serviceTimeout;

    /**
     * @description contentTypeCatagory
     *
     * @var string
     */
    public $contentTypeCatagory;

    /**
     * @description contentTypeValue
     *
     * @var string
     */
    public $contentTypeValue;

    /**
     * @description mock
     *
     * @var string
     */
    public $mock;

    /**
     * @description mockResult
     *
     * @var string
     */
    public $mockResult;

    /**
     * @description serviceVpcEnable
     *
     * @var string
     */
    public $serviceVpcEnable;

    /**
     * @description aoneAppName
     *
     * @var string
     */
    public $aoneAppName;

    /**
     * @description mockStatusCode
     *
     * @var int
     */
    public $mockStatusCode;

    /**
     * @description mockHeaders
     *
     * @var mockHeaders
     */
    public $mockHeaders;

    /**
     * @description vpcConfig
     *
     * @var vpcConfig
     */
    public $vpcConfig;

    /**
     * @description functionComputeConfig
     *
     * @var functionComputeConfig
     */
    public $functionComputeConfig;
    protected $_name = [
        'serviceProtocol'       => 'ServiceProtocol',
        'serviceAddress'        => 'ServiceAddress',
        'serviceHttpMethod'     => 'ServiceHttpMethod',
        'servicePath'           => 'ServicePath',
        'serviceTimeout'        => 'ServiceTimeout',
        'contentTypeCatagory'   => 'ContentTypeCatagory',
        'contentTypeValue'      => 'ContentTypeValue',
        'mock'                  => 'Mock',
        'mockResult'            => 'MockResult',
        'serviceVpcEnable'      => 'ServiceVpcEnable',
        'aoneAppName'           => 'AoneAppName',
        'mockStatusCode'        => 'MockStatusCode',
        'mockHeaders'           => 'MockHeaders',
        'vpcConfig'             => 'VpcConfig',
        'functionComputeConfig' => 'FunctionComputeConfig',
    ];

    public function validate()
    {
        Model::validateRequired('serviceProtocol', $this->serviceProtocol, true);
        Model::validateRequired('serviceAddress', $this->serviceAddress, true);
        Model::validateRequired('serviceHttpMethod', $this->serviceHttpMethod, true);
        Model::validateRequired('servicePath', $this->servicePath, true);
        Model::validateRequired('serviceTimeout', $this->serviceTimeout, true);
        Model::validateRequired('contentTypeCatagory', $this->contentTypeCatagory, true);
        Model::validateRequired('contentTypeValue', $this->contentTypeValue, true);
        Model::validateRequired('mock', $this->mock, true);
        Model::validateRequired('mockResult', $this->mockResult, true);
        Model::validateRequired('serviceVpcEnable', $this->serviceVpcEnable, true);
        Model::validateRequired('aoneAppName', $this->aoneAppName, true);
        Model::validateRequired('mockStatusCode', $this->mockStatusCode, true);
        Model::validateRequired('mockHeaders', $this->mockHeaders, true);
        Model::validateRequired('vpcConfig', $this->vpcConfig, true);
        Model::validateRequired('functionComputeConfig', $this->functionComputeConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }
        if (null !== $this->serviceAddress) {
            $res['ServiceAddress'] = $this->serviceAddress;
        }
        if (null !== $this->serviceHttpMethod) {
            $res['ServiceHttpMethod'] = $this->serviceHttpMethod;
        }
        if (null !== $this->servicePath) {
            $res['ServicePath'] = $this->servicePath;
        }
        if (null !== $this->serviceTimeout) {
            $res['ServiceTimeout'] = $this->serviceTimeout;
        }
        if (null !== $this->contentTypeCatagory) {
            $res['ContentTypeCatagory'] = $this->contentTypeCatagory;
        }
        if (null !== $this->contentTypeValue) {
            $res['ContentTypeValue'] = $this->contentTypeValue;
        }
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }
        if (null !== $this->mockResult) {
            $res['MockResult'] = $this->mockResult;
        }
        if (null !== $this->serviceVpcEnable) {
            $res['ServiceVpcEnable'] = $this->serviceVpcEnable;
        }
        if (null !== $this->aoneAppName) {
            $res['AoneAppName'] = $this->aoneAppName;
        }
        if (null !== $this->mockStatusCode) {
            $res['MockStatusCode'] = $this->mockStatusCode;
        }
        if (null !== $this->mockHeaders) {
            $res['MockHeaders'] = null !== $this->mockHeaders ? $this->mockHeaders->toMap() : null;
        }
        if (null !== $this->vpcConfig) {
            $res['VpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toMap() : null;
        }
        if (null !== $this->functionComputeConfig) {
            $res['FunctionComputeConfig'] = null !== $this->functionComputeConfig ? $this->functionComputeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }
        if (isset($map['ServiceAddress'])) {
            $model->serviceAddress = $map['ServiceAddress'];
        }
        if (isset($map['ServiceHttpMethod'])) {
            $model->serviceHttpMethod = $map['ServiceHttpMethod'];
        }
        if (isset($map['ServicePath'])) {
            $model->servicePath = $map['ServicePath'];
        }
        if (isset($map['ServiceTimeout'])) {
            $model->serviceTimeout = $map['ServiceTimeout'];
        }
        if (isset($map['ContentTypeCatagory'])) {
            $model->contentTypeCatagory = $map['ContentTypeCatagory'];
        }
        if (isset($map['ContentTypeValue'])) {
            $model->contentTypeValue = $map['ContentTypeValue'];
        }
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }
        if (isset($map['MockResult'])) {
            $model->mockResult = $map['MockResult'];
        }
        if (isset($map['ServiceVpcEnable'])) {
            $model->serviceVpcEnable = $map['ServiceVpcEnable'];
        }
        if (isset($map['AoneAppName'])) {
            $model->aoneAppName = $map['AoneAppName'];
        }
        if (isset($map['MockStatusCode'])) {
            $model->mockStatusCode = $map['MockStatusCode'];
        }
        if (isset($map['MockHeaders'])) {
            $model->mockHeaders = mockHeaders::fromMap($map['MockHeaders']);
        }
        if (isset($map['VpcConfig'])) {
            $model->vpcConfig = vpcConfig::fromMap($map['VpcConfig']);
        }
        if (isset($map['FunctionComputeConfig'])) {
            $model->functionComputeConfig = functionComputeConfig::fromMap($map['FunctionComputeConfig']);
        }

        return $model;
    }
}
