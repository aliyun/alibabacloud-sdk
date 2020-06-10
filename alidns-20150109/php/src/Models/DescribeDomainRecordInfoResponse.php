<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRecordInfoResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.domainId
     *
     * @var string
     */
    public $domainId;

    /**
     * @description module.domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description module.punyCode
     *
     * @var string
     */
    public $punyCode;

    /**
     * @description module.groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description module.groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description module.rrId
     *
     * @var string
     */
    public $recordId;

    /**
     * @description module.rr
     *
     * @var string
     */
    public $RR;

    /**
     * @description module.type
     *
     * @var string
     */
    public $type;

    /**
     * @description module.value
     *
     * @var string
     */
    public $value;

    /**
     * @description module.ttl
     *
     * @var int
     */
    public $TTL;

    /**
     * @description module.priority
     *
     * @var int
     */
    public $priority;

    /**
     * @description module.line
     *
     * @var string
     */
    public $line;

    /**
     * @description module.status
     *
     * @var string
     */
    public $status;

    /**
     * @description module.locked
     *
     * @var bool
     */
    public $locked;
    protected $_name = [
        'requestId'  => 'RequestId',
        'domainId'   => 'DomainId',
        'domainName' => 'DomainName',
        'punyCode'   => 'PunyCode',
        'groupId'    => 'GroupId',
        'groupName'  => 'GroupName',
        'recordId'   => 'RecordId',
        'RR'         => 'RR',
        'type'       => 'Type',
        'value'      => 'Value',
        'TTL'        => 'TTL',
        'priority'   => 'Priority',
        'line'       => 'Line',
        'status'     => 'Status',
        'locked'     => 'Locked',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->punyCode) {
            $res['PunyCode'] = $this->punyCode;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->RR) {
            $res['RR'] = $this->RR;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainRecordInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PunyCode'])) {
            $model->punyCode = $map['PunyCode'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RR'])) {
            $model->RR = $map['RR'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Locked'])) {
            $model->locked = $map['Locked'];
        }

        return $model;
    }
}
