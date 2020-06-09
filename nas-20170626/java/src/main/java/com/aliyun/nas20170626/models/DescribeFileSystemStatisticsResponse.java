// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeFileSystemStatisticsResponse extends TeaModel {
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

    @NameInMap("FileSystemStatistics")
    @Validation(required = true)
    public DescribeFileSystemStatisticsResponseFileSystemStatistics fileSystemStatistics;

    public static DescribeFileSystemStatisticsResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeFileSystemStatisticsResponse self = new DescribeFileSystemStatisticsResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic extends TeaModel {
        @NameInMap("FileSystemType")
        @Validation(required = true)
        public String fileSystemType;

        @NameInMap("TotalCount")
        @Validation(required = true)
        public Integer totalCount;

        @NameInMap("MeteredSize")
        @Validation(required = true)
        public Long meteredSize;

        @NameInMap("ExpiredCount")
        @Validation(required = true)
        public Integer expiredCount;

        @NameInMap("ExpiringCount")
        @Validation(required = true)
        public Integer expiringCount;

        public static DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic build(java.util.Map<String, ?> map) throws Exception {
            DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic self = new DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeFileSystemStatisticsResponseFileSystemStatistics extends TeaModel {
        @NameInMap("FileSystemStatistic")
        @Validation(required = true)
        public java.util.List<DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic> fileSystemStatistic;

        public static DescribeFileSystemStatisticsResponseFileSystemStatistics build(java.util.Map<String, ?> map) throws Exception {
            DescribeFileSystemStatisticsResponseFileSystemStatistics self = new DescribeFileSystemStatisticsResponseFileSystemStatistics();
            return TeaModel.build(map, self);
        }

    }

}
