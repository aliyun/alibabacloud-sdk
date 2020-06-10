<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule\eventPattern;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule\eventPattern\eventPattern\eventTypeList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule\eventPattern\eventPattern\levelList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules\eventRule\eventPattern\eventPattern\nameList;
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
     * @var nameList
     */
    public $nameList;

    /**
     * @description levelList
     *
     * @var levelList
     */
    public $levelList;

    /**
     * @description eventType
     *
     * @var eventTypeList
     */
    public $eventTypeList;
    protected $_name = [
        'product'       => 'Product',
        'nameList'      => 'NameList',
        'levelList'     => 'LevelList',
        'eventTypeList' => 'EventTypeList',
    ];

    public function validate()
    {
        Model::validateRequired('product', $this->product, true);
        Model::validateRequired('nameList', $this->nameList, true);
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
            $res['NameList'] = null !== $this->nameList ? $this->nameList->toMap() : null;
        }
        if (null !== $this->levelList) {
            $res['LevelList'] = null !== $this->levelList ? $this->levelList->toMap() : null;
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = null !== $this->eventTypeList ? $this->eventTypeList->toMap() : null;
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
            $model->nameList = nameList::fromMap($map['NameList']);
        }
        if (isset($map['LevelList'])) {
            $model->levelList = levelList::fromMap($map['LevelList']);
        }
        if (isset($map['EventTypeList'])) {
            $model->eventTypeList = eventTypeList::fromMap($map['EventTypeList']);
        }

        return $model;
    }
}
