// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeReadDBInstanceDelayResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("ReadDBInstanceId")]
        [Validation(Required=true)]
        public string ReadDBInstanceId { get; set; }

        [NameInMap("DelayTime")]
        [Validation(Required=true)]
        public int? DelayTime { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeReadDBInstanceDelayResponseItems Items { get; set; }
        public class DescribeReadDBInstanceDelayResponseItems : TeaModel {
            [NameInMap("Items")]
            [Validation(Required=true)]
            public List<DescribeReadDBInstanceDelayResponseItemsItems> Items { get; set; }
            public class DescribeReadDBInstanceDelayResponseItemsItems : TeaModel {
                    public string DBInstanceId { get; set; }
                    public DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelay ReadonlyInstanceDelay { get; set; }
                    public class DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelay : TeaModel {
                        [NameInMap("ReadonlyInstanceDelay")]
                        [Validation(Required=true)]
                        public List<DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelayReadonlyInstanceDelay> ReadonlyInstanceDelay { get; set; }
                        public class DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelayReadonlyInstanceDelay : TeaModel {
                            [NameInMap("ReplayLatency")]
                            [Validation(Required=true)]
                            public string ReplayLatency { get; set; }

                            [NameInMap("FlushLag")]
                            [Validation(Required=true)]
                            public string FlushLag { get; set; }

                            [NameInMap("FlushLatency")]
                            [Validation(Required=true)]
                            public string FlushLatency { get; set; }

                            [NameInMap("SendLatency")]
                            [Validation(Required=true)]
                            public string SendLatency { get; set; }

                            [NameInMap("WriteLag")]
                            [Validation(Required=true)]
                            public string WriteLag { get; set; }

                            [NameInMap("ReplayLag")]
                            [Validation(Required=true)]
                            public string ReplayLag { get; set; }

                            [NameInMap("WriteLatency")]
                            [Validation(Required=true)]
                            public string WriteLatency { get; set; }

                            [NameInMap("ReadDBInstanceName")]
                            [Validation(Required=true)]
                            public string ReadDBInstanceName { get; set; }

                        }

                    }
                    public DescribeReadDBInstanceDelayResponseItemsItemsReadDBInstanceNames ReadDBInstanceNames { get; set; }
                    public class DescribeReadDBInstanceDelayResponseItemsItemsReadDBInstanceNames : TeaModel {
                        [NameInMap("ReadDBInstanceName")]
                        [Validation(Required=true)]
                        public List<string> ReadDBInstanceName { get; set; }

                    }
                    public DescribeReadDBInstanceDelayResponseItemsItemsReadDelayTimes ReadDelayTimes { get; set; }
                    public class DescribeReadDBInstanceDelayResponseItemsItemsReadDelayTimes : TeaModel {
                        [NameInMap("ReadDelayTime")]
                        [Validation(Required=true)]
                        public List<string> ReadDelayTime { get; set; }

                    }
            }
        };

    }

}
