// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeResourcesModificationRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ResourceId")]
        [Validation(Required=true)]
        public string ResourceId { get; set; }

        [NameInMap("MigrateAcrossZone")]
        [Validation(Required=false)]
        public bool? MigrateAcrossZone { get; set; }

        [NameInMap("DestinationResource")]
        [Validation(Required=true)]
        public string DestinationResource { get; set; }

        [NameInMap("OperationType")]
        [Validation(Required=false)]
        public string OperationType { get; set; }

        [NameInMap("InstanceType")]
        [Validation(Required=false)]
        public string InstanceType { get; set; }

        [NameInMap("Cores")]
        [Validation(Required=false)]
        public int? Cores { get; set; }

        [NameInMap("Memory")]
        [Validation(Required=false)]
        public float? Memory { get; set; }

    }

}
