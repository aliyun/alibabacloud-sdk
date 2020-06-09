// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class CreateAutoSnapshotPolicyRequest : TeaModel {
        [NameInMap("RepeatWeekdays")]
        [Validation(Required=true)]
        public string RepeatWeekdays { get; set; }

        [NameInMap("TimePoints")]
        [Validation(Required=true)]
        public string TimePoints { get; set; }

        [NameInMap("RetentionDays")]
        [Validation(Required=false)]
        public int? RetentionDays { get; set; }

        [NameInMap("AutoSnapshotPolicyName")]
        [Validation(Required=false)]
        public string AutoSnapshotPolicyName { get; set; }

        [NameInMap("FileSystemType")]
        [Validation(Required=true)]
        public string FileSystemType { get; set; }

    }

}
