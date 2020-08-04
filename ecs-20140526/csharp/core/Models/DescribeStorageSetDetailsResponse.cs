// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeStorageSetDetailsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Disks")]
        [Validation(Required=true)]
        public DescribeStorageSetDetailsResponseDisks Disks { get; set; }
        public class DescribeStorageSetDetailsResponseDisks : TeaModel {
            [NameInMap("Disk")]
            [Validation(Required=true)]
            public List<DescribeStorageSetDetailsResponseDisksDisk> Disk { get; set; }
            public class DescribeStorageSetDetailsResponseDisksDisk : TeaModel {
                    public string DiskId { get; set; }
                    public string DiskName { get; set; }
                    public string Category { get; set; }
                    public string StorageSetId { get; set; }
                    public string CreationTime { get; set; }
                    public int? StorageSetPartitionNumber { get; set; }
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
            }
        };

    }

}
