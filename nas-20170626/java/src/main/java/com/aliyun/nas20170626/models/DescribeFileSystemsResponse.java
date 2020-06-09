// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeFileSystemsResponse extends TeaModel {
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

    @NameInMap("FileSystems")
    @Validation(required = true)
    public DescribeFileSystemsResponseFileSystems fileSystems;

    public static DescribeFileSystemsResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeFileSystemsResponse self = new DescribeFileSystemsResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget extends TeaModel {
        @NameInMap("MountTargetDomain")
        @Validation(required = true)
        public String mountTargetDomain;

        @NameInMap("NetworkType")
        @Validation(required = true)
        public String networkType;

        @NameInMap("VpcId")
        @Validation(required = true)
        public String vpcId;

        @NameInMap("VswId")
        @Validation(required = true)
        public String vswId;

        @NameInMap("AccessGroupName")
        @Validation(required = true)
        public String accessGroupName;

        @NameInMap("Status")
        @Validation(required = true)
        public String status;

        public static DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget build(java.util.Map<String, ?> map) throws Exception {
            DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget self = new DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeFileSystemsResponseFileSystemsFileSystemMountTargets extends TeaModel {
        @NameInMap("MountTarget")
        @Validation(required = true)
        public java.util.List<DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget> mountTarget;

        public static DescribeFileSystemsResponseFileSystemsFileSystemMountTargets build(java.util.Map<String, ?> map) throws Exception {
            DescribeFileSystemsResponseFileSystemsFileSystemMountTargets self = new DescribeFileSystemsResponseFileSystemsFileSystemMountTargets();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage extends TeaModel {
        @NameInMap("PackageId")
        @Validation(required = true)
        public String packageId;

        @NameInMap("PackageType")
        @Validation(required = true)
        public String packageType;

        @NameInMap("Size")
        @Validation(required = true)
        public Long size;

        @NameInMap("StartTime")
        @Validation(required = true)
        public String startTime;

        @NameInMap("ExpiredTime")
        @Validation(required = true)
        public String expiredTime;

        public static DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage build(java.util.Map<String, ?> map) throws Exception {
            DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage self = new DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeFileSystemsResponseFileSystemsFileSystemPackages extends TeaModel {
        @NameInMap("Package")
        @Validation(required = true)
        public java.util.List<DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage> _package;

        public static DescribeFileSystemsResponseFileSystemsFileSystemPackages build(java.util.Map<String, ?> map) throws Exception {
            DescribeFileSystemsResponseFileSystemsFileSystemPackages self = new DescribeFileSystemsResponseFileSystemsFileSystemPackages();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeFileSystemsResponseFileSystemsFileSystemLdap extends TeaModel {
        @NameInMap("BindDN")
        @Validation(required = true)
        public String bindDN;

        @NameInMap("URI")
        @Validation(required = true)
        public String URI;

        @NameInMap("SearchBase")
        @Validation(required = true)
        public String searchBase;

        public static DescribeFileSystemsResponseFileSystemsFileSystemLdap build(java.util.Map<String, ?> map) throws Exception {
            DescribeFileSystemsResponseFileSystemsFileSystemLdap self = new DescribeFileSystemsResponseFileSystemsFileSystemLdap();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures extends TeaModel {
        @NameInMap("SupportedFeature")
        @Validation(required = true)
        public java.util.List<String> supportedFeature;

        public static DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures build(java.util.Map<String, ?> map) throws Exception {
            DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures self = new DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeFileSystemsResponseFileSystemsFileSystem extends TeaModel {
        @NameInMap("FileSystemId")
        @Validation(required = true)
        public String fileSystemId;

        @NameInMap("Description")
        @Validation(required = true)
        public String description;

        @NameInMap("CreateTime")
        @Validation(required = true)
        public String createTime;

        @NameInMap("ExpiredTime")
        @Validation(required = true)
        public String expiredTime;

        @NameInMap("RegionId")
        @Validation(required = true)
        public String regionId;

        @NameInMap("ZoneId")
        @Validation(required = true)
        public String zoneId;

        @NameInMap("ProtocolType")
        @Validation(required = true)
        public String protocolType;

        @NameInMap("StorageType")
        @Validation(required = true)
        public String storageType;

        @NameInMap("FileSystemType")
        @Validation(required = true)
        public String fileSystemType;

        @NameInMap("EncryptType")
        @Validation(required = true)
        public Integer encryptType;

        @NameInMap("MeteredSize")
        @Validation(required = true)
        public Long meteredSize;

        @NameInMap("MeteredIASize")
        @Validation(required = true)
        public Long meteredIASize;

        @NameInMap("Bandwidth")
        @Validation(required = true)
        public Long bandwidth;

        @NameInMap("Capacity")
        @Validation(required = true)
        public Long capacity;

        @NameInMap("AutoSnapshotPolicyId")
        @Validation(required = true)
        public String autoSnapshotPolicyId;

        @NameInMap("Status")
        @Validation(required = true)
        public String status;

        @NameInMap("ChargeType")
        @Validation(required = true)
        public String chargeType;

        @NameInMap("MountTargetCountLimit")
        @Validation(required = true)
        public Long mountTargetCountLimit;

        @NameInMap("NasNamespaceId")
        @Validation(required = true)
        public String nasNamespaceId;

        @NameInMap("KMSKeyId")
        @Validation(required = true)
        public String KMSKeyId;

        @NameInMap("Version")
        @Validation(required = true)
        public String version;

        @NameInMap("MountTargets")
        @Validation(required = true)
        public DescribeFileSystemsResponseFileSystemsFileSystemMountTargets mountTargets;

        @NameInMap("Packages")
        @Validation(required = true)
        public DescribeFileSystemsResponseFileSystemsFileSystemPackages packages;

        @NameInMap("Ldap")
        @Validation(required = true)
        public DescribeFileSystemsResponseFileSystemsFileSystemLdap ldap;

        @NameInMap("SupportedFeatures")
        @Validation(required = true)
        public DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures supportedFeatures;

        public static DescribeFileSystemsResponseFileSystemsFileSystem build(java.util.Map<String, ?> map) throws Exception {
            DescribeFileSystemsResponseFileSystemsFileSystem self = new DescribeFileSystemsResponseFileSystemsFileSystem();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeFileSystemsResponseFileSystems extends TeaModel {
        @NameInMap("FileSystem")
        @Validation(required = true)
        public java.util.List<DescribeFileSystemsResponseFileSystemsFileSystem> fileSystem;

        public static DescribeFileSystemsResponseFileSystems build(java.util.Map<String, ?> map) throws Exception {
            DescribeFileSystemsResponseFileSystems self = new DescribeFileSystemsResponseFileSystems();
            return TeaModel.build(map, self);
        }

    }

}
