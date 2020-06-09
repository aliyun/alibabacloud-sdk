// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeAvailableRecoveryTimeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RecoveryBeginTime")]
        [Validation(Required=true)]
        public string RecoveryBeginTime { get; set; }

        [NameInMap("RecoveryEndTime")]
        [Validation(Required=true)]
        public string RecoveryEndTime { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("CrossBackupId")]
        [Validation(Required=true)]
        public int? CrossBackupId { get; set; }

    }

}
