// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeFileSystemsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("FileSystems")]
        [Validation(Required=true)]
        public DescribeFileSystemsResponseFileSystems FileSystems { get; set; }
        public class DescribeFileSystemsResponseFileSystems : TeaModel {
            [NameInMap("FileSystem")]
            [Validation(Required=true)]
            public List<DescribeFileSystemsResponseFileSystemsFileSystem> FileSystem { get; set; }
            public class DescribeFileSystemsResponseFileSystemsFileSystem : TeaModel {
                    public string FileSystemId { get; set; }
                    public string Description { get; set; }
                    public string CreateTime { get; set; }
                    public string ExpiredTime { get; set; }
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
                    public string ProtocolType { get; set; }
                    public string StorageType { get; set; }
                    public string FileSystemType { get; set; }
                    public int? EncryptType { get; set; }
                    public long MeteredSize { get; set; }
                    public long MeteredIASize { get; set; }
                    public long Bandwidth { get; set; }
                    public long Capacity { get; set; }
                    public string AutoSnapshotPolicyId { get; set; }
                    public string Status { get; set; }
                    public string ChargeType { get; set; }
                    public long MountTargetCountLimit { get; set; }
                    public string NasNamespaceId { get; set; }
                    public string KMSKeyId { get; set; }
                    public string Version { get; set; }
                    public DescribeFileSystemsResponseFileSystemsFileSystemMountTargets MountTargets { get; set; }
                    public class DescribeFileSystemsResponseFileSystemsFileSystemMountTargets : TeaModel {
                        [NameInMap("MountTarget")]
                        [Validation(Required=true)]
                        public List<DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget> MountTarget { get; set; }
                        public class DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget : TeaModel {
                            [NameInMap("MountTargetDomain")]
                            [Validation(Required=true)]
                            public string MountTargetDomain { get; set; }

                            [NameInMap("NetworkType")]
                            [Validation(Required=true)]
                            public string NetworkType { get; set; }

                            [NameInMap("VpcId")]
                            [Validation(Required=true)]
                            public string VpcId { get; set; }

                            [NameInMap("VswId")]
                            [Validation(Required=true)]
                            public string VswId { get; set; }

                            [NameInMap("AccessGroupName")]
                            [Validation(Required=true)]
                            public string AccessGroupName { get; set; }

                            [NameInMap("Status")]
                            [Validation(Required=true)]
                            public string Status { get; set; }

                        }

                    }
                    public DescribeFileSystemsResponseFileSystemsFileSystemPackages Packages { get; set; }
                    public class DescribeFileSystemsResponseFileSystemsFileSystemPackages : TeaModel {
                        [NameInMap("Package")]
                        [Validation(Required=true)]
                        public List<DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage> Package { get; set; }
                        public class DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage : TeaModel {
                            [NameInMap("PackageId")]
                            [Validation(Required=true)]
                            public string PackageId { get; set; }

                            [NameInMap("PackageType")]
                            [Validation(Required=true)]
                            public string PackageType { get; set; }

                            [NameInMap("Size")]
                            [Validation(Required=true)]
                            public long Size { get; set; }

                            [NameInMap("StartTime")]
                            [Validation(Required=true)]
                            public string StartTime { get; set; }

                            [NameInMap("ExpiredTime")]
                            [Validation(Required=true)]
                            public string ExpiredTime { get; set; }

                        }

                    }
                    public DescribeFileSystemsResponseFileSystemsFileSystemLdap Ldap { get; set; }
                    public class DescribeFileSystemsResponseFileSystemsFileSystemLdap : TeaModel {
                        [NameInMap("BindDN")]
                        [Validation(Required=true)]
                        public string BindDN { get; set; }

                        [NameInMap("URI")]
                        [Validation(Required=true)]
                        public string URI { get; set; }

                        [NameInMap("SearchBase")]
                        [Validation(Required=true)]
                        public string SearchBase { get; set; }

                    }
                    public DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures SupportedFeatures { get; set; }
                    public class DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures : TeaModel {
                        [NameInMap("SupportedFeature")]
                        [Validation(Required=true)]
                        public List<string> SupportedFeature { get; set; }

                    }
            }
        };

    }

}
