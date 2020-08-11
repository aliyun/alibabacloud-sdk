<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysResponse\customerGateways;

use AlibabaCloud\Tea\Model;

class customerGateway extends Model
{
    /**
     * @var string
     */
    public $customerGatewayId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $asn;
    protected $_name = [
        'customerGatewayId' => 'CustomerGatewayId',
        'name'              => 'Name',
        'ipAddress'         => 'IpAddress',
        'description'       => 'Description',
        'createTime'        => 'CreateTime',
        'asn'               => 'Asn',
    ];

    public function validate()
    {
        Model::validateRequired('customerGatewayId', $this->customerGatewayId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('ipAddress', $this->ipAddress, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('asn', $this->asn, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->asn) {
            $res['Asn'] = $this->asn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Asn'])) {
            $model->asn = $map['Asn'];
        }

        return $model;
    }
}
