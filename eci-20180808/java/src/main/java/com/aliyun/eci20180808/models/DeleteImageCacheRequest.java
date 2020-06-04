// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.eci20180808.models;

import com.aliyun.tea.*;

public class DeleteImageCacheRequest extends TeaModel {
    @NameInMap("OwnerId")
    public Long ownerId;

    @NameInMap("ResourceOwnerAccount")
    public String resourceOwnerAccount;

    @NameInMap("ResourceOwnerId")
    public Long resourceOwnerId;

    @NameInMap("OwnerAccount")
    public String ownerAccount;

    @NameInMap("RegionId")
    @Validation(required = true)
    public String regionId;

    @NameInMap("ImageCacheId")
    @Validation(required = true)
    public String imageCacheId;

    @NameInMap("ClientToken")
    public String clientToken;

    public static DeleteImageCacheRequest build(java.util.Map<String, ?> map) throws Exception {
        DeleteImageCacheRequest self = new DeleteImageCacheRequest();
        return TeaModel.build(map, self);
    }

}
