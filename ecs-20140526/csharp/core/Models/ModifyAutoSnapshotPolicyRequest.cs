// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyAutoSnapshotPolicyRequest : TeaModel {
        [NameInMap("SystemDiskPolicyEnabled")]
        [Validation(Required=false)]
        public bool? SystemDiskPolicyEnabled { get; set; }

        [NameInMap("SystemDiskPolicyTimePeriod")]
        [Validation(Required=false)]
        public int? SystemDiskPolicyTimePeriod { get; set; }

        [NameInMap("SystemDiskPolicyRetentionDays")]
        [Validation(Required=false)]
        public int? SystemDiskPolicyRetentionDays { get; set; }

        [NameInMap("SystemDiskPolicyRetentionLastWeek")]
        [Validation(Required=false)]
        public bool? SystemDiskPolicyRetentionLastWeek { get; set; }

        [NameInMap("DataDiskPolicyEnabled")]
        [Validation(Required=false)]
        public bool? DataDiskPolicyEnabled { get; set; }

        [NameInMap("DataDiskPolicyTimePeriod")]
        [Validation(Required=false)]
        public int? DataDiskPolicyTimePeriod { get; set; }

        [NameInMap("DataDiskPolicyRetentionDays")]
        [Validation(Required=false)]
        public int? DataDiskPolicyRetentionDays { get; set; }

        [NameInMap("DataDiskPolicyRetentionLastWeek")]
        [Validation(Required=false)]
        public bool? DataDiskPolicyRetentionLastWeek { get; set; }

    }

}
