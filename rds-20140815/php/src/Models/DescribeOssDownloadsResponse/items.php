<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponse\items\ossDownload;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description OssDownload
     *
     * @var array
     */
    public $ossDownload;
    protected $_name = [
        'ossDownload' => 'OssDownload',
    ];

    public function validate()
    {
        Model::validateRequired('ossDownload', $this->ossDownload, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossDownload) {
            $res['OssDownload'] = [];
            if (null !== $this->ossDownload && \is_array($this->ossDownload)) {
                $n = 0;
                foreach ($this->ossDownload as $item) {
                    $res['OssDownload'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssDownload'])) {
            if (!empty($map['OssDownload'])) {
                $model->ossDownload = [];
                $n                  = 0;
                foreach ($map['OssDownload'] as $item) {
                    $model->ossDownload[$n++] = null !== $item ? ossDownload::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
