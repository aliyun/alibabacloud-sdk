// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeOssDownloadsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("MigrateTaskId")]
        [Validation(Required=true)]
        public string MigrateTaskId { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeOssDownloadsResponseItems Items { get; set; }
        public class DescribeOssDownloadsResponseItems : TeaModel {
            [NameInMap("OssDownload")]
            [Validation(Required=true)]
            public List<DescribeOssDownloadsResponseItemsOssDownload> OssDownload { get; set; }
            public class DescribeOssDownloadsResponseItemsOssDownload : TeaModel {
                    public string FileName { get; set; }
                    public string CreateTime { get; set; }
                    public string EndTime { get; set; }
                    public string BackupMode { get; set; }
                    public string FileSize { get; set; }
                    public string Status { get; set; }
                    public string IsAvailable { get; set; }
                    public string Description { get; set; }
            }
        };

    }

}
