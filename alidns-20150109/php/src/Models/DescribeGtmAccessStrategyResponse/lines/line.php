<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyResponse\lines;

use AlibabaCloud\Tea\Model;

class line extends Model {
    protected $_name = [
        'lineCode' => 'LineCode',
        'lineName' => 'LineName',
        'groupCode' => 'GroupCode',
        'groupName' => 'GroupName',
    ];
    public function validate() {
        Model::validateRequired('lineCode', $this->lineCode, true);
        Model::validateRequired('lineName', $this->lineName, true);
        Model::validateRequired('groupCode', $this->groupCode, true);
        Model::validateRequired('groupName', $this->groupName, true);
    }
    public function toMap() {
        $res = [];
        $res['LineCode'] = $this->lineCode;
        $res['LineName'] = $this->lineName;
        $res['GroupCode'] = $this->groupCode;
        $res['GroupName'] = $this->groupName;
        return $res;
    }
    /**
     * @param array $map
     * @return line
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LineCode'])){
            $model->lineCode = $map['LineCode'];
        }
        if(isset($map['LineName'])){
            $model->lineName = $map['LineName'];
        }
        if(isset($map['GroupCode'])){
            $model->groupCode = $map['GroupCode'];
        }
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
        }
        return $model;
    }
    /**
     * @description lineCode
     * @var string
     */
    public $lineCode;

    /**
     * @description lineName
     * @var string
     */
    public $lineName;

    /**
     * @description groupCode
     * @var string
     */
    public $groupCode;

    /**
     * @description groupName
     * @var string
     */
    public $groupName;

}
