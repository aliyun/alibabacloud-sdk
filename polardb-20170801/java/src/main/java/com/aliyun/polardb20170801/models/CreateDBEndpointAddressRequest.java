// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.polardb20170801.models;

import com.aliyun.tea.*;

public class CreateDBEndpointAddressRequest extends TeaModel {
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

    @NameInMap("DBEndpointId")
    @Validation(required = true)
    public String DBEndpointId;

    @NameInMap("ConnectionStringPrefix")
    public String connectionStringPrefix;

    @NameInMap("NetType")
    @Validation(required = true)
    public String netType;

    public static CreateDBEndpointAddressRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateDBEndpointAddressRequest self = new CreateDBEndpointAddressRequest();
        return TeaModel.build(map, self);
    }

}
