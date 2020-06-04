<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoResponse\certInfos\certInfo;

class certInfos extends Model {
    protected $_name = [
        'certInfo' => 'CertInfo',
    ];
    public function validate() {
        Model::validateRequired('certInfo', $this->certInfo, true);
    }
    public function toMap() {
        $res = [];
        $res['CertInfo'] = [];
        if(null !== $this->certInfo && is_array($this->certInfo)){
            $n = 0;
            foreach($this->certInfo as $item){
                $res['CertInfo'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return certInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CertInfo'])){
            if(!empty($map['CertInfo'])){
                $model->certInfo = [];
                $n = 0;
                foreach($map['CertInfo'] as $item) {
                    $model->certInfo[$n++] = null !== $item ? certInfo::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description CertInfo
     * @var array
     */
    public $certInfo;

}
