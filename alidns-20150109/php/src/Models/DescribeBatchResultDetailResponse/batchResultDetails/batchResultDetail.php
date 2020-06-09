<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponse\batchResultDetails;

use AlibabaCloud\Tea\Model;

class batchResultDetail extends Model {
    protected $_name = [
        'domain' => 'Domain',
        'type' => 'Type',
        'rr' => 'Rr',
        'value' => 'Value',
        'status' => 'Status',
        'reason' => 'Reason',
        'newRr' => 'NewRr',
        'newValue' => 'NewValue',
        'batchType' => 'BatchType',
        'operateDateStr' => 'OperateDateStr',
        'line' => 'Line',
        'priority' => 'Priority',
        'ttl' => 'Ttl',
        'recordId' => 'RecordId',
        'remark' => 'Remark',
        'rrStatus' => 'RrStatus',
    ];
    public function validate() {
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('rr', $this->rr, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('newRr', $this->newRr, true);
        Model::validateRequired('newValue', $this->newValue, true);
        Model::validateRequired('batchType', $this->batchType, true);
        Model::validateRequired('operateDateStr', $this->operateDateStr, true);
        Model::validateRequired('line', $this->line, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('ttl', $this->ttl, true);
        Model::validateRequired('recordId', $this->recordId, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('rrStatus', $this->rrStatus, true);
    }
    public function toMap() {
        $res = [];
        $res['Domain'] = $this->domain;
        $res['Type'] = $this->type;
        $res['Rr'] = $this->rr;
        $res['Value'] = $this->value;
        $res['Status'] = $this->status;
        $res['Reason'] = $this->reason;
        $res['NewRr'] = $this->newRr;
        $res['NewValue'] = $this->newValue;
        $res['BatchType'] = $this->batchType;
        $res['OperateDateStr'] = $this->operateDateStr;
        $res['Line'] = $this->line;
        $res['Priority'] = $this->priority;
        $res['Ttl'] = $this->ttl;
        $res['RecordId'] = $this->recordId;
        $res['Remark'] = $this->remark;
        $res['RrStatus'] = $this->rrStatus;
        return $res;
    }
    /**
     * @param array $map
     * @return batchResultDetail
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Domain'])){
            $model->domain = $map['Domain'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Rr'])){
            $model->rr = $map['Rr'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Reason'])){
            $model->reason = $map['Reason'];
        }
        if(isset($map['NewRr'])){
            $model->newRr = $map['NewRr'];
        }
        if(isset($map['NewValue'])){
            $model->newValue = $map['NewValue'];
        }
        if(isset($map['BatchType'])){
            $model->batchType = $map['BatchType'];
        }
        if(isset($map['OperateDateStr'])){
            $model->operateDateStr = $map['OperateDateStr'];
        }
        if(isset($map['Line'])){
            $model->line = $map['Line'];
        }
        if(isset($map['Priority'])){
            $model->priority = $map['Priority'];
        }
        if(isset($map['Ttl'])){
            $model->ttl = $map['Ttl'];
        }
        if(isset($map['RecordId'])){
            $model->recordId = $map['RecordId'];
        }
        if(isset($map['Remark'])){
            $model->remark = $map['Remark'];
        }
        if(isset($map['RrStatus'])){
            $model->rrStatus = $map['RrStatus'];
        }
        return $model;
    }
    /**
     * @description domain
     * @var string
     */
    public $domain;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description rr
     * @var string
     */
    public $rr;

    /**
     * @description value
     * @var string
     */
    public $value;

    /**
     * @description status
     * @var bool
     */
    public $status;

    /**
     * @description reason
     * @var string
     */
    public $reason;

    /**
     * @description newRr
     * @var string
     */
    public $newRr;

    /**
     * @description newValue
     * @var string
     */
    public $newValue;

    /**
     * @description batchType
     * @var string
     */
    public $batchType;

    /**
     * @description operateDateStr
     * @var string
     */
    public $operateDateStr;

    /**
     * @description line
     * @var string
     */
    public $line;

    /**
     * @description priority
     * @var string
     */
    public $priority;

    /**
     * @description ttl
     * @var string
     */
    public $ttl;

    /**
     * @description rrId
     * @var string
     */
    public $recordId;

    /**
     * @description remark
     * @var string
     */
    public $remark;

    /**
     * @description rrStatus
     * @var string
     */
    public $rrStatus;

}
