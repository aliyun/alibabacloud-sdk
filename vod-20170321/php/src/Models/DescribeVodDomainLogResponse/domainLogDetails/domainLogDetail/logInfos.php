<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse\domainLogDetails\domainLogDetail;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse\domainLogDetails\domainLogDetail\logInfos\logInfoDetail;
use AlibabaCloud\Tea\Model;

class logInfos extends Model
{
    /**
     * @description LogInfoDetail
     *
     * @var array
     */
    public $logInfoDetail;
    protected $_name = [
        'logInfoDetail' => 'LogInfoDetail',
    ];

    public function validate()
    {
        Model::validateRequired('logInfoDetail', $this->logInfoDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logInfoDetail) {
            $res['LogInfoDetail'] = [];
            if (null !== $this->logInfoDetail && \is_array($this->logInfoDetail)) {
                $n = 0;
                foreach ($this->logInfoDetail as $item) {
                    $res['LogInfoDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogInfoDetail'])) {
            if (!empty($map['LogInfoDetail'])) {
                $model->logInfoDetail = [];
                $n                    = 0;
                foreach ($map['LogInfoDetail'] as $item) {
                    $model->logInfoDetail[$n++] = null !== $item ? logInfoDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
