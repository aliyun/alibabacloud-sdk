<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponse\result;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponse\result\eventPattern\levelList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponse\result\eventPattern\nameList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponse\result\eventPattern\statusList;
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
     * @description statusList
     *
     * @var statusList
     */
    public $statusList;

    /**
     * @description levelList
     *
     * @var levelList
     */
    public $levelList;
    protected $_name = [
        'product'    => 'Product',
        'nameList'   => 'NameList',
        'statusList' => 'StatusList',
        'levelList'  => 'LevelList',
    ];

    public function validate()
    {
        Model::validateRequired('product', $this->product, true);
        Model::validateRequired('nameList', $this->nameList, true);
        Model::validateRequired('statusList', $this->statusList, true);
        Model::validateRequired('levelList', $this->levelList, true);
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
        if (null !== $this->statusList) {
            $res['StatusList'] = null !== $this->statusList ? $this->statusList->toMap() : null;
        }
        if (null !== $this->levelList) {
            $res['LevelList'] = null !== $this->levelList ? $this->levelList->toMap() : null;
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
        if (isset($map['StatusList'])) {
            $model->statusList = statusList::fromMap($map['StatusList']);
        }
        if (isset($map['LevelList'])) {
            $model->levelList = levelList::fromMap($map['LevelList']);
        }

        return $model;
    }
}
