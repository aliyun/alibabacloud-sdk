<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackOperationRisksResponse;

use AlibabaCloud\Tea\Model;

class riskResources extends Model
{
    /**
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var string
     */
    public $physicalResourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $riskType;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logicalResourceId'  => 'LogicalResourceId',
        'physicalResourceId' => 'PhysicalResourceId',
        'resourceType'       => 'ResourceType',
        'reason'             => 'Reason',
        'riskType'           => 'RiskType',
        'code'               => 'Code',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('logicalResourceId', $this->logicalResourceId, true);
        Model::validateRequired('physicalResourceId', $this->physicalResourceId, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('riskType', $this->riskType, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
