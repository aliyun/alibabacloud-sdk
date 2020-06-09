// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class ModifyBackupPolicyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceID")]
        [Validation(Required=true)]
        public string DBInstanceID { get; set; }

        [NameInMap("EnableBackupLog")]
        [Validation(Required=true)]
        public string EnableBackupLog { get; set; }

        [NameInMap("LocalLogRetentionHours")]
        [Validation(Required=true)]
        public int? LocalLogRetentionHours { get; set; }

        [NameInMap("LocalLogRetentionSpace")]
        [Validation(Required=true)]
        public string LocalLogRetentionSpace { get; set; }

        [NameInMap("HighSpaceUsageProtection")]
        [Validation(Required=true)]
        public string HighSpaceUsageProtection { get; set; }

        [NameInMap("CompressType")]
        [Validation(Required=true)]
        public string CompressType { get; set; }

        [NameInMap("LogBackupLocalRetentionNumber")]
        [Validation(Required=true)]
        public int? LogBackupLocalRetentionNumber { get; set; }

    }

}
