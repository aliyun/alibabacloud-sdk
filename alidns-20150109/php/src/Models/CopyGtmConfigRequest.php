<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class CopyGtmConfigRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description sourceId
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description targetId
     *
     * @var string
     */
    public $targetId;

    /**
     * @description copyType
     *
     * @var string
     */
    public $copyType;
    protected $_name = [
        'lang'     => 'Lang',
        'sourceId' => 'SourceId',
        'targetId' => 'TargetId',
        'copyType' => 'CopyType',
    ];

    public function validate()
    {
        Model::validateRequired('sourceId', $this->sourceId, true);
        Model::validateRequired('targetId', $this->targetId, true);
        Model::validateRequired('copyType', $this->copyType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->copyType) {
            $res['CopyType'] = $this->copyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyGtmConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['CopyType'])) {
            $model->copyType = $map['CopyType'];
        }

        return $model;
    }
}
