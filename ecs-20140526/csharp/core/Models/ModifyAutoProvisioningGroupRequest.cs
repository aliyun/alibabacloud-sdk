// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyAutoProvisioningGroupRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("AutoProvisioningGroupId")]
        [Validation(Required=false)]
        public string AutoProvisioningGroupId { get; set; }

        [NameInMap("ExcessCapacityTerminationPolicy")]
        [Validation(Required=false)]
        public string ExcessCapacityTerminationPolicy { get; set; }

        [NameInMap("DefaultTargetCapacityType")]
        [Validation(Required=false)]
        public string DefaultTargetCapacityType { get; set; }

        [NameInMap("TerminateInstancesWithExpiration")]
        [Validation(Required=false)]
        public bool? TerminateInstancesWithExpiration { get; set; }

        [NameInMap("MaxSpotPrice")]
        [Validation(Required=false)]
        public float? MaxSpotPrice { get; set; }

        [NameInMap("TotalTargetCapacity")]
        [Validation(Required=false)]
        public string TotalTargetCapacity { get; set; }

        [NameInMap("PayAsYouGoTargetCapacity")]
        [Validation(Required=false)]
        public string PayAsYouGoTargetCapacity { get; set; }

        [NameInMap("SpotTargetCapacity")]
        [Validation(Required=false)]
        public string SpotTargetCapacity { get; set; }

        [NameInMap("AutoProvisioningGroupName")]
        [Validation(Required=false)]
        public string AutoProvisioningGroupName { get; set; }

    }

}
