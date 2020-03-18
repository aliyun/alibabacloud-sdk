// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.eci.models;

import com.aliyun.tea.*;

public class ExecContainerCommandRequest extends TeaModel {
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

    @NameInMap("ContainerGroupId")
    @Validation(required = true)
    public String containerGroupId;

    @NameInMap("ContainerName")
    @Validation(required = true)
    public String containerName;

    @NameInMap("Command")
    @Validation(required = true)
    public String command;

    @NameInMap("TTY")
    public Boolean TTY;

    public static ExecContainerCommandRequest build(java.util.Map<String, ?> map) throws Exception {
        ExecContainerCommandRequest self = new ExecContainerCommandRequest();
        return TeaModel.build(map, self);
    }

}
