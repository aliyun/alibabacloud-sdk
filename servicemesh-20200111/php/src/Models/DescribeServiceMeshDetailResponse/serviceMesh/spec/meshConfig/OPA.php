<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class OPA extends Model
{
    /**
     * @description enabled
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description logLevel
     *
     * @var string
     */
    public $logLevel;

    /**
     * @description requestCPU
     *
     * @var string
     */
    public $requestCPU;

    /**
     * @description requestMemory
     *
     * @var string
     */
    public $requestMemory;

    /**
     * @description limitCPU
     *
     * @var string
     */
    public $limitCPU;

    /**
     * @description limitMemory
     *
     * @var string
     */
    public $limitMemory;
    protected $_name = [
        'enabled'       => 'Enabled',
        'logLevel'      => 'LogLevel',
        'requestCPU'    => 'RequestCPU',
        'requestMemory' => 'RequestMemory',
        'limitCPU'      => 'LimitCPU',
        'limitMemory'   => 'LimitMemory',
    ];

    public function validate()
    {
        Model::validateRequired('enabled', $this->enabled, true);
        Model::validateRequired('logLevel', $this->logLevel, true);
        Model::validateRequired('requestCPU', $this->requestCPU, true);
        Model::validateRequired('requestMemory', $this->requestMemory, true);
        Model::validateRequired('limitCPU', $this->limitCPU, true);
        Model::validateRequired('limitMemory', $this->limitMemory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OPA
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }

        return $model;
    }
}
