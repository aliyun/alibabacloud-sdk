// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.polardb20170801.models;

import com.aliyun.tea.*;

public class ModifyDBClusterMonitorRequest extends TeaModel {
    @NameInMap("AccessKeyId")
    public String accessKeyId;

    @NameInMap("OwnerId")
    public Long ownerId;

    @NameInMap("ResourceOwnerAccount")
    public String resourceOwnerAccount;

    @NameInMap("ResourceOwnerId")
    public Long resourceOwnerId;

    @NameInMap("DBClusterId")
    @Validation(required = true)
    public String DBClusterId;

    @NameInMap("Period")
    @Validation(required = true)
    public String period;

    @NameInMap("OwnerAccount")
    public String ownerAccount;

    public static ModifyDBClusterMonitorRequest build(java.util.Map<String, ?> map) throws Exception {
        ModifyDBClusterMonitorRequest self = new ModifyDBClusterMonitorRequest();
        return TeaModel.build(map, self);
    }

}
