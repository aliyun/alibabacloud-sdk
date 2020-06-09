// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeSnapshotsResponse extends TeaModel {
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

    @NameInMap("Snapshots")
    @Validation(required = true)
    public DescribeSnapshotsResponseSnapshots snapshots;

    public static DescribeSnapshotsResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeSnapshotsResponse self = new DescribeSnapshotsResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeSnapshotsResponseSnapshotsSnapshot extends TeaModel {
        @NameInMap("CreateTime")
        @Validation(required = true)
        public String createTime;

        @NameInMap("Description")
        @Validation(required = true)
        public String description;

        @NameInMap("Progress")
        @Validation(required = true)
        public String progress;

        @NameInMap("RemainTime")
        @Validation(required = true)
        public Integer remainTime;

        @NameInMap("RetentionDays")
        @Validation(required = true)
        public Integer retentionDays;

        @NameInMap("SnapshotId")
        @Validation(required = true)
        public String snapshotId;

        @NameInMap("SnapshotName")
        @Validation(required = true)
        public String snapshotName;

        @NameInMap("SourceFileSystemId")
        @Validation(required = true)
        public String sourceFileSystemId;

        @NameInMap("SourceFileSystemSize")
        @Validation(required = true)
        public Long sourceFileSystemSize;

        @NameInMap("Status")
        @Validation(required = true)
        public String status;

        @NameInMap("EncryptType")
        @Validation(required = true)
        public Integer encryptType;

        @NameInMap("SourceFileSystemVersion")
        @Validation(required = true)
        public String sourceFileSystemVersion;

        public static DescribeSnapshotsResponseSnapshotsSnapshot build(java.util.Map<String, ?> map) throws Exception {
            DescribeSnapshotsResponseSnapshotsSnapshot self = new DescribeSnapshotsResponseSnapshotsSnapshot();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeSnapshotsResponseSnapshots extends TeaModel {
        @NameInMap("Snapshot")
        @Validation(required = true)
        public java.util.List<DescribeSnapshotsResponseSnapshotsSnapshot> snapshot;

        public static DescribeSnapshotsResponseSnapshots build(java.util.Map<String, ?> map) throws Exception {
            DescribeSnapshotsResponseSnapshots self = new DescribeSnapshotsResponseSnapshots();
            return TeaModel.build(map, self);
        }

    }

}
