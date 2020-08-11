// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVpnGatewayResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VpnGatewayId")]
        [Validation(Required=true)]
        public string VpnGatewayId { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=true)]
        public string VSwitchId { get; set; }

        [NameInMap("InternetIp")]
        [Validation(Required=true)]
        public string InternetIp { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public long CreateTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public long EndTime { get; set; }

        [NameInMap("Spec")]
        [Validation(Required=true)]
        public string Spec { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("BusinessStatus")]
        [Validation(Required=true)]
        public string BusinessStatus { get; set; }

        [NameInMap("ChargeType")]
        [Validation(Required=true)]
        public string ChargeType { get; set; }

        [NameInMap("IpsecVpn")]
        [Validation(Required=true)]
        public string IpsecVpn { get; set; }

        [NameInMap("SslVpn")]
        [Validation(Required=true)]
        public string SslVpn { get; set; }

        [NameInMap("SslMaxConnections")]
        [Validation(Required=true)]
        public long SslMaxConnections { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=true)]
        public string Tag { get; set; }

        [NameInMap("EnableBgp")]
        [Validation(Required=true)]
        public bool? EnableBgp { get; set; }

        [NameInMap("AutoPropagate")]
        [Validation(Required=true)]
        public bool? AutoPropagate { get; set; }

        [NameInMap("Tags")]
        [Validation(Required=true)]
        public DescribeVpnGatewayResponseTags Tags { get; set; }
        public class DescribeVpnGatewayResponseTags : TeaModel {
            [NameInMap("Tag")]
            [Validation(Required=true)]
            public List<DescribeVpnGatewayResponseTagsTag> Tag { get; set; }
            public class DescribeVpnGatewayResponseTagsTag : TeaModel {
                    public string Key { get; set; }
                    public string Value { get; set; }
            }
        };

        [NameInMap("ReservationData")]
        [Validation(Required=true)]
        public DescribeVpnGatewayResponseReservationData ReservationData { get; set; }
        public class DescribeVpnGatewayResponseReservationData : TeaModel {
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("ReservationEndTime")]
            [Validation(Required=true)]
            public string ReservationEndTime { get; set; }
            [NameInMap("ReservationOrderType")]
            [Validation(Required=true)]
            public string ReservationOrderType { get; set; }
            [NameInMap("ReservationSpec")]
            [Validation(Required=true)]
            public string ReservationSpec { get; set; }
            [NameInMap("ReservationIpsec")]
            [Validation(Required=true)]
            public string ReservationIpsec { get; set; }
            [NameInMap("ReservationSsl")]
            [Validation(Required=true)]
            public string ReservationSsl { get; set; }
            [NameInMap("ReservationMaxConnections")]
            [Validation(Required=true)]
            public int? ReservationMaxConnections { get; set; }
        };

    }

}
