<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksResponse\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model {
    protected $_name = [
        'taskId' => 'TaskId',
        'objectPath' => 'ObjectPath',
        'process' => 'Process',
        'status' => 'Status',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'objectType' => 'ObjectType',
    ];
    public function validate() {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('objectPath', $this->objectPath, true);
        Model::validateRequired('process', $this->process, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('objectType', $this->objectType, true);
    }
    public function toMap() {
        $res = [];
        $res['TaskId'] = $this->taskId;
        $res['ObjectPath'] = $this->objectPath;
        $res['Process'] = $this->process;
        $res['Status'] = $this->status;
        $res['CreationTime'] = $this->creationTime;
        $res['Description'] = $this->description;
        $res['ObjectType'] = $this->objectType;
        return $res;
    }
    /**
     * @param array $map
     * @return task
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
        }
        if(isset($map['ObjectPath'])){
            $model->objectPath = $map['ObjectPath'];
        }
        if(isset($map['Process'])){
            $model->process = $map['Process'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['ObjectType'])){
            $model->objectType = $map['ObjectType'];
        }
        return $model;
    }
    /**
     * @description taskIdStr
     * @var string
     */
    public $taskId;

    /**
     * @description model.content
     * @var string
     */
    public $objectPath;

    /**
     * @description model.process
     * @var string
     */
    public $process;

    /**
     * @description statusStr
     * @var string
     */
    public $status;

    /**
     * @description model.gmtCreatedStr
     * @var string
     */
    public $creationTime;

    /**
     * @description model.description
     * @var string
     */
    public $description;

    /**
     * @description model.taskType
     * @var string
     */
    public $objectType;

}
