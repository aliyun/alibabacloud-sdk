// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDiagnosticReportListResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ReportList")]
        [Validation(Required=true)]
        public List<DescribeDiagnosticReportListResponseReportList> ReportList { get; set; }
        public class DescribeDiagnosticReportListResponseReportList : TeaModel {
            [NameInMap("DiagnosticTime")]
            [Validation(Required=true)]
            public string DiagnosticTime { get; set; }

            [NameInMap("Score")]
            [Validation(Required=true)]
            public int? Score { get; set; }

            [NameInMap("StartTime")]
            [Validation(Required=true)]
            public string StartTime { get; set; }

            [NameInMap("EndTime")]
            [Validation(Required=true)]
            public string EndTime { get; set; }

            [NameInMap("DownloadURL")]
            [Validation(Required=true)]
            public string DownloadURL { get; set; }

        }

    }

}
