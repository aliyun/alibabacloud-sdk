// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDetachedBackupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public string TotalRecordCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public string PageNumber { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public string PageRecordCount { get; set; }

        [NameInMap("TotalBackupSize")]
        [Validation(Required=true)]
        public long TotalBackupSize { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeDetachedBackupsResponseItems Items { get; set; }
        public class DescribeDetachedBackupsResponseItems : TeaModel {
            [NameInMap("Backup")]
            [Validation(Required=true)]
            public List<DescribeDetachedBackupsResponseItemsBackup> Backup { get; set; }
            public class DescribeDetachedBackupsResponseItemsBackup : TeaModel {
                    public string BackupId { get; set; }
                    public string DBInstanceId { get; set; }
                    public string BackupStatus { get; set; }
                    public string BackupStartTime { get; set; }
                    public string BackupEndTime { get; set; }
                    public string BackupType { get; set; }
                    public string BackupMode { get; set; }
                    public string BackupMethod { get; set; }
                    public string BackupDownloadURL { get; set; }
                    public string BackupIntranetDownloadURL { get; set; }
                    public string BackupLocation { get; set; }
                    public string BackupExtractionStatus { get; set; }
                    public string BackupScale { get; set; }
                    public string BackupDBNames { get; set; }
                    public long TotalBackupSize { get; set; }
                    public long BackupSize { get; set; }
                    public string HostInstanceID { get; set; }
                    public string StoreStatus { get; set; }
                    public string MetaStatus { get; set; }
                    public string SlaveStatus { get; set; }
                    public long ConsistentTime { get; set; }
            }
        };

    }

}
