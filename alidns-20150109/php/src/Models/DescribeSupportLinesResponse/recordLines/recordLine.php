<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSupportLinesResponse\recordLines;

use AlibabaCloud\Tea\Model;

class recordLine extends Model {
    protected $_name = [
        'lineCode' => 'LineCode',
        'fatherCode' => 'FatherCode',
        'lineName' => 'LineName',
        'lineDisplayName' => 'LineDisplayName',
    ];
    public function validate() {
        Model::validateRequired('lineCode', $this->lineCode, true);
        Model::validateRequired('fatherCode', $this->fatherCode, true);
        Model::validateRequired('lineName', $this->lineName, true);
        Model::validateRequired('lineDisplayName', $this->lineDisplayName, true);
    }
    public function toMap() {
        $res = [];
        $res['LineCode'] = $this->lineCode;
        $res['FatherCode'] = $this->fatherCode;
        $res['LineName'] = $this->lineName;
        $res['LineDisplayName'] = $this->lineDisplayName;
        return $res;
    }
    /**
     * @param array $map
     * @return recordLine
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['LineCode'])){
            $model->lineCode = $map['LineCode'];
        }
        if(isset($map['FatherCode'])){
            $model->fatherCode = $map['FatherCode'];
        }
        if(isset($map['LineName'])){
            $model->lineName = $map['LineName'];
        }
        if(isset($map['LineDisplayName'])){
            $model->lineDisplayName = $map['LineDisplayName'];
        }
        return $model;
    }
    /**
     * @description lineCode
     * @var string
     */
    public $lineCode;

    /**
     * @description fatherCode
     * @var string
     */
    public $fatherCode;

    /**
     * @description lineName
     * @var string
     */
    public $lineName;

    /**
     * @description lineDisplayName
     * @var string
     */
    public $lineDisplayName;

}
