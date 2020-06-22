<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description marker
     *
     * @var string
     */
    public $marker;

    /**
     * @description hostId
     *
     * @var string
     */
    public $hostId;

    /**
     * @description omsData
     *
     * @var array
     */
    public $omsData;
    protected $_name = [
        'marker'  => 'Marker',
        'hostId'  => 'HostId',
        'omsData' => 'OmsData',
    ];

    public function validate()
    {
        Model::validateRequired('marker', $this->marker, true);
        Model::validateRequired('hostId', $this->hostId, true);
        Model::validateRequired('omsData', $this->omsData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->omsData) {
            $res['OmsData'] = [];
            if (null !== $this->omsData) {
                $res['OmsData'] = $this->omsData;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['OmsData'])) {
            if (!empty($map['OmsData'])) {
                $model->omsData = [];
                $model->omsData = $map['OmsData'];
            }
        }

        return $model;
    }
}
