<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponse\dhcpOptionsSets\dhcpOptions;
use AlibabaCloud\Tea\Model;

class dhcpOptionsSets extends Model
{
    /**
     * @var string
     */
    public $dhcpOptionsSetName;

    /**
     * @var string
     */
    public $dhcpOptionsSetDescription;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @var int
     */
    public $associateVpcCount;

    /**
     * @var dhcpOptions
     */
    public $dhcpOptions;
    protected $_name = [
        'dhcpOptionsSetName'        => 'DhcpOptionsSetName',
        'dhcpOptionsSetDescription' => 'DhcpOptionsSetDescription',
        'ownerId'                   => 'OwnerId',
        'status'                    => 'Status',
        'dhcpOptionsSetId'          => 'DhcpOptionsSetId',
        'associateVpcCount'         => 'AssociateVpcCount',
        'dhcpOptions'               => 'DhcpOptions',
    ];

    public function validate()
    {
        Model::validateRequired('dhcpOptionsSetName', $this->dhcpOptionsSetName, true);
        Model::validateRequired('dhcpOptionsSetDescription', $this->dhcpOptionsSetDescription, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('dhcpOptionsSetId', $this->dhcpOptionsSetId, true);
        Model::validateRequired('associateVpcCount', $this->associateVpcCount, true);
        Model::validateRequired('dhcpOptions', $this->dhcpOptions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dhcpOptionsSetName) {
            $res['DhcpOptionsSetName'] = $this->dhcpOptionsSetName;
        }
        if (null !== $this->dhcpOptionsSetDescription) {
            $res['DhcpOptionsSetDescription'] = $this->dhcpOptionsSetDescription;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->associateVpcCount) {
            $res['AssociateVpcCount'] = $this->associateVpcCount;
        }
        if (null !== $this->dhcpOptions) {
            $res['DhcpOptions'] = null !== $this->dhcpOptions ? $this->dhcpOptions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dhcpOptionsSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DhcpOptionsSetName'])) {
            $model->dhcpOptionsSetName = $map['DhcpOptionsSetName'];
        }
        if (isset($map['DhcpOptionsSetDescription'])) {
            $model->dhcpOptionsSetDescription = $map['DhcpOptionsSetDescription'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['AssociateVpcCount'])) {
            $model->associateVpcCount = $map['AssociateVpcCount'];
        }
        if (isset($map['DhcpOptions'])) {
            $model->dhcpOptions = dhcpOptions::fromMap($map['DhcpOptions']);
        }

        return $model;
    }
}
