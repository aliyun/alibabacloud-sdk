<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponse\forwardTableEntries;

use AlibabaCloud\Tea\Model;

class forwardTableEntry extends Model
{
    /**
     * @description forwardTableId
     *
     * @var string
     */
    public $forwardTableId;

    /**
     * @description forwardEntryId
     *
     * @var string
     */
    public $forwardEntryId;

    /**
     * @description externalIp
     *
     * @var string
     */
    public $externalIp;

    /**
     * @description externalPort
     *
     * @var string
     */
    public $externalPort;

    /**
     * @description ipProtocol
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description internalIp
     *
     * @var string
     */
    public $internalIp;

    /**
     * @description internalPort
     *
     * @var string
     */
    public $internalPort;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'forwardTableId' => 'ForwardTableId',
        'forwardEntryId' => 'ForwardEntryId',
        'externalIp'     => 'ExternalIp',
        'externalPort'   => 'ExternalPort',
        'ipProtocol'     => 'IpProtocol',
        'internalIp'     => 'InternalIp',
        'internalPort'   => 'InternalPort',
        'status'         => 'Status',
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

        return $model;
    }
}
