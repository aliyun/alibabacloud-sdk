<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponse\items\ossDownload;

class items extends Model {
    protected $_name = [
        'ossDownload' => 'OssDownload',
    ];
    public function validate() {
        Model::validateRequired('ossDownload', $this->ossDownload, true);
    }
    public function toMap() {
        $res = [];
        $res['OssDownload'] = [];
        if(null !== $this->ossDownload && is_array($this->ossDownload)){
            $n = 0;
            foreach($this->ossDownload as $item){
                $res['OssDownload'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OssDownload'])){
            if(!empty($map['OssDownload'])){
                $model->ossDownload = [];
                $n = 0;
                foreach($map['OssDownload'] as $item) {
                    $model->ossDownload[$n++] = null !== $item ? ossDownload::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description OssDownload
     * @var array
     */
    public $ossDownload;

}
