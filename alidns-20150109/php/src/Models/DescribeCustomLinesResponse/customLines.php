<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLinesResponse;

use AlibabaCloud\Tea\Model;

class customLines extends Model {
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'ipSegments' => 'IpSegments',
        'code' => 'Code',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('ipSegments', $this->ipSegments, true);
        Model::validateRequired('code', $this->code, true);
    }
    public function toMap() {
        $res = [];
        $res['Id'] = $this->id;
        $res['Name'] = $this->name;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['IpSegments'] = $this->ipSegments;
        $res['Code'] = $this->code;
        return $res;
    }
    /**
     * @param array $map
     * @return customLines
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['CreateTimestamp'])){
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if(isset($map['IpSegments'])){
            $model->ipSegments = $map['IpSegments'];
        }
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        return $model;
    }
    /**
     * @description id
     * @var integer
     */
    public $id;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description createTimestamp
     * @var integer
     */
    public $createTimestamp;

    /**
     * @description ipSegments
     * @var string
     */
    public $ipSegments;

    /**
     * @description code
     * @var string
     */
    public $code;

}
