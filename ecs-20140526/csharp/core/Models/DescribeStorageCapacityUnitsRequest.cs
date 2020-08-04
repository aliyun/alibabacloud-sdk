// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeStorageCapacityUnitsRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("Capacity")]
        [Validation(Required=false)]
        public int? Capacity { get; set; }

        [NameInMap("StorageCapacityUnitId")]
        [Validation(Required=false)]
        public List<string> StorageCapacityUnitId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=false)]
        public List<string> Status { get; set; }

        [NameInMap("AllocationType")]
        [Validation(Required=false)]
        public string AllocationType { get; set; }

    }

}
