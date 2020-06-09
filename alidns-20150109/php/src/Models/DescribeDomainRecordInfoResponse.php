<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRecordInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainId' => 'DomainId',
        'domainName' => 'DomainName',
        'punyCode' => 'PunyCode',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'recordId' => 'RecordId',
        'RR' => 'RR',
        'type' => 'Type',
        'value' => 'Value',
        'TTL' => 'TTL',
        'priority' => 'Priority',
        'line' => 'Line',
        'status' => 'Status',
        'locked' => 'Locked',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainId', $this->domainId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('punyCode', $this->punyCode, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('recordId', $this->recordId, true);
        Model::validateRequired('RR', $this->RR, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('TTL', $this->TTL, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('line', $this->line, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('locked', $this->locked, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainId'] = $this->domainId;
        $res['DomainName'] = $this->domainName;
        $res['PunyCode'] = $this->punyCode;
        $res['GroupId'] = $this->groupId;
        $res['GroupName'] = $this->groupName;
        $res['RecordId'] = $this->recordId;
        $res['RR'] = $this->RR;
        $res['Type'] = $this->type;
        $res['Value'] = $this->value;
        $res['TTL'] = $this->TTL;
        $res['Priority'] = $this->priority;
        $res['Line'] = $this->line;
        $res['Status'] = $this->status;
        $res['Locked'] = $this->locked;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainRecordInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DomainId'])){
            $model->domainId = $map['DomainId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['PunyCode'])){
            $model->punyCode = $map['PunyCode'];
        }
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
        }
        if(isset($map['RecordId'])){
            $model->recordId = $map['RecordId'];
        }
        if(isset($map['RR'])){
            $model->RR = $map['RR'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['TTL'])){
            $model->TTL = $map['TTL'];
        }
        if(isset($map['Priority'])){
            $model->priority = $map['Priority'];
        }
        if(isset($map['Line'])){
            $model->line = $map['Line'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Locked'])){
            $model->locked = $map['Locked'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.domainId
     * @var string
     */
    public $domainId;

    /**
     * @description module.domainName
     * @var string
     */
    public $domainName;

    /**
     * @description module.punyCode
     * @var string
     */
    public $punyCode;

    /**
     * @description module.groupId
     * @var string
     */
    public $groupId;

    /**
     * @description module.groupName
     * @var string
     */
    public $groupName;

    /**
     * @description module.rrId
     * @var string
     */
    public $recordId;

    /**
     * @description module.rr
     * @var string
     */
    public $RR;

    /**
     * @description module.type
     * @var string
     */
    public $type;

    /**
     * @description module.value
     * @var string
     */
    public $value;

    /**
     * @description module.ttl
     * @var integer
     */
    public $TTL;

    /**
     * @description module.priority
     * @var integer
     */
    public $priority;

    /**
     * @description module.line
     * @var string
     */
    public $line;

    /**
     * @description module.status
     * @var string
     */
    public $status;

    /**
     * @description module.locked
     * @var bool
     */
    public $locked;

}
