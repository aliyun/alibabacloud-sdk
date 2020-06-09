// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class ModifyAutoSnapshotPolicyRequest : TeaModel {
        [NameInMap("AutoSnapshotPolicyId")]
        [Validation(Required=true)]
        public string AutoSnapshotPolicyId { get; set; }

        [NameInMap("AutoSnapshotPolicyName")]
        [Validation(Required=false)]
        public string AutoSnapshotPolicyName { get; set; }

        [NameInMap("RepeatWeekdays")]
        [Validation(Required=false)]
        public string RepeatWeekdays { get; set; }

        [NameInMap("RetentionDays")]
        [Validation(Required=false)]
        public int? RetentionDays { get; set; }

        [NameInMap("TimePoints")]
        [Validation(Required=false)]
        public string TimePoints { get; set; }

    }

}
