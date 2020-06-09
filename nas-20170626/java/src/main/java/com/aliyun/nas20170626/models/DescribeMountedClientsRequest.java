// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeMountedClientsRequest extends TeaModel {
    @NameInMap("RegionId")
    @Validation(required = true)
    public String regionId;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("ClientIP")
    public String clientIP;

    @NameInMap("MountTargetDomain")
    @Validation(required = true)
    public String mountTargetDomain;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    public static DescribeMountedClientsRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeMountedClientsRequest self = new DescribeMountedClientsRequest();
        return TeaModel.build(map, self);
    }

}
