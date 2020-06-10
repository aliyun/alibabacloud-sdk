<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponse\processes;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponse\processes\process\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponse\processes\process\matchExpress;
use AlibabaCloud\Tea\Model;

class process extends Model
{
    /**
     * @description uuid
     *
     * @var string
     */
    public $id;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description processKeyword
     *
     * @var string
     */
    public $processName;

    /**
     * @description matchExpress.filterRelation
     *
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @description matchExpress.filters
     *
     * @var matchExpress
     */
    public $matchExpress;

    /**
     * @description groupAlert
     *
     * @var alertConfig
     */
    public $alertConfig;
    protected $_name = [
        'id'                         => 'Id',
        'groupId'                    => 'GroupId',
        'processName'                => 'ProcessName',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'matchExpress'               => 'MatchExpress',
        'alertConfig'                => 'AlertConfig',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('processName', $this->processName, true);
        Model::validateRequired('matchExpressFilterRelation', $this->matchExpressFilterRelation, true);
        Model::validateRequired('matchExpress', $this->matchExpress, true);
        Model::validateRequired('alertConfig', $this->alertConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = null !== $this->matchExpress ? $this->matchExpress->toMap() : null;
        }
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return process
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }
        if (isset($map['MatchExpress'])) {
            $model->matchExpress = matchExpress::fromMap($map['MatchExpress']);
        }
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }

        return $model;
    }
}
