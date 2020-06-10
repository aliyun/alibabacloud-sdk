<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMonitoringAgentProcessRequest\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMonitoringAgentProcessRequest\matchExpress;
use AlibabaCloud\Tea\Model;

class CreateGroupMonitoringAgentProcessRequest extends Model
{
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
     * @description filterRelation
     *
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @description filterJson
     *
     * @var array
     */
    public $matchExpress;

    /**
     * @description groupAlertJson
     *
     * @var array
     */
    public $alertConfig;
    protected $_name = [
        'groupId'                    => 'GroupId',
        'processName'                => 'ProcessName',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'matchExpress'               => 'MatchExpress',
        'alertConfig'                => 'AlertConfig',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('alertConfig', $this->alertConfig, true);
    }

    public function toMap()
    {
        $res = [];
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
            $res['MatchExpress'] = [];
            if (null !== $this->matchExpress && \is_array($this->matchExpress)) {
                $n = 0;
                foreach ($this->matchExpress as $item) {
                    $res['MatchExpress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateGroupMonitoringAgentProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
            if (!empty($map['MatchExpress'])) {
                $model->matchExpress = [];
                $n                   = 0;
                foreach ($map['MatchExpress'] as $item) {
                    $model->matchExpress[$n++] = null !== $item ? matchExpress::fromMap($item) : $item;
                }
            }
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
