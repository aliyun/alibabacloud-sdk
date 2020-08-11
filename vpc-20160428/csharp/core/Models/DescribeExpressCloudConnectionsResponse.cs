// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeExpressCloudConnectionsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("ExpressCloudConnectionSet")]
        [Validation(Required=true)]
        public DescribeExpressCloudConnectionsResponseExpressCloudConnectionSet ExpressCloudConnectionSet { get; set; }
        public class DescribeExpressCloudConnectionsResponseExpressCloudConnectionSet : TeaModel {
            [NameInMap("ExpressCloudConnectionType")]
            [Validation(Required=true)]
            public List<DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionType> ExpressCloudConnectionType { get; set; }
            public class DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionType : TeaModel {
                    public string InstanceId { get; set; }
                    public string Status { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string GmtCreate { get; set; }
                    public string GmtModify { get; set; }
                    public string PeerCity { get; set; }
                    public string PeerLocation { get; set; }
                    public string PortType { get; set; }
                    public int? Bandwidth { get; set; }
                    public int? Distance { get; set; }
                    public string RedundantEccId { get; set; }
                    public string CircuitCode { get; set; }
                    public string Isp { get; set; }
                    public string Type { get; set; }
                    public string IdcSP { get; set; }
                    public string BusinessStatus { get; set; }
                    public string HasReservationData { get; set; }
                    public string ReservationBandwidth { get; set; }
                    public string ReservationInternetChargeType { get; set; }
                    public string ReservationActiveTime { get; set; }
                    public string ReservationOrderType { get; set; }
                    public string ApplicationType { get; set; }
                    public string ApplicationId { get; set; }
                    public string ApplicationStatus { get; set; }
                    public string ApplicationBandwidth { get; set; }
                    public string EndTime { get; set; }
                    public string ChargeType { get; set; }
                    public string ContactTel { get; set; }
                    public string ContactMail { get; set; }
                    public string IDCardNo { get; set; }
                    public string EstimatedTime { get; set; }
                    public string BgpAs { get; set; }
                    public string PeIp { get; set; }
                    public string CeIp { get; set; }
                    public string ConstructionPeriod { get; set; }
                    public DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionTypeVirtualBorderRouterModels VirtualBorderRouterModels { get; set; }
                    public class DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionTypeVirtualBorderRouterModels : TeaModel {
                        [NameInMap("VirtualBorderRouterModel")]
                        [Validation(Required=true)]
                        public List<DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionTypeVirtualBorderRouterModelsVirtualBorderRouterModel> VirtualBorderRouterModel { get; set; }
                        public class DescribeExpressCloudConnectionsResponseExpressCloudConnectionSetExpressCloudConnectionTypeVirtualBorderRouterModelsVirtualBorderRouterModel : TeaModel {
                            [NameInMap("InstanceId")]
                            [Validation(Required=true)]
                            public string InstanceId { get; set; }

                            [NameInMap("AccessPointId")]
                            [Validation(Required=true)]
                            public string AccessPointId { get; set; }

                            [NameInMap("PhysicalConnectionId")]
                            [Validation(Required=true)]
                            public string PhysicalConnectionId { get; set; }

                        }

                    }
            }
        };

    }

}
