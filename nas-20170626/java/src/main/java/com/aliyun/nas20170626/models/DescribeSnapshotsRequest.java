// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeSnapshotsRequest extends TeaModel {
    @NameInMap("FileSystemType")
    @Validation(required = true)
    public String fileSystemType;

    @NameInMap("FileSystemId")
    public String fileSystemId;

    @NameInMap("SnapshotIds")
    public String snapshotIds;

    @NameInMap("SnapshotName")
    public String snapshotName;

    @NameInMap("SnapshotType")
    public String snapshotType;

    @NameInMap("Status")
    public String status;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    public static DescribeSnapshotsRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeSnapshotsRequest self = new DescribeSnapshotsRequest();
        return TeaModel.build(map, self);
    }

}
