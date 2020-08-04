// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateAutoSnapshotPolicyRequest : TeaModel {
        [NameInMap("regionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("autoSnapshotPolicyName")]
        [Validation(Required=false)]
        public string AutoSnapshotPolicyName { get; set; }

        [NameInMap("timePoints")]
        [Validation(Required=true)]
        public string TimePoints { get; set; }

        [NameInMap("repeatWeekdays")]
        [Validation(Required=true)]
        public string RepeatWeekdays { get; set; }

        [NameInMap("retentionDays")]
        [Validation(Required=true)]
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

        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<CreateAutoSnapshotPolicyRequestTag> Tag { get; set; }
        public class CreateAutoSnapshotPolicyRequestTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

    }

}
