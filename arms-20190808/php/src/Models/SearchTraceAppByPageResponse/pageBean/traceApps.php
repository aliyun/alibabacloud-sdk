<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByPageResponse\pageBean;

use AlibabaCloud\Tea\Model;

class traceApps extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $appId;

    /**
     * @description pid
     *
     * @var string
     */
    public $pid;

    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description userId
     *
     * @var string
     */
    public $userId;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description createtime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description updatetime
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'appId'      => 'AppId',
        'pid'        => 'Pid',
        'appName'    => 'AppName',
        'type'       => 'Type',
        'userId'     => 'UserId',
        'regionId'   => 'RegionId',
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('pid', $this->pid, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traceApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
