// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
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

        [NameInMap("BackupLog")]
        [Validation(Required=true)]
        public string BackupLog { get; set; }

        [NameInMap("LogBackupRetentionPeriod")]
        [Validation(Required=true)]
        public int? LogBackupRetentionPeriod { get; set; }

        [NameInMap("EnableBackupLog")]
        [Validation(Required=true)]
        public string EnableBackupLog { get; set; }

        [NameInMap("LocalLogRetentionHours")]
        [Validation(Required=true)]
        public int? LocalLogRetentionHours { get; set; }

        [NameInMap("LocalLogRetentionSpace")]
        [Validation(Required=true)]
        public string LocalLogRetentionSpace { get; set; }

        [NameInMap("Duplication")]
        [Validation(Required=true)]
        public string Duplication { get; set; }

        [NameInMap("DuplicationContent")]
        [Validation(Required=true)]
        public string DuplicationContent { get; set; }

        [NameInMap("HighSpaceUsageProtection")]
        [Validation(Required=true)]
        public string HighSpaceUsageProtection { get; set; }

        [NameInMap("LogBackupFrequency")]
        [Validation(Required=true)]
        public string LogBackupFrequency { get; set; }

        [NameInMap("CompressType")]
        [Validation(Required=true)]
        public string CompressType { get; set; }

        [NameInMap("ArchiveBackupRetentionPeriod")]
        [Validation(Required=true)]
        public string ArchiveBackupRetentionPeriod { get; set; }

        [NameInMap("ArchiveBackupKeepPolicy")]
        [Validation(Required=true)]
        public string ArchiveBackupKeepPolicy { get; set; }

        [NameInMap("ArchiveBackupKeepCount")]
        [Validation(Required=true)]
        public string ArchiveBackupKeepCount { get; set; }

        [NameInMap("ReleasedKeepPolicy")]
        [Validation(Required=true)]
        public string ReleasedKeepPolicy { get; set; }

        [NameInMap("LogBackupLocalRetentionNumber")]
        [Validation(Required=true)]
        public int? LogBackupLocalRetentionNumber { get; set; }

        [NameInMap("DuplicationLocation")]
        [Validation(Required=true)]
        public DescribeBackupPolicyResponseDuplicationLocation DuplicationLocation { get; set; }
        public class DescribeBackupPolicyResponseDuplicationLocation : TeaModel {
            [NameInMap("Sotrage")]
            [Validation(Required=true)]
            public string Sotrage { get; set; }
            [NameInMap("Location")]
            [Validation(Required=true)]
            public DescribeBackupPolicyResponseDuplicationLocationLocation Location { get; set; }
            public class DescribeBackupPolicyResponseDuplicationLocationLocation : TeaModel {
                [NameInMap("Endpoint")]
                [Validation(Required=true)]
                public string Endpoint { get; set; }

                [NameInMap("Bucket")]
                [Validation(Required=true)]
                public string Bucket { get; set; }

            }
        };

    }

}
