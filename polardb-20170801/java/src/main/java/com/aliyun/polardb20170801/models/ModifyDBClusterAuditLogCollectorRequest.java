// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.polardb20170801.models;

import com.aliyun.tea.*;

public class ModifyDBClusterAuditLogCollectorRequest extends TeaModel {
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

    @NameInMap("CollectorStatus")
    @Validation(required = true)
    public String collectorStatus;

    @NameInMap("OwnerAccount")
    public String ownerAccount;

    public static ModifyDBClusterAuditLogCollectorRequest build(java.util.Map<String, ?> map) throws Exception {
        ModifyDBClusterAuditLogCollectorRequest self = new ModifyDBClusterAuditLogCollectorRequest();
        return TeaModel.build(map, self);
    }

}
