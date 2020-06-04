// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.eci20180808.models;

import com.aliyun.tea.*;

public class UpdateContainerGroupByTemplateRequest extends TeaModel {
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

    @NameInMap("Template")
    @Validation(required = true)
    public String template;

    @NameInMap("ClientToken")
    public String clientToken;

    public static UpdateContainerGroupByTemplateRequest build(java.util.Map<String, ?> map) throws Exception {
        UpdateContainerGroupByTemplateRequest self = new UpdateContainerGroupByTemplateRequest();
        return TeaModel.build(map, self);
    }

}
