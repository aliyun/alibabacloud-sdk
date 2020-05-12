// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class ScheduleKeyDeletionRequest : TeaModel {
        [NameInMap("KeyId")]
        [Validation(Required=true)]
        public string KeyId { get; set; }

        [NameInMap("PendingWindowInDays")]
        [Validation(Required=false)]
        public int? PendingWindowInDays { get; set; }

    }

}
