<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse\data\baselines;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse\data\bizProcesses;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse\data\nodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse\data\projects;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponse\data\robots;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description remindId
     *
     * @var int
     */
    public $remindId;

    /**
     * @description remindName
     *
     * @var string
     */
    public $remindName;

    /**
     * @description dndStart
     *
     * @var string
     */
    public $dndStart;

    /**
     * @description dndEnd
     *
     * @var string
     */
    public $dndEnd;

    /**
     * @description remindUnit
     *
     * @var string
     */
    public $remindUnit;

    /**
     * @description remindType
     *
     * @var string
     */
    public $remindType;

    /**
     * @description alertUnit
     *
     * @var string
     */
    public $alertUnit;

    /**
     * @description useflag
     *
     * @var bool
     */
    public $useflag;

    /**
     * @description founder
     *
     * @var string
     */
    public $founder;

    /**
     * @description alertInterval
     *
     * @var int
     */
    public $alertInterval;

    /**
     * @description detail
     *
     * @var string
     */
    public $detail;

    /**
     * @description maxAlertTimes
     *
     * @var int
     */
    public $maxAlertTimes;

    /**
     * @description robots
     *
     * @var array
     */
    public $robots;

    /**
     * @description nodes
     *
     * @var array
     */
    public $nodes;

    /**
     * @description baselines
     *
     * @var array
     */
    public $baselines;

    /**
     * @description projects
     *
     * @var array
     */
    public $projects;

    /**
     * @description bizProcesses
     *
     * @var array
     */
    public $bizProcesses;

    /**
     * @description alertMethods
     *
     * @var array
     */
    public $alertMethods;

    /**
     * @description alertTargets
     *
     * @var array
     */
    public $alertTargets;
    protected $_name = [
        'remindId'      => 'RemindId',
        'remindName'    => 'RemindName',
        'dndStart'      => 'DndStart',
        'dndEnd'        => 'DndEnd',
        'remindUnit'    => 'RemindUnit',
        'remindType'    => 'RemindType',
        'alertUnit'     => 'AlertUnit',
        'useflag'       => 'Useflag',
        'founder'       => 'Founder',
        'alertInterval' => 'AlertInterval',
        'detail'        => 'Detail',
        'maxAlertTimes' => 'MaxAlertTimes',
        'robots'        => 'Robots',
        'nodes'         => 'Nodes',
        'baselines'     => 'Baselines',
        'projects'      => 'Projects',
        'bizProcesses'  => 'BizProcesses',
        'alertMethods'  => 'AlertMethods',
        'alertTargets'  => 'AlertTargets',
    ];

    public function validate()
    {
        Model::validateRequired('remindId', $this->remindId, true);
        Model::validateRequired('remindName', $this->remindName, true);
        Model::validateRequired('dndStart', $this->dndStart, true);
        Model::validateRequired('dndEnd', $this->dndEnd, true);
        Model::validateRequired('remindUnit', $this->remindUnit, true);
        Model::validateRequired('remindType', $this->remindType, true);
        Model::validateRequired('alertUnit', $this->alertUnit, true);
        Model::validateRequired('useflag', $this->useflag, true);
        Model::validateRequired('founder', $this->founder, true);
        Model::validateRequired('alertInterval', $this->alertInterval, true);
        Model::validateRequired('detail', $this->detail, true);
        Model::validateRequired('maxAlertTimes', $this->maxAlertTimes, true);
        Model::validateRequired('robots', $this->robots, true);
        Model::validateRequired('nodes', $this->nodes, true);
        Model::validateRequired('baselines', $this->baselines, true);
        Model::validateRequired('projects', $this->projects, true);
        Model::validateRequired('bizProcesses', $this->bizProcesses, true);
        Model::validateRequired('alertMethods', $this->alertMethods, true);
        Model::validateRequired('alertTargets', $this->alertTargets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->dndStart) {
            $res['DndStart'] = $this->dndStart;
        }
        if (null !== $this->dndEnd) {
            $res['DndEnd'] = $this->dndEnd;
        }
        if (null !== $this->remindUnit) {
            $res['RemindUnit'] = $this->remindUnit;
        }
        if (null !== $this->remindType) {
            $res['RemindType'] = $this->remindType;
        }
        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }
        if (null !== $this->useflag) {
            $res['Useflag'] = $this->useflag;
        }
        if (null !== $this->founder) {
            $res['Founder'] = $this->founder;
        }
        if (null !== $this->alertInterval) {
            $res['AlertInterval'] = $this->alertInterval;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->maxAlertTimes) {
            $res['MaxAlertTimes'] = $this->maxAlertTimes;
        }
        if (null !== $this->robots) {
            $res['Robots'] = [];
            if (null !== $this->robots && \is_array($this->robots)) {
                $n = 0;
                foreach ($this->robots as $item) {
                    $res['Robots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->baselines) {
            $res['Baselines'] = [];
            if (null !== $this->baselines && \is_array($this->baselines)) {
                $n = 0;
                foreach ($this->baselines as $item) {
                    $res['Baselines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projects) {
            $res['Projects'] = [];
            if (null !== $this->projects && \is_array($this->projects)) {
                $n = 0;
                foreach ($this->projects as $item) {
                    $res['Projects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizProcesses) {
            $res['BizProcesses'] = [];
            if (null !== $this->bizProcesses && \is_array($this->bizProcesses)) {
                $n = 0;
                foreach ($this->bizProcesses as $item) {
                    $res['BizProcesses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = [];
            if (null !== $this->alertMethods) {
                $res['AlertMethods'] = $this->alertMethods;
            }
        }
        if (null !== $this->alertTargets) {
            $res['AlertTargets'] = [];
            if (null !== $this->alertTargets) {
                $res['AlertTargets'] = $this->alertTargets;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['DndStart'])) {
            $model->dndStart = $map['DndStart'];
        }
        if (isset($map['DndEnd'])) {
            $model->dndEnd = $map['DndEnd'];
        }
        if (isset($map['RemindUnit'])) {
            $model->remindUnit = $map['RemindUnit'];
        }
        if (isset($map['RemindType'])) {
            $model->remindType = $map['RemindType'];
        }
        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }
        if (isset($map['Useflag'])) {
            $model->useflag = $map['Useflag'];
        }
        if (isset($map['Founder'])) {
            $model->founder = $map['Founder'];
        }
        if (isset($map['AlertInterval'])) {
            $model->alertInterval = $map['AlertInterval'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['MaxAlertTimes'])) {
            $model->maxAlertTimes = $map['MaxAlertTimes'];
        }
        if (isset($map['Robots'])) {
            if (!empty($map['Robots'])) {
                $model->robots = [];
                $n             = 0;
                foreach ($map['Robots'] as $item) {
                    $model->robots[$n++] = null !== $item ? robots::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Baselines'])) {
            if (!empty($map['Baselines'])) {
                $model->baselines = [];
                $n                = 0;
                foreach ($map['Baselines'] as $item) {
                    $model->baselines[$n++] = null !== $item ? baselines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = [];
                $n               = 0;
                foreach ($map['Projects'] as $item) {
                    $model->projects[$n++] = null !== $item ? projects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizProcesses'])) {
            if (!empty($map['BizProcesses'])) {
                $model->bizProcesses = [];
                $n                   = 0;
                foreach ($map['BizProcesses'] as $item) {
                    $model->bizProcesses[$n++] = null !== $item ? bizProcesses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AlertMethods'])) {
            if (!empty($map['AlertMethods'])) {
                $model->alertMethods = [];
                $model->alertMethods = $map['AlertMethods'];
            }
        }
        if (isset($map['AlertTargets'])) {
            if (!empty($map['AlertTargets'])) {
                $model->alertTargets = [];
                $model->alertTargets = $map['AlertTargets'];
            }
        }

        return $model;
    }
}
