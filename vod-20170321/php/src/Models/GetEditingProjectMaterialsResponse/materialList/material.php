<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponse\materialList;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponse\materialList\material\snapshots;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponse\materialList\material\sprites;

class material extends Model {
    protected $_name = [
        'materialId' => 'MaterialId',
        'title' => 'Title',
        'tags' => 'Tags',
        'status' => 'Status',
        'size' => 'Size',
        'duration' => 'Duration',
        'description' => 'Description',
        'creationTime' => 'CreationTime',
        'modifiedTime' => 'ModifiedTime',
        'coverURL' => 'CoverURL',
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'source' => 'Source',
        'spriteConfig' => 'SpriteConfig',
        'snapshots' => 'Snapshots',
        'sprites' => 'Sprites',
    ];
    public function validate() {
        Model::validateRequired('materialId', $this->materialId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('coverURL', $this->coverURL, true);
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('cateName', $this->cateName, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('spriteConfig', $this->spriteConfig, true);
        Model::validateRequired('snapshots', $this->snapshots, true);
        Model::validateRequired('sprites', $this->sprites, true);
    }
    public function toMap() {
        $res = [];
        $res['MaterialId'] = $this->materialId;
        $res['Title'] = $this->title;
        $res['Tags'] = $this->tags;
        $res['Status'] = $this->status;
        $res['Size'] = $this->size;
        $res['Duration'] = $this->duration;
        $res['Description'] = $this->description;
        $res['CreationTime'] = $this->creationTime;
        $res['ModifiedTime'] = $this->modifiedTime;
        $res['CoverURL'] = $this->coverURL;
        $res['CateId'] = $this->cateId;
        $res['CateName'] = $this->cateName;
        $res['Source'] = $this->source;
        $res['SpriteConfig'] = $this->spriteConfig;
        $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        $res['Sprites'] = null !== $this->sprites ? $this->sprites->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return material
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MaterialId'])){
            $model->materialId = $map['MaterialId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Size'])){
            $model->size = $map['Size'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ModifiedTime'])){
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['CateName'])){
            $model->cateName = $map['CateName'];
        }
        if(isset($map['Source'])){
            $model->source = $map['Source'];
        }
        if(isset($map['SpriteConfig'])){
            $model->spriteConfig = $map['SpriteConfig'];
        }
        if(isset($map['Snapshots'])){
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        if(isset($map['Sprites'])){
            $model->sprites = sprites::fromMap($map['Sprites']);
        }
        return $model;
    }
    /**
     * @description mediaId
     * @var string
     */
    public $materialId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description stateStr
     * @var string
     */
    public $status;

    /**
     * @description fileSize
     * @var integer
     */
    public $size;

    /**
     * @description duration
     * @var float
     */
    public $duration;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description utcCreate
     * @var string
     */
    public $creationTime;

    /**
     * @description utcModified
     * @var string
     */
    public $modifiedTime;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverURL;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description cateName
     * @var string
     */
    public $cateName;

    /**
     * @description source
     * @var string
     */
    public $source;

    /**
     * @description spriteConfig
     * @var string
     */
    public $spriteConfig;

    /**
     * @description snapshotList
     * @var snapshots
     */
    public $snapshots;

    /**
     * @description tileList
     * @var sprites
     */
    public $sprites;

}
