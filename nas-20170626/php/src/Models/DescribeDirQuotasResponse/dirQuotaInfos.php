<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponse\dirQuotaInfos\userQuotaInfos;

class dirQuotaInfos extends Model {
    protected $_name = [
        'path' => 'Path',
        'dirInode' => 'DirInode',
        'status' => 'Status',
        'userQuotaInfos' => 'UserQuotaInfos',
    ];
    public function validate() {
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('dirInode', $this->dirInode, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('userQuotaInfos', $this->userQuotaInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['Path'] = $this->path;
        $res['DirInode'] = $this->dirInode;
        $res['Status'] = $this->status;
        $res['UserQuotaInfos'] = [];
        if(null !== $this->userQuotaInfos && is_array($this->userQuotaInfos)){
            $n = 0;
            foreach($this->userQuotaInfos as $item){
                $res['UserQuotaInfos'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return dirQuotaInfos
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Path'])){
            $model->path = $map['Path'];
        }
        if(isset($map['DirInode'])){
            $model->dirInode = $map['DirInode'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['UserQuotaInfos'])){
            if(!empty($map['UserQuotaInfos'])){
                $model->userQuotaInfos = [];
                $n = 0;
                foreach($map['UserQuotaInfos'] as $item) {
                    $model->userQuotaInfos[$n++] = null !== $item ? userQuotaInfos::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description path
     * @var string
     */
    public $path;

    /**
     * @description dirInode
     * @var string
     */
    public $dirInode;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description userQuotaInfos
     * @var array
     */
    public $userQuotaInfos;

}
