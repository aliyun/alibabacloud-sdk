<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsResponse\accessPointSet;

use AlibabaCloud\Tea\Model;

class accessPointType extends Model
{
    /**
     * @description accessPointId
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description attachedRegionNo
     *
     * @var string
     */
    public $attachedRegionNo;

    /**
     * @description location
     *
     * @var string
     */
    public $location;

    /**
     * @description hostOperator
     *
     * @var string
     */
    public $hostOperator;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'accessPointId'    => 'AccessPointId',
        'status'           => 'Status',
        'type'             => 'Type',
        'attachedRegionNo' => 'AttachedRegionNo',
        'location'         => 'Location',
        'hostOperator'     => 'HostOperator',
        'name'             => 'Name',
        'description'      => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('accessPointId', $this->accessPointId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('attachedRegionNo', $this->attachedRegionNo, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('hostOperator', $this->hostOperator, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->attachedRegionNo) {
            $res['AttachedRegionNo'] = $this->attachedRegionNo;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->hostOperator) {
            $res['HostOperator'] = $this->hostOperator;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessPointType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['AttachedRegionNo'])) {
            $model->attachedRegionNo = $map['AttachedRegionNo'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['HostOperator'])) {
            $model->hostOperator = $map['HostOperator'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
