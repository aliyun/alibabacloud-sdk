// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeBackupLogsResponse : TeaModel {
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

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeBackupLogsResponseItems Items { get; set; }
        public class DescribeBackupLogsResponseItems : TeaModel {
            [NameInMap("BackupLog")]
            [Validation(Required=true)]
            public List<DescribeBackupLogsResponseItemsBackupLog> BackupLog { get; set; }
            public class DescribeBackupLogsResponseItemsBackupLog : TeaModel {
                    public string BackupLogId { get; set; }
                    public string BackupLogName { get; set; }
                    public string BackupLogStartTime { get; set; }
                    public string BackupLogEndTime { get; set; }
                    public string BackupLogSize { get; set; }
                    public string DownloadLink { get; set; }
                    public string IntranetDownloadLink { get; set; }
                    public string LinkExpiredTime { get; set; }
            }
        };

    }

}
