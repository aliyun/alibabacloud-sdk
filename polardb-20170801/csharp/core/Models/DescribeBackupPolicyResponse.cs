// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeBackupPolicyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("BackupRetentionPeriod")]
        [Validation(Required=true)]
        public int? BackupRetentionPeriod { get; set; }

        [NameInMap("PreferredNextBackupTime")]
        [Validation(Required=true)]
        public string PreferredNextBackupTime { get; set; }

        [NameInMap("PreferredBackupTime")]
        [Validation(Required=true)]
        public string PreferredBackupTime { get; set; }

        [NameInMap("PreferredBackupPeriod")]
        [Validation(Required=true)]
        public string PreferredBackupPeriod { get; set; }

        [NameInMap("DataLevel1BackupRetentionPeriod")]
        [Validation(Required=true)]
        public string DataLevel1BackupRetentionPeriod { get; set; }

        [NameInMap("DataLevel2BackupRetentionPeriod")]
        [Validation(Required=true)]
        public string DataLevel2BackupRetentionPeriod { get; set; }

        [NameInMap("BackupRetentionPolicyOnClusterDeletion")]
        [Validation(Required=true)]
        public string BackupRetentionPolicyOnClusterDeletion { get; set; }

    }

}
