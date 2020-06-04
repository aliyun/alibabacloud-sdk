<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTemplateGroupResponse;

use AlibabaCloud\Tea\Model;

class transcodeTemplateGroupList extends Model {
    protected $_name = [
        'creationTime' => 'CreationTime',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'isDefault' => 'IsDefault',
        'locked' => 'Locked',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeMode' => 'TranscodeMode',
        'appId' => 'AppId',
    ];
    public function validate() {
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('locked', $this->locked, true);
        Model::validateRequired('transcodeTemplateGroupId', $this->transcodeTemplateGroupId, true);
        Model::validateRequired('transcodeMode', $this->transcodeMode, true);
        Model::validateRequired('appId', $this->appId, true);
    }
    public function toMap() {
        $res = [];
        $res['CreationTime'] = $this->creationTime;
        $res['ModifyTime'] = $this->modifyTime;
        $res['Name'] = $this->name;
        $res['IsDefault'] = $this->isDefault;
        $res['Locked'] = $this->locked;
        $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        $res['TranscodeMode'] = $this->transcodeMode;
        $res['AppId'] = $this->appId;
        return $res;
    }
    /**
     * @param array $map
     * @return transcodeTemplateGroupList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ModifyTime'])){
            $model->modifyTime = $map['ModifyTime'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['IsDefault'])){
            $model->isDefault = $map['IsDefault'];
        }
        if(isset($map['Locked'])){
            $model->locked = $map['Locked'];
        }
        if(isset($map['TranscodeTemplateGroupId'])){
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if(isset($map['TranscodeMode'])){
            $model->transcodeMode = $map['TranscodeMode'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        return $model;
    }
    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description modifyTime
     * @var string
     */
    public $modifyTime;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description isDefault
     * @var string
     */
    public $isDefault;

    /**
     * @description locked
     * @var string
     */
    public $locked;

    /**
     * @description transcodeTemplateGroupId
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description transcodeMode
     * @var string
     */
    public $transcodeMode;

    /**
     * @description appId
     * @var string
     */
    public $appId;

}
