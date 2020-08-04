// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeRecommendInstanceTypeRequest : TeaModel {
        [NameInMap("Cores")]
        [Validation(Required=false)]
        public int? Cores { get; set; }

        [NameInMap("Memory")]
        [Validation(Required=false)]
        public float? Memory { get; set; }

        [NameInMap("InstanceFamilyLevel")]
        [Validation(Required=false)]
        public string InstanceFamilyLevel { get; set; }

        [NameInMap("InstanceType")]
        [Validation(Required=false)]
        public string InstanceType { get; set; }

        [NameInMap("NetworkType")]
        [Validation(Required=true)]
        public string NetworkType { get; set; }

        [NameInMap("InstanceChargeType")]
        [Validation(Required=false)]
        public string InstanceChargeType { get; set; }

        [NameInMap("SpotStrategy")]
        [Validation(Required=false)]
        public string SpotStrategy { get; set; }

        [NameInMap("IoOptimized")]
        [Validation(Required=false)]
        public string IoOptimized { get; set; }

        [NameInMap("InstanceTypeFamily")]
        [Validation(Required=false)]
        public List<string> InstanceTypeFamily { get; set; }

        [NameInMap("PriorityStrategy")]
        [Validation(Required=false)]
        public string PriorityStrategy { get; set; }

        [NameInMap("MaxPrice")]
        [Validation(Required=false)]
        public float? MaxPrice { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=false)]
        public string ZoneId { get; set; }

        [NameInMap("SystemDiskCategory")]
        [Validation(Required=false)]
        public string SystemDiskCategory { get; set; }

        [NameInMap("Scene")]
        [Validation(Required=false)]
        public string Scene { get; set; }

    }

}
