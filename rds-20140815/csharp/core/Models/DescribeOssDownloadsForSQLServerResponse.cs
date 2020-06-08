// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeOssDownloadsForSQLServerResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceName")]
        [Validation(Required=true)]
        public string DBInstanceName { get; set; }

        [NameInMap("MigrateIaskId")]
        [Validation(Required=true)]
        public string MigrateIaskId { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeOssDownloadsForSQLServerResponseItems Items { get; set; }
        public class DescribeOssDownloadsForSQLServerResponseItems : TeaModel {
            [NameInMap("OssDownload")]
            [Validation(Required=true)]
            public List<DescribeOssDownloadsForSQLServerResponseItemsOssDownload> OssDownload { get; set; }
            public class DescribeOssDownloadsForSQLServerResponseItemsOssDownload : TeaModel {
                    public string FileName { get; set; }
                    public string CreateTime { get; set; }
                    public string BakType { get; set; }
                    public string FileSize { get; set; }
                    public string Status { get; set; }
                    public string IsAvail { get; set; }
                    public string Desc { get; set; }
            }
        };

    }

}
