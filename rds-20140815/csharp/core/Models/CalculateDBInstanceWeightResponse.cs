// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class CalculateDBInstanceWeightResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public CalculateDBInstanceWeightResponseItems Items { get; set; }
        public class CalculateDBInstanceWeightResponseItems : TeaModel {
            [NameInMap("DBInstanceWeight")]
            [Validation(Required=true)]
            public List<CalculateDBInstanceWeightResponseItemsDBInstanceWeight> DBInstanceWeight { get; set; }
            public class CalculateDBInstanceWeightResponseItemsDBInstanceWeight : TeaModel {
                    public string DBInstanceId { get; set; }
                    public string DBInstanceType { get; set; }
                    public string ReadonlyInstanceSQLDelayedTime { get; set; }
                    public string Availability { get; set; }
                    public string Weight { get; set; }
            }
        };

    }

}
