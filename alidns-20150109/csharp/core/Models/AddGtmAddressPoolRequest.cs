// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class AddGtmAddressPoolRequest : TeaModel {
        [NameInMap("Lang")]
        [Validation(Required=false)]
        public string Lang { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Type")]
        [Validation(Required=true)]
        public string Type { get; set; }

        [NameInMap("MinAvailableAddrNum")]
        [Validation(Required=true)]
        public int? MinAvailableAddrNum { get; set; }

        [NameInMap("Addr")]
        [Validation(Required=true)]
        public List<AddGtmAddressPoolRequestAddr> Addr { get; set; }
        public class AddGtmAddressPoolRequestAddr : TeaModel {
            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

            [NameInMap("LbaWeight")]
            [Validation(Required=true)]
            public int? LbaWeight { get; set; }

            [NameInMap("Mode")]
            [Validation(Required=true)]
            public string Mode { get; set; }

        }

        [NameInMap("MonitorStatus")]
        [Validation(Required=false)]
        public string MonitorStatus { get; set; }

        [NameInMap("ProtocolType")]
        [Validation(Required=false)]
        public string ProtocolType { get; set; }

        [NameInMap("Interval")]
        [Validation(Required=false)]
        public int? Interval { get; set; }

        [NameInMap("EvaluationCount")]
        [Validation(Required=false)]
        public int? EvaluationCount { get; set; }

        [NameInMap("Timeout")]
        [Validation(Required=false)]
        public int? Timeout { get; set; }

        [NameInMap("MonitorExtendInfo")]
        [Validation(Required=false)]
        public string MonitorExtendInfo { get; set; }

        [NameInMap("IspCityNode")]
        [Validation(Required=false)]
        public List<AddGtmAddressPoolRequestIspCityNode> IspCityNode { get; set; }
        public class AddGtmAddressPoolRequestIspCityNode : TeaModel {
            [NameInMap("CityCode")]
            [Validation(Required=false)]
            public string CityCode { get; set; }

            [NameInMap("IspCode")]
            [Validation(Required=false)]
            public string IspCode { get; set; }

        }

    }

}
