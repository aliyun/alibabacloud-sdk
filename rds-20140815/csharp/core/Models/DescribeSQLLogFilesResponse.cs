// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeSQLLogFilesResponse : TeaModel {
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

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeSQLLogFilesResponseItems Items { get; set; }
        public class DescribeSQLLogFilesResponseItems : TeaModel {
            [NameInMap("LogFile")]
            [Validation(Required=true)]
            public List<DescribeSQLLogFilesResponseItemsLogFile> LogFile { get; set; }
            public class DescribeSQLLogFilesResponseItemsLogFile : TeaModel {
                    public string FileID { get; set; }
                    public string LogStatus { get; set; }
                    public string LogDownloadURL { get; set; }
                    public string LogSize { get; set; }
                    public string LogStartTime { get; set; }
                    public string LogEndTime { get; set; }
            }
        };

    }

}
