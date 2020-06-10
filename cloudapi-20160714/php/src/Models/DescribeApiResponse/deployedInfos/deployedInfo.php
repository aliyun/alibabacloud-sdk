<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\deployedInfos;

use AlibabaCloud\Tea\Model;

class deployedInfo extends Model
{
    /**
     * @description stageName
     *
     * @var string
     */
    public $stageName;

    /**
     * @description runVersion
     *
     * @var string
     */
    public $effectiveVersion;

    /**
     * @description deployedStatus
     *
     * @var string
     */
    public $deployedStatus;
    protected $_name = [
        'stageName'        => 'StageName',
        'effectiveVersion' => 'EffectiveVersion',
        'deployedStatus'   => 'DeployedStatus',
    ];

    public function validate()
    {
        Model::validateRequired('stageName', $this->stageName, true);
        Model::validateRequired('effectiveVersion', $this->effectiveVersion, true);
        Model::validateRequired('deployedStatus', $this->deployedStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->effectiveVersion) {
            $res['EffectiveVersion'] = $this->effectiveVersion;
        }
        if (null !== $this->deployedStatus) {
            $res['DeployedStatus'] = $this->deployedStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployedInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['EffectiveVersion'])) {
            $model->effectiveVersion = $map['EffectiveVersion'];
        }
        if (isset($map['DeployedStatus'])) {
            $model->deployedStatus = $map['DeployedStatus'];
        }

        return $model;
    }
}
