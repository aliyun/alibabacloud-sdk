<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponse\certificateListModel;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponse\certificateListModel\certList;

class DescribeVodCertificateListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'certificateListModel' => 'CertificateListModel',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('certificateListModel', $this->certificateListModel, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['CertificateListModel'] = null !== $this->certificateListModel ? $this->certificateListModel->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodCertificateListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['CertificateListModel'])){
            $model->certificateListModel = certificateListModel::fromMap($map['CertificateListModel']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var certificateListModel
     */
    public $certificateListModel;

}
