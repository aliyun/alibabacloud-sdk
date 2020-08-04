// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeStorageSetsResponse : TeaModel {
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

        [NameInMap("StorageSets")]
        [Validation(Required=true)]
        public DescribeStorageSetsResponseStorageSets StorageSets { get; set; }
        public class DescribeStorageSetsResponseStorageSets : TeaModel {
            [NameInMap("StorageSet")]
            [Validation(Required=true)]
            public List<DescribeStorageSetsResponseStorageSetsStorageSet> StorageSet { get; set; }
            public class DescribeStorageSetsResponseStorageSetsStorageSet : TeaModel {
                    public string StorageSetId { get; set; }
                    public string CreationTime { get; set; }
                    public string StorageSetName { get; set; }
                    public string Description { get; set; }
                    public int? StorageSetPartitionNumber { get; set; }
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
            }
        };

    }

}
