// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeMountTargetsRequest extends TeaModel {
    @NameInMap("FileSystemId")
    @Validation(required = true)
    public String fileSystemId;

    @NameInMap("MountTargetDomain")
    public String mountTargetDomain;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    public static DescribeMountTargetsRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeMountTargetsRequest self = new DescribeMountTargetsRequest();
        return TeaModel.build(map, self);
    }

}
