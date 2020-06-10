<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessRequest\alertConfig;
use AlibabaCloud\Tea\Model;

class ModifyGroupMonitoringAgentProcessRequest extends Model
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
     * @description filterRelation
     *
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @description groupAlertJson
     *
     * @var array
     */
    public $alertConfig;
    protected $_name = [
        'id'                         => 'Id',
        'groupId'                    => 'GroupId',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'alertConfig'                => 'AlertConfig',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('groupId', $this->groupId, true);
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
        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = [];
            if (null !== $this->alertConfig && \is_array($this->alertConfig)) {
                $n = 0;
                foreach ($this->alertConfig as $item) {
                    $res['AlertConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGroupMonitoringAgentProcessRequest
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
        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }
        if (isset($map['AlertConfig'])) {
            if (!empty($map['AlertConfig'])) {
                $model->alertConfig = [];
                $n                  = 0;
                foreach ($map['AlertConfig'] as $item) {
                    $model->alertConfig[$n++] = null !== $item ? alertConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
