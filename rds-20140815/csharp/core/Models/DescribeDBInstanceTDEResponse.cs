// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeDBInstanceTDEResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TDEStatus")]
        [Validation(Required=true)]
        public string TDEStatus { get; set; }

        [NameInMap("Databases")]
        [Validation(Required=true)]
        public DescribeDBInstanceTDEResponseDatabases Databases { get; set; }
        public class DescribeDBInstanceTDEResponseDatabases : TeaModel {
            [NameInMap("Database")]
            [Validation(Required=true)]
            public List<DescribeDBInstanceTDEResponseDatabasesDatabase> Database { get; set; }
            public class DescribeDBInstanceTDEResponseDatabasesDatabase : TeaModel {
                    public string DBName { get; set; }
                    public string TDEStatus { get; set; }
            }
        };

    }

}
