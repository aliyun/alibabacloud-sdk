// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeBlackListClientsRequest extends TeaModel {
    @NameInMap("RegionId")
    @Validation(required = true)
    public String regionId;

    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("ClientIP")
    public String clientIP;

    public static DescribeBlackListClientsRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeBlackListClientsRequest self = new DescribeBlackListClientsRequest();
        return TeaModel.build(map, self);
    }

}
