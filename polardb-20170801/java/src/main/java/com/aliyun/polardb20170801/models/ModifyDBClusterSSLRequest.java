// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.polardb20170801.models;

import com.aliyun.tea.*;

public class ModifyDBClusterSSLRequest extends TeaModel {
    @NameInMap("AccessKeyId")
    public String accessKeyId;

    @NameInMap("OwnerId")
    public Long ownerId;

    @NameInMap("ResourceOwnerAccount")
    public String resourceOwnerAccount;

    @NameInMap("ResourceOwnerId")
    public Long resourceOwnerId;

    @NameInMap("OwnerAccount")
    public String ownerAccount;

    @NameInMap("DBClusterId")
    @Validation(required = true)
    public String DBClusterId;

    @NameInMap("SSLEnabled")
    @Validation(required = true)
    public String SSLEnabled;

    @NameInMap("DBEndpointId")
    public String DBEndpointId;

    @NameInMap("NetType")
    public String netType;

    public static ModifyDBClusterSSLRequest build(java.util.Map<String, ?> map) throws Exception {
        ModifyDBClusterSSLRequest self = new ModifyDBClusterSSLRequest();
        return TeaModel.build(map, self);
    }

}
