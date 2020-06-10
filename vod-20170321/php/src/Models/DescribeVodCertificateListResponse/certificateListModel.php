<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponse\certificateListModel\certList;
use AlibabaCloud\Tea\Model;

class certificateListModel extends Model
{
    /**
     * @description count
     *
     * @var int
     */
    public $count;

    /**
     * @description certList
     *
     * @var certList
     */
    public $certList;
    protected $_name = [
        'count'    => 'Count',
        'certList' => 'CertList',
    ];

    public function validate()
    {
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('certList', $this->certList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->certList) {
            $res['CertList'] = null !== $this->certList ? $this->certList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificateListModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CertList'])) {
            $model->certList = certList::fromMap($map['CertList']);
        }

        return $model;
    }
}
