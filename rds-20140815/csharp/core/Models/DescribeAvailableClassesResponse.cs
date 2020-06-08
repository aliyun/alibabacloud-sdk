// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeAvailableClassesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceClasses")]
        [Validation(Required=true)]
        public List<DescribeAvailableClassesResponseDBInstanceClasses> DBInstanceClasses { get; set; }
        public class DescribeAvailableClassesResponseDBInstanceClasses : TeaModel {
            [NameInMap("DBInstanceClass")]
            [Validation(Required=true)]
            public string DBInstanceClass { get; set; }

            [NameInMap("StorageRange")]
            [Validation(Required=true)]
            public string StorageRange { get; set; }

            [NameInMap("DBInstanceStorageRange")]
            [Validation(Required=true)]
            public DescribeAvailableClassesResponseDBInstanceClassesDBInstanceStorageRange DBInstanceStorageRange { get; set; }
            public class DescribeAvailableClassesResponseDBInstanceClassesDBInstanceStorageRange : TeaModel {
                [NameInMap("MaxValue")]
                [Validation(Required=true)]
                public int? MaxValue { get; set; }
                [NameInMap("MinValue")]
                [Validation(Required=true)]
                public int? MinValue { get; set; }
                [NameInMap("Step")]
                [Validation(Required=true)]
                public int? Step { get; set; }
            };

        }

    }

}
