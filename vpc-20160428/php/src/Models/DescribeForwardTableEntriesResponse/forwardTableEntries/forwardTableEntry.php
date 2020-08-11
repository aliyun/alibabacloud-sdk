<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeForwardTableEntriesResponse\forwardTableEntries;

use AlibabaCloud\Tea\Model;

class forwardTableEntry extends Model
{
    /**
     * @var string
     */
    public $forwardTableId;

    /**
     * @var string
     */
    public $forwardEntryId;

    /**
     * @var string
     */
    public $externalIp;

    /**
     * @var string
     */
    public $externalPort;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $internalIp;

    /**
     * @var string
     */
    public $internalPort;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $forwardEntryName;
    protected $_name = [
        'forwardTableId'   => 'ForwardTableId',
        'forwardEntryId'   => 'ForwardEntryId',
        'externalIp'       => 'ExternalIp',
        'externalPort'     => 'ExternalPort',
        'ipProtocol'       => 'IpProtocol',
        'internalIp'       => 'InternalIp',
        'internalPort'     => 'InternalPort',
        'status'           => 'Status',
        'forwardEntryName' => 'ForwardEntryName',
    ];

    public function validate()
    {
        Model::validateRequired('forwardTableId', $this->forwardTableId, true);
        Model::validateRequired('forwardEntryId', $this->forwardEntryId, true);
        Model::validateRequired('externalIp', $this->externalIp, true);
        Model::validateRequired('externalPort', $this->externalPort, true);
        Model::validateRequired('ipProtocol', $this->ipProtocol, true);
        Model::validateRequired('internalIp', $this->internalIp, true);
        Model::validateRequired('internalPort', $this->internalPort, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('forwardEntryName', $this->forwardEntryName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardTableId) {
            $res['ForwardTableId'] = $this->forwardTableId;
        }
        if (null !== $this->forwardEntryId) {
            $res['ForwardEntryId'] = $this->forwardEntryId;
        }
        if (null !== $this->externalIp) {
            $res['ExternalIp'] = $this->externalIp;
        }
        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }
        if (null !== $this->internalPort) {
            $res['InternalPort'] = $this->internalPort;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->forwardEntryName) {
            $res['ForwardEntryName'] = $this->forwardEntryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardTableEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardTableId'])) {
            $model->forwardTableId = $map['ForwardTableId'];
        }
        if (isset($map['ForwardEntryId'])) {
            $model->forwardEntryId = $map['ForwardEntryId'];
        }
        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }
        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['InternalIp'])) {
            $model->internalIp = $map['InternalIp'];
        }
        if (isset($map['InternalPort'])) {
            $model->internalPort = $map['InternalPort'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ForwardEntryName'])) {
            $model->forwardEntryName = $map['ForwardEntryName'];
        }

        return $model;
    }
}
