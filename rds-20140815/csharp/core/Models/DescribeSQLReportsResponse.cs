// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeSQLReportsResponse : TeaModel {
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
        public DescribeSQLReportsResponseItems Items { get; set; }
        public class DescribeSQLReportsResponseItems : TeaModel {
            [NameInMap("Item")]
            [Validation(Required=true)]
            public List<DescribeSQLReportsResponseItemsItem> Item { get; set; }
            public class DescribeSQLReportsResponseItemsItem : TeaModel {
                    public string ReportTime { get; set; }
                    public DescribeSQLReportsResponseItemsItemLatencyTopNItems LatencyTopNItems { get; set; }
                    public class DescribeSQLReportsResponseItemsItemLatencyTopNItems : TeaModel {
                        [NameInMap("LatencyTopNItem")]
                        [Validation(Required=true)]
                        public List<DescribeSQLReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem> LatencyTopNItem { get; set; }
                        public class DescribeSQLReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem : TeaModel {
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
                    public DescribeSQLReportsResponseItemsItemQPSTopNItems QPSTopNItems { get; set; }
                    public class DescribeSQLReportsResponseItemsItemQPSTopNItems : TeaModel {
                        [NameInMap("QPSTopNItem")]
                        [Validation(Required=true)]
                        public List<DescribeSQLReportsResponseItemsItemQPSTopNItemsQPSTopNItem> QPSTopNItem { get; set; }
                        public class DescribeSQLReportsResponseItemsItemQPSTopNItemsQPSTopNItem : TeaModel {
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
