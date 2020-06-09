// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.polardb20170801.models;

import com.aliyun.tea.*;

public class DescribeDBClusterAccessWhitelistRequest extends TeaModel {
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

    public static DescribeDBClusterAccessWhitelistRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeDBClusterAccessWhitelistRequest self = new DescribeDBClusterAccessWhitelistRequest();
        return TeaModel.build(map, self);
    }

}
