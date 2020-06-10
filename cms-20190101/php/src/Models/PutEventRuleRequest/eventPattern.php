<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleRequest;

use AlibabaCloud\Tea\Model;

class eventPattern extends Model
{
    /**
     * @description product
     *
     * @var string
     */
    public $product;

    /**
     * @description nameList
     *
     * @var array
     */
    public $nameList;

    /**
     * @description statusList
     *
     * @var array
     */
    public $statusList;

    /**
     * @description levelList
     *
     * @var array
     */
    public $levelList;

    /**
     * @description eventType
     *
     * @var array
     */
    public $eventTypeList;
    protected $_name = [
        'product'       => 'Product',
        'nameList'      => 'NameList',
        'statusList'    => 'StatusList',
        'levelList'     => 'LevelList',
        'eventTypeList' => 'EventTypeList',
    ];

    public function validate()
    {
        Model::validateRequired('nameList', $this->nameList, true);
        Model::validateRequired('statusList', $this->statusList, true);
        Model::validateRequired('levelList', $this->levelList, true);
        Model::validateRequired('eventTypeList', $this->eventTypeList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = [];
            if (null !== $this->nameList) {
                $res['NameList'] = $this->nameList;
            }
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = [];
            if (null !== $this->statusList) {
                $res['StatusList'] = $this->statusList;
            }
        }
        if (null !== $this->levelList) {
            $res['LevelList'] = [];
            if (null !== $this->levelList) {
                $res['LevelList'] = $this->levelList;
            }
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = [];
            if (null !== $this->eventTypeList) {
                $res['EventTypeList'] = $this->eventTypeList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventPattern
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['NameList'])) {
            if (!empty($map['NameList'])) {
                $model->nameList = [];
                $model->nameList = $map['NameList'];
            }
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['LevelList'])) {
            if (!empty($map['LevelList'])) {
                $model->levelList = [];
                $model->levelList = $map['LevelList'];
            }
        }
        if (isset($map['EventTypeList'])) {
            if (!empty($map['EventTypeList'])) {
                $model->eventTypeList = [];
                $model->eventTypeList = $map['EventTypeList'];
            }
        }

        return $model;
    }
}
