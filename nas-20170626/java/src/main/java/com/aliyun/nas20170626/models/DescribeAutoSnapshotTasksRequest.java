// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeAutoSnapshotTasksRequest extends TeaModel {
    @NameInMap("FileSystemIds")
    public String fileSystemIds;

    @NameInMap("AutoSnapshotPolicyIds")
    public String autoSnapshotPolicyIds;

    @NameInMap("FileSystemType")
    @Validation(required = true)
    public String fileSystemType;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    public static DescribeAutoSnapshotTasksRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeAutoSnapshotTasksRequest self = new DescribeAutoSnapshotTasksRequest();
        return TeaModel.build(map, self);
    }

}
