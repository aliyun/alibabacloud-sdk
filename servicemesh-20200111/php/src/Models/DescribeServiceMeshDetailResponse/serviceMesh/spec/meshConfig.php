<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\audit;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\OPA;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponse\serviceMesh\spec\meshConfig\pilot;
use AlibabaCloud\Tea\Model;

class meshConfig extends Model
{
    /**
     * @description enable_localitylb
     *
     * @var bool
     */
    public $enableLocalityLB;

    /**
     * @description telemetry_v2
     *
     * @var bool
     */
    public $telemetry;

    /**
     * @description tracing
     *
     * @var bool
     */
    public $tracing;

    /**
     * @description customizedZipkin
     *
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @description pilot
     *
     * @var pilot
     */
    public $pilot;

    /**
     * @description opa
     *
     * @var OPA
     */
    public $OPA;

    /**
     * @description audit
     *
     * @var audit
     */
    public $audit;
    protected $_name = [
        'enableLocalityLB' => 'EnableLocalityLB',
        'telemetry'        => 'Telemetry',
        'tracing'          => 'Tracing',
        'customizedZipkin' => 'CustomizedZipkin',
        'pilot'            => 'Pilot',
        'OPA'              => 'OPA',
        'audit'            => 'Audit',
    ];

    public function validate()
    {
        Model::validateRequired('enableLocalityLB', $this->enableLocalityLB, true);
        Model::validateRequired('telemetry', $this->telemetry, true);
        Model::validateRequired('tracing', $this->tracing, true);
        Model::validateRequired('customizedZipkin', $this->customizedZipkin, true);
        Model::validateRequired('pilot', $this->pilot, true);
        Model::validateRequired('OPA', $this->OPA, true);
        Model::validateRequired('audit', $this->audit, true);
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
        if (null !== $this->pilot) {
            $res['Pilot'] = null !== $this->pilot ? $this->pilot->toMap() : null;
        }
        if (null !== $this->OPA) {
            $res['OPA'] = null !== $this->OPA ? $this->OPA->toMap() : null;
        }
        if (null !== $this->audit) {
            $res['Audit'] = null !== $this->audit ? $this->audit->toMap() : null;
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
        if (isset($map['Pilot'])) {
            $model->pilot = pilot::fromMap($map['Pilot']);
        }
        if (isset($map['OPA'])) {
            $model->OPA = OPA::fromMap($map['OPA']);
        }
        if (isset($map['Audit'])) {
            $model->audit = audit::fromMap($map['Audit']);
        }

        return $model;
    }
}
