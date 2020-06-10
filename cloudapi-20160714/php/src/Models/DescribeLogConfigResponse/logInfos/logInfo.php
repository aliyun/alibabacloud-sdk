<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeLogConfigResponse\logInfos;

use AlibabaCloud\Tea\Model;

class logInfo extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description slsProject
     *
     * @var string
     */
    public $slsProject;

    /**
     * @description slsLogStore
     *
     * @var string
     */
    public $slsLogStore;

    /**
     * @description logType
     *
     * @var string
     */
    public $logType;
    protected $_name = [
        'regionId'    => 'RegionId',
        'slsProject'  => 'SlsProject',
        'slsLogStore' => 'SlsLogStore',
        'logType'     => 'LogType',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('slsProject', $this->slsProject, true);
        Model::validateRequired('slsLogStore', $this->slsLogStore, true);
        Model::validateRequired('logType', $this->logType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->slsLogStore) {
            $res['SlsLogStore'] = $this->slsLogStore;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['SlsLogStore'])) {
            $model->slsLogStore = $map['SlsLogStore'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        return $model;
    }
}
