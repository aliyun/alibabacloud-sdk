<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponse\AIData\AIDataItem\data;

use AlibabaCloud\Tea\Model;

class dataItem extends Model {
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('value', $this->value, true);
    }
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        $res['Value'] = $this->value;
        return $res;
    }
    /**
     * @param array $map
     * @return dataItem
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description value
     * @var string
     */
    public $value;

}
