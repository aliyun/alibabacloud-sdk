// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeAutoSnapshotTasksResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("TotalCount")
    @Validation(required = true)
    public Integer totalCount;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    @NameInMap("PageNumber")
    @Validation(required = true)
    public Integer pageNumber;

    @NameInMap("AutoSnapshotTasks")
    @Validation(required = true)
    public DescribeAutoSnapshotTasksResponseAutoSnapshotTasks autoSnapshotTasks;

    public static DescribeAutoSnapshotTasksResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeAutoSnapshotTasksResponse self = new DescribeAutoSnapshotTasksResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask extends TeaModel {
        @NameInMap("SourceFileSystemId")
        @Validation(required = true)
        public String sourceFileSystemId;

        @NameInMap("AutoSnapshotPolicyId")
        @Validation(required = true)
        public String autoSnapshotPolicyId;

        public static DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask build(java.util.Map<String, ?> map) throws Exception {
            DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask self = new DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeAutoSnapshotTasksResponseAutoSnapshotTasks extends TeaModel {
        @NameInMap("AutoSnapshotTask")
        @Validation(required = true)
        public java.util.List<DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask> autoSnapshotTask;

        public static DescribeAutoSnapshotTasksResponseAutoSnapshotTasks build(java.util.Map<String, ?> map) throws Exception {
            DescribeAutoSnapshotTasksResponseAutoSnapshotTasks self = new DescribeAutoSnapshotTasksResponseAutoSnapshotTasks();
            return TeaModel.build(map, self);
        }

    }

}
