// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeStoragePackagesResponse extends TeaModel {
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

    @NameInMap("Packages")
    @Validation(required = true)
    public DescribeStoragePackagesResponsePackages packages;

    public static DescribeStoragePackagesResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeStoragePackagesResponse self = new DescribeStoragePackagesResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeStoragePackagesResponsePackagesPackage extends TeaModel {
        @NameInMap("StartTime")
        @Validation(required = true)
        public String startTime;

        @NameInMap("StorageType")
        @Validation(required = true)
        public String storageType;

        @NameInMap("Status")
        @Validation(required = true)
        public String status;

        @NameInMap("FileSystemId")
        @Validation(required = true)
        public String fileSystemId;

        @NameInMap("PackageId")
        @Validation(required = true)
        public String packageId;

        @NameInMap("ExpiredTime")
        @Validation(required = true)
        public String expiredTime;

        @NameInMap("Size")
        @Validation(required = true)
        public Long size;

        public static DescribeStoragePackagesResponsePackagesPackage build(java.util.Map<String, ?> map) throws Exception {
            DescribeStoragePackagesResponsePackagesPackage self = new DescribeStoragePackagesResponsePackagesPackage();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeStoragePackagesResponsePackages extends TeaModel {
        @NameInMap("Package")
        @Validation(required = true)
        public java.util.List<DescribeStoragePackagesResponsePackagesPackage> _package;

        public static DescribeStoragePackagesResponsePackages build(java.util.Map<String, ?> map) throws Exception {
            DescribeStoragePackagesResponsePackages self = new DescribeStoragePackagesResponsePackages();
            return TeaModel.build(map, self);
        }

    }

}
