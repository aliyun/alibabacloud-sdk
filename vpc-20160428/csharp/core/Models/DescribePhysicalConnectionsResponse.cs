// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribePhysicalConnectionsResponse : TeaModel {
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

        [NameInMap("PhysicalConnectionSet")]
        [Validation(Required=true)]
        public DescribePhysicalConnectionsResponsePhysicalConnectionSet PhysicalConnectionSet { get; set; }
        public class DescribePhysicalConnectionsResponsePhysicalConnectionSet : TeaModel {
            [NameInMap("PhysicalConnectionType")]
            [Validation(Required=true)]
            public List<DescribePhysicalConnectionsResponsePhysicalConnectionSetPhysicalConnectionType> PhysicalConnectionType { get; set; }
            public class DescribePhysicalConnectionsResponsePhysicalConnectionSetPhysicalConnectionType : TeaModel {
                    public string PhysicalConnectionId { get; set; }
                    public string AccessPointId { get; set; }
                    public string Type { get; set; }
                    public string Status { get; set; }
                    public string BusinessStatus { get; set; }
                    public string CreationTime { get; set; }
                    public string EnabledTime { get; set; }
                    public string LineOperator { get; set; }
                    public string Spec { get; set; }
                    public string PeerLocation { get; set; }
                    public string PortType { get; set; }
                    public string RedundantPhysicalConnectionId { get; set; }
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string AdLocation { get; set; }
                    public string PortNumber { get; set; }
                    public string CircuitCode { get; set; }
                    public long Bandwidth { get; set; }
                    public string LoaStatus { get; set; }
                    public string HasReservationData { get; set; }
                    public string ReservationInternetChargeType { get; set; }
                    public string ReservationActiveTime { get; set; }
                    public string ReservationOrderType { get; set; }
                    public string EndTime { get; set; }
                    public string ChargeType { get; set; }
            }
        };

    }

}
