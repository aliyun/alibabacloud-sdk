// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstanceHAConfigResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("SyncMode")]
        [Validation(Required=true)]
        public string SyncMode { get; set; }

        [NameInMap("HAMode")]
        [Validation(Required=true)]
        public string HAMode { get; set; }

        [NameInMap("HostInstanceInfos")]
        [Validation(Required=true)]
        public DescribeDBInstanceHAConfigResponseHostInstanceInfos HostInstanceInfos { get; set; }
        public class DescribeDBInstanceHAConfigResponseHostInstanceInfos : TeaModel {
            [NameInMap("NodeInfo")]
            [Validation(Required=true)]
            public List<DescribeDBInstanceHAConfigResponseHostInstanceInfosNodeInfo> NodeInfo { get; set; }
            public class DescribeDBInstanceHAConfigResponseHostInstanceInfosNodeInfo : TeaModel {
                    public string NodeId { get; set; }
                    public string RegionId { get; set; }
                    public string LogSyncTime { get; set; }
                    public string DataSyncTime { get; set; }
                    public string NodeType { get; set; }
                    public string ZoneId { get; set; }
                    public string SyncStatus { get; set; }
            }
        };

    }

}
