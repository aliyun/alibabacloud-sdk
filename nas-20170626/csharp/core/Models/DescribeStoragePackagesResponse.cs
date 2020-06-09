// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeStoragePackagesResponse : TeaModel {
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

        [NameInMap("Packages")]
        [Validation(Required=true)]
        public DescribeStoragePackagesResponsePackages Packages { get; set; }
        public class DescribeStoragePackagesResponsePackages : TeaModel {
            [NameInMap("Package")]
            [Validation(Required=true)]
            public List<DescribeStoragePackagesResponsePackagesPackage> Package { get; set; }
            public class DescribeStoragePackagesResponsePackagesPackage : TeaModel {
                    public string StartTime { get; set; }
                    public string StorageType { get; set; }
                    public string Status { get; set; }
                    public string FileSystemId { get; set; }
                    public string PackageId { get; set; }
                    public string ExpiredTime { get; set; }
                    public long Size { get; set; }
            }
        };

    }

}
