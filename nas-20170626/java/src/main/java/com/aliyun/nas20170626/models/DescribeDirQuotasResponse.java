// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeDirQuotasResponse extends TeaModel {
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

    @NameInMap("DirQuotaInfos")
    @Validation(required = true)
    public java.util.List<DescribeDirQuotasResponseDirQuotaInfos> dirQuotaInfos;

    public static DescribeDirQuotasResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeDirQuotasResponse self = new DescribeDirQuotasResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos extends TeaModel {
        @NameInMap("UserType")
        @Validation(required = true)
        public String userType;

        @NameInMap("UserId")
        @Validation(required = true)
        public String userId;

        @NameInMap("QuotaType")
        @Validation(required = true)
        public String quotaType;

        @NameInMap("SizeLimit")
        @Validation(required = true)
        public Long sizeLimit;

        @NameInMap("SizeReal")
        @Validation(required = true)
        public Long sizeReal;

        @NameInMap("FileCountLimit")
        @Validation(required = true)
        public Long fileCountLimit;

        @NameInMap("FileCountReal")
        @Validation(required = true)
        public Long fileCountReal;

        public static DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos build(java.util.Map<String, ?> map) throws Exception {
            DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos self = new DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeDirQuotasResponseDirQuotaInfos extends TeaModel {
        @NameInMap("Path")
        @Validation(required = true)
        public String path;

        @NameInMap("DirInode")
        @Validation(required = true)
        public String dirInode;

        @NameInMap("Status")
        @Validation(required = true)
        public String status;

        @NameInMap("UserQuotaInfos")
        @Validation(required = true)
        public java.util.List<DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos> userQuotaInfos;

        public static DescribeDirQuotasResponseDirQuotaInfos build(java.util.Map<String, ?> map) throws Exception {
            DescribeDirQuotasResponseDirQuotaInfos self = new DescribeDirQuotasResponseDirQuotaInfos();
            return TeaModel.build(map, self);
        }

    }

}
