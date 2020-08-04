// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeStorageCapacityUnitsResponse : TeaModel {
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

        [NameInMap("StorageCapacityUnits")]
        [Validation(Required=true)]
        public DescribeStorageCapacityUnitsResponseStorageCapacityUnits StorageCapacityUnits { get; set; }
        public class DescribeStorageCapacityUnitsResponseStorageCapacityUnits : TeaModel {
            [NameInMap("StorageCapacityUnit")]
            [Validation(Required=true)]
            public List<DescribeStorageCapacityUnitsResponseStorageCapacityUnitsStorageCapacityUnit> StorageCapacityUnit { get; set; }
            public class DescribeStorageCapacityUnitsResponseStorageCapacityUnitsStorageCapacityUnit : TeaModel {
                    public string RegionId { get; set; }
                    public string StorageCapacityUnitId { get; set; }
                    public string Name { get; set; }
                    public int? Capacity { get; set; }
                    public string Status { get; set; }
                    public string CreationTime { get; set; }
                    public string ExpiredTime { get; set; }
                    public string StartTime { get; set; }
                    public string Description { get; set; }
                    public string AllocationStatus { get; set; }
            }
        };

    }

}
