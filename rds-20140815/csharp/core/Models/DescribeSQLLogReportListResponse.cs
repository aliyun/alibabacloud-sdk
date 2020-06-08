// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeSQLLogReportListResponse : TeaModel {
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
        public DescribeSQLLogReportListResponseItems Items { get; set; }
        public class DescribeSQLLogReportListResponseItems : TeaModel {
            [NameInMap("Item")]
            [Validation(Required=true)]
            public List<DescribeSQLLogReportListResponseItemsItem> Item { get; set; }
            public class DescribeSQLLogReportListResponseItemsItem : TeaModel {
                    public string ReportTime { get; set; }
                    public DescribeSQLLogReportListResponseItemsItemLatencyTopNItems LatencyTopNItems { get; set; }
                    public class DescribeSQLLogReportListResponseItemsItemLatencyTopNItems : TeaModel {
                        [NameInMap("LatencyTopNItem")]
                        [Validation(Required=true)]
                        public List<DescribeSQLLogReportListResponseItemsItemLatencyTopNItemsLatencyTopNItem> LatencyTopNItem { get; set; }
                        public class DescribeSQLLogReportListResponseItemsItemLatencyTopNItemsLatencyTopNItem : TeaModel {
                            [NameInMap("SQLText")]
                            [Validation(Required=true)]
                            public string SQLText { get; set; }

                            [NameInMap("AvgLatency")]
                            [Validation(Required=true)]
                            public long AvgLatency { get; set; }

                            [NameInMap("SQLExecuteTimes")]
                            [Validation(Required=true)]
                            public long SQLExecuteTimes { get; set; }

                        }

                    }
                    public DescribeSQLLogReportListResponseItemsItemQPSTopNItems QPSTopNItems { get; set; }
                    public class DescribeSQLLogReportListResponseItemsItemQPSTopNItems : TeaModel {
                        [NameInMap("QPSTopNItem")]
                        [Validation(Required=true)]
                        public List<DescribeSQLLogReportListResponseItemsItemQPSTopNItemsQPSTopNItem> QPSTopNItem { get; set; }
                        public class DescribeSQLLogReportListResponseItemsItemQPSTopNItemsQPSTopNItem : TeaModel {
                            [NameInMap("SQLText")]
                            [Validation(Required=true)]
                            public string SQLText { get; set; }

                            [NameInMap("SQLExecuteTimes")]
                            [Validation(Required=true)]
                            public long SQLExecuteTimes { get; set; }

                        }

                    }
            }
        };

    }

}
