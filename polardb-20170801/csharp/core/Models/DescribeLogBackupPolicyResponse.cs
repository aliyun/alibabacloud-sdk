// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeLogBackupPolicyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("EnableBackupLog")]
        [Validation(Required=true)]
        public int? EnableBackupLog { get; set; }

        [NameInMap("LogBackupRetentionPeriod")]
        [Validation(Required=true)]
        public int? LogBackupRetentionPeriod { get; set; }

    }

}
