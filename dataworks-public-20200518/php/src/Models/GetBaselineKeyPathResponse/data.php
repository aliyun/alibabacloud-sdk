<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponse\data\runs;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponse\data\topics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description instanceId
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description nodeId
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description nodeName
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description bizdate
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description inGroupId
     *
     * @var int
     */
    public $inGroupId;

    /**
     * @description owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description prgType
     *
     * @var int
     */
    public $prgType;

    /**
     * @description runs
     *
     * @var array
     */
    public $runs;

    /**
     * @description topics
     *
     * @var array
     */
    public $topics;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'projectId'  => 'ProjectId',
        'nodeId'     => 'NodeId',
        'nodeName'   => 'NodeName',
        'bizdate'    => 'Bizdate',
        'inGroupId'  => 'InGroupId',
        'owner'      => 'Owner',
        'prgType'    => 'PrgType',
        'runs'       => 'Runs',
        'topics'     => 'Topics',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
        Model::validateRequired('inGroupId', $this->inGroupId, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('prgType', $this->prgType, true);
        Model::validateRequired('runs', $this->runs, true);
        Model::validateRequired('topics', $this->topics, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->prgType) {
            $res['PrgType'] = $this->prgType;
        }
        if (null !== $this->runs) {
            $res['Runs'] = [];
            if (null !== $this->runs && \is_array($this->runs)) {
                $n = 0;
                foreach ($this->runs as $item) {
                    $res['Runs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topics) {
            $res['Topics'] = [];
            if (null !== $this->topics && \is_array($this->topics)) {
                $n = 0;
                foreach ($this->topics as $item) {
                    $res['Topics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PrgType'])) {
            $model->prgType = $map['PrgType'];
        }
        if (isset($map['Runs'])) {
            if (!empty($map['Runs'])) {
                $model->runs = [];
                $n           = 0;
                foreach ($map['Runs'] as $item) {
                    $model->runs[$n++] = null !== $item ? runs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n             = 0;
                foreach ($map['Topics'] as $item) {
                    $model->topics[$n++] = null !== $item ? topics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
