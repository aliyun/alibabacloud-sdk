<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponse\certificateListModel;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponse\certificateListModel\certList\cert;

class certList extends Model {
    protected $_name = [
        'cert' => 'Cert',
    ];
    public function validate() {
        Model::validateRequired('cert', $this->cert, true);
    }
    public function toMap() {
        $res = [];
        $res['Cert'] = [];
        if(null !== $this->cert && is_array($this->cert)){
            $n = 0;
            foreach($this->cert as $item){
                $res['Cert'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return certList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Cert'])){
            if(!empty($map['Cert'])){
                $model->cert = [];
                $n = 0;
                foreach($map['Cert'] as $item) {
                    $model->cert[$n++] = null !== $item ? cert::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Cert
     * @var array
     */
    public $cert;

}
