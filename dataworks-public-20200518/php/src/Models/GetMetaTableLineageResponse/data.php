<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponse\data\dataEntityList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description hasNext
     *
     * @var bool
     */
    public $hasNext;

    /**
     * @description nextPrimaryKey
     *
     * @var string
     */
    public $nextPrimaryKey;

    /**
     * @description recordList
     *
     * @var array
     */
    public $dataEntityList;
    protected $_name = [
        'hasNext'        => 'HasNext',
        'nextPrimaryKey' => 'NextPrimaryKey',
        'dataEntityList' => 'DataEntityList',
    ];

    public function validate()
    {
        Model::validateRequired('hasNext', $this->hasNext, true);
        Model::validateRequired('nextPrimaryKey', $this->nextPrimaryKey, true);
        Model::validateRequired('dataEntityList', $this->dataEntityList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasNext) {
            $res['HasNext'] = $this->hasNext;
        }
        if (null !== $this->nextPrimaryKey) {
            $res['NextPrimaryKey'] = $this->nextPrimaryKey;
        }
        if (null !== $this->dataEntityList) {
            $res['DataEntityList'] = [];
            if (null !== $this->dataEntityList && \is_array($this->dataEntityList)) {
                $n = 0;
                foreach ($this->dataEntityList as $item) {
                    $res['DataEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['HasNext'])) {
            $model->hasNext = $map['HasNext'];
        }
        if (isset($map['NextPrimaryKey'])) {
            $model->nextPrimaryKey = $map['NextPrimaryKey'];
        }
        if (isset($map['DataEntityList'])) {
            if (!empty($map['DataEntityList'])) {
                $model->dataEntityList = [];
                $n                     = 0;
                foreach ($map['DataEntityList'] as $item) {
                    $model->dataEntityList[$n++] = null !== $item ? dataEntityList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
