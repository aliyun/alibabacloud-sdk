// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.eci20180808.models;

import com.aliyun.tea.*;

public class ExportContainerGroupTemplateRequest extends TeaModel {
    @NameInMap("OwnerId")
    public Long ownerId;

    @NameInMap("ResourceOwnerAccount")
    public String resourceOwnerAccount;

    @NameInMap("ResourceOwnerId")
    public Long resourceOwnerId;

    @NameInMap("OwnerAccount")
    public String ownerAccount;

    @NameInMap("RegionId")
    public String regionId;

    @NameInMap("ContainerGroupId")
    public String containerGroupId;

    public static ExportContainerGroupTemplateRequest build(java.util.Map<String, ?> map) throws Exception {
        ExportContainerGroupTemplateRequest self = new ExportContainerGroupTemplateRequest();
        return TeaModel.build(map, self);
    }

}
