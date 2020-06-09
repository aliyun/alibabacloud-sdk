// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeBackupTasksResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeBackupTasksResponseItems Items { get; set; }
        public class DescribeBackupTasksResponseItems : TeaModel {
            [NameInMap("BackupJob")]
            [Validation(Required=true)]
            public List<DescribeBackupTasksResponseItemsBackupJob> BackupJob { get; set; }
            public class DescribeBackupTasksResponseItemsBackupJob : TeaModel {
                    public string BackupProgressStatus { get; set; }
                    public string BackupStatus { get; set; }
                    public string JobMode { get; set; }
                    public string Process { get; set; }
                    public string TaskAction { get; set; }
                    public string BackupJobId { get; set; }
                    public string BackupId { get; set; }
            }
        };

    }

}
