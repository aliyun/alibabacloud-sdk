// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.eci.models;

import com.aliyun.tea.*;

public class DescribeContainerGroupPriceRequest extends TeaModel {
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

    @NameInMap("Cpu")
    @Validation(required = true)
    public Double cpu;

    @NameInMap("Memory")
    @Validation(required = true)
    public Double memory;

    public static DescribeContainerGroupPriceRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeContainerGroupPriceRequest self = new DescribeContainerGroupPriceRequest();
        return TeaModel.build(map, self);
    }

}
