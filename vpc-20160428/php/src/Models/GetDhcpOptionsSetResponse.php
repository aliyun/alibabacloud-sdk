<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponse\associateVpcs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponse\dhcpOptions;
use AlibabaCloud\Tea\Model;

class GetDhcpOptionsSetResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $dhcpOptionsSetName;

    /**
     * @var string
     */
    public $dhcpOptionsSetDescription;

    /**
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var array
     */
    public $associateVpcs;

    /**
     * @var dhcpOptions
     */
    public $dhcpOptions;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'dhcpOptionsSetName'        => 'DhcpOptionsSetName',
        'dhcpOptionsSetDescription' => 'DhcpOptionsSetDescription',
        'dhcpOptionsSetId'          => 'DhcpOptionsSetId',
        'ownerId'                   => 'OwnerId',
        'status'                    => 'Status',
        'associateVpcs'             => 'AssociateVpcs',
        'dhcpOptions'               => 'DhcpOptions',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dhcpOptionsSetName', $this->dhcpOptionsSetName, true);
        Model::validateRequired('dhcpOptionsSetDescription', $this->dhcpOptionsSetDescription, true);
        Model::validateRequired('dhcpOptionsSetId', $this->dhcpOptionsSetId, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('associateVpcs', $this->associateVpcs, true);
        Model::validateRequired('dhcpOptions', $this->dhcpOptions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dhcpOptionsSetName) {
            $res['DhcpOptionsSetName'] = $this->dhcpOptionsSetName;
        }
        if (null !== $this->dhcpOptionsSetDescription) {
            $res['DhcpOptionsSetDescription'] = $this->dhcpOptionsSetDescription;
        }
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->associateVpcs) {
            $res['AssociateVpcs'] = [];
            if (null !== $this->associateVpcs && \is_array($this->associateVpcs)) {
                $n = 0;
                foreach ($this->associateVpcs as $item) {
                    $res['AssociateVpcs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dhcpOptions) {
            $res['DhcpOptions'] = null !== $this->dhcpOptions ? $this->dhcpOptions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDhcpOptionsSetResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DhcpOptionsSetName'])) {
            $model->dhcpOptionsSetName = $map['DhcpOptionsSetName'];
        }
        if (isset($map['DhcpOptionsSetDescription'])) {
            $model->dhcpOptionsSetDescription = $map['DhcpOptionsSetDescription'];
        }
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AssociateVpcs'])) {
            if (!empty($map['AssociateVpcs'])) {
                $model->associateVpcs = [];
                $n                    = 0;
                foreach ($map['AssociateVpcs'] as $item) {
                    $model->associateVpcs[$n++] = null !== $item ? associateVpcs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DhcpOptions'])) {
            $model->dhcpOptions = dhcpOptions::fromMap($map['DhcpOptions']);
        }

        return $model;
    }
}
