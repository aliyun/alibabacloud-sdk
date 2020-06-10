<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponse\lines;

use AlibabaCloud\Tea\Model;

class line extends Model
{
    /**
     * @description lineCode
     *
     * @var string
     */
    public $lineCode;

    /**
     * @description lineName
     *
     * @var string
     */
    public $lineName;

    /**
     * @description groupCode
     *
     * @var string
     */
    public $groupCode;

    /**
     * @description groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description fatherCode
     *
     * @var string
     */
    public $fatherCode;
    protected $_name = [
        'lineCode'   => 'LineCode',
        'lineName'   => 'LineName',
        'groupCode'  => 'GroupCode',
        'groupName'  => 'GroupName',
        'status'     => 'Status',
        'fatherCode' => 'FatherCode',
    ];

    public function validate()
    {
        Model::validateRequired('lineCode', $this->lineCode, true);
        Model::validateRequired('lineName', $this->lineName, true);
        Model::validateRequired('groupCode', $this->groupCode, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('fatherCode', $this->fatherCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->lineName) {
            $res['LineName'] = $this->lineName;
        }
        if (null !== $this->groupCode) {
            $res['GroupCode'] = $this->groupCode;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->fatherCode) {
            $res['FatherCode'] = $this->fatherCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return line
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['LineName'])) {
            $model->lineName = $map['LineName'];
        }
        if (isset($map['GroupCode'])) {
            $model->groupCode = $map['GroupCode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FatherCode'])) {
            $model->fatherCode = $map['FatherCode'];
        }

        return $model;
    }
}
