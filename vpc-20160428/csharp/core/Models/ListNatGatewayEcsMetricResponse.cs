// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ListNatGatewayEcsMetricResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NextToken")]
        [Validation(Required=true)]
        public string NextToken { get; set; }

        [NameInMap("MaxResults")]
        [Validation(Required=true)]
        public int? MaxResults { get; set; }

        [NameInMap("MetricDataList")]
        [Validation(Required=true)]
        public List<ListNatGatewayEcsMetricResponseMetricDataList> MetricDataList { get; set; }
        public class ListNatGatewayEcsMetricResponseMetricDataList : TeaModel {
            [NameInMap("NatGatewayId")]
            [Validation(Required=true)]
            public string NatGatewayId { get; set; }

            [NameInMap("PrivateIpAddress")]
            [Validation(Required=true)]
            public string PrivateIpAddress { get; set; }

            [NameInMap("Timestamp")]
            [Validation(Required=true)]
            public long Timestamp { get; set; }

            [NameInMap("ActiveSessionNum")]
            [Validation(Required=true)]
            public long ActiveSessionNum { get; set; }

            [NameInMap("NewSessionRate")]
            [Validation(Required=true)]
            public long NewSessionRate { get; set; }

            [NameInMap("RxBps")]
            [Validation(Required=true)]
            public long RxBps { get; set; }

            [NameInMap("TxBps")]
            [Validation(Required=true)]
            public long TxBps { get; set; }

            [NameInMap("RxPps")]
            [Validation(Required=true)]
            public long RxPps { get; set; }

            [NameInMap("TxPps")]
            [Validation(Required=true)]
            public long TxPps { get; set; }

        }

    }

}
