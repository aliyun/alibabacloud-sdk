<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineResponse;

use AlibabaCloud\Tea\Model;

class ipSegmentList extends Model {
    protected $_name = [
        'name' => 'Name',
        'startIp' => 'StartIp',
        'endIp' => 'EndIp',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('startIp', $this->startIp, true);
        Model::validateRequired('endIp', $this->endIp, true);
    }
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        $res['StartIp'] = $this->startIp;
        $res['EndIp'] = $this->endIp;
        return $res;
    }
    /**
     * @param array $map
     * @return ipSegmentList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['StartIp'])){
            $model->startIp = $map['StartIp'];
        }
        if(isset($map['EndIp'])){
            $model->endIp = $map['EndIp'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description startIp
     * @var string
     */
    public $startIp;

    /**
     * @description endIp
     * @var string
     */
    public $endIp;

}
