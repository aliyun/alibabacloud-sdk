<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponse\serviceMeshes\spec;

use AlibabaCloud\Tea\Model;

class meshConfig extends Model
{
    /**
     * @var bool
     */
    public $mtls;

    /**
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @var bool
     */
    public $strictMtls;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var bool
     */
    public $telemetry;
    protected $_name = [
        'mtls'                  => 'Mtls',
        'outboundTrafficPolicy' => 'OutboundTrafficPolicy',
        'strictMtls'            => 'StrictMtls',
        'tracing'               => 'Tracing',
        'telemetry'             => 'Telemetry',
    ];

    public function validate()
    {
        Model::validateRequired('mtls', $this->mtls, true);
        Model::validateRequired('outboundTrafficPolicy', $this->outboundTrafficPolicy, true);
        Model::validateRequired('strictMtls', $this->strictMtls, true);
        Model::validateRequired('tracing', $this->tracing, true);
        Model::validateRequired('telemetry', $this->telemetry, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mtls) {
            $res['Mtls'] = $this->mtls;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->strictMtls) {
            $res['StrictMtls'] = $this->strictMtls;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meshConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mtls'])) {
            $model->mtls = $map['Mtls'];
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['StrictMtls'])) {
            $model->strictMtls = $map['StrictMtls'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }

        return $model;
    }
}
