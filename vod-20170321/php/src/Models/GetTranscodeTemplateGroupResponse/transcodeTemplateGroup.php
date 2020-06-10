<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponse\transcodeTemplateGroup\transcodeTemplateList;
use AlibabaCloud\Tea\Model;

class transcodeTemplateGroup extends Model
{
    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description modifyTime
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description isDefault
     *
     * @var string
     */
    public $isDefault;

    /**
     * @description locked
     *
     * @var string
     */
    public $locked;

    /**
     * @description transcodeMode
     *
     * @var string
     */
    public $transcodeMode;

    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description transcodeTemplateGroupId
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description transcodeTemplateList
     *
     * @var array
     */
    public $transcodeTemplateList;
    protected $_name = [
        'creationTime'             => 'CreationTime',
        'modifyTime'               => 'ModifyTime',
        'name'                     => 'Name',
        'isDefault'                => 'IsDefault',
        'locked'                   => 'Locked',
        'transcodeMode'            => 'TranscodeMode',
        'appId'                    => 'AppId',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateList'    => 'TranscodeTemplateList',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
        }
        if (null !== $this->transcodeMode) {
            $res['TranscodeMode'] = $this->transcodeMode;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->transcodeTemplateList) {
            $res['TranscodeTemplateList'] = [];
            if (null !== $this->transcodeTemplateList && \is_array($this->transcodeTemplateList)) {
                $n = 0;
                foreach ($this->transcodeTemplateList as $item) {
                    $res['TranscodeTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeTemplateGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Locked'])) {
            $model->locked = $map['Locked'];
        }
        if (isset($map['TranscodeMode'])) {
            $model->transcodeMode = $map['TranscodeMode'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['TranscodeTemplateList'])) {
            if (!empty($map['TranscodeTemplateList'])) {
                $model->transcodeTemplateList = [];
                $n                            = 0;
                foreach ($map['TranscodeTemplateList'] as $item) {
                    $model->transcodeTemplateList[$n++] = null !== $item ? transcodeTemplateList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
