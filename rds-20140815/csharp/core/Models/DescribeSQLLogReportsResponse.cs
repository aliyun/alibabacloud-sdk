// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeSQLLogReportsResponse : TeaModel {
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
        public DescribeSQLLogReportsResponseItems Items { get; set; }
        public class DescribeSQLLogReportsResponseItems : TeaModel {
            [NameInMap("Item")]
            [Validation(Required=true)]
            public List<DescribeSQLLogReportsResponseItemsItem> Item { get; set; }
            public class DescribeSQLLogReportsResponseItemsItem : TeaModel {
                    public string ReportTime { get; set; }
                    public DescribeSQLLogReportsResponseItemsItemLatencyTopNItems LatencyTopNItems { get; set; }
                    public class DescribeSQLLogReportsResponseItemsItemLatencyTopNItems : TeaModel {
                        [NameInMap("LatencyTopNItem")]
                        [Validation(Required=true)]
                        public List<DescribeSQLLogReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem> LatencyTopNItem { get; set; }
                        public class DescribeSQLLogReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem : TeaModel {
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
                    public DescribeSQLLogReportsResponseItemsItemQPSTopNItems QPSTopNItems { get; set; }
                    public class DescribeSQLLogReportsResponseItemsItemQPSTopNItems : TeaModel {
                        [NameInMap("QPSTopNItem")]
                        [Validation(Required=true)]
                        public List<DescribeSQLLogReportsResponseItemsItemQPSTopNItemsQPSTopNItem> QPSTopNItem { get; set; }
                        public class DescribeSQLLogReportsResponseItemsItemQPSTopNItemsQPSTopNItem : TeaModel {
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
