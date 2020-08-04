// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyAutoSnapshotPolicyExRequest : TeaModel {
        [NameInMap("regionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("autoSnapshotPolicyId")]
        [Validation(Required=true)]
        public string AutoSnapshotPolicyId { get; set; }

        [NameInMap("autoSnapshotPolicyName")]
        [Validation(Required=false)]
        public string AutoSnapshotPolicyName { get; set; }

        [NameInMap("timePoints")]
        [Validation(Required=false)]
        public string TimePoints { get; set; }

        [NameInMap("repeatWeekdays")]
        [Validation(Required=false)]
        public string RepeatWeekdays { get; set; }

        [NameInMap("retentionDays")]
        [Validation(Required=false)]
        public int? RetentionDays { get; set; }

        [NameInMap("EnableCrossRegionCopy")]
        [Validation(Required=false)]
        public bool? EnableCrossRegionCopy { get; set; }

        [NameInMap("TargetCopyRegions")]
        [Validation(Required=false)]
        public string TargetCopyRegions { get; set; }

        [NameInMap("CopiedSnapshotsRetentionDays")]
        [Validation(Required=false)]
        public int? CopiedSnapshotsRetentionDays { get; set; }

    }

}
