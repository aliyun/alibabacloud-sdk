<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ApplyPhysicalConnectionLOARequest\PMInfo;
use AlibabaCloud\Tea\Model;

class ApplyPhysicalConnectionLOARequest extends Model
{
    /**
     * @description description: Optional. The token used for client authentication.;
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description description: The ID of the region to which the physical connection interface belongs.;
     *
     * @var string
     */
    public $regionId;

    /**
     * @description description: Optional. The bandwidth value of the physical connection.;
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description description: The location where the leased line is deployed.;
     *
     * @var string
     */
    public $peerLocation;

    /**
     * @description description: The instance ID of the physical connection interface.;
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description description: The name of the company that requires the physical connection.;
     *
     * @var string
     */
    public $companyName;

    /**
     * @description description: The type of leased line. ;
     *
     * @var string
     */
    public $lineType;

    /**
     * @description description: The name of the installation company.;
     *
     * @var string
     */
    public $si;

    /**
     * @description description: The date and time when the data cable installation technician or representative will go to the installation site.;
     *
     * @var string
     */
    public $constructionTime;

    /**
     * @var array
     */
    public $PMInfo;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'regionId'         => 'RegionId',
        'bandwidth'        => 'Bandwidth',
        'peerLocation'     => 'PeerLocation',
        'instanceId'       => 'InstanceId',
        'companyName'      => 'CompanyName',
        'lineType'         => 'LineType',
        'si'               => 'Si',
        'constructionTime' => 'ConstructionTime',
        'PMInfo'           => 'PMInfo',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('companyName', $this->companyName, true);
        Model::validateRequired('lineType', $this->lineType, true);
        Model::validateRequired('si', $this->si, true);
        Model::validateRequired('constructionTime', $this->constructionTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->lineType) {
            $res['LineType'] = $this->lineType;
        }
        if (null !== $this->si) {
            $res['Si'] = $this->si;
        }
        if (null !== $this->constructionTime) {
            $res['ConstructionTime'] = $this->constructionTime;
        }
        if (null !== $this->PMInfo) {
            $res['PMInfo'] = [];
            if (null !== $this->PMInfo && \is_array($this->PMInfo)) {
                $n = 0;
                foreach ($this->PMInfo as $item) {
                    $res['PMInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyPhysicalConnectionLOARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['LineType'])) {
            $model->lineType = $map['LineType'];
        }
        if (isset($map['Si'])) {
            $model->si = $map['Si'];
        }
        if (isset($map['ConstructionTime'])) {
            $model->constructionTime = $map['ConstructionTime'];
        }
        if (isset($map['PMInfo'])) {
            if (!empty($map['PMInfo'])) {
                $model->PMInfo = [];
                $n             = 0;
                foreach ($map['PMInfo'] as $item) {
                    $model->PMInfo[$n++] = null !== $item ? PMInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
