<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\audit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\OPA;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\pilot;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\proxy;
use AlibabaCloud\Tea\Model;

class meshConfig extends Model
{
    /**
     * @var bool
     */
    public $enableLocalityLB;

    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @var string
     */
    public $includeIPRanges;

    /**
     * @var pilot
     */
    public $pilot;

    /**
     * @var OPA
     */
    public $OPA;

    /**
     * @var audit
     */
    public $audit;

    /**
     * @var proxy
     */
    public $proxy;
    protected $_name = [
        'enableLocalityLB'      => 'EnableLocalityLB',
        'telemetry'             => 'Telemetry',
        'tracing'               => 'Tracing',
        'customizedZipkin'      => 'CustomizedZipkin',
        'outboundTrafficPolicy' => 'OutboundTrafficPolicy',
        'includeIPRanges'       => 'IncludeIPRanges',
        'pilot'                 => 'Pilot',
        'OPA'                   => 'OPA',
        'audit'                 => 'Audit',
        'proxy'                 => 'Proxy',
    ];

    public function validate()
    {
        Model::validateRequired('enableLocalityLB', $this->enableLocalityLB, true);
        Model::validateRequired('telemetry', $this->telemetry, true);
        Model::validateRequired('tracing', $this->tracing, true);
        Model::validateRequired('customizedZipkin', $this->customizedZipkin, true);
        Model::validateRequired('outboundTrafficPolicy', $this->outboundTrafficPolicy, true);
        Model::validateRequired('includeIPRanges', $this->includeIPRanges, true);
        Model::validateRequired('pilot', $this->pilot, true);
        Model::validateRequired('OPA', $this->OPA, true);
        Model::validateRequired('audit', $this->audit, true);
        Model::validateRequired('proxy', $this->proxy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableLocalityLB) {
            $res['EnableLocalityLB'] = $this->enableLocalityLB;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->customizedZipkin) {
            $res['CustomizedZipkin'] = $this->customizedZipkin;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->pilot) {
            $res['Pilot'] = null !== $this->pilot ? $this->pilot->toMap() : null;
        }
        if (null !== $this->OPA) {
            $res['OPA'] = null !== $this->OPA ? $this->OPA->toMap() : null;
        }
        if (null !== $this->audit) {
            $res['Audit'] = null !== $this->audit ? $this->audit->toMap() : null;
        }
        if (null !== $this->proxy) {
            $res['Proxy'] = null !== $this->proxy ? $this->proxy->toMap() : null;
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
        if (isset($map['EnableLocalityLB'])) {
            $model->enableLocalityLB = $map['EnableLocalityLB'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['CustomizedZipkin'])) {
            $model->customizedZipkin = $map['CustomizedZipkin'];
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['Pilot'])) {
            $model->pilot = pilot::fromMap($map['Pilot']);
        }
        if (isset($map['OPA'])) {
            $model->OPA = OPA::fromMap($map['OPA']);
        }
        if (isset($map['Audit'])) {
            $model->audit = audit::fromMap($map['Audit']);
        }
        if (isset($map['Proxy'])) {
            $model->proxy = proxy::fromMap($map['Proxy']);
        }

        return $model;
    }
}
