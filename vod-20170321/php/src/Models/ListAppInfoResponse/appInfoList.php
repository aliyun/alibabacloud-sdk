<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAppInfoResponse;

use AlibabaCloud\Tea\Model;

class appInfoList extends Model {
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'type' => 'Type',
        'description' => 'Description',
        'status' => 'Status',
        'creationTime' => 'CreationTime',
        'modificationTime' => 'ModificationTime',
    ];
    public function validate() {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
    }
    public function toMap() {
        $res = [];
        $res['AppId'] = $this->appId;
        $res['AppName'] = $this->appName;
        $res['Type'] = $this->type;
        $res['Description'] = $this->description;
        $res['Status'] = $this->status;
        $res['CreationTime'] = $this->creationTime;
        $res['ModificationTime'] = $this->modificationTime;
        return $res;
    }
    /**
     * @param array $map
     * @return appInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        if(isset($map['AppName'])){
            $model->appName = $map['AppName'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ModificationTime'])){
            $model->modificationTime = $map['ModificationTime'];
        }
        return $model;
    }
    /**
     * @description appId
     * @var string
     */
    public $appId;

    /**
     * @description appName
     * @var string
     */
    public $appName;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description utcCreate
     * @var string
     */
    public $creationTime;

    /**
     * @description utcModified
     * @var string
     */
    public $modificationTime;

}
