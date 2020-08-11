// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVpnGatewaysResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("VpnGateways")]
        [Validation(Required=true)]
        public DescribeVpnGatewaysResponseVpnGateways VpnGateways { get; set; }
        public class DescribeVpnGatewaysResponseVpnGateways : TeaModel {
            [NameInMap("VpnGateway")]
            [Validation(Required=true)]
            public List<DescribeVpnGatewaysResponseVpnGatewaysVpnGateway> VpnGateway { get; set; }
            public class DescribeVpnGatewaysResponseVpnGatewaysVpnGateway : TeaModel {
                    public string VpnGatewayId { get; set; }
                    public string VpcId { get; set; }
                    public string VSwitchId { get; set; }
                    public string InternetIp { get; set; }
                    public long CreateTime { get; set; }
                    public long EndTime { get; set; }
                    public string Spec { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string Status { get; set; }
                    public string BusinessStatus { get; set; }
                    public string ChargeType { get; set; }
                    public string IpsecVpn { get; set; }
                    public string SslVpn { get; set; }
                    public long SslMaxConnections { get; set; }
                    public string Tag { get; set; }
                    public bool? EnableBgp { get; set; }
                    public bool? AutoPropagate { get; set; }
                    public DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayTags Tags { get; set; }
                    public class DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayTagsTag> Tag { get; set; }
                        public class DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayTagsTag : TeaModel {
                            [NameInMap("Key")]
                            [Validation(Required=true)]
                            public string Key { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
                    public DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayReservationData ReservationData { get; set; }
                    public class DescribeVpnGatewaysResponseVpnGatewaysVpnGatewayReservationData : TeaModel {
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

                    }
            }
        };

    }

}
