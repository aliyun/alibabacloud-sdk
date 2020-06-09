// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeBinlogFilesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalRecordCount")]
        [Validation(Required=true)]
        public int? TotalRecordCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("TotalFileSize")]
        [Validation(Required=true)]
        public long TotalFileSize { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeBinlogFilesResponseItems Items { get; set; }
        public class DescribeBinlogFilesResponseItems : TeaModel {
            [NameInMap("BinLogFile")]
            [Validation(Required=true)]
            public List<DescribeBinlogFilesResponseItemsBinLogFile> BinLogFile { get; set; }
            public class DescribeBinlogFilesResponseItemsBinLogFile : TeaModel {
                    public long FileSize { get; set; }
                    public string LogBeginTime { get; set; }
                    public string LogEndTime { get; set; }
                    public string DownloadLink { get; set; }
                    public string IntranetDownloadLink { get; set; }
                    public string LinkExpiredTime { get; set; }
                    public string Checksum { get; set; }
                    public string HostInstanceID { get; set; }
                    public string LogFileName { get; set; }
            }
        };

    }

}
