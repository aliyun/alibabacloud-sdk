<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodDomainUsageDataRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description area
     *
     * @var string
     */
    public $area;

    /**
     * @description field
     *
     * @var string
     */
    public $field;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'domainName' => 'DomainName',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'type'       => 'Type',
        'area'       => 'Area',
        'field'      => 'Field',
    ];

    public function validate()
    {
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('field', $this->field, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainUsageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        return $model;
    }
}
