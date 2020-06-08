// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeResourceUsageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("DiskUsed")]
        [Validation(Required=true)]
        public long DiskUsed { get; set; }

        [NameInMap("DataSize")]
        [Validation(Required=true)]
        public long DataSize { get; set; }

        [NameInMap("LogSize")]
        [Validation(Required=true)]
        public long LogSize { get; set; }

        [NameInMap("BackupSize")]
        [Validation(Required=true)]
        public long BackupSize { get; set; }

        [NameInMap("BackupOssDataSize")]
        [Validation(Required=true)]
        public long BackupOssDataSize { get; set; }

        [NameInMap("BackupOssLogSize")]
        [Validation(Required=true)]
        public long BackupOssLogSize { get; set; }

        [NameInMap("SQLSize")]
        [Validation(Required=true)]
        public long SQLSize { get; set; }

        [NameInMap("ColdBackupSize")]
        [Validation(Required=true)]
        public long ColdBackupSize { get; set; }

        [NameInMap("BackupDataSize")]
        [Validation(Required=true)]
        public long BackupDataSize { get; set; }

        [NameInMap("BackupLogSize")]
        [Validation(Required=true)]
        public long BackupLogSize { get; set; }

        [NameInMap("PaidBackupSize")]
        [Validation(Required=true)]
        public long PaidBackupSize { get; set; }

        [NameInMap("ArchiveBackupSize")]
        [Validation(Required=true)]
        public long ArchiveBackupSize { get; set; }

    }

}
