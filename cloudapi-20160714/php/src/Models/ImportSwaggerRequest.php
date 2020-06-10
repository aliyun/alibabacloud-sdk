<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ImportSwaggerRequest extends Model
{
    /**
     * @description overwrite
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @description globalCondition
     *
     * @var array
     */
    public $globalCondition;

    /**
     * @description dataFormat
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @description data
     *
     * @var string
     */
    public $data;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;
    protected $_name = [
        'overwrite'       => 'Overwrite',
        'globalCondition' => 'GlobalCondition',
        'dataFormat'      => 'DataFormat',
        'data'            => 'Data',
        'groupId'         => 'GroupId',
    ];

    public function validate()
    {
        Model::validateRequired('overwrite', $this->overwrite, true);
        Model::validateRequired('dataFormat', $this->dataFormat, true);
        Model::validateRequired('data', $this->data, true);
        Model::validateRequired('groupId', $this->groupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->globalCondition) {
            $res['GlobalCondition'] = $this->globalCondition;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportSwaggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['GlobalCondition'])) {
            $model->globalCondition = $map['GlobalCondition'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
