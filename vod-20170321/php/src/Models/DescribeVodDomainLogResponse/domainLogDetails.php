<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse\domainLogDetails\domainLogDetail;
use AlibabaCloud\Tea\Model;

class domainLogDetails extends Model
{
    /**
     * @description DomainLogDetail
     *
     * @var array
     */
    public $domainLogDetail;
    protected $_name = [
        'domainLogDetail' => 'DomainLogDetail',
    ];

    public function validate()
    {
        Model::validateRequired('domainLogDetail', $this->domainLogDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainLogDetail) {
            $res['DomainLogDetail'] = [];
            if (null !== $this->domainLogDetail && \is_array($this->domainLogDetail)) {
                $n = 0;
                foreach ($this->domainLogDetail as $item) {
                    $res['DomainLogDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainLogDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainLogDetail'])) {
            if (!empty($map['DomainLogDetail'])) {
                $model->domainLogDetail = [];
                $n                      = 0;
                foreach ($map['DomainLogDetail'] as $item) {
                    $model->domainLogDetail[$n++] = null !== $item ? domainLogDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
