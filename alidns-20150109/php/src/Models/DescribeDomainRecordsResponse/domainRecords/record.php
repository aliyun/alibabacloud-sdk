<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordsResponse\domainRecords;

use AlibabaCloud\Tea\Model;

class record extends Model {
    protected $_name = [
        'domainName' => 'DomainName',
        'recordId' => 'RecordId',
        'RR' => 'RR',
        'type' => 'Type',
        'value' => 'Value',
        'TTL' => 'TTL',
        'priority' => 'Priority',
        'line' => 'Line',
        'status' => 'Status',
        'locked' => 'Locked',
        'weight' => 'Weight',
        'remark' => 'Remark',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('recordId', $this->recordId, true);
        Model::validateRequired('RR', $this->RR, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('TTL', $this->TTL, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('line', $this->line, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('locked', $this->locked, true);
        Model::validateRequired('weight', $this->weight, true);
        Model::validateRequired('remark', $this->remark, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainName'] = $this->domainName;
        $res['RecordId'] = $this->recordId;
        $res['RR'] = $this->RR;
        $res['Type'] = $this->type;
        $res['Value'] = $this->value;
        $res['TTL'] = $this->TTL;
        $res['Priority'] = $this->priority;
        $res['Line'] = $this->line;
        $res['Status'] = $this->status;
        $res['Locked'] = $this->locked;
        $res['Weight'] = $this->weight;
        $res['Remark'] = $this->remark;
        return $res;
    }
    /**
     * @param array $map
     * @return record
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
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
        if(isset($map['Weight'])){
            $model->weight = $map['Weight'];
        }
        if(isset($map['Remark'])){
            $model->remark = $map['Remark'];
        }
        return $model;
    }
    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description rrId
     * @var string
     */
    public $recordId;

    /**
     * @description rr
     * @var string
     */
    public $RR;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description value
     * @var string
     */
    public $value;

    /**
     * @description ttl
     * @var integer
     */
    public $TTL;

    /**
     * @description priority
     * @var integer
     */
    public $priority;

    /**
     * @description line
     * @var string
     */
    public $line;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description locked
     * @var bool
     */
    public $locked;

    /**
     * @description weight
     * @var integer
     */
    public $weight;

    /**
     * @description remark
     * @var string
     */
    public $remark;

}
