// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.eci.models;

import com.aliyun.tea.*;

public class DescribeContainerGroupMetricRequest extends TeaModel {
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

    @NameInMap("StartTime")
    public String startTime;

    @NameInMap("EndTime")
    public String endTime;

    @NameInMap("Period")
    public String period;

    public static DescribeContainerGroupMetricRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeContainerGroupMetricRequest self = new DescribeContainerGroupMetricRequest();
        return TeaModel.build(map, self);
    }

}
