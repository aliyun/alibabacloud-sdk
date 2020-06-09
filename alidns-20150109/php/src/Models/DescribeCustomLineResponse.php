<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineResponse\ipSegmentList;

class DescribeCustomLineResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'id' => 'Id',
        'name' => 'Name',
        'domainName' => 'DomainName',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'ipSegments' => 'IpSegments',
        'code' => 'Code',
        'ipSegmentList' => 'IpSegmentList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('ipSegments', $this->ipSegments, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('ipSegmentList', $this->ipSegmentList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Id'] = $this->id;
        $res['Name'] = $this->name;
        $res['DomainName'] = $this->domainName;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['IpSegments'] = $this->ipSegments;
        $res['Code'] = $this->code;
        $res['IpSegmentList'] = [];
        if(null !== $this->ipSegmentList && is_array($this->ipSegmentList)){
            $n = 0;
            foreach($this->ipSegmentList as $item){
                $res['IpSegmentList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeCustomLineResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
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
        if(isset($map['IpSegmentList'])){
            if(!empty($map['IpSegmentList'])){
                $model->ipSegmentList = [];
                $n = 0;
                foreach($map['IpSegmentList'] as $item) {
                    $model->ipSegmentList[$n++] = null !== $item ? ipSegmentList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.id
     * @var integer
     */
    public $id;

    /**
     * @description module.name
     * @var string
     */
    public $name;

    /**
     * @description module.domainName
     * @var string
     */
    public $domainName;

    /**
     * @description module.createTime
     * @var string
     */
    public $createTime;

    /**
     * @description module.createTimestamp
     * @var integer
     */
    public $createTimestamp;

    /**
     * @description module.ipSegments
     * @var string
     */
    public $ipSegments;

    /**
     * @description module.code
     * @var string
     */
    public $code;

    /**
     * @description module.ipSegmentList
     * @var array
     */
    public $ipSegmentList;

}
