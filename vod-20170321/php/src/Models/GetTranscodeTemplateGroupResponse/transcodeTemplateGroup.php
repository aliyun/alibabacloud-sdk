<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponse\transcodeTemplateGroup\transcodeTemplateList;

class transcodeTemplateGroup extends Model {
    protected $_name = [
        'creationTime' => 'CreationTime',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'isDefault' => 'IsDefault',
        'locked' => 'Locked',
        'transcodeMode' => 'TranscodeMode',
        'appId' => 'AppId',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateList' => 'TranscodeTemplateList',
    ];
    public function validate() {
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('locked', $this->locked, true);
        Model::validateRequired('transcodeMode', $this->transcodeMode, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('transcodeTemplateGroupId', $this->transcodeTemplateGroupId, true);
        Model::validateRequired('transcodeTemplateList', $this->transcodeTemplateList, true);
    }
    public function toMap() {
        $res = [];
        $res['CreationTime'] = $this->creationTime;
        $res['ModifyTime'] = $this->modifyTime;
        $res['Name'] = $this->name;
        $res['IsDefault'] = $this->isDefault;
        $res['Locked'] = $this->locked;
        $res['TranscodeMode'] = $this->transcodeMode;
        $res['AppId'] = $this->appId;
        $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        $res['TranscodeTemplateList'] = [];
        if(null !== $this->transcodeTemplateList && is_array($this->transcodeTemplateList)){
            $n = 0;
            foreach($this->transcodeTemplateList as $item){
                $res['TranscodeTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return transcodeTemplateGroup
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
        if(isset($map['TranscodeMode'])){
            $model->transcodeMode = $map['TranscodeMode'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        if(isset($map['TranscodeTemplateGroupId'])){
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if(isset($map['TranscodeTemplateList'])){
            if(!empty($map['TranscodeTemplateList'])){
                $model->transcodeTemplateList = [];
                $n = 0;
                foreach($map['TranscodeTemplateList'] as $item) {
                    $model->transcodeTemplateList[$n++] = null !== $item ? transcodeTemplateList::fromMap($item) : $item;
                }
            }
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
     * @description transcodeMode
     * @var string
     */
    public $transcodeMode;

    /**
     * @description appId
     * @var string
     */
    public $appId;

    /**
     * @description transcodeTemplateGroupId
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description transcodeTemplateList
     * @var array
     */
    public $transcodeTemplateList;

}
