<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponse\certificateListModel;
use AlibabaCloud\Tea\Model;

class DescribeVodCertificateListResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var certificateListModel
     */
    public $certificateListModel;
    protected $_name = [
        'requestId'            => 'RequestId',
        'certificateListModel' => 'CertificateListModel',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('certificateListModel', $this->certificateListModel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->certificateListModel) {
            $res['CertificateListModel'] = null !== $this->certificateListModel ? $this->certificateListModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodCertificateListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertificateListModel'])) {
            $model->certificateListModel = certificateListModel::fromMap($map['CertificateListModel']);
        }

        return $model;
    }
}
