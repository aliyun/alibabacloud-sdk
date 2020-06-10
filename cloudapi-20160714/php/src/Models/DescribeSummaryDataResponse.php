<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeSummaryDataResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.usageGroupNum
     *
     * @var int
     */
    public $usageGroupNum;

    /**
     * @description data.usageApiNum
     *
     * @var int
     */
    public $usageApiNum;

    /**
     * @description data.usageInstanceNum
     *
     * @var int
     */
    public $usageInstanceNum;

    /**
     * @description data.comeingSoonInstanceNum
     *
     * @var int
     */
    public $comeingSoonInstanceNum;

    /**
     * @description data.region
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'requestId'              => 'RequestId',
        'usageGroupNum'          => 'UsageGroupNum',
        'usageApiNum'            => 'UsageApiNum',
        'usageInstanceNum'       => 'UsageInstanceNum',
        'comeingSoonInstanceNum' => 'ComeingSoonInstanceNum',
        'region'                 => 'Region',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('usageGroupNum', $this->usageGroupNum, true);
        Model::validateRequired('usageApiNum', $this->usageApiNum, true);
        Model::validateRequired('usageInstanceNum', $this->usageInstanceNum, true);
        Model::validateRequired('comeingSoonInstanceNum', $this->comeingSoonInstanceNum, true);
        Model::validateRequired('region', $this->region, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->usageGroupNum) {
            $res['UsageGroupNum'] = $this->usageGroupNum;
        }
        if (null !== $this->usageApiNum) {
            $res['UsageApiNum'] = $this->usageApiNum;
        }
        if (null !== $this->usageInstanceNum) {
            $res['UsageInstanceNum'] = $this->usageInstanceNum;
        }
        if (null !== $this->comeingSoonInstanceNum) {
            $res['ComeingSoonInstanceNum'] = $this->comeingSoonInstanceNum;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSummaryDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsageGroupNum'])) {
            $model->usageGroupNum = $map['UsageGroupNum'];
        }
        if (isset($map['UsageApiNum'])) {
            $model->usageApiNum = $map['UsageApiNum'];
        }
        if (isset($map['UsageInstanceNum'])) {
            $model->usageInstanceNum = $map['UsageInstanceNum'];
        }
        if (isset($map['ComeingSoonInstanceNum'])) {
            $model->comeingSoonInstanceNum = $map['ComeingSoonInstanceNum'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
